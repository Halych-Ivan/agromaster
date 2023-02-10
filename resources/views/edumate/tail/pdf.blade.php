<!DOCTYPE html>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Аркуш успішності</title>

    <style>
        body {
            font-family: DejaVu Sans;
            width: 50%;
            /*margin: auto;*/
            padding-left: 40px;
            /*border: #0b2e13 solid 2px;*/
            border-right: grey dotted 1px;
        }

        p { margin: 0}

        .center {text-align: center;}
        .right {text-align: right;}

        .mt-5 {margin-top: 5px;}
        .mt-10 {margin-top: 10px;}
        .fs-14 {font-size: 14px;}
        .fs-12 {font-size: 12px;}
        .fs-10 {font-size: 10px;}
        a, .ip {color: grey}
    </style>

</head>
<body>
<p class="center fs-14 mt-5">ДЕРЖАВНИЙ БІОТЕХНОЛОГІЧНИЙ УНІВЕРСИТЕТ</p>
<p class="center fs-14">ФАКУЛЬТЕТ МЕХАТРОНІКИ ТА ІНЖИНІРИНГУ</p>
<p class="center mt-5 fs-12"><i>Денне навчання</i></p>
<p class="center mt-5 fs-14"><b>АРКУШ УСПІШНОСТІ СТУДЕНТА № <u>{{ $number }}</u></b></p>
<p class="center fs-10">(підшивається до основної відомості групи)</p>
<p class="center fs-14">форма контролю <u>{{ $exam }}</u></p>
<p class="fs-14 mt-5">Спеціальність: <u>{{ $speciality }}</u></p>
<p class="fs-14 mt-5">Дисципліна: <u>{{ $subject }}</u></p>
<p class="fs-14 mt-5">Викладач: <u>{{ $teacher }}</u></p>
<p class="fs-14 mt-5">ПІБ студента: <u>{{ $student }}</u></p>
<p class="fs-14 mt-5">№ залікової книжки: <u>{{ $plan }}</u></p>
<p class="fs-14 mt-5">Курс: <u>{{ $level }}</u> Група: <u>{{ $group }}</u></p>
<p class="fs-14 mt-5">Дата видачі {{ $date_in }}                                 </p>
<p class="fs-14 mt-5">Декан факультету _________ Вадим БРЕДИХІН</p>
<p class="fs-14 mt-5">Оцінка за національною шкалою <u>{{ $mark_n }}</u></p>
<p class="fs-14 mt-5">Бали <u>{{ $mark }}</u> ECTS <u>{{ $ects }}</u></p>
<p class="fs-14 mt-5">Дата складання: {{ $date }}
<p class="fs-14 mt-5">Підпис викладача: _________ {{ $teacher_short }}
<p class="right fs-12 mt-10 ip"><a href="http://agromaster.pp.ua">http://agromaster.pp.ua</a><br>{{ $IP }}</p>
<hr style="border: grey dotted 1px;">
</body>
</html>
