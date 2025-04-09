<?php

$n = readline();   
$name = [];
$repeat = [];
for ($i = 0; $i < $n; $i++) {
    $name[] = readline();
}
for ($i = 1; $i < $n; $i++) {
    $c = 0;
    for ($j = $i - 1; $j >= 0; $j--) {
        if ($name[$i] == $name[$j]){
            $c++;
        }
    }
    if (($c > 0 ) && (!(in_array($name[$i], $repeat)))){
        $repeat[] = $name[$i];
    }
}
foreach ($repeat as $i) {
    echo $i, "\n";
}