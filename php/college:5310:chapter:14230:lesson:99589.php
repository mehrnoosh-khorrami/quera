<?php

class Foo
{
    protected $x;

    public function __construct()
    {
        $this->x = 0;
    }

    public function __set($name, $value)
    {
        if($value >= 0){
            if($value >= 100){
                $this->x = $value % 100;
            }else{
                $this->x = $value;
            }
        }else{
            $this->x = -1;
        }
    }

    public function __get($name)
    {
        return $this->x;
    }
}

