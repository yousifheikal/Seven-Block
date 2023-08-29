<!--main area-->
@section('title')
    Seven-Block | Section-Finishing-Customer
@stop

<main id="main" class="main-site">

    <div class="container">

        @if(!empty($project))
        <div class="wrap-breadcrumb">
            <ul>
                <h2>@lang('sections.Hello'): {{ucfirst(\Illuminate\Support\Facades\Auth::user()->name)}} @lang('sections.in Finishing Section')</h2>
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
                            <a href="{{asset('assets/images/projects')}}/{{$project->bedroom}}" target="_blank">
                                <button class="title" style="background-color: #1B1C1D; color: white;width: 100%;height: 30px; border-radius: 10px;margin-bottom: 10px">@lang('sections.Bedroom')</button>
                            </a>

                            <a href="{{asset('assets/images/projects')}}/{{$project->lounge}}" target="_blank">
                                <button class="title" style="background-color: #1B1C1D; color: white;width: 100%;height: 30px; border-radius: 10px;margin-bottom: 10px">@lang('sections.Lounge')</button>
                            </a>


                            <a href="{{asset('assets/images/projects')}}/{{$project->saloon}}" target="_blank">
                                <button class="title" style="background-color: #1B1C1D; color: white;width: 100%;height: 30px; border-radius: 10px;margin-bottom: 10px">@lang('sections.Saloon')</button>
                            </a>

                            <a href="{{asset('assets/images/projects')}}/{{$project->bathroom}}" target="_blank">
                                <button class="title" style="background-color: #1B1C1D; color: white;width: 100%;height: 30px; border-radius: 10px;margin-bottom: 10px">@lang('sections.Bathroom')</button>
                            </a>

                            <a href="{{asset('assets/images/projects')}}/{{$project->external}}" target="_blank">
                                <button class="title" style="background-color: #1B1C1D; color: white;width: 100%;height: 30px; border-radius: 10px;margin-bottom: 10px">@lang('sections.External')</button>
                            </a>
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
                                <p>@lang('sections.Hello'): {{$project->user->name}} @lang('sections.This is last version in finishing')</p>
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
                                        {{--                                        <h2 class="woocommerce-Reviews-title">01 review for <span>{{$product->name}}</span></h2>--}}
                                        <ol class="commentlist">
                                            <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
                                                <div id="comment-20" class="comment_container">
                                                    <img alt="" src="{{asset('assets/images/logo/profile.jpg')}}" height="80" width="80">
                                                    <div class="comment-text">
                                                        <div class="star-rating">
                                                            <span class="width-80-percent">Rated <strong class="rating">5</strong> out of 5</span>
                                                        </div>
                                                        <p class="meta">
                                                            <strong class="woocommerce-review__author">{{ucfirst(\Illuminate\Support\Facades\Auth::user()->name)}}</strong>
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


                                                <form action="{{route('comment.design')}}" method="post" id="commentform" class="comment-form" novalidate="" >
                                                    @csrf

                                                    <input type="hidden" name="project_id" value="{{$project->id}}">

                                                    <p class="comment-form-comment">
                                                        <label for="comment">@lang('sections.comment') <span class="required">*</span>
                                                        </label>
                                                        <textarea id="comment" name="comment" cols="45" rows="8"></textarea>
                                                    </p>

                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit" class="submit" value="@lang('sections.Submit')">
                                                    </p>
                                                </form>

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
                                <img src="{{asset('assets/images/projects/finishingg.jpg')}}" style="width: 100%;height: 500px; border-radius: 10px" alt="not-found">

                            </li>
                        </ul>
                    </div>
                </div><!-- Categories widget-->


            </div><!--end sitebar-->

            @foreach($comments as $comment)
                <div class="product product-style-2 equal-elem">
                    <div class="product-thumnail">
                        <div class="d-flex flex-wrap">
                            <div class="card">
                                <img src="{{asset('assets/images/logo/profile.jpg')}}" class="card-img-top" width="50%" alt="...">
                                <div class="card-body">
                                    <div class="">
                                        <h6><span>{{ucfirst($comment->user)}}</span> <span class="width-80-percent"></span></h6>
                                    </div>
                                    <p class="card-text">{{$comment->comment}}</p>
                                    {{--                                                    <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                                </div>
                            </div>
                            <!-- Add more cards as needed -->
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!--end row-->
        @elseif(\Illuminate\Support\Facades\Auth::user()->utype == 'ADM' || \Illuminate\Support\Facades\Auth::user()->utype == 'EMP')

            <div class="wrap-breadcrumb">
                <ul>
                    <h2>@lang('sections.Hello'): {{ucfirst(\Illuminate\Support\Facades\Auth::user()->name)}} @lang('sections.in Finishing Section')</h2>
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
                                {{--                                <a href="{{asset('assets/images/projects')}}/{{$project->bedroom}}" target="_blank">--}}
                                <button class="title" style="background-color: #1B1C1D; color: white;width: 100%;height: 30px; border-radius: 10px;margin-bottom: 10px">@lang('sections.Bedroom')</button>
                                </a>

                                {{--                                <a href="{{asset('assets/images/projects')}}/{{$project->lounge}}" target="_blank">--}}
                                <button class="title" style="background-color: #1B1C1D; color: white;width: 100%;height: 30px; border-radius: 10px;margin-bottom: 10px">@lang('sections.Lounge')</button>
                                </a>


                                {{--                                <a href="{{asset('assets/images/projects')}}/{{$project->saloon}}" target="_blank">--}}
                                <button class="title" style="background-color: #1B1C1D; color: white;width: 100%;height: 30px; border-radius: 10px;margin-bottom: 10px">@lang('sections.Saloon')</button>
                                </a>

                                {{--                                <a href="{{asset('assets/images/projects')}}/{{$project->bathroom}}" target="_blank">--}}
                                <button class="title" style="background-color: #1B1C1D; color: white;width: 100%;height: 30px; border-radius: 10px;margin-bottom: 10px">@lang('sections.Bathroom')</button>
                                </a>

                                {{--                                <a href="{{asset('assets/images/projects')}}/{{$project->external}}" target="_blank">--}}
                                <button class="title" style="background-color: #1B1C1D; color: white;width: 100%;height: 30px; border-radius: 10px;margin-bottom: 10px">@lang('sections.External')</button>
                                </a>
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
                                    <p>@lang('sections.Hello'):  {{ucfirst(\Illuminate\Support\Facades\Auth::user()->name)}}</p>
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
                                            {{--                                        <h2 class="woocommerce-Reviews-title">01 review for <span>{{$product->name}}</span></h2>--}}
                                            <ol class="commentlist">
                                                <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
                                                    <div id="comment-20" class="comment_container">
                                                        <img alt="" src="{{asset('assets/images/logo/profile.jpg')}}" height="80" width="80">
                                                        <div class="comment-text">
                                                            <div class="star-rating">
                                                                <span class="width-80-percent">Rated <strong class="rating">5</strong> out of 5</span>
                                                            </div>
                                                            <p class="meta">
                                                                <strong class="woocommerce-review__author">{{ucfirst(\Illuminate\Support\Facades\Auth::user()->name)}}</strong>
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
                                    <img src="{{asset('assets/images/projects/finishingg.jpg')}}" style="width: 100%;height: 500px; border-radius: 10px" alt="not-found">

                                </li>

                            </ul>
                        </div>
                    </div><!-- Categories widget-->

                </div><!--end sitebar-->

                @foreach($All_comment as $comment)
                    <div class="product product-style-2 equal-elem" >
                        <div class="product-thumnail">
                            <div class="d-flex flex-wrap">
                                <div class="card" >
                                    <img src="{{asset('assets/images/logo/profile.jpg')}}" class="card-img-top" width="50%" alt="...">
                                    <div class="card-body">
                                        <div class="">
                                            <h6><span>{{ucfirst($comment->user)}}</span> <span class="width-80-percent"></span></h6>
                                        </div>
                                        <p class="card-text">{{$comment->comment}}</p>
                                        {{--                                                    <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                                    </div>
                                </div>
                                <!-- Add more cards as needed -->
                            </div>
                        </div>
                    </div>
                @endforeach

            </div><!--end row-->
        @else
            <div class="text-center" style="padding: 30px 0;">
                <h1>Sorry Mr: {{ucfirst(\Illuminate\Support\Facades\Auth::user()->name)}}</h1>
                <p>No have any update for your designing</p>
                <a href="{{route('shop')}}" class="btn btn-success">Show Now</a>
            </div>
        @endif
    </div><!--end container-->

</main>
<!--main area-->
