<?php
class circle
{
    protected float $radius = 1.0;
    protected string $color = "red";
    public function __construct(float $radius, string $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    // Set radius 
    public function setradius($radius): void
    {
        $this->radius = $radius;
    }
    // Set color 
    public function setcolor($color): void
    {
        $this->color = $color;
    }
    // Get radius
    public function getradius(): float
    {
        return $this->radius;
    }
    // Get color
    public function getcolor(): float
    {
        return $this->color;
    }
    // get area
    public function getarea():float
    {
        return pi() * pow($this->radius, 2);
    }
    // Displays a circle
    public function display():void
    {
        echo "Area Of Circle: " . $this->getarea() . "<br>" . " Color Of Circle: " . $this->color . "<br>";
    }
}
class cylinder extends circle
{
    protected float $height = 1.0;
    public function __construct(float $radius, string $color, float $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }
    // Set color 
    public function setheight($height):void
    {
        $this->height = $height;
    }
    // Get radius
    public function getheight():float
    {
        return $this->height;
    }
    // get volume
    public function getVolume():float
    {
        return pi() * pow($this->radius, 2) * $this->height;
    }
    public function display():void
    {
        echo "Volume Of Cylinder: " . $this->getVolume() . "<br>" . " Color Cylinder: " . $this->color;
    }
}
$circle1 = new circle(5.0, "Green");
$cylinder1 = new cylinder(3.0, "Yellow", 6.0);
$circle1->display();
$cylinder1->display();






?>