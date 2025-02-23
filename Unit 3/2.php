<?php
// Define Bicycle Class
class Bicycle {
    // Public properties
    public $brand;
    public $model;
    public $year;
    public $description = "Used bicycle";  // Default value
    public $weight; // Weight is stored in grams

    // Constructor
    public function __construct($brand, $model, $year, $weight, $description = "Used bicycle") {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->weight = $weight;
        $this->description = $description;
    }

    // Getter for bike info
    public function getInfo() {
        return "{$this->brand} {$this->model} ({$this->year})";
    }

    // Getter for weight (configurable for grams or kg)
    public function getWeight($inKg = false) {
        if ($inKg) {
            return $this->weight / 1000 . " kg"; // Convert grams to kg
        }
        return $this->weight . " grams"; // Default in grams
    }

    // Setter for weight
    public function setWeight($weight) {
        $this->weight = $weight;
    }
}

// Create Bicycle Objects
$bike1 = new Bicycle("Giant", "Defy 3", 2021, 9000); // 9kg in grams
$bike2 = new Bicycle("Trek", "Domane SL", 2022, 8500, "Lightweight racing bike"); // 8.5kg in grams

// Display Information
echo "Bike 1: " . $bike1->getInfo() . "<br>";
echo "Description: " . $bike1->description . "<br>";
echo "Weight: " . $bike1->getWeight() . " / " . $bike1->getWeight(true) . "<br><br>";

echo "Bike 2: " . $bike2->getInfo() . "<br>";
echo "Description: " . $bike2->description . "<br>";
echo "Weight: " . $bike2->getWeight() . " / " . $bike2->getWeight(true) . "<br>";
?>
