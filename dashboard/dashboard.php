<!DOCTYPE html>
<!--
   This is a starter template page. Use this page to start your new project from
   scratch. This page gets rid of all links and provides the needed markup only.
   -->
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Gem's Avon | Dashboard</title>
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
            <div class="custom-control custom-switch nav-link active" style=" display: inline; margin-left: 40px;">
               <input type="checkbox" class="custom-control-input btn-switch" id="customSwitch1">
               <label class="custom-control-label switch light-switch" for="customSwitch1"><i class="fas fa-lightbulb bulb" style="color:#fff"></i></label>
            </div>
         </ul>
         <!-- sign out -->
         <a href="/pos-system-project/index.php" class="btn btn-sm bg-danger color-palette btn-log-out"><i class="fas fa-power-off power-off-logo"></i> Log out</a>
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
                     <a href="#" class="nav-link active side-icon" style="background-color: #39D3B0">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                           Dashboard
                           <!-- <span class="right badge badge-danger">New</span> -->
                        </p>
                     </a>
                     <!-- <button onclick="lightMode()">Toggle light mode</button> -->
                     <a href="#" class="nav-link active side-icon" style="background-color: #073546; ">
                        <i class="nav-icon fas fa-pen"></i>
                        <p>
                           Product IS
                           <!-- <span class="right badge badge-danger">New</span> -->
                        </p>
                     </a>
                     <a href="#" class="nav-link active side-icon" style="background-color: #073546">
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
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper main-content-white page-content" style="background-color:#073546">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0 dashboard-main" style="color:#fff; font-size: 2rem">Dashboard</h1>
                  </div>
                  <!-- /.col -->
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->
         <!-- Main content -->
         <section class="content">
            <div class="container-fluid">
               <!-- Small boxes (Stat box) -->
               <div class="row" style="justify-content: space-evenly">
                  <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <!-- product is -->
                     <div class="small-box bg-danger icon-container">
                        <div class="inner">
                           <h3>PRODUCT IS</h3>
                           <h6 style="color: #DC3545;">Products</h6>
                        </div>
                        <div class="icon">
                           <i class="fas fa-pen-alt"></i>
                        </div>
                        <a href="product-is.php" class="small-box-footer">Add product <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
                  <!-- ./product is -->
                  <!-- ./col -->
                  <!-- number of products -->
                  <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-maroon">
                        <div class="inner">
                           <h3>3</h3>
                           <h6>PRODUCTS</h6>
                        </div>
                        <div class="icon">
                           <i class="fas fa-box"></i>
                        </div>
                        <a href="#" class="small-box-footer">Show products <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
                  <!-- ./number of products -->
                  <!-- ./col -->
                  <!-- sales is -->
                  <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-info icon-container">
                        <div class="inner">
                           <h3>SALES IS</h3>
                           <h6 style="color: #17A2B8;">Sales</h6>
                        </div>
                        <div class="icon">
                           <i class="fas fa-cart-plus"></i>
                        </div>
                        <a href="#" class="small-box-footer">Add to cart <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-lightblue">
                        <div class="inner">
                           <h3>5</h3>
                           <h6>PRODUCTS SOLD</h6>
                        </div>
                        <div class="icon">
                           <i class="fas fa-people-carry"></i>
                        </div>
                        <a href="#" class="small-box-footer">Sold products <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
                  <!-- ./sales is -->
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-success icon-container">
                        <div class="inner">
                           <h3>SALES REPORT</h3>
                           <h6 style="color: #28A745;">Report Generation</h6>
                        </div>
                        <div class="icon">
                           <i class="fas fa-chart-bar"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">

                     <div class="small-box bg-olive">
                        <div class="inner">
                           <h3>₱500</h3>
                           <h6>AMOUNT EARNED</h6>
                        </div>
                        <div class="icon">
                           <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
                  <!-- ./col -->
               </div>
               <!-- /.row -->
               <!-- Main row -->
            </div>
            <!-- /.container-fluid -->
         </section>
      </div>
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



</body>

</html>