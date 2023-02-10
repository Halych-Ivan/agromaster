<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Imports\DataImport;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Toaster;
use Spatie\Browsershot\Browsershot;


class CurriculumController extends Controller
{


    public function index()
    {
        return view('edumate.curriculum.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required|string',
            'level' => 'required|string',
        ]);

        $id = $request['number'];
        $level = $request['level'];

        switch ($level){
            case '1':
                $subjects = (new DataImport)->toArray('excel/sub-208-1.xlsx');
                $students = (new DataImport)->toArray('excel/stud-208-1.xlsx');
                $show = ['І', 'ІІ'];
                break;

            case '1pr':
            case '2':
            $subjects = (new DataImport)->toArray('excel/sub-208-2.xlsx');
                $students = (new DataImport)->toArray('excel/stud-208-2.xlsx');
                $show = ['ІІІ'];
                break;

            case '2pr':
            case '3':
                $subjects = (new DataImport)->toArray('excel/sub-208-3.xlsx');
                $students = (new DataImport)->toArray('excel/stud-208-3.xlsx');
                $show = ['V'];
                break;


            case '3pr':
            case '4':
                $subjects = (new DataImport)->toArray('excel/sub-208-4.xlsx');
                $students = (new DataImport)->toArray('excel/stud-208-4.xlsx');
                $show = ['VII', 'VIII'];
                break;

            case '1onp':
                $subjects = (new DataImport)->toArray('excel/sub-208M(ОНП).xlsx');
                $students = (new DataImport)->toArray('excel/stud-208M(ОНП).xlsx');
                $show = ['І'];
                break;

            case '1opp':
                $subjects = (new DataImport)->toArray('excel/sub-208M(ОПП).xlsx');
                $students = (new DataImport)->toArray('excel/stud-208M(ОПП).xlsx');
                $show = ['І'];
                break;

            default:
                toast('Сталася помилка. Спробуйте ще раз');
                return redirect()->route('curriculum');
        }

//      Отримуємо студента
        foreach ($students[0] as $item){
            if($id == $item[0]) {$stud = $item;}
            if($id == $item[2]) {$stud = $item;}
        }
//        dd($stud);

        if(!isset($stud)){
            toast('Уточніть номер залікової книжки або прізвище');
            return redirect()->route('curriculum');
        }

//      Змінюємо ключі массиву, отримуємо студента
        foreach ($stud as $key => $item){
            $student[$students[0][0][$key]] = $item;
        }
//        dd($student);
//        dd($subjects[0]);

//      Отримуємо дисципліни студента
        foreach ($subjects[0] as $key =>$item){
//            echo $key;

            if($key == 0) continue; // пропуск першого рядку
            $semester = $item[2]; // семестр в якому дисципліна викладається
            if(!$semester) continue; // семестр не вказано - пропускаємо
            if(!in_array($semester, $show)) continue; // Чи показуємо данний семестр?

//            dd($item[0]);
//            dd($item);


            if(key_exists($item[0], $student)){


//                dd($student, $item[0]);

                if($student[$item[0]] != null) { // заповнено вибір
//                    echo $item[0].'<br>';


//                    dd($subjects[0]);
                    foreach ($subjects[0] as $subOne){

//                        dd($subOne[0]);

//
                        if($student[$item[0]] == $subOne[0]){
                            foreach ($subOne as $key => $element){
                                if($key == 0) continue;
                                $item[$key] = $element;
                            }
//                            $item = $subOne;
//                            dd($student, $item, $subOne);
                        }
                    }
                }
            }
//            dd($item);
            $semesters[$semester][] = $item; // масив семестрів
        }
//        dd($semesters);

        return view('edumate.curriculum.show', compact('student', 'semesters'));


//        $main = (new DataImport)->toArray('excel/main.xlsx');
//        foreach ($main[0] as $item){
//            $data[$item[0]] = $item;
//        }
//
//
//        switch ($level){
//
//            case '1':
//                $array = (new DataImport)->toArray('excel/208-1.xlsx');
//                break;
//
//            case '3':
//                $array = (new DataImport)->toArray('excel/208-3.xlsx');
//                break;
//
//
//            default:
//                toast('Сталася помилка. Спробуйте ще раз');
//                return redirect()->route('curriculum');
//        }
//
//        foreach ($array[0] as $item){
//            if ($item[0] != $id) continue;
//            $plan = $item;
//        }
//
//        if(!isset($plan)){
//            toast('Уточніть номер залікової книжки');
//            return redirect()->route('curriculum');
//        }
//
////        dd($plan);

//        for ($i = 5; $i < 17; $i++){
//            if(!$plan[$i]) continue;
//            $sub[$plan[4]][] = $plan[$i];
//        }
//        for ($i = 18; $i < 30; $i++){
//            if(!$plan[$i]) continue;
//            $sub[$plan[17]][] = $plan[$i];
//        }
//        for ($i = 31; $i < 32; $i++){
//            if(!$plan[$i]) continue;
//            $sub[$plan[30]][] = $plan[$i];
//        }
//
//        return view('edumate.curriculum.show', compact('data', 'plan', 'sub'));
    }
}
