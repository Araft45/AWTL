<?php
class Car {
    public $brand;
    public $color;

    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
        echo "A new $this->color $this->brand car created.<br><br>";
    }

    public function displayInfo(){
        echo "This is a $this->color $this->brand.<br><br>";
    }

    public function __destruct() {
        echo "The $this->color $this->brand car is being destroyed.<br><br>";
    }
}

class SportsCar extends Car {
    public $speed;

    public function __construct($brand, $color, $speed) {
        parent::__construct($brand, $color);
        $this->speed = $speed;
    }

    public function displayInfo(){
        echo "This is a $this->color $this->brand and can speed up to $this->speed mph.<br><br>";
    }
}

$car1 = new Car("Toyota", "red");
$car1->displayInfo();

$sportsCar1 = new SportsCar("Ferrari", "red", 200);
$sportsCar1->displayInfo();
?>
