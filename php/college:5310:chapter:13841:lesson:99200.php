<?php

function getConfig($key)
{
    $c = require "config.php";
    return array_key_exists($key, $c) ? $c[$key] : null;
}
