<?php

session_start();

$hash_pass = '$2y$10$iySI6h4XZgCHw3FxXYb97Oa/8qQOSQkD.U8XgXSDt9RW5Ph.8m6IS';
$key = 'acslgjwhrtt#$%&@@FDHN0.648d6a523';

$isSessionValid = isset($_SESSION['username']) && $_SESSION['username'] == 'admin';
$isCookieValid = false;
if(isset($_COOKIE['token'])){
    $exepted_cookie = hash_hmac('sha256', 'admin', $key);
    if(hash_equals($exepted_cookie, $_COOKIE['token'])){
        $_SESSION['username'] = 'admin';
        $isCookieValid = true;
    }
}

if($isSessionValid || $isCookieValid){
    header('Location: index.php');
    exit();
}elseif(isset($_POST['username'], $_POST['password'])){
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $checkbox = $_POST['remember'] ?? null;
    if($username == 'admin' && (password_verify($password, $hash_pass))){
        if($checkbox === null){
            $_SESSION['username'] = 'admin';
        }else{
            $hash_name = hash_hmac('sha256', $username, $key);
            setcookie('token', $hash_name, time() + (3600 * 24 * 7));
        }
        header('Location: index.php');
        exit();
    }else{
        session_destroy();
        setcookie( "token", '', strtotime( '-7 days' ) );
        header('Location: login.html');
        exit();
    }
}else{
    session_destroy();
    setcookie( "token", '', strtotime( '-7 days' ) );
    header('Location: login.html');
    exit(); 

}