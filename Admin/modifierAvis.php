<HTML>
<head>
</head>
<body>
<?PHP
include "entities/Avis.php";
include "core/AvisC.php";
if (isset($_GET['id'])){
	$AvisC=new AvisC();
    $result=$AvisC->recupererAvis($_GET['id']);
	foreach($result as $row){
		$id=$id['id'];
		$Sujet=$row['Sujet'];
		$commentaire=$row['commentaire'];
?>
<form method="POST">
<table>
<caption>Modifier Avis</caption>
<tr>
<td>Sujet</td>
<td><input type="text" name="Sujet" value="<?PHP echo $Sujet ?>"></td>
</tr>
<tr>
<td>commentaire</td>
<td><input type="text" name="commentaire" value="<?PHP echo $commentaire ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$Avis=new Avis($_POST['id'],$_POST['Sujet'],$_POST['commentaire']);
	$AvisC->modifierAvis($Avis,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherAvis.php');
}
?>
</body>
</HTMl>