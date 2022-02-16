@extends('layout.client')

@section('head')
  <title>Tìm kiếm</title>
  <meta name="keywords" content="Shopify search,Gecko 5 - The best Shopify theme 2021,gecko5.myshopify.com" />
  <meta name="author" content="The4">
  <meta property="og:site_name" content="Gecko 5 - The best Shopify theme 2021">
  <meta property="og:url" content="search.html">
  <meta property="og:title" content="Search">
  <meta property="og:type" content="website">
  <meta property="og:description"
    content="Gecko Shopify Theme is one of the best Shopify themes in 2020 from The4. It is suitable for online fashion store, handmade store, organic store, furniture store. Gecko is in the top 10 best selling Shopify themes with rated 4.99/5.00 based on nearly 200 reviews. Don&#39;t waste time and money, choose gecko today.">
  <meta name="twitter:site" content="@shopify">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Search">
  <meta name="twitter:description"
    content="Gecko Shopify Theme is one of the best Shopify themes in 2020 from The4. It is suitable for online fashion store, handmade store, organic store, furniture store. Gecko is in the top 10 best selling Shopify themes with rated 4.99/5.00 based on nearly 200 reviews. Don&#39;t waste time and money, choose gecko today.">
@endsection


@section('content')
  <div id="shopify-section-cat_shop" class="shopify-section cat-shop pr tc">
    <a href="#" class="has_icon cat_nav_js dib" rel="nofollow" data-no-instant
      >Thể loại<i class="facl facl-angle-down"></i></a>
    <div class="dn" id="cat_shopify">
      <ul class="cat_lv_0"></ul>
    </div>
  </div>
  <div id="shopify-section-sea_heading" class="shopify-section page_section_heading">
    <div class="page-head tc pr oh page_head_sea_heading">
      <div class="container pr z_100">
        <h1 class="mb__5 cw">Tìm kiếm trang web của chúng tôi</h1>
      </div>
    </div>
  </div>
  <div id="shopify-section-search_page" class="shopify-section tp_se_cdt">
    <div class="container container_cat cat_default mb__80">
      <div class="mt__80"></div>
      <div class="col-12 col-md-8 offset-md-2 tc">

    <form action="{{route('search')}}" method="get" role="search"
      class="search-form search-page-form js_frm_search_none">
      <div class="input-group input-group--nowrap">
        <div class="input-group__field input-group__field--connected search-form__input-wrapper row no-gutters tl">
          <input type="hidden" name="type" value="product">
          <input type="hidden" name="options[unavailable_products]" value="last">
          <input type="hidden" name="options[prefix]" value="none">
          <input type="text" name="q" value placeholder="Tìm kiếm sản phẩm"
            class="search-form__input js_iput_search col" />
          <button type="reset" class="search-form__clear-action">
            <i class="las la-times"></i></button>
        </div>
        <button type="submit" class="search-form__connected-submit js_btn_search">
          <i class="las la-search"></i></button>
      </div>
    </form>
    <div class="predictive-search-wrapper js_prs_search_none tl widget mt__15">
      <div class="row no-gutters product_list_widget">
        <div class="col-12 tu search_sg_hd fwsb cd">BẠN CẦN MỘT VÀI GỢI Ý ?</div>

        @for($i=1; $i<=3; $i++)
        <div class="col-12 col-md-6 col_last_false">
          <div class="row mb__10 pb__10">
            <div class="col widget_img_pr">
              <a href="{{route('details',['id'=>1])}}" class="db pr oh">
                <img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20750%201101%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"
                  data-src="//cdn.shopify.com/s/files/1/0437/1913/1293/products/p-46_1a4bbde3-f6bf-47e7-a830-ff8b7616c644_{width}x.jpg?v=1595905285"
                  data-widths="[80, 160, 320, 640]" data-sizes="auto" class="w__100 lazyload lz_op_ef"
                  alt="Blue Cotton Leggings"></a></div>
            <div class="col widget_if_pr">
              <a href="{{route('details',['id'=>1])}}" class="product-title db"
                >Blue Cotton Leggings</a><span class=money>$30.00</span>
            </div>
          </div>
        </div>
        <!--Trên: giá nguyên
            Dưới: giảm giá -->
        <div class="col-12 col-md-6 col_last_false">
          <div class="row mb__10 pb__10">
            <div class="col widget_img_pr">
              <a href="{{route('details',['id'=>1])}}" class="db pr oh">
                <img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20750%201101%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"
                  data-src="//cdn.shopify.com/s/files/1/0437/1913/1293/products/m-12_8f3d8497-a3c0-4f95-b5f6-88c85ee39b8e_{width}x.jpg?v=1595905303"
                  data-widths="[80, 160, 320, 640]" data-sizes="auto" class="w__100 lazyload lz_op_ef"
                  alt="Cyan Cuffed Chino Shorts"></a></div>
            <div class="col widget_if_pr">
              <a href="{{route('details',['id'=>1])}}" class="product-title db"
                >Cyan Cuffed Chino Shorts</a>
              <del><span class=money>$25.00</span></del>
              <ins><span class=money>$20.00</span></ins>
              <span class="onsale nt_label">-20%</span>
            </div>
          </div>
        </div>
        @endfor

        <div class="col-12 tc tu">
          <a href="{{route('shop')}}" class="btn fwsb detail_link db"
            >Xem tất cả <i class="las la-arrow-right fs__18"></i></a></div>
      </div>
    </div>

      </div>
    </div>
  </div>
  <script>document.querySelector('body').classList.add("template-search");</script>
@endsection



@section('side')
  @include("client.cart-side")
  <div id="nt_login_canvas" class="nt_fk_canvas dn lazyload" data-include="{{route('view-login')}}">
    <div class="lds_bginfinity pr"></div>
  </div>
@endsection