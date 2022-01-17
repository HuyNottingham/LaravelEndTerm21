<div id="shopify-section-cart_widget" class="shopify-section">
  <div id="nt_cart_canvas" class="nt_fk_canvas dn">
    <form action="https://gecko5.myshopify.com/cart" method="post" novalidate
        class="nt_mini_cart nt_js_cart flex column h__100 btns_cart_1">
      <input type="hidden" data-cart-attr-rm name="attributes[cat_mb_items_per_row]" value=""><input type="hidden"
          data-cart-attr-rm name="attributes[cat_tb_items_per_row]" value=""><input type="hidden" data-cart-attr-rm
          name="attributes[cat_dk_items_per_row]" value="">
      <input type="hidden" data-cart-attr-rm name="attributes[auto_hide_ofsock]" value=""><input type="hidden"
          data-cart-attr-rm name="attributes[paginate_ntt4]" value=""><input type="hidden" data-cart-attr-rm
          name="attributes[limit_ntt4]" value=""><input type="hidden" data-cart-attr-rm
          name="attributes[use_bar_lmntt4]" value="">
      <div class="mini_cart_header flex fl_between al_center">
        <div class="h3 widget-title tu fs__16 mg__0">Shopping cart</div><i
            class="close_pp pegk pe-7s-close ts__03 cd"></i>
      </div>
      <div class="cart_threshold cart_thres_js op__0">
        <div class="cart_thres_1 dn">Free Shipping for all orders over <span class="cr fwm mn_thres_js">[money]</span>
        </div>
        <div class="cart_thres_2 dn">Almost there, add <span class="cr fwm mn_thres_js">[money]</span> more to get
          <span class="cr fwm">FREE SHIPPING!</span></div>
        <div class="cart_thres_3 dn"><span class="cr fwsb">Congratulations!</span> You&#39;ve got free shipping!</div>
        <div class="cart_bar_w bgt4_svg19 dn pr"><span class="pr db h__100"></span></div>
      </div>
      <div class="mini_cart_wrap">
        <div class="mini_cart_content fixcl-scroll">
          <div class="fixcl-scroll-content">
            <div class="empty tc mt__40"><i class="las la-shopping-bag pr mb__10"></i>
              <p>Your cart is empty.</p>
              <p class="return-to-shop mb__15"><a class="button button_primary tu js_add_ld"
                    href="{{route('shop')}}"><span class="truncate">Return To Shop</span></a></p>
            </div>
            <div class="cookie-message dn">Enable cookies to use the shopping cart</div>
            <div class="mini_cart_items js_cat_items" data-include="{{route('cart-viewjs')}}">
              <div class="lds_bginfinity pr mt__10 mb__20"></div>
            </div>
            <div class="mini_cart_tool js_cart_tool tc  dn">
              <div data-id="note" class="mini_cart_tool_note js_cart_tls ttip_nt tooltip_top">
                <span class="txt_add_note "><i class="lar la-clipboard"></i><span class="tt_txt">Add Order
                      Note</span></span>
                <span class="txt_edit_note dn"><i class="las la-clipboard-list"></i><span class="tt_txt">Edit Order
                      Note</span></span>
              </div>
              <div data-id="gift" class="mini_cart_tool_gift js_cart_tls js_gift_wrap ttip_nt tooltip_top"><i
                    class="las la-gift"></i><span class="tt_txt">Add A Gift Wrap</span></div>
              <div data-id="ship" class="mini_cart_tool_ship js_cart_tls ttip_nt tooltip_top"><i
                    class="las la-truck-moving"></i><span class="tt_txt">Estimate Shipping</span></div>
              <div data-id="dis" class="mini_cart_tool_dis js_cart_tls ttip_nt tooltip_top"><i
                    class="las la-tag"></i><span class="tt_txt">Add A Coupon</span></div>
            </div>
            <div data-cart-upsell-js data-baseurl="/recommendations/products" data-limit="10" data-id=""></div>
          </div>
        </div>
        <div class="mini_cart_footer js_cart_footer dn">
          <div class="js_cat_dics"></div>
          <div class="total row fl_between al_center">
            <div class="col-auto"><strong>Subtotal:</strong></div>
            <div class="col-auto tr js_cat_ttprice">
              <div class="cart_tot_price"><span class=money>$0.00</span></div>
            </div>
          </div>
          <p class="txt_tax_ship mb__5 fs__12">Taxes, shipping and discounts codes calculated at checkout
          </p>
          <p class="pr db mb__5 fs__12"><input type="checkbox" id="cart_agree" class="js_agree_ck mr__5"
                name="ck_lumise"><label for="cart_agree">I agree with the terms and conditions.
            </label><svg class="dn scl_selected">
              <use xlink:href="#scl_selected" />
            </svg></p><a href="{{route('cart')}}" class="button btn-cart tc mt__10 mb__10 js_add_ld"><span
                class="truncate">View cart</span></a><button type="submit" data-confirm="ck_lumise" name="checkout"
              class="button btn-checkout mt__10 mb__10 js_add_ld truncate">Check Out</button>
        </div>
      </div>
      <div class="mini_cart_note pe_none">
        <label for="CartSpecialInstructions" class="mb__5 dib"><span class="txt_add_note ">Add Order Note</span><span
              class="txt_edit_note dn">Edit Order Note</span></label>
        <textarea name="note" id="CartSpecialInstructions" placeholder="How can we help you?"></textarea>
        <input type="button" class="button btn_back js_cart_tls_back mt__15 mb__10" value="Save" />
        <input type="button" class="button btn_back btn_back2 js_cart_tls_back" value="Cancel">
      </div>
      <div class="mini_cart_ship pe_none">
        <div class="shipping_calculator">
          <h3>Estimate Shipping</h3>
          <p class="field">
            <label for="address_country_ship">Country</label>
            <select id="address_country_ship" data-include="{{route('cart-viewship')}}" data-default="United States"></select>
          </p>
          <p class="field" id="address_province_container_ship" style="display:none">
            <label for="address_province_ship" id="address_province_label">Province</label>
            <select id="address_province_ship" data-default=""></select>
          </p>
          <p class="field">
            <label for="address_zip_ship">Postal/Zip Code</label>
            <input type="text" id="address_zip_ship" />
          </p>
          <p class="field">
            <input type="button" class="get_rates button" value="Calculate Shipping" />
          </p>
          <p class="field">
            <input type="button" class="button btn_back js_cart_tls_back" value="Cancel" />
          </p>
          <div id="response_calcship"></div>
        </div>
      </div>
      <div class="mini_cart_gift pe_none">
        <div class="shipping_calculator tc">
          <p class="field">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5" fill="none"
                stroke-linecap="round" stroke-linejoin="round" class="cd dib pr">
              <polyline points="20 12 20 22 4 22 4 12"></polyline>
              <rect x="2" y="7" width="20" height="5"></rect>
              <line x1="12" y1="22" x2="12" y2="7"></line>
              <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
              <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
            </svg>
            <span class="gift_wrap_text mt__10 db"><span class="cd">Do you want a gift wrap?</span> Only </span>
          </p>
          <p class="field">
            <a href="{{route('shop-gift_wrapping')}}" data-id=""
                class="w__100 tu tc button button_primary truncate js_addtc">Add A Gift Wrap</a>
          </p>
          <p class="field">
            <input type="button" class="button btn_back js_cart_tls_back" value="Cancel" />
          </p>
        </div>
      </div>
      <div class="mini_cart_dis pe_none">
        <div class="shipping_calculator">
          <h3>Add A Coupon</h3>
          <p>Coupon code will work on checkout page</p>
          <p class="field">
            <input type="text" name="discount" id="Cartdiscode" value placeholder="Coupon code">
          </p>
          <p class="field">
            <input type="button" class="button btn_back js_cart_tls_back" value="Save" />
          </p>
          <input type="button" class="button btn_back btn_back2 js_cart_tls_back" value="Cancel">
        </div>
      </div>
    </form>
  </div>
</div>