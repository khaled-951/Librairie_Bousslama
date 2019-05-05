<?php

include_once "../config.php";

class WishlistC {

function afficherwishlistafef($wishlistafef){

echo "id: ".$wishlistafef->getId()."<br>";
echo "id_client: ".$wishlistafef->getid_client()."<br>";
echo "id_produit: ".$wishlistafef->getid_produit()."<br>";


}

    
     function  addwishlist($id,$xd)
    {
$sql="insert into wishlist (id_client,id_produit) values (:xd,:id)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	

         $req->bindValue(':id',$id);
         $req->bindValue(':xd',$xd);
		
		
	

		$req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }

     function Viewwishlist($sess){
		$sql="SElECT * From produit INNER JOIN wishlist ON wishlist.id_produit=id where wishlist.id_client=$sess";
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
/*function trierwishlistafefs(){
		$sql="SElECT * From wishlist order by nom asc ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}*/

  
 /* function supprimerwishlistafef($id_client){
    $sql="DELETE FROM wishlist where id_client= :id_client";
      $sql1="DELETE FROM adresse_client where id_client= :idclient";
    $db = config::getConnexion();
        $req=$db->prepare($sql);
         $req1=$db->prepare($sql1);
    $req->bindValue(':idclient',$idclient);
       $req1->bindValue(':idclient',$idclient);
    try{
            $req->execute();
         $req1->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        
      
  }
function modifierwishlistafef($wishlistafef,$idclient){
    $sql="UPDATE wishlistafef SET idclient=:idclientt, nom=:nom,prenom=:prenom,adresse=:adresse,tel=:tel , email=:email,mdp=:mdp WHERE idclient=:idclient";
    $sql1="UPDATE adresse_client SET id_client=:idclientt, adresse=:adresse WHERE  id_client= :idclient";
    $db = config::getConnexion();
    //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{    
        $req=$db->prepare($sql);
    $req1=$db->prepare($sql1);
    
        $idclientt=$wishlistafef->getIdclient();
        $nom=$wishlistafef->getNom();
        $prenom=$wishlistafef->getPrenom();
        $adresse=$wishlistafef->getAdresse();
        $tel=$wishlistafef->getTel();
        $email=$wishlistafef->getemail();
        $mdp=$wishlistafef->getmdp();
      
    $datas = array(':idclientt'=>$idclientt, ':idclient'=>$idclient, ':nom'=>$nom,':prenom'=>$prenom,':adresse'=>$adresse,':tel'=>$tel,':email'=>$email,':mdp'=>$mdp);
    $req->bindValue(':idclientt',$idclientt);
    $req->bindValue(':idclient',$idclient);
    $req->bindValue(':nom',$nom);
    $req->bindValue(':prenom',$prenom);
    $req->bindValue(':adresse',$adresse);
    $req->bindValue(':tel',$tel);
    $req->bindValue(':email',$email);
    $req->bindValue(':mdp',$mdp);
    $req1->bindValue(':adresse',$adresse);

    
    
            $req->execute();
            $req1->execute();
      
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
 /*  echo " Les datas : " ;
  print_r($datas);
        }
    
  }*/

	/*function filtrer($xD)
	{
		
	
        $sql = "select * from wishlistafef where nom='$xD' or prenom='$xD' or adresse='$xD' or tel='$xD' or email='$xD' or mdp='$xD'";
        $db = config::getConnexion();
        $req=$db->query($sql);
        return $req;
	}
   function filtrer2($val,$val2){
		
	
        $sql = "select * from wishlistafef where nom='$val' and mdp='$val2'";
        $db = config::getConnexion();
        $req=$db->query($sql);
        return $req;
	}
/*	function compter()
	{
        //$reponse = "SELECT count(idclient) FROM wishlistafef";
        $db = config::getConnexion();
        $nb = $db->query($reponse);
$result = mysql_query("select COUNT(idclient) from wishlistafef");
while ($row = mysql_fetch_object($result)) {
    echo $row;
            

	}*/








