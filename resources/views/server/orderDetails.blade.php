@extends('layout.server')

@section('head')
<title>Đơn đặt hàng</title>
<style>
  /* .footer_part{display:none} */
  .order{
    background-color:#fff;
    border-radius:10px;
    margin:-10px 0 30px;
    width:100%;
    padding:5px 10px 0}
  .order th{
    font-size:17px;
    font-family:"Rajdhani", sans-serif;
    padding-left:20px;
    padding-right:20px}
  .order td{
    line-height:1.9;
    color:#555;
    vertical-align:middle}
  .align-j:last-child{
    padding-right:20px !important}
  .lms_table_active td:first-child{
    padding-left:20px !important}
</style>
@endsection

@section('content')
<div class="white-box order">
  <table class="table mb-0">
    <thead>
      <tr>
        <th>Ngày</th>
        <th>Giá trị</th>
        <th>Khách hàng</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>SĐT</th>
        <th>Trạng thái</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="nowrap">{{$order->date}}</td>
        <td class="nowrap">{{number_format($order->total)." VNĐ"}}</td>
        <td>{{$order->name}}</td>
        <td>{{$order->email}}</td>
        <td>{{$order->address}}</td>
        <td>{{$order->phone}}</td>
        <td>
          <select onchange="status(this.value, {{$order->id}})" class="form-control p0">
            @foreach($status as $sta)
              <option value="{{$sta->id}}"<?php
                if($sta->id==$order->status) echo " selected"?>>
                {{$sta->status}}</option>
            @endforeach
              <option value="0">Hủy</option>
          </select>
        </td>
      </tr>
    </tbody>
  </table>
</div>


<div class="col-xl-12">
  <div class="QA_section">
    <div class="white_box_tittle list_header">
      <h4>Don dat hang</h4>
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

    <div class="QA_table mb_30 p8">
      <table class="table lms_table_active">
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Thương hiệu</th>
            <th scope="col">Giá</th>
            <th scope="col" class="p0">Số lượng</th>
            <th scope="col">Tổng</th>
            <th scope="col">#</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $stt=0;
            foreach ($details as $row) {
              $stt++; ?>
              <tr>
                <td>{{$stt}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->brand}}</td>
                <td>{{number_format($row->price)." VNĐ"}}</td>
                <td>{{$row->quantity}}</td>
                <td>{{number_format($row->total)." VNĐ"}}</td>
                <td class="align-j">
                  <a href="updateorderdetails/{{$row->id}}">Sửa</a>
                  <a href="deleteorderdetails/{{$row->id}}" onclick="return confirm('Bạn muốn xóa {{$row->name}} ?')">Xóa</a>
                </td>
              </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </div>
</div>
@endsection

@section('script')
<script>
  function status(status, id) {
    if (status==0)
      location.assign("deleteorder/"+id);
    else
      location.assign("updateorder/"+id+"/"+status);
    }
</script>
@endsection