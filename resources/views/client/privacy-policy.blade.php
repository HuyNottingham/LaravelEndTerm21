@extends('layout.client')

@section('head')
  <title>Chính sách bảo mật</title>
  <meta name="keywords" content="Privacy Policy,Gecko 5 - The best Shopify theme 2021,gecko5.myshopify.com" />
  <meta name="author" content="The4">
  <meta property="og:site_name" content="Gecko 5 - The best Shopify theme 2021">
  <meta property="og:url" content="privacy-policy.html">
  <meta property="og:title" content="Privacy Policy">
  <meta property="og:type" content="website">
  <meta property="og:description"
    content="The Company Private Limited PolicyThe Company Private Limited and each of their respective subsidiary, parent and affiliated companies is deemed to operate this Website (“we” or “us”) recognizes that you care how information about you is used and shared. We have created this Privacy Policy to inform you what informatio">
  <meta name="twitter:site" content="@shopify">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Privacy Policy">
  <meta name="twitter:description"
    content="The Company Private Limited PolicyThe Company Private Limited and each of their respective subsidiary, parent and affiliated companies is deemed to operate this Website (“we” or “us”) recognizes that you care how information about you is used and shared. We have created this Privacy Policy to inform you what informatio">
@endsection


@section('content')
  <div id="shopify-section-pages_heading" class="shopify-section page_section_heading">
    <div class="page-head tc pr oh page_head_pages_heading">
      <div class="container pr z_100">
    <h1 class="mb__5 cw">Privacy Policy</h1>
      </div>
    </div>
  </div>
  <div class="container mt__60 mb__60">
    <h3>The Company Private Limited Policy</h3>
    <p style="text-align: justify;">The Company Private Limited and each of their respective subsidiary, parent and
      affiliated companies is deemed to operate this Website (“we” or “us”) recognizes that you care how information
      about you is used and shared. We have created this Privacy Policy to inform you what information we collect on
      the Website, how we use your information and the choices you have about the way your information is collected
      and used.  Please read this Privacy Policy carefully.  Your use of the Website indicates that you have read
      and accepted our privacy practices, as outlined in this Privacy Policy.</p>
    <p style="text-align: justify;">Please be advised that the practices described in this Privacy Policy apply to
      information gathered by us or our subsidiaries, affiliates or agents: (i) through this Website, (ii) where
      applicable, through our Customer Service Department in connection with this Website, (iii) through information
      provided to us in our free standing retail stores, and (iv) through information provided to us in conjunction
      with marketing promotions and sweepstakes.</p>
    <p style="text-align: justify;">We are not responsible for the content or privacy practices on any websites</p>
    <p style="text-align: justify;">We reserve the right, in our sole discretion, to modify, update, add to,
      discontinue, remove or otherwise change any portion of this Privacy Policy, in whole or in part, at any time.
      When we amend this Privacy Policy, we will revise the “last updated” date located at the top of this Privacy
      Policy.</p>
    <p style="text-align: justify;">If you provide information to us or access or use the Website in any way after
      this Privacy Policy has been changed, you will be deemed to have unconditionally consented and agreed to such
      changes.  The most current version of this Privacy Policy will be available on the Website and will supersede
      all previous versions of this Privacy Policy.</p>
    <p style="text-align: justify;">If you have any questions regarding this Privacy Policy, you should contact our
      Customer Service Department by email at <a href="mailto:marketing@company.com">marketing@company.com</a></p>
  </div>
@endsection



@section('side')
  @include("client.cart-side")
  <div id="nt_login_canvas" class="nt_fk_canvas dn lazyload" data-include="{{route('view-login')}}">
    <div class="lds_bginfinity pr"></div>
  </div>
@endsection