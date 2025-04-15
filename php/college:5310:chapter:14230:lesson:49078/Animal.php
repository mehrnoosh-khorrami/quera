<?php

class Animal
{
    protected $foods;
    protected $legs_count;

    public function setFoods($foods)
    {
        $this->foods = $foods;
    }

    public function getFoods()
    {
        return $this->foods;
    }

    public function setLegsCount($legs_count)
    {
        $this->legs_count= $legs_count;
    }

    public function getLegsCount()
    {
        return $this->legs_count;
    }
}