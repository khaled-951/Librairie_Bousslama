<?PHP
class Category{
	private $userid;
	private $role;
	function __construct($userid,$role){
		$this->userid=$userid;
		$this->role=$role;
	}
	
	function getuserid(){
		return $this->userid;
	}
	function getRole(){
		return $this->role;
	}
    function setuserid($userid){
		$this->userid=$userid;
	}
	function setRole($role){
		$this->role=$role;
	}
}

?>