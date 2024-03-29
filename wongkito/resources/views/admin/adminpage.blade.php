
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Uci | Admin Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset ('/') }}https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('/') }}plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset ('/') }}https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset ('/') }}plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset ('/') }}plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset ('/') }}plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('/') }}dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset ('/') }}plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset ('/') }}plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset ('/') }}plugins/summernote/summernote-bs4.min.css">

   <!-- favicon -->
     <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item"> <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a> </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/layout/index" class="nav-link">Landing Page</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block active">
        <a href="#" class="nav-link">Admin</a>
      </li>
    </ul>
        </ul>
      <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
         <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Admin Account</span>
          <div class="dropdown-divider"></div>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Logout
          </button>
        </form>
        </div>
      </li>
     </ul>
    </ul>
  </nav>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Admin Wongkito</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/images/admin-profile.jpeg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Uci Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/admin/customer" class="nav-link">
              <p>
                 Manage Customer
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/addproduk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/produk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Product</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Gallery
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/addgallery" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Gallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/gallery" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Gallery</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin WongKito</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Customer List</h3>
                <p>Admin Wongkito</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/admin/customer" class="small-box-footer">Click Here <i class="fas fa-arrow-circle-right"></i></a>
            </div>

            
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>Produk List</h3>
                <p>Admin Wongkito</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/admin/produk" class="small-box-footer">Click Here <i class="fas fa-arrow-circle-right"></i></a>
            </div> 
          </div>

           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>gallery List</h3>
                <p>Admin Wongkito</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/admin/produk" class="small-box-footer">Click Here <i class="fas fa-arrow-circle-right"></i></a>
            </div> 
          </div>
        </div>
        
            <!-- /.card -->
        </section>
          <!-- right col -->
        </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset ('/') }}plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset ('/') }}plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('/') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset ('/') }}plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset ('/') }}plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset ('/') }}plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset ('/') }}plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset ('/') }}plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset ('/') }}plugins/moment/moment.min.js"></script>
<script src="{{ asset ('/') }}plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset ('/') }}plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset ('/') }}plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset ('/') }}plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('/') }}dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset ('/') }}dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset ('/') }}dist/js/pages/dashboard.js"></script>
</body>
</html>
