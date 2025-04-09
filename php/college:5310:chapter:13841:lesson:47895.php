<?php

$a = [];
for ($i = 0; $i < 5; $i++) {
    $a[] = readline();
}
$key = readline();
if (in_array($key, $a)) {
    echo "YES";
} else {
    echo "NO";
}