<?php 

$n = (int)readline();
$m = (int)readline();
$namePrices = [];

for ($i = 0; $i < $n; $i++) {
    $namePrices[readline()] = null;
}
foreach($namePrices as $name => $price) {
    $namePrices[$name] = (int)readline();
}

asort($namePrices);

$items = array_slice($namePrices, 0, $m, true);
foreach ($items as $name => $price){
    echo $name . ":" . $price . PHP_EOL;
}
