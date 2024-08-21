<?php



class person
{
    protected string $name;
    protected string $address;
    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }
    // Get name
    public function getName(): string
    {
        return $this->name;
    }
    // Get address
    public function getAddress(): string
    {
        return $this->address;
    }
    // Set name
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    // Set address
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }
    // Display
    public function display(): void
    {
        echo "Name: " . $this->getName() . "<br>" . "Address: " . $this->getAddress() . "<br>";
    }
}
class student extends person
{
    protected string $program;
    protected int $year;
    protected float $fee;
    public function __construct(string $name, string $address, string $program, int $year, float $fee)
    {
        parent::__construct($name, $address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }
    // Set program
    public function setprogram(string $program): void
    {
        $this->program = $program;
    }
    // Set year
    public function setyear(int $year): void
    {
        $this->year = $year;
    }
    // Set fee
    public function setfee(float $fee): void
    {
        $this->fee = $fee;
    }
    // Get program
    public function getprogram(): string
    {
        return $this->program;
    }
    // Get year
    public function getyear(): int
    {
        return $this->year;
    }
    // Get fee
    public function getfee(): float
    {
        return $this->fee;
    }
    public function display(): void
    {
        parent::display();
        echo "Program: " . $this->getprogram() . "<br>" . "Year: " . $this->getyear() . "<br>" . "Fee: " . $this->getfee() . "<br>";
    }
}
class staff extends person
{
    protected string $school;
    protected float $pay;
    public function __construct(string $name, string $address, string $school, float $pay)
    {
        parent::__construct($name, $address);
        $this->school = $school;
        $this->pay = $pay;
    }
    // Set school
    public function setschool(string $school): void
    {
        $this->school = $school;
    }
    // Set pay
    public function setpay($pay): void
    {
        $this->pay = $pay;
    }
    // Get school
    public function getschool(): string
    {
        return $this->school;
    }
    // Get pay
    public function getpay(): float
    {
        return $this->pay;
    }
    // Display
    public function display(): void
    {
        parent::display();
        echo "School: " . $this->getschool() . "<br>" . "Pay: " . $this->getpay();
    }
}
$p1 = new person("Modther", "Suez");
$stu1 = new student("Ali", "Cairo", "@@@", 20, 5.9);
$sff1 = new staff("Mohamed", "Alexandria", "@@@@", 200.3);
$p1->display();
$stu1->display();
$sff1->display();
