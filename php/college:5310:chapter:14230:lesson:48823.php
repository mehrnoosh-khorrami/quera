<?php

class ExceptionProxy extends Exception {}

function transformExceptions($functions)
{
    $tfe = [];
    foreach ($functions as $func) {
        $message = "ok!";
        try{
            $func();
        } catch(Exception $e){
            $message = $e->getMessage();
        }
        $e =new ExceptionProxy($message);
        $e->function = $func;   
        $tfe[] = $e;
    }
    return $tfe;
}

function f()
{
    Throw new Exception("Error message!");
}

function g()
{
    return;
}

$transformed_exceptions = transformExceptions(["f", "g"]);

foreach ($transformed_exceptions as $transformed_exception) {
    echo "Function name: "
        . $transformed_exception->function
        . "\nMessage: "
        . $transformed_exception->getMessage()
        . "\n";
}