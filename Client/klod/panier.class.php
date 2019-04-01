<?php

class ClassPanier{
	
	private $DB;
	
	public function __construct($DB)
	{
		$this->DB = $DB ;
	}
	
	public function add($user_id, $product_id, $quantity)
	{	
		$req = $this->DB->prepare("select * from products where product_id = :product_id");
			$req->bindValue(':product_id', $product_id) ;
			$req->execute();
		if ($quantity > 0 && !empty($req->fetchAll()))
		{
			$req = $this->DB->prepare("select * from cart where user_id = :user_id AND product_id = :product_id");
			$req->bindValue(':user_id', $user_id);
			$req->bindValue(':product_id', $product_id) ;
			$req->execute();
		
			if( empty($req->fetchAll()) )
			{				
				$req = $this->DB->prepare("insert into cart (user_id, product_id, product_quantity) values (:user_id, :product_id, :quantity)");
				$req->bindValue(':user_id', $user_id);
				$req->bindValue(':product_id', $product_id) ;
				$req->bindValue(':quantity', $quantity);
				$req->execute();
			}
			else
			{
				$req = $this->DB->prepare("select * from cart where user_id = :user_id AND product_id = :product_id");
				$req->bindValue(':user_id', $user_id);
				$req->bindValue(':product_id', $product_id) ;
				$req->execute();
				$product = $req->fetchAll() ;
				
				$this->update_quantity($user_id, $product_id, $product[0]['product_quantity'] + $quantity ) ;
			}
		}
	}
	
	public function GetPanier($user_id)
	{
		$req = $this->DB->prepare("select * from cart where user_id = :user_id");
		$req->bindValue(':user_id', $user_id);
		$req->execute();
		$products = $req->fetchAll() ;
		
		return $products ;
	}
	
	public function update_quantity($user_id, $product_id, $quantity)
	{
		if($quantity > 0)
		{	
				$req = $this->DB->prepare("update cart set product_quantity = :product_quantity where user_id = :user_id AND product_id = :product_id");
				$req->bindValue(':user_id', $user_id);
				$req->bindValue(':product_id', $product_id);
				$req->bindValue(':product_quantity', $quantity);
				$req->execute();
			
		}
	}
	
	public function delete_product_from_cart($user_id, $product_id)
	{
		$req = $this->DB->prepare("delete from cart where user_id = :user_id and product_id = :product_id");
		$req->bindValue(':user_id', $user_id);
		$req->bindValue(':product_id', $product_id);
		$req->execute();
	}
	
	public function del_cart($user_id)
	{
		$req = $this->DB->prepare("delete from cart where user_id = :user_id");
		$req->bindValue(':user_id', $user_id);
		$req->execute();
	}
	
	public function CalulateTotal($user_id)
	{
		$req = $this->DB->prepare("select * from cart where user_id = :user_id");
		$req->bindValue(':user_id', $user_id);
		$req->execute();
		$products = $req->fetchAll() ;
		
		if(empty($products))
			return 0 ;
		
		$sum = 0 ;
		foreach($products as $product)
		{
			$sum+= $this->Get_Product_Price($product[1]) * $product[2];
		}
		
		return $sum ;
	}
	
	public function Get_Product_Price($product_id)
	{
		$req = $this->DB->prepare("SELECT DISTINCT product_price FROM `cart` C, `products` P WHERE C.Product_id = P.Product_id and P.Product_id = :product_id");
		$req->bindValue(':product_id', $product_id);
		$req->execute();
		$data = $req->fetchAll();
		return $data[0]['product_price'];
	}
	
	public function Get_Product_Name($product_id)
	{
		$req = $this->DB->prepare("SELECT DISTINCT product_name FROM `cart` C, `products` P WHERE C.Product_id = P.Product_id and P.Product_id = :product_id");
		$req->bindValue(':product_id', $product_id);
		$req->execute();
		$data = $req->fetchAll();
		
		return $data[0]['product_name'];
	}
}
?>