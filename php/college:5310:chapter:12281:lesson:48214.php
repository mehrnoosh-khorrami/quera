<?php

function getExtension($fileAddress){
    $pos = strrpos($fileAddress,".");
    if($pos != false ){
        return substr($fileAddress,$pos + 1);
    } else{
        return "";
    }
}


