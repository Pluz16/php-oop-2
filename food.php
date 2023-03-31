<?php
class Food extends Product {
    private $brand;
    private $ingredients;
    private $weight;

    public function __construct($id, $name, $description, $price, $quantityAvailable, $imageUrl, $category, $brand, $ingredients, $weight) {
        parent::__construct($id, $name, $description, $price, $quantityAvailable, $imageUrl, $category);
        $this->brand = $brand;
        $this->ingredients = $ingredients;
        $this->weight = $weight;
    }


}
?>