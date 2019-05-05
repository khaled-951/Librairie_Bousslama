<?php
	require 'Header.php' ;
	require '../core/order.class.php' ;
	
	$Order = new ClassOrder();

if(	isset($_SESSION['idclient']) )
	$Orders = $Order->GetOrders($_SESSION['idclient']);

if(	isset($_SESSION['idclient']) && isset($_GET['Delete_Order']) )
{
	$Order->delete_order($_GET['Delete_Order'], $_SESSION['idclient']);
	echo "<script> window.location.href = 'orders.php' </script>";
}
if(	isset($_SESSION['idclient']) && isset($_GET['Delete_All']) )
{
	$Order->delete_all_orders($_SESSION['idclient']);
	echo "<script> window.location.href = 'orders.php' </script>";
}
?>
	<div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Unfilled Orders</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Surname</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Zip Code</th>
											<th>City</th>
                                            <th>Phone</th>
                                            <th>Country</th>
											<th>Order Date</th>
											<th>Filled</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									if(isset($Orders))
									foreach($Orders as $i)
									{if(!$i['is_filled']){
									?>
                                        <tr>
                                            <td> <?php echo $i['billing_name'] ?> </td>
                                            <td> <?php echo $i['billing_surname'] ?> </td>
                                            <td> <?php echo $i['billing_email'] ?></span> </td>
                                            <td> <?php echo $i['billing address'] ?></span> </td>
											<td> <?php echo $i['billing_postal_code'] ?> </td>
                                            <td> <?php echo $i['billing_city'] ?> </td>
											<td> <?php echo $i['billing_phone'] ?> </td>
                                            <td> <?php echo $i['billing_country'] ?> </td>
											<td> <?php echo $i['order_date'] ?> </td>
                                            <td>
                                                <span class="badge badge-pending">Pending</span>
                                            </td>
											<td><span class="count"><a href= <?php echo "update_order?order_id=" . $i['order_id'] ; ?> ><button type="button">Edit</button></a></span></td>
											<td><span class="count"><a href= <?php echo "?Delete_Order=" . $i['order_id'] ; ?> ><button type="button">Delete</button></a></span></td>
                                        </tr>
									<?php
									}}
									?>
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
						
						<a href="?Delete_All=1" ><button type="button">Delete All Unfilled Orders</button></a>
						
						<div class="card">
                            <div class="card-header">
                                <strong class="card-title">Filled Orders</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Surname</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Zip Code</th>
											<th>City</th>
                                            <th>Phone</th>
                                            <th>Country</th>
											<th>Filled</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									if(isset($Orders))
									foreach($Orders as $i)
									{if($i['is_filled']){
									?>
                                        <tr>
                                            <td> <?php echo $i['billing_name'] ?> </td>
                                            <td> <?php echo $i['billing_surname'] ?> </td>
                                            <td> <?php echo $i['billing_email'] ?></span> </td>
                                            <td> <?php echo $i['billing address'] ?></span> </td>
											<td> <?php echo $i['billing_postal_code'] ?> </td>
                                            <td> <?php echo $i['billing_city'] ?> </td>
											<td> <?php echo $i['billing_phone'] ?> </td>
                                            <td> <?php echo $i['billing_country'] ?> </td>
                                            <td>
                                                <span class="badge badge-complete">Complete</span>
                                            </td>
                                        </tr>
									<?php
									}}
									?>
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>
        </div>
    </div><!-- .animated -->
</div>

<?php
	require 'Footer.php' ;
?>