<?php

class ClassPanier{
	
	private $DB;
	
	public function __construct($DB)
	{
		$this->DB = $DB ;
	}
	
	public function add($user_id, $product_id, $price, $quantity)
	{				
		if ($quantity > 0)
		{
			$req = $this->DB->prepare("select * from cart where user_id = :user_id");
			$req->bindValue(':user_id', $user_id);
			$req->execute();
		
			if( empty($req->fetchAll()) )
			{				
				$req = $this->DB->prepare("insert into cart (user_id, products) values (:user_id, :products)");
				$req->bindValue(':user_id', $user_id);
				$req->bindValue(':products', serialize(array($product_id.",".$price.",".$quantity)));
				$req->execute();
			}
			else
			{
				$req = $this->DB->prepare("select * from cart where user_id = :user_id");
				$req->bindValue(':user_id', $user_id);
				$req->execute();
				$products = $req->fetchAll() ;
			
				$unser = unserialize($products[0]['Products']);
			
				foreach( $unser as $i => $j )
				{
					$exist = 0 ;
					$tmp = explode(',', $unser[$i]);
					if (in_array($product_id, $tmp))
					{
						$tmp[2]+=$quantity ;
						$unser[$i] = implode(',', $tmp) ;
						$exist = 1 ;
						break ;
					}
				}
				if($exist == 0 )
					array_push($unser, $product_id.",".$price.",".$quantity);

				$products = serialize($unser);
			
				$req = $this->DB->prepare("update cart set products = :products where user_id = :user_id ");
				$req->bindValue(':user_id', $user_id);
				$req->bindValue(':products', $products);
				$req->execute();
			}
		}
	}
	
	public function GetPanier($user_id)
	{
		$unser = array();
		$req = $this->DB->prepare("select * from cart where user_id = :user_id");
		$req->bindValue(':user_id', $user_id);
		$req->execute();
		$products = $req->fetchAll() ;
		
		
		if(!empty($products))
			$unser = unserialize($products[0]['Products']);
		return $unser ;
	}
	
	public function delete_product_from_cart($user_id, $product_id)
	{
		$req = $this->DB->prepare("select * from cart where user_id = :user_id");
		$req->bindValue(':user_id', $user_id);
		$req->execute();
		$products = $req->fetchAll() ;
			
		$unser = unserialize($products[0]['Products']);
			
		foreach( $unser as $i => $j )
		{
			$tmp = explode(',', $unser[$i]);
			if (in_array($product_id, $tmp))
			{
				unset($unser[$i]);
				break ;
			}
		}

		if(empty($unser))
		{
			$this->del_cart($user_id);
		}
		else
		{
			$products = serialize($unser);
			
			$req = $this->DB->prepare("update cart set products = :products where user_id = :user_id ");
			$req->bindValue(':user_id', $user_id);
			$req->bindValue(':products', $products);
			$req->execute();
		}
	}
	
	public function update_quantity($user_id, $product_id, $quantity)
	{
		if($quantity > 0)
		{
			$req = $this->DB->prepare("select * from cart where user_id = :user_id");
			$req->bindValue(':user_id', $user_id);
			$req->execute();
			$products = $req->fetchAll() ;
			
			if(!empty($products[0]))
			{
			
				$unser = unserialize($products[0]['Products']);
			
				foreach( $unser as $i => $j )
				{
					$tmp = explode(',', $unser[$i]);
					if (in_array($product_id, $tmp))
					{
						$tmp[2]=$quantity ;
						$unser[$i] = implode(',', $tmp) ;
						$exist = 1 ;
						break ;
					}
				}

				$products = serialize($unser);
			
				$req = $this->DB->prepare("update cart set products = :products where user_id = :user_id ");
				$req->bindValue(':user_id', $user_id);
				$req->bindValue(':products', $products);
				$req->execute();
			}
		}
	}	
	
	public function del_cart($user_id)
	{
		$req = $this->DB->prepare("delete from cart where user_id = :user_id");
		$req->bindValue(':user_id', $user_id);
		$req->execute();
	}
	
	public function CalulateTotal($Stuff)
	{
		$Sum = 0 ;
		if(!isset($Stuff))
			return $Sum ;
		else
			foreach($Stuff as $i)
			{
				$details = explode(',', $i);
				$Sum+= $details[1] * $details[2];
			}
		return $Sum ;
	}
}
?>