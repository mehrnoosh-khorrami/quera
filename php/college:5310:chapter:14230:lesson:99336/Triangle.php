<?php


class Triangle implements Shape
{
    private $a;
    private $h;

    public function __construct($a, $h)
    {
        $this->a = $a;
        $this->h = $h;
    }

    public function getArea(): float
    {
        return ($this->a * $this->h) / 2;
    }
}
