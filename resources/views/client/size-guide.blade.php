@extends('layout.client')

@section('head')
  <title>Size guide</title>
  <meta property="og:url" content="size-guide.html">
  <meta property="og:title" content="Size Guide">
  <meta property="og:type" content="website">
  <meta property="og:description"
    content="Size guide Size US Bust Waist Low Hip XS 2 32 24 - 25 33 - 34 S 4 34 - 35 26 - 27 35 - 26 M 6 36 - 37 28 - 29 38 - 40 L 8 38 - 29 30 - 31 42 - 44 XL 10 40 - 41 32 - 33 45 - 47 XXL 12 42 - 43 34 - 35 48 - 50 Measuring Tips Bust Measure around the fullest part of your bust. Waist Measure around the narrowest part of your">
  <meta name="twitter:site" content="@shopify">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Size Guide">
  <meta name="twitter:description"
    content="Size guide Size US Bust Waist Low Hip XS 2 32 24 - 25 33 - 34 S 4 34 - 35 26 - 27 35 - 26 M 6 36 - 37 28 - 29 38 - 40 L 8 38 - 29 30 - 31 42 - 44 XL 10 40 - 41 32 - 33 45 - 47 XXL 12 42 - 43 34 - 35 48 - 50 Measuring Tips Bust Measure around the fullest part of your bust. Waist Measure around the narrowest part of your">
@endsection


@section('content')
  <div id="shopify-section-pages_heading" class="shopify-section page_section_heading">
    <div class="page-head tc pr oh page_head_pages_heading">
      <div class="container pr z_100">
        <h1 class="mb__5 cw">Hướng dẫn chọn size</h1>
      </div>
    </div>
  </div>
  <div class="container mt__60 mb__60">
    @include("client.size-guide-aj")
  </div>
@endsection



@section('side')
  @include("client.cart-side")
  <div id="nt_login_canvas" class="nt_fk_canvas dn lazyload" data-include="{{route('view-login')}}">
    <div class="lds_bginfinity pr"></div>
  </div>
@endsection