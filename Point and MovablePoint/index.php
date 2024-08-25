<?php

class point
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

class movablrpoint extends point
{
    private float $Xspeed;
    private float $Yspeed;
    public function __construct(float $x, float $y, float $Xspeed, float $Yspeed)
    {
        parent::__construct($x, $y);
        $this->Xspeed = $Xspeed;
        $this->Yspeed = $Yspeed;
    }
    // Set Xspeed
    public function setXspeed(float $Xspeed): void
    {
        $this->Xspeed = $Xspeed;
    }
    // Set Yspeed
    public function setYspeed(float $Yspeed): void
    {
        $this->Yspeed = $Yspeed;
    }
    // Get Xspeed
    public function getXspeed(): float
    {
        return $this->Xspeed;
    }
    // Get Yspeed
    public function getYspeed(): float
    {
        return $this->Yspeed;
    }
    // Set speed
    public function setspeed(float $Xspeed, float $Yspeed): void
    {
        $this->Xspeed = $Xspeed;
        $this->Yspeed = $Yspeed;
    }
    // Get speed
    public function getspeed(): array
    {
        return [$this->Xspeed, $this->Yspeed];
    }
    // Move

}






?>