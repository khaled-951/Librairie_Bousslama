<?php
include "core/categorieC.php";
include "entities/categorie.php";

$catc=new categorieC();
if (!isset($_POST['catadd'])){

    $nom = $_POST['nom'];
    


    $cat=new categorie($nom);
       var_dump($cat);
       $catc->ajouterCategorie($cat);
    header('Location: cataff.php');


}


?>