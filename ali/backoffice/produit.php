<?php
class Produit {
	private $id;
	private $nom;
	private $image;
	private $prix;
	private $quantite;
    private $description;
    private $cat;
	



	function __construct($nom,$image,$prix,$quantite,$description,$cat){
		$this->nom=$nom;
		$this->image=$image;
		$this->prix=$prix;
		$this->quantite=$quantite;
		$this->description=$description;
        $this->cat=$cat;
	    



	}
    function getcat(){
        return $this->cat;
    }
     function setcat(){
         $this->cat=$cat;
    }
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getImage(){
		return $this->image;
	}
	function getPrix(){
		return $this->prix;
	}
	function getQuantite(){
		return $this->quantite;
	}
	function getDescription(){
		return $this->description;
	}

	function setId($id){
		$this->id=$id;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setImage($image){
		$this->image;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setQuantite($quantite){
		$this->quantite=$quantite;
	}
	function setDescription($description){
		$this->description=$description;
	}
	
}
?>
	