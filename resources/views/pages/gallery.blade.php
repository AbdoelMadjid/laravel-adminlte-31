@extends('temp.temp_master')
@section('MOGallery','menu-open')
@section('MGallery','active')
@section('maincontent')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title">FilterizR Gallery with Ekko Lightbox</h4>
              </div>
              <div class="card-body">
                <div>
                  <div class="btn-group w-100 mb-2">
                    <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All items </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Category 1 (WHITE) </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Category 2 (BLACK) </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Category 3 (COLORED) </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Category 4 (COLORED, BLACK) </a>
                  </div>
                  <div class="mb-2">
                    <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle items </a>
                    <div class="float-right">
                      <select class="custom-select" style="width: auto;" data-sortOrder>
                        <option value="index"> Sort by Position </option>
                        <option value="sortData"> Sort by Custom Data </option>
                      </select>
                      <div class="btn-group">
                        <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending </a>
                        <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="filter-container p-0 row">
                    <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                      <a href="/dist/img/superbox/superbox-full-1.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                        <img src="/dist/img/superbox/superbox-full-1.jpg" class="img-fluid mb-2" alt="white sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                      <a href="/dist/img/superbox/superbox-full-2.jpg" data-toggle="lightbox" data-title="sample 2 - black">
                        <img src="/dist/img/superbox/superbox-full-2.jpg" class="img-fluid mb-2" alt="black sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                      <a href="/dist/img/superbox/superbox-full-3.jpg" data-toggle="lightbox" data-title="sample 3 - red">
                        <img src="/dist/img/superbox/superbox-full-3.jpg" class="img-fluid mb-2" alt="red sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                      <a href="/dist/img/superbox/superbox-full-4.jpg" data-toggle="lightbox" data-title="sample 4 - red">
                        <img src="/dist/img/superbox/superbox-full-4.jpg" class="img-fluid mb-2" alt="red sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                      <a href="/dist/img/superbox/superbox-full-5.jpg" data-toggle="lightbox" data-title="sample 5 - black">
                        <img src="/dist/img/superbox/superbox-full-5.jpg" class="img-fluid mb-2" alt="black sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                      <a href="/dist/img/superbox/superbox-full-6.jpg" data-toggle="lightbox" data-title="sample 6 - white">
                        <img src="/dist/img/superbox/superbox-full-6.jpg" class="img-fluid mb-2" alt="white sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                      <a href="/dist/img/superbox/superbox-full-7.jpg" data-toggle="lightbox" data-title="sample 7 - white">
                        <img src="/dist/img/superbox/superbox-full-7.jpg" class="img-fluid mb-2" alt="white sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                      <a href="/dist/img/superbox/superbox-full-8.jpg" data-toggle="lightbox" data-title="sample 8 - black">
                        <img src="/dist/img/superbox/superbox-full-8.jpg" class="img-fluid mb-2" alt="black sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                      <a href="/dist/img/superbox/superbox-full-9.jpg" data-toggle="lightbox" data-title="sample 9 - red">
                        <img src="/dist/img/superbox/superbox-full-9.jpg" class="img-fluid mb-2" alt="red sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                      <a href="/dist/img/superbox/superbox-full-10.jpg" data-toggle="lightbox" data-title="sample 10 - white">
                        <img src="/dist/img/superbox/superbox-full-10.jpg" class="img-fluid mb-2" alt="white sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                      <a href="/dist/img/superbox/superbox-full-11.jpg" data-toggle="lightbox" data-title="sample 11 - white">
                        <img src="/dist/img/superbox/superbox-full-11.jpg" class="img-fluid mb-2" alt="white sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                      <a href="/dist/img/superbox/superbox-full-12.jpg" data-toggle="lightbox" data-title="sample 12 - black">
                        <img src="/dist/img/superbox/superbox-full-12.jpg" class="img-fluid mb-2" alt="black sample"/>
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title">Ekko Lightbox</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-2">
                    <a href="/dist/img/superbox/superbox-full-13.jpg" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="/dist/img/superbox/superbox-full-13.jpg" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="/dist/img/superbox/superbox-full-14.jpg" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
                      <img src="/dist/img/superbox/superbox-full-14.jpg" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="/dist/img/superbox/superbox-full-15.jpg" data-toggle="lightbox" data-title="sample 3 - red" data-gallery="gallery">
                      <img src="/dist/img/superbox/superbox-full-15.jpg" class="img-fluid mb-2" alt="red sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="/dist/img/superbox/superbox-full-16.jpg" data-toggle="lightbox" data-title="sample 4 - red" data-gallery="gallery">
                      <img src="/dist/img/superbox/superbox-full-16.jpg" class="img-fluid mb-2" alt="red sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="/dist/img/superbox/superbox-full-17.jpg" data-toggle="lightbox" data-title="sample 5 - black" data-gallery="gallery">
                      <img src="/dist/img/superbox/superbox-full-17.jpg" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="/dist/img/superbox/superbox-full-18.jpg" data-toggle="lightbox" data-title="sample 6 - white" data-gallery="gallery">
                      <img src="/dist/img/superbox/superbox-full-18.jpg" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="/dist/img/superbox/superbox-full-19.jpg" data-toggle="lightbox" data-title="sample 7 - white" data-gallery="gallery">
                      <img src="/dist/img/superbox/superbox-full-19.jpg" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="/dist/img/superbox/superbox-full-20.jpg" data-toggle="lightbox" data-title="sample 8 - black" data-gallery="gallery">
                      <img src="/dist/img/superbox/superbox-full-20.jpg" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="/dist/img/superbox/superbox-full-21.jpg" data-toggle="lightbox" data-title="sample 9 - red" data-gallery="gallery">
                      <img src="/dist/img/superbox/superbox-full-21.jpg" class="img-fluid mb-2" alt="red sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="/dist/img/superbox/superbox-full-22.jpg" data-toggle="lightbox" data-title="sample 10 - white" data-gallery="gallery">
                      <img src="/dist/img/superbox/superbox-full-22.jpg" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="/dist/img/superbox/superbox-full-23.jpg" data-toggle="lightbox" data-title="sample 11 - white" data-gallery="gallery">
                      <img src="/dist/img/superbox/superbox-full-23.jpg" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="/dist/img/superbox/superbox-full-24.jpg" data-toggle="lightbox" data-title="sample 12 - black" data-gallery="gallery">
                      <img src="/dist/img/superbox/superbox-full-24.jpg" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('scriptscontent')
<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Ekko Lightbox -->
<script src="/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- Filterizr-->
<script src="/plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
@endsection
