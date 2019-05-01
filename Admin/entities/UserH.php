<?PHP
class User{
	private $userid;
	private $nom;
	private $prenom;
	private $email;
	private $password;
	function __construct($userid,$nom,$prenom,$email,$password){
		$this->userid=$userid;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->email=$email;
		$this->password=$password;
	}
	
	function getuserid(){
		return $this->userid;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getEmail(){
		return $this->email;
    }
    function getPassword(){
		return $this->password;
    }
    function setuserid($userid){
		$this->userid=$userid;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setPassword($password){
		$this->password=$password;
	}
	function setEmail($email){
		$this->email=$email;
	}
	
}

?>