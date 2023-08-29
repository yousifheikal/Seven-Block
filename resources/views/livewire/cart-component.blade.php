<!--main area-->
@section('title')
  Seven-Block | Cart
@stop

<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{route('home')}}" class="link">@lang('cart.home')</a></li>
                <li class="item-link"><span>@lang('cart.Cart')</span></li>
            </ul>
        </div>
        <div class=" main-content-area">

            <div class="wrap-iten-in-cart">

                @if(Session::has('success_message'))
                    <div class="alert alert-success">
                        <strong>Success </strong> {{session::get('success_message')}}
                    </div>
                @endif

                @if(Cart::instance('cart')->count() > 0)

                <h3 class="box-title">@lang('cart.Products Design')</h3>
                <ul class="products-cart">
                    @foreach(Cart::instance('cart')->Content() as $item)
                    <li class="pr-cart-item">
                        <div class="product-image">
                            <figure><img src="{{asset('assets/images/projects')}}/{{$item->model->image}}" alt=""></figure>
                        </div>
                        <div class="product-name">
                            <a class="link-to-product" href="{{route('product.details', $item->model->slug)}}">{{$item->name}}</a>
                        </div>
                        <!--<div class="price-field produtc-price"><p class="price">{{Cart::count()}}</p></div>-->
                        <div class="quantity">
                            <div class="quantity-input">
                                <input type="text" name="product-quatity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*" >
                                <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"></a>
                                <a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"></a>
                            </div>
                        </div>
                        <div class="price-field sub-total"><p class="price">{{Cart::count()}}</p></div>
                        <div class="delete">
                            <a href="#" class="btn btn-delete" title="@lang('cart.delete item')" wire:click.prevent="destroy('{{$item->rowId}}')">
                                <span>Delete from your cart</span>
                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>

            <div class="summary">
                <div class="order-summary">
                    <h4 class="title-box">@lang('cart.Order Summary')</h4>
{{--                    <p class="summary-info"><span class="title">Subtotal</span><b class="index">{{Cart::subtotal()}}</b></p>--}}
{{--                    <p class="summary-info"><span class="title">Tax</span><b class="index">{{Cart::tax()}}</b></p>--}}
                    <p class="summary-info"><span class="title">@lang('cart.count')</span><b class="index">{{Cart::count()}}</b></p>
                    <!--<p class="summary-info total-info "><span class="title">Total</span><b class="index">{{Cart::subtotal()}}</b></p>-->
                </div>
                <div class="checkout-info">
                    <label class="checkbox-field">
{{--                        <input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>I have promo code</span>--}}
                    </label>

                    @if(Cart::count() > 1)
                        <a class="btn btn-checkout" href="#" style="background-color: red">@lang('cart.You should select one design to reservation')</a>
                    @else
                        <a class="btn btn-checkout" href="" wire:click.prevent="checkout">@lang('cart.reservation')</a>
                    @endif

                    <a class="link-to-shop" href="{{route('shop')}}">@lang('cart.Continue Shopping')<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </div>
                <div class="update-clear">
                    <a class="btn btn-clear" href="#" wire:click="destroyAll()">@lang('cart.Clear shopping cart')</a>
{{--                    <a class="btn btn-update" href="#">Update Shopping Cart</a>--}}
                </div>
            </div>
            @else
                <div class="text-center" style="padding: 30px 0;">
                    <h1>Ooops !</h1>
                    <p>@lang('cart.Cart') @lang('cart.empty')</p>
                    <a href="{{route('shop')}}" class="btn btn-success">@lang('cart.shop')</a>
                </div>
            @endif


        </div><!--end main content area-->
    </div><!--end container-->

</main>
<!--main area-->
