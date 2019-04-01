<HTML>
<head>
</head>
<body>
<?PHP
include "entities/Annonces.php";
include "core/AnnoncesC.php";
if (isset($_GET['id'])){
	$AnnoncesC=new AnnoncesC();
    $result=$AnnoncesC->recupererAnnonces($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$Type=$row['type'];
		$Description=$row['Description'];
		
?>
<form method="POST">
<table>
<caption>Modifier Annonces</caption>
<tr>
<td>id</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Type</td>
<td><input type="text" name="Type" value="<?PHP echo $Type ?>"></td>
</tr>
<tr>
<td>Description</td>
<td><input type="text" name="Description" value="<?PHP echo $Description ?>"></td>
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
	$Annonces=new Annonces($_POST['id'],$_POST['Type'],$_POST['Description']);
	$AnnoncesC->modifierAnnonces($Annonces,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherAnnonces.php');
}
?>
</body>
</HTMl>