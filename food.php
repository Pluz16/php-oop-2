<?php
require_once 'product.php';

class Food extends product {
    public function isFood() {
        return true;
    }
}
?>
