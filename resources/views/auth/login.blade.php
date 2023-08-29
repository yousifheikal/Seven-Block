{{--inheratince header and footer from layouts/guest--}}
<x-guest-layout>

    <!--main area-->
    <main id="main" class="main-site left-sidebar">

        {{--    <div class="container">--}}
        @auth()

            @if(\Illuminate\Support\Facades\Auth::user()->code > 0)
                <div class="container">

                    <div class="wrap-breadcrumb">
                        <ul>
                            <li class="item-link"><a href="{{route('home')}}" class="link">@lang('login.home')</a></li>
                            <li class="item-link"><span>{{auth()->user()->name}}</span></li>
                        </ul>
                    </div>
                    <div class="row ">
                        <a href="{{route('design.client')}}">
                            <img class="sectionsD" src="{{asset('assets/images/projects/design.jpg')}}" alt="not-found">
                        </a>

                        <a href="{{route('foundation.client')}}">
                            <img class="sectionsFo" src="{{asset('assets/images/projects/foundation.jpg')}}" alt="not-found">
                        </a>

                        <a href="{{route('finish.client')}}">
                            <img class="sectionsFi" src="{{asset('assets/images/projects/finishingg.jpg')}}" alt="not-found">
                        </a>

                    </div><!--end row-->
                </div>
            @else
                <div class="container">

                    <div class="wrap-breadcrumb">
                        <ul>
                            <li class="item-link"><a href="{{route('home')}}" class="link">@lang('login.home')</a></li>
                            <li class="item-link"><span>{{auth()->user()->name}}</span></li>
                        </ul>
                    </div>
                    <div class="row ">
                        <a href="{{route('regular.design')}}">
                            <img class="sectionsD" src="{{asset('assets/images/projects/design.jpg')}}" alt="not-found">
                        </a>

                        <a href="{{route('regular.foundation')}}">
                            <img class="sectionsFo" src="{{asset('assets/images/projects/foundation.jpg')}}" alt="not-found">
                        </a>

                        <a href="{{route('regular.finish')}}">
                            <img class="sectionsFi" src="{{asset('assets/images/projects/finishingg.jpg')}}" alt="not-found">
                        </a>

                    </div><!--end row-->
                </div>
            @endif



            @else
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="{{route('home')}}" class="link">@lang('login.home')</a></li>
                    <li class="item-link"><span>@lang('login.login')</span></li>
                </ul>
            </div>
            <div class="row ">
                <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12  main-content-area">
                    <div class="main-content-area">
                        <div class="wrap-login-item">
                            <div class="login-form form-item form-stl">

                                {{--Check data(User) from database or no --}}
                                <form action="{{route('login')}}" method="post">
                                    @csrf

                                    {{--Logo--}}
                                    <div class="containe" style="text-align: center">
                                        <img src="{{asset('assets/images/logo/profile.jpg')}}" alt="mercado" style="width: 30%">
                                    </div>
                                    <br>

                                    {{-- Just text--}}
                                    <fieldset class="wrap-title" >
                                        <h3 class="form-title" style="text-align: center; color: #1B1C1D">@lang('login.Log_in')</h3>
                                    </fieldset>

                                    {{--Input Email--}}
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-uname">@lang('login.email')</label>
                                        <input type="text" id="frm-login-uname" name="email" value="{{old('email')}}" placeholder="@lang('login.Type your email address')" style="border-radius: 10px">

                                        {{--If you have error from validation show error --}}
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </fieldset>

                                    {{--Input Password--}}
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-pass">@lang('login.password')</label>

                                        <div class="password-field">
                                            <input type="password" id="password-input" name="password" placeholder="************" style="border-radius: 10px">
                                            <i id="toggle-password" class="fa fa-eye"></i>

                                            {{--If you have error from validation show error --}}
                                            @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </fieldset>

                                    {{-- Remember & Forgotten--}}
                                    <fieldset class="wrap-input">
                                        <label class="remember-field">
                                            <input class="frm-input " name="remember" id="rememberme" value="forever" type="checkbox"><span>@lang('login.Remember_me')</span>
                                        </label>
                                    </fieldset>

                                    {{--Button to login website --}}
                                    <fieldset class="wrap-input">
                                        <input type="submit" class="btn btn-submit" value="@lang('login.login')" name="submit" >
                                    </fieldset>

                                    <fieldset class="wrap-input">
                                        <h5 style="text-align: center;font-size: 17px; font-weight: 600; margin-top: 34px">@lang('login.xhave') <a href="{{route('register')}}" style="color: #00bf3f"> @lang('login.Register')</a></h5>
                                    </fieldset>

                                </form>
                            </div>
                        </div>
                    </div><!--end main products area-->
                </div>

                <a href="{{route('regular.design')}}">
                    <img class="sections" src="{{asset('assets/images/projects/design.jpg')}}" style="width: 19.2%;height: 83.4%" alt="not-found">
                </a>

                <a href="{{route('regular.foundation')}}">
                    <img class="sections" src="{{asset('assets/images/projects/foundation.jpg')}}" style="width: 19.2%;height: 83.4%" alt="not-found">
                </a>

                <a href="{{route('regular.finish')}}">
                    <img class="sections" src="{{asset('assets/images/projects/finishingg.jpg')}}" style="width: 19.2%;height: 83.4%" alt="not-found">
                </a>

            </div><!--end row-->
        @endif

    </main>
    <!--main area-->
</x-guest-layout>

