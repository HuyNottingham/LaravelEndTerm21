<div id="shopify-section-1597120285267"
  class="shopify-section nt_section type_tab type_carousel type_tab_collection_owl tp_se_cdt">
  <!--split-->
  <div class="products nt_products_holder row row_pr_1 tc cdt_des_1 round_cd_false js_carousel nt_slider nt_cover ratio_cus1 position_8 space_30 prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1 equal_nt"
    data-flickity='{"imagesLoaded": false, "adaptiveHeight": false, "contain": true, "groupCells": "100%", "cellAlign": "left", "dragThreshold" : 5,"wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": true }'>

    @for($i=0; $i<=2; $i++)
    <div data-page="" class="col-lg-4 col-md-4 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
      <div class="product-inner pr">
        <div class="product-image pr oh lazyload"
          data-include="{{route('products-view=imgtrue')}}">
          <div class="nt_bg_lz nt_fk_lz"></div>
          <div class="space_pr_mb"></div>
        </div>
        <div class="product-info mt__15">
          <h3 class="product-title pr fs__14 mg__0 fwm"><a class="cd chp"
              href="{{route('productdetails')}}">Blue Cotton Leggings</a></h3>
          <span class="price dib mb__5"><span class=money>$30.00</span>
          </span>
          <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid lazyload" data-colorCount="7"
            data-include="{{route('products-view=swtrue')}}"></div>
        </div>
      </div>
    </div>
    @endfor

  </div>
  <!--split-->
</div>