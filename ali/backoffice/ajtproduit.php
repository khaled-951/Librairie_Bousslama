<?php
include "core/produitC.php";
include "entities/produit.php";

$prodc=new produitC();
if (!isset($_POST['prdadd'])){

    $nom = $_POST['nom'];
    $image = $_POST['image'];
    $prix = $_POST['prix'];
    $quantite = $_POST['quantite'];
    $description = $_POST['description'];
    $cat=$_POST['cat'];
   


    $prd=new produit($nom,$quantite,$prix,$description,$cat,$image);
       var_dump($prd);
       $prodc->ajouterProduit($prd);
    header('Location: livaff.php');


}


?>