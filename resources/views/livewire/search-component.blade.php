<!--main area-->
@section('title')
    Seven-Block | Search
@stop

<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{route('home')}}" class="link">home</a></li>
                <li class="item-link"><span>Shop</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                <div class="banner-shop">
                    <a href="#" class="banner-link">
                        <figure><img src="assets/images/projects/living_room_banner.jpg" alt=""></figure>
                    </a>
                </div>

                <div class="wrap-shop-control">

                    <h1 class="shop-title">All Designing</h1>

                    <div class="wrap-right">


                        {{--                        <form action="" method="post">--}}

                        {{--                            <div class="sort-item orderby ">--}}
                        {{--                                <select name="orderby" class="use-chosen" >--}}
                        {{--                                    <option value="default" selected="selected">Default sorting</option>--}}
                        {{--                                    <option value="date">Sort by newness</option>--}}
                        {{--                                    <option value="price">Sort by price: low to high</option>--}}
                        {{--                                    <option value="price-desc">Sort by price: high to low</option>--}}
                        {{--                                </select>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="sort-item product-per-page">--}}
                        {{--                                <select name="post-per-page" class="use-chosen" >--}}
                        {{--                                    <option value="12" selected="selected">12 per page</option>--}}
                        {{--                                    <option value="16">16 per page</option>--}}
                        {{--                                    <option value="18">18 per page</option>--}}
                        {{--                                    <option value="21">21 per page</option>--}}
                        {{--                                    <option value="24">24 per page</option>--}}
                        {{--                                    <option value="30">30 per page</option>--}}
                        {{--                                    <option value="32">32 per page</option>--}}
                        {{--                                </select>--}}
                        {{--                            </div>--}}


                        {{--                        <div class="change-display-mode">--}}
                        {{--                            <a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>--}}
                        {{--                            <a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>--}}
                        {{--                        </div>--}}

                    </div>
                </div><!--end wrap shop control-->

                @if($products->count() > 0)
                <div class="row">

                    <ul class="product-list grid-products equal-container">

                        @foreach($products as $product)

                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{route('product.details', $product->slug)}}" title="{{$product->name}}">
                                            <figure><img src="{{asset('assets/images/projects')}}/{{$product->image}}" alt="{{$product->name}}"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{route('product.details', $product->slug)}}" class="product-name"><span>{{$product->name}}</span></a>
                                        <div class="wrap-price"><span class="product-price">{{$product->regular_price}}</span></div>
                                        <a href="{{route('product.details', $product->slug)}}" class="btn add-to-cart">Display</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
                @else
                    <div class="text-center" style="padding: 30px 0;">
                        <h1>Ooops !</h1>
                        <p>No have any item</p>
                        <a href="{{route('shop')}}" class="btn btn-success">Show Now</a>
                    </div>
                @endif

                <div class="wrap-pagination-info">
                    {{$products->links()}}
                    {{--                    <ul class="page-numbers">--}}
                    {{--                        <li><span class="page-number-item current" >1</span></li>--}}
                    {{--                        <li><a class="page-number-item" href="#" >2</a></li>--}}
                    {{--                        <li><a class="page-number-item" href="#" >3</a></li>--}}
                    {{--                        <li><a class="page-number-item next-link" href="#" >Next</a></li>--}}
                    {{--                    </ul>--}}
                    {{--                    <p class="result-count">Showing 1-8 of 12 result</p>--}}
                </div>
            </div><!--end main products area-->


            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget mercado-widget categories-widget">
                    <h2 class="widget-title">All Categories</h2>
                    <div class="widget-content">
                        <ul class="list-category">
                            @foreach($categories as $category)
                                <li class="category-item">
                                    <a href="{{route('product.category', $category->slug)}}" class="cate-link">{{$category->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div><!-- Categories widget-->


                {{--                <div class="widget mercado-widget filter-widget">--}}
                {{--                    <h2 class="widget-title">Size</h2>--}}
                {{--                    <div class="widget-content">--}}
                {{--                        <ul class="list-style inline-round ">--}}
                {{--                            <li class="list-item"><a class="filter-link active" href="#">Bedroom</a></li>--}}
                {{--                            <li class="list-item"><a class="filter-link " href="#">M</a></li>--}}
                {{--                            <li class="list-item"><a class="filter-link " href="#">l</a></li>--}}
                {{--                            <li class="list-item"><a class="filter-link " href="#">xl</a></li>--}}
                {{--                        </ul>--}}
                {{--                        <div class="widget-banner">--}}
                {{--                            <figure><img src="{{asset('assets/images/logo/logo.png')}}" width="270" height="331" alt=""></figure>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div><!-- Size -->--}}

                <div class="widget mercado-widget widget-product">
                    <h2 class="widget-title">Popular Products</h2>
                    <div class="widget-content">
                        <ul class="products">
                            @foreach($popular_products as $popular_product)

                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="{{route('product.details', $popular_product->slug)}}" title="{{$popular_product->name}}">
                                                <figure><img src="{{asset('assets/images/projects')}}/{{$popular_product->image}}" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('product.details', $popular_product->slug)}}" class="product-name"><span>{{$popular_product->name}}</span></a>
                                            <div class="wrap-price"><span class="product-price">{{$popular_product->regular_price}}</span></div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div><!-- brand widget-->

            </div><!--end sitebar-->

        </div><!--end row-->

    </div><!--end container-->


</main>
<!--main area-->

