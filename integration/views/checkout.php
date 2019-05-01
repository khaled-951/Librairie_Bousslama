<?php
	require 'Header.php' ;
	require '../core/order.class.php' ;
	
	$Order = new ClassOrder();
	/*$to = "khaled.fajraoui@esprit.tn" ;
	$sujet = "You Just Checked Out !" ;
	$text = "Thank you for using our website, You can review you checkout history in your account !" ;
	$header = "From : hackboy951@gmail.com" ;
	mail($to, $sujet, $text, $header);*/
	
if(	isset($_SESSION['user_id']) && isset($_GET['first-name']) && isset($_GET['last-name']) && isset($_GET['email']) && isset($_GET['address']) && isset($_GET['city']) && isset($_GET['country']) && isset($_GET['zip-code']) && isset($_GET['tel']) )
{
	$Order->add($_SESSION['user_id'], $_GET['first-name'], $_GET['last-name'], $_GET['email'], $_GET['address'], $_GET['city'], $_GET['country'], $_GET['zip-code'], $_GET['tel']);
	echo "<script>window.location.href='panier.php'</script>" ;
}

if(	isset($_GET['Delete_Order']) && isset($_SESSION['user_id']) )
	$Order->delete_order($_GET['Delete_Order'], $_SESSION['user_id']);

if(	isset($_SESSION['user_id']) && isset($_GET['Delete_All']) )
	$Order->delete_all_orders($_SESSION['user_id']);
?>
<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Checkout</li>
			</ul>
		</div>
	</div>
<script src="CS.js"></script>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<form id="checkout-form" class="clearfix">
					<div class="col-md-6">
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Billing Details</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="First Name" id="first-name" onchange="test()" >
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Last Name" id="last-name" onchange="test()" >
							</div>
							<div class="form-group">
								<input class="input" type="text" name="email" placeholder="Email" id="email" onchange="test()" >
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address" >
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City" >
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Country" >
							</div>
							<div class="form-group">
								<input class="input" type="number" name="zip-code" placeholder="ZIP Code" id="zip-code" onchange="test()" >
							</div>
							<div class="form-group">
								<input class="input" type="number" name="tel" placeholder="Telephone" id="tel" onchange="test()" >
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="pull-right">
								<input type="submit" class="primary-btn" value="Place Order" id="botna" onclick="test()" disabled ></input>
							</div>
						</div>

					</div>
				</form>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

<?php
	require 'Footer.php' ;
?>