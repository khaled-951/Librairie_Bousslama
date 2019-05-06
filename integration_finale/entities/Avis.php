<?PHP
class Avis{
	private $id;
	private $review;
	public  $rating;
	
	
	function __construct($id,$review,$rating){
		$this->id=$id;
		$this->review=$review;
		$this->rating=$rating;
	}
	
	function getId(){
		return $this->id;
	}
	function getreview(){
		return $this->review;
	}
	function getrating(){
		return $this->rating;
	}
	
	function setId($id){
		$this->id=$id;
	}
	
	function setreview($review){
		$this->review=$review;
	}
	function setrating($rating){
		$this->rating=$rating;
	}
	
}

?>