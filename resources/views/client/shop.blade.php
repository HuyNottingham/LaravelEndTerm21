@extends('layout.client')

@section('head')
  <title>Clothing &ndash; CPStore</title>
  <meta name="description" content="Free Shipping for standard order over $100">
  <!-- social-meta-tags.liquid -->
  <meta name="keywords" content="Clothing,Gecko 5 - The best Shopify theme 2021,gecko5.myshopify.com" />
  <meta name="author" content="The4">
  <meta property="og:site_name" content="Gecko 5 - The best Shopify theme 2021">
  <meta property="og:url" content="clothing.html">
  <meta property="og:title" content="Clothing">
  <meta property="og:type" content="product.group">
  <meta property="og:description" content="Free Shipping for standard order over $100">
  <meta property="og:image" content="{{asset('js')}}/cdn.shopify.com/s/files/1293/collections/shop-banner_1200x1200e4b4.jpg?v=1600211093">
  <meta property="og:image:secure_url" content="{{asset('js')}}/cdn.shopify.com/s/files/1293/collections/shop-banner_1200x1200e4b4.jpg?v=1600211093">
  <meta name="twitter:site" content="@shopify">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Clothing">
  <meta name="twitter:description" content="Free Shipping for standard order over $100">
  <style>
    .type_toolbar_filter {
      display:block !important}
  </style>
@endsection


@section('content')
  <!-- <div id="shopify-section-cat_shop" class="shopify-section cat-shop pr tc">
    <a rel="nofollow" data-no-instant href="clothing.html" class="has_icon cat_nav_js dib">
      Categories<i class="facl facl-angle-down"></i></a>
    <div class="dn" id="cat_shopify">
      <ul class="cat_lv_0"></ul>
    </div>
  </div> -->
  <div id="shopify-section-cat_heading" class="shopify-section page_section_heading">
    <div class="page-head tc pr oh cat_bg_img page_head_208790814877">
      <div class="parallax-inner nt_parallax_false lazyload nt_bg_lz pa t__0 l__0 r__0 b__0"
            data-bgset="//cdn.shopify.com/s/files/1/0437/1913/1293/collections/shop-banner_1x1.jpg?v=1600211093"
            data-ratio="4.0" data-sizes="auto" data-parent-fit="cover"></div>
      <div class="container pr z_100">
        <h1 class="mb__5 cw">Kho hàng</h1>
        <p class="mg__0">Giao hàng miễn phí cho đơn đặt hàng tiêu chuẩn trên $100</p>
      </div>
    </div>
  </div>


  <div class="container container_cat pop_default cat_default mb__60">
    <div class="cat_toolbar row fl_center al_center mt__30">
      <div class="cat_filter col op__0 pe_none">
        <a rel="nofollow" data-no-instant data-opennt="#shopify-section-nt_filter2"
          data-pos="left" data-remove="true" data-class="popup_filter"
          data-bg="hide_btn" class="has_icon btn_filter mgr">
          <i class="iccl fwb iccl-filter fwb mr__5"></i>Bộ lọc</a>
        <a rel="nofollow" data-no-instant data-id="#shopify-section-nt_filter2"
          class="btn_filter js_filter dn mgr">
          <i class="iccl fwb iccl-filter fwb mr__5"></i>Bộ lọc</a>
      </div>
      <div class="cat_view col-auto">
        <div class="dn dev_desktop dev_view_cat">
          <a rel="nofollow" data-no-instant data-mode='list' data-dev="dk" data-col="listt4"
            class="pr mr__10 cat_view_page view_list view_list_js"></a>
          <a rel="nofollow" data-no-instant data-dev="dk" data-col="6"
            class="pr mr__10 cat_view_page view_6"></a>
          <a rel="nofollow" data-no-instant data-dev="dk" data-col="4"
            class="pr mr__10 cat_view_page view_4"></a>
          <a rel="nofollow" data-no-instant data-dev="dk" data-col="3"
            class="pr mr__10 cat_view_page view_3"></a>
          <a rel="nofollow" data-no-instant data-dev="dk" data-col="15"
            class="pr mr__10 cat_view_page view_15"></a>
          <a rel="nofollow" data-no-instant data-dev="dk" data-col="2"
            class="pr cat_view_page view_2"></a>
        </div>

        <div class="dn dev_tablet dev_view_cat">
          <a rel="nofollow" data-link="{{route('details',['id'=>1])}}?"
            data-no-instant data-dev="tb" data-col="listt4"
            class="pr mr__10 cat_view_page view_list"></a>
          <a rel="nofollow" data-no-instant data-dev="tb" data-col="6"
            class="pr mr__10 cat_view_page view_6"></a>
          <a rel="nofollow" data-no-instant data-dev="tb" data-col="4"
            class="pr mr__10 cat_view_page view_4"></a>
          <a rel="nofollow" data-no-instant data-dev="tb" data-col="3"
            class="pr cat_view_page view_3"></a>
        </div>
        <div class="flex dev_mobile dev_view_cat">
          <a rel="nofollow" data-link="?" data-no-instant data-dev="mb"
            data-col="listt4" class="pr mr__10 cat_view_page view_list"></a>
          <a rel="nofollow" data-no-instant data-dev="mb" data-col="12"
            class="pr mr__10 cat_view_page view_12"></a>
          <a rel="nofollow" data-no-instant data-dev="mb" data-col="6"
            class="pr cat_view_page view_6"></a>
        </div>
      </div>
      <div class="cat_sortby cat_sortby_js col tr">
        <a class="in_flex fl_between al_center sortby_pick" rel="nofollow" data-no-instant>
          <span class="sr_txt dn">Nổi bật</span>
          <span class="sr_txt_mb">Sắp xếp</span>
          <i class="ml__5 mr__5 facl facl-angle-down"></i></a>
        <div class="nt_sortby dn">
          <svg class="ic_triangle_svg" viewBox="0 0 20 9" role="presentation">
            <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z"
              fill="#ffffff"></path></svg>
          <div class="h3 mg__0 tc cd tu ls__2 dn_lg db">
            Sắp xếp<i class="pegk pe-7s-close fs__50 ml__5"></i></div>
          <div class="nt_ajaxsortby wrap_sortby">
            <a class="truncate selected" href="?sort_by=manual">Nổi bật</a>
            <a class="truncate" href="?sort_by=best-selling">Bán chạy nhất</a>
            <a class="truncate" href="?sort_by=title-ascending">Theo tên, A-Z</a>
            <a class="truncate" href="?sort_by=title-descending">Theo tên, Z-A</a>
            <a class="truncate" href="?sort_by=price-ascending">Giá, thấp đến cao</a>
            <a class="truncate" href="?sort_by=price-descending">Giá, cao đến thấp</a>
            <a class="truncate" href="?sort_by=created-ascending">Ngày, cũ đến mới</a>
            <a class="truncate" href="?sort_by=created-descending">Ngày, mới tới cũ</a>
          </div>
        </div>
      </div>
    </div>

    <div class="filter_area_js filter_area  lazypreload" data-include="{{route('filter')}}"></div>
    <div class="row">
      <div class="col-lg-12 col-12">
        <div id="shopify-section-collection_page" class="shopify-section tp_se_cdt">
          <div class="nt_svg_loader dn"></div>
          <div data-change-url data-attrsntt4='{"paginate_ntt4":"","limit_ntt4":"","use_bar_lmntt4":""}'
            data-filterntt4='{"paginate_ntt4":"default","limit_ntt4":"12","use_bar_lmntt4":"true"}'
            class="on_list_view_false products nt_products_holder row fl_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 nt_default">

            <!-- @ foreach ($products as $row) { -->
            @for($i=0;$i<=0;$i++)
            <div data-page="1"
              class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item pr_list_item product nt_pr desgin__1">
              <div class="product-inner pr">
                <div class="product-image pr oh lazyload"
                  data-include="{{route('products-view=imgfalse')}}">
                  <div class="nt_bg_lz nt_fk_lz" style="padding-top:146.8%;"></div>
                </div>
                <div class="product-info">
                  <div class="product-info__inner">
                    <h3 class="product-title pr fs__14 mg__0 fwm">
                      <a href="{{route('details',['id'=>1])}}" class="cd chp"
                        >Blue leggings</a></h3>
                    <span class="price dib mb__5">
                      <del><span class="money">$20.00</span></del>
                      <ins><span class="money">$15.00</span></ins></span>
                    <div class="rte dn">
                      <p class="mb__5">Design inspiration lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem
                        non turpis. Nullam sit amet enim....</p>
                    </div>
                    <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid lazyload" data-colorCount="3"
                      data-include="{{route('products-view=swfalse')}}"></div>
                  </div>
                  <div class="product-info__btns flex column mt__20">
                    <a href="{{route('quick_view')}}" data-id="5427725959325"
                      class="nt_add_qv js_add_qv dib ttip_nt_" rel="nofollow">
                      <span class="tt_txt">Xem nhanh</span>
                      <i class="iccl iccl-eye"></i></a>
                    <a href="{{route('quick_shop')}}" data-id="5427725959325" rel="nofollow"
                      class="pr_atc pa l__0 r__0 b__0 op__0 pe_none tc dib js__qs ttip_nt_ truncate">
                      <span class="tt_txt">Mua ngay</span>
                      <i class="iccl iccl-cart"></i>
                      <span>Mua ngay</span></a>
                  </div>
                </div>
              </div>
            </div>
            @endfor
            <!-- @ endforeach -->

          </div>
          <div class="products-footer tc mt__40 mb__60">
            <nav class="nt-pagination w__100 tc paginate_ajax">
              <ul class="pagination-page page-numbers">
                <!-- page 1 -->
                <li><span class="page-numbers current">1</span></li>
                <li><a class="page-numbers" href="?page=2">2</a></li>
                <li><a href="?page=2" class="next page-numbers">Tiếp</a></li>

                <!-- page=2
                <li><a class="prev page-numbers" href="/collections/clothing?page=1">Prev</a></li>
                <li><a class="page-numbers" href="/collections/clothing?page=1">1</a></li>
                <li><span class="page-numbers current">2</span></li> -->
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    document.querySelector('body').classList.add("template-shop");
    setTimeout(()=>{document.querySelector('#shopify-section-toolbar_mobile .type_toolbar_shop').classList.add("dn")});
  </script>
@endsection


@section('side')
  @include("client.cart-side")
  <div id="nt_login_canvas" class="nt_fk_canvas dn lazyload" data-include="{{route('view-login')}}">
    <div class="lds_bginfinity pr"></div>
  </div>
@endsection