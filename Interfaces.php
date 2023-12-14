<?php 

interface Animall {
    public function eat();
    public function sleep();
}

class horse implements Animall {
    public function eat(){
        echo "eat";
    }

    public function sleep(){
        echo "eat";
    }
}

class Dog implements Animall {
    public function eat(): void {
        echo "The dog is eating dog food.";
    }

    public function sleep(): void {
        echo "The dog is sleeping soundly.";
    }
}

class Cat implements Animall {
    public function eat(): void {
        echo "The cat is eating cat food.";
    }

    public function sleep(): void {
        echo "The cat is taking a nap.";
    }
}

$dog = new Dog();
$dog->eat(); // Output: The dog is eating dog food.
$dog->sleep(); // Output: The dog is sleeping soundly.

$cat = new Cat();
$cat->eat(); // Output: The cat is eating cat food.
$cat->sleep(); // Output: The cat is taking a nap.
