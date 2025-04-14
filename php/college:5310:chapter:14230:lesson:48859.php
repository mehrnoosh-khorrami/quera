<?php

class Vector
{
    public $x;
    public $y;
    public $z;

    public function __construct($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function magnitude()
    {
        
        return sqrt(($this->x ** 2) + ($this->y ** 2) + ($this->z ** 2));
    }

    public function add($vector)
    {
        $this->x += $vector->x;
        $this->y += $vector->y;
        $this->z += $vector->z;
    }

    public function subtract($vector)
    {
        $this->x -= $vector->x;
        $this->y -= $vector->y;
        $this->z -= $vector->z;
    }

    public function product($n)
    {
        $this->x *= $n;
        $this->y *= $n;
        $this->z *= $n;
    }

    public function dotProduct($vector)
    {
        return ($this->x * $vector->x) + ($this->y * $vector->y) + ($this->z * $vector->z);
    }

    public function crossProduct($vector)   
    {  
        return new Vector(($this->y * $vector->z) - ($this->z * $vector->y), ($this->z * $vector->x) - ($this->x * $vector->z), ($this->x * $vector->y) - ($this->y * $vector->x));
    }
}
