<!--main area-->
@section('title')
    Seven-Block | Reservation
@stop

<main id="main" class="main-site">

    <div class="container">

        {{--form using store in checkout table --}}
        <form action="{{route('checkout.product')}}" method="POST">
            @csrf
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{route('home')}}" class="link">@lang('reservation.home')</a></li>
                <li class="item-link"><span>@lang('reservation.reservation')</span></li>
            </ul>
        </div>

            {{--If cart > 0 show page of checkout but  --}}
            @if(Cart::instance('cart')->count() > 0)

            {{--Show all error when validation catch error --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        <div class=" main-content-area">
            <div class="wrap-address-billing">
                <h3 class="box-title">@lang('reservation.Billing Address')</h3>

                {{--Using for loop to show content of inside Cart--}}
                @foreach(Cart::instance('cart')->Content() as $item)

                    {{--Content of inside cart--}}
                    <input type="hidden" name="project_name" value="{{$item->name}}">
                    <input type="hidden" name="project_price" value="{{$item->subtotal}}">
                    <input type="hidden" name="project_image" value="{{$item->model->image}}">

                    {{--All data needed to checkout --}}
                    <p class="row-in-form">
                        <label for="fname">@lang('reservation.first name')<span>*</span></label>
                        <input id="fname" type="text" name="fname" placeholder="@lang('reservation.Your first name')">
                    </p>

                    <p class="row-in-form">
                        <label for="lname">@lang('reservation.last name')<span>*</span></label>
                        <input id="lname" type="text" name="lname" placeholder="@lang('reservation.Your last name')">
                    </p>

                    <p class="row-in-form">
                        <label for="email">@lang('reservation.Email Address'):</label>
                        <input id="email" type="email" name="email" placeholder="@lang('reservation.Type Your Email')">
                    </p>

                    <p class="row-in-form">
                        <label for="phone">@lang('reservation.Phone number')<span>*</span></label>
                        <input id="phone" type="number" name="phone" placeholder="@lang('reservation.Phone number')">
                    </p>

                    <p class="row-in-form">
                        <label for="add">@lang('reservation.Address'):</label>
                        <input id="add" type="text" name="add" placeholder="@lang('reservation.Address')">
                    </p>

                    <p class="row-in-form">
                        <label for="country">@lang('reservation.Country')<span>*</span></label>
                        <input id="country" type="text" name="country" placeholder="@lang('reservation.Country')">
                    </p>

            </div>

            <div class="summary summary-checkout">
                <div class="summary-item payment-method">
                    <!--<h4 class="title-box">Payment Method</h4>-->
                    <p class="summary-info"><span class="title">{{$item->name}} / {{$item->qty}}</span></p>

                    {{--Just using in css --}}
                    <div class="choose-payment-methods">
                        <label class="payment-method">
                        </label>
                        <label class="payment-method">
                        </label>
                        <label class="payment-method">
                        </label>
                    </div>

                    <p class="summary-info grand-total"><span></span> <span class="grand-total-price"></span></p>

                    <button type="submit" class="btn btn-medium">@lang('reservation.Place order now')</button>
                </div>

                <div class="summary-item shipping-method">
                    <figure><img src="{{asset('assets/images/projects')}}/{{$item->model->image}}" alt="not-found" style="height: 350px;width: 500px;border-radius: 10px"></figure>
                </div>

                @endforeach
            </div>
            @else

                {{--When cart = 0 --}}
                <div class="text-center" style="padding: 30px 0;">
                    <h1>@lang('reservation.cart') @lang('reservation.empty')</h1>
                    <a href="{{route('shop')}}" class="btn btn-success">@lang('reservation.shop')</a>
                </div>
            @endif
        </div>
        </form><!--end main content area-->
    </div><!--end container-->

</main>
<!--main area-->
