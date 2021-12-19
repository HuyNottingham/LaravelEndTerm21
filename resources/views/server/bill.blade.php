@extends('layout.server')

@section('head')
<title>Hóa đơn bán hàng</title>
<style>
  td{
    padding:16px 20px !important}
</style>
@endsection

@section('content')
<div class="col-xl-12">
  <div class="QA_section">
    <div class="white_box_tittle list_header">
      <h4>Hoa don ban hang</h4>
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

    <div class="QA_table mb_30">
      <!-- table-responsive -->
      <table class="table lms_table_active">
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Ngày</th>
            <th scope="col">Giá trị</th>
            <th scope="col">Email</th>
            <th scope="col">Địa chỉ</th>
            <th>#</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $stt=0;
            foreach ($bill as $row) {
            //for ($i=0; $i < 2; $i++) {
              $stt++; ?>
              <tr onclick="location.assign('billdetails/'+{{$row->id}})">
                <td>{{$stt}}</td>
                <td>{{$row->date}}</td>
                <td>{{number_format($row->total)." VNĐ"}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->address}}</td>
                <td><a href="deleteorder/{{$row->id}}" onclick="return confirm('Xóa hóa đơn thứ {{$stt}}?')">Xóa</a></td>
              </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection

@section('script')
@endsection