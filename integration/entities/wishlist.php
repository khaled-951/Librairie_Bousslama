<?php
class Wishlistafef {
	private $id_wish;
	private $id_client;
	private $id_produit;

	



	function __construct($id_client,$id_produit){

		$this->id_client=$id_client;
		$this->id_produit=$id_produit;
	
	    



	}
    function getcl(){
		return $this->id_client;
	}
	
	function setId($id_client){
		$this->id_client=$id_client;
	}
function getpr(){
		return $this->id_produit;
	}
	
	function setpr($id_produit){
		$this->id_produit=$id_produit;
	}
}