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
          <tr onclick="details({{$row->id}})">
            <td class="nowrap">{{$row->date}}</td>
            <td class="nowrap">{{number_format($row->total)." VNĐ"}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->address}}</td>
            <td>{{$row->phone}}</td>
            <td>
              <select onchange="status(this.value, {{$row->id}})" class="form-control p0">
                @foreach($status as $sta)
                  <option value="{{$sta->id}}"<?php
                    if($sta->id==$row->status) echo " selected"?>>
                    {{$sta->status}}</option>
                @endforeach
                  <option value="0">Hủy</option>
              </select>
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
  function details(id){
    location.assign('orderdetails/'+id);
    }

  function status(status, id) {
    if (status==0)
      location.assign("deleteorder/"+id);
    else
      location.assign("updateorder/"+id+"/"+status);
    }
</script>
@endsection