@extends('layout.server')

@section('head')
<title>Thêm loại sản phẩm</title>
<style>
  .modal-header{
    border-radius:10px 10px 0 0}
  .modal-body{
    border-radius:0 0 10px 10px !important}
  .white_box.QA_section{
    padding: 23px 30px;
  }

  .cate{
    border-radius:10px !important;
    padding:0!important;
    text-align:center;}
  .cate th:first-child{
    border-radius:20px 0 0 20px !important}
  .cate th:last-child{
    border-radius:0 20px 20px 0 !important}

  tr.selected{
    background:#b3e2e84a !important;
  }
</style>
@endsection

@section('content')
<div class="col-lg-5">
    <div class="cs_modal">
      <div class="modal-header">
        <h5 class="modal-title">Them loai san pham</h5>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          @csrf
          <label for="category">Thể loại</label>
          <input type="text" name="id" hidden>
          <input type="text" name="category" id="category" class="form-control" placeholder="Nhập thể loại">
          <div class="row justify-content-center" id="btn">
            <div class="col-lg-6">
              <input type="button" value="Them moi" onclick="submitt('post')" class="btn btn-outline-primary">
            </div>
            <div class="col-lg-4">
              <input type="button" value="Huy" onclick="resett()" class="btn btn-outline-secondary">
            </div>
          </div>
        </form>
      </div>
    </div>
</div>

<div class="col-xl-7 mb_30">
  <div class="white_box QA_section">
    <div class="white_box_tittle">
      <div class="main-title">
        <h3>Bang loai san pham</h3>
      </div>
    </div>

    
    <div class="QA_table">
      <table class="table lms_table_active cate">
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Thể loại</th>
            <th scope="col">Số sản phẩm</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $stt=0;
            foreach ($cate as $row) {
              $stt++; ?>
              <tr onclick="choose('{{$row->category}}', {{$row->id}}, {{$stt}})">
                <td>{{$stt}}</td>
                <td>{{$row->category}}</td>
                <td>{{$row->quantity}}</td>
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
  <?php if(session('msg'))
    echo '$(document).ready(function(){ alert("'.session('msg').'");});'; ?>


  var id=0;
  var stt=0;
  var cate='';
  function submitt(action) {
    let category = document.forms[1].category;
    if (category.value==""){
      alert('Nhập thể loại !');
      category.focus();
      return}
    document.forms[1].setAttribute('action', action +"category");
    document.forms[1].submit();
  }

  function resett(){
    document.forms[1].category.value=cate;
    document.forms[1].id.value=id;
    }

  function choose(cate0, id0, stt0) {
    // let line = document.querySelector("tr:nth-child("+stt0+")");
    // cate = line.querySelector('td:nth-child(2)').innerHTML;
    // quantity = line.querySelector('td:last-child').innerHTML;
    cate = cate0;
    id = id0;

    // let line0 = document.querySelector("tr:nth-child("+stt0+")");
    if (stt!=stt0) {
      document.querySelector("tbody tr:nth-child("+stt0+")").classList.add('selected');
      if (stt!=0)
        document.querySelector("tbody tr:nth-child("+stt+")").classList.remove('selected');
      stt = stt0;
    }
    document.getElementById('btn').innerHTML='<div class="col-lg-12"><input type="button" value="Cap nhat" onclick="submitt('+ "'update'" +')" class="btn btn-outline-primary mb_10"></div><div class="col-lg-12"><input type="button" value="Them moi" onclick="submitt('+ "''" +')" class="btn btn-outline-success mb_10"></div><div class="col-lg-6"><input type="button" value="Xoa" onclick="if (confirm(' + "'Bạn có thực sự muốn xóa ?'"+')) submitt('+ "'delete'" +')" class="btn btn-outline-danger"></div><div class="col-lg-4"><input type="button" value="Huy" onclick="resett()" class="btn btn-outline-secondary"></div>';
    document.querySelector('h5.modal-title').innerHTML='Cap nhat the loai';
    resett();
  }
</script>
@endsection