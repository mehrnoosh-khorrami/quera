<?php

function color(&$cube)
{
    for ($i = 0; $i < count($cube); $i++){
        for ($j = 0; $j < count($cube[$i]); $j++){
            for ($k = 0; $k < count($cube[$i][$j]); $k++){
                if(($i == 0) || ($i == count($cube) - 1)){
                    $cube[$i][$j][$k] = 1;
                } elseif(($j == 0) || ($j == count($cube[$i]) - 1)){
                    $cube[$i][$j][$k] = 1;
                }elseif(($k == 0) || ($k == count($cube[$i][$j]) - 1)){
                    $cube[$i][$j][$k] = 1;
                }else{
                    $cube[$i][$j][$k] = 0;
                }
            }
        }
    }
}