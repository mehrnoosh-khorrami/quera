<?php


class Square implements Shape
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getArea(): float
    {
        return $this->a ** 2;
    }
}
