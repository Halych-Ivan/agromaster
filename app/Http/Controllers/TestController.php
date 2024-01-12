<?php

namespace App\Http\Controllers;


use App\Imports\DataImport;
use App\Models\Cathedra;
use App\Models\Group;
use App\Models\Level;
use App\Models\Program;
use App\Models\Specialty;
use App\Models\Student;
use App\Models\Subject;

class TestController extends Controller
{

    public function __invoke()
    {

    }



    public function index()
    {
        $cath = Cathedra::find(1);

        dd($cath->subjects);




//        $student = Student::find(55);
//        $subject = Subject::find(18);
//
////        $subject->students()->attach(54);
////        $subject->students()->sync(53);
////        $subject->students()->detach();
//
//        $student->subjects()->syncWithoutDetaching($subject->id);
//
//
//
//
//
//
//
//        //$student->subjects = $subject;
//        //$student->save();


//        dd($student->subjects);



    }

    public function seed()
    {
        set_time_limit(0);
//        $data = (new DataImport)->toArray('excel/00000.xlsx');
//        $specialties = $data[0];
//        foreach ($specialties as $specialty){
//            $item = Specialty::where('code', $specialty[1])->first();
//            if(!$item){ $item = new Specialty(); }
//            $item->code = $specialty[1];
//            $item->title = $specialty[2];
//            $item->save();
//        }
//        echo 'specialties - ok - '. date("Y-m-d H:i:s").'<br>';

//        $data = (new DataImport)->toArray('excel/00001.xlsx');
//        $levels = $data[0];
//        foreach ($levels as $level){
//            $item = Level::where('title', $level[1])->first();
//            if(!$item){ $item = new Level(); }
//            $item->title = $level[1];
//            $item->save();
//        }
//        echo 'levels - ok - '. date("Y-m-d H:i:s").'<br>';

//        $data = (new DataImport)->toArray('excel/00002.xlsx');
//        $programs = $data[0];
//        foreach ($programs as $program){
//            $item = Program::where('title', $program[1])->first();
//            if(!$item){ $item = new Program(); }
//            $item->title = $program[1];
//            $item->type = $program[2];
//            $item->specialty_id = Specialty::find($program[3])->id;
//            $item->level_id = Level::find($program[4])->id;
//            $item->save();
//        }
//        echo 'programs - ok - '. date("Y-m-d H:i:s").'<br>';



//        $data = (new DataImport)->toArray('excel/2023-2024-Groups.xlsx');
//        $groups = $data[0];
//
////        dd($groups);
//
//        foreach ($groups as $group){
//            $item = Group::where('title', $group[1])->first();
//            if(!$item){ $item = new Group(); }
//            $item->title = $group[1];
//            $item->name = $group[2];
//            $item->entry = $group[3];
//            $item->term = $group[4];
//            $item->program_id = Program::find($group[5])->id;
//            $item->save();
//        }
//        echo 'groups - ok - '. date("Y-m-d H:i:s").'<br>';



        $data = (new DataImport)->toArray('excel/2023-2024-Stud.xlsx');
        $students = $data[0];

       // dd($students[2]);

        $this->add($students);
        echo 'students - ok - '. date("Y-m-d H:i:s").'<br>';



//        $data = (new DataImport)->toArray('excel/00004.xlsx');
//        $subjects = $data[0];
//        //dd($subjects);
//        foreach ($subjects as $subject){
//            if($subject[5] != 'ok') continue;
//
//            //echo $subject[2].' '.$subject[4].' '.$subject[9].'<br>';
//            //if($subject[0] == '') continue;
//            $item = new Subject();
////            $item = Subject::where('title', $subject[4])->where('semester',$subject[2])->first();
////            if(!$item){ $item = new Subject(); }
//            $item->title = $subject[4];
//            $item->size = $subject[6];
//            $item->control = $subject[7];
//            $item->teacher = $subject[9];
//            $item->semester = $subject[2];
//
//            $item->save();
//        }
//        echo 'subjects - ok - '. date("Y-m-d H:i:s").'<br>';

    }

    public function add($arr)
    {
        foreach ($arr as $student){

//            $stud = Student::where('code_ident', $student[50])->first();

            $stud = new Student();

            $stud->surname = $student[7];
            $stud->name = $student[8];
            $stud->patronymic = $student[9];
//            $stud->photo = '';
//            $stud->sex = $student[13];
//            $stud->birth = $student[17];
//            $stud->phone = $student[18];
//            $stud->email = $student[70];

//            $stud->passport = '';
//            $stud->passport_series = $student[44];
//            $stud->passport_number = $student[45];
//            $stud->passport_record = $student[49];
//            $stud->passport_date_issue = $student[46];
//            $stud->passport_date_expiry = $student[47];
//            $stud->passport_date_authority = $student[48];
//            $stud->passport_photo = '';
//            $stud->code_ident = $student[50];

//            $stud->student_id = '';
//            $stud->student_id_series = $student[52];
//            $stud->student_id_number = $student[53];
//            $stud->student_id_photo = '';

//            $stud->address = $student[49];
//            $stud->address_region = $student[19];
//            $stud->address_district = $student[20];
//            $stud->address_city = $student[21];
//            $stud->address_street = $student[22] . ', ' .$student[23] . ', ' .$student[24];

//            $stud->school = $student[34];
//            $stud->school_document = $student[38];
//            $stud->school_document_series = $student[40];
//            $stud->school_document_number = $student[41];
//            $stud->school_document_date = $student[42];
//            $stud->school_document_photo = '';
//            $stud->school_document_mark = $student[43];

            $stud->gradebook = $student[14];
//            $stud->finance = $student[15];
//            $stud->case = $student[62];
//            $stud->contract = $student[63];
//            $stud->contract_sum = $student[67];
//            $stud->contract_date = $student[64];
//            $stud->study_start = $student[65];
//            $stud->study_end = $student[66];

//            $stud->order = '';
//            $stud->order_in = $student[54];
//            $stud->order_in_data = $student[55];
//            $stud->order_out = $student[56];
//            $stud->order_out_data = $student[57];
//
//            $stud->mentor = '';
//            $stud->info = '';

            $group_id = Group::where('name', $student[2])->first()->id;
            $stud->group_id = $group_id;

            $stud->save();
        }
    }
}
