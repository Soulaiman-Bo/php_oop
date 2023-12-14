<?php 

class Animal {
    public function speak()
    {
        return "The animal is making a sound. \n";
    }
}

class Dog extends Animal {
    public function speak(): string
    {
        return "Woof! \n";
    }
}

class Cat extends Animal {

    public function speak(): string
    {
        return "Meow!";
    }
}

$animal = new Animal();
echo $animal->speak(); // Output: The animal is making a sound.

$dog = new Dog();
echo $dog->speak(); // Output: Woof!

$cat = new Cat();
echo $cat->speak(); // Output: Meow!

