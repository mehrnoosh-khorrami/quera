<?php


session_start();
if(isset($_SESSION["counter"])){
    $_SESSION['counter'] += 1;
}else{
    $_SESSION['counter'] = 1;
}
switch($_SESSION['counter']){
    case 1:
        echo "This is your 1st visit in this session.";
        break;
    case 2:
        echo "This is your 2nd visit in this session.";
        break;
    case 3:
        echo "This is your 3rd visit in this session.";
        break;
    default:
        echo "This is your {$_SESSION['counter']}th visit in this session.";
        break;
}



