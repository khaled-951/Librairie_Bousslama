<HTML>
<head>
</head>
<body>
<?PHP
include "entities/produit.php";
include "core/produitC.php";
if (isset($_GET['id'])){
	$prdC=new produitC();
    $result=$prdC->recupererProduit($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nom=$row['nom'];
		$image=$row['prix'];
		$quantite=$row['quantite'];
		$description=$row['description'];
		$cat=$row['cat'];
		

?>
<form method="POST">
<table>
<caption>Modifier produit</caption>
<tr>
<td>id</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>prix</td>
<td><input type="text" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
<td>quantite</td>
<td><input type="number" name="quantite" value="<?PHP echo $quantite ?>"></td>
</tr>
<tr>
<td>description</td>
<td><input type="text" name="description" value="<?PHP echo $description ?>"></td>
</tr>
<tr>
<td>catégorie</td>
<td><input type="text" name="cat" value="<?PHP echo $cat ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>

</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$produit=new produit($_POST['id'],$_POST['nom'],$_POST['prix'],$_POST['quantite'],$_POST['description'],$_POST['cat']);
	$prdC->modifierProduit($produit,$_POST['id']);
	echo $_POST['id'];
	header('Location: livaff.php');
}
?>
</body>
</HTMl>