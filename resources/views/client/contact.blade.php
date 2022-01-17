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
  <div class="container mt__100 mb__100">
    <div class="row fl_center">
      <div class="contact-form col-12 col-md-6 mb__20">
        <form method="post" action="https://gecko5.myshopify.com/contact#contact_form_page"
          id="contact_form_page" accept-charset="UTF-8" class="contact-form">
          <input type="hidden" name="form_type" value="contact" />
          <input type="hidden" name="utf8" value="✓" />

          <h3 class="mb__20">DROP US A LINE</h3>
          <p>
            <label for="contact_form_page-name">Your Name (required)</label>
            <input required="required" type="text" id="contact_form_page-name" name="contact[name]" value="">
          </p>
          <p>
            <label for="contact_form_page-email">Your Email (required)</label>
            <input required="required" type="email" id="contact_form_page-email" name="contact[email]"
              autocorrect="off" autocapitalize="off" value="" aria-required="true" required="required">
          </p>
          <p>
            <label for="contact_form_page-phone">Your Phone Number</label>
            <input type="tel" id="contact_form_page-phone" name="contact[phone]" pattern="[0-9\-]*" value="">
          </p>
          <p>
            <label for="contact_form_page-message">Your Message</label>
            <textarea rows="20" id="contact_form_page-message" name="contact[body]" required="required"></textarea>
          </p>
          <input type="submit" class="button w__100" value="Send">
        </form>
      </div>
      <div class="contact-content col-12 col-md-6">
        <h3 class="mb__20">CONTACT INFORMATION</h3>
        <p>We love to hear from you on our customer service, merchandise, website or any topics you want to share
          with us. Your comments and suggestions will be appreciated. Please complete the form below.</p>
        <p><i class="las la-home fs__16"></i> 184 Main Rd E, St Albans Victoria 3021, Australia</p>
        <p><i class="las la-phone fs__16"></i> 1800-123-222 / 1900-1570-230</p>
        <p><i class="las la-envelope fs__16"></i> contact@company.com</p>
        <p><i class="las la-clock fs__16"></i> Everyday 9:00-17:00</p>
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