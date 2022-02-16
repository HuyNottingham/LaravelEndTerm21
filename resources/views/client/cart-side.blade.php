<div id="shopify-section-cart_widget" class="shopify-section">
  <div id="nt_cart_canvas" class="nt_fk_canvas dn">
    <form action="{{route('cart')}}" method="post" novalidate
      class="nt_mini_cart nt_js_cart flex column h__100 btns_cart_1">
      <input type="hidden" data-cart-attr-rm name="attributes[cat_mb_items_per_row]" value="">
      <input type="hidden" data-cart-attr-rm name="attributes[cat_tb_items_per_row]" value="">
      <input type="hidden" data-cart-attr-rm name="attributes[cat_dk_items_per_row]" value="">
      <input type="hidden" data-cart-attr-rm name="attributes[auto_hide_ofsock]" value="">
      <input type="hidden" data-cart-attr-rm name="attributes[paginate_ntt4]" value="">
      <input type="hidden" data-cart-attr-rm name="attributes[limit_ntt4]" value="">
      <input type="hidden" data-cart-attr-rm name="attributes[use_bar_lmntt4]" value="">
      <div class="mini_cart_header flex fl_between al_center">
        <div class="h3 widget-title tu fs__16 mg__0">Giỏ hàng</div>
        <i class="close_pp pegk pe-7s-close ts__03 cd"></i>
      </div>

      <div class="cart_threshold cart_thres_js op__0">
        <div class="cart_thres_1 dn">Giao hàng miễn phí cho tất cả các đơn hàng trên <span
            class="cr fwm mn_thres_js">[money]</span></div>
        <div class="cart_thres_2 dn">Gần được rồi, thêm <span class="cr fwm mn_thres_js"
            >[money]</span> để được <span class="cr fwm">FREE SHIP!</span></div>
        <div class="cart_thres_3 dn"><span class="cr fwsb">Chúc mừng!</span>
          Bạn được giao hàng miễn phí!</div>
        <div class="cart_bar_w bgt4_svg19 dn pr"><span class="pr db h__100"></span></div>
      </div>

      <div class="mini_cart_wrap">
        <div class="mini_cart_content fixcl-scroll">
          <div class="fixcl-scroll-content">
            <div class="empty tc mt__40 dn"><i class="las la-shopping-bag pr mb__10"></i>
              <p>Giỏ của bạn trống.</p>
              <p class="return-to-shop mb__15">
                <a href="{{route('shop')}}" class="button button_primary tu js_add_ld">
                  <span class="truncate">Quay lại cửa hàng</span></a></p>
            </div>
            <div class="cookie-message dn">Bật cookie để sử dụng giỏ hàng</div>
            <div class="mini_cart_items js_cat_items" data-include="{{route('cart-viewjs')}}">
              <div class="lds_bginfinity pr mt__10 mb__20"></div>
            </div>
            <div class="mini_cart_tool js_cart_tool tc  dn">
              <div data-id="note" class="mini_cart_tool_note js_cart_tls ttip_nt tooltip_top">
                <span class="txt_add_note ">
                  <i class="lar la-clipboard"></i>
                  <span class="tt_txt">Thêm ghi chú đơn hàng</span></span>
                <span class="txt_edit_note dn">
                  <i class="las la-clipboard-list"></i>
                  <span class="tt_txt">Chỉnh sửa ghi chú</span></span>
              </div>
              <div data-id="gift" class="mini_cart_tool_gift js_cart_tls js_gift_wrap ttip_nt tooltip_top">
                <i class="las la-gift"></i>
                <span class="tt_txt">Thêm một gói quà</span></div>
              <div data-id="ship" class="mini_cart_tool_ship js_cart_tls ttip_nt tooltip_top">
                <i class="las la-truck-moving"></i>
                <span class="tt_txt">Ước tính phí vận chuyển</span></div>
              <div data-id="dis" class="mini_cart_tool_dis js_cart_tls ttip_nt tooltip_top">
                <i class="las la-tag"></i>
                <span class="tt_txt">Thêm phiếu giảm giá</span></div>
            </div>
            <div data-cart-upsell-js data-limit="10" data-id=""
              data-baseurl="/recommendations/products"></div>
          </div>
        </div>
        <div class="mini_cart_footer js_cart_footer dn">
          <div class="js_cat_dics"></div>
          <div class="total row fl_between al_center">
            <div class="col-auto"><strong>Tổng Phụ:</strong></div>
            <div class="col-auto tr js_cat_ttprice">
              <div class="cart_tot_price"><span class="money">$0.00</span></div>
            </div>
          </div>
          <p class="txt_tax_ship mb__5 fs__12">Thuế, Phí vận chuyển và Mã giảm giá được tính khi thanh toán</p>
          <p class="pr db mb__5 fs__12">
            <input type="checkbox" name="ck_lumise" id="cart_agree" class="js_agree_ck mr__5">
            <label for="cart_agree">Tôi đồng ý với các điều khoản và điều kiện.</label>
            <svg class="dn scl_selected">
              <use xlink:href="#scl_selected"/>
            </svg></p>
          <a href="cart.html" class="button btn-cart tc mt__10 mb__10 js_add_ld">
            <span class="truncate">Xem giỏ hàng</span></a>
          <button type="submit" name="checkout" data-confirm="ck_lumise"
            class="button btn-checkout mt__10 mb__10 js_add_ld truncate">Thanh Toán</button>
        </div>
      </div>
      <div class="mini_cart_note pe_none">
        <label for="CartSpecialInstructions" class="mb__5 dib">
          <span class="txt_add_note ">Thêm ghi chú đơn hàng</span>
          <span class="txt_edit_note dn">Chỉnh sửa ghi chú</span></label>
        <textarea name="note" id="CartSpecialInstructions" placeholder="Điền yêu cầu của bạn?"></textarea>
        <input type="button" class="button btn_back js_cart_tls_back mt__15 mb__10" value="Lưu"/>
        <input type="button" class="button btn_back btn_back2 js_cart_tls_back" value="Hủy">
      </div>
      <div class="mini_cart_ship pe_none">
        <div class="shipping_calculator">
          <h3>Ước tính phí vận chuyển</h3>
          <p class="field">
            <label for="address_country_ship">Quốc gia</label>
            <select id="address_country_ship" data-include="{{route('cart-viewship')}}"
              data-default="Vietnam"></select>
          </p>
          <p class="field" id="address_province_container_ship" style="display:none">
            <label for="address_province_ship" id="address_province_label">Tỉnh/Thành</label>
            <select id="address_province_ship" data-default=""></select>
          </p>
          <p class="field">
            <label for="address_zip_ship">Mã bưu điện/Zip</label>
            <input type="text" id="address_zip_ship"/>
          </p>
          <p class="field">
            <input type="button" class="get_rates button" value="Tính toán"/>
          </p>
          <p class="field">
            <input type="button" class="button btn_back js_cart_tls_back" value="Hủy"/>
          </p>
          <div id="response_calcship"></div>
        </div>
      </div>
      <div class="mini_cart_gift pe_none">
        <div class="shipping_calculator tc">
          <p class="field">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5"
                fill="none" stroke-linecap="round" stroke-linejoin="round" class="cd dib pr">
              <polyline points="20 12 20 22 4 22 4 12"></polyline>
              <rect x="2" y="7" width="20" height="5"></rect>
              <line x1="12" y1="22" x2="12" y2="7"></line>
              <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
              <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
            </svg>
            <span class="gift_wrap_text mt__10 db"><span class="cd">Bạn có muốn một gói quà?</span> Chỉ
            </span>
          </p>
          <p class="field">
            <a href="products/gift-wrapping.html" data-id=""
                class="w__100 tu tc button button_primary truncate js_addtc">Thêm một gói quà</a>
          </p>
          <p class="field">
            <input type="button" class="button btn_back js_cart_tls_back" value="Hủy"/>
          </p>
        </div>
      </div>
      <div class="mini_cart_dis pe_none">
        <div class="shipping_calculator">
          <h3>Thêm phiếu giảm giá</h3>
          <p>Mã phiếu thưởng sẽ hoạt động trên trang thanh toán</p>
          <p class="field">
            <input type="text" name="discount" id="Cartdiscode" value placeholder="Mã giảm giá">
          </p>
          <p class="field">
            <input type="button" class="button btn_back js_cart_tls_back" value="Lưu"/>
          </p>
          <input type="button" class="button btn_back btn_back2 js_cart_tls_back" value="Hủy">
        </div>
      </div>
    </form>
  </div>
</div>