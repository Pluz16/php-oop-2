<?php

class Bed extends Product {
	public function __construct($id, $nome, $descrizione, $prezzo, $immagine, $categoria) {
		parent::__construct($id, $nome, $descrizione, $prezzo, $immagine, $categoria);
	}

	public function isBed() {
		return true;
	}
}



?>