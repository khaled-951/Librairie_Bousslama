<?php

	require '../../core/order.class.php' ;
	
if( isset($_POST['GetStats']) )
{
	require '../../config.php' ;
	$Order = new ClassOrder();
	die(json_encode($Order->Get_filled_orders_stats()));
}


	require 'header.php' ;
	
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
	//echo "<script> window.location.href = 'orders.php' </script>";
?>
        <!-- Breadcrumbs-->
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
                                    <li><a href="#">Charts</a></li>
                                    <li class="active">Chartjs</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.breadcrumbs-->
        <!-- Content -->
        <div class="content">
			

            <div class="animated fadeIn">
				<div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">$<span class="count"><?php echo $Order->Get_Last_Month_Revenue()?></span></div>
                                            <div class="stat-heading">Last Month's Revenue</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $Order->Get_Last_Month_Orders_Number()?></span></div>
                                            <div class="stat-heading">Last Month's Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>

                <div class="row">
					
					<div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Filled Orders Stats(Last 7 Days)</h4>
                                <canvas id="lineChart"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->

                </div>

            </div><!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
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
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="charts.js"></script>
</body>
</html>
