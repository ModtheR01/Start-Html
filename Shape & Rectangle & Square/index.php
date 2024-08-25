<?php

abstract class shape
{
    protected string $color;
    protected bool $field;
    public function __construct(string $color, bool $field)
    {
        $this->color = $color;
        $this->field = $field;
    }
    //Set Color
    public function setcolor(string $color): void
    {
        $this->color = $color;
    }
    // Set Field
    public function setfield(bool $field): void
    {
        $this->field = $field;
    }
    // Get Color
    public function getcolor(): string
    {
        return $this->color;
    }
    // Is Field
    public function isfield(): bool
    {
        return $this->field;
    }
    // Abstract Get Area
    public abstract function getarea(): float;
    // Abstract Get Perimeter
    public abstract function getperimeter(): float;
}
class circle extends shape
{
    private float $radius;
    public function __construct(string $color, bool $field, float $radius)
    {
        parent::__construct($color, $field);
        $this->radius = $radius;
    }
    // Set Radius
    public function setradius(float $radius): void
    {
        $this->radius = $radius;
    }
    // Get Radius
    public function getradius(): float
    {
        return $this->radius;
    }
    // Get Area
    public function getarea(): float
    {
        return pi() * pow($this->radius, 2);
    }
    // Get Perimeter
    public function getperimeter(): float
    {
        return 2 * pi() * $this->radius;
    }
    // display
    public function display(): void
    {
        echo "Circle Area: " . $this->getarea() . "<br>";
        echo "Circle Perimeter: " . $this->getperimeter() . "<br>";
        echo "Circle Color: " . $this->getcolor() . "<br>";
        echo "Circle Field: " . ($this->isfield() ? "Yes" : "No") . "<br>";
    }
}
class rectangle extends shape
{
    private float $width;
    private float $length;
    public function __construct(string $color, bool $field, float $width, float $length)
    {
        parent::__construct($color, $field);
        $this->width = $width;
        $this->length = $length;
    }
    // Set Width
    public function setwidth(float $width): void
    {
        $this->width = $width;
    }
    // Set Length
    public function setlength(float $length): void
    {
        $this->length = $length;
    }
    // Get Width
    public function getwidth(): float
    {
        return $this->width;
    }
    // Get Length
    public function getlength(): float
    {
        return $this->length;
    }
    // Get Area
    public function getarea(): float
    {
        return $this->width * $this->length;
    }
    // Get Perimeter
    public function getperimeter(): float
    {
        return 2 * ($this->width + $this->length);
    }
    // display
    public function display(): void
    {
        echo "Rectangle Area: " . $this->getarea() . "<br>";
        echo "Rectangle Perimeter: " . $this->getperimeter() . "<br>";
        echo "Rectangle Color: " . $this->getcolor() . "<br>";
        echo "Rectangle Field: " . ($this->isfield() ? "Yes" : "No") . "<br>";
    }
}
class square extends rectangle
{
    public function __construct(string $color, bool $field, float $side)
    {
        parent::__construct($color, $field, $side, $side);
    }
    // Get Side
    public function getside(): float
    {
        return $this->getwidth();
    }
    // Set Side
    public function setside(float $side): void
    {
        $this->setwidth($side);
        $this->setlength($side);
    }
    // Get Area
    public function getarea(): float
    {
        return pow($this->getside(), 2);
    }
    // Get Perimeter
    public function getperimeter(): float
    {
        return 4 * $this->getside();
    }
    // display
    public function display(): void
    {
        echo "Square Area: " . $this->getarea() . "<br>";
        echo "Square Perimeter: " . $this->getperimeter() . "<br>";
        echo "Square Color: " . $this->getcolor() . "<br>";
        echo "Square Field: " . ($this->isfield() ? "Yes" : "No") . "<br>";
    }
}
$c = new circle("black", false, 5.5);
$c->display();
$rec = new rectangle("red", true, 5, 2.3);
$rec->display();
$sq = new square("green", false, 3.5);
$sq->display();
