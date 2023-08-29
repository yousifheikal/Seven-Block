@section('title')
    Seven-Block | Home
@stop
<main id="main">

    <div class="whatsapp-btn-container">
        <a class="whatsapp-btn" target="_blank" href="https://wa.me/+966541229209"><i class="fa fa-whatsapp"></i></a>
        <span>@lang('contact_us.Contact us') </span>
    </div>


    <div class="container">

{{--if private or public user check in your code-user --}}
@if(\Illuminate\Support\Facades\Route::has('login'))
    @auth


        @if(\Illuminate\Support\Facades\Auth::user()->code > 0)
            <div class="wrap-main-slide">

                        <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false" >

                            <div class="item-slide">
                                <img src="{{asset('assets/images/projects/16/18.jpg')}}" alt="" class="img-slide" style="height: 700px">
                                <div class="slide-info slide-1">
                                    <h2 class="f-title" style="font-size: 50px">Seven <b style="color: #07b763;"> Blocks </b></h2>
                                    <p class="subtitle" style="">@lang('home.You can now tell the latest updates on your design')</p>
                                    <p class="sale-info"> <span class="price"></span></p>
                                    <a href="{{route('shop')}}" class="btn-link">@lang('home.shop')</a>
                                </div>
                            </div>

                            <div class="item-slide">
                                <img src="{{asset('assets/images/projects/16/3.jpg')}}" alt="" class="img-slide" style="height: 700px">
                                <div class="slide-info slide-1">
                                    <h2 class="f-title" style="font-size: 50px">Seven <b style="color: #07b763;"> Blocks</b></h2>
                                    <p class="subtitle" style="">@lang('home.You can now tell the latest updates on your design')</p>
                                    <p class="sale-info"> <span class="price"></span></p>
                                    <a href="{{route('shop')}}" class="btn-link">@lang('home.shop')</a>
                                </div>
                            </div>

                            <div class="item-slide">
                                <img src="{{asset('assets/images/projects/16/4.jpg')}}" alt="" class="img-slide" style="height: 700px">
                                <div class="slide-info slide-1">
                                    <h2 class="f-title" style="font-size: 50px">Seven <b style="color: #07b763;"> Blocks </b></h2>
                                    <p class="subtitle" style="">@lang('home.You can now tell the latest updates on your design')</p>
                                    <p class="sale-info"> <span class="price"></span></p>
                                    <a href="{{route('shop')}}" class="btn-link">@lang('home.shop')</a>
                                </div>
                            </div>

                        </div>
                    </div>

        @else
            <div class="wrap-main-slide">

                        <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false" >

                                                       <div class="item-slide">
                                <img src="{{asset('assets/images/projects/16/18.jpg')}}" alt="" class="img-slide" style="height: 700px">
                                <div class="slide-info slide-1">
                                    <h2 class="f-title" style="font-size: 50px">Seven <b style="color: #07b763;"> Blocks </b></h2>
                                    <p class="subtitle" style="">@lang('home.You can now tell the latest updates on your design')</p>
                                    <p class="sale-info"> <span class="price"></span></p>
                                    <a href="{{route('shop')}}" class="btn-link">@lang('home.shop')</a>
                                </div>
                            </div>

                            <div class="item-slide">
                                <img src="{{asset('assets/images/projects/16/3.jpg')}}" alt="" class="img-slide" style="height: 700px">
                                <div class="slide-info slide-1">
                                    <h2 class="f-title" style="font-size: 50px">Seven <b style="color: #07b763;"> Blocks</b></h2>
                                    <p class="subtitle" style="">@lang('home.You can now tell the latest updates on your design')</p>
                                    <p class="sale-info"> <span class="price"></span></p>
                                    <a href="{{route('shop')}}" class="btn-link">@lang('home.shop')</a>
                                </div>
                            </div>

                            <div class="item-slide">
                                <img src="{{asset('assets/images/projects/16/4.jpg')}}" alt="" class="img-slide" style="height: 700px">
                                <div class="slide-info slide-1">
                                    <h2 class="f-title" style="font-size: 50px">Seven <b style="color: #07b763;"> Blocks </b></h2>
                                    <p class="subtitle" style="">@lang('home.You can now tell the latest updates on your design')</p>
                                    <p class="sale-info"> <span class="price"></span></p>
                                    <a href="{{route('shop')}}" class="btn-link">@lang('home.shop')</a>
                                </div>
                            </div>

                        </div>
                    </div>
        @endif

    @else
        <div class="wrap-main-slide">

                    <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false" >

                            <div class="item-slide">
                                <img src="{{asset('assets/images/projects/16/18.jpg')}}" alt="" class="img-slide" style="height: 700px">
                                <div class="slide-info slide-1">
                                    <h2 class="f-title" style="font-size: 50px">Seven <b style="color: #07b763;"> Blocks </b></h2>
                                    <p class="subtitle" style="">@lang('home.You can now tell the latest updates on your design')</p>
                                    <p class="sale-info"> <span class="price"></span></p>
                                    <a href="{{route('shop')}}" class="btn-link">@lang('home.shop')</a>
                                </div>
                            </div>

                            <div class="item-slide">
                                <img src="{{asset('assets/images/projects/16/4.jpg')}}" alt="" class="img-slide" style="height: 700px">
                                <div class="slide-info slide-1">
                                    <h2 class="f-title" style="font-size: 50px">Seven <b style="color: #07b763;"> Blocks </b></h2>
                                    <p class="subtitle" style="">@lang('home.You can now tell the latest updates on your design')</p>
                                    <p class="sale-info"> <span class="price"></span></p>
                                    <a href="{{route('shop')}}" class="btn-link">@lang('home.shop')</a>
                                </div>
                            </div>

                            <div class="item-slide">
                                <img src="{{asset('assets/images/projects/16/5.jpg')}}" alt="" class="img-slide" style="height: 700px">
                                <div class="slide-info slide-1">
                                    <h2 class="f-title" style="font-size: 50px">Seven <b style="color: #07b763;"> Blocks </b></h2>
                                    <p class="subtitle" style="">@lang('home.You can now tell the latest updates on your design')</p>
                                    <p class="sale-info"> <span class="price"></span></p>
                                    <a href="{{route('shop')}}" class="btn-link">@lang('home.shop')</a>
                                </div>
                            </div>

                    </div>
                </div>
    @endif
@endif

        <!--BANNER-->
        <div class="wrap-banner style-twin-default">
            <div class="banner-item">
                <a href="{{route('shop')}}" class="link-banner banner-effect-1">
                    <figure><img src="{{asset('assets/images/projects/12/esr restruant-2.jpg')}}" alt="" width="580" height="190"></figure>
                </a>
            </div>
            <div class="banner-item">
                <a href="{{route('shop')}}" class="link-banner banner-effect-1">
                    <figure><img src="{{asset('assets/images/projects/12/esr restruant-1.jpg')}}" alt="" width="580" height="190"></figure>
                </a>
            </div>
        </div>

        <!--On Sale-->


        <div class="wrap-show-advance-info-box style-1 has-countdown">
            <h3 class="title-box" style="background-color: #1B1C1D">@lang('home.ON SALE')</h3>
            <div class="wrap-countdown mercado-countdown" data-expire="2023/8/15 12:34:56"></div>
            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                @foreach($popular_products as $popular_product)
                <div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="{{route('product.details', $popular_product->slug)}}" title="{{$popular_product->name}}">
                            <figure><img src="{{asset('assets/images/projects')}}/{{$popular_product->image}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                        </a>
                        <div class="group-flash">
                            <!--<span class="flash-item sale-label">sale</span>-->
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">quick view</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>{{$popular_product->name}}</span></a>
                        <div class="wrap-price"><span class="product-price"></span></div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>


        <!--Product Categories-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box" style="background-color: #1B1C1D">@lang('home.CATEGORIES')</h3>
            <div class="wrap-top-banner">
                <a href="{{route('shop')}}" class="link-banner banner-effect-2">
                    <figure><img src="{{asset('assets/images/projects/16/19.jpg')}}" width="1170" height="240"  style="height: 500px;" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-control">
                        <a href="#fashion_1a" class="tab-control-item active">Bedroom</a>
                        <a href="#fashion_1b" class="tab-control-item">Lounge</a>
                        <a href="#fashion_1c" class="tab-control-item">Saloon</a>
                        <a href="#fashion_1d" class="tab-control-item">Bathroom</a>
                    </div>
                    <div class="tab-contents">

                        <div class="tab-content-item active" id="fashion_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

                                @foreach($bedrooms as $bedroom)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{route('product.details', $bedroom->slug)}}" title="{{$bedroom->name}}">
                                            <figure><img src="{{asset('assets/images/projects')}}/{{$bedroom->image}}" width="800" height="800" alt="{{$bedroom->name}}"></figure>
                                        </a>
                                        <div class="group-flash">
                                            <!--<span class="flash-item new-label">new</span>-->
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="{{route('product.details', $bedroom->slug)}}" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{route('product.details', $bedroom->slug)}}" class="product-name"><span>{{$bedroom->name}}</span></a>
                                        <div class="wrap-price"><span class="product-price"></span></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>






                        <div class="tab-content-item" id="fashion_1b">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach($lounges as $lounge)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{route('product.details', $lounge->slug)}}" title="{{$lounge->name}}">
                                            <figure><img src="{{asset('assets/images/projects')}}/{{$lounge->image}}" width="800" height="800" alt="{{$lounge->name}}"></figure>
                                        </a>
                                        <div class="group-flash">
                                            <!--<span class="flash-item bestseller-label">{{$lounge->name}}</span>-->
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="{{route('product.details', $lounge->slug)}}" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{route('product.details', $lounge->slug)}}" class="product-name"><span>{{$lounge->name}}</span></a>
                                        <div class="wrap-price"><span class="product-price"></span></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>



                        <div class="tab-content-item" id="fashion_1c">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach($saloons as $saloon)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{route('product.details', $saloon->slug)}}" title="{{$saloon->name}}">
                                            <figure><img src="{{asset('assets/images/projects')}}/{{$saloon->image}}" width="800" height="800" alt="{{$saloon->name}}"></figure>
                                        </a>
                                        <div class="group-flash">
                                            <!--<span class="flash-item new-label">new</span>-->
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="{{route('product.details', $saloon->slug)}}" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{route('product.details', $saloon->slug)}}" class="product-name"><span>{{$saloon->name}}</span></a>
                                        <div class="wrap-price"><span class="product-price"></span></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-content-item" id="fashion_1d">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach($bathrooms as $bathroom)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{route('product.details', $bathroom->slug)}}" title="{{$bathroom->name}}">
                                            <figure><img src="{{asset('assets/images/projects')}}/{{$bathroom->image}}" width="800" height="800" alt="{{$bathroom->name}}"></figure>
                                        </a>
                                        <div class="wrap-btn">
                                            <a href="{{route('product.details', $bathroom->slug)}}" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{route('product.details', $bathroom->slug)}}" class="product-name"><span>{{$bathroom->name}}</span></a>
                                        <div class="product-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="wrap-price"><span class="product-price"></span></div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>
