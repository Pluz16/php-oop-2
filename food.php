<?php
require_once 'product.php';

class Food extends Product {
    public function isFood() {
        return true;
    }
}
?>
