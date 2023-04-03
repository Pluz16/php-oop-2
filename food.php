<?php
require_once 'product.php';

trait Expiration {
    private $scadenza;

    public function setScadenza($scadenza) {
        $this->scadenza = $scadenza;
    }

    public function getScadenza() {
        return $this->scadenza;
    }

    public function isExpired() {
        return $this->scadenza < date('Y-m-d');
    }
}

class Food extends Product {
    use Expiration;

    public function isFood() {
        return true;
    }
}
?>


