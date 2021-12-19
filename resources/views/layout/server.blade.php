<!DOCTYPE html>
<html lang="en">
<head>
  @include("layout.server_head")
  <link rel="icon" href="{{asset('img')}}//default/icon.png" type="image/png">
  @yield('head')
</head>
<body class="crm_body_bg">


<!-- sidebar  -->
@include("layout.server_sidebar")


<section class="main_content dashboard_part">
  <!-- menu  -->
  @include("layout.server_header")

  <div class="main_content_iner ">
    <div class="container-fluid p-0">
      <div class="row justify-content-center">
        @yield('content')
      </div>
    </div>
  </div>

<!-- footer part -->
<div class="footer_part">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="footer_iner text-center">
          <p>2020 © Influence - Designed by <a href="#"> <i class="ti-heart"></i> </a><a href="#"> Dashboard</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- main content part end -->

<!-- footer  -->
<!-- jquery slim -->
<script src="{{asset('js')}}/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="{{asset('js')}}/popper.min.js"></script>
<!-- bootstarp js -->
<script src="{{asset('js')}}/bootstrap.min.js"></script>
<!-- sidebar menu  -->
<script src="{{asset('js')}}/metisMenu.js"></script>
<!-- waypoints js -->
<script src="{{asset('vendors')}}/count_up/jquery.waypoints.min.js"></script>
<!-- waypoints js -->
<script src="{{asset('vendors')}}/chartlist/Chart.min.js"></script>
<!-- counterup js -->
<script src="{{asset('vendors')}}/count_up/jquery.counterup.min.js"></script>
<!-- swiper slider js -->
<script src="{{asset('vendors')}}/swiper_slider/js/swiper.min.js"></script>
<!-- nice select -->
<script src="{{asset('vendors')}}/niceselect/js/jquery.nice-select.min.js"></script>
<!-- owl carousel -->
<script src="{{asset('vendors')}}/owl_carousel/js/owl.carousel.min.js"></script>
<!-- gijgo css -->
<script src="{{asset('vendors')}}/gijgo/gijgo.min.js"></script>
<!-- responsive table -->
<script src="{{asset('vendors')}}/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{asset('vendors')}}/datatable/js/dataTables.responsive.min.js"></script>
<script src="{{asset('vendors')}}/datatable/js/dataTables.buttons.min.js"></script>
<script src="{{asset('vendors')}}/datatable/js/buttons.flash.min.js"></script>
<script src="{{asset('vendors')}}/datatable/js/jszip.min.js"></script>
<script src="{{asset('vendors')}}/datatable/js/pdfmake.min.js"></script>
<script src="{{asset('vendors')}}/datatable/js/vfs_fonts.js"></script>
<script src="{{asset('vendors')}}/datatable/js/buttons.html5.min.js"></script>
<script src="{{asset('vendors')}}/datatable/js/buttons.print.min.js"></script>

<script src="{{asset('js')}}/chart.min.js"></script>
<!-- progressbar js -->
<script src="{{asset('vendors')}}/progressbar/jquery.barfiller.js"></script>
<!-- tag input -->
<script src="{{asset('vendors')}}/tagsinput/tagsinput.js"></script>
<!-- text editor js -->
<script src="{{asset('vendors')}}/text_editor/summernote-bs4.js"></script>

<script src="{{asset('vendors')}}/apex_chart/apexcharts.js"></script>

<!-- custom js -->
<script src="{{asset('js')}}/custom.js"></script>

@yield('script')
</body>
</html>