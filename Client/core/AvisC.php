<?PHP
include "config.php";
class AvisC {
	
function afficherAvis ($Avis){
		echo "id: ".$Avis->getId()."<br>";
		echo "Sujet: ".$Avis->getSujet()."<br>";
		echo "commentaire: ".$Avis->getcommentaire()."<br>";
	}
	function ajouterAvis($Avis){
		$sql="insert into avis (id,Sujet,commentaire) values (:id,:Sujet, :commentaire)";
		$db = config::getConnexion();
		try{
		
        $req=$db->prepare($sql);
        $Sujet=$Avis->getSujet();
        $commentaire=$Avis->getcommentaire();
		$req->bindValue(':id',$id);
		$req->bindValue(':Sujet',$Sujet);
		$req->bindValue(':commentaire',$commentaire);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherAviss(){
		//$sql="SElECT * From Avis e inner join formationphp.Avis a on e.Sujet= a.Sujet";
		$sql="SElECT * From avis";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerAvis($id){
		$sql="DELETE FROM Avis where id= :id";
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
	function modifierAvis($Avis,$id){
		$sql="UPDATE Avis SET id=:idd,Sujet=:Sujet, commentaire=:commentaire WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$Avis->getId();
		$Sujet=$Avis->getSujet();
        $commentaire=$Avis->getcommentaire();
		$datas = array(':idd'=>$idd,':id'=>$id, ':Sujet'=>$Ssujet, ':commentaire'=>$commentaire);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':Sujet',$Sujet);
		$req->bindValue(':commentaire',$commentaire);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererAvis($id){
		$sql="SELECT * from Avis where id=$id";
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