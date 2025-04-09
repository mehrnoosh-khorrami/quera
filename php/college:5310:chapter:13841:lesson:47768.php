<?php

function isPrime($n)
{
    switch ($n) {
        case 0 :
            return FALSE;
        case 1:
            return FALSE;
        case 2:
            return TRUE;
        default:
            $i = 2;
            while ($i ** 2 <= $n) {
                if($n % $i == 0){
                    return FALSE;
                }
                $i++;
            }
            return TRUE;
    }   
}


