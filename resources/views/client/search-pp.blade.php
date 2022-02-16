<div class="nt_mini_cart flex column h__100">
  <div class="mini_cart_header flex fl_between al_center">
    <h3 class="widget-title tu fs__16 mg__0">Tìm kiếm trang web của chúng tôi</h3>
    <i class="close_pp pegk pe-7s-close ts__03 cd"></i>
  </div>
  <div class="mini_cart_wrap">
    <form action="/search" method="get" class="search_header mini_search_frm pr js_frm_search" role="search">
      <input type="hidden" name="type" value="product">
      <input type="hidden" name="options[unavailable_products]" value="last">
      <input type="hidden" name="options[prefix]" value="none">
      <div class="frm_search_input pr oh">
        <input type="text" name="q" placeholder="Search for products"
          class="search_header__input js_iput_search" autocomplete="off">
        <button type="submit" class="search_header__submit js_btn_search pe_none">
          <i class="iccl iccl-search"></i></button>
      </div>
      <div class="ld_bar_search"></div>
    </form>

    <div class="search_header__prs fwsb cd">
      <span class="h_suggest">Cần một số cảm hứng?</span>
      <span class="h_result dn">Kết quả tìm kiếm:</span>
      <span class="h_results dn">Kết quả tìm kiếm:</span>
    </div>
    <div class="search_header__content mini_cart_content fixcl-scroll widget">
      <div class="fixcl-scroll-content product_list_widget">
        <div class="skeleton_wrap skeleton_js dn">
          <div class="row mb__10 pb__10">
            <div class="col-auto widget_img_pr">
              <div class="skeleton_img"></div></div>
            <div class="col widget_if_pr">
              <div class="skeleton_txt1"></div>
              <div class="skeleton_txt2"></div></div>
          </div>
          <div class="row mb__10 pb__10">
            <div class="col-auto widget_img_pr">
              <div class="skeleton_img"></div></div>
            <div class="col widget_if_pr">
              <div class="skeleton_txt1"></div>
              <div class="skeleton_txt2"></div></div>
          </div>
          <div class="row mb__10 pb__10">
            <div class="col-auto widget_img_pr">
              <div class="skeleton_img"></div></div>
            <div class="col widget_if_pr">
              <div class="skeleton_txt1"></div>
              <div class="skeleton_txt2"></div></div>
          </div>
          <div class="row mb__10 pb__10">
            <div class="col-auto widget_img_pr">
              <div class="skeleton_img"></div></div>
            <div class="col widget_if_pr">
              <div class="skeleton_txt1"></div>
              <div class="skeleton_txt2"></div></div>
          </div>
        </div>
        <div class="js_prs_search">

          @for($i=1; $i<=2; $i++)
          <div class="row mb__10 pb__10">
            <div class="col widget_img_pr">
              <a class="db pr oh" href="{{route('details',['id'=>1])}}">
                <img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20750%201101%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"
                  data-src="//cdn.shopify.com/s/files/1/0437/1913/1293/products/p-46_1a4bbde3-f6bf-47e7-a830-ff8b7616c644_{width}x.jpg?v=1595905285"
                  data-widths="[80, 160, 320, 640]" data-sizes="auto" class="w__100 lazyload lz_op_ef"
                  alt="Blue Cotton Leggings"></a></div>
            <div class="col widget_if_pr">
              <a href="{{route('details',['id'=>1])}}" class="product-title db"
                >Blue Cotton Leggings</a>
              <span class=money>$30.00</span></div>
          </div>
          <!--Trên: giá nguyên
              Dưới: giảm giá -->
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
              <span class="onsale nt_label">-20%</span></div>
          </div>
          @endfor

          <a href="{{route('shop')}}" class="btn db fwsb detail_link"
            >Xem tất cả <i  class="las la-arrow-right fs__18"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>