<!--main area-->
@section('title')
    Seven-Block | Design-Details
@stop

<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">

            <div class="wrap-show-advance-info-box style-1">
{{--                <h3 class="title-box">Latest Products </h3>--}}
                <div class="wrap-top-banner">
                    <a href="#" class="link-banner banner-effect-2">
                        <a href="{{route('shop')}}">
                            <figure><img src="{{asset('assets/images/projects')}}/{{$product->image}}" width="1170" height="240" alt="" style="height: 600px;border-radius: 10px"></figure>
                        </a>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="wrap-product-detail">
                    <div class="detail-media">
                        <div class="product-gallery">
                            <ul >

                                <li data-thumb="{{asset('assets/images/projects')}}/{{$product->image}}">
                                    <a href="{{asset('assets/images/projects')}}/{{$product->image}}" target="_blank" >
                                        <img src="{{asset('assets/images/projects')}}/{{$product->image}}" alt="product thumbnail" style="height: 400px;border-radius: 10px" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="detail-info">
                        <div class="product-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <a href="#" class="count-review">(04 @lang('details.review'))</a>
                        </div>
                        <h2 class="product-name">{{$product->name}}</h2>
                        <div class="short-desc">@lang('details.txt') <a href="{{route('ContactUs')}}" style="color: #00bf3f">@lang('details.Contact_Us')</a>
                        </div>
                        <div class="wrap-social">
                            <a class="link-socail" href="#"><img src="{{asset('assets/images/social-list.png')}}" alt=""></a>
                        </div>
                        <div class="wrap-price"><span class="product-price"></span></div>
                        <div class="stock-info in-stock">
                            @if($product->stock_status == 'instock')
                                <p class="availability">@lang('details.Availability'): <b style="color: #00bf3f">{{$product->stock_status}}</b></p>
                            @else
                                <p class="availability">@lang('details.Availability'): <b>{{$product->stock_status}}</b></p>
                            @endif
                        </div>

{{--                        <div class="quantity">--}}
{{--                            <span>Quantity:</span>--}}
{{--                            <div class="quantity-input">--}}
{{--                                <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >--}}

{{--                                <a class="btn btn-reduce" href="#"></a>--}}
{{--                                <a class="btn btn-increase" href="#"></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        @php--}}
{{--                            $witems = \Gloudemans\Shoppingcart\Facades\Cart::instance('wishlist')->content()->pluck('id');--}}
{{--                        @endphp--}}
                        <div class="wrap-butons">
                            <a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}', {{$product->regular_price}} )">@lang('details.Add to Cart')</a>

{{--                            <div class="wrap-btn">--}}
{{--                                <a href="#" class="btn btn-compare">Add Compare</a>--}}

{{--                                @if($witems->contains($product->id))--}}
{{--                                    <a href="#" class="btn btn-wishlist" wire:click.prevent="removeFromWishlist({{$product->id}})" style="color: red; ">Add Wishlist</a>--}}

{{--                                @else--}}
{{--                                    <a href="#" class="btn btn-wishlist" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}', {{$product->regular_price}})"></a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="advance-info">
                        <div class="tab-control normal">
                            <a href="#description" class="tab-control-item active">@lang('details.description')</a>
                            <a href="#add_infomation" class="tab-control-item">@lang('details.Important Information')</a>
                            <a href="#review" class="tab-control-item">@lang('details.review')</a>
                        </div>
                        <div class="tab-contents">
                            <div class="tab-content-item active" id="description">
                                {{$product->description}}
                            </div>
                            <div class="tab-content-item " id="add_infomation">
                                <table class="shop_attributes">
                                    <tbody>
                                    <th>@lang('details.Building')</th><td class="product_weight">
                                        <a href="{{asset('assets/images/pdf/new_classic.pdf')}}" target="_blank">
                                            click her
                                            <img src="{{asset('assets/images/file-icon/PDF.png')}}" alt="not-found">
                                        </a>
                                    </td>

                                    <tr>
                                        <th>@lang('details.Move')</th><td class="product_dimensions">
                                            <a href="{{asset('assets/images/pdf/new.pdf')}}" target="_blank">
                                                click her
                                                <img src="{{asset('assets/images/file-icon/PDF.png')}}" alt="not-found">                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>@lang('details.Furniture')</th><td class="product_dimensions">
                                            <a href="{{asset('assets/images/pdf/new_classic.pdf')}}" target="_blank">
                                                click her
                                                <img src="{{asset('assets/images/file-icon/PDF.png')}}"  alt="not-found">                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>@lang('details.Building Stage')</th><td class="product_dimensions">
                                            <a href="{{asset('assets/images/pdf/new_classic.pdf')}}" target="_blank">
                                                click her
                                                <img src="{{asset('assets/images/file-icon/PDF.png')}}"  alt="not-found">                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-content-item " id="review">

                                <div class="wrap-review-form">

                                    <div id="comments">
{{--                                        <h2 class="woocommerce-Reviews-title">01 review for <span>{{$product->name}}</span></h2>--}}
                                        <ol class="commentlist">
                                            <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
                                                <div id="comment-20" class="comment_container">
                                                    <img alt="" src="{{asset('assets/images/logo/profile.jpg')}}" height="80" width="80">
                                                    <div class="comment-text">
                                                        <div class="star-rating">
                                                            <span class="width-80-percent">@lang('details.Rated') <strong class="rating">5</strong> @lang('details.out of') 5</span>
                                                        </div>
                                                        <p class="meta">
                                                            <strong class="woocommerce-review__author">@lang('details.Client')</strong>
                                                            <span class="woocommerce-review__dash">–</span>
                                                            <time class="woocommerce-review__published-date" datetime="2008-02-14 20:00" >{{date('Y:m:d')}}</time>
                                                        </p>
                                                        <div class="description">
                                                            <!--<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div><!-- #comments -->

                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond">

                                                {{--Error Validations--}}
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif


                                                @if(isset(\Illuminate\Support\Facades\Auth::user()->name))
                                                <form action="{{route('reviews')}}" method="post" id="commentform" class="comment-form" novalidate="" >
                                                    @csrf

                                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                                    <input type="hidden" name="product_slug" value="{{$product->slug}}">

                                                    <div class="comment-form-rating">
                                                        <span>@lang('details.Select rating')</span>
                                                        <p class="stars">
                                                            <label for="rated-1"></label>
                                                            <input type="radio" id="rated-1" name="rating" value="1">
                                                            <label for="rated-2"></label>
                                                            <input type="radio" id="rated-2" name="rating" value="2">
                                                            <label for="rated-3"></label>
                                                            <input type="radio" id="rated-3" name="rating" value="3">
                                                            <label for="rated-4"></label>
                                                            <input type="radio" id="rated-4" name="rating" value="4">
                                                            <label for="rated-5"></label>
                                                            <input type="radio" id="rated-5" name="rating" value="5" checked="checked">
                                                        </p>
                                                    </div>

                                                    <p class="comment-form-comment">

                                                        <label for="comment">Your review <span class="required">*</span>
                                                        </label>
                                                        <textarea id="comment" name="comment" cols="45" rows="8"></textarea>
                                                    </p>

                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                    </p>
                                                </form>
                                                @else
                                                    <h3>@lang('details.You should') <a href="{{route('login')}}" style="color: #00bf3f">@lang('details.login')</a> @lang('details.or') <a href="{{route('register')}}" style="color: #00bf3f">@lang('details.register')</a> @lang('details.to review your opinion') </h3>
{{--                                                    <a>You should login or register to review your opinion@lang('details.login') </a>--}}


                                                @endif

                                            </div><!-- .comment-respond-->
                                        </div><!-- #review_form -->
                                    </div><!-- #review_form_wrapper -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end main products area-->



            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget widget-our-services ">
                    <div class="widget-content">
                        <ul class="our-services">

                            <li class="service">
                                <a class="link-to-service" href="#"  wire:click.prevent="store({{$product->id}},'{{$product->name}}', {{$product->regular_price}})">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">@lang('details.Add to Cart')</b>
                                        <span class="subtitle">{{$product->name}}</span>
                                        <p class="desc">@lang('details.With Rashed you are safe...')</p>
                                    </div>
                                </a>
                            </li>

                            <li class="service">
                                <a class="link-to-service" href="{{route('product.wishlist')}}">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">@lang('details.Wishlist')</b>
                                        <span class="subtitle">@lang('details.Show Wishlist !')</span>
                                        <p class="desc">@lang('details.With Rashed you are safe...')</p>
                                    </div>
                                </a>
                            </li>

                            <li class="service">
                                <a class="link-to-service" href="{{route('shop')}}">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">@lang('details.Designs')</b>
                                        <span class="subtitle">@lang('details.Show Designs')</span>
                                        <p class="desc">@lang('details.With Rashed you are safe...')</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!-- Categories widget-->

            </div>
            <!--end sitebar-->



                            @foreach($reviews as $review)
                                <div class="product product-style-2 equal-elem">
                                    <div class="product-thumnail">
                                        <div class="d-flex flex-wrap">
                                            <div class="card">
                                                <img src="{{asset('assets/images/logo/profile.jpg')}}" class="card-img-top" width="50%" alt="...">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{ucfirst($review->name)}}</h4>
                                                    <div class="">
                                                        <h6><span>@lang('details.Rated') : {{$review->rating}} </span> <span class="width-80-percent"></span></h6>
                                                    </div>
                                                    <p class="card-text">{{$review->comment}}</p>
{{--                                                    <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                                                </div>
                                            </div>
                                            <!-- Add more cards as needed -->
                                        </div>
                                    </div>
                                </div>
                            @endforeach


        </div><!--end row-->

    </div><!--end container-->

</main>
<!--main area-->
