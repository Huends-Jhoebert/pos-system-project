<!DOCTYPE html>
<!--
   This is a starter template page. Use this page to start your new project from
   scratch. This page gets rid of all links and provides the needed markup only.
   -->
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gem's Avon | Product IS</title>
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
	<style>
		.actions-btn {
			display: flex;
			justify-content: space-evenly;
		}

		.actions-btn button:last-child {
			margin-left: 10px;
		}

		table thead,
		table tfoot {
			text-transform: uppercase;
		}

		td span {
			padding: 0.5rem;
		}

		.quantity {
			padding: 0.4rem 2.3rem;
		}

		.btn-update {
			padding: 0rem 1.5rem
		}

		.available {
			padding: 0.5rem 1.8rem;
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
				<!-- <div class="custom-control custom-switch nav-link active" style=" display: inline; margin-left: 40px;">
                  <input type="checkbox" class="custom-control-input btn-switch" id="customSwitch1">
                  <label class="custom-control-label switch light-switch" for="customSwitch1"><i class="fas fa-lightbulb bulb" style="color:#fff"></i></label>
                  </div> -->
			</ul>
			<!-- sign out -->
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
							<a href="#" class="nav-link active side-icon" style="background-color: #39D3B0; ">
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
							<a href="#" class="nav-link active side-icon" style="background-color: #073546">
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