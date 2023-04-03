<?php
require_once 'Product.php';

class Food extends Product {
    private $scadenza;

    public function __construct($id, $nome, $descrizione, $prezzo, $immagine, $categoria, $scadenza) {
        parent::__construct($id, $nome, $descrizione, $prezzo, $immagine, $categoria);
        $this->scadenza = $scadenza;
    }

    public function getScadenza() {
        return $this->scadenza;
    }
}

trait Expiration {
    public function isExpired() {
        $now = new DateTime();
        return $this->getScadenza() < $now;
    }
}

?>

