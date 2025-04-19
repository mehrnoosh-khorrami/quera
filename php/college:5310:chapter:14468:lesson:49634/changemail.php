<?php


session_start();
$email = $_POST['email'] ?? '';
$csrf_token = $_POST['csrf_token'] ?? '';

if(!isset($_POST['email']) || empty($_POST['email'])) {
    echo "No email!";
}elseif(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo "Invalid email!";
}elseif(empty($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $csrf_token)) {
    echo "Invalid token!";
}else{
    echo "Email changed successfully!";
}
