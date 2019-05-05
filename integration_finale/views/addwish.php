<?PHP
session_start();
include "../entities/wishlist.php";
include "../core/wishlistC.php";

$w=new wishlistC();
var_dump($_SESSION['idclient']);

$wish=$w->addwishlist((int)$_GET['ido'],(int)$_SESSION['idclient']);
header('Location: wishlist2.php');

?>