<?PHP

include "../core/eventsC.php";

if (isset($_POST['name']) and isset($_POST['address']) and isset($_POST['phone']) and isset($_POST['informations'])and isset($_POST['DateDebut'])and isset($_POST['DateFin'])){
	$targetDir = "uploads/";
	$fileName = basename($_FILES['photo']['name']);
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  //echo $fileName."--";
  //echo $targetFilePath;
	move_uploaded_file($_FILES['photo']['tmp_name'],$targetFilePath);

	$events1=new Events($_POST['id'],$_POST['name'],$_POST['address'],$_POST['phone'],$_POST['informations'],$_POST['DateDebut'],$_POST['DateFin'],$_POST['photo']);

$events1C=new EventsC();
$events1C->ajouterEvents($events1);
echo"ajout avec success";
header('Location: checkout_events.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>



