@extends('layout.server')

@section('head')
<title>Danh sách hội viên</title>
<style>
  .align-j:last-child{
    padding-right:20px !important}
</style>
@endsection

@section('content')
<div class="col-xl-12">
  <div class="QA_section">
    <div class="white_box_tittle list_header">
      <h4>Danh sach hoi vien</h4>
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
        <div class="add_button ml-10">
          <a href="{{route('adduser')}}" class="btn_1">Thêm mới</a>
        </div>
      </div>
    </div>

    <div class="QA_table mb_30 p16">
      <table class="table lms_table_active">
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col" class="p8">Tên</th>
            <th scope="col">Email</th>
            <th scope="col">Mật khẩu</th>
            <th scope="col" class="p8">Ngày tham gia</th>
            <th scope="col" class="p0">Điểm thưởng</th>
            <th scope="col">#</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $stt=0;
            foreach ($user as $row) {
              $stt++; ?>
              <tr>
                <td class="p30">{{$stt}}</td>
                <td class="p8">{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{md5($row->password)}}</td>
                <td>{{$row->join_date}}</td>
                <td class="p30">{{$row->point}}</td>
                <td class="align-j">
                  <a href="updateuser/{{$row->id}}">Sửa</a>
                  <a href="deleteuser/{{$row->id}}" onclick="return confirm('Bạn muốn xóa {{$row->name}} ?')">Xóa</a>
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
  < ?php if(session('msg')){ ?>
    $(document).ready(function(){
      alert("{{session('msg')}}");
    });
  < ?php } ?>
</script>
@endsection