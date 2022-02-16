<form method="post" action="/account/login" accept-charset="UTF-8" novalidate
  id="customer_login" class="nt_mini_cart flex column h__100 is_selected">
  <input type="hidden" name="form_type" value="customer_login">
  <input type="hidden" name="utf8" value="✓">
  <div class="mini_cart_header flex fl_between al_center">
    <div class="h3 widget-title tu fs__16 mg__0">Đăng nhập</div>
    <i class="close_pp pegk pe-7s-close ts__03 cd"></i>
  </div>
  <div class="mini_cart_wrap">
    <div class="mini_cart_content fixcl-scroll">
      <div class="fixcl-scroll-content">
        <p class="form-row">
          <label for="CustomerEmail">Email <span class="required">*</span></label>
          <input type="email" name="customer[email]" id="CustomerEmail"
            autocomplete="email" autocorrect="off" autocapitalize="off">
        </p>
        <p class="form-row">
          <label for="CustomerPassword">Mật khẩu <span class="required">*</span></label>
          <input type="password" value="" name="customer[password]" id="CustomerPassword">
        </p>
        <input type="submit" class="button button_primary w__100 tu js_add_ld" value="Đăng nhập">
        <br>
        <p class="mb__10 mt__20">Khách hàng mới?
          <a href="#" data-no-instant rel="nofollow" data-id='#RegisterForm' class="link_acc"
            >Tạo tài khoản mới</a></p>
        <p>Quên mật khẩu?
          <a data-no-instant rel="nofollow" href="#recover" data-id='#RecoverForm' class="link_acc"
            >Khôi phục mật khẩu</a></p>
      </div>
    </div>
  </div>
</form>

<form method="post" action="/account/recover" accept-charset="UTF-8"
  id="RecoverForm" class="nt_mini_cart flex column h__100">
  <input type="hidden" name="form_type" value="recover_customer_password">
  <input type="hidden" name="utf8" value="✓">
  <div class="mini_cart_header flex fl_between al_center">
    <div class="h3 widget-title tu fs__16 mg__0">Khôi phục mật khẩu</div>
    <i class="close_pp pegk pe-7s-close ts__03 cd"></i>
  </div>
  <div class="mini_cart_wrap">
    <div class="mini_cart_content fixcl-scroll">
      <div class="fixcl-scroll-content">
        <p class="form-row">
          <label for="RecoverEmail">Email </label>
          <input type="email" name="email" id="RecoverEmail" class="input-full"
            autocorrect="off" autocapitalize="off">
        </p>
        <input type="submit" class="button button_primary w__100 tu js_add_ld" value="Đặt lại mật khẩu">
        <br>
        <p class="mb__10 mt__20">Đã nhớ lại mật khẩu?
          <a href="#" data-no-instant rel="nofollow" data-id='#customer_login' class="link_acc"
            >Quay lại đăng nhập</a></p>
      </div>
    </div>
  </div>
</form>

<form method="post" action="/account" accept-charset="UTF-8" novalidate
  id="RegisterForm" class="nt_mini_cart flex column h__100">
  <input type="hidden" name="form_type" value="create_customer">
  <input type="hidden" name="utf8" value="✓">
  <div class="mini_cart_header flex fl_between al_center">
    <div class="h3 widget-title tu fs__16 mg__0">Đăng ký</div>
    <i class="close_pp pegk pe-7s-close ts__03 cd"></i>
  </div>
  <div class="mini_cart_wrap">
    <div class="mini_cart_content fixcl-scroll">
      <div class="fixcl-scroll-content">
        <p class="form-row">
          <label for="-FirstName">Họ</label>
          <input type="text" name="customer[first_name]" id="-FirstName" autocomplete="given-name">
        </p>
        <p class="form-row">
          <label for="-LastName">Tên</label>
          <input type="text" name="customer[last_name]" id="-LastName" autocomplete="family-name">
        </p>
        <p class="form-row">
          <label for="-email">Email <span class="required">*</span></label>
          <input type="email" name="customer[email]" id="-email" autocorrect="off"
            autocapitalize="off" autocomplete="email" aria-required="true">
        </p>
        <p class="form-row">
          <label for="-password">Mật khẩu <span class="required">*</span></label>
          <input type="password" name="customer[password]" id="-password" aria-required="true">
        </p>
        <input type="submit" value="Đăng ký" class="button button_primary w__100 tu js_add_ld">
        <br>
        <p class="mb__10 mt__20">Bạn đã có sẵn tài khoản?
          <a href="#" data-no-instant rel="nofollow" data-id='#customer_login' class="link_acc"
          >Đăng nhập ngay</a>
        </p>
      </div>
    </div>
  </div>
</form>