{{--inheratince header and footer from layouts/guest--}}
<x-guest-layout>
    <!--main area-->
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="{{route('home')}}" class="link">@lang('register.home')</a></li>
                    <li class="item-link"><span>@lang('register.Register')</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="register-form form-item ">

                                {{--Form send data for validation and store in database app/Actions/Fortify--}}
                                <form class="form-stl" action="{{route('register')}}" name="frm-login" method="post" >
                                    @csrf

                                    {{--Just Text--}}
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">@lang('register.Create an account')</h3>
                                        <h4 class="form-subtitle">@lang('register.Personal information')</h4>
                                    </fieldset>

                                    {{--Name--}}
                                    <fieldset class="wrap-input">
                                        <label for="frm-reg-lname">@lang('register.Name')*</label>
                                        <input type="text" id="frm-reg-lname" name="name" value="{{old('name')}}" placeholder="@lang('register.Name')*" >
                                        {{--If you have error from validation show error --}}
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </fieldset>

                                    {{--E-mail--}}
                                    <fieldset class="wrap-input">
                                        <label for="frm-reg-email">@lang('register.Email Address')*</label>
                                        <input type="email" id="frm-reg-email" name="email" value="{{old('email')}}" placeholder="@lang('register.Email Address')" >
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </fieldset>

                                    {{--Just Text--}}
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">@lang('register.Login Information')</h3>
                                        @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </fieldset>

                                    {{--Password--}}
                                    <fieldset class="wrap-input item-width-in-half left-item ">
                                        <label for="frm-reg-pass">@lang('register.Password')*</label>
                                        <div class="password-field">
                                            <input type="password" name="password" id="password-input" placeholder="************" />
                                            <i id="toggle-password" class="fa fa-eye"></i>
                                        </div>
                                    </fieldset>

                                    {{--Confirm Password--}}
                                    <fieldset class="wrap-input item-width-in-half">
                                        <label for="frm-reg-cfpass">@lang('register.Confirm Password')*</label>
                                        <input type="password" id="password-input" name="password_confirmation" placeholder="************">
                                    </fieldset>

                                    {{--Submit--}}
                                    <input type="submit" class="btn btn-sign" value="@lang('register.Register')" name="register">
                                </form>
                            </div>
                        </div>
                    </div><!--end main products area-->
                </div>
            </div><!--end row-->

        </div><!--end container-->

    </main>
    <!--main area-->
</x-guest-layout>
