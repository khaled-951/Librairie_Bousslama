<?PHP
class Events{

		private $user_id;
		private $billing_name;

		private $billing_surname;
		private $billing_email;
		private $billing_address;
		private $billing_postal_code;
		private $billing_phone;
		private $billing_city;
		private $billing_country;
		private $if_filled;
		private $order_date;
    



	function __construct($user_id,$billing_name,$billing_surname,$billing_email,$billing_address,$billing_postal_code,$billing_phone,$billing_city,$billing_country,$if_filled,$order_date){
		$this->user_id=$user_id;
		$this->billing_name=$billing_name;
		$this->billing_surname=$billing_surname;

		$this->billing_email=$billing_email;
		$this->billing_address=$billing_address;
		$this->billing_postal_code=$billing_postal_code;
		$this->billing_phone=$billing_phone;
		
		$this->billing_city=$billing_city;
		$this->billing_country=$billing_country;
		$this->if_filled=$if_filled;
		
		$this->order_date=$order_date;
	}
	
	function getuser_id(){
		return $this->user_id;
	}
	function getbilling_name(){
		return $this->billing_name;
	}
	function getbilling_surname(){
		return $this->billing_surname;
	}
	function getbilling_email(){
		return $this->billing_email;
	}
	
	
	function getbilling_address(){
		return $this->billing_address;
	}
    function getbilling_postal_code(){
		return $this->billing_postal_code;
	}
	function getbilling_phone(){
		return $this->billing_phone;
	}
	function getbilling_city(){
		return $this->billing_city;
	}
	function getbilling_country(){
		return $this->billing_country;
	}
	function getif_filled(){
		return $this->if_filled;
	}
	function getorder_date(){
		return $this->order_date;
	}
	


	function setuser_id($user_id){
		$this->user_id = $user_id ;
	}
	function setbilling_name($billing_name){
		$this->billing_name = $billing_name;
	}
	function setbilling_surname($billing_surname){
		$this->billing_surname = $billing_surname;
	}
	function setbilling_email($billing_email){
		$this->billing_email = $billing_email;
	}
	
	
	function setbilling_address($billing_address){
		$this->billing_address = $billing_address;
	}
    function setbilling_postal_code($billing_postal_code){
		$this->billing_postal_code = $billing_postal_code;
	}
	function setbilling_phone($billing_phone){
		$this->billing_phone = $billing_phone;
	}
	function setbilling_city($billing_city){
		$this->billing_city = $billing_city;
	}
	function setbilling_country($billing_country){
		$this->billing_country = $billing_country;
	}
	function setif_filled($if_filled){
		$this->if_filled = $if_filled;
	}
	function setorder_date($order_date){
		$this->order_date = $order_date;
	}
	
}

?>