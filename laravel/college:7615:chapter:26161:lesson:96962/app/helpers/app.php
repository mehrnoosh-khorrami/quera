<?php


function get_info(){
    return config('app.name'). " - ". config('app.url');
}