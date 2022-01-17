<div id="shopify-section-promo_pr_pp" class="shopify-section mfp-hide">
  <div class="js_lz_pppr popup_prpr_wrap container bgw mfp-with-anim" data-stt='{ "pp_version": 1,"day_next": 8 }'>
    <div class="wrap_title  des_title_1 sub_title_size_23">
      <h3 class="section-title tc pr flex fl_center al_center fs__24 title_1">
        <span class="mr__10 ml__10">Không thể tìm thấy những gì bạn đang tìm kiếm?</span>
      </h3>
      <span class="dn tt_divider"><span></span>
        <i class="dn clprfalse title_1 la-gem"></i>
        <span></span></span>
      <span class="section-subtitle db tc sub-title">Có thể cái này sẽ giúp...</span>
    </div>
    <div class="products nt_products_holder row row_pr_1 cdt_des_1 round_cd_false js_carousel nt_slider nt_cover ratio_nt position_8 space_ prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1"
      data-flickityjs='{"draggable":0,"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": false,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": true }'>

      @for($i=1; $i<=8; $i++)
      <div data-page=""
        class="col-lg-3 col-md-4 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
        <div class="product-inner pr">
          <div class="product-image pr oh lazyload" data-include="{{route('products-view=imgfalse')}}">
            <div class="nt_bg_lz nt_fk_lz" style="padding-top:146.8%;"></div>
            <div class="space_pr_mb"></div>
          </div>
          <div class="product-info mt__15">
            <h3 class="product-title pr fs__14 mg__0 fwm">
              <a href="{{route('productdetails')}}"
                class="cd chp">Blue Cotton Leggings</a></h3>
            <span class="price dib mb__5"><span class=money>$30.00</span></span>
            <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid lazyload"
              data-include="{{route('products-view=swfalse')}}" data-colorCount="7"></div>
          </div>
        </div>
      </div>
      @endfor

    </div>
  </div>
</div>