<?php
session_start();
include_once '../config.php';

if(isset($_POST['modifierCompte']))
{
	$sql = "update utilisateur set nom = :nom,prenom = :prenom,dateNaissance=:dateNaissance,mail=:mail,sexe=:sexe,adresse=:adresse,numTel=:numTel,mdp=:mdp where id = :id";
	$db = config::getConnexion();

	$req = $db->prepare($sql);

	$req->bindValue(':id', $_SESSION['id']);
	$req->bindValue(':nom', $_POST['nom']);
	$req->bindValue(':prenom', $_POST['prenom']);
	$req->bindValue(':dateNaissance', $_POST['dateNaissance']);
	$req->bindValue(':mail',$_POST['mail']);
	$req->bindValue(':sexe',$_POST['sexe']);
	$req->bindValue(':adresse', $_POST['adresse']);
	$req->bindValue(':numTel', $_POST['numTel']);
	if($_POST['mdp']=="")
	{
		$req->bindValue(':mdp', $_SESSION['mdp']);

	}
	else
	{
		$req->bindValue(':mdp', $_POST['mdp']);
		$_SESSION['mdp']=$_POST['mdp'];

	}
	$_SESSION['nom']=$_POST['nom'];
	$_SESSION['prenom']=$_POST['prenom'];
	$_SESSION['dateNaissance']=$_POST['dateNaissance'];
	$_SESSION['mail']=$_POST['mail'];
	$_SESSION['adresse']=$_POST['adresse'];
	$_SESSION['sexe']=$_POST['sexe'];
	$_SESSION['numTel']=$_POST['numTel'];

	$req->execute();
	header("location: afficherUtilisateur.php");
}
else if(isset($_POST['supprimer']))
{
	$sql="delete from utilisateur where id = :id";
	$db=config::getConnexion();

	$req=$db->prepare($sql);

	$req->bindValue(':id',$_SESSION['id']);

	$req->execute();
	session_destroy();
	header("location: ../index.php");
}










?>