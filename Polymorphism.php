<?php


// Operator Overloading:
class StringObject {
    public $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function __toString() {
        return $this->value;
    }
}

function add($a, $b) {
    if (is_int($a) && is_int($b)) {
        return $a + $b;
    } else if (is_string($a) && is_string($b)) {
        return (string) new StringObject($a . $b);
    } else {
        throw new Exception("Invalid data types for addition.");
    }
}

echo add(1, 2); // Output: 3
echo add("Hello", " World!"); // Output: Hello World!


// Method Overriding:
class Shape {
    public function draw() {
        echo "Drawing a shape...";
    }
}

class Rectangle extends Shape {
    public function draw() {
        parent::draw(); // Call the parent method
        echo "Drawing a rectangle with four sides.";
    }
}

$shape = new Shape();
$shape->draw(); // Output: Drawing a shape...

$rectangle = new Rectangle();
$rectangle->draw(); // Output: Drawing a shape... Drawing a rectangle with four sides.

