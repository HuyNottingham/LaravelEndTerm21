<div class="mb_nav_tabs flex al_center mb_cat_true">
  <div class="mb_nav_title pr mb_nav_ul flex al_center fl_center active" data-id="#shopify-section-mb_nav_js">
    <span class="db truncate">Menu</span></div>
  <!-- <div class="mb_nav_title pr flex al_center fl_center" data-id="#shopify-section-mb_cat_js">
    <span class="db truncate">Thể loại</span></div> -->
</div>
<div id="shopify-section-mb_nav_js" class="mb_nav_tab active">
  <div id="shopify-section-mb_nav" class="shopify-section">
    <ul id="menu_mb_ul" class="nt_mb_menu">
      <li class="menu-item item-level-0">
        <a href="{{route('shop')}}" target="_self">Mới</a></li>
      @for($i=1;$i<=2;$i++)
      <li class="menu-item item-level-0">
        <a href="{{route('shop')}}" target="_self">Thời trang {{ ($i==1) ? 'Nữ' : 'Nam' }}</a></li>
      @endfor
      <li class="menu-item item-level-0">
        <a href="{{route('shop')}}" target="_self">Sản phẩm</a></li>
      <li class="menu-item item-level-0">
        <a href="{{route('home')}}" title="Chua phat trien" target="_self">Họa báo</a></li>
      <li class="menu-item item-level-0">
        <a href="{{route('home')}}" title="Chua phat trien" target="_self">Blog</a></li>
      <li class="menu-item item-level-0">
        <a href="{{route('home')}}" title="Chua phat trien" target="_self">Thông tin</a></li>
      <li id="item_mb_wis" class="menu-item item-level-0 menu-item-btns menu-item-wishlist">
        <a href="{{route('wishlist')}}">
          <span class="iconbtns">Yêu thích</span></a></li>
      <!-- <li id="item_mb_sea" class="menu-item item-level-0 menu-item-btns menu-item-sea push_side"
        data-id="#nt_search_canvas">
        <a href="{{route('menu-mn')}}"><span class="iconbtns">Tìm kiếm</span></a></li> -->
      <li id="item_mb_acc" class="menu-item item-level-0 menu-item-btns menu-item-acount">
        <a href="{{route('view-login')}}" class="push_side" data-id="#nt_login_canvas">
          <span class="iconbtns">Đăng nhập / Đăng ký</span></a></li>
      <li id="item_mb_help" class="menu-item item-level-0 menu-item-infos">
        <p class="menu_infos_title">Cần trợ giúp?</p>
        <div class="menu_infos_text"><i class="pegk pe-7s-call fwb mr__10"></i>
          +88 888 888 888<br><i class="pegk pe-7s-mail fwb mr__10"></i>
          <a class="cg" href="mailto:huyltrn21@gmail.com">huyltrn21@gmail.com</a>
        </div>
      </li>
      <!-- Currency x drop downn menu -->
    </ul>
  </div>
</div>
<!-- thể loại -->