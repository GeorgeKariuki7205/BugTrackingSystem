<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1"
        name="viewport">
  <meta content="ie=edge"
        http-equiv="x-ua-compatible">
  <title>Appliaction Debugger.</title><!-- Font Awesome Icons -->
  {{-- <link rel="stylesheet" href="studioTemplates/assets/fonts/font-awesome.min.css"> --}}
  <link rel="stylesheet" href="AdminLTE-master/plugins/fontawesome-free/css/all.min.css"><!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-master/dist/css/adminlte.min.css"><!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
        rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
        {{-- <meta charset="utf-8"> --}}
      
        @if($usersChart)
        {!! $usersChart->script() !!}
        @endif
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color:#4d04c5;color:white;">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link"
              data-widget="pushmenu"
              href="#"
              role="button"></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a class="nav-link"
              href="/">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a class="nav-link"
              href="#">Contact</a>
        </li>
      </ul><!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input aria-label="Search"
               class="form-control form-control-navbar"
               placeholder="Search"
               type="search">
          <div class="input-group-append"></div>
        </div>
      </form><!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link"
              data-toggle="dropdown"
              href="#"> <i class="fa fa-comments" style="color:red"></i><span class="badge badge-danger">42</span></a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">            
            <a class="dropdown-item"
                 href="#"><!-- Message Start -->
            <div class="media">
              <img alt="User Avatar"
                   class="img-size-50 img-circle mr-3"
                   src="AdminLTE-master/dist/img/user3-128x128.jpg">
              <div class="media-body">
                <h3 class="dropdown-item-title">Nora Silvester</h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted">4 Hours Ago</p>
              </div>
            </div><!-- Message End --></a>
            <div class="dropdown-divider"></div><a class="dropdown-item dropdown-footer"
                 href="#">See All Messages</a>
          </div>
        </li><!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link"
              data-toggle="dropdown"
              href="#"> <i class="fa fa-bell" style="color:orange;"></i> <span class="badge badge-warning">42</span></a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div><a class="dropdown-item"
                 href="#">4 new messages <span class="float-right text-muted text-sm">3 mins</span></a>
            <div class="dropdown-divider"></div><a class="dropdown-item"
                 href="#">8 friend requests <span class="float-right text-muted text-sm">12 hours</span></a>
            <div class="dropdown-divider"></div><a class="dropdown-item"
                 href="#">3 new reports <span class="float-right text-muted text-sm">2 days</span></a>
            <div class="dropdown-divider"></div><a class="dropdown-item dropdown-footer"
                 href="#">See All Notifications</a>
          </div>
          <li class="nav-item dropdown">
            <a style="color:black;" id="navbarDropdown" style="color:white;text-style:bold;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                 {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                
                <a class="dropdown-item" href="/allReportedBugs" >
                  {{"My Reported Bugs."}}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        </li>
        
      </ul>
    </nav><!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#4d04c5;">
      <!-- Brand Logo -->
      <a class="brand-link"
             href="index3.html"><img alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           src="AdminLTE-master/dist/img/AdminLTELogo.png"
           style="opacity: .8"> <span class="brand-text font-weight-light">Appliaction Debugger</span></a> <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image"><img alt="User Image"
               class="img-circle elevation-2"
               src="AdminLTE-master/dist/img/user2-160x160.jpg"></div>
          <div class="info">
            <a class="d-block"
                 href="#">{{Auth::user()->name}}</a>
          </div>
        </div><!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column"
              data-accordion="false"
              data-widget="treeview"
              role="menu">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a class="nav-link active"
                  href="#">
              <p>Starter Pages</p></a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a class="nav-link active"
                      href="#">
                  <p>Active Page</p></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"
                      href="#">
                  <p>Inactive Page</p></a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link"
                  href="#">
              <p>Simple Link <span class="right badge badge-danger">New</span></p></a>
            </li>
          </ul>
        </nav><!-- /.sidebar-menu -->
      </div><!-- /.sidebar -->
    </aside><!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            @yield('firstLineHeader')
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div><!-- /.content-header -->
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">

            {{-- THIS SECTION OF THE CODE IS GOING TO BE USED AS THE TEMPLATE OF THE APPLICATION. --}} 

            @yield('firstLineSection')
            @yield('name')

        </div><!-- /.container-fluid -->
      </div><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside><!-- /.control-sidebar -->
    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->      
      <strong>Copyright &copy; 2014-2020 <a href="#">Appliaction Debugger.</a>.</strong> All rights reserved.
    </footer>
  </div><!-- ./wrapper -->
  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="studioTemplates/assets/js/jquery.min.js"></script>
   <!-- Bootstrap 4 -->
  
  <script src="AdminLTE-master/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- AdminLTE App -->
   
  <script src="AdminLTE-master/dist/js/adminlte.min.js"></script>
  <script src="AdminLTE-master/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
{{-- <script src="AdminLTE-master/plugins/datatables/jquery.dataTables.js"></script> --}}
{{-- <script src="AdminLTE-master/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script> --}}


@include('sweetalert::alert')
@yield('charts')
  
    
{{-- <script>
    $(function () {
      $("#example1").DataTable();
    });
  </script> --}}
  
</body>
</html>
