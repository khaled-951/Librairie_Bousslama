<?PHP
include "../core/AvisC.php";
$Avis1C=new AvisC();
$listeAviss=$Avis1C->afficherAviss();

//var_dump($listeAviss->fetchAll());
?>
<table border="1">
<tr>
<td>id</td>
<td>Sujet</td>
<td>commentaire</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeAviss as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['Sujet']; ?></td>
	<td><?PHP echo $row['commentaire']; ?></td>
	<td><form method="POST" action="supprimerAvis.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierAvis.php?id=<?PHP echo $row['id']; ?>">Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


