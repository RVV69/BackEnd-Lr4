<?php

/*class Circle {
    private $x;
    private $y;
    private $radius;

    public function __construct($x, $y, $radius) {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    public function __toString() {
        return "Коло з центром в ({$this->x}, {$this->y}) і радіусом {$this->radius}";
    }

    public function getX() {
        return $this->x;
    }

    public function setX($x) {
        $this->x = $x;
    }

    public function getY() {
        return $this->y;
    }

    public function setY($y) {
        $this->y = $y;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }
}

$circle = new Circle(5, 10, 15);
echo $circle . "<br>"; 
echo $circle->getX() . "<br>"; 
echo $circle->getY() . "<br>"; 
echo $circle->getRadius() . "<br>"; 
$circle->setX(20);
$circle->setY(25);
$circle->setRadius(30);
echo $circle . "<br>"; 
*/
class Circle {
    private $x;
    private $y;
    private $radius;

    public function __construct($x, $y, $radius) {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function __toString() {
        return "Коло з центром в ({$this->x}, {$this->y}) і радіусом {$this->radius}";
    }

    public function doesIntersect(Circle $otherCircle) {
        $distance = sqrt(pow($this->x - $otherCircle->getX(), 2) + pow($this->y - $otherCircle->getY(), 2));
        return $distance <= ($this->radius + $otherCircle->getRadius());
    }
}

$circle1 = new Circle(0, 0, 5);
$circle2 = new Circle(5, 5, 5);
echo $circle1 . "<br>"; 
echo "Коло перетинається? - ";
echo $circle1->doesIntersect($circle2) ? 'true' : 'false'; 

echo "<br><br>";

echo $circle2 . "<br>";
$circle3 = new Circle(10, 10, 1);
echo "Коло перетинається? - ";
echo $circle1->doesIntersect($circle3) ? 'true' : 'false';

?>
