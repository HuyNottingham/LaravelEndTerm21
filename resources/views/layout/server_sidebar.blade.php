<nav class="sidebar">
  <div class="logo d-flex justify-content-between">
    <a href="{{route('admin')}}">  <img src="{{asset('img')}}/logo.png" alt=""></a>
    <div class="sidebar_close_icon d-lg-none">
      <i class="ti-close"></i>
    </div>
  </div>
  <ul id="sidebar_menu">
    <li class="">
      <a href="{{route('admin')}}">
      <!-- <i class="fas fa-th"></i> -->
        <img src="{{asset('img')}}/menu-icon/1.svg" alt="">
        <span>Thống kê</span>
      </a>
    </li>

    <li class="">
      <a class="has-arrow" href="#" aria-expanded="false">
        <img src="{{asset('img')}}/menu-icon/2.svg" alt="">
        <span>Đơn hàng</span>
      </a>
      <ul>
        <li><a href="{{route('order')}}">Đơn đặt hàng</a></li>
        <li><a href="{{route('bill')}}">Hóa đơn bán hàng</a></li>
        <li><a href="{{route('importorder')}}">Đơn nhập hàng</a></li>
        <li><a href="{{route('importbill')}}">Hóa đơn nhập hàng</a></li>
      </ul>
    </li>

    <li class="">
      <a class="has-arrow" href="#" aria-expanded="false">
        <img src="{{asset('img')}}/menu-icon/3.svg" alt="">
        <span>Bảng sản phẩm</span>
      </a>
      <ul>
        <li><a href="{{route('tableproduct',['title'=>'Tất cả'])}}">Tất cả</a></li>
        <li><a href="{{route('tableproduct',['title'=>'Quần'])}}">Quần</a></li>
        <li><a href="{{route('tableproduct',['title'=>'Áo'])}}">Áo</a></li>
        <li><a href="{{route('category')}}">Bảng loại sản phẩm</a></li>
      </ul>
    </li>

    <li class="">
      <a class="has-arrow" href="#" aria-expanded="false">
        <img src="{{asset('img')}}/menu-icon/5.svg" alt="">
        <span>Form nhập liệu</span>
      </a>
      <ul>
        <li><a href="{{route('adduser')}}">Thêm hội viên</a></li>
        <li><a href="{{route('addproduct')}}">Thêm sản phẩm</a></li>
        <li><a href="{{route('category')}}">Thêm loại sản phẩm</a></li>
      </ul>
    </li>

    <li class="">
      <a href="{{route('user')}}">
        <img src="{{asset('img')}}/menu-icon/1.svg" alt="">
        <span>Danh sách hội viên</span>
      </a>
    </li>

    <li class="">
      <a class="has-arrow" href="#" aria-expanded="false">
        <img src="{{asset('img')}}/menu-icon/4.svg" alt="">
        <span>UI Component</span>
      </a>
      <ul>
        <li><a href="#">Elements</a>
        <ul>
            <li><a href="{{route('home')}}">Buttons</a></li>
            <li><a href="{{route('home')}}">Dropdowns</a></li>
            <li><a href="{{route('home')}}">Badges</a></li>
            <li><a href="{{route('home')}}">Loading Indicators</a></li>
        </ul>
      </li>
        <li><a href="#">Components</a>
        <ul>
            <li><a href="{{route('home')}}">Notifications</a></li>
            <li><a href="{{route('home')}}">Progress Bar</a></li>
            <li><a href="{{route('home')}}">Carousel</a></li>
            <li><a href="{{route('home')}}">cards</a></li>
            <li><a href="{{route('home')}}">Pagination</a></li>
        </ul>
      </li>
      </ul>
    </li>

  </ul>
</nav>