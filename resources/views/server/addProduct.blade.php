@extends('layout.server')

@section('head')
<title>
  <?php
    $yes=false;
    $title = "Thêm sản phẩm";
    $title2 = "Them san pham";
    $btn = "Them moi";
    $name0 = "";
    $category0 = 0;
    $image0 = "";
    $sex0 = 0;
    $size0 = 0;
    $price0 = "";
    $color0 = "";
    $brand0 = 0;
    $quantity0 = "";
    $description0 = "";
    if (isset($product)) {
      $yes=true;
      $title = "Cập nhật sản phẩm";
      $title2 = "Cap nhat san pham";
      $btn = "Cap nhat";
      $name0 = $product->name;
      $category0 = $product->category;
      $image0 = $product->image;
      $sex0 = $product->sex;
      $size0 = $product->size;
      $price0 = $product->price;
      $color0 = $product->color;
      $brand0 = $product->brand;
      $quantity0 = $product->quantity;
      $description0 = $product->description;
    } echo $title; ?>
</title>
<style>
  .nice-select {
    border:1px solid #F1F3F5;
    margin-bottom:21px}
  .custom-file-label{
    overflow:hidden;
    white-space:pre;
    border-color:#F1F3F5;
    height:45px;
    line-height:25px;
    padding:10px 20px}
  .custom-file-label::after{
    height:45px;
    line-height:25px;
    /* content:""; */
    padding:10px 20px}
  /* [type="file"]{
    margin-bottom:0} */
  [type="radio"]{
    margin-right:5px;
    height:14px;
    width:14px}
  [type="radio"]:not(:first-child){
    margin-left:20%}
  #sex{
    margin-top:0;
    font-weight:400;
    margin-bottom:21px}
  #cke_description{
    margin-bottom: 21px}
</style>
@endsection

@section('content')
<div class="col-lg-12">
  <div class="white_box mb_30">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="modal-content cs_modal">
          <div class="modal-header">
            <h5 class="modal-title">{{$title2}}</h5>
          </div>
          <div class="modal-body">
            <form action="" method="post" enctype="multipart/form-data" class="row">
              @csrf
              <div class="col-lg-8">
                <label for="name">Tên sản phẩm</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$name0}}" maxlength="50" placeholder="Nhập tên sản phẩm">
              </div>
              <div class="col-lg-5">

                <label for="category">Loại</label>
                <select name="category" id="category" class="form-control">
                  <option value="0" disabled selected>Chọn thể loại</option>
                  @foreach($category as $row)
                  <option value="{{$row->id}}"<?php
                    if($row->id==$category0) echo " selected"?>>
                    {{$row->category}}
                  </option>
                  @endforeach
                </select>

                <label for="image">Ảnh</label>
                <div class="input-group">
                  <input type="file" onchange="imgChanged(this.value)" name="image" id="image" class="custom-file-input" id="file">
                  <label class="custom-file-label" for="file">Choose file</label>
                </div>

                <label for="sex">Giới tính</label><br>
                <p id="sex">
                  @foreach($sex as $row)
                    <input type="radio" name="sex" value="{{$row->id}}"<?php
                      if($row->id==$sex0) echo " checked"?>>{{$row->sex}}
                  @endforeach
                </p>

                <label for="size">Size</label>
                <select name="size" id="size" class="form-control">
                  <option value="0" disabled selected>Chọn size</option>
                  @foreach($size as $row)
                    <option value="{{$row->id}}"<?php
                      if($row->id==$size0) echo " selected"?>>
                      {{$row->size}}
                    </option>
                  @endforeach
                </select>

                <label for="price">Giá</label>
                <input type="number" name="price" id="price" class="form-control" value="{{$price0}}" placeholder="Nhập giá" min="0">

                <label for="color">Màu</label>
                <input type="text" name="color" id="color" class="form-control" value="{{$color0}}" placeholder="Nhập màu (không bắt buộc)">

                <label for="brand">Thương hiệu</label>
                <select name="brand" id="brand" class="form-control">
                  <option value="0" disabled selected>Chọn thương hiệu (không bắt buộc)</option>
                  @foreach($brand as $row)
                    <option value="{{$row->id}}"<?php 
                      if($row->id==$brand0) echo " selected"?>>
                      {{$row->brand}}
                    </option>
                  @endforeach
                </select>

                <label for="quantity">Số lượng</label>
                <input type="number" name="quantity" id="quantity" class="form-control" value="{{$quantity0}}" placeholder="Nhập số lượng" min="0">
              </div>

              <div class="col-lg-7">
                <label for="description">Mô tả - (không bắt buộc)</label>
                <textarea name="description" id="description">{{$description0}}</textarea>
              </div>

              <div class="col-lg-12">
                <div class="row justify-content-center">
                  <div class="col-lg-4">
                    <input type="button" value="{{$btn}}" onclick="add()" class="btn btn-outline-primary">
                  </div>
                  <div class="col-lg-2">
                    <input type="button" value="Dat lai" onclick="resett()" class="btn btn-outline-secondary">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
  <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('description');

  <?php if(session('msg'))
    echo '$(document).ready(function(){ alert("'.session('msg').'");});'; ?>

  imgChanged('{{$image0}}');
  function imgChanged(image) {
    if (image=="")
      image = "Choose file";
    else
      image = image.slice(image.lastIndexOf("\\") + 1);
    document.querySelector('label[for="file"]').innerHTML = image;
    document.forms[1].image.title = image;
  }


  function add(){
    var name = document.forms[1].name.value;
    var category = document.forms[1].category.value;
    var sex = document.forms[1].sex.value;
    var size = document.forms[1].size.value;
    var price = document.forms[1].price.value;
    var quantity = document.forms[1].quantity.value;

    if (name==""){
      alert('Nhập tên sản phẩm !');
      document.forms[1].name.focus();
      return}
    if (category==0){
      alert('Chọn thể loại !');
      document.forms[1].category.focus();
      return}

    <?php if($image0 == ""){ ?>
    var image = document.forms[1].image.value;
    // Đang suy nghĩ đoạn check nếu ảnh rỗng trong TH add với update khác nhau,
    // rồi sửa cả controller if image value null
    if (image==""){
      alert('Vui lòng chọn ảnh !');
      document.forms[1].image.focus();
      return}
    <?php } ?>

    if (sex==""){
      alert('Chọn giới tính mà sản phẩm dành cho !');
      document.forms[1].sex[3].focus();
      return}
    if (size==0){
      alert('Chọn size !');
      document.forms[1].size.focus();
      return}
    if (price==""){
      alert('Nhập giá !');
      document.forms[1].price.focus();
      return}
    if (quantity==""){
      alert('Nhập số lượng !');
      document.forms[1].quantity.focus();
      return}
    document.forms[1].submit();
  }


  var motatemp = document.forms[1].description.value;
  function resett(){
    document.forms[1].name.value = "{{$name0}}";
    document.forms[1].category.value = "{{$category0}}";
    imgChanged('{{$image0}}');
    document.forms[1].sex.value = "{{$sex0}}";
    document.forms[1].size.options[{{$size0}}].selected=true;
    document.forms[1].price.value = "{{$price0}}";
    document.forms[1].color.value = "{{$color0}}";
    document.forms[1].brand.options[{{$brand0}}].selected=true;
    document.forms[1].quantity.value = "{{$quantity0}}";
    document.forms[1].description.value = motatemp;
    CKEDITOR.instances['description'].setData(motatemp);
    // document.forms[1].cbkimage.checked = true;
    document.forms[1].image.value = null;
    // document.forms[1].image.disabled = true;
  }

    // function oldimage(){
    // document.forms[1].image.disabled = document.forms[1].cbkimage.checked;
    // }
</script>
</script>
@endsection