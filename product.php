<?php
class Product {
	private $id;
	private $nome;
	private $descrizione;
	private $prezzo;
	private $immagine;
	private $categoria;

	public function __construct($id, $nome, $descrizione, $prezzo, $immagine, $categoria) {
		$this->id = $id;
		$this->nome = $nome;
		$this->descrizione = $descrizione;
		$this->prezzo = $prezzo;
		$this->immagine = $immagine;
		$this->categoria = $categoria;
	}

	public function getId() {
		return $this->id;
	}

	public function getNome() {
		return $this->nome;
	}

	public function getDescrizione() {
		return $this->descrizione;
	}

	public function getPrezzo() {
		return $this->prezzo;
	}

	public function getImmagine() {
		return $this->immagine;
	}

	public function getCategoria() {
		return $this->categoria;
	}
}
?>

