<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if(empty($email) || empty($password)){
        echo 'invalid login';
    }elseif(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo 'invalid email format'; 
    }elseif(($email == 'admin@example.org') && (md5($password) == 'fc7d1bcf2447219eb208b96aa3d0a58c')) {
        echo'welcome admin';
    }else{
        echo 'invalid login';
    }
}
