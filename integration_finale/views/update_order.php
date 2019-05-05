<?php
	require 'Header.php' ;
	require '../core/order.class.php' ;
	
	$Order = new ClassOrder();
	
if(	isset($_SESSION['user_id']) && isset($_GET['first-name']) && isset($_GET['last-name']) && isset($_GET['email']) && isset($_GET['address']) && isset($_GET['city']) && isset($_GET['country']) && isset($_GET['zip-code']) && isset($_GET['tel']) )
{
	$Order->update_order($_GET['order_id'], $_SESSION['user_id'], $_GET['first-name'], $_GET['last-name'], $_GET['email'], $_GET['address'], $_GET['city'], $_GET['country'], $_GET['zip-code'], $_GET['tel']);
	echo "<script> window.location.href = 'orders.php' </script>";
}
	
if(	isset($_SESSION['user_id']) && isset($_GET['order_id']) )
{
	$Orders = $Order->GetOrders($_SESSION['user_id']);
	foreach($Orders as $i)
	{
		if($i['order_id'] == $_GET['order_id'])
			$O = $i ;
	}
}
else
	echo "<script> window.location.href = 'orders.php' </script>";
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
								<input class="input" type="text" name="first-name" placeholder="First Name" value=<?php echo $O['billing_name'] ; ?> >
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Last Name" value=<?php echo $O['billing_surname'] ; ?> >
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email" value=<?php echo $O['billing_email'] ; ?>>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address" value=<?php echo $O['billing address'] ; ?>>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City" value=<?php echo $O['billing_city'] ; ?>>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Country" value=<?php echo $O['billing_country'] ; ?>>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="ZIP Code" value=<?php echo $O['billing_postal_code'] ; ?>>
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telephone" value=<?php echo $O['billing_phone'] ; ?>>
							</div>
							<input class="hidden" name="order_id" value=<?php echo $_GET['order_id'] ; ?>>
						</div>
					</div>

					<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="pull-right">
								<input type="submit" class="primary-btn" value="Update Order"></input>
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