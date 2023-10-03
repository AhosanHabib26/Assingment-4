<?php

class Product {
    private $id;    // Unique identifier of the product
    private $name;  // Name of the product
    private $price; // Price of the product

    // Constructor to initialize the properties
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Getter for id
    public function getId() {
        return $this->id;
    }

    // Setter for id
    public function setId($id) {
        $this->id = $id;
    }

    // Getter for name
    public function getName() {
        return $this->name;
    }

    // Setter for name
    public function setName($name) {
        $this->name = $name;
    }

    // Getter for price
    public function getPrice() {
        return $this->price;
    }

    // Setter for price
    public function setPrice($price) {
        $this->price = $price;
    }
}

// Example usage
$product = new Product(1, 'Sample Product', 19.99);
echo "Product ID: " . $product->getId() . "\n";
echo "Product Name: " . $product->getName() . "\n";
echo "Product Price: $" . $product->getPrice() . "\n";

?>
