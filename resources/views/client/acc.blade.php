@extends('layout.client')

@section('head')
  <title>Tài khoản - CPStore</title>
  <meta name="keywords" content="Account,Gecko 5 - The best Shopify theme 2021,gecko5.myshopify.com" />
  <meta name="author" content="The4">
  <meta property="og:site_name" content="Gecko 5 - The best Shopify theme 2021">
  <meta property="og:url" content="https://gecko5.myshopify.com/account">
  <meta property="og:title" content="Account">
  <meta property="og:type" content="website">
  <meta property="og:description"
    content="Gecko Shopify Theme is one of the best Shopify themes in 2020 from The4. It is suitable for online fashion store, handmade store, organic store, furniture store. Gecko is in the top 10 best selling Shopify themes with rated 4.99/5.00 based on nearly 200 reviews. Don't waste time and money, choose gecko today.">
  <meta name="twitter:site" content="@shopify">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Account">
  <meta name="twitter:description"
    content="Gecko Shopify Theme is one of the best Shopify themes in 2020 from The4. It is suitable for online fashion store, handmade store, organic store, furniture store. Gecko is in the top 10 best selling Shopify themes with rated 4.99/5.00 based on nearly 200 reviews. Don't waste time and money, choose gecko today.">
@endsection


@section('content')
  <div id="shopify-section-acc_heading" class="shopify-section page_section_heading">
    <div class="page-head tc pr oh page_head_acc_heading">
      <div class="container pr z_100">
        <h1 class="tu mb__10 cw">Tài khoản của tôi</h1>
      </div>
    </div>
  </div>
  <div class="container mt__60 mb__60">
    <div class="row">

      <div class="col-12 col-md-3 sp-myaccount-sidebar is_sticky_sidebar">
        <nav class="sp-myaccount-nav mb__30 theiaStickySidebar">
          <ul class="ul_none is_sticky_inner">
            <li class="sp-myaccount-nav-link sp-myaccount-nav-link--dashboard is-active pe_none"
              onclick="show('dashboard')">
              <a class="js_add_ld">Trang chính</a>
            </li>
            <li class="sp-myaccount-nav-link sp-myaccount-nav-link--edit-address"
              onclick="show('address')">
              <a class="js_add_ld">Địa chỉ (0)</a>
            </li>
            <li class="sp-myaccount-nav-link sp-myaccount-nav-link--wishlist">
              <a class="js_link_wis" href="{{route('wishlist')}}"
                >Danh sách yêu thích (<span class="jswcount">0</span>)</a>
            </li>
            <li class="sp-myaccount-nav-link sp-myaccount-nav-link--customer-logout">
              <a class="js_add_ld" href="{{route('logout')}}" data-no-instant>Đăng xuất</a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="col-12 col-md-9 sp-myaccount-content is_sticky_content">
        <div id="dashboard" class="theiaStickySidebar">
          <p>Xin chào <strong>huyletran1107@gmail.com</strong>
          <!-- (không phải <strong>huyletran1107@gmail.com</strong>? <a href="/account/logout">Đăng xuất</a>) -->
          </p>
          <p clas="mt__30"><strong>Lịch sử mua hàng</strong></p>
          <div class="shopify-message">
            <i class="facl facl-ok"></i>
            <a href="/collections/all?sort_by=best-selling" class="btn_link fwsb tu mr__10"
              >Thực hiện đơn hàng đầu tiên của bạn</a>
              Bạn chưa đặt bất kỳ đơn hàng nào.</div>
          <p class="mt__40"><strong>Chi tiết tài khoản :</strong></p>
          <div class="table-responsive">
            <table>
              <tbody>
                <tr>
                  <td class="text-left"><strong>Tên:</strong></td>
                  <td>huyletran1107@gmail.com</td>
                </tr>
                <tr>
                  <td class="text-left"><strong>Email:</strong></td>
                  <td>huyletran1107@gmail.com</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        
        <div id="address" class="theiaStickySidebar dn tc">
          <button class="button button_primary address-new-toggle mb__30 tu" id="AddressNewButton"
            aria-expanded="false" aria-owns="AddressNewForm">Thêm địa chỉ mới</button>

          <div id="AddressNewForm" class="mt__40 login-form hide">
            <form method="post" action="" id="address_form_new" accept-charset="UTF-8">
              <input type="hidden" name="form_type" value="customer_address" />
              <input type="hidden" name="utf8" value="✓" />
              <h2>Thêm địa chỉ mới</h2>

              <div class="row mb__30 form-row tl">
                <div class="col-12 col-md-6">
                  <label for="AddressFirstNameNew">Họ</label>
                  <input type="text" id="AddressFirstNameNew" name="address[first_name]"
                    autocomplete="given-name">
                </div>

                <div class="col-12 col-md-6">
                  <label for="AddressLastNameNew">Tên</label>
                  <input type="text" id="AddressLastNameNew" name="address[last_name]"
                    autocomplete="family-name">
                </div>
              </div>

              <p class="form-row tl">
                <label for="AddressCompanyNew">Công ty</label>
                <input type="text" id="AddressCompanyNew" name="address[company]" autocomplete="organization">
              </p>
              <p class="form-row tl">
                <label for="AddressAddress1New">Địa chỉ</label>
                <input type="text" id="AddressAddress1New" name="address[address1]"
                  autocomplete="street-address address-line1">
              </p>
              <p class="form-row tl">
                <label for="AddressAddress2New">Căn hộ, phòng,..</label>
                <input type="text" id="AddressAddress2New" name="address[address2]"
                  autocomplete="street-address address-line2">
              </p>

              <div class="row mb__30 form-row tl">
                <div class="col-12 col-md-6">
                  <label for="AddressCityNew">Tỉnh/Thành</label>
                  <input type="text" id="AddressCityNew" name="address[city]" autocomplete="address-level2">
                </div>

                <div class="col-12 col-md-6">
                  <label for="AddressCountryNew">Quốc gia</label>
                  <select id="AddressCountryNew" name="address[country]"
                    data-default="" autocomplete="country">
                    @include("client.cart-viewship")
                  </select>
                </div>
              </div>

              <p class="form-row tl" id="AddressProvinceContainerNew" style="display:none">
                <label for="AddressProvinceNew">Tỉnh</label>
                <select id="AddressProvinceNew" name="address[province]" data-default=""
                  autocomplete="address-level1"></select>
              </p>
              <p class="form-row tl">
                <label for="AddressZipNew">Mã bưu điện/Zip</label>
                <input type="text" id="AddressZipNew" name="address[zip]"
                  autocapitalize="characters" autocomplete="postal-code">
              </p>
              <p class="form-row tl">
                <label for="AddressPhoneNew">Số điện thoại</label>
                <input type="tel" id="AddressPhoneNew" name="address[phone]" autocomplete="phone">
              </p>
              <input type="checkbox" id="address_default_address_new" name="address[default]" value="1" />
              <label for="address_default_address_new">Đặt làm địa chỉ mặc định</label>
              <br>
              <input type="submit" class="btn mt__20 mb__10 js_add_ld" value="Thêm địa chỉ">
              <br>
              <button class="text-link address-new-toggle">Hủy</button>
            </form>
            <hr>
          </div>

          <ul class="ul_none row login-form pt__20">
            <li class="col-12 tc mb__40">
              <div class="address">
                <h2 class="h4">Mặc định</h2>
                <p>Họ Tên<br>Công ty<br>Địa chỉ<br>Căn hộ<br>Tỉnh Zip<br>Vietnam</p>
                <button id="EditFormButton_7281698603165" class="btn btn--small address-edit-toggle"
                  data-form-id="7281698603165" aria-owns="EditAddress_7281698603165"
                  aria-expanded="false">Chỉnh sửa</button>
                <button class="mt__10 btn btn--secondary btn--small address-delete"
                  data-confirm-message="Are you sure you wish to delete this address?"
                  data-target="">Xóa</button>
              </div>

              <div id="EditAddress_7281698603165" class="login-form mt__50 hide">
                <form method="post" action=""
                  id="address_form_7281698603165" accept-charset="UTF-8">
                  <input type="hidden" name="form_type" value="customer_address">
                  <input type="hidden" name="utf8" value="✓">
                  <h2>Chỉnh sửa địa chỉ</h2>

                  <div class="row mb__30 form-row tl">
                    <div class="col-12 col-md-6">
                      <label for="AddressFirstName_7281698603165">Họ</label>
                      <input type="text" name="address[first_name]" value="d"
                        id="AddressFirstName_7281698603165" autocomplete="given-name">
                    </div>

                    <div class="col-12 col-md-6">
                      <label for="AddressLastName_7281698603165">Tên</label>
                      <input type="text" name="address[last_name]" value="d"
                        id="AddressLastName_7281698603165" autocomplete="family-name">
                    </div>
                  </div>
                  <p class="form-row tl">
                    <label for="AddressCompany_7281698603165">Công ty</label>
                    <input type="text" name="address[company]" value="comp"
                      id="AddressCompany_7281698603165" autocomplete="organization">
                  </p>
                  <p class="form-row tl">
                    <label for="AddressAddress1_7281698603165">Địa chỉ</label>
                    <input type="text" name="address[address1]" value="1"
                      id="AddressAddress1_7281698603165" autocomplete="street-address address-line1">
                  </p>
                  <p class="form-row tl">
                    <label for="AddressAddress2_7281698603165">Căn hộ, phòng,..</label>
                    <input type="text" name="address[address2]" value="3"
                      id="AddressAddress2_7281698603165" autocomplete="street-address address-line2">
                  </p>
                  <div class="row mb__30 form-row tl">
                    <div class="col-12 col-md-6">
                      <label for="AddressCity_7281698603165">Tỉnh/Thành</label>
                      <input type="text" name="address[city]" value="1"
                        id="AddressCity_7281698603165" autocomplete="address-level2">
                    </div>
                    <div class="col-12 col-md-6">
                      <label for="AddressCountry_7281698603165">Quốc gia</label>
                      <select class="address-country-option" data-form-id="7281698603165"
                        id="AddressCountry_7281698603165" name="address[country]"
                        data-default="Vietnam" autocomplete="country">
                        @include("client.cart-viewship")
                      </select>
                    </div>
                  </div>
                  <p class="form-row tl" id="AddressProvinceContainer_7281698603165" style="display:none">
                    <label for="AddressProvince_7281698603165">Tỉnh</label>
                    <select name="address[province]" data-default=""
                      id="AddressProvince_7281698603165" autocomplete="address-level1"></select>
                  </p>

                  <p class="form-row tl">
                    <label for="AddressZip_7281698603165">Mã bưu điện/Zip</label>
                    <input type="text" name="address[zip]" value="3" autocapitalize="characters"
                      id="AddressZip_7281698603165" autocomplete="postal-code">
                  </p>

                  <p class="form-row tl">
                    <label for="AddressPhone_7281698603165">Số điện thoại</label>
                    <input type="tel" name="address[phone]" value="031"
                      id="AddressPhone_7281698603165" autocomplete="phone">
                  </p>
                  <input type="checkbox" name="address[default]" value="1"
                    id="address_default_address_7281698603165">
                  <label for="address_default_address_7281698603165"> Đặt làm địa chỉ mặc định</label>
                  <br>
                  <input type="submit" class="btn mt__20 mb__10 js_add_ld" value="Cập nhật địa chỉ">
                  <br>
                  <button class="text-link address-edit-toggle" data-form-id="7281698603165">Hủy</button>
                  <input type="hidden" name="_method" value="put">
                </form>
                <hr>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <script>
    function show(id) {
      if (id=='dashboard') {
        document.getElementById(id).classList.remove('dn');
        document.getElementById('address').classList.add('dn');
        let s = document.getElementsByClassName('sp-myaccount-nav-link--dashboard')[0];
        let h = document.getElementsByClassName('sp-myaccount-nav-link--edit-address')[0];
        s.classList.add('is-active', 'pe_none');
        h.classList.remove('is-active', 'pe_none');
      } else {
        document.getElementById(id).classList.remove('dn');
        document.getElementById('dashboard').classList.add('dn');
        let s = document.getElementsByClassName('sp-myaccount-nav-link--edit-address')[0];
        let h = document.getElementsByClassName('sp-myaccount-nav-link--dashboard')[0];
        s.classList.add('is-active', 'pe_none');
        h.classList.remove('is-active', 'pe_none');
      }
    }
  </script>
@endsection



@section('side')
  @include("client.cart-side")
@endsection