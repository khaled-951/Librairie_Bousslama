<?php 
require 'Header.php' ;
echo $_SESSION['idclient'];
//require '../core/produitC.php';
$Produit = new ProduitC() ;

?>

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li class="active"><a href="products.php">Products</a></li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			
				<!-- ASIDE -->
				
					<!-- aside widget -->
					
					<!-- /aside widget -->

					<!-- aside widget -->
					
					<!-- aside widget -->

					<!-- aside widget -->
					
					<!-- /aside widget -->

					<!-- aside widget -->
					
					<!-- /aside widget -->

					<!-- aside widget -->
					
					<!-- /aside widget -->

					<!-- aside widget -->
					
					<!-- /aside widget -->

					<!-- aside widget -->
					
						<!-- /widget product -->

						<!-- widget product -->
						
						<!-- /widget product -->
				
					<!-- /aside widget -->
				
				<!-- /ASIDE -->

				<!-- MAIN -->
				<div id="main" class="col-md-9">
					<!-- store top filter -->
					<div class="store-filter clearfix">
						<div class="pull-left">
							<div class="row-filter">
								<a href="#"><i class="fa fa-th-large"></i></a>
								<a href="#" class="active"><i class="fa fa-bars"></i></a>
							</div>
							<div class="sort-filter">
								<span class="text-uppercase">Sort By:</span>
								<select class="input">
										<option value="0">Position</option>
										<option value="0">Price</option>
										<option value="0">Rating</option>
									</select>
								<a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
							</div>
						</div>
						<div class="pull-right">
							<div class="page-filter">
								<span class="text-uppercase">Show:</span>
								<select class="input">
										<option value="0">10</option>
										<option value="1">20</option>
										<option value="2">30</option>
									</select>
							</div>
							<ul class="store-pages">
								<li><span class="text-uppercase">Page:</span></li>
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- /store top filter -->

					<!-- STORE -->
					<div id="store">
						<!-- row -->
						<div class="row">
							<!-- Product Single -->
							<?php
							$liste=$Produit->afficherProduit ();
							if (isset($_GET['categorie'])) 
							{	
								foreach ($liste as $i => $row)
								if ($row['cat']!= $_GET['categorie'] )
								unset($liste[$i]); 

							} 
							?>
							<?php  foreach ($liste as  $row) :?>
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										<div class="product-label">
											<span>New</span>
											
										</div>
										<a href="product-page.php?details=<?=$row['id'];?>"><button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
										<!--<a href="#"> ?></a>-->
										<img src="img/<?= $row['image'] ?>" widht="140" height="130" alt="">
										
									</div>
									<div class="product-body">
									<?php
									$yID= $row['id'];

									
									 $sql="SELECT * from promo where idProd = $yID ";
									 $db = config::getConnexion();
									 $idPromo=$db->query($sql);
									 $prix = -1;
									foreach($idPromo as $nn){
										$prix = $nn['prix_nouveau'];
									}

									 								 
									if($prix!=-1){
										foreach($idPromo as $nn){
											$prixPromo = $nn['prix_nouveau']; 
										}
                 		 ?>
									  <span class="product-price">$<?php echo $prix ?></span>
										<span class="product-price">	<del>$<?php echo $row['prix'] ?></del></span>
										
										<?php
									}
									else {
									?>

                    <span class="product-price">$<?php echo $row['prix'] ?></span>
										
										
<?php
									}
									?>
										
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o empty"></i>
										</div>
										<h2 class="product-name"><a href="#"><?= $row['nom'] ?></a></h2>
										<div class="product-btns">
										<a href="addwish.php?ido=<?=$row['id'];?>"><button  class="main-btn icon-btn"><i class="fa fa-heart"></i></button></a>
											<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
											<a href="panier.php?Product_ID=<?=$row['id'];?>&Product_Quantity=1"><button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button></a>
										</div>
									</div>
								</div>
							
							</div>
							<?php endforeach;?>

							<!-- /Product Single -->

							<!-- Product Single -->
							
							<!-- /Product Single -->

							

							<!-- Product Single -->
							
							<!-- /Product Single -->

						

							<!-- Product Single -->
							
							<!-- /Product Single -->

							

							<!-- Product Single -->
							
							<!-- /Product Single -->

							<!-- Product Single -->
						
							<!-- /Product Single -->

						

							<!-- Product Single -->
						
							<!-- /Product Single -->

							<!-- Product Single -->
					
							<!-- /Product Single -->

					

							<!-- Product Single -->
							
							<!-- /Product Single -->
						</div>
						<!-- /row -->
					</div>
					<!-- /STORE -->

					<!-- store bottom filter -->
					
					<!-- /store bottom filter -->
				</div>
				<!-- /MAIN -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

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

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

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
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
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
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">WebStorm</a>
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
