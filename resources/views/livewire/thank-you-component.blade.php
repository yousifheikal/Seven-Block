<!--main area-->
@section('title')
    Seven-Block | Thank-You
@stop

<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{route('home')}}" class="link">home</a></li>
                <li class="item-link"><span>Thank You</span></li>
            </ul>
        </div>
    </div>

    <div class="container pb-60">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Thank you for your order</h2>
                <p>A confirmation email was sent.</p>
                <a href="{{route('shop')}}" class="btn btn-submit btn-submitx" style="background-color: #07b763">Continue Shopping</a>
            </div>
        </div>
    </div><!--end container-->

</main>
<!--main area-->
