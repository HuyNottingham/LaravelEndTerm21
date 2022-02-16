@extends('layout.client')

@section('head')
  <title>Liên hệ</title>
  <meta name="keywords" content="Contact Us,Gecko 5 - The best Shopify theme 2021,gecko5.myshopify.com" />
  <meta name="author" content="The4">
  <meta property="og:site_name" content="Gecko 5 - The best Shopify theme 2021">
  <meta property="og:url" content="contact-us.html">
  <meta property="og:title" content="Contact Us">
  <meta property="og:type" content="website">
  <meta property="og:description"
    content="CONTACT INFORMATION We love to hear from you on our customer service, merchandise, website or any topics you want to share with us. Your comments and suggestions will be appreciated. Please complete the form below. 184 Main Rd E, St Albans Victoria 3021, Australia 1800-123-222 / 1900-1570-230 contact@company.com Everyd">
  <meta name="twitter:site" content="@shopify">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Contact Us">
  <meta name="twitter:description"
    content="CONTACT INFORMATION We love to hear from you on our customer service, merchandise, website or any topics you want to share with us. Your comments and suggestions will be appreciated. Please complete the form below. 184 Main Rd E, St Albans Victoria 3021, Australia 1800-123-222 / 1900-1570-230 contact@company.com Everyd">
@endsection


@section('content')
  <div id="shopify-section-contact_heading" class="shopify-section page_section_heading">
    <div class="page-head tc pr oh page_bg_img page_head_contact_heading">
      <div class="parallax-inner nt_parallax_false lazyload nt_bg_lz pa t__0 l__0 r__0 b__0"
        data-bgset="//cdn.shopify.com/s/files/1/0437/1913/1293/files/about-bg_1x1.jpg?v=1600933977"
        data-ratio="2.60707635009311" data-sizes="auto" data-parent-fit="cover"></div>
      <div class="container pr z_100">
        <h1 class="mb__5 cw">Liên hệ</h1>
      </div>
    </div>
  </div>
  <div class="container mt__40 mb__100">
    <div class="row fl_center">
      <div class="contact-form col-12 col-md-6 mb__20">
        <form method="post" action="https://gecko5.myshopify.com/contact#contact_form_page"
          id="contact_form_page" accept-charset="UTF-8" class="contact-form">
          <!-- <input type="hidden" name="form_type" value="contact" /> -->
          <!-- <input type="hidden" name="utf8" value="✓" /> -->

          <h3 class="mb__20">GỬI MỘT LÁ THƯ</h3>
          <p>
            <label for="contact_form_page-name">*Họ Tên</label>
            <input  name="name"type="text" id="contact_form_page-name" required value="">
          </p>
          <p>
            <label for="contact_form_page-email">*Email</label>
            <input name="email" type="email" id="contact_form_page-email"
              autocorrect="off" autocapitalize="off" aria-required="true" required value="">
          </p>
          <p>
            <label for="contact_form_page-phone">Số điện thoại</label>
            <input name="phone" type="tel" id="contact_form_page-phone" pattern="[0-9\-]*" value="">
          </p>
          <p>
            <label for="contact_form_page-message">Nội dung thư</label>
            <textarea name="message" rows="20" id="contact_form_page-message" required></textarea>
          </p>
          <input type="submit" class="button w__100" value="Gửi">
        </form>
      </div>
      <div class="contact-content col-12 col-md-6">
        <h3 class="mb__20">THÔNG TIN LIÊN HỆ</h3>
        <p>Chúng tôi muốn nghe ý kiến của bạn về dịch vụ khách hàng, sản phẩm,
          trang web của chúng tôi hoặc bất kỳ chủ đề nào bạn muốn chia sẻ với chúng tôi.
          Ý kiến và đề xuất của bạn sẽ được đánh giá cao.</p>
        <p><i class="las la-home fs__16"></i> 25T2 Nguyễn Thị Thập, Cầu Giấy, Hà Nội</p>
        <p><i class="las la-phone fs__16"></i> 1900-1530</p>
        <p><i class="las la-envelope fs__16"></i> huyltrn21@gmail.com</p>
        <p><i class="las la-clock fs__16"></i> 8:00-20:00 mỗi ngày</p>
      </div>
    </div>
  </div>
@endsection



@section('side')
  @include("client.cart-side")
  <div id="nt_login_canvas" class="nt_fk_canvas dn lazyload" data-include="{{route('view-login')}}">
    <div class="lds_bginfinity pr"></div>
  </div>
@endsection