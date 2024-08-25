<?php

class point2D
{
    protected float $x;
    protected float $y;
    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    // Set X 
    public function setx(float $x): void
    {
        $this->x = $x;
    }
    // Set Y
    public function sety(float $y): void
    {
        $this->y = $y;
    }
    // Get X
    public function getx(): float
    {
        return $this->x;
    }
    // Get Y
    public function gety(): float
    {

        return $this->y;
    }
    // Set XY
    public function setXY(float $x, float $y): void
    {
        $this->x = $x;
        $this->y = $y;
    }
    // Get XY 
    public function getXY(): array
    {
        return [$this->x, $this->y];
    }
    // Display
    public function display(): void
    {
        echo "Points: " . $this->getx() . "," . $this->gety() . "<br>";
    }
}

class point3D extends point2D
{
    protected float $z;
    public function __construct(float $x, float $y, float $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }
    // Set Z
    public function setz(float $z): void
    {
        $this->z = $z;
    }
    // Get Z
    public function getz(): float
    {
        return $this->z;
    }
    // Set XYZ
    public function setXYZ(float $x, float $y, float $z): void
    {
        parent::setXY($x, $y);
        $this->z = $z;
    }
    // Get XYZ
    public function getXYZ(): array
    {
        return array_merge($this->getXY(), [$this->z]);
    }
    // Display
    public function display(): void
    {
        echo "Points: " . parent::getXY()[0] . "," . parent::getXY()[1] . "," . $this->getz() . "<br>";
    }
}
$p = new point3D(2.2, 3.3, 4.4);
$p->display();
