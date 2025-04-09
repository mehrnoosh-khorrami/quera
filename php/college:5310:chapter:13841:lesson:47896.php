<?php

$player = [];
for ($i = 0; $i < 3; $i++) {    
    $player[readline()] = 0;
}
for ($i = 0; $i < 8; $i+=2) {
    $player[readline()] += readline();
}
echo array_search(max($player), $player);