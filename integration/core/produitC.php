<?PHP
include_once "../config.php";
class ProduitC {
	
	function ajouterProduit($produit){
		$sql="insert into produit (nom,image,prix,quantite, description,cat) 
		values (:nom,:image,:prix,:quantite, :description,:cat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	
        $nom=$produit->getNom();
        $image=$produit->getImage();
        $prix=$produit->getPrix();
        $quantite=$produit->getQuantite();
        $description=$produit->getDescription();
        $cat=$produit->getcat();
		
		
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':image',$image);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':description',$description);
		$req->bindValue(':cat',$cat);
		
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherProduit(){
		$sql="select * From produit";
		$db = config::getConnexion();
		try{
			$sth = $db->prepare($sql);
			$sth->execute();
			$liste = $sth->fetchAll();
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    function trierProduit(){
		$sql="select * From produit Order by nom ASC";
		$db = config::getConnexion();
		try{
			$sth = $db->prepare($sql);
			$sth->execute();
			$liste = $sth->fetchAll();
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
     	function rechercherProduit($HI){
		$sql="SELECT * from produit where nom LIKE '%$HI%' or prix LIKE '%$HI%' or quantite LIKE '%$HI%' or description LIKE '%$HI%'";
		$db = config::getConnexion();
		try{
		    $sth = $db->prepare($sql);
			$sth->execute();
			$liste = $sth->fetchAll();
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerProduit($id){
		$sql="DELETE FROM produit where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierProduit($produit,$id){
		$sql="UPDATE produit SET nom = :nom, image = :image, prix = :prix , quantite = :quantite, description = :description 
        		 WHERE id=:id";
		$db = config::getConnexion();
	try{		
        $req=$db->prepare($sql);
		
	    $nom=$produit->getNom();
        $image=$produit->getImage();
        $prix=$produit->getPrix();
        $quantite=$produit->getQuantite();
        $description=$produit->getDescription();
	
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':image',$image);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':description',$description);
		
		$req->bindValue(':id',$id);
	
    	$s=$req->execute();
	
    }
    catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
    }
		
	}
	function recupererProduit($id){
		$sql="SELECT * from produit where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function Number()
    {
        $sql="SELECT COUNT(quantite) as QTE FROM produit WHERE 1=1";
        $db=config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();
            $l=$query->fetch();
            return $l;
        }
        catch(Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function Statistique()
    {$sql="SELECT nom as name from produit";
     $db=config::getConnexion();
     try{
         $qry=$db->prepare($sql);
         $qry->execute();
         $liste=$qry->fetch();
         return $liste;
         
     }
     catch(Exception $e)
     {
         die('Erreur: '.$e->getMessage());
     }
        
	}
	function afficherpromos(){
		//$sql="SElECT * From promo e inner join formationphp.promo a on e.cin= a.cin";
		$sql="SElECT * From promo";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


}

?>