<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    <style>
        .logout-form {
            padding-left: 18px;
            border: none;
            background: none;
        }

        .logout-form__text:hover {
            color: red;
        }
    </style>
    @livewireStyles
</head>

<body class="home-page home-01 ">

    <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    <!--header-->
    <header id="header" class="header header-style-1">
        <div class="container-fluid">
            <div class="row">
                <div class="topbar-menu-area">
                    <div class="container">
                        <div class="topbar-menu left-menu">
                            <ul>
                                <li class="menu-item">
                                    <a title="Hotline: (+123) 456 789" href="#"><span
                                            class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
                                </li>
                            </ul>
                        </div>
                        <div class="topbar-menu right-menu">
                            <ul>
                                @if(Auth::check())
                                <li class="menu-item">
                                    <a title="Profile" href="{{ url('user/profile') }}">
                                        <img src="{{ Auth::user()->profile_photo_url }}" style="width:20px; height:20px" alt="">
                                        <span>Thông Tin Cá Nhân</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <form action="{{ url('logout') }}" class="menu-item" method="POST">
                                        @csrf
                                        <button class="logout-form" type="submit">
                                            <span class="logout-form__text" title="Logout">Đăng Xuất</span>
                                        </button>
                                    </form>
                                </li>
                                @else
                                <li class="menu-item"><a title="Register or Login" href="{{ route('login') }}">Đăng nhập</a>
                                </li>
                                <li class="menu-item"><a title="Register or Login"
                                        href="{{ route('register') }}">Đăng ký</a></li>
                                @endif
                                {{-- <li class="menu-item lang-menu menu-item-has-children parent">
                                    <a title="English" href="#"><span class="img label-before"><img
                                                src=" {{ asset('assets/images/lang-en.png') }}"
                                                alt="lang-en"></span>English<i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="submenu lang">
                                        <li class="menu-item"><a title="hungary" href="#"><span
                                                    class="img label-before"><img
                                                        src=" {{ asset('assets/images/lang-hun.png') }}"
                                                        alt="lang-hun"></span>Hungary</a></li>
                                        <li class="menu-item"><a title="german" href="#"><span
                                                    class="img label-before"><img
                                                        src=" {{ asset('assets/images/lang-ger.png') }}"
                                                        alt="lang-ger"></span>German</a></li>
                                        <li class="menu-item"><a title="french" href="#"><span
                                                    class="img label-before"><img
                                                        src=" {{ asset('assets/images/lang-fra.png') }}"
                                                        alt="lang-fre"></span>French</a></li>
                                        <li class="menu-item"><a title="canada" href="#"><span
                                                    class="img label-before"><img
                                                        src=" {{ asset('assets/images/lang-can.png') }}"
                                                        alt="lang-can"></span>Canada</a></li>
                                    </ul>
                                </li> --}}
                                {{-- <li class="menu-item menu-item-has-children parent">
                                    <a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="submenu curency">
                                        <li class="menu-item">
                                            <a title="Pound (GBP)" href="#">Pound (GBP)</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Euro (EUR)" href="#">Euro (EUR)</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Dollar (USD)" href="#">Dollar (USD)</a>
                                        </li>
                                    </ul>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="mid-section main-info-area">

                        <div class="wrap-logo-top left-section">
                            <a href="/" class="link-to-home"><img
                                    src=" {{ asset('assets/images/logo-top-1.png') }}" alt="mercado"></a>
                        </div>

                        @livewire('header-search-component')

                        <div class="wrap-icon right-section">
                            {{-- <div class="wrap-icon-section wishlist">
                                <a href="#" class="link-direction">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <div class="left-info">
                                        <span class="index">0 sản phẩm</span>
                                        <span class="title">YÊU THÍCH</span>
                                    </div>
                                </a>
                            </div> --}}
                            <div class="wrap-icon-section minicart">
                                <a href="{{ url('/Cart') }}" class="link-direction">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    <div class="left-info">
                                        <span class="index">GIỎ HÀNG</span>
                                        {{-- @if($totalQuanty){
                                            <span class="index">{{$totalQuanty}} sản phẩm</span>
                                        }else{
                                            <span class="index">0 sản phẩm</span>
                                        }
                                        @endif --}}
                                        {{-- <span class="index">0 sản phẩm</span> --}}
                                       
                                        {{-- <span class="title">GIỎ HÀNG</span> --}}
                                    </div>
                                </a>
                            </div>
                            <div class="wrap-icon-section show-up-after-1024">
                                <a href="#" class="mobile-navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="nav-section header-sticky">
                    <div class="header-nav-section">
                        <div class="container">
                            <ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info">
                                <li class="menu-item"><a href="#" class="link-term">Nổi bật tuần này</a><span
                                        class="nav-label hot-label">hot</span></li>
                                <li class="menu-item"><a href="#" class="link-term">Sản phẩm hot</a><span
                                        class="nav-label hot-label">hot</span></li>
                                <li class="menu-item"><a href="#" class="link-term">Sản phẩm mới</a><span
                                        class="nav-label hot-label">hot</span></li>
                                <li class="menu-item"><a href="#" class="link-term">Sản phẩm bán chạy</a><span
                                        class="nav-label hot-label">hot</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="primary-nav-section">
                        <div class="container">
                            <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                                <li class="menu-item home-icon">
                                    <a href="/" class="link-term mercado-item-title"><i class="fa fa-home"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="link-term mercado-item-title">Về Chúng Tôi</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/shop" class="link-term mercado-item-title">Shop</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ url('/Cart') }}" class="link-term mercado-item-title">Giỏ hàng</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="link-term mercado-item-title">Liên Hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{$slot}}

    <footer id="footer">
        <div class="wrap-footer-content footer-style-1">

            <div class="wrap-function-info">
                <div class="container">
                    <ul>
                        <li class="fc-info-item">
                            <i class="fa fa-truck" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Free Shipping</h4>
                                <p class="fc-desc">Miễn phí đơn từ 300.000vnđ</p>
                            </div>

                        </li>
                        <li class="fc-info-item">
                            <i class="fa fa-recycle" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Bảo hành</h4>
                                <p class="fc-desc">7 ngày đổi trả</p>
                            </div>

                        </li>
                        <li class="fc-info-item">
                            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Thanh toán an toàn</h4>
                                <p class="fc-desc">Hỗ trợ thanh toán trực tuyến</p>
                            </div>

                        </li>
                        <li class="fc-info-item">
                            <i class="fa fa-life-ring" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Hỗ trợ online</h4>
                                <p class="fc-desc">Chúng tôi hỗ trợ 24/7</p>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
            <!--End function info-->

            <div class="main-footer-content">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Chi tiết liên hệ</h3>
                                <div class="item-content">
                                    <div class="wrap-contact-detail">
                                        <ul>
                                            <li>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <p class="contact-txt">1 Đại Cồ Việt, phường Bách Khoa, quận Hai Bà Trưng, Hà Nội</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <p class="contact-txt">(+123) 456 789 - (+123) 666 888</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                <p class="contact-txt">hoang.dh194571@sis.hust.edu.vn</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                            <div class="wrap-footer-item">
                                <h3 class="item-header">hotline</h3>
                                <div class="item-content">
                                    <div class="wrap-hotline-footer">
                                        <span class="desc">Liên hệ tại</span>
                                        <b class="phone-number">(+123) 456 789 - (+123) 666 888</b>
                                    </div>
                                </div>
                            </div>

                            <div class="wrap-footer-item footer-item-second">
                                <h3 class="item-header">Đăng ký nhận bản tin</h3>
                                <div class="item-content">
                                    <div class="wrap-newletter-footer">
                                        <form action="#" class="frm-newletter" id="frm-newletter">
                                            <input type="email" class="input-email" name="email" value=""
                                                placeholder="Nhập địa chỉ email của bạn">
                                            <button class="btn-submit">Đăng ký</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
                            <div class="row">
                                <div class="wrap-footer-item twin-item">
                                    <h3 class="item-header">Tài Khoản</h3>
                                    <div class="item-content">
                                        <div class="wrap-vertical-nav">
                                            <ul>
                                                <li class="menu-item"><a href="#" class="link-term">Tài Khoản</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Thương Hiệu</a>
                                                </li>
                                                <li class="menu-item"><a href="#" class="link-term">Phiếu Quà Tặng</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Tiếp thị liên kết</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Yêu thích</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-footer-item twin-item">
                                    <h3 class="item-header">Thông Tin</h3>
                                    <div class="item-content">
                                        <div class="wrap-vertical-nav">
                                            <ul>
                                                <li class="menu-item"><a href="#" class="link-term">Liên Hệ Chúng Tôi</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Đổi Trả</a>
                                                </li>
                                                <li class="menu-item"><a href="#" class="link-term">Bản Đồ Địa Chỉ</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Đặc Biệt</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Lịch Sử Đơn Hàng</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Chúng Tôi Sử Dụng Phương Thức Thanh Toán:</h3>
                                <div class="item-content">
                                    <div class="wrap-list-item wrap-gallery">
                                        <img src=" {{ asset('assets/images/payment.png') }}" style="max-width: 260px;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Mạng Xã Hội</h3>
                                <div class="item-content">
                                    <div class="wrap-list-item social-network">
                                        <ul>
                                            <li><a href="#" class="link-to-item" title="twitter"><i
                                                        class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="facebook"><i
                                                        class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="pinterest"><i
                                                        class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="instagram"><i
                                                        class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Tải Ứng Dụng</h3>
                                <div class="item-content">
                                    <div class="wrap-list-item apps-list">
                                        <ul>
                                            <li><a href="#" class="link-to-item" title="our application on apple store">
                                                    <figure><img
                                                            src=" {{ asset('assets/images/brands/apple-store.png') }}"
                                                            alt="apple store" width="128" height="36"></figure>
                                                </a></li>
                                            <li><a href="#" class="link-to-item"
                                                    title="our application on google play store">
                                                    <figure><img
                                                            src=" {{ asset('assets/images/brands/google-play-store.png') }}"
                                                            alt="google play store" width="128" height="36">
                                                    </figure>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="wrap-back-link">
                    <div class="container">
                        <div class="back-link-box">
                            {{-- <h3 class="backlink-title">Quick Links</h3>
                            <div class="back-link-row">
                                <ul class="list-back-link">
                                    <li><span class="row-title">Mobiles:</span></li>
                                    <li><a href="#" class="redirect-back-link" title="mobile">Mobiles</a></li>
                                    <li><a href="#" class="redirect-back-link" title="yphones">YPhones</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Gianee Mobiles GL">Gianee
                                            Mobiles GL</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Karbonn">Mobiles
                                            Karbonn</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Viva">Mobiles
                                            Viva</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Intex">Mobiles
                                            Intex</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Micrumex">Mobiles
                                            Micrumex</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Bsus">Mobiles
                                            Bsus</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Samsyng">Mobiles
                                            Samsyng</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Lenova">Mobiles
                                            Lenova</a></li>
                                </ul>

                                <ul class="list-back-link">
                                    <li><span class="row-title">Tablets:</span></li>
                                    <li><a href="#" class="redirect-back-link" title="Plesc YPads">Plesc
                                            YPads</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Samsyng Tablets">Samsyng
                                            Tablets</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Qindows Tablets">Qindows
                                            Tablets</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Calling Tablets">Calling
                                            Tablets</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Micrumex Tablets">Micrumex
                                            Tablets</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Lenova Tablets Bsus">Lenova
                                            Tablets Bsus</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Tablets iBall">Tablets
                                            iBall</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Tablets Swipe">Tablets
                                            Swipe</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Tablets TVs, Audio">Tablets TVs,
                                            Audio</a></li>
                                </ul>

                                <ul class="list-back-link">
                                    <li><span class="row-title">Fashion:</span></li>
                                    <li><a href="#" class="redirect-back-link" title="Sarees Silk">Sarees
                                            Silk</a></li>
                                    <li><a href="#" class="redirect-back-link" title="sarees Salwar">sarees
                                            Salwar</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Suits Lehengas">Suits
                                            Lehengas</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Biba Jewellery">Biba
                                            Jewellery</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Rings Earrings">Rings
                                            Earrings</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Diamond Rings">Diamond
                                            Rings</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Loose Diamond Shoes">Loose Diamond
                                            Shoes</a></li>
                                    <li><a href="#" class="redirect-back-link" title="BootsMen Watches">BootsMen
                                            Watches</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Women Watches">Women
                                            Watches</a></li>
                                </ul>

                            </div>--}}
                        </div>
                    </div>
                </div>

            </div>

            <div class="coppy-right-box">
                <div class="container">
                    <div class="coppy-right-item item-left">
                        <p class="coppy-right-text">Copyright © 2023 HuyHoang Media. All rights reserved</p>
                    </div>
                    <div class="coppy-right-item item-right">
                        <div class="wrap-nav horizontal-nav">
                            <ul>
                                <li class="menu-item"><a href="about-us.html" class="link-term">Về Chúng Tôi</a></li>
                                <li class="menu-item"><a href="privacy-policy.html" class="link-term">Chính Sách Bảo Mật</a></li>
                                <li class="menu-item"><a href="terms-conditions.html" class="link-term">Điểu Khoản Và Điều Kiện</a></li>
                                <li class="menu-item"><a href="return-policy.html" class="link-term">Chính Sách Đổi Trả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset ('assets/js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
    @livewireScripts
</body>

</html>
