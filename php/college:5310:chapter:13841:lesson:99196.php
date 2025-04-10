<?php

function getHighestPrice()
{
    global $data;
    $max = ["name" => "name", "price" => 0];
    if ($data == null){
        return null;
    }
    foreach ($data as $d) {
        if ($d["price"] > $max["price"]) {
            $max["name"] = $d["name"];
            $max["price"] = $d["price"];
        }
    }
    return $max["name"];
}