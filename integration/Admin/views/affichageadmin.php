<?PHP
include "../core/CompteC.php";
$Compte1C=new CompteC();
$listeCompte=$Compte1C->afficherCompteadmin();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>mail</td>
<td>first name</td>
<td>last name</td>

</tr>

<?PHP
foreach($listeCompte as $row){
	?>
	<tr>
	<td><?PHP echo $row['MailA']; ?></td>
	<td><?PHP echo $row['FirstNameA']; ?></td>
	<td><?PHP echo $row['LastNameA']; ?></td>
	
	
	</tr>

<?PHP
}
?>
</table>


