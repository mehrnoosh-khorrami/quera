<?php

function checkRegistrationRules(array $nameList)
{
    $vName = [];
    foreach ($nameList as $item) {
        if (($item[0] != "quera" && $item[0] != "admin") && (strlen($item[0]) >= 4) && (strlen($item[1]) >= 6  && !ctype_digit($item[1]))) {
            $vName[] = $item[0];
        }
    }
    return $vName;
}