<?php

class Person
{
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName(string $name): void // setter dyal Name
    {
        $this->name = $name;
    }

    public function getName(): string // getter dyal Name
    {
        return $this->name;
    }

    public function setAge(int $age): void // setter dyal Name
    {
        $this->age = $age;
    }

    public function getAge(): int // getter dyal Name
    {
        return $this->age;
    }
}

$wissal = new Person("wissal", "5");


echo $wname =  $wissal->getName(); // getter
echo "\n";
echo $wname =  $wissal->getAge(); // getter

$wissal->setName("bilal"); // setter
echo "\n";
echo $wname =  $wissal->getName();
echo "\n";








