<div class="container-fluid no-gutters">
  <div class="row">
    <div class="col-lg-12 p-0">
      <div class="header_iner d-flex justify-content-between align-items-center">
        <div class="sidebar_icon d-lg-none">
          <i class="ti-menu"></i>
        </div>
        <div class="serach_field-area">
            <div class="search_inner">
              <form action="#">
                <div class="search_field">
                  <input type="text" placeholder="Search here..." >
                </div>
                <button type="submit" disabled> <img src="{{asset('img')}}/icon/icon_search.svg" alt=""> </button>
              </form>
            </div>
          </div>
        <div class="header_right d-flex justify-content-between align-items-center">
          <div class="header_notification_warp d-flex align-items-center">
            <li>
              <a href="#"> <img src="{{asset('img')}}/icon/bell.svg" alt=""> </a>
            </li>
            <li>
              <a href="#"> <img src="{{asset('img')}}/icon/msg.svg" alt=""> </a>
            </li>
          </div>
          <div class="profile_info">
            <img src="{{asset('img/staff/'.$_COOKIE['admin_avatar'])}}" alt="Avatar">
            <div class="profile_info_iner">
              <p>{{$_COOKIE['admin_position']}}</p>
              <h4>{{$_COOKIE['admin_name']}}</h4>
              <div class="profile_info_details">
                <a href="#">Hồ sơ <i class="ti-user"></i></a>
                <a href="#">Cài đặt <i class="ti-settings"></i></a>
                <a href="{{route('adminlogout')}}">Đăng xuất <i class="ti-shift-left"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>