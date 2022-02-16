<div id="shopify-section-1581505838591" class="shopify-section nt_section type_featured_collection tp_se_cdt">
  <!--split-->
  @for($i=1; $i<=6; $i++)
  <div data-page class="col-lg-4 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
    <div class="product-inner pr">
      <div class="product-image pr oh lazyload"
        data-include="{{route('products-view=imgtrue')}}">
        <div class="nt_bg_lz nt_fk_lz"></div>
        <div class="space_pr_mb"></div>
      </div>
      <div class="product-info mt__15">
        <h3 class="product-title pr fs__14 mg__0 fwm">
          <a class="cd chp" href="{{route('details',['id'=>1])}}">Cuffed Chino Shorts</a></h3>
          <span class="price dib mb__5">
            <del><span class=money>$25.00</span></del>
            <ins><span class=money>$20.00</span></ins></span>
        <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid lazyload" data-colorCount="5"
          data-include="{{route('products-view=swtrue')}}"></div>
      </div>
    </div>
  </div>
  @endfor
  <!--split-->18<!--split-->no_prs<!--split-->{{route('shop-page=2')}}<!--split-->
</div>