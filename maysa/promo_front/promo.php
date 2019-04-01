<?PHP
class Promo{

    private $id;
    private $nom;
    private $image;
    private $prix_ancien;
    private $prix_nouveau;
    private $description;

    



	function __construct($Id,$Nom,$Image,$Prix_Ancien,$Prix_Nouveau,$Description){
		$this->id=$Id;
		$this->nom=$Nom;
		$this->image=$Image;
		$this->prix_ancien=$Prix_Ancien;
		$this->prix_nouveau=$Prix_Nouveau;
		$this->description=$Description;
		


	}
	
	function getid(){
		return $this->id;
	}
	function getnom(){
		return $this->nom;
	}
	function getimage(){
		return $this->image;
	}
	
	function getprix_ancien(){
		return $this->prix_ancien;
	}
	function getprix_nouveau(){
		return $this->prix_nouveau;
	}
    function getdescription(){
		return $this->description;
	}

	



	function setid($Id){
		$this->id=$id;
	}
	function setnom($Nom){
		$this->nom=$Nom;
	}
	
	function setimage($Image){
		 $this->image=$Image;
	}
	function setprix_ancien($Prix_Ancien){
		$this->prix_ancien=$Prix_Ancien;
    }
    function setprix_nouveau($Prix_Nouveau){
		$this->prix_nouveau=$Prix_Nouveau;
	}
    function setdescription($Description){
		$this->description=$Description;
	}

	
}

?>