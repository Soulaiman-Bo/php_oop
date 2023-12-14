<?php 

class ParentClass {
    
    public static function myMethod() {
        echo "ParentClass::myMethod() called.";
    }
}

class ChildClass extends ParentClass {
    
    public static function myMethod() {
        echo "ChildClass::myMethod() called.";
    }

}

// Static binding
ParentClass::myMethod(); // Output: ParentClass::myMethod() called.
echo "\n";
ChildClass::myMethod();  // Output: ChildClass::myMethod() called.



class Animal {
    public function makeSound() {
        echo "Generic animal sound.";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Bark!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow!";
    }
}

// Dynamic binding
$dog = new Dog();
$cat = new Cat();

$dog->makeSound();  // Output: Bark!
$cat->makeSound();  // Output: Meow!
