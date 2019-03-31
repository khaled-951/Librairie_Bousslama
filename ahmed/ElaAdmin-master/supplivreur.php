<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 3/30/2019
 * Time: 3:55 PM
 */

include "../ElaAdmin-master/core/LivreurC.php";

$l=new LivreurC();
$x=0+$_GET['id'];
var_dump($x);
$l->supprimerLivreur((int)$_GET['id']);

header('Location: livreuraff.php');


?>