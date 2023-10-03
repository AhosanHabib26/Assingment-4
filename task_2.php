<?php

class Product {
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getFormattedPrice() {
        return number_format($this->price, 2);
    }
}

// Example usage
$product = new Product(1, "Product A", 20.50);
echo "Product ID: " . $product->getId() . "\n";
echo "Product Name: " . $product->getName() . "\n";
echo "Product Price: $" . $product->getFormattedPrice() . "\n";
