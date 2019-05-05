<?PHP
include "../entities/CompteADMIN.php";
include "../core/CompteC.php";
if (isset($_POST['mailA']) and isset($_POST['firstNameA']) and isset($_POST['lastNameA']) and isset($_POST['passwordA']) and isset($_POST['rePasswordA'])  and ($_POST['passwordA'] == $_POST['rePasswordA']) and isset($_POST['mailA']) == true and empty($_POST['mailA']) == false   ){

	 $email=$_POST['mailA'];
if(filter_var($email,FILTER_VALIDATE_EMAIL)== true){
$Compte1=new compteA($_POST['mailA'],$_POST['firstNameA'],$_POST['lastNameA'],$_POST['passwordA'],$_POST['rePasswordA']);
//Partie2

//var_dump($Compte1);

// echo '<a href='.index.html'> </a>';
 header('Location: login.html');
//  exit();

 
//Partie3
$Compte1C=new CompteC();
$Compte1C->ajouterCompteADMIN($Compte1);

//header('Location: afficherEmploye.php');
	}
}
else{
	echo ("<script> alert(\"le compte n'est pas ajouter\")</script>");
 echo("<script> document.location.replace(\"register.html\")</script>");
	//echo "<script>alert(\"verifie\")</script>";
 //header('Location: login.html');
}


?>