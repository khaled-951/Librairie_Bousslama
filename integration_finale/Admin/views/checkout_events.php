<?PHP
session_start();
    ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

          <a class="dropdown-item" href="#">
                    <?PHP
                    echo  $_SESSION["email"];
                    ?>
                </a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="destroy.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="indexB.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Login Screens:</h6>
        <a class="dropdown-item" href="login.html">Login</a>
        <a class="dropdown-item" href="register.html">Register</a>
        <a class="dropdown-item" href="newsletter.html">newsletter</a>
         <a class="dropdown-item" href="supprimeCompte.html">supprimer</a>
         <a class="dropdown-item" href="affichageadmin.php">affichage CompteA</a>
         <a class="dropdown-item" href="affichageclient.php">affichage CompteC</a>

          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="check_out.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Promotion</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkout_events.php">
          <i class="fas fa-fw fa-table"></i>
          <span>evenement</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="forms-basic.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Annonce</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="formulairep.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Produit</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="formulairec.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Categorie</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="forms-basic1.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Livreur</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

      <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>
        <!-- Breadcrumbs-->
        

        <!-- Icon Cards-->
    
        <?PHP
include "../core/eventsC.php";
$events1C=new EventsC();
$listeEvents=$events1C->afficherEvents();

if(empty($_POST['search'])==false){
    $x=$_POST['search'];
       $listeEvents=$events1C->rechercherAnnonces($x);}
   
       else
   $listeEvents=$events1C->afficherEvents();




?>

<script language="javascript">
function compar()
{
var sdate1 = document.getElementById('date2').value

var date1 = new Date();
var dateAct= date1.getFullYear()+"-"+(('0' + (date1.getMonth()+1)).slice(-2))+"-"+date1.getDate();  
/*date1.setFullYear(sdate1.substr(6,4));
date1.setMonth(sdate1.substr(3,2));
date1.setDate(sdate1.substr(0,2));
date1.setHours(0);
date1.setMinutes(0);
date1.setSeconds(0);
date1.setMilliseconds(0);
var d1=date1.getTime()*/

var sdate2 = document.getElementById('date1').value
/*var date2 = new Date();
date2.setFullYear(sdate2.substr(6,4));
date2.setMonth(sdate2.substr(3,2));
date2.setDate(sdate2.substr(0,2));
date2.setHours(0);
date2.setMinutes(0);
date2.setSeconds(0);
date2.setMilliseconds(0);
var d2=date2.getTime()*/

//si la date d'arrviée et superieur a la date de depart en afficher un message d'erreur

if(sdate1 < dateAct)
{
    alert('Vous avez selection un date incorrect par rapport a la date actuelle !!');
    return false ;
}
else if (sdate2 < sdate1)
{
    alert('Vous avez selection  une date incorrect!!');
    return false ;
}
return true ;
/*if(d1>d2)
{	
	alert('Vous avez selection un date incorrect!!')
}
else
{
	alert('Correct')
}*/

}
</script>



        <div class="page-head">
<div class="container-fluid">
	<div class="row">
		<div  align="center" border="1px" class="col-md-4">
			<h3 class="text-center text-info">Add Events</h3>
            <hr>
<form class="was-validated" action="ajoutEvent.php" method="POST" >


<div class="form-group">
<input type="text" name="name" class="form-control" required pattern="[0-9a-zA-Z,/ .]{3,12}" placeholder="Enter Name Of the Event" >
</div>
<script>


</script>

                <div class="form-group">
<input type="email" name="address" class="form-control" required pattern="[0-9a-zA-Z@ . / ]{6,30}" placeholder="Enter your address">
</div>




                <div class="form-group">
<input type="tel" name="phone" class="form-control" required pattern="[0-9]{6,12}" placeholder="Enter your phone" >
</div>
<div class="form-group">
<script language="javascript" type="text/javascript">
									function calculeLongueur(){
   										var iLongueur, iLongueurRestante;
   										iLongueur = document.getElementById('autre').value.length;
   										if (iLongueur>30) {
     							    	document.getElementById('autre').value = document.getElementById('autre').value.substring(0,20);
      									iLongueurRestante = 0;
   										}
   										else {
     							 		iLongueurRestante = 30 - iLongueur;
   									}
   									if (iLongueurRestante <= 1)
      								document.getElementById('indic').innerHTML = iLongueurRestante + "&nbsp;caract&egrave;re&nbsp;disponible";
   									else
      								document.getElementById('indic').innerHTML = iLongueurRestante + "&nbsp;caract&egrave;res&nbsp;disponibles";
									}
							</script>
			<textarea   name="informations" onblur="calculeLongueur();" onfocus="calculeLongueur();" onkeydown="calculeLongueur();" onkeyup="calculeLongueur();"  id="autre" class="form-control"  required pattern="[0-9a-zA-Z,/. ]{3,12}" placeholder="Informations About the Events" ></textarea>
						</div>


                        <div class="form-group">
<input type="Date" name="DateDebut" class="form-control" id="date2"  required placeholder="DateDebut">
</div>
<div class="form-group">
<input type="Date" name="DateFin"  class="form-control" id="date1" required  placeholder="DateFin" >
</div>

<div class="form-group">
<input type="file" name="photo" class="custom-file">
</div>
				<div class="form-group">
 
<input type="submit" name="add" class="btn btn-primary btn-block" value="Add" onclick=" return compar()">

</div>
</form>

</div>

</div>
</div>

<hr>






<table class="table table-hover">
			<thead>
			  <tr>
				<th  style="width: 5%">ID</th>
				<th>Name</th>
				<th>Address</th>
				 <th style="width: 10%">phone</th>
				 <th style="width: 30%">informations</th>
				 <th style="width: 10%">DateDebut</th>
				 <th style="width: 8%">DateFin</th>
                 <th style="width: 15%" >photo</th>
                 <th style="width: 10%" >Action</th>

                 </tr>
			</thead>

<?PHP
foreach($listeEvents as $row){
	?>
    <tbody>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
    <td><?PHP echo $row['name']; ?></td>
	<td><?PHP echo $row['address']; ?></td>
	<td><?PHP echo $row['phone']; ?></td>
	<td><?PHP echo $row['informations']; ?></td>
	<td><?PHP echo $row['DateDebut']; ?></td>
	<td><?PHP echo $row['DateFin']; ?></td>
    <td><img width="100" src="uploads/<?php echo $row['photo'] ?>" alt="<?php echo $row['photo'] ?>"></td>
 
 <td style="width="70% ><form method="POST" action="supprimerEvents.php" >
						<input type="submit" name="delete" value="Delete" class="btn btn-danger btn-block" >
                         <input type="hidden" value="<?php echo $row['id']; ?>" name="id" >

                         </form>
                        </td>
                         <td><a class="btn btn-success btn-block" href="modifierEvents.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>			
    
                         	</td>
                        </tr>
                        </tr>
                        </thead>

                  <?php
				  
}
?>



</table>












    
</body>



      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
