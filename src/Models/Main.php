<?php
namespace Src\Models;

class Main
{
    public function __construct(private string $name = '', private int $age = 0) { }

    public function changeName(string $name) : string
    {
        if($name) $this->name = $name;
        return $this->name;
    }

    public function getAge() : int 
    {
        return $this->age;    
    }

}

