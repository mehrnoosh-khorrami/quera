<?php

class Person
{
    private $first_name;
    private $last_name;
    private $age;

    public function sayHello()
    {
        return "Hello!";
    }
    public function setFirstName(string $first_name)
    {
        $this->first_name = $first_name;
    }
    public function setLastName(string $last_name)
    {
        $this->last_name = $last_name;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getFirstName(): string
    {
        return $this->first_name;
    }
    public function getLastName(): string
    {
        return $this->last_name;
    }
    public function getAge()
    {
        if($this->age <= 0 ){
            return 0;
        }else{
            return $this->age;
        }
    }
}