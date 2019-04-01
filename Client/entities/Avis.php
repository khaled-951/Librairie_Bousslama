<?PHP
class Avis{
	public $id;
	public $Sujet;
	public $commentaire;
	
	function __construct($id,$Sujet,$commentaire){
		$this->id=$id;
		$this->Sujet=$Sujet;
		$this->commentaire=$commentaire;
				echo "<script type='text/javascript'>alert('trmmm');</script>";

	}
	
    
    function getId(){
		return $this->id;
	}
    function getSujet(){
		return $this->Sujet;
	}
	function getcommentaire(){
		return $this->commentaire;
	}
	function setId($id){
		$this->id=$id;
	}
	function setSujet($Sujet){
		$this->Sujet=$Sujet;
	}
	function setcommentaire($commentaire){
		$this->commentaire=$commentaire;
	}
	
}

?>