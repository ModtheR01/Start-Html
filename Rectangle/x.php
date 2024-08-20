<?php
class rectangle
{
    private float $width;
    private float $length;
    public function __construct(float $width, float $length)
    {
        $this->width = $width;
        $this->length = $length;
    }
    // Get Width 
    public function getwidth($width): void
    {
        $this->width = $width;
    }
    // Get length   
    public function getlength($length): void
    {
        $this->length = $length;
    }
    // Set width 
    public function setwidth($width): float
    {
        return $this->width = $width;
    }
    // Set length
    public function setlength($length): float
    {
        return $this->length = $length;
    }
    // Get Area 
    public function getArea(): float
    {
        return ($this->width) * ($this->length);
    }
    // Get Perimeter
    public function getPerimeter(): float
    {
        return 2 * ($this->width + $this->length);
    }
    public function display(): void
    {
        echo "Rectangle: \n";
        echo "Width: " . $this->width . "\n";
        echo "Length: " . $this->length . "\n";
        echo "Area: " . $this->getArea() . "\n";
        echo "Perimeter: " . $this->getPerimeter() . "\n";
    }
}

$rect = new rectangle(7, 6);
$rect->display();
