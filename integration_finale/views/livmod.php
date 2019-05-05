<?php
include "../core/livraisonC.php";
include "../entities/Livraison.php";

$livc=new livraisonC();
if (!isset($_POST['livaddd'])){

    $nom = $_POST['nom_destinataire'];
    $prenom = $_POST['prenom_destinataire'];
    $code = $_POST['code_postale'];
    $rue = $_POST['rue_et_ville'];
    $pays = $_POST['pays'];
    $tel=$_POST['tel_gsm'];
    $dtl=$_POST['date_demande_livraison'];
    $dte=$_POST['date_livraison_estimer'];


    $liv=new Livraison($nom,$prenom,$code,$rue,$pays,$tel,$dtl,$dte);
       var_dump($liv);
       $livc->modifierlivraison($liv,(int)$_GET['id']);
  header('Location: /integration/Admin/views/livaff1.php');



}


?>
