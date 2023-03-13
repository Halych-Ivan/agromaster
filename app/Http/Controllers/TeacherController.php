<?php

namespace App\Http\Controllers;

use App\Models\Cathedra;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Tail;
use App\Models\Teacher;
use Illuminate\Http\Request;



class TeacherController extends Controller
{

    public function show()
    {
        $teachers = Teacher::all();
        $cathedras = Cathedra::all();
        return view('edumate.teachers.index', compact('teachers', 'cathedras'));
    }



    public function index(Teacher $teacher, Request $request)
    {
        $data = $request->validate(['u' => ['string']]);

        if($data['u'] != md5($teacher->name)){
            return redirect()->route('home');
        }

        $arr = array();

        if($teacher->tails){
            $tails = explode("||", $teacher->tails);
            //array_pop($tails);
            foreach ($tails as $key => $value){
                $tail = Tail::query()->where('title', $value)->first();
                if($tail){
                    unset($tails[$key]);
                }
            }
            $teacher->tails = implode('||', $tails);
            $teacher->save();
        }

        if($teacher->tails){
            $tails = explode("||", $teacher->tails);
            array_pop($tails);
            foreach ($tails as $key => $value){
                $txt = explode('*', $value);
                $student = Student::query()
                    ->where('id', $txt[0])
                    ->select(['id', 'surname', 'name', 'patronymic', 'gradebook', 'group_id'])
                    ->first();
                $subject = Subject::query()
                    ->where('id', $txt[1])
                    ->select(['title', 'control'])
                    ->first();
                $date = $txt[3];
                $arr[] = ['student' => $student, 'subject' => $subject, 'tail' => $value, 'date' => $date];
            }
        }

        return view('teachers.index', compact('teacher', 'arr'));
    }

    public function adminAddTail(Teacher $teacher, Request $request)
    {
        $data = $request->validate(['link' => ['string']]);

        $link = $data['link'];
        $tail = Tail::query()->where('title', $link)->first();
        if(!$tail){
            $pos = strripos($teacher->tails, $link);
            if($pos === false){
                $teacher->tails .= $link . '||';
                $teacher->save();
            }
        }

        return redirect()->route('teacher', $teacher->id.'?u='.md5($teacher->name));
    }

}
