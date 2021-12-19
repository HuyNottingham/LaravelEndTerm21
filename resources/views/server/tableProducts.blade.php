@extends('layout.server')

@section('head')
<title>Danh sách sản phẩm</title>
<style>
  #act{
    display:none;
    position:fixed;
    top:0;
    right:0;
    padding-top:50px !important;
    z-index:6;
    height:100%;
    background-color:rgb(0 0 0 /0.1);
    width:100%}
  #act>div{
    box-shadow:0 5px 10px 2px rgb(0 0 0 /0.2);
    margin:0 auto;
    max-width:400px}
  #act div div{
    text-align:center}
  #act button{
    width:49%;
    min-width:150px;
    margin-top:21px}
  .cancel{
    width:100% !important}
  #txt{
    font-size:1rem}

  .white_box_tittle h4 span{
    color:#2DAAB8;
    padding-left:15px;
    padding-right:15px;
    font-size:30px;
    line-height:20px;
    font-weight:100;
  }
</style>
@endsection

@section('content')
<div class="col-xl-12">
  <div class="QA_section">
    <div class="white_box_tittle list_header">
      <h4>Danh sach san pham<span>→</span>{{$title}}</h4>
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
          <a href="{{route('addproduct')}}" class="btn_1">Thêm mới</a>
        </div>
      </div>
    </div>

    <div class="QA_table mb_30 p8">
      <table class="table lms_table_active img-100">
        <thead>
          <tr>
            <th scope="col">Anh</th>
            <th scope="col">Ten san pham</th>
            <th scope="col" class="p8">Loai</th>
            <th scope="col" class="p16">Mau</th>
            <th scope="col" class="p8">Gioi tinh</th>
            <th scope="col" class="p8">Thuong hieu</th>
            <th scope="col">Gia</th>
            <th scope="col" class="p0">So luong</th>
            <th scope="col">Size</th>
          </tr>
        </thead>
        <tbody>
          @foreach($product as $row)
          <tr onclick="openn({{$row->id}}, 'name{{$row->id}}')">
          <!-- -->
            <td><img src="{{asset('img/product/'.$row->image)}}"></td>
            <td id="name{{$row->id}}" class="p0">{{$row->name}}</td>
            <td>{{$row->category}}</td>
            <td class="p16 text-cap">{{$row->color}}</td>
            <td>{{$row->sex}}</td>
            <td>{{$row->brand}}</td>
            <td class="nowrap">{{number_format($row->price)}}</td> <!-- ." VNĐ" -->
            <td class="p16">{{$row->quantity}}</td>
            <td>{{$row->size}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>


<div id="act" class="main_content">
  <div class="white_box">
    <p id="txt">Sản phẩm: Áo sơ mi cổ điển</p>
    <div>
      <button type="button" class="btn btn-outline-success col-6" onclick="update()">Cập nhật</button>
      <button type="button" class="btn btn-outline-success col-6" onclick="deletee()">Xóa</button>
    </div>
    <button class="cancel btn btn-danger full_width" onclick="closee()">Đóng</button>
  </div>
</div>
@endsection

@section('script')
<script>
  <?php if(session('msg'))
    echo '$(document).ready(function(){ alert("'.session('msg').'");});'; ?>
  var id;
  function openn(id0, name) {
    id = id0;
    document.getElementById("txt").innerHTML = "Sản phẩm:  \n" + document.getElementById(name).innerHTML;
    document.getElementById("act").style.display = "block";
    }

  function closee() {
    document.getElementById("act").style.display = "none";
    }

  function update() {
    location.assign("../updateproduct/"+id);
    }
  function deletee() {
    if (confirm('Bạn có chắc muốn xóa?'))
      location.assign("../deleteproduct/"+id);
    }
</script>
@endsection