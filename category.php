<?php
class Category {
    private $id;
    private $name;
    private $products;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
        $this->products = [];
    }

    public function addProduct($product) {
        $this->products[] = $product;
    }

    public function getProducts() {
        return $this->products;
    }

}

?>