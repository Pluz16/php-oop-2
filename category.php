<?php
class Category {
	private $id;
	private $nome;
	private $icona;

	public function __construct($id, $nome, $icona) {
		$this->id = $id;
		$this->nome = $nome;
		$this->icona = $icona;
	}

	public function getId() {
		return $this->id;
	}

	public function getNome() {
		return $this->nome;
	}

	public function getIcona() {
		return $this->icona;
	}
}

?>