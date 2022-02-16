@extends('layout.client')

@section('head')
  <title>Login</title>
  <meta name="keywords" content="Account,Gecko 5 - The best Shopify theme 2021,gecko5.myshopify.com" />
  <meta name="author" content="The4">
  <meta property="og:site_name" content="Gecko 5 - The best Shopify theme 2021">
  <meta property="og:url" content="login.html">
  <meta property="og:title" content="Account">
  <meta property="og:type" content="website">
  <meta property="og:description" content="Gecko Shopify Theme is one of the best Shopify themes in 2020 from The4. It is suitable for online fashion store, handmade store, organic store, furniture store. Gecko is in the top 10 best selling Shopify themes with rated 4.99/5.00 based on nearly 200 reviews. Don't waste time and money, choose gecko today.">
  <meta name="twitter:site" content="@shopify">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Account">
  <meta name="twitter:description" content="Gecko Shopify Theme is one of the best Shopify themes in 2020 from The4. It is suitable for online fashion store, handmade store, organic store, furniture store. Gecko is in the top 10 best selling Shopify themes with rated 4.99/5.00 based on nearly 200 reviews. Don't waste time and money, choose gecko today.">
@endsection


@section('content')
  <div id="shopify-section-acc_heading" class="shopify-section page_section_heading">
    <div class="page-head tc pr oh page_head_acc_heading">
      <div class="container pr z_100">
        <h1 class="tu mb__10 cw">Tài khoản của tôi</h1>
      </div>
    </div>
  </div>

  <div class="container mt__60">
    <div class="row">
      <div class="col-12 mb__60 hide" id="ResetSuccess">
        <div class="shopify-message"><i class="facl facl-ok"></i>Chúng tôi đã gửi cho bạn một email có liên kết để cập nhật mật khẩu của bạn.</div>
        <p class="text_content_success mt__10 mg__0">Email đặt lại mật khẩu đã được gửi đến địa chỉ email trong hồ sơ cho tài khoản của bạn, nhưng có thể mất vài phút để hiển thị trong hộp thư đến của bạn. Vui lòng đợi ít nhất 5 phút trước khi thử đặt lại lần nữa.</p>
      </div>
      <div class="col-12 col-md-6 divLoginForm login-form mb__60">

        <div id="CustomerLoginForm">
          <h2>Đăng nhập</h2>
          <form method="post" id="customer_login" accept-charset="UTF-8">
            @csrf
            <input type="hidden" name="form_type" value="login" />
            <!-- <input type="hidden" name="utf8" value="✓" /> -->
            <p class="form-row">
              <label for="CustomerEmail">Email <span class="required">*</span></label>
              <input type="email" name="email" id="CustomerEmail"
                autocomplete="email" autocorrect="off" autocapitalize="off" required>
            </p>
            <p class="form-row">
              <label for="CustomerPassword">Mật khẩu <span class="required">*</span></label>
              <input type="password" name="password" id="CustomerPassword" required>
            </p>
            <p><a href="#recover" data-no-instant rel="nofollow" id="RecoverPassword">Quên mật khẩu?</a></p>
            <input type="submit" class="btn js_add_ld" value="Đăng nhập">
          </form>
        </div>

        <div id="RecoverPasswordForm" class="hide">
          <h2>Đặt lại mật khẩu của bạn</h2>
          <p>Quên mật khẩu? Hãy điền địa chỉ email của bạn. Bạn sẽ nhận được một liên kết để tạo mật khẩu mới qua email.</p>
          <form method="post" accept-charset="UTF-8">
            @csrf
            <input type="hidden" name="form_type" value="recover" />
            <!-- <input type="hidden" name="utf8"  value="✓" /> -->
            <p class="form-row">
              <label for="RecoverEmail">Địa chỉ email</label>
              <input type="email" name="email" id="RecoverEmail" class="input-full"
                autocorrect="off" autocapitalize="off" required>
            </p>
            <input type="submit" class="btn js_add_ld" value="Đặt lại mật khẩu">
            <br><a href="#LoginHeading" data-no-instant rel="nofollow" class="button mt__15"
              id="HideRecoverPasswordLink">Hủy</a>
          </form>
        </div>
      </div>

      <div class="col-12 col-md-6 divCreateForm login-form mb__60">
        <div id="CustomerRegisterForm">
          <h2>Đăng ký</h2>
          <form method="post" id="RegisterForm" accept-charset="UTF-8">
             <!-- action="{ {route('regis')}}" -->
            @csrf
            <input type="hidden" name="form_type" value="regis" />
            <!-- <input type="hidden" name="utf8" value="✓" /> -->
            <p class="form-row">
              <label for="RegisterForm-FirstName">Họ</label>
              <input type="text" name="first_name"
                id="RegisterForm-FirstName" autocomplete="given-name">
            </p>
            <p class="form-row">
              <label for="RegisterForm-LastName">Tên</label>
              <input type="text" name="last_name"
                id="RegisterForm-LastName" autocomplete="family-name">
            </p>
            <p class="form-row">
              <label for="RegisterForm-email">Email <span class="required">*</span></label>
              <input type="email" name="email"
                id="RegisterForm-email" autocorrect="off" required
                autocapitalize="off" autocomplete="email" aria-required="true">
            </p>
            <p class="form-row">
              <label for="RegisterForm-password">Mật khẩu <span class="required">*</span></label>
              <input type="password" name="password" required
                id="RegisterForm-password" aria-required="true">
            </p>
            <input type="submit" value="Đăng ký" class="btn js_add_ld">
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection



@section('side')
  @include("client.cart-side")
@endsection