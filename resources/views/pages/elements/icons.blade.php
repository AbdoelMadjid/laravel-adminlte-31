@extends('temp.temp_master')
@section('MOElement','menu-open')
@section('MElement','active')
@section('SEIcon','active')
@section('maincontent')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Icons</h3>
          </div> <!-- /.card-body -->
          <div class="card-body">
            <p>You can use any font library you like with AdminLTE 3.</p>
            <strong>Recommendations</strong>
            <div>
              <a href="https://fontawesome.com/">Font Awesome</a><br>
              <a href="https://useiconic.com/open/">Iconic Icons</a><br>
              <a href="https://ionicons.com/">Ion Icons</a><br>
            </div>
          </div><!-- /.card-body -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('scriptscontent')
<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
@endsection
