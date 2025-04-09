<?php

$num = readline();
$sum = 0;
while($num >= 10) {
    $sum += $num % 10;
    $num = (integer)($num / 10);
}
$sum += $num;
echo $sum;