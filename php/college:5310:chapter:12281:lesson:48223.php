<?php

$f = fopen("input.txt", "r");
$sentence = fgets($f);
fclose($f);
echo lcfirst(implode("", explode(" ", ucwords(strtolower(trim($sentence))))));