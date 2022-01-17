@extends('layout.client')

@section('head')
  <title>Size guide</title>
  <meta property="og:url" content="size-guide.html">
  <meta property="og:title" content="Size Guide">
  <meta property="og:type" content="website">
  <meta property="og:description"
    content="Size guide Size US Bust Waist Low Hip XS 2 32 24 - 25 33 - 34 S 4 34 - 35 26 - 27 35 - 26 M 6 36 - 37 28 - 29 38 - 40 L 8 38 - 29 30 - 31 42 - 44 XL 10 40 - 41 32 - 33 45 - 47 XXL 12 42 - 43 34 - 35 48 - 50 Measuring Tips Bust Measure around the fullest part of your bust. Waist Measure around the narrowest part of your">
  <meta name="twitter:site" content="@shopify">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Size Guide">
  <meta name="twitter:description"
    content="Size guide Size US Bust Waist Low Hip XS 2 32 24 - 25 33 - 34 S 4 34 - 35 26 - 27 35 - 26 M 6 36 - 37 28 - 29 38 - 40 L 8 38 - 29 30 - 31 42 - 44 XL 10 40 - 41 32 - 33 45 - 47 XXL 12 42 - 43 34 - 35 48 - 50 Measuring Tips Bust Measure around the fullest part of your bust. Waist Measure around the narrowest part of your">
@endsection


@section('content')
  <div id="shopify-section-pages_heading" class="shopify-section page_section_heading">
    <div class="page-head tc pr oh page_head_pages_heading">
      <div class="container pr z_100">
        <h1 class="mb__5 cw">Hướng dẫn chọn size</h1>
      </div>
    </div>
  </div>
  <div class="container mt__60 mb__60">
    <h3 class="tc mg__0 mb__10">Hướng dẫn chọn size</h3>
    <div class="table-responsive">
      <table class="sizeguide_table">
        <thead>
          <tr>
            <th>Size</th>
            <th>US</th>
            <th>Ngực</th>
            <th>Thắt lưng</th>
            <th>Hông</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>XS</td>
            <td>2</td>
            <td>32</td>
            <td>24 - 25</td>
            <td>33 - 34</td>
          </tr>
          <tr>
            <td>S</td>
            <td>4</td>
            <td>34 - 35</td>
            <td>26 - 27</td>
            <td>35 - 26</td>
          </tr>
          <tr>
            <td>M</td>
            <td>6</td>
            <td>36 - 37</td>
            <td>28 - 29</td>
            <td>38 - 40</td>
          </tr>
          <tr>
            <td>L</td>
            <td>8</td>
            <td>38 - 39</td>
            <td>30 - 31</td>
            <td>42 - 44</td>
          </tr>
          <tr>
            <td>XL</td>
            <td>10</td>
            <td>40 - 41</td>
            <td>32 - 33</td>
            <td>45 - 47</td>
          </tr>
          <tr>
            <td>XXL</td>
            <td>12</td>
            <td>42 - 43</td>
            <td>34 - 35</td>
            <td>48 - 50</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="row al_center">
      <div class="col-12 col-md-8">
        <h3 class="sub-head">Mẹo đo</h3>
        <h4 class="headings">Ngực</h4>
        <p>Đo xung quanh phần đầy đủ nhất của ngực.</p>
        <h4 class="headings">Thắt lưng</h4>
        <p>Đo xung quanh phần hẹp nhất của thân.</p>
        <h4 class="headings">Low Hip</h4>
        <p>Hai bàn chân của bạn chạm vào nhau, đo xung quanh phần đầy đủ nhất của hông/phía sau của bạn.</p>
      </div>
      <div class="col-12 col-md-4 tc">
        <img src="{{asset('js')}}/cdn.shopify.com/s/files/5963/size_chart25947.jpg?v=1584502486"
          alt="sizechart kalles">
      </div>
    </div>
  </div>
@endsection



@section('side')
  @include("client.cart-side")
  <div id="nt_login_canvas" class="nt_fk_canvas dn lazyload" data-include="{{route('view-login')}}">
    <div class="lds_bginfinity pr"></div>
  </div>
@endsection