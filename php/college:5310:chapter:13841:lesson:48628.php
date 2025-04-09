<?php

function formatPhoneNumber($phone)
{
    $phone = (string)$phone;
    if (substr($phone,0,2) != "09") {
        return NULL;
    } else {
        return "+98".substr($phone,1,10);
    }
}


