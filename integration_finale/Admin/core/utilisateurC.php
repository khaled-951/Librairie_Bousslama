<?PHP
include "../config.php";



class UtilisateurC {

	function afficherUtilisateur ($utilisateur){
			echo "id: ".$utilisateur->getId()."<br>";
			echo "Nom: ".$utilisateur->getNom()."<br>";
			echo "Prénom: ".$utilisateur->getPrenom()."<br>";
			echo "Date Naissance".$utilisateur->getDateNaissance()."<br>";
			echo "Mail".$utilisateur->getMail()."<br>";
			echo "Sexe".$utilisateur->getSexe()."<br>";
			echo "Adresse".$utilisateur->getAdresse()."<br>";
			echo "Mot de Passe".$utilisateur->getMdp()."<br>";
			echo "Numero de Téléphone".$utilisateur->getNumTel()."<br>";
		}

	function ajouterUtilisateur($utilisateur){
			$sql="	INSERT INTO utilisateur 
						(id,nom,prenom,dateNaissance,mail,sexe,adresse,mdp,numTel) 
					VALUES 
						(:id,:nom,:prenom,:dateNaissance,:mail,:sexe,:adresse,:mdp,:numTel)";

			$db = config::getConnexion();
			try{
	        $req=$db->prepare($sql);
			
	        $id=$utilisateur->getid();
	        $nom=$utilisateur->getNom();
	        $prenom=$utilisateur->getPrenom();
			$dateNaissance=$utilisateur->getDateNaissance();
			$mail=$utilisateur->getMail();
			$sexe=$utilisateur->getSexe();
			$adresse=$utilisateur->getAdresse();
			$mdp=$utilisateur->getMdp();
			$numTel=$utilisateur->getNumTel();


			$req->bindValue(':id',$id);
			$req->bindValue(':nom',$nom);
			$req->bindValue(':prenom',$prenom);
			$req->bindValue(':dateNaissance',$dateNaissance);
			$req->bindValue(':mail',$mail);
			$req->bindValue(':sexe',$sexe);
			$req->bindValue(':adresse',$adresse);
			$req->bindValue(':mdp',$mdp);
			$req->bindValue(':numTel',$numTel);
			
	            $req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }
			
	}
		
	function afficherUtilisateurs(){
			//$sql="SElECT * From utilisateur e inner join formationphp.utilisateur a on e.id= a.id";
			$sql="SELECT * FROM utilisateur";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }	
	}

	function supprimerUtilisateur($id){
			$sql="DELETE FROM utilisateur where id= :id";
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

	function modifierutilisateur($utilisateur,$id){
			$sql="	UPDATE utilisateur 
					SET id=:idn, 
						nom=:nom,
						prenom=:prenom,
						dateNaissance=:dateNaissance,
						mail=:mail,
						sexe=:sexe,
						adresse=:adresse,
						mdp=:mdp,
						numTel=:numTel 
					WHERE id=:id";
			
			$db = config::getConnexion();
			//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try{		
		        $req=$db->prepare($sql);

				$idn=$utilisateur->getid();
		        $nom=$utilisateur->getNom();
		        $prenom=$utilisateur->getPrenom();
				$dateNaissance=$utilisateur->getDateNaissance();
				$mail=$utilisateur->getMail();
				$sexe=$utilisateur->getSexe();
				$adresse=$utilisateur->getAdresse();
				$mdp=$utilisateur->getMdp();
				$numTel=$utilisateur->getNumTel();



				$datas = array
							(
								':idn'=>$idn, 
								':id'=>$id, 
								':nom'=>$nom,
								':prenom'=>$prenom,
								':dateNaissance'=>$dateNaissance,
								':mail'=>$mail,
								':sexe'=>$sexe,
								':adresse'=>$adresse,
								':mdp'=>$mdp,
								':numTel'=>$numTel
							);

				$req->bindValue(':idn',$idn);
				$req->bindValue(':id',$id);
				$req->bindValue(':nom',$nom);
				$req->bindValue(':prenom',$prenom);
				$req->bindValue(':dateNaissance',$dateNaissance);
				$req->bindValue(':mail',$mail);
				$req->bindValue(':sexe',$sexe);
				$req->bindValue(':adresse',$adresse);
				$req->bindValue(':mdp',$mdp);
				$req->bindValue(':numTel',$numTel);
				
				
		            $s=$req->execute();
					
		           // header('Location: index.php');
		        }
	        catch (Exception $e){
	            echo " Erreur ! ".$e->getMessage();
	   			echo " Les datas : " ;
	  			print_r($datas);
	        }
			
	}


	function recupererUtilisateur($id){
			$sql="SELECT * from utilisateur where id=$id";
			$db = config::getConnexion();
			try{
				$liste=$db->query($sql);
				return $liste;
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
	}

	 public function trierUtilisateur()
    {
        $db=config::getConnexion();
        $sql="SELECT * FROM utilisateur order by id ASC";
        $q=$db->query($sql);
        return $q;

    }
    public function rechercheUtilisateur($HI)
    {
        $db=config::getConnexion();
        $sql="SELECT * from utilisateur where 
        		id LIKE '%$HI%' or 
        		nom LIKE '%$HI%' or 
        		prenom LIKE '%$HI%' or 
        		dateNaissance LIKE '%$HI%' or 
        		mail LIKE '%$HI%' or 
        		sexe LIKE '%$HI%' or 
        		adresse LIKE '%$HI%' or 
        		mdp LIKE '%$HI%' or 
        		numTel LIKE '%$HI%'";
        $q=$db->query($sql);
        return $q;
    }
}

?>