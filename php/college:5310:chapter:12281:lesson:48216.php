<?php

function repeatInString($haystack, $needle): int
{
    $counter = 0;
    if ($haystack === NULL || $needle === NULL){
        return (int)0;
    }elseif (strlen($haystack) == 0 || strlen($needle) == 0){
        return (int)0;
    }else{
        for($i = 0; $i < strlen($haystack); $i++){
            if (stripos($haystack,$needle, $i) !== false){
                $i = stripos($haystack,$needle, $i);
                $counter++;
            }else{
                break;
            }
        }
        return $counter;
    }
}
