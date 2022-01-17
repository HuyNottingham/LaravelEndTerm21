<div id="shopify-section-product-recommendations" class="shopify-section tp_se_cdt">
  <div class="container">
    <div class="wrap_title  des_title_1 sub_title_size_0">
      <h3 class="section-title tc pr flex fl_center al_center fs__24 title_1">
        <span class="mr__10 ml__10">CÓ THỂ BẠN QUAN TÂM</span></h3>
      <span class="dn tt_divider"><span></span>
        <i class="dn clprfalse title_1 la-gem"></i>
        <span></span></span>
      <span class="section-subtitle db tc sub-title"></span>
    </div>
    <div class="products nt_products_holder nt_slider row row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1"
      data-flickityjs='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": false,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": true }'>

      @for($i=1; $i<=6; $i++)
      <div data-page="" class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1">
        <div class="product-inner pr">
          <div class="product-image pr oh lazyload" data-include="{{route('products-view=imgfalse')}}">
            <div class="nt_bg_lz nt_fk_lz" style="padding-top:146.8%;"></div>
            <div class="space_pr_mb"></div>
          </div>
          <div class="product-info mt__15">
            <h3 class="product-title pr fs__14 mg__0 fwm">
              <a class="cd chp" href="{{route('shop')}}">Ribbed Bodycon Dress{{$i}}</a></h3>
            <span class="price dib mb__5"><span class=money>$30.00</span>
            </span>
          </div>
        </div>
      </div>
      @endfor

    </div>
  </div>
</div>