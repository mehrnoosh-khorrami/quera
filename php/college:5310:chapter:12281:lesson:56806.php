<?php


$x = readline();
$remainingDays = 1;
$date =[
    'year' => (int)substr($x, 0, 4),
    'month' => (int)substr($x, 5, 2),
    'day' => (int)substr($x, 8, 2)
];
if ($date['month'] < 7){
    $remainingDays += ((31 - $date['day']) + ((6 - $date['month']) * 31) + 179);
}elseif ($date['month'] >= 7 && $date['month'] != 12){
    $remainingDays += ((30 - $date['day']) + ((11 - $date['month']) * 30) + 29);
}elseif ($date['month'] == 12){
    $remainingDays += (29 - $date['day']);
}
echo $remainingDays;