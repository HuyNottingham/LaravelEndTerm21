@extends('layout.server')

@section('head')
<title>Hóa đơn nhập hàng</title>
<style>
  /* td{
    padding:16px 20px !important} */
</style>
@endsection

@section('content')
<div class="col-xl-12">
  <div class="QA_section">
    <div class="white_box_tittle list_header">
      <h4>Hoa don nhap hang</h4>
      <div class="box_right d-flex lms_block">
        <div class="serach_field_2">
          <div class="search_inner">
            <!-- <form Active="#"> -->
              <div class="search_field">
                <input type="text" placeholder="Search content here...">
              </div>
              <button type="submit"> <i class="ti-search"></i> </button>
            <!-- </form> -->
          </div>
        </div>
      </div>
    </div>

    <div class="QA_table mb_30 p16">
      <!-- table-responsive -->
      <table class="table lms_table_active">
        <thead>
          <tr>
            <th scope="col">Ngày</th>
            <th scope="col" class="p8">Nhà cung cấp</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Size</th>
            <th scope="col" class="p8">Thương hiệu</th>
            <th scope="col">Giá</th>
            <th scope="col" class="p0">Số lượng</th>
            <th scope="col">Tổng</th>
          </tr>
        </thead>
        <tbody>
          @for($i=0;$i<=5;$i++)
          <tr>
            <td>2021-10-11</td>
            <td>Hermers</td>
            <td>Printed Monogram Tie-dye Denim Shirt</td>
            <td>XXXXXL</td>
            <td>Hermers</td>
            <td>173,000,000 VNĐ</td>
            <td>5</td>
            <td>173,000,000 VNĐ</td>
          </tr>
          @endfor
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection

@section('script')
<script>
  <?php if(session('msg'))
    echo '$(document).ready(function(){ alert("'.session('msg').'");});'; ?>
</script>
@endsection