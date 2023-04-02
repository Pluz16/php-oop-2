<?php

class Toy extends Product {
	public function __construct($id, $nome, $descrizione, $prezzo, $immagine, $categoria) {
		parent::__construct($id, $nome, $descrizione, $prezzo, $immagine, $categoria);
	}

	public function isToy() {
		return true;
	}
}
?>
