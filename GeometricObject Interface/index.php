<?php

interface geometricobiect
{
    public function getarea(): float;
    public function getpremimeter(): float;
    public function display(): void;
}
class circle implements geometricobiect
{
    private float $radius;
    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }
    //Get area
    public function getarea(): float
    {
        return pi() * pow($this->radius, 2);
    }
    //Get perimeter
    public function getpremimeter(): float
    {
        return 2 * pi() * $this->radius;
    }
    //Display 
    public function display(): void
    {
        echo "Circle Area: " . $this->getarea() . "<br>";
        echo "Circle Perimeter: " . $this->getpremimeter() . "<br>";
    }
}
class rectangle implements geometricobiect
{
    private float $width;
    private float $length;
    public function __construct(float $width, float $length)
    {
        $this->width = $width;
        $this->length = $length;
    }
    //Get area
    public function getarea(): float
    {
        return $this->width * $this->length;
    }
    //Get perimeter
    public function getpremimeter(): float
    {
        return 2 * ($this->width + $this->length);
    }
    //Display
    public function display(): void
    {
        echo "Rectangle Area: " . $this->getarea() . "<br>";
        echo "Rectangle Perimeter: " . $this->getpremimeter() . "<br>";
    }
}
$c = new circle(5.9);
$c->display();
$r = new rectangle(3.2, 4.8);
$r->display();
