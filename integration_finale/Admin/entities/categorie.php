<?php
class Categorie {
	private $id;
	private $nom;

	function __construct($nom){
		$this->nom=$nom;
	}
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	
	function setId($id){
		$this->id=$id;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
}

?>
	