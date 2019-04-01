<?php
	require 'header.php' ;
	require '../order.class.php' ;
	
	$Order = new ClassOrder();

if(	isset($_SESSION['user_id']) )
	$Orders = $Order->Get_All_Orders();

else
	echo "<script> window.location.href = 'login.php' </script>";

if (isset($_GET['email']) )
{
	foreach($Orders as $i => $j)
		if($j['billing_email'] != $_GET['email'])
		{
			unset($Orders[$i]);
		}
}


?>

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li class="active">Basic table</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<form>
		<input type="email" name="email" >
		<input type="submit" value="Submit">
		</form>

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
											<td><a href= <?php echo "?Fill_Order=" . $i['order_id'] ; ?> ><button type="button">Fill</button></a></td>
                                        </tr>
									<?php
									}}
									?>
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
						
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

<div class="clearfix"></div>

<footer class="site-footer">
    <div class="footer-inner bg-white">
        <div class="row">
            <div class="col-sm-6">
                Copyright &copy; 2018 Ela Admin
            </div>
            <div class="col-sm-6 text-right">
                Designed by <a href="https://colorlib.com">Colorlib</a>
            </div>
        </div>
    </div>
</footer>

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>


</body>
</html>
