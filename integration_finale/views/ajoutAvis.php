<?php
include "../entities/Avis.php";
include "../core/AvisC.php";

if (isset($_POST['id']) and isset($_POST['review']) and isset($_POST['rating'])){
$Avis1=new Avis($_POST['id'],$_POST['review'],$_POST['rating']);

//var_dump($Avis1);
$Avis1C=new AvisC();
$Avis1C->ajouterAvis($Avis1);
header('Location: product-page.php?details=' . $_POST["id"]);
	
}else{
	echo "vérifier les champs";
}
//*/
?>


















