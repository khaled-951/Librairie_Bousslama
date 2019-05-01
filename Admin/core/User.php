<?PHP
include "../config.php";
class UserC {
function afficherUser ($user){
		echo "userid: ".$user->getuserid()."<br>";
		echo "Nom: ".$user->getNom()."<br>";
		echo "Prénom: ".$user->getPrenom()."<br>";
		echo "Email: ".$user->getEmail()."<br>";
		echo "Password: ".$user->getPassword()."<br>";
	}
	function ajouterUser($user){
		$sql="insert into users (userid,nom,prenom,email,password) values (:userid,:nom,:prenom,:email,:password)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $userid=$user->getuserid();
        $nom=$user->getNom();
        $prenom=$user->getPrenom();
        $email=$user->getEmail();
        $password=$user->getPassword();
		
		$req->bindValue(':userid',$userid);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':password',$password);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherUsers(){
		$sql="SElECT * From users";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherUsersBYID(){
		$sql="SElECT * From users order by userid";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherUsersBYNAME(){
		$sql="SElECT * From users order by nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherUsersBYSURNAME(){
		$sql="SElECT * From users order by prenom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherUsersBYEMAIL(){
		$sql="SElECT * From users order by email";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	
	
	function supprimerUser($userid){
		$sql="DELETE FROM users where userid=:userid";
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
    function modifierUser($user,$userid){
		$sql="UPDATE users SET userid=:userid1,nom=:nom,prenom=:prenom,email=:email,password=:password WHERE userid=:userid";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$userid1=$user->getuserid();
        $nom=$user->getNom();
        $prenom=$user->getPrenom();
        $email=$user->getEmail();
        $password=$user->getPassword();
		$datas = array(':userid1'=>$userid1,':userid'=>$userid,':nom'=>$nom,':prenom'=>$prenom,':email'=>$email,':password'=>$password);
		$req->bindValue(':userid1',$userid1);
		$req->bindValue(':userid',$userid);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':password',$password);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
		
    function recupererUser($userid){
		$sql="SELECT * from users where userid=$userid";
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
        $sql="    SElECT * from users where userid like '%$str%' or nom like '%$str%' or prenom like '%$str%' or email like '%$str%'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	
	function rechercherListeUser($userid){
		$sql="SELECT * from users where userid=$userid";
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