	<?PHP
include "../config.php";
class CategoryC{
function afficherCategory ($category){
		echo "Userid: ".$category->getuserid()."<br>";
		echo "Role: ".$category->getRole()."<br>";
	}
	function ajouterCategory($category){
		$sql="insert into category (userid,role) values (:userid,:role)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $userid=$category->getuserid();
        $role=$category->getRole();
		$req->bindValue(':userid',$userid);
		$req->bindValue(':role',$role);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	
	function afficherCategories(){
		$sql="SElECT * From category order by role";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function rechercher($str){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="    SElECT * from category where userid like '%$str%' or role like '%$str%'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	
	function supprimerCategory($userid){
		$sql="DELETE FROM category where userid=:userid";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':userid',$userid);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    function modifierCategory($category,$userid){
		$sql="UPDATE category SET userid=:userid1, role=:role WHERE userid=:userid";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$userid1=$category->getuserid();
        $role=$category->getRole();
		$datas = array(':userid1'=>$userid1,':userid'=>$userid, ':role'=>$role);
		$req->bindValue(':userid',$userid);
		$req->bindValue(':userid1',$userid1);
		$req->bindValue(':role',$role);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
    
	function recupererCategory($userid){
		$sql="SELECT * from category where userid=$userid";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function stats(){
		$sql="Select role,count(*) as 'Number' from category Group by role";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function rechercherListeCategory($userid){
		$sql="SELECT * from category where userid=$userid";
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