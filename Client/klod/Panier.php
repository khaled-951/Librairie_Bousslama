<?php

require 'Header.php' ;

if(isset($_SESSION['user_id']) && isset($_GET['Product_ID']) && isset($_GET['Product_Quantity']) )
	$Panier->add($_SESSION['user_id'], $_GET['Product_ID'], $_GET['Product_Quantity']);

if(isset($_GET['Delete_Cart']) )
	$Panier->del_cart($_GET['Delete_Cart']);

if(isset($_GET['User_ID']) && isset($_GET['Delete_Product']) )
	$Panier->delete_product_from_cart($_GET['User_ID'], $_GET['Delete_Product']);

if(isset($_SESSION['user_id']) && isset($_GET['Product_ID']) && isset($_GET['Update_Quantity']) )
	$Panier->update_quantity( $_SESSION['user_id'], $_GET['Product_ID'], $_GET['Update_Quantity']);

if( isset($_GET['Product_ID']) || isset($_GET['Update_Quantity']) || isset($_GET['Product_Quantity']) || isset($_GET['Delete_Cart']) || isset($_GET['Delete_Product']) )
	echo "<script> window.location.href = 'panier.php' </script>";

?>

	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				
					<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Order Review</h3>
							</div>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Product</th>
										<th></th>
										<th class="text-center">Price</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Total</th>
										<th class="text-right"></th>
									</tr>
								</thead>
								<tbody>
								<?php
								if(isset($Stuff))
								foreach($Stuff as $i)
								{
								echo '
									<tr>
										<td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
										<td class="details">
											<a href="#">'; echo $Panier->Get_Product_Name($i['Product_id']); echo '</a>
											<ul>
												<li><span>Size: XL</span></li>
												<li><span>Color: Camelot</span></li>
											</ul>
										</td>
										<td class="price text-center"><strong>$'; echo $Panier->Get_Product_Price($i['Product_id']); echo '</strong><br><del class="font-weak"><small>$40.00</small></del></td>
										<td class="qty text-center"><input class="input" type="number" value="'; echo $i['product_quantity']; echo '"></td>
										<td class="total text-center"><strong class="primary-color">'; echo $Panier->Get_Product_Price($i['Product_id']) * $i['product_quantity'] ; echo '</strong></td>
										<td class="text-right"><a href="?User_ID=';echo $_SESSION['user_id']; echo '&Delete_Product='; echo $i['Product_id']; echo '"><button class="main-btn icon-btn" ><i class="fa fa-close"></i></button></a></td>
									</tr>';
								}
								?>
								</tbody>
								<tfoot>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SUBTOTAL</th>
										<th colspan="2" class="sub-total"><?php if(isset($Stuff)) echo $Panier->CalulateTotal($_SESSION['user_id']); else echo 0 ;?>$</th>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SHIPING</th>
										<td colspan="2">Free Shipping</td>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>TOTAL</th>
										<th colspan="2" class="total"><?php if(isset($Stuff)) echo $Panier->CalulateTotal($_SESSION['user_id']); else echo 0 ;?>$</th>
									</tr>
								</tfoot>
							</table>
							<div class="pull-left">
								<a href="https://google.fr" ><button class="primary-btn">Update</button></a>
							</div>
							<div class="pull-right">
								<a href="checkout.php"><button class="primary-btn">Place Order</button></a>
							</div>
						</div>

					</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

<?php require 'Footer.php' ; ?>