<?php


session_start();
$key = 'acslgjwhrtt#$%&@@FDHN0.648d6a523';
$isSessionValid = isset($_SESSION['username']) && $_SESSION['username'] === 'admin';

$isCookieValid = false;
if(isset($_COOKIE['token'])){
    $exepted_cookie = hash_hmac('sha256', 'admin', $key);
    if(hash_equals($exepted_cookie, $_COOKIE['token'])){
        $_SESSION['username'] = 'admin';
        $isCookieValid = true;
    } else {
        unset($_SESSION['username']);
        $isSessionValid = false; 
    }
}

if($isSessionValid || $isCookieValid){
    echo 'Hello from Quera!';
}else{
    header('Location: login.html');
    exit();
}

