<?php
// Define Student Class
class Student {
    // Public properties
    public $name;
    public $surname;
    public $country;

    // Private and protected properties
    private $tuition = 5000; // Example tuition fee
    protected $indexNumber = "BCA2024001"; 

    // Constructor (No arguments required)
    public function __construct() {
        $this->name = "Nischal";
        $this->surname = "Basnet";
        $this->country = "Nepal";
    }

    // Getter methods for name and surname
    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    // Public method
    public function helloWorld() {
        return "Hello World";
    }

    // Protected method
    protected function helloFamily() {
        return "Hello Family";
    }

    // Private method
    private function helloMe() {
        return "Hello me!";
    }

    // Private getter for tuition
    private function getTuition() {
        echo "Tuition Fee: {$this->tuition} USD<br>";
    }

    // Public method to access private method
    public function showTuition() {
        $this->getTuition();
    }
}

// Define PartTimeStudent Subclass
class PartTimeStudent extends Student {
    // Public method calling protected method from Student class
    public function helloParent() {
        return $this->helloFamily();
    }
}

// Create Student Object
$student1 = new Student();
echo "Student Name: " . $student1->getName() . " " . $student1->getSurname() . "<br>";
echo "Country: " . $student1->country . "<br>";
echo $student1->helloWorld() . "<br>";
$student1->showTuition(); // Access private method indirectly

echo "<br>";

// Create PartTimeStudent Object
$partTimeStudent = new PartTimeStudent();
echo "Part-Time Student Name: " . $partTimeStudent->getName() . " " . $partTimeStudent->getSurname() . "<br>";
echo "Calling helloParent(): " . $partTimeStudent->helloParent() . "<br>";
?>
