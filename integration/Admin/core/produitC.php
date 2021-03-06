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
		$sql="select * From produit Order by prix ASC";
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
		$sql="SELECT * from produit where id= $id";
		$db = config::getConnexion();
		try{
		    $sth = $db->prepare($sql);
			$sth->execute();
			$liste = $sth->fetch();
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



}

?>