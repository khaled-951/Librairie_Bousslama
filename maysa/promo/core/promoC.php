
<?PHP
include "../config.php";
include "../entities/promo.php";
class PromoC {
function afficherpromo ($promo){
		echo "id: ".$promo->getid()."<br>";
		echo "nom: ".$promo->getnom()."<br>";
		echo "image: ".$promo->getimage()."<br>";
		echo "prix_ancien: ".$promo->getprix_ancien()."<br>";
		echo "prix_nouveau: ".$promo->getprix_nouveau()."<br>";
		echo "description: ".$promo->getdescription()."<br>";




	}

	function ajouterPromo($promo){
		$sql="insert into promo (id,nom,image,prix_ancien,prix_nouveau,description) values (:id, :nom,:image,:prix_ancien,:prix_nouveau,:description)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$promo->getid();
        $nom=$promo->getnom();
        $image=$promo->getimage();
        $prix_ancien=$promo->getprix_ancien();
		$prix_nouveau=$promo->getprix_nouveau();
		$description=$promo->getdescription();


		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':image',$image);
		$req->bindValue(':prix_ancien',$prix_ancien);
		$req->bindValue(':prix_nouveau',$prix_nouveau);
		$req->bindValue(':description',$description);



		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
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

	function supprimerPromo($Id){
		$sql="DELETE FROM promo WHERE Id= :Id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id',$Id);

		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

function modifiePromo($promo,$id){
		$sql="UPDATE promo SET id=:idd, nom=:nom,image=:image,prix_ancien=:prix_ancien,prix_nouveau=:prix_nouveau,description=:description WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$promo->getid();
        $nom=$promo->getnom();
        $image=$promo->getimage();
        $prix_an=$promo->getprix_ancien();
        $prix_nouv=$promo->getprix_nouveau();
        $descrip=$promo->getdescription();
		$datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':image'=>$image,':prix_ancien'=>$prix_an,':prix_nouveau'=>$prix_nouv,':description'=>$descrip);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':image',$image);
		$req->bindValue(':prix_ancien',$prix_an);
		$req->bindValue(':prix_nouveau',$prix_nouv);
		$req->bindValue(':description',$descrip);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererPromo($Id){
		$sql="SELECT * from promo where Id=$Id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	/*function rechercherListepromos($tarif){
		$sql="SELECT * from promo where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/

}

?>