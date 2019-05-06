<?PHP
include "../../entities/utilisateur.php";
include "../core/utilisateurC.php";

if (
    isset($_POST['id']) and 
    isset($_POST['nom']) and 
    isset($_POST['prenom']) and 
    isset($_POST['dateNaissance']) and 
    isset($_POST['mail']) and 
    isset($_POST['sexe']) and 
    isset($_POST['adresse']) and
    isset($_POST['mdp']) and 
    isset($_POST['numTel'])
){

$utilisateur1=new utilisateur($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['dateNaissance'],$_POST['mail'],$_POST['sexe'],$_POST['adresse'],$_POST['mdp'],$_POST['numTel']);
//Partie2
/*
var_dump($utilisateur1);
}
*/
//Partie3
$utilisateur1C=new UtilisateurC();
$utilisateur1C->ajouterUtilisateur($utilisateur1);
header('Location: indexB.php');
    
}else{
    echo "vérifier les champs";
}
//*/

?>