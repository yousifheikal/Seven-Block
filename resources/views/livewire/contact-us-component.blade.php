<!--main area-->
@section('title')
    Seven-Block | Contact-Us
@stop

<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{route('home')}}" class="link">@lang('contact_us.home')</a></li>
                <li class="item-link"><span>@lang('contact_us.Contact us')</span></li>
            </ul>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class=" main-content-area">
                <div class="wrap-contacts ">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="contact-box contact-form">
                            <h2 class="box-title">@lang('contact_us.Leave a Message')</h2>
                            <form action="{{route('contactUs_message')}}" method="post" name="frm-contact">
                                @csrf
                                <label for="name">@lang('contact_us.Name')<span>*</span></label>
                                <input type="text" value="" id="name" name="name" >

                                <label for="email">@lang('contact_us.Email')<span>*</span></label>
                                <input type="text" value="" id="email" name="email" >

                                <label for="phone">@lang('contact_us.Number Phone')</label>
                                <input type="text" value="" id="phone" name="phone" >

                                <label for="comment">@lang('contact_us.Comment')</label>
                                <textarea name="comment" id="comment"></textarea>

                                <input type="submit" name="ok" value="@lang('contact_us.submit')" >

                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="contact-box contact-info">
                            <div class="wrap-map">
                                <div class="mercado-google-maps">
{{--                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d927758.036855479!2d46.16301075970691!3d24.724997774065542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2sRiyadh%20Saudi%20Arabia!5e0!3m2!1sen!2suk!4v1689005353525!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
                                </div>
                            </div>
                            <h2 class="box-title">@lang('contact_us.Contact Detail')</h2>
                            <div class="wrap-icon-box">

                                <div class="icon-box-item">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <div class="right-info">
                                        <b>@lang('contact_us.Email')</b>
                                        <p>Support1@Mercado.com</p>
                                    </div>
                                </div>

                                <div class="icon-box-item">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <div class="right-info">
                                        <b>@lang('contact_us.Phone')</b>
                                        <p>+ 966541229209</p>
                                    </div>
                                </div>

                                <div class="icon-box-item">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <div class="right-info">
                                        <b>@lang('contact_us.Mail Office')</b>
                                        <p>@lang('footer.Dammam, Al-Azizia, Al-Faisal Business Center, third floor')</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end main products area-->

        </div><!--end row-->

    </div><!--end container-->

</main>
<!--main area-->
