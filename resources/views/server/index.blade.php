@extends('layout.server')

@section('head')
<title>Admin</title>
<style>
  .single_quick_activity[onclick^="view"]{
    cursor: pointer}
</style>
@endsection

@section('content')
<div class="col-lg-12">
  <div class="single_element">
    <div class="quick_activity">
      <div class="row">
        <div class="col-12">
          <div class="quick_activity_wrap">
            <div class="single_quick_activity d-flex" title="Xem danh sách hội viên" onclick="view(1)">
              <div class="icon">
                <img src="{{asset('img')}}/icon/man.svg" alt="">
              </div>
              <div class="count_content">
                <h3><span class="blue_color">{{$users}}</span> </h3> 
                <p>Hội viên</p>
              </div>
            </div>
            <div class="single_quick_activity d-flex" title="Xem danh sách sản phẩm" onclick="view(2)">
              <div class="icon">
                <img src="{{asset('img')}}/icon/wheel.svg" alt="">
              </div>
              <div class="count_content">
                <h3><span class="yellow_color">{{$products}}</span> </h3>
                <p>Sản phẩm</p>
              </div>
            </div>
            <div class="single_quick_activity d-flex" title="Xem danh sách đơn đặt hàng" onclick="view(3)">
              <div class="icon">
                <img src="{{asset('img')}}/icon/cap.svg" alt="">
              </div>
              <div class="count_content">
                <h3><span class="red_color">{{$orders}}</span> </h3>
                <p>Đơn hàng</p>
              </div>
            </div>
            <div class="single_quick_activity d-flex" title="Xem danh sách hóa đơn bán hàng" onclick="view(4)">
              <div class="icon">
                <img src="{{asset('img')}}/icon/pharma.svg" alt="">
              </div>
              <div class="count_content">
                <h3><span class="green_color">{{$ordersdetails}}</span> </h3>
                <p>Đã bán</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-12 col-xl-12">
  <div class="white_box mb_30 ">
    <div class="box_header border_bottom_1px">
      <div class="main-title">
        <h3 class="mb_25" >Tong nhap/xuat trong 12 thang</h3>
      </div>
    </div>
    <!-- <div class="income_servay">
      <div class="row">
        <div class="col-md-3">
          <div class="count_content">
            <h3>$ <span class="counter">305</span> </h3>
            <p>Today's Income</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="count_content">
            <h3>$ <span class="counter">1005</span> </h3>
            <p>This Week's Income</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="count_content">
            <h3>$ <span class="counter">5505</span> </h3>
            <p>This Month's Income</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="count_content">
            <h3>$ <span class="counter">155615</span> </h3>
            <p>This Year's Income</p>
          </div>
        </div>
      </div>
    </div> -->
    <div id="apex_3"></div>
  </div>
</div>

<div class="col-xl-12">
  <div class="white_box QA_section card_height_100">
    <div class="white_box_tittle list_header m-0 align-items-center">
      <div class="main-title mb-sm-15">
        <h3 class="m-0 nowrap">Doanh so ban hang</h3>
      </div>
      <div class="box_right d-flex lms_block">
        <div class="serach_field-area2">
          <div class="search_inner">
            <form Active="#">
              <div class="search_field">
                <input type="text" placeholder="Search here...">
              </div>
              <button type="submit"> <i class="ti-search"></i> </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="QA_table ">
      <table class="table lms_table_active2">
        <thead>
          <tr>
            <th scope="col">Ten nhan vien</th>
            <th scope="col">Chuc vu</th>
            <th scope="col">Ngay sinh</th>
            <th scope="col">Dia chi</th>
            <th scope="col">Doanh so</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i=0; $i < 5; $i++) {
            foreach($staff as $row){
            $img = ($row->vatar==NULL) ? 'default/avt.png' : 'staff/'.$row->image;
          ?>
          <tr>
            <th scope="row">
              <div class="patient_thumb d-flex align-items-center">
                <div class="student_list_img mr_20">
                  <img src="{{asset('img/'.$img)}}" alt="" srcset="">
                </div>
                <p>{{$row->name}}</p>
              </div>
            </th>
            <td>{{$row->position}}</td>
            <td>{{$row->birthday}}</td>
            <td>{{$row->address}}</td>
            <td>{{number_format($row->sales)}} VNĐ</td>
          </tr>
          <?php }} ?>
            <!-- nhét vào td cuối
              <div class="amoutn_action d-flex align-items-center">
                        $29,192
                <div class="dropdown ml-4">
                  <a class=" dropdown-toggle hide_pils" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">View</a>
                    <a class="dropdown-item" href="#">Edit</a>
                    <a class="dropdown-item" href="#">Delete</a>
                  </div>
                </div>
              </div> -->
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="col-xl-12">
  <div class="white_box card_height_100">
    <div class="box_header border_bottom_1px">
      <div class="main-title">
        <h3 class="mb_25">Hospital Staff</h3>
      </div>
    </div>
    <div class="staf_list_wrapper sraf_active owl-carousel">
      <!-- single carousel  -->
      <div class="single_staf">
        <div class="staf_thumb">
          <img src="{{asset('img')}}/staf/1.png" alt="">
        </div>
        <h4>Dr. Sysla J Smith</h4>
        <p>Doctor</p>
      </div>
      <!-- single carousel  -->
      <div class="single_staf">
        <div class="staf_thumb">
          <img src="{{asset('img')}}/staf/2.png" alt="">
        </div>
        <h4>Dr. Sysla J Smith</h4>
        <p>Doctor</p>
      </div>
      <!-- single carousel  -->
      <div class="single_staf">
        <div class="staf_thumb">
          <img src="{{asset('img')}}/staf/3.png" alt="">
        </div>
        <h4>Dr. Sysla J Smith</h4>
        <p>Doctor</p>
      </div>
      <!-- single carousel  -->
      <div class="single_staf">
        <div class="staf_thumb">
          <img src="{{asset('img')}}/staf/4.png" alt="">
        </div>
        <h4>Dr. Sysla J Smith</h4>
        <p>Doctor</p>
      </div>
      <!-- single carousel  -->
      <div class="single_staf">
        <div class="staf_thumb">
          <img src="{{asset('img')}}/staf/5.png" alt="">
        </div>
        <h4>Dr. Sysla J Smith</h4>
        <p>Doctor</p>
      </div>
      <!-- single carousel  -->
      <div class="single_staf">
        <div class="staf_thumb">
          <img src="{{asset('img')}}/staf/1.png" alt="">
        </div>
        <h4>Dr. Sysla J Smith</h4>
        <p>Doctor</p>
      </div>
      <!-- single carousel  -->
      <div class="single_staf">
        <div class="staf_thumb">
          <img src="{{asset('img')}}/staf/2.png" alt="">
        </div>
        <h4>Dr. Sysla J Smith</h4>
        <p>Doctor</p>
      </div>
      <!-- single carousel  -->
      <div class="single_staf">
        <div class="staf_thumb">
          <img src="{{asset('img')}}/staf/3.png" alt="">
        </div>
        <h4>Dr. Sysla J Smith</h4>
        <p>Doctor</p>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<!-- <script src="{{asset('js')}}/chart.min.js"></script>
<script src="{{asset('vendors')}}/apex_chart/bar_active_1.js"></script>
<script src="{{asset('vendors')}}/apex_chart/apex_chart_list.js"></script>
<script src="vendors/apex_chart/apexchart_lists.js"></script> -->
<script src="{{asset('vendors')}}/apex_chart/apexcharts.js"></script>
<script>
  function view(i) {
    let url='';
    switch (i) {
      case 1:
        url = "<?=route('user')?>";
        break;
      case 2:
        url = "<?=route('tableproduct',['title'=>'Tất cả'])?>";
        break;
      case 3:
        url = "<?=route('order')?>";
        break;
      case 4:
        url = "<?=route('bill')?>";
        break;
      default:
        return;
    }
    window.location=url;
  }


  // apex_3 
  $(document).ready(function(){
    let nhap = [];
    let xuat = [];
    let thang = [];
    <?php foreach ($sales as $row) { ?>
      nhap.push(<?php echo ($row->import==NULL) ? 0 : $row->import ?>);
      xuat.push(<?php echo ($row->sold==NULL) ? 0 : $row->sold ?>);
      thang.push("<?= $row->date ?>");
    <?php } ?>
    // alert(nhap +"\n" + xuat +"\n" + thang);
    var options = {
      series: [{
      name: 'Nhập',
      data: nhap
    }, {
      name: 'Xuất',
      data: xuat
    }],
      chart: {
      height: 400,
      type: 'area'
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth'
    },
    xaxis: {
      type: 'datetime',
      categories: thang
    },
    tooltip: {
      x: {
        format: ' MM/yyyy'
      },
      y: {
        formatter: function (y) {
          if (typeof y !== "undefined") {
            return y.toLocaleString('vi-VN', {style : 'currency', currency : 'VND'});
          }
          return y;

        }
      }
    },
    };

    var chart = new ApexCharts(document.querySelector("#apex_3"), options);
    chart.render();
  });
</script>
@endsection