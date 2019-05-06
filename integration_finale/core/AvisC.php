1<?PHP
include_once "../config.php";
class AvisC{
function afficherAvis ($Avis){
		echo "id: ".$Avis->getId()."<br>";
		echo "review: ".$Avis->getreview()."<br>";
		echo "rating: ".$Avis->getrating()."<br>";
	}
	
	function ajouterAvis($Avis){
			$sql="insert into Avis (id,review,rating) values (:id,:review, :rating)";
		$db = config::getConnexion();
		try{
		
        $req=$db->prepare($sql);
        $id=$Avis->getId();
        $review=$Avis->getreview();
        $rating=$Avis->getrating();
		$req->bindValue(':id',$id);
		$req->bindValue(':review',$review);
		$req->bindValue(':rating',$rating);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherAviss(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From Avis";
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
		$sql="UPDATE Avis SET review=:review ,rating=:rating WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$Avis->getId();
		$review=$Avis->getreview();
        $rating=$Avis->getrating();
		$datas = array(':id'=>$id,':review'=>$review, ':rating'=>$rating);
		$req->bindValue(':id',$id);
		$req->bindValue(':review',$review);
		$req->bindValue(':rating',$rating);
		
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
	function rechercherAvis($HI){
		$sql="SELECT * from Avis where id LIKE '%$HI%' or review LIKE '%$HI%' or rating LIKE '%$HI%' ";
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
function AverageReview($id)
{
	$reviews=$this->recupererAvis($id);
	$reviews=$reviews->fetchAll();
	$sum=0;

	foreach ($reviews as $review ) {
			# code...
	$sum+=$review['rating'];
	}

	return $sum/count($reviews);

}

}

?>