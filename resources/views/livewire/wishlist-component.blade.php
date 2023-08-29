@section('title')
    Seven-Block | Wishlist
@stop
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{route('home')}}" class="link">@lang('wishlist.home')</a></li>
                <li class="item-link"><span>@lang('wishlist.Wishlist')</span></li>
            </ul>
        </div>

        <div class="row">
            @if(Cart::instance('wishlist')->content()->count() > 0)
            <ul class="product-list grid-products equal-container">

                @foreach(Cart::instance('wishlist')->content() as $item)

                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="{{route('product.details', $item->model->slug)}}" title="{{$item->model->name}}">
                                    <figure><img src="{{asset('assets/images/projects')}}/{{$item->model->image}}" alt="{{$item->model->name}}"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="{{route('product.details', $item->model->slug)}}" class="product-name"><span>{{$item->model->name}}</span></a>
                                <!--<div class="wrap-price"><span class="product-price">{{$item->model->regular_price}}</span></div>-->
                                <a href="{{route('product.details', $item->model->slug)}}" class="btn add-to-cart">@lang('wishlist.Display Design')</a>
                                <div class="product-wish">
                                        <a href="#" wire:click.prevent="removeFromWishlist({{$item->model->id}})"><i class="fa fa-heart fill-heart" style="color: red"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            @else
                <div class="text-center" style="padding: 30px 0;">
                    <h1>Ooops !</h1>
                    <p>@lang('wishlist.Wishlist') @lang('wishlist.empty')</p>
                    <a href="{{route('shop')}}" class="btn btn-success">@lang('wishlist.shop')</a>
                </div>
            @endif
        </div>

    </div>
</main>
