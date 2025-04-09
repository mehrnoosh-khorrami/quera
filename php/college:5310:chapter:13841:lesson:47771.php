<?php

$num = readline();
$nam = readline();
$student_list = [];
for ($i = 0; $i < $num; $i++) {
    $student_list[] = readline();
}
echo in_array($nam, $student_list) ? "YES":"NO";
