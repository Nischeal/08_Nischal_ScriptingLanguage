<?php
// Define HasInfo Interface
interface HasInfo {
    public function getInfo();
}

// Address Class
class Address implements HasInfo {
    public $street;
    public $number;
    public $city;

    // Constructor
    public function __construct($street, $number, $city) {
        $this->street = $street;
        $this->number = $number;
        $this->city = $city;
    }

    // Implement getInfo()
    public function getInfo() {
        return "Address: street {$this->street}, number {$this->number}, city {$this->city}";
    }
}

// Phone Class
class Phone implements HasInfo {
    public $prefix;
    public $number;

    // Constructor
    public function __construct($prefix, $number) {
        $this->prefix = $prefix;
        $this->number = $number;
    }

    // Implement getInfo()
    public function getInfo() {
        return "Number: {$this->prefix} / {$this->number}";
    }
}

// User Class
class User implements HasInfo {
    public $name;
    public $surname;
    private $address;
    private $phone;

    // Constructor
    public function __construct($name, $surname, Address $address, Phone $phone) {
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
        $this->phone = $phone;
    }

    // Implement getInfo()
    public function getInfo() {
        return "User: {$this->name} {$this->surname}<br>" . 
               $this->address->getInfo() . "<br>" . 
               $this->phone->getInfo();
    }
}

// Create Objects
$address = new Address("Gwarko", 123, "Kathmandu");
$phone = new Phone(977, "9849268082");
$user = new User("Nischal", "Basnet", $address, $phone);

// Display Information
echo $user->getInfo();
?>
