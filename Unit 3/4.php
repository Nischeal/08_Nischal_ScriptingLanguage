<?php
// Define Product Class
class Product {
    private $description;
    private $quantity;
    private $price;

    // Constructor with validation
    public function __construct($description, $quantity, $price) {
        if (!is_string($description)) {
            echo "Error: Description must be a string.<br>";
            return;
        }
        if (!is_numeric($quantity) || !is_numeric($price)) {
            echo "Error: Quantity and price must be numbers.<br>";
            return;
        }

        $this->description = $description;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    // Getters
    public function getDescription() {
        return $this->description;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getPrice() {
        return $this->price;
    }

    // Setters
    public function setDescription($description) {
        if (is_string($description)) {
            $this->description = $description;
        }
    }

    public function setQuantity($quantity) {
        if (is_numeric($quantity)) {
            $this->quantity = $quantity;
        }
    }

    public function setPrice($price) {
        if (is_numeric($price)) {
            $this->price = $price;
        }
    }

    // Method to calculate total price
    public function calculatePrice() {
        return $this->quantity * $this->price;
    }
}

// Create Product Object
$product = new Product("Laptop", 3, 1200);

// Display Information
echo "Product Description: " . $product->getDescription() . "<br>";
echo "Quantity: " . $product->getQuantity() . "<br>";
echo "Price per unit: $" . $product->getPrice() . "<br>";
echo "Total Price: $" . $product->calculatePrice() . "<br>";
?>
