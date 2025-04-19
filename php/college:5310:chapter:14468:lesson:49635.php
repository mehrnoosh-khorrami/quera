<?php

$ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime = finfo_file($finfo, $_FILES['photo']['tmp_name']);
finfo_close($finfo);
if(empty($_FILES['photo'])){
    die('No photo!');
}elseif(!isset($_FILES['photo']['name'])){
    die('No photo!');
}elseif(($mime != "image/png" && $mime != "image/jpeg") || (strtolower($ext) != "png" && strtolower($ext) != "jpeg" && strtolower($ext) != "jpg")) {
    die('Invalid photo!');
}elseif($_FILES['photo']['size'] > 500000){
    die('Photo is too big!');
}else{
    echo'Photo changed successfully!';
}
