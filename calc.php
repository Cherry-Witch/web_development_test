<?php
function LeapYearCheck($year) {
    if (($year % 4 == 0 && $year % 100 != 0) 
        || ($year % 400 == 0)) {
        return 365;
    } else {
        return 366;
    }
}

$percent = 10;


if(empty($_POST['summn-1']) && empty($_POST['summadd']) && empty($_POST['daysn'])){
    echo("Ошибка");
}
else {
    if(($_POST["summn-1"] && $_POST["summadd"] && $_POST["daysn"]) != (0 || null)){
        $summOne = strip_tags($_POST["summn-1"]);
        $summTwo = strip_tags($_POST["summadd"]);
        $daysYear = strip_tags($_POST["year"]);
        $isIncome = strip_tags($_POST["radio"]);
        $pickedDate = strip_tags($_POST["daysn"]);

        list($daysn['d'], $daysn['m'], $daysn['y']) = explode(".", $pickedDate);
        $currentYear = $daysn['y'];
        $daysn = cal_days_in_month(CAL_GREGORIAN, $daysn['m'], $daysn['y']);

        $yearInDays = [
            LeapYearCheck($currentYear + 1) * 1,
            LeapYearCheck($currentYear + 2) * 2,
            LeapYearCheck($currentYear + 3) * 3,
            LeapYearCheck($currentYear + 4) * 4,
            LeapYearCheck($currentYear + 5) * 5,
        ];

        if ($isIncome != "true") {
            $summTwo = 0;
        }

        $summn = round($summOne + ($summOne + $summTwo) * $daysn * ($percent / $yearInDays[$daysYear]), 2);

        echo("$summn руб");
    }
    else {
        echo("Ошибка");
    }
}
?>