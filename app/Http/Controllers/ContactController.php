<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{

    public function __invoke()
    {
        $data[] = [
            'name'          => 'Бредихін Вадим Вікторович',
            'designation'   => 'Декан факультету, к.т.н., доцент',
            'image'         => '/images/teachers/bredykhin-vadym.png',
            'href'          => 'http://btu.kharkov.ua/fakulteti-instituti/faculty-of-mechanotronics-and-engineering',
            'facebook'      => 'https://www.facebook.com/profile.blade.php?id=100004308101542',
            'viber'         => 'viber://add?number=+380952455789',
            'instagram'     => 'https://www.instagram.com/vad_bredikhin',
            'telegram'      => 'https://t.me/fmibtu',
            ];

        $data[] = [
            'name'          => 'Галич Іван Васильович',
            'designation'   => 'Заст. декана, к.т.н., ст викл.',
            'image'         => '/images/teachers/galych-ivan.png',
            'href'          => '',
            'facebook'      => 'https://www.facebook.com/galych.ivan',
            'viber'         => 'viber://add?number=+380978503682',
            'instagram'     => 'https://www.instagram.com/galych.ivan',
            'telegram'      => 'https://t.me/galych_ivan',
        ];

        $data[] = [
            'name'          => 'Маймуліна Олена Миколаївна',
            'designation'   => 'Методист, провідний фахівець',
            'image'         => '/images/teachers/majmulina-olena.png',
            'href'          => '',
            'facebook'      => 'https://www.facebook.com/profile.blade.php?"id=100013596877190',
            'viber'         => 'viber://add?number=+380972668675',
            'instagram'     => 'https://www.instagram.com/agromaster.pp.ua',
            'telegram'      => 'https://t.me/fmibtu',
        ];

//        $data[] = [
//            'name'          => '',
//            'designation'   => '',
//            'image'         => '',
//            'href'          => '',
//            'facebook'      => '',
//            'viber'         => '',
//            'instagram'     => '',
//            'telegram'      => '',
//        ];




        return view('edumate.contact', compact('data'));
    }


}
