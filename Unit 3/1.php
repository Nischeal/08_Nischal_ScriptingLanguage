<?php
// Define Vehicle Interface
interface Vehicle {
    public function startEngine();
    public function stopEngine();
}

// Define Car Class
class Car implements Vehicle {
    private $make;
    private $model;
    private $year;

    // Constructor
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Getter and Setter methods
    public function getMake() {
        return $this->make;
    }

    public function setMake($make) {
        $this->make = $make;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    // Methods
    public function start() {
        echo "Car started.<br>";
    }

    public function displayInfo() {
        echo "Car Info: {$this->make} {$this->model} ({$this->year})<br>";
    }

    public function getDescription() {
        return "This is a {$this->make} {$this->model} from {$this->year}.";
    }

    // Implementing Vehicle Interface
    public function startEngine() {
        echo "Engine started.<br>";
    }

    public function stopEngine() {
        echo "Engine stopped.<br>";
    }
}

// Define ElectricCar Class (Extends Car)
class ElectricCar extends Car {
    private $batteryCapacity;

    public function __construct($make, $model, $year, $batteryCapacity) {
        parent::__construct($make, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function charge() {
        echo "The electric car is charging. Battery Capacity: {$this->batteryCapacity} kWh<br>";
    }

    // Override getDescription()
    public function getDescription() {
        return "This is an electric {$this->getMake()} {$this->getModel()} from {$this->getYear()} with a battery capacity of {$this->batteryCapacity} kWh.";
    }
}

// Create Objects
$car = new Car("Toyota", "Camry", 2022);
$car->start();
$car->displayInfo();
echo $car->getDescription() . "<br>";
$car->startEngine();
$car->stopEngine();

echo "<br>";

$electricCar = new ElectricCar("Tesla", "Model S", 2023, 100);
$electricCar->start();
$electricCar->displayInfo();
echo $electricCar->getDescription() . "<br>";
$electricCar->charge();
$electricCar->startEngine();
$electricCar->stopEngine();
?>
