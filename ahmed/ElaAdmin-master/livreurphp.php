<?php
include "core/LivreurC.php";
include "entities/livreur.php";

$livrc=new livreurC();
if (!isset($_POST['livreuradd'])){


    $nom= $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $num_tel = $_POST['num_tel'];
    $email=$_POST['Email'];
    $zone_habitation=$_POST['zone'];
    $situation=$_POST['situation'];
    $vehicule=$_POST['vehicule'];
    $zone_de_livraison=$_POST['zone_livraison'];
    $livreur=new livreur($nom, $prenom,$age,$num_tel,$email, $zone_habitation, $situation, $vehicule, $zone_de_livraison);
       var_dump($livreur);
       $livrc->ajout1E($livreur);
   header('Location: \ProjetWeb\ElaAdmin-master\livreuraff.php');

} ?>
