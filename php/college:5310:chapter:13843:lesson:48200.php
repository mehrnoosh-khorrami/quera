<?php

$file_csv = $_FILES['file']['tmp_name'];
$j_file = [];
if ((!isset($_FILES['file']) || $_FILES['file']['error'] !== 0) || ($_FILES['file']['size'] === 0)) {
    echo json_encode($j_file);
    die();
}elseif(trim($_FILES['file']['tmp_name']) === '') {
    echo json_encode($j_file);
    die();
}

$file = fopen($file_csv,'r');
$title = fgetcsv($file);
while(!feof($file)) {
    $template = fgetcsv($file);
    $j_file_tmp = [];
    foreach($title as $key => $value) {
        $j_file_tmp[trim($value)] = trim($template[$key]);
    }
    $j_file[] = $j_file_tmp;
}
echo json_encode($j_file);
die();

