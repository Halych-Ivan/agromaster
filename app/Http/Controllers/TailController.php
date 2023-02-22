<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Tail;
use App\Models\Teacher;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Imports\DataImport;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Toaster;
use Spatie\Browsershot\Browsershot;


class TailController extends Controller
{

    public function adminTailIndex()
    {

        return view('edumate.tail.admin_index');
    }


    public function adminTailPost(Request $request)
    {
        $data = $request->validate([
            'gradebook' => ['nullable', 'string', 'max:10'],
            'surname' => ['nullable', 'string', 'max:25'],
            'semester' => ['nullable', 'string', 'max:3'],
            'viberbot' => ['nullable', 'string', 'max:50'],
            'teacher' => ['nullable', 'string', 'max:50'],
        ]);
        if($data['semester'] == 'VV') $data['semester'] = 'VIII';
        $teacher = $data['teacher'] ?? '';

        if(isset($data['gradebook'])){
            $students = Student::query()
                ->where('gradebook', $data['gradebook'])
                ->select(['id', 'surname', 'name', 'group_id'])
                ->get();
        } elseif (isset($data['surname'])){
            $students = Student::query()
                ->where('surname', 'like', "%{$data['surname']}%")
                ->select(['id', 'surname', 'name', 'group_id'])
                ->get();
        } else {
            $students = false;
        }

        if(isset($data['semester'])){
            $subjects = Subject::query()
                ->where('semester', $data['semester'])
                ->select(['id', 'title', 'teacher'])
                ->get();
        } else {
            $subjects = false;
        }

        if(isset($data['viberbot'])){
            $link = 'https://bot.agromaster.pp.ua/send.php?id='.
                $data['viberbot'].
                '&url='.route('home').'/tail/';
        } else {
            $link = false;
        }

        $teachers = Teacher::query()->orderBy('name')->get();
        return view('edumate.tail.admin_store', compact('students', 'subjects', 'link', 'teacher', 'teachers'));
    }


    public function adminTailShow()
    {
        $tails = Tail::query()->orderBy('id', 'desc')->get();
        return view('edumate.tail.admin_show', compact('tails'));
    }


    public function index($tails)
    {
        $txt = explode('*', $tails);
        $tail = Tail::query()->where('title', $tails)->first();

        if($tail){
            $data = [
                'title' => '',
                'number' => $tail->id,
                'plan' => $tail->plan,
                'exam' => $tail->exam,
                'subject' => $tail->subject,
                'teacher' => $tail->teacher_short,
                'teacher_short' => $tail->teacher_short,
                'student' => $tail->student,
                'speciality' => $tail->speciality,
                'level' => $tail->level,
                'group' => $tail->group,
                'date_in' => $tail->date_in,
                'date' => $tail->date,
                'mark' => $tail->mark,
                'ects' => $tail->ects,
                'mark_n' => $tail->mark_n,
                'IP' => $tail->IP,
            ];
            $html = view('edumate.tail.pdf', $data)->render();
            $pdf = PDF::loadView('edumate.tail.pdf', $data);
            return $pdf->stream('Екз.лист - '.$tail->student.' - '.$tail->subject.'.pdf');
        }

        $student = Student::query()
            ->where('id', $txt[0])
            ->select(['id', 'surname', 'name', 'patronymic', 'gradebook', 'group_id'])
            ->first();
        $subject = Subject::query()
            ->where('id', $txt[1])
            ->select(['title', 'control'])
            ->first();

        if($txt[2] != md5($subject->title)) { return redirect()->route('home'); }

        $date_in = $txt[3];

        return view('edumate.tail.form', compact('student', 'subject', 'date_in', 'tails'));
    }


    public function resultPost(Request $request)
    {
        $data = $request->validate([
            'address_ip' => ['nullable', 'string', 'max:80'],
            'rang' => ['nullable', 'integer'],
            'teacher' => ['nullable', 'string', 'max:50'],
            'email' => ['nullable', 'string', 'max:50'],
            'tail' => ['string', 'max:100'],
        ]);

        $test = Tail::query()->where('title', $data['tail'])->first();

        $txt = explode('*', $data['tail']);

        $student = Student::find($txt[0]);
        $subject = Subject::find($txt[1]);

        // тест на проверку достоверности
        if($txt[2] != md5($subject->title)) { return redirect()->route('home'); }


        $exam = $subject->control; // 'залік'
        $mark = $data['rang'];
        if($mark > 59) {$ects = 'E'; $mark_n = 'задовільно';}
        if($mark > 64) {$ects = 'D'; $mark_n = 'задовільно';}
        if($mark > 73) {$ects = 'C'; $mark_n = 'добре';}
        if($mark > 81) {$ects = 'B'; $mark_n = 'добре';}
        if($mark > 89) {$ects = 'A'; $mark_n = 'відмінно';}
        if($exam == 'залік') {$mark_n = 'зараховано';}


        $tail = new Tail();
        $tail->ip = $data['address_ip'] ?? '';
        $tail->title = $data['tail'];
        $tail->plan = $student->gradebook;
        $tail->exam = $exam;
        $tail->subject = $subject->title;
        $tail->teacher = $subject->teacher;
        $tail->teacher_short = $data['teacher'];
        $tail->student = $student->surname.' '.$student->name.' '.$student->patronymic;
        $tail->speciality = $student->group->program->specialty->code.' '.$student->group->program->specialty->title;

        $level = substr($student->group->name, 0, 1);
        if($level == 5 ) $level = '1 (магістерський)';
        if($level == 6 ) $level = '2 (магістерський)';

        $tail->level = $level;
        $tail->group = $student->group->name.' ('.$student->group->title.')';
        $tail->date_in = $txt[3];
        $tail->date = date('d.m.Y');
        $tail->mark = $mark;
        $tail->ects = $ects;
        $tail->mark_n = $mark_n;
        $tail->save();

        toast('Оцінка прийнята','success');
        return redirect()->route('home');

        //dd($tail);

        $data = [
            'title' => '',
            'number' => $tail->id,
            'plan' => $tail->plan,
            'exam' => $tail->exam,
            'subject' => $tail->subject,
            'teacher' => $tail->teacher_short,
            'teacher_short' => $tail->teacher_short,
            'student' => $tail->student,
            'speciality' => $tail->speciality,
            'level' => $tail->level,
            'group' => $tail->group,
            'date_in' => $tail->date_in,
            'date' => $tail->date,
            'mark' => $tail->mark,
            'ects' => $tail->ects,
            'mark_n' => $tail->mark_n,
            'IP' => $tail->IP,
        ];
        $html = view('edumate.tail.pdf', $data)->render();
        $pdf = PDF::loadView('edumate.tail.pdf', $data);

        return $pdf->stream('Екз.лист - '.$student->surname.' - '.$subject->title.'.pdf');

        //return $pdf->download('laraveltuts.pdf');
        //return view('admin.tail.pdf', compact('student', 'subject'));
    }
}
