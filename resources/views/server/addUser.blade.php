@extends('layout.server')

@section('head')
<title>
  <?php
    $update = false;
    $title = "Thêm hội viên";
    $title2 = "Them hoi vien";
    $btn = "Them moi";
    $name = "";
    $email = "";
    if (isset($user)) {
      $update = true;
      $title = "Cập nhật hội viên";
      $title2 = "Cap nhat hoi vien";
      $btn = "Cap nhat";
      $name = $user->name;
      $email = $user->email;
    } echo $title; ?>
</title>
@endsection

@section('content')
<div class="col-lg-12">
  <div class="white_box mb_30">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="modal-content cs_modal">
          <div class="modal-header">
            <h5 class="modal-title">{{$title2}}</h5>
          </div>
          <div class="modal-body">
            <form action="" method="post" enctype="multipart/form-data">
              @csrf
              <label for="name">Họ tên</label>
              <input type="text" name="name" id="name" class="form-control" value="{{$name}}" maxlength="50" placeholder="Nhập tên">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control" value="{{$email}}" maxlength="50" placeholder="*Email sử dụng để liên lạc, và có tác dụng như tên đăng nhập">
              <label for="password">Mật khẩu</label>
              <input type="password" name="password" id="password" class="form-control" maxlength="40" placeholder="Nhập mật khẩu (không bắt buộc)" title="Nhưng hãy đặt mật khẩu chứa ký tự đặc biệt, chữ hoa, chữ thường và số để đảm bảo an toàn">
              <label for="repassword">Nhập lại mật khẩu</label>
              <input type="password" name="repassword" id="repassword" class="form-control" maxlength="40" placeholder="Nhập lại mật khẩu">
              <div class="row justify-content-center">
                <div class="col-lg-6">
                  <input type="button" value="{{$btn}}" onclick="add()" class="btn btn-outline-primary">
                </div>
                <div class="col-lg-4">
                  <input type="button" value="Dat lai" onclick="reset()" class="btn btn-outline-secondary">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script>
  // < ?php if(session('msg'))
  //   echo '$(document).ready(function(){ alert("'.session('msg').'");});'; ?>

  function add(){
    var name = document.forms[1].name.value;
    var email = document.forms[1].email.value;
    var pass = document.forms[1].password.value;
    var pass2 = document.forms[1].repassword.value;
    if (name==""){
      alert('Yêu cầu bạn nhập tên !');
      document.forms[1].name.focus();
      return}
    if (email==""){
      alert('Yêu cầu bạn nhập email !');
      document.forms[1].email.focus();
      return}
    // if (pass==""){
    //   alert('Yêu cầu bạn nhập mật khẩu !');
    //   document.forms[1].password.focus();
    //   return}
    // if (pass2==""){
    //   alert('Yêu cầu bạn nhập lại mật khẩu !');
    //   document.forms[1].repassword.focus();
    //   return}
    if (pass2!=pass){
      alert('Mật khẩu không bắt buộc nhưng nhập lại phải khớp!');
      document.forms[1].repassword.focus();
      return}
    document.forms[1].submit();
    }


  function reset() {
    document.forms[1].name.value = "{{$name}}";
    document.forms[1].email.value = "{{$email}}";
    document.forms[1].password.value = "";
    document.forms[1].password2.value = "";
    }
</script>
@endsection