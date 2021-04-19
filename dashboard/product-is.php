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
      <!-- Content Wrapper. Contains page content -->
      <section class="content">
         <div class="content-wrapper main-content-white page-content" style="background-color:#073546">
            <!-- Content Header (Page header) -->
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h2 class="m-0 dashboard-main" style="color:#fff; font-size: 2rem">PRODUCT LIST</h2>
                        <!-- Button trigger modal -->
                     </div>
                     <!-- Large modal -->
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add New Product</button>

                     <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                              <div class="modal-header" style="padding: 0.5rem;">
                                 <h5>ADD PRODUCT FORM</h5>
                              </div>
                              <form action="getModalForm.php" method="POST">
                                 <div class="form-group" style="width: 50%;">
                                    <label for="exampleFormControlInput1">Product Code</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="productCode">
                                 </div>
                                 <div class="form-group" style="width: 50%;">
                                    <label for="exampleFormControlInput1">Short Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="shortName">
                                 </div>
                                 <div class="form-group" style="width: 50%;">
                                    <label for="exampleFormControlInput1">Description</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="description">
                                 </div>
                                 <div class="form-group" style="display: flex;">
                                    <div style="width: 20%;">
                                       <label for="exampleFormControlInput1">Price</label>
                                       <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="₱" name="price">
                                    </div>
                                    <div style="margin-left: 20px;" style="width: 30%;">
                                       <div class="form-group">
                                          <label>Category</label>
                                          <select class="form-control" name="choices">
                                             <option>Choices</option>
                                             <option>HAND AND BODY LOTION</option>
                                             <option>DEODORANT</option>
                                             <option>JEWELRY</option>
                                             <option>LIPSTICK</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="modal-footer" style="padding: 0.5rem;">
                                    <button class="rounded-pill btn btn-primary" type="submit">ADD</button>
                                    <button class="rounded-pill btn btn-danger" data-dismiss="modal">CANCEL</button>
                                 </div>
                              </form>
                           </div>
                        </div>
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
            <section class="content" style="padding: 1rem">
               <div class="container-fluid">
                  <!-- Small boxes (Stat box) -->
                  <div class="card">
                     <!-- <div class="card-header">
                        <h3 class="card-title">DataTable with default features</h3>
                        </div> -->
                     <!-- /.card-header -->
                     <div class="card-body">
                        <table id="example" class="table table-striped table-bordered">
                           <thead>
                              <tr>
                                 <th>Product Code</th>
                                 <th>Full Name</th>
                                 <th>Short Name</th>
                                 <th>Price</th>
                                 <th>Category</th>
                                 <th>Status</th>
                                 <th>Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>LO-01-WT</td>
                                 <td>SKIN SO SOFT</td>
                                 <td>SSS LOTION</td>
                                 <td>₱150</td>
                                 <td>HAND AND BODY LOTION</td>
                                 <td>NOT AVAILABLE</td>
                                 <td class="actions-btn">
                                    <button class="rounded-pill btn btn-success">view</button>
                                    <button class="rounded-pill btn btn-primary">update</button>
                                 </td>
                              </tr>
                              <tr>
                                 <td>WTH-01-WG</td>
                                 <td>CHENILLE T-BAR</td>
                                 <td>CTB WATCH</td>
                                 <td>₱5000</td>
                                 <td>JEWELRY</td>
                                 <td>AVAILABLE</td>
                                 <td class="actions-btn">
                                    <button class="rounded-pill btn btn-success">view</button>
                                    <button class="rounded-pill btn btn-primary">update</button>
                                 </td>
                              </tr>
                              <tr>
                                 <td>NAT-120g-GRPACL</td>
                                 <td>Naturals Whitening</td>
                                 <td>NW SOAP</td>
                                 <td>₱99</td>
                                 <td>BATH SOAP</td>
                                 <td>NOT AVAILABLE</td>
                                 <td class="actions-btn">
                                    <button class="rounded-pill btn btn-success">view</button>
                                    <button class="rounded-pill btn btn-primary">update</button>
                                 </td>
                              </tr>
                              <tr>
                                 <td>FF-01-APD</td>
                                 <td>FEELIN FRESH ROLL ON COOLING</td>
                                 <td>FFAPD DEODORANT</td>
                                 <td>₱170</td>
                                 <td>DEODORANT</td>
                                 <td>AVAILABLE</td>
                                 <td class="actions-btn">
                                    <button class="rounded-pill btn btn-success">view</button>
                                    <button class="rounded-pill btn btn-primary">update</button>
                                 </td>
                              </tr>
                              <tr>
                                 <td>FF-02-APR</td>
                                 <td>FEELIN FRESH ROLL ON GLOTA</td>
                                 <td>FFAP ROLL DEO</td>
                                 <td>₱180</td>
                                 <td>DEODORANT</td>
                                 <td>AVAILABLE</td>
                                 <td class="actions-btn">
                                    <button class="rounded-pill btn btn-success">view</button>
                                    <button class="rounded-pill btn btn-primary">update</button>
                                 </td>
                              </tr>
                              <tr>
                                 <td>GT-02-CL</td>
                                 <td>24K Gold LIPSTICK</td>
                                 <td>24K LIPST</td>
                                 <td>₱500</td>
                                 <td>LIPSTICK</td>
                                 <td>AVAILABLE</td>
                                 <td class="actions-btn">
                                    <button class="rounded-pill btn btn-success">view</button>
                                    <button class="rounded-pill btn btn-primary">update</button>
                                 </td>
                              </tr>
                           <tfoot>
                              <tr>
                                 <th>Product Code</th>
                                 <th>Full Name</th>
                                 <th>Short Name</th>
                                 <th>Price</th>
                                 <th>Category</th>
                                 <th>Status</th>
                                 <th>Actions</th>
                              </tr>
                           </tfoot>
                        </table>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- Main row -->
               </div>
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