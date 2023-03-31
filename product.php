<?php
class Product {
    protected $id;
    protected $name;
    protected $description;
    protected $price;
    protected $quantityAvailable;
    protected $imageUrl;
    protected $category;

    public function __construct($id, $name, $description, $price, $quantityAvailable, $imageUrl, $category) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->quantityAvailable = $quantityAvailable;
        $this->imageUrl = $imageUrl;
        $this->category = $category;
    }

}

?>

