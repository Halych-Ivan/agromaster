<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Imports\DataImport;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Browsershot\Browsershot;


class PdfGeneratorController extends Controller
{

    public function index_pdf($id)
    {
        $main = (new DataImport)->toArray('excel/main.xlsx');

        foreach ($main[0] as $item){
            $data[$item[0]] = $item;
        }

        $array = (new DataImport)->toArray('excel/test.xlsx');

        foreach ($array[0] as $item){
            if ($item[0] != $id) continue;
            $plan = $item;
        }

        for ($i = 5; $i < 17; $i++){
            if(!$plan[$i]) continue;
            $sub[$plan[4]][] = $plan[$i];
        }
        for ($i = 18; $i < 30; $i++){
            if(!$plan[$i]) continue;
            $sub[$plan[17]][] = $plan[$i];
        }

        $html = view('pdf-test', $data)->render();





        $pdf = PDF::loadView('pdf-test', $data);
        return $pdf->stream('pdf-test.pdf');

        //return view('pdf-test', $data);
    }


    public function index($id)
    {
        $main = (new DataImport)->toArray('excel/main.xlsx');

        foreach ($main[0] as $item){
            $data[$item[0]] = $item;
        }

        $array = (new DataImport)->toArray('excel/test.xlsx');

        foreach ($array[0] as $item){
            if ($item[0] != $id) continue;
            $plan = $item;
        }

        for ($i = 5; $i < 17; $i++){
            if(!$plan[$i]) continue;
            $sub[$plan[4]][] = $plan[$i];
        }
        for ($i = 18; $i < 30; $i++){
            if(!$plan[$i]) continue;
            $sub[$plan[17]][] = $plan[$i];
        }


//        dd($sub);





//        dd($collection);;
//
//
//        $data = [
//            'id'           => $id,
//
//            'name'         => $array[0][$id][1],
//
//        ];
//
//
//
//        $pdf = PDF::loadView('pdf-test', $data);
//        $pdf->stream('pdf-test.pdf');

        return view('edumate.individual_plan', compact('data', 'plan', 'sub'));



    }
}
