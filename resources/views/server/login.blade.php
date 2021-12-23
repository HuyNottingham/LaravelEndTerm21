<!DOCTYPE html>
<html lang="zxx">
<head>
  @include("layout.server_head")
  <link rel="icon" href="{{asset('img')}}//default/icon.png">
  <title>Đăng nhập</title>
  <style>
    .half{
      height:calc(100vh);
      width:calc(100vw);
      background-color:#fff;
      position:fixed;
      top:0;
      left:0}
    .half-top{
      height:calc(45vh);
      background-color:#2DAAB8}
    form [type="button"]{
      margin-bottom:0 !important}
    #login{
      display:flex;
      flex-direction:column;
      min-height:calc(90vh);
      justify-content:center;
      align-items:center}
    .logo{
      z-index:1}
    .logo *{
      color:aliceblue}
    #login .modal-content{
      width:30%;
      min-width:350px;
      height:fit-content}

    /* .forget-form, .login-form{
      backface-visibility:hidden;
      transition:all 0.5s ease-in-out} */
    #login .forget-form {
      display:none}
      /* opacity:0;
      transform:rotateY(180deg); */
    #login.flipped .login-form {
      display:none}
      /* opacity:0;
      transform:rotateY(-180deg); */
    #login.flipped .forget-form {
      display:unset}
      /* opacity:1;
      transform:rotateY(0deg); */

    form img{
      height:100px;
      width:100px;
      object-fit:contain}

  </style>
</head>
<body class="crm_body_bg">
  <div class="half">
    <div class="half-top"></div>
  </div>

  <div id="login">
    <div class="logo mb_20">
      <h1>CPStore</h1>
    </div>
    <div class="modal-content cs_modal">
      <div class="modal-header">
        <h5 class="modal-title login-form">Dang Nhap</h5>
        <h5 class="modal-title forget-form">Quen mat khau</h5>
      </div>
      <div class="modal-body">
        <form class="login-form" method="post">
          @csrf
          <div class="form-group">
            @if(isset($_COOKIE['admin_name']))
              <div class="text-center">
                <img src="{{asset('img/staff/'.$_COOKIE['admin_avatar'])}}" onclick="togglePassword()" alt="Avatar">
                <p class="mt-1 mb-4">{{$_COOKIE['admin_name']}}</p>
              </div>
              <input type="email" name="email" value="{{$_COOKIE['admin_email']}}" hidden>
            @else
              <input type="email" name="email" class="form-control" placeholder="Nhap email" required>
            @endif
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Nhap mat khau">
            <span>
              <i class="material-iconsremove_red_eye closed" onclick="togglePassword(this)"></i>
            </span>
          </div>
          <button class="btn_1 full_width">Dang nhap</button>
          <div class="text-center">
            <p onclick="notme()" class="pass_forget_btn">Khong phai ban?</p>
            <!-- <p onclick="flip()" class="pass_forget_btn">Quen mat khau?</p> -->
          </div>
        </form>

        <form class="forget-form" method="post" action="adminforget">
          @csrf
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Nhap email" required>
          </div>
          <button class="btn_1 full_width">Gui</button>
          <div class="text-center">
            <p onclick="flip()" id="eye" class="pass_forget_btn">Quay lai dang nhap</p>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    <?php if(session('msg'))
      echo 'Window.onload = alert("'.session('msg').'");'; ?>

    function flip(){
      document.getElementById('login').classList.toggle("flipped");
      }

    function notme(){
      document.querySelector('.login-form > div:last-of-type').innerHTML='<p onclick="flip()" class="pass_forget_btn">Quen mat khau?</p>';
      document.querySelector('.login-form > div:first-of-type').innerHTML='<input type="email" name="email" class="form-control" placeholder="Nhap email" required>';
      }

    function togglePassword(eye) {
      eye.classList.toggle('closed');
      let x = document.all.password;
      if (x.type === "password")
        x.type = "text";
      else
        x.type = "password";
      }
  </script>
</body>
</html>