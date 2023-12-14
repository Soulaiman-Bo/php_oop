<?php

class Animal {
    public $name;
    public $age;

    public function eat(): void
    {
        echo "The animal is eating.";
    }

    public function sleep(): void
    {
        echo "The animal is sleeping.";
    }
}

class Dog extends Animal {
    public $breed;

    public function bark(): void
    {
        echo "Woof!";
    }
}


$dog = new Dog();

$dog->name = "Max";
$dog->age = 2;
$dog->breed = "German Shepherd";

$dog->eat(); // Output: The animal is eating.
$dog->sleep(); // Output: The animal is sleeping.
$dog->bark(); // Output: Woof!

echo "The dog's name is " . $dog->name . ", age is " . $dog->age . ", and breed is " . $dog->breed . ".";
