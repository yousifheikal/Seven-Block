@section('title')
    Seven-Block | Section-Foundation-Regular
@stop
<main>
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <h2>@lang('sections.Hello') @lang('sections.in Foundation Section')</h2>
            </ul>
        </div>

        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="wrap-product-detail">
                    <div class="detail-info">
                        <div class="product-rating">
                            <h4>@lang('sections.If you want to show project click her')</h4>
                        </div>
                        <h2 class="product-name">
                            <button class="title" style="background-color: #1B1C1D; color: white;width: 100%;height: 30px; border-radius: 10px;margin-bottom: 10px">@lang('sections.Bedroom')</button>

                            <button class="title" style="background-color: #1B1C1D; color: white;width: 100%;height: 30px; border-radius: 10px;margin-bottom: 10px">@lang('sections.Lounge')</button>

                            <button class="title" style="background-color: #1B1C1D; color: white;width: 100%;height: 30px; border-radius: 10px;margin-bottom: 10px">@lang('sections.Saloon')</button>

                            <button class="title" style="background-color: #1B1C1D; color: white;width: 100%;height: 30px; border-radius: 10px;margin-bottom: 10px">@lang('sections.Bathroom')</button>

                            <button class="title" style="background-color: #1B1C1D; color: white;width: 100%;height: 30px; border-radius: 10px;margin-bottom: 10px">@lang('sections.External')</button>
                        </h2>
                    </div>
                    <div class="advance-info">
                        <div class="tab-control normal">
                            <a href="#description" class="tab-control-item active">@lang('sections.description')</a>
                            <a href="#add_infomation" class="tab-control-item">@lang('sections.Important Information')</a>
                            <a href="#review" class="tab-control-item">@lang('sections.let_comment')</a>
                        </div>
                        <div class="tab-contents">
                            <div class="tab-content-item active" id="description">
                                <p>@lang('sections.Hello this page display important rule in Foundation Section')</p>
                            </div>
                            <div class="tab-content-item " id="add_infomation">
                                <table class="shop_attributes">
                                    <tbody>
                                    <tr>
                                        <th>@lang('sections.Building')</th><td class="product_weight">
                                            <a href="{{asset('assets/images/pdf/new_classic.pdf')}}" target="_blank">
                                                click her
                                                <img src="{{asset('assets/images/file-icon/PDF.png')}}" alt="not-found">
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>@lang('sections.Move')</th><td class="product_dimensions">
                                            <a href="{{asset('assets/images/pdf/new.pdf')}}" target="_blank">
                                                click her
                                                <img src="{{asset('assets/images/file-icon/PDF.png')}}" alt="not-found">                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>@lang('sections.Furniture')</th><td class="product_dimensions">
                                            <a href="{{asset('assets/images/pdf/new_classic.pdf')}}" target="_blank">
                                                click her
                                                <img src="{{asset('assets/images/file-icon/PDF.png')}}" alt="not-found">                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>@lang('sections.Building Stage')</th><td class="product_dimensions">
                                            <a href="{{asset('assets/images/pdf/new_classic.pdf')}}" target="_blank">
                                                click her
                                                <img src="{{asset('assets/images/file-icon/PDF.png')}}" alt="not-found">                                            </a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-content-item " id="review">

                                <div class="wrap-review-form">

                                    <div id="comments">
                                        <ol class="commentlist">
                                            <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
                                                <div id="comment-20" class="comment_container">
                                                    <img alt="" src="{{asset('assets/images/logo/profile.jpg')}}" height="80" width="80">
                                                    <div class="comment-text">
                                                        <div class="star-rating">
                                                            <span class="width-80-percent">Rated <strong class="rating">5</strong> out of 5</span>
                                                        </div>
                                                        <p class="meta">
                                                            <strong class="woocommerce-review__author"></strong>
                                                            <span class="woocommerce-review__dash">–</span>
                                                            <time class="woocommerce-review__published-date" datetime="2008-02-14 20:00" >{{date('Y:m:d')}}</time>
                                                        </p>
                                                        <div class="description">
                                                            {{--                                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div><!-- #comments -->

                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond">
                                                <h3>@lang('sections.To review you should a private client') </h3>
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
                                <img src="{{asset('assets/images/projects/foundation.jpg')}}" style="width: 100%;height: 500px; border-radius: 10px" alt="not-found">

                            </li>

                        </ul>
                    </div>
                </div><!-- Categories widget-->

            </div><!--end sitebar-->

        </div><!--end row-->
    </div>
</main>

