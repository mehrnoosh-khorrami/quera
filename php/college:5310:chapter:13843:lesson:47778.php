<?php

$name = $_POST['name'];
$name = strtolower($name);
$name = ucfirst($name);
echo "Hello $name!";