{{--LTR => RTL--}}
@if(app()->getLocale() == 'en')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
@else
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rtl.css')}}">
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seven-Block | Login or Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo/7b-01.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/chosen.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color-01.css')}}">
    <livewire:styles />
</head>
<style>

</style>
<body class="home-page home-01 ">

<div class="loading">
    <i class="fa fa-spinner fa-spin"></i>
</div>

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
                            <li class="menu-item" >
                                <a title="@lang('header.Hotline'): +966541229209" href="#" ><span class="icon label-before fa fa-mobile"></span>@lang('header.Hotline'): +966541229209</a>
                            </li>
                        </ul>
                    </div>

                    {{--For Language--}}
                    <div class="topbar-menu right-menu">
                        <ul>
                            <li class="menu-item lang-menu menu-item-has-children parent">
                                <a title="@lang('header.Language')" href="#"><span class="img label-before"><img src="{{asset('assets/images/flags/SA.png')}}" alt="lang-en"></span>@lang('header.Language')<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="submenu lang" >
                                    <li class="menu-item" >
                                        <a title="@lang('header.Arabic')" href="locale/ar"><span class="img label-before"><img src="{{asset('assets/images/flags/SA.png')}}" alt="lang-hun"></span>@lang('header.Arabic')</a>
                                    </li>
                                    <li class="menu-item" ><a title="@lang('header.English')" href="locale/en"><span class="img label-before"><img src="{{asset('assets/images/flags/US.png')}}" alt="lang-hun"></span>@lang('header.English')</a></li>
                                </ul>
                            </li>

                            {{--Login & Dashboard permitions--}}
                            @if(\Illuminate\Support\Facades\Route::has('login'))
                                @auth
                                    @if(\Illuminate\Support\Facades\Auth::user()->utype === 'ADM')
                                        <li class="menu-item menu-item-has-children parent" >
                                            <a title="@lang('header.My_Account')" href="#">@lang('header.My_Account') ({{\Illuminate\Support\Facades\Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency" >
                                                <li class="menu-item" >
                                                    <a title="@lang('header.Dashboard')" href="{{route('dashboard.admin')}}">@lang('header.Dashboard')</a>
                                                </li>

                                                <li class="menu-item" >
                                                    <a title="@lang('header.chat')" href="/chatify">@lang('header.chat')</a>
                                                </li>

                                                <li class="menu-item" >
                                                    <a title="@lang('header.Sections')" href="/">@lang('header.Sections')</a>
                                                </li>

                                                <li class="menu-item" >
                                                    <a title="@lang('header.Logout')" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >@lang('header.Logout')</a>
                                                </li>
                                                <form id="logout-form" action="{{route('logout')}}" method="post">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </li>

                                    @elseif(\Illuminate\Support\Facades\Auth::user()->utype === 'EMP')
                                        <li class="menu-item menu-item-has-children parent" >
                                            <a title="@lang('header.My_Account')" href="#">@lang('header.My_Account') ({{\Illuminate\Support\Facades\Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency" >
                                                <li class="menu-item" >
                                                    <a title="@lang('header.Dashboard')" href="{{route('dashboard.employee')}}">@lang('header.Dashboard')</a>
                                                </li>

                                                <li class="menu-item" >
                                                    <a title="@lang('header.chat')" href="/chatify">@lang('header.chat')</a>
                                                </li>

                                                <li class="menu-item" >
                                                    <a title="@lang('header.Sections')" href="/">@lang('header.Sections')</a>
                                                </li>

                                                <li class="menu-item" >
                                                    <a title="@lang('header.Logout')" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >@lang('header.Logout')</a>
                                                </li>
                                                <form id="logout-form" action="{{route('logout')}}" method="post">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </li>

                                    @else
                                        <li class="menu-item menu-item-has-children parent" >
                                            <a title="My Account" href="#">My Account ({{\Illuminate\Support\Facades\Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency" >
{{--                                                <li class="menu-item" >--}}
{{--                                                    <a title="Dashboard" href="{{route('user.dashboard')}}">Dashboard</a>--}}
{{--                                                </li>--}}

                                                <li class="menu-item" >
                                                    <a title="@lang('header.Sections')" href="/">@lang('header.Sections')</a>
                                                </li>

                                                <li class="menu-item" >
                                                    <a title="@lang('header.Logout')" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >@lang('header.Logout')</a>
                                                </li>
                                                <form id="logout-form" action="{{route('logout')}}" method="post">
                                                    @csrf
                                                </form>

                                            </ul>
                                        </li>

                                    @endif
                                @else
                                    <li class="menu-item" ><a title="@lang('header.login')" href="{{route('login')}}">@lang('header.login')</a></li>
                                    <li class="menu-item" ><a title="@lang('header.register')" href="{{route('register')}}">@lang('header.register')</a></li>
                                @endif
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="mid-section main-info-area">

                    <div class="wrap-logo-top left-section">
                        <a href="{{route('home')}}" class="link-to-home"><img src="{{asset('assets/images/logo/logo.png')}}" alt="mercado" style="height: 180px;width: 190px"></a>
                    </div>

                    @livewire('header-search-component')

                    <div class="wrap-icon right-section">
                        <div class="wrap-icon-section wishlist">
                            <a href="{{route('product.wishlist')}}" class="link-direction">
                                @if(Cart::instance('wishlist')->count() > 0)
                                    <i class="fa fa-heart" aria-hidden="true" style="color: red"></i>
                                @else
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                @endif

                                <div class="left-info">
                                    @if(Cart::instance('wishlist')->count() > 0)
                                        <span class="index">{{Cart::instance('wishlist')->count()}} @lang('header.items')</span>
                                    @else
                                        <span class="index">0 @lang('header.items')</span>
                                    @endif
                                    <span class="title">@lang('header.Wishlist')</span>
                                </div>
                            </a>
                        </div>
                        <div class="wrap-icon-section minicart">
                            <a href="{{route('product.cart')}}" class="link-direction">

                                @if(Cart::instance('cart')->count() > 0)
                                    <i class="fa fa-shopping-basket" aria-hidden="true" style="color: #07b763"></i>
                                @else
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                @endif
                                <div class="left-info">

                                    @if(Cart::instance('cart')->count() > 0)
                                        <span class="index">{{Cart::instance('cart')->count()}} @lang('header.items')</span>
                                    @else
                                        <span class="index">0 @lang('header.items')</span>
                                    @endif
                                        <span class="title">@lang('header.Cart')</span>
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
                        <ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
                            <li class="menu-item"><a href="{{'shop'}}" class="link-term">@lang('header.Weekly_Featured')</a><span class="nav-label hot-label">@lang('header.hot')</span></li>
                            <li class="menu-item"><a href="{{'shop'}}" class="link-term">@lang('header.Hot_Sale_items')</a><span class="nav-label hot-label">@lang('header.hot')</span></li>
                            <li class="menu-item"><a href="{{'shop'}}" class="link-term">@lang('header.Top_new_items')</a><span class="nav-label hot-label">@lang('header.hot')</span></li>
                            <li class="menu-item"><a href="{{'shop'}}" class="link-term">@lang('header.Top_Selling')</a><span class="nav-label hot-label">@lang('header.hot')</span></li>
                            <li class="menu-item"><a href="{{'shop'}}" class="link-term">@lang('header.Top_rated_items')</a><span class="nav-label hot-label">@lang('header.hot')</span></li>
                        </ul>
                    </div>
                </div>


                <div class="primary-nav-section">
                    <div class="container">
                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
                            <li class="menu-item home-icon">
                                <a href="{{route('home')}}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('shop')}}" class="link-term mercado-item-title">@lang('header.shop')</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('product.cart')}}" class="link-term mercado-item-title">@lang('header.Cart')</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('product.wishlist')}}" class="link-term mercado-item-title">@lang('header.Wishlist')</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('checkout')}}" class="link-term mercado-item-title">@lang('header.reservation')</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('ContactUs')}}" class="link-term mercado-item-title">@lang('header.Contact_Us')</a>
                            </li>

                            {{--Show private projects--}}

                                        <li class="menu-item">
                                            <a href="/" class="link-term mercado-item-title">@lang('header.Sections')</a>
                                        </li>


                        </ul>
                    </div>
                </div>

        </div>
    </div>
    </div>
</header>

{{$slot}}

<footer id="footer" style="margin-top: 40px;">

    <div class='container'>
        <div class="wrapper">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <div class="carousel">
                <a href='{{asset('assets/images/projects/1.jpg')}}' target='_blank'>
                    <img src="{{asset('assets/images/projects/1.jpg')}}" alt="img" draggable="false">
                </a>

                <a href='{{asset('assets/images/projects/2.jpg')}}' target='_blank'>
                    <img src="{{asset('assets/images/projects/2.jpg')}}" alt="img" draggable="false">
                </a>

                <a href='{{asset('assets/images/projects/3.jpg')}}' target='_blank'>
                    <img src="{{asset('assets/images/projects/3.jpg')}}" alt="img" draggable="false">
                </a>

                <a href='{{asset('assets/images/projects/4.jpg')}}' target='_blank'>
                    <img src="{{asset('assets/images/projects/4.jpg')}}" alt="img" draggable="false">
                </a>

                <a href='{{asset('assets/images/projects/5.jpg')}}' target='_blank'>
                    <img src="{{asset('assets/images/projects/5.jpg')}}" alt="img" draggable="false">
                </a>

                <a href='{{asset('assets/images/projects/6.jpg')}}' target='_blank'>
                    <img src="{{asset('assets/images/projects/6.jpg')}}" alt="img" draggable="false">
                </a>

                <a href='{{asset('assets/images/projects/7.jpg')}}' target='_blank'>
                    <img src="{{asset('assets/images/projects/7.jpg')}}" alt="img" draggable="false">
                </a>

            </div>
            <i id="right" class="fa-solid fa-angle-right"></i>
        </div>
    </div>

    <div class="wrap-footer-content footer-style-1">

        <div class="wrap-function-info">

            <div class="container">
                <ul>

                    <li class="fc-info-item">
                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">@lang('footer.Cart')</h4>
                        </div>
                    </li>

                    <li class="fc-info-item">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">@lang('footer.Wishlist')</h4>
                        </div>

                    </li>
                    <li class="fc-info-item">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">@lang('footer.Contact_Us')</h4>
                        </div>

                    </li>
                    <li class="fc-info-item">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">@lang('footer.shop')</h4>
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
                            <h3 class="item-header">@lang('footer.Contact_Details')</h3>
                            <div class="item-content">
                                <div class="wrap-contact-detail">
                                    <ul>
                                        <li>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="contact-txt">@lang('footer.Dammam, Al-Azizia, Al-Faisal Business Center, third floor')</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="contact-txt">+ 966541229209</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="contact-txt">@lang('footer.Contact')@yourcompany.com</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                        <div class="wrap-footer-item">
                            <h3 class="item-header">@lang('footer.Hotline')</h3>
                            <div class="item-content">
                                <div class="wrap-hotline-footer">
                                    <span class="desc">@lang('footer.Call_Us_toll')</span>
                                    <b class="phone-number">+ 966541229209</b>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
                        <div class="row">
                            <div class="wrap-footer-item twin-item">
                                <h3 class="item-header">@lang('footer.Account')</h3>
                                <div class="item-content">
                                    <div class="wrap-vertical-nav">
                                        <ul>
                                            <li class="menu-item"><a href="{{route('login')}}" class="link-term">@lang('footer.login')</a></li>
                                            <li class="menu-item"><a href="{{route('register')}}" class="link-term">@lang('footer.register')</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-footer-item twin-item">
                                <h3 class="item-header">@lang('footer.info')</h3>
                                <div class="item-content">
                                    <div class="wrap-vertical-nav">
                                        <ul>
                                            <li class="menu-item"><a href="{{route('ContactUs')}}" class="link-term">@lang('footer.Contact_Us')</a></li>
                                            <li class="menu-item"><a href="{{route('checkout')}}" class="link-term">@lang('footer.reservation')</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">


                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12" style="margin-bottom: 10px">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">@lang('footer.Social_network')</h3>
                            <div class="item-content">
                                <div class="wrap-list-item social-network">
                                    <ul>
                                        <li><a href="#" target="_blank" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com/seve.nblocks/" target="_blank" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>

        <div class="coppy-right-box">
            <div class="container">
                <div class="coppy-right-item item-left">
                    <p class="coppy-right-text">@lang('footer.Copyright') © 2023 <a href="https://www.linkedin.com/in/yousif-heikal-3833a8243/">@lang('footer.yousif')</a>. @lang('footer.All rights reserved')</p>
                </div>
                <div class="coppy-right-item item-right">
                    <div class="wrap-nav horizontal-nav">
                        <ul>
                            <li class="menu-item"><a  class="link-term">@lang('footer.About us')</a></li>
                            <li class="menu-item"><a class="link-term">@lang('footer.Privacy Policy')</a></li>
                            <li class="menu-item"><a  class="link-term">@lang('footer.Terms & Conditions')</a></li>
                            <li class="menu-item"><a  class="link-term">@lang('footer.Return Policy')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
<script src="{{asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
<script src="{{asset('assets/js/chosen.jquery.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>
<script src="{{asset('assets/js/wrapper.js')}}"></script>

<!--loading-->
<script>
    $(window).on('load', function() {
        $(".loading").fadeOut(500);
    });
</script>


<!--show password from icon Eye-->
<script>
    $("#toggle-password").click(function() {
        var input = $("#password-input");
        if (input.attr("type") === "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

</script>

<livewire:scripts />
</body>
</html>
