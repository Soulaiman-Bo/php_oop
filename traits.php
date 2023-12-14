<?php 

trait Shape {  
    public function calculateArea(): float
    {
        throw new Exception("Cannot calculate area of a generic shape.");
    }
}

class Square {
    use Shape;

    public $sideLength;

    public function __construct($sideLength) {
        $this->sideLength = $sideLength;
    }

    public function calculateArea(): float
    {
        return $this->sideLength ** 2;
    }
}

class Circle {
    use Shape;

    public $radius;
    static $staticc = "static";

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea(): float
    {
        // Override the generic area calculation
        return M_PI * $this->radius ** 2;
        
    }
}

$circlr = Circle::$staticc;

$obj = new Circle(4);

$obj->staticc;






$circle = new Circle(4);

echo $circle->calculateArea();
