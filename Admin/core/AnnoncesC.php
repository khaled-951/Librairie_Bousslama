1<?PHP
include "config.php";
class AnnoncesC{
function afficherAnnonce ($Annonces){
		echo "id: ".$Annonces->getId()."<br>";
		echo "Type: ".$Annonces->getType()."<br>";
		echo "Description: ".$Annonces->getDescription()."<br>";
	}
	
	function ajouterAnnonces($Annonces){
		$sql="insert into Annonces (id,Type,Description) values (:id,:type, :Description)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Type=$Annonces->getType();
        $Description=$Annonces->getDescription();
		$req->bindValue(':id',$id);
		$req->bindValue(':type',$Type);
		$req->bindValue(':Description',$Description);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherAnnonces(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From Annonces";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerAnnonces($id){
		$sql="DELETE FROM Annonces where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierAnnonces($Annonces,$id){
		$sql="UPDATE annonces SET id=:idd,type=:type ,Description=:Description WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$Annonces->getId();
		$type=$Annonces->getType();
        $Description=$Annonces->getDescription();
		$datas = array(':idd'=>$idd,':id'=>$id,':type'=>$type, ':Description'=>$Description);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':type',$type);
		$req->bindValue(':Description',$Description);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererAnnonces($id){
		$sql="SELECT * from Annonces where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherAnnonces($HI){
		$sql="SELECT * from Annonces where id LIKE '%$HI%' or type LIKE '%$HI%' or Description LIKE '%$HI%' ";
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
}

?>