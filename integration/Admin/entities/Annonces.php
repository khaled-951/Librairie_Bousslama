<?PHP
class Annonces{
	private $id;
	private $Type;
	private $Description;
	function __construct($id,$Type,$Description){
		$this->id=$id;
		$this->Type=$Type;
		$this->Description=$Description;
	}
	
	function getId(){
		return $this->id;
	}
	function getType(){
		return $this->Type;
	}
	
	function getDescription(){
		return $this->Description;
	}

	function setId($id){
		$this->id=$id;
	}
	
	function setType($Type){
		$this->Type=$Type;
	}
	function setDescriptio($Description){
		$this->Description=$Description;
	}
	
	
}

?>