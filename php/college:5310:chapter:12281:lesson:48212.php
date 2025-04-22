<?php

$date = readline();
$year = (int)substr($date, 0, 4);
$month = (int)substr($date, 5, 2);
$day = (int)substr($date, 8, 2);
if (($year < 2018) || ($year == 2018 && $month < 10) || ($year == 2018 && $month == 10 && $day < 12)) {
    echo "gone";
}else{
    $date2 = date_create('2018-10-12');
    $date = date_create($date);
    echo date_diff($date2, $date)->format('%a');
}