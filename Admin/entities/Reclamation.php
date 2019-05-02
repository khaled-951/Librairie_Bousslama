<?PHP
class Reclamation{
	private $id;
	private $nomU;
	private $dateRec;
	private $sujet;
	public  $Description;
	public  $photo;
	
	function __construct($id,$nomU,$dateRec,$sujet,$Description,$photo){
		$this->id=$id;
		$this->nomU=$nomU;
		$this->dateRec=$dateRec;
		$this->sujet=$sujet;
		$this->Description=$Description;
		$this->photo=$photo;
	}
	
	function getId(){
		return $this->id;
	}
	function getnomU(){
		return $this->nomU;
	}
	
	function getdateRec(){
		return $this->dateRec;
	}
	function getsujet(){
		return $this->sujet;
	}
	function getDescription(){
		return $this->Description;
	}
	function getphoto(){
		return $this->photo;
	}

	function setId($id){
		$this->id=$id;
	}
	
	function setnomU($nomU){
		$this->nomU=$nomU;
	}
	function setdateRec($dateRec){
		$this->dateRec=$dateRec;
	}
	function setsujet($sujet){
		$this->sujet=$sujet;
	}
	function setDescription($Description){
		$this->Description=$Description;
	}
	function setphoto($photo){
		$this->photo=$photo;
	}
	
	
}

?>