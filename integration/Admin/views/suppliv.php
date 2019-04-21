<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 3/30/2019
 * Time: 3:55 PM
 */

include "../../core/livraisonC.php";

$livraisonC=new livraisonC();
/*$x=0+$_GET['id'];
var_dump($x);*/
$livraisonC->supprimeliv((int)$_GET['id']);
header('Location: livaff.php');


?>