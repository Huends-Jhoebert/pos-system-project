<!DOCTYPE html>
<!--
   This is a starter template page. Use this page to start your new project from
   scratch. This page gets rid of all links and provides the needed markup only.
   -->
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gem's Avon | Sales IS</title>
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
	<!-- my css style -->
	<link rel="stylesheet" href="added-css/style-added.css">
	<!-- product is css -->
	<link rel="stylesheet" href="added-css/product-is.css">
	<!-- bootstrap 5 css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
	<!-- modal form js -->
	<!-- <script defer src="sales-is-form/form.js"></script> -->


	<style>
		div.col-md-12 {
			margin: 4px, 4px;
			padding: 1rem;
			height: 500px;
			overflow-x: hidden;
			overflow-y: auto;
			width: 100%;
		}

		.content-info {
			background: #f9f9f9;
			background-size: cover !important;
			background-position: top center !important;
			background-repeat: no-repeat !important;
			position: relative;

		}

		table {
			width: 100%;
			background: #fff;
			border: 1px solid #dedede
		}


		table thead tr th {
			padding: 20px;
			border: 1px solid #dedede;
			color: #000;
		}

		table.table-striped tbody tr:nth-of-type(odd) {
			background: #f9f9f9
		}

		table.result-point tr td.number {
			width: 100px;
			position: relative
		}

		.text-left {
			text-align: left !important
		}

		table tr td {
			padding: 10px 20px;
			border: 1px solid #dedede
		}

		table.result-point tr td .fa.fa-caret-up {
			color: green
		}

		table.result-point tr td .fa {
			font-size: 20px;
			position: absolute;
			right: 20px
		}

		table tr td {
			padding: 10px 40px;
			border: 1px solid #dedede
		}

		table tr td img {
			max-width: 32px;
			float: left;
			margin-right: 11px;
			margin-top: 1px;
			border: 1px solid #dedede
		}
	</style>

</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color:#083E52; border-bottom: none; justify-content: space-between;">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars nav-fas" style="color: #fff"></i></a>
				</li>

				<!-- <daiv class="custom-control custom-switch nav-link active" style=" display: inline; margin-left: 40px;">
                  <input type="checkbox" class="custom-control-input btn-switch" id="customSwitch1">
                  <label class="custom-control-label switch light-switch" for="customSwitch1"><i class="fas fa-lightbulb bulb" style="color:#fff"></i></label>
                  </div> -->
			</ul>
			<!-- sign out -->
			<!-- <div class="history-bnt-container" style="text-align: center;">
				<button class="btn btn-info" style="margin: 0 auto;"><i class="fas fa-history"></i> HISTORY</button>
			</div> -->

		</nav>
		<!-- /.navbar -->
		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #083E52">
			<!-- Brand Logo -->
			<!-- Brand Logo -->
			<a href="#" class="brand-link">
				<img src="dist/img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">GEM'S AVON</span>
			</a>
			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="dist/img/user8-128x128.jpg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">Manager</a>
					</div>
				</div>
				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
						<li class="nav-item">
							<a href="dashboard.php" class="nav-link active side-icon" style="background-color: #073546">
								<i class="nav-icon fas fa-th"></i>
								<p>
									Dashboard
									<!-- <span class="right badge badge-danger">New</span> -->
								</p>
							</a>
							<!-- <button onclick="lightMode()">Toggle light mode</button> -->
							<a href="product-is.php" class="nav-link active side-icon" style="background-color: #073546; ">
								<i class="nav-icon fas fa-pen"></i>
								<p>
									Product IS
									<!-- <span class="right badge badge-danger">New</span> -->
								</p>
							</a>
							<a href="sales-is.php" class="nav-link active side-icon" style="background-color: #073546">
								<i class="nav-icon fas fa-cash-register"></i>
								<p>
									Sales IS
									<!-- <span class="right badge badge-danger">New</span> -->
								</p>
							</a>
							<a href="#" class="nav-link active side-icon" style="background-color: #39D3B0">
								<i class="nav-icon fas fa-chart-area"></i>
								<p>
									Report Generation
									<!-- <span class="right badge badge-danger">New</span> -->
								</p>
							</a>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>
		<!-- Content Wrapper. Contains page content -->
		<section class="content">
			<div class="content-wrapper main-content-white page-content" style="background-color:#073546">
				<section class="content" style="padding: 1rem">
					<section class="content-info">
						<div class="container paddings-mini">
							<div class="row">
								<div class="col-md-12">
									<table class="table-striped table-responsive table-hover result-point" style="width: 100%;">
										<thead class="point-table-head">
											<tr>
												<th class="text-center">No</th>
												<th class="text-center" style="width: 25%;">Product</th>
												<th class="text-center" style="width: 20%;">Products Sold</th>
												<th class="text-center" style="width: 30%;">Short Name</th>
												<th class="text-center" style="width: 20%;">Amount Earned</th>
											</tr>
										</thead>
										<tbody class="text-center">
											<tr>
												<td class="text-left number">1 <i class="fa fa-caret-up" aria-hidden="true"></i></td>
												<td class="text-left"> <img src="product-is-images/SSS400.jpeg" alt="product1"> <span>SSS400</span></td>
												<td>256</td>
												<td>SSS Kojic Hand</td>
												<td>15860</td>
											</tr>
											<tr>
												<td class="text-left number">2 <i class="fa fa-caret-up" aria-hidden="true"></i></td>
												<td class="text-left"> <img src="product-is-images/NPCE750.jpg" alt="product2"><span>NPCE750</span> </td>
												<td>250</td>
												<td>NPCE Hand and Body Lotion</td>
												<td>15800</td>


											</tr>
											<tr>
												<td class="text-left number">3 <i class="fa fa-caret-up" aria-hidden="true"></i></td>
												<td class="text-left"> <img src="product-is-images/FFAPRODF40.jpg" alt="product3"><span>FFAPRODF40</span></td>
												<td>235</td>
												<td>FFAPROD Classic Floral</td>
												<td>13554</td>


											</tr>
											<tr>
												<td class="text-left number">4<i class="fa fa-caret-down" aria-hidden="true"></i></td>
												<td class="text-left"> <img src="product-is-images/FFAPRODG75.jpg" alt="product4"><span>FFAPRODG75</span> </td>
												<td>232</td>
												<td>FFAPROD Glutathione</td>
												<td>13000</td>


											</tr>
											<tr>
												<td class="text-left number">5 <i class="fa fa-caret-up" aria-hidden="true"></i></td>
												<td class="text-left"> <img src="product-is-images/CTBW.jpg" alt="product5"><span>CTBW</span> </td>
												<td>15</td>
												<td>CTB Watch</td>
												<td>12500</td>


											</tr>
											<tr>
												<td class="text-left number">6<i class="fa fa-caret-down" aria-hidden="true"></i></td>
												<td class="text-left"> <img src="product-is-images/AGWBS.jpg" alt="product6"><span>AGWBS</span> </td>
												<td>13</td>
												<td>AGWB Set</td>
												<td>12330</td>


											</tr>
											<tr>
												<td class="text-left number">7<i class="fa fa-caret-down" aria-hidden="true"></i></td>
												<td class="text-left"> <img src="product-is-images/PML36G.jpg" alt="product7"><span>PML36</span> </td>
												<td>231</td>
												<td>PM Lipstick 36G</td>
												<td>11540</td>


											</tr>
											<tr>
												<td class="text-left number">8<i class="fa fa-caret-up" aria-hidden="true"></i></td>
												<td class="text-left"> <img src="product-is-images/TCBLS18G.jpg" alt="product8"><span>TCBLS18</span> </td>
												<td>225</td>
												<td>TCB Lip Stylo 18G</td>
												<td>11500</td>


											</tr>
											<tr>
												<td class="text-left number">9 <i class="fa fa-circle" aria-hidden="true"></i></td>
												<td class="text-left"> <img src="product-is-images/NHRHO100.jpg" alt="product9"><span>NHRHO100</span> </td>
												<td>215</td>
												<td>NNR Hair Oil 100ml</td>
												<td>10850</td>


											</tr>
											<tr>
												<td class="text-left number">10<i class="fa fa-circle" aria-hidden="true"></i></td>
												<td class="text-left"> <img src="product-is-images/NGASC180.jpg" alt="product10"><span>France</span> </td>
												<td>204</td>
												<td>NGA Shea Conditioner 180ml</td>
												<td>10250</td>

											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</section>
				</section>
			</div>
		</section>
		<!-- /.content-wrapper -->
		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
			<div class="p-3">
				<h5>Title</h5>
				<p>Sidebar content</p>
			</div>
		</aside>
		<!-- /.control-sidebar -->
		<!-- Main Footer -->
		<footer class="main-footer light-footer" style="background-color: #083E52; border-top: none">
			<!-- To the right -->
			<div class="float-right d-none d-sm-inline">
				<!-- Anything you want -->
			</div>
			<!-- Default to the left -->
			<strong>Copyright &copy; 2021 <a href="#">Gem's Avon POS SYSTEM</a>.</strong> All rights reserved.
		</footer>
	</div>
	<!-- ./wrapper -->
	<!-- REQUIRED SCRIPTS -->
	<!-- jQuery -->
	<!-- Bootstrap 4 -->
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- ChartJS -->
	<script src="plugins/chart.js/Chart.min.js"></script>
	<!-- Sparkline -->
	<script src="plugins/sparklines/sparkline.js"></script>
	<!-- JQVMap -->
	<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="plugins/moment/moment.min.js"></script>
	<script src="plugins/daterangepicker/daterangepicker.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Summernote -->
	<script src="plugins/summernote/summernote-bs4.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="dist/js/pages/dashboard.js"></script>
	<!-- light mode and dark mode -->
	<script src="dist/js/light.js"></script>
	<!-- data table -->
	<script src="dist/js/data-table.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>



</body>

</html>