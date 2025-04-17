<?php

function isValidCredentials($host, $username, $password, $dbname)
{
    try{  
        $pd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        return true;
    }catch(PDOException $e){
        return false;
    }
}

