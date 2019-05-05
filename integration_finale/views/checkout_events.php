<?php
require 'Header.php' ;
?>
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Blank</li>
			</ul>
		</div>
	</div>
	
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->


		


<?php
	include "../core/eventsC.php";
	$events1C=new EventsC();
	$listeEvents=$events1C->afficherEvents();

	foreach($listeEvents as $row){
		$id=$row['id'];
		$name=$row['name'];
		$address=$row['address'];
        $phone=$row['phone'];
		$informations=$row['informations'];
		$DateDebut=$row['DateDebut'];
        $DateFin=$row['DateFin'];
        $photo=$row['photo'];
        



}

	if(empty($_POST['search'])==false){
		$x=$_POST['search'];
		   $listeEvents=$events1C->rechercherAnnonces($x);}
	   
		   else
	   $listeEvents=$events1C->afficherEvents();
	
	
	
	
	
	?>

	<div class=" container ">
                <form method="POST" action="index.php">
                    <input type="date" id="arearech" name="search" placeholder="Taper pour rechercher ... " required>

                    <input type="submit" value="Rechercher"  class="btn btn-primary">

					<a href="index.php" class="btn btn-primary">
          <span class="glyphicon glyphicon-refresh"></span> Refresh
				</a>
			
                </form>
								<form method="POST"  action="pdfjolla.php">
								<input type="submit" name="pdf" value="pdf" class="btn btn-primary">
								<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
								</form>
						


								
	
	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Events</h2>
						
	</div>
			
				
	<?PHP
	foreach($listeEvents as $row){
		?>

<!-- /Product Single -->
							<!-- Product Single -->
							<div  style="display:inline-block;" class="product product-single " style="width:200px">
								<div class="product-thumb " style="width:200px">
									
								
									<button class="main-btn quick-view"><i class="fa fa-search-plus"></i><a href="product-page1.php?details=<?= $row['id']; ?>" > Quick view</a></button>
									<img  width="5" src="uploads/<?php echo $row['photo'] ?>" alt="<?php echo $row['photo'] ?>">
								</div>
								<div class="product-body">
									<h3 class="product-name"><?php echo $row['name'] ?> </h3>
									<h6 class="product-name"><?php echo $row['DateDebut']?>  / <?php echo $row['DateFin'] ?></h6>

									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<br>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

	
					  <?php
					  
	}
	?>
	
	
	
	
	


	<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<a class="logo" href="#">
		            <img src="./img/logo.png" alt="">
		          </a>
						</div>
						<!-- /footer logo -->

						<p>Lorem ipsum dolor sit amet, consectetur adipisiRefg elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

						<!-- footer social -->
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">My Account</h3>
						<ul class="list-links">
							<li><a href="#">My Account</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Compare</a></li>
							<li><a href="#">Checkout</a></li>
							<li><a href="#">Login</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Customer Service</h3>
						<ul class="list-links">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Shiping & Return</a></li>
							<li><a href="#">Shiping Guide</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer subscribe -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Stay Connected</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisiRefg elit, sed do eiusmod tempor.</p>
						<form>
							<div class="form-group">
								<input class="input" placeholder="Enter Email Address">
							</div>
							<button class="primary-btn">Join Newslatter</button>
						</form>
					</div>
				</div>
				<!-- /footer subscribe -->
			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
