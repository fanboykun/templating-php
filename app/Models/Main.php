<?php
namespace App\Models;

class Main
{
    private $name; // PHP 7.4
    private $age; // PHP 7.4

    // public function __construct(private string $name = '', private int $age = 0) { } // PHP 8.2+
    
    public function __construct(string $name = '', int $age = 0) { } // PHP 7.4

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

