<?php 

class Car {
    // Private attributes (encapsulated data)
    private $color;
    private $speed;
    private $model;

    // Public methods (controlled access)
    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }

    public function setSpeed($speed) {
        $this->speed = $speed;
    }

    public function getSpeed() {
        return $this->speed;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }
}


// Create a new Car object
$car = new Car();

// Set the Car's color, speed, and model using public methods
$car->setColor("Red");
$car->setSpeed(100);
$car->setModel("Toyota Camry");

// Access the Car's color, speed, and model using public methods
echo "Car color: " . $car->getColor() . PHP_EOL;
echo "Car speed: " . $car->getSpeed() . PHP_EOL;
echo "Car model: " . $car->getModel() . PHP_EOL;

