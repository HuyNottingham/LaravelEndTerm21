@extends('layout.client')
  
@section('head')
<title>Cart</title>
@endsection


@section('content')
  <div id="shopify-section-cart_heading" class="shopify-section page_section_heading">
    <div class="page-head tc pr oh page_bg_img page_head_cart_heading">
      <div class="parallax-inner nt_parallax_false lazyload nt_bg_lz pa t__0 l__0 r__0 b__0"
        data-bgset="//cdn.shopify.com/s/files/1/0437/1913/1293/files/shop-banner_1x1.jpg?v=1600211123"
        data-ratio="4.0" data-sizes="auto" data-parent-fit="cover"></div>
      <div class="container pr z_100">
        <h1 class="tu mb__10 cw">Giỏ mua hàng</h1>
      </div>
    </div>
  </div>
  <div id="shopify-section-cart-template" class="shopify-section cart_page_section container mt__60">
  
    <!-- Rỗng thì dùng cái này, bỏ hết chỗ trong div cha đi
    <div class="empty_cart_page tc">
      <i class="las la-shopping-bag pr mb__30 fs__90"></i>
      <h4 class="cart_page_heading mg__0 mb__20 tu fs__30">Your cart is empty.</h4>
      <div class="cart_page_txt">Before proceed to checkout you must add some products to your shopping cart.<br>
          You will find a lot of interesting products on our "Shop" page.</div>
      <div class="mt__30"></div>
      <p class="mb__15"><a class="button button_primary tu js_add_ld" href="{{route('shop')}}">Return To Shop</a>
      </p>
      <div class="cart_threshold">
      <div class="cart_thres_1">Free Shipping for all orders over <span class="cr fwm mn_thres_js"><span
            class=money>$100.00</span></span></div>
      </div>
    </div> -->
  
    <!-- <div class="cookie-message dn tc">Enable cookies to use the shopping cart</div> -->
  
    <form action="{{route('cart')}}" method="post" novalidate style="display:block"
      class="frm_cart_ajax_true frm_cart_page nt_js_cart pr oh  dn">
      <input type="hidden" data-cart-attr-rm name="attributes[cat_mb_items_per_row]">
      <input type="hidden" data-cart-attr-rm name="attributes[cat_tb_items_per_row]">
      <input type="hidden" data-cart-attr-rm name="attributes[cat_dk_items_per_row]">
      <input type="hidden" data-cart-attr-rm name="attributes[auto_hide_ofsock]">
      <input type="hidden" data-cart-attr-rm name="attributes[paginate_ntt4]">
      <input type="hidden" data-cart-attr-rm name="attributes[limit_ntt4]">
      <input type="hidden" data-cart-attr-rm name="attributes[use_bar_lmntt4]">
      <div class="cart_header">
        <div class="row al_center">
          <div class="col-5">Sản phẩm</div>
          <div class="col-3 tc">Đơn giá</div>
          <div class="col-2 tc">Số lượng</div>
          <div class="col-2 tc tr_md">Tổng</div>
        </div>
      </div>
  
      <div class="cart_items js_cat_items">
        <div class="cart_item js_cart_item cart_item_35335215710365">
          <div class="ld_cart_bar"></div>
          <div class="row al_center">
            <div class="col-12 col-md-12 col-lg-5">
              <div class="page_cart_info flex al_center">
                <a href="{{route('details',['id'=>1])}}">
                  <img class="lazyload w__100 lz_op_ef"
                    src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20750%201101%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"
                    data-src="//cdn.shopify.com/s/files/1/0437/1913/1293/products/p-41_3a52093f-b7de-45c8-abe1-32a6372113d8_{width}x.jpg?v=1595905285"
                    data-widths="[120, 240]" data-sizes="auto"></a>
                <div class="mini_cart_body ml__15">
                  <h5 class="mini_cart_title mg__0 mb__5">
                    <a href="{{route('details',['id'=>1])}}">Blue Cotton Leggings</a></h5>
                  <div class="mini_cart_meta">
                    <p class="cart_meta_variant">Color: <strong>Black</strong></p>
                    <p class="cart_meta_variant">Size: <strong>XS</strong></p>
                  </div>
                  <div class="mini_cart_tool mt__10">
                    <a href="{{route('quick_shop')}}"
                      class="cart_ac_edit js__qs ttip_nt tooltip_top_right"
                      rel="nofollow" data-no-instant data-id="5427723010205">
                      <span class="tt_txt">Chỉnh sửa mục này</span>
                      <svg viewBox="0 0 24 24"><use xlink:href="#scl_edit"></svg></a>
                    <a href="{{route('cartchange')}}?quantity=0&amp;id=35335215710365:7a791ad935aeb6b3aed706fe9a02537d"
                      rel="nofollow" data-no-instant
                      class="cart_ac_remove js_cart_rem ttip_nt tooltip_top_right"
                      data-id="35335215710365:7a791ad935aeb6b3aed706fe9a02537d">
                      <span class="tt_txt">Loại bỏ mục này</span>
                      <svg viewBox="0 0 24 24"><use xlink:href="#scl_remove"></svg></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3 tc__ tc_lg">
              <div class="cart_meta_prices price">
                <div class="cart_price"><span class=money>$30.00</span>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 col-lg-2 tc mini_cart_actions">
              <div class="quantity pr mr__10 qty__true">
                <input type="number" id="miniupdates_35335215710365:7a791ad935aeb6b3aed706fe9a02537d"
                  data-id="35335215710365:7a791ad935aeb6b3aed706fe9a02537d" data-price='3000'
                  class="input-text qty text tc qty_cart_js" step="1" min="0" max="9999" name="updates[]"
                  value="1" size="4" pattern="[0-9]*" inputmode="numeric">
                <div class="qty tc fs__14">
                  <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0">
                    <i class="facl facl-plus"></i></button>
                  <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0 qty_1">
                    <svg class='dn' viewBox="0 0 24 24">
                      <use xlink:href="#scl_remove"></svg>
                    <i class="facl facl-minus"></i></button>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 col-lg-2 tc__ tr_lg">
              <span class="cart-item-price fwm cd js_tt_price_it">
                <span class=money>$30.00</span></span>
            </div>
          </div>
        </div>
  
        <div class="cart_item js_cart_item cart_item_35335279181981">
          <div class="ld_cart_bar"></div>
          <div class="row al_center">
            <div class="col-12 col-md-12 col-lg-5">
              <div class="page_cart_info flex al_center">
                <a href="{{route('details',['id'=>1])}}">
                  <img class="w__100 lz_op_ef lazyautosizes lazyloaded"
                    src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20750%201101%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"
                    data-srcset="//cdn.shopify.com/s/files/1/0437/1913/1293/products/g-1_120x.jpg?v=1600324872 120w, //cdn.shopify.com/s/files/1/0437/1913/1293/products/g-1_240x.jpg?v=1600324872 240w"
                    srcset="//cdn.shopify.com/s/files/1/0437/1913/1293/products/g-1_120x.jpg?v=1600324872 120w, //cdn.shopify.com/s/files/1/0437/1913/1293/products/g-1_240x.jpg?v=1600324872 240w"
                    data-widths="[120, 240]" data-sizes="auto" sizes="120px"></a>
                <div class="mini_cart_body ml__15">
                  <h5 class="mini_cart_title mg__0 mb__5">
                    <a href="{{route('details',['id'=>1])}}"
                      >Square Embroidery T-Shirt</a></h5>
                  <div class="mini_cart_meta"></div>
                  <div class="mini_cart_tool mt__10">
                    <a href="{{route('cartchange')}}?quantity=0&amp;id=35335279181981:597052d67c4f6c7ce89987750b49937f"
                      rel="nofollow" data-no-instant=""
                      class="cart_ac_remove js_cart_rem ttip_nt tooltip_top_right"
                      data-id="35335279181981:597052d67c4f6c7ce89987750b49937f">
                      <span class="tt_txt">Loại bỏ mục này</span>
                      <svg viewBox="0 0 24 24"><use xlink:href="#scl_remove"></use></svg></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3 tc__ tc_lg">
              <div class="cart_meta_prices price">
                <div class="cart_price"><span class="money">$30.00</span>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 col-lg-2 tc mini_cart_actions">
              <div class="quantity pr mr__10 qty__true">
                <input type="number" id="miniupdates_35335279181981:597052d67c4f6c7ce89987750b49937f"
                  data-id="35335279181981:597052d67c4f6c7ce89987750b49937f" data-price="3000"
                  class="input-text qty text tc qty_cart_js" step="1" min="0" max="9999" name="updates[]"
                  value="1" size="4" pattern="[0-9]*" inputmode="numeric">
                <div class="qty tc fs__14">
                  <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0">
                    <i class="facl facl-plus"></i></button>
                  <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0 qty_1">
                    <svg class="dn" viewBox="0 0 24 24">
                      <use xlink:href="#scl_remove"></use></svg>
                    <i class="facl facl-minus"></i></button>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 col-lg-2 tc__ tr_lg">
              <span class="cart-item-price fwm cd js_tt_price_it">
                <span class="money">$30.00</span></span>
            </div>
          </div>
        </div>
      </div>
  
  
      <div class="cart__footer mt__60 mb__80">
        <div class="row">
          <div class="col-12 col-md-6 cart_actions tl_md tc order-md-2 order-2 mb__50">
            <div class="gift_wrap row al_center tc tl_md mb__25 js_gift_wrap">
              <div class="gift_wrap_info col-lg-7 col-12">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5"
                  fill="none" stroke-linecap="round" stroke-linejoin="round" class="cd dib pr">
                  <polyline points="20 12 20 22 4 22 4 12"></polyline>
                  <rect x="2" y="7" width="20" height="5"></rect>
                  <line x1="12" y1="22" x2="12" y2="7"></line>
                  <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                  <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                </svg>
                <span class="gift-wrap__text mt__10 mb__10 dib">
                  <span class="cd">Bạn có muốn một gói quà không?</span>
                  Chỉ <span class=money>$10.00</span></span>
              </div>
              <div class="gift_wrap_action col-lg col-12 tr_lg tl_md">
                <a href="{{route('shop-gift_wrapping')}}" data-id="35335096041629"
                  class="button truncate js_addtc">Thêm một món quà</a>
              </div>
            </div><label for="CartSpecialInstructions" class="cart-note__label dib cd mb__10">
              <span class="txt_add_note ">Thêm ghi chú đơn hàng</span>
              <span class="txt_edit_note dn">Chỉnh sửa ghi chú</span></label>
            <textarea name="note" placeholder="Chúng tôi có thể giúp gì cho bạn?"
              id="CartSpecialInstructions" class="cart-note__input"></textarea>
              <label for="couponcode"
              class="cart-couponcode__label db cd mt__20 mb__10">Phiếu giảm giá:</label>
            <p>Mã phiếu thưởng sẽ hoạt động trên trang thanh toán</p>
            <input type="text" name="discount" id="couponcode" value placeholder="Mã phiếu">
          </div>
          <div class="col-12 tr_md tc order-md-4 order-4 col-md-6">
            <div class="fs__14 cd cart_thres_js">
              <div class="cart_thres_2">Gần được rồi, thêm
                <span class="cr fwm mn_thres_js"><span class=money>$100.00</span></span>
                để được <span class="cr fwm">FREE SHIPPING!</span></div>
              <div class="cart_thres_3 dn">
                <span class="cr fwsb">Chúc mừng!</span>
                  Bạn được giao hàng miễn phí!</div>
              <div class="cart_bar_w bgt4_svg19 pr">
                <span class="pr db h__100 less_10" style="width:0"></span>
              </div>
            </div>
            <div class="total row in_flex fl_between al_center cd fs__18 tu">
              <div class="col-auto"><strong>Tổng Phụ:</strong></div>
              <div class="col-auto tr js_cat_ttprice fs__20 fwm">
                <div class="cart_tot_price"><span class=money>$0.00</span></div>
              </div>
            </div>
            <div class="clearfix"></div>
            <p class="db txt_tax_ship mb__5">Thuế, Phí vận chuyển và Mã giảm giá được tính khi thanh toán</p>
            <p class="pr dib mb__5">
              <input name="ck_lumise" type="checkbox" id="cart_agree" class="js_agree_ck mr__5">
              <label for="cart_agree">Tôi đồng ý với các điều khoản và điều kiện.</label>
              <svg class="dn scl_selected">
                <use xlink:href="#scl_selected"></svg></p>
            <div class="clearfix"></div>
            <button class="button btn_update mt__10 mb__10 js_add_ld"
              type="submit" name="update">Cập nhật giỏ hàng</button>
            <button class="btn_checkout button button_primary tu mt__10 mb__10 js_add_ld"
              type="submit" data-confirm="ck_lumise" name="checkout">Thanh toán</button>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </form>
    <div class="shipping_calculator shipping_calc_page loading row al_center fl_center dn" style="display:flex">
      <h3 class="mg__0 tc mt__20 mb__20 col-auto truncate">Ước tính vận chuyển</h3>
      <p class="field col-lg-3 col-md-4 col-12">
        <label for="address_country_ship">Quốc gia</label>
        <select id="address_country_ship" data-include="{{route('cart-viewship')}}"
          data-default="Vietnam"></select>
      </p>
      <p class="field col-lg-3 col-md-4 col-12" id="address_province_container_ship" style="display:none">
        <label for="address_province_ship" id="address_province_label">Quận/Huyện</label>
        <select id="address_province_ship" data-default=""></select>
      </p>
      <p class="field col-lg-3 col-md-4 col-12">
        <label for="address_zip_ship">Mã bưu điện/Zip</label>
        <input type="text" id="address_zip_ship">
      </p>
      <p class="field col-lg-3 col-md-6 col-12 mg__0">
        <input type="button" class="get_rates button" value="Tính phí ship">
      </p>
      <div class="nt_svg_loader pa dn"></div>
      <div id="response_calcship" class="col-12 tc mt__30"></div>
    </div>
  </div>
  <div id="shopify-section-cart_upsell" class="shopify-section"></div>
  <div id="shopify-section-recently_viewed" class="shopify-section tp_se_cdt mb__60">
    <div class="related product-extra mt__60" id="recently_wrap" data-section-type="product-recently"
      data-get="{{route('products-search')}}" data-unpr='show'
      data-id="id:19041994"data-limit="6" data-expands="-1">
      <div class="lds_bginfinity pr"></div>
    </div>
  </div>
  <script>document.querySelector('body').classList.add("template-cart");</script>
@endsection



@section('side')
  <div id="nt_login_canvas" class="nt_fk_canvas dn lazyload" data-include="{{route('view-login')}}">
    <div class="lds_bginfinity pr"></div>
  </div>
@endsection