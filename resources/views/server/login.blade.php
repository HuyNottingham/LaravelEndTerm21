<!DOCTYPE html>
<html lang="zxx">
<head>
  @include("layout.server_head")
  <!-- <link rel="icon" href="img/favicon.png" type="image/png"> -->
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
    #login{
        display:flex;
        /* width:40%;
        width:calc(100vw); */
        flex-direction:column;
        min-height:calc(90vh);
        justify-content:center;
        align-items:center}
    #logo{
        z-index:1}
    #logo *{
        color:aliceblue}
    #login .modal-content{
        width:30%;
        height:fit-content}

    /* .forget-form, .login-form{
        transition: all 0.5s ease-in-out;
    } */
    #login .forget-form {
        display: none;
        transform: rotateY(180deg);
    }
    #login.flipped .login-form {
        display: none;
        transform: rotateY(-180deg);}
    #login.flipped .forget-form {
        display: unset;
        transform: rotateY(0deg);}


  </style>
</head>
<body class="crm_body_bg">
  <div class="half">
    <div class="half-top"></div>
  </div>

  <!-- sign_in  -->
  <div id="login">
    <div class="logo mb_30">
      <h1>Huy clothing</h1>
    </div>
    <div class="modal-content cs_modal">
      <div class="modal-header">
        <h5 class="modal-title login-form">Dang Nhap</h5>
        <h5 class="modal-title forget-form">Quen mat khau</h5>
      </div>
      <div class="modal-body">
        <form class="login-form">
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Nhap email">
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Nhap mat khau">
          </div>
          <a href="#" class="btn_1 full_width text-center">Dang nhap</a>
          <div class="text-center">
            <a href="#" onclick="flip()" class="pass_forget_btn">Quen mat khau?</a>
          </div>
        </form>
        <form class="forget-form">
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Nhap email">
          </div>
          <a href="#" class="btn_1 full_width text-center">Gui</a>
          <div class="text-center">
            <a href="#" onclick="flip()" class="pass_forget_btn">Quay lai dang nhap</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    function flip(){
      document.getElementById('login').classList.toggle("flipped");
      }
  </script>
</body>
</html>