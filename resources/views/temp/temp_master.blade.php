<!DOCTYPE html>
<html lang="en">
@include('temp.header')
<body class="hold-transition sidebar-mini layout-fixed layout-footer-fixed layout-navbar-fixed text-sm {{$setting_content}}">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <!-- Navbar -->
  @include('temp.nav')
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  @include('temp.sidebar_main')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper @yield('wkanban')">
    <!-- Content Header (Page header) -->
    @include('temp.header_content')
    <!-- /.content-header -->
    <!-- Main content -->
    @yield('maincontent')
    <!-- /.content -->
    <!--
    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
        <i class="fas fa-chevron-up"></i>
    </a> -->
  </div>
  <!-- /.content-wrapper -->
  @include('temp.footer')
  <!-- Control Sidebar -->
  @include('temp.sidebar_control')
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@yield('scriptscontent')
</body>
</html>
