<?php

function formatCardNumber($n)
{
    if(!ctype_digit($n)){
        return NULL;
    } else {
        return substr($n,0,4)." ".substr($n,4,4)." ".substr($n,8,4)." ".substr($n,12,4);
    }
}
