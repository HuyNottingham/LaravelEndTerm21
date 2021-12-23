@extends('layout.server')

@section('head')
<title>Đơn đặt hàng</title>
<style>
  tr:focus{
    background-color:#f55 !important
  }
</style>
@endsection

@section('content')
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
      <!-- table-responsive -->
      <table class="table lms_table_active">
        <thead>
          <tr>
            <th scope="col">Ngày</th>
            <th scope="col">Giá trị</th>
            <th scope="col">Khách hàng</th>
            <th scope="col">Email</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">SĐT</th>
            <th scope="col">Trạng thái</th>
          </tr>
        </thead>
        <tbody>
          @foreach($order as $row)
          <tr>
            <td class="nowrap">{{$row->date}}</td>
            <td class="nowrap">{{number_format($row->total)." VNĐ"}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->address}}</td>
            <td>{{$row->phone}}</td>
            <td>
              <div class="d-flex align-items-center">
                <select onchange="status(this.value, {{$row->id}})" class="form-control p0">
                  @foreach($status as $sta)
                    <option value="{{$sta->id}}"<?php
                      if($sta->id==$row->status) echo " selected"?>>
                      {{$sta->status}}</option>
                  @endforeach
                </select>
                <div class="dropdown ml-3">
                  <a class=" dropdown-toggle hide_pils" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="orderdetails/{{$row->id}}">Xem chi tiết</a>
                    <a class="dropdown-item" href="deleteorder/{{$row->id}}" onclick="return confirm('Bạn chắc chứ?')">Xóa đơn</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
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

  function status(status, id) {
    location.assign("updateorder/"+id+"/"+status);
    }
</script>
@endsection