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

        <!-- Breadcrumbs-->
       

        <!-- Icon Cards-->
    
  <!-- Content -->

  <?php
include "../core/LivreurC.php";
$LivreurC =new LivreurC();
$lvc=$LivreurC->nombre_livreur();
/*
if(empty($_POST['search'])==false){
 $x=$_POST['search'];
    $lst=$LivreurC->rechercheliv($x);}
else*/
$lst=$LivreurC->afficheE();

?>
  <div class="content">

<table class="table table-striped b-t b-light">
    <form method="POST" action="livreuraff.php">
        <input type="text" id="arearech" name="search" placeholder="Taper pour rechercher ... " required>
        <input type="submit" value="Rechercher"  class="btn btn-primary">
    </form>
    <a href="trier.php">
    <input type="submit" value="trier Par Nom Destinataire  "  class="btn btn-primary">
    </a>
    <thead>
    <tr>
        <th colspan="7"></th>
    </tr>
    <tr>
        <th>id_livreur</th>
        <th>nom</th>
        <th>prenom</th>
        <th>age</th>
        <th>num_tel</th>
        <th>email</th>
        <th>zone_habitation</th>
        <th>situation</th>
        <th>vehicule</th>
        <th>zone_de_livraison</th>
        <th style="width:30px;"></th>


    </thead>
    <tbody>

    <?php


        foreach($lst as $p){
            ?>

            <tr>

                <td><span class="text-ellipsis"><?php echo $p['id_livreur']; ?></span></td>
                <td><span class="text-ellipsis"><?php echo $p['nom'].""; ?></span></td>
                <td><span class="text-ellipsis"><?php echo $p['prenom'].""; ?></span></td>
                <td><span class="text-ellipsis"><?php echo $p['age']; ?></span></td>
                <td><span class="text-ellipsis"><?php echo $p['num_tel']; ?></span></td>
                <td><span class="text-ellipsis"><?php echo $p['email']; ?></span></td>
                <td><span class="text-ellipsis"><?php echo $p['zone_habitation']; ?></span></td>
                <td><span class="text-ellipsis"><?php echo $p['situation']; ?></span></td>
                <td><span class="text-ellipsis"><?php echo $p['vehicule']; ?></span></td>
                <td><span class="text-ellipsis"><?php echo $p['zone_de_livraison']; ?></span></td>

               </tr>
            <td> <a href="supplivreur.php?id=<?php echo $p['id_livreur']; ?>">
                    <input type="button" value="Remove"> </a></td>
            </tr>
            <?php
        }



    ?>


    </tbody>
</table>

<p><strong>Nombre Des livreurs :</strong> <?php echo $lvc['id'] ?></p>
</div>


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
