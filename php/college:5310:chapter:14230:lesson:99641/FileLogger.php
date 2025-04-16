<?php

trait FileLogger
{
    public function log($type, $message)
    {
        if (file_exists("quera.log")){
            $fileLog = fopen("quera.log","a");
            fwrite($fileLog, "\n". date("Y-m-d H:i:s")." [$type] $message");
        }else{
            $fileLog = fopen("quera.log","x");
            fwrite($fileLog, date("Y-m-d H:i:s")." [$type] $message");
        }
        fclose($fileLog);
    }
}
