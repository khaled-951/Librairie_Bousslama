<?php

session_start();

if(isset($_GET['User_ID']))
{
	$_SESSION['user_id'] = $_GET['User_ID'] ;
	echo 'Logged ' . $_SESSION['user_id'] . ' IN :)' . '</br><a href="panier.php">Click Here To Go To Panier !</a>' ; 
}
?>
