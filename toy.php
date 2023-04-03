<?php

require_once 'product.php';

class Toy extends Product {
    public function isToy() {
        return true;
    }
}
?>
