<header id="ntheader" class="ntheader header_3 h_icon_iccl">
  <div class="ntheader_wrapper pr z_200"><div id="shopify-section-header_3" class="shopify-section sp_header_mid"><div class="header__mid">
    <div class="container"><div class="row al_center css_h_se">
      <div class="col-md-4 col-3 dn_lg">
        <a href="{{route('home')}}" data-id='#nt_menu_canvas' class="push_side push-menu-btn  lh__1 flex al_center">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
          <rect width="30" height="1.5"></rect>
          <rect y="7" width="20" height="1.5"></rect>
          <rect y="14" width="30" height="1.5"></rect>
          </svg></a></div>
      <div class="col-lg-2 col-md-4 col-6 tc tl_lg">
        <div class=" branding ts__05 lh__1"><a class="dib" href="{{route('home')}}">
          <img class="w__100 logo_normal dn db_lg"
            src="https://cdn.shopify.com/s/files/1/0437/1913/1293/files/logo.svg?v=13650740377954234292"
            alt="Gecko 5 - The best Shopify theme 2021" style="width: 180px">
          <img class="w__100 logo_sticky dn"
            src="https://cdn.shopify.com/s/files/1/0437/1913/1293/files/logo.svg?v=13650740377954234292"
            alt="Gecko 5 - The best Shopify theme 2021" style="width: 180px">
          <img class="w__100 logo_mobile dn_lg"
            src="https://cdn.shopify.com/s/files/1/0437/1913/1293/files/logo.svg?v=13650740377954234292"
            alt="Gecko 5 - The best Shopify theme 2021" style="width: 110px"></a></div>
      </div>
      <div class="col dn db_lg">
        <nav class="nt_navigation tc hover_side_up nav_arrow_false">
          <ul id="nt_menu_id" class="nt_menu in_flex wrap al_center">


            <li id="item_1585641227863" class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
              <a class="lh__1 flex al_center pr" href="#new">NEW</a>
              <div class="cus sub-menu">
                <div class="container" style="width:660px">
                  <div class="row lazy_menu lazyload lazy_menu_mega">
      <div id="bk_1600074809609" class="type_mn_pr menu-item sub-column-item col-6 equal_nt hoverz_true cat_design_1"><div class="cat_grid_item cat_space_item"><div class="cat_grid_item__content pr oh">
        <a href="{{route('shop')}}" class="db cat_grid_item__link">
          <div class="cat_grid_item__overlay item__position nt_bg_lz lazyload" data-bgset="//cdn.shopify.com/s/files/1/0437/1913/1293/files/banner-05_1x1.jpg?v=1599100516" data-ratio="0.8050847457627118" data-sizes="auto" data-parent-fit="width" style="padding-top:124.2105263%;"></div></a><div class="cat_grid_item__wrapper pe_none"><div class="cat_grid_item__title h3">WOMEN</div><div class="cat_grid_item__count dn">18 </div></div></div></div></div>
      <div id="bk_1585641269506" class="type_mn_pr menu-item sub-column-item col-6 equal_nt hoverz_true cat_design_1"><div class="cat_grid_item cat_space_item"><div class="cat_grid_item__content pr oh">
        <a href="{{route('shop')}}" class="db cat_grid_item__link">
          <div class="cat_grid_item__overlay item__position nt_bg_lz lazyload" data-bgset="//cdn.shopify.com/s/files/1/0437/1913/1293/files/banner-06_1x1.jpg?v=1599100751" data-ratio="0.8050847457627118" data-sizes="auto" data-parent-fit="width" style="padding-top:124.2105263%;"></div></a><div class="cat_grid_item__wrapper pe_none"><div class="cat_grid_item__title h3">MEN</div><div class="cat_grid_item__count dn">18 </div></div></div></div></div>
                  </div>
                </div>
              </div>
            </li>

            @for($i=0;$i<=1;$i++)
            <li id="item_1585641558196" class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
              <a class="lh__1 flex al_center pr">{{ ($i==0) ? 'WOMAN' : 'MAN' }}</a>
              <div class="cus sub-menu">
                <div class="container" style="width:500px">
                  <div class="row lazy_menu lazyload lazy_menu_mega">
      <div id="bk_1585651740816" class="type_mn_link menu-item sub-column-item col-6">
        <a target="_self">Phân loại</a><ul class="sub-column not_tt_mn">
          <li class="menu-item"><a href="{{route('shop')}}">Quần</a></li>
          <li class="menu-item"><a href="{{route('shop')}}">Áo</a></li></ul></div>
      <div id="bk_1585641594950" class="type_mn_link menu-item sub-column-item col-6">
        <a target="_self">Nổi bật</a><ul class="sub-column not_tt_mn">
          <li class="menu-item"><a href="{{route('shop')}}">Bán chạy nhất</a></li>
          <li class="menu-item"><a href="{{route('shop')}}">Sản phẩm mới</a></li></ul></div>
                  </div>
                </div>
              </div>
            </li>
            @endfor

            <li id="item_1585641802325" class="type_dropdown menu_wid_ menu-item has-children menu_has_offsets menu_right pos_right">
              <a class="lh__1 flex al_center pr" href="{{route('shop')}}" title="Tất cả sản phẩm">PRODUCT</a>
            </li>

            <li id="item_1585641835304" class="type_dropdown menu_wid_ menu-item has-children menu_has_offsets menu_right pos_right">
              <a class="lh__1 flex al_center pr">PAGES</a>
              <div class="sub-menu">
                <div class="lazy_menu lazyload">
      <div class="menu-item"><a href="{{route('cart')}}">Giỏ hàng</a></div>
      <div class="menu-item"><a href="{{route('wishlist')}}">Danh sách yêu thích</a></div>
      <div class="menu-item"><a href="{{route('checkout')}}">Thanh toán</a></div>
      <div class="menu-item"><a href="{{route('home')}}" title="Chua phat trien">Họa báo</a></div>
                </div>
              </div>
            </li>

            <li id="item_1585641843539" class="type_dropdown menu_wid_ menu-item has-children menu_has_offsets menu_left pos_left">
              <a class="lh__1 flex al_center pr" href="{{route('home')}}" title="Lên hệ\nChua phat trien">BLOG</a>
            </li>


          </ul>
        </nav>
      </div>
      <div class="col-lg-auto col-md-4 col-3 tr col_group_btns">
        <div class="nt_action in_flex al_center cart_des_1">
          <a class="icon_search push_side cb chp"
            data-id="#nt_search_canvas" href="{{route('menu-mn')}}" title="Chua co trang search chinh thuc">
            <i class="iccl iccl-search"></i></a>

          <a class="icon_like cb chp pr dn db_md" href="{{route('wishlist')}}">
            <i class="iccl iccl-heart pr">
              <span class="op__0 ts_op pa tcount jswcount bgb br__50 cw tc">
                0</span></i></a>
          <div class="icon_cart pr">
            <a class="push_side pr cb chp db" href="{{route('cart')}}" data-id="#nt_cart_canvas">
              <i class="iccl iccl-cart pr">
                <span class="op__0 ts_op pa tcount jsccount bgb br__50 cw tc">
                  0</span></i></a></div>
          <div class="my-account ts__05 pr dn db_md">
            <a class="cb chp db push_side" href="{{route('login')}}" data-id="#nt_login_canvas">
              <i class="iccl iccl-user"></i></a>
          </div>
        </div>
      </div>
    </div></div>
  </div></div></div>
</header>