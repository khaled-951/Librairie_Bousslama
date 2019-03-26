<?php

class ClassOrder{
	
	private $DB;
	
	public function __construct()
	{
		$config_DB = new config();
		$this->DB = $config_DB->getConnexion();
	}
	
	public function add($user_id, $first_name, $last_name, $email, $address, $city, $country, $zip_code, $tel)
	{	
		$req = $this->DB->prepare("select * from cart C where C.user_id = :user_id");
		$req->bindValue(':user_id', $user_id);
		$req->execute();
		
		if(count($req->fetchAll()))
		{
			$req = $this->DB->prepare("select order_id, Product_id, product_quantity from orders O right outer JOIN cart C ON O.user_id = C.User_ID where C.user_id = :user_id ");
			$req->bindValue(':user_id', $user_id);
			$req->execute();
			
			$products = $req->fetchAll();
		
			$req = $this->DB->prepare("INSERT INTO `orders` (`user_id`, `billing_name`, `billing_surname`, `billing_email`, `billing address`, `billing_postal_code`, `billing_city`, `billing_phone`, `billing_country`, `is_filled`) VALUES (:user_id, :first_name, :last_name, :email, :address, :zip_code, :city, :tel, :country, 0)");
			$req->bindValue(':user_id', $user_id);
			$req->bindValue(':first_name', $first_name);
			$req->bindValue(':last_name', $last_name);
			$req->bindValue(':email', $email);
			$req->bindValue(':address', $address);
			$req->bindValue(':city', $city);
			$req->bindValue(':country', $country);
			$req->bindValue(':zip_code', $zip_code);
			$req->bindValue(':tel', $tel);
			$req->execute();
			
			$req = $this->DB->prepare("select DISTINCT O.order_id from orders O LEFT JOIN orders_products OP ON O.order_id = OP.order_id WHERE O.user_id = :user_id");
			$req->bindValue(':user_id', $user_id);
			$req->execute();
			
			$order_id = $req->fetchAll();
		
		foreach($products as $product)
		{
			$product['order_id'] = $order_id[count($order_id) - 1]['order_id'];
			$req = $this->DB->prepare("insert into orders_products values (:order_id, :Product_ID, :product_quantity)");
			$req->bindValue(':order_id', $product['order_id']);
			$req->bindValue(':Product_ID', $product['Product_id']);
			$req->bindValue(':product_quantity', $product['product_quantity']);
			
			if($req->execute())
			{
				$req = $this->DB->prepare("delete from cart where User_ID = :user_id and Product_id = :Product_ID");
				$req->bindValue(':user_id', $user_id);
				$req->bindValue(':Product_ID', $product['Product_id']);
				$req->execute();
			}
		}
	}
	}
	
	public function GetOrders($user_id)
	{
		$req = $this->DB->prepare("select * from orders where User_ID = :user_id ");
		$req->bindValue(':user_id', $user_id);
		$req->execute();
		$Orders = $req->fetchAll() ;
		
		return $Orders ;
	}
	
	public function Get_All_Orders()
	{
		$req = $this->DB->prepare("select * from orders ");
		$req->execute();
		$Orders = $req->fetchAll() ;
		
		return $Orders ;
	}
	
	public function Fill_Order($order_id)
	{
		$req = $this->DB->prepare("UPDATE `orders` SET `is_filled`=1 WHERE order_id = :order_id ");
		$req->bindValue(':order_id', $order_id);
		$req->execute();
	}
	
	public function update_order($order_id, $user_id, $first_name, $last_name, $email, $address, $city, $country, $zip_code, $tel)
	{
		$req = $this->DB->prepare("select * from orders where User_ID = :user_id and order_id = :order_id");
		$req->bindValue(':user_id', $user_id);
		$req->bindValue(':order_id', $order_id);
		$req->execute();
		
		if(!empty($req->fetchAll()))
		{
			$req = $this->DB->prepare("UPDATE `orders` SET `billing_name`=:first_name,`billing_surname`=:last_name,`billing_email`=:email,`billing address`=:address,`billing_postal_code`=:zip_code,`billing_city`=:city,`billing_phone`=:tel,`billing_country`=:country WHERE order_id = :order_id ");
			$req->bindValue(':order_id', $order_id);
			$req->bindValue(':first_name', $first_name);
			$req->bindValue(':last_name', $last_name);
			$req->bindValue(':email', $email);
			$req->bindValue(':address', $address);
			$req->bindValue(':city', $city);
			$req->bindValue(':country', $country);
			$req->bindValue(':zip_code', $zip_code);
			$req->bindValue(':tel', $tel);
			$req->execute();
		}
	}
	
	public function delete_order($order_id, $user_id)
	{
		$req = $this->DB->prepare("DELETE FROM `orders_products` WHERE order_id = (SELECT order_id FROM `orders` WHERE user_id = :user_id and order_id = :order_id AND is_filled = 0) ");
		$req->bindValue(':order_id', $order_id);
		$req->bindValue(':user_id', $user_id);
		$req->execute();
		
		$req = $this->DB->prepare("delete from orders where order_id = :order_id AND user_id = :user_id");
		$req->bindValue(':order_id', $order_id);
		$req->bindValue(':user_id', $user_id);
		$req->execute();
	}
	
	public function delete_all_orders($user_id)
	{
		$req = $this->DB->prepare("SELECT order_id FROM `orders` WHERE user_id = :user_id AND is_filled = 0");
		$req->bindValue(':user_id', $user_id);
		$req->execute();
		$orders = $req->fetchAll();
		
		$done = 0 ;
		foreach($orders as $order)
		{
			$req = $this->DB->prepare("DELETE FROM `orders_products` WHERE order_id = :order_id");
			$req->bindValue(':order_id', $order['order_id']);
			$req->execute();
			$done = 1 ;
		}
		
		if($done)
		{
			$req = $this->DB->prepare("delete from orders where user_id = :user_id AND is_filled = 0");
			$req->bindValue(':user_id', $user_id);
			$req->execute();
		}
	}
}

?>