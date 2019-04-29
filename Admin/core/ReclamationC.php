1<?PHP
include "config.php";
class ReclamationC{
function afficherReclamation ($Reclamation){
		echo "id: ".$Reclamation->getId()."<br>";
		echo "nomU: ".$Reclamation->getnomU()."<br>";
		echo "dateRec: ".$Reclamation->getdateRec()."<br>";
		echo "sujet: ".$Reclamation->getsujet()."<br>";
		echo "Description: ".$Reclamation->getDescription()."<br>";
		echo "photo: ".$Reclamation->getphoto()."<br>";
	}
	
	function ajouterReclamation($Reclamation){
			$sql="insert into Reclamation (id,nomU,dateRec,sujet,Description,photo) values (:id,:nomU, :dateRec,:sujet,:Description,:photo)";
		$db = config::getConnexion();
		try{
		
        $req=$db->prepare($sql);
        $nomU=$Reclamation->getnomU();
        $dateRec=$Reclamation->getdateRec();
        $sujet=$Reclamation->getsujet();
        $Description=$Reclamation->getDescription();
        $photo=$Reclamation->getphoto();
		$req->bindValue(':id',$id);
		$req->bindValue(':nomU',$nomU);
		$req->bindValue(':dateRec',$dateRec);
		$req->bindValue(':sujet',$sujet);
		$req->bindValue(':Description',$Description);
		$req->bindValue(':photo',$photo);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherReclamations(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From Reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclamation($id){
		$sql="DELETE FROM Reclamation where id= :id";
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
	function modifierReclamation($Reclamation,$id){
		$sql="UPDATE Reclamation SET nomU=:nomU ,dateRec=:dateRec,sujet=:sujet,Description=:Description,photo=:photo WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$Reclamation->getId();
		$nomU=$Reclamation->getnomU();
        $dateRec=$Reclamation->getdateRec();
        $sujet=$Reclamation->getsujet();
        $Description=$Reclamation->getDescription();
        $photo=$Reclamation->getphoto();
		$datas = array(':id'=>$id,':nomU'=>$nomU, ':dateRec'=>$dateRec,':sujet'=>$sujet ,':Description'=>$Description,':photo'=>$photo);
		$req->bindValue(':id',$id);
		$req->bindValue(':nomU',$nomU);
		$req->bindValue(':dateRec',$dateRec);
		$req->bindValue(':sujet',$sujet);
		$req->bindValue(':Description',$Description);
		$req->bindValue(':photo',$photo);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererReclamation($id){
		$sql="SELECT * from Reclamation where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherReclamation($HI){
		$sql="SELECT * from Reclamation where id LIKE '%$HI%' or nomU LIKE '%$HI%' or dateRec LIKE '%$HI%' ";
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