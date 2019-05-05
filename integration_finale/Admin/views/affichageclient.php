<?PHP
include "../core/CompteC.php";
$Compte1C=new CompteC();
$listeCompte=$Compte1C->afficherCompteclient();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>mail</td>
<td>first name</td>
<td>last name</td>
<td>password</td>
</tr>

<?PHP
foreach($listeCompte as $row){
	?>
	<tr>
	<td><?PHP echo $row['Mail']; ?></td>
	<td><?PHP echo $row['FirstName']; ?></td>
	<td><?PHP echo $row['LastName']; ?></td>
	<td><?PHP echo $row['PassWord']; ?></td>
	
	</tr>

<?PHP
}
?>
</table>


