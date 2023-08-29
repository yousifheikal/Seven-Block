        <!--=================================
 header start-->
        <nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <!-- logo -->
            <div class="text-left navbar-brand-wrapper">
                <a class="navbar-brand brand-logo" href="{{route('dashboard.admin')}}"><img src="{{asset('assets/images/logo-dark.png')}}" alt=""></a>
                <a class="navbar-brand brand-logo-mini" href="{{route('dashboard.admin')}}"><img src="{{asset('assets/images/logo-icon-dark.png')}}"
                        alt=""></a>
            </div>
            <!-- Top bar left -->
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item">
                    <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left"
                        href="javascript:void(0);"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <div class="search">
                        <a class="search-btn not_click" href="javascript:void(0);"></a>
                        <div class="search-box not-click">
                            <input type="text" class="not-click form-control" placeholder="Search" value=""
                                name="search">
                            <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- top bar right -->
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item fullscreen">
                    <a id="btnFullscreen" href="#" class="nav-link"><i class="ti-fullscreen"></i></a>
                </li>

                <li class="nav-item dropdown ">
                    <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                        aria-expanded="true"> <i class=" ti-view-grid"></i> </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-big">
                        <div class="dropdown-header">
                            <strong>Quick Links</strong>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="nav-grid">
                            
                        @if(\Illuminate\Support\Facades\Auth::user()->utype === 'ADM')
                            <a href="{{route('users.index')}}" class="nav-grid-item"><i class="ti-user"></i>
                                <h5>Add user</h5>
                            </a>
                            
                        @endif    
                            <a href="{{route('category.index')}}" class="nav-grid-item"><i class="ti-check-box text-success"></i>
                                <h5>Add Category</h5>
                            </a>
                        </div>
                        <div class="nav-grid">
                            <a href="{{route('products.create')}}" class="nav-grid-item"><i class="ti-pencil-alt text-warning"></i>
                                <h5>Add Projects</h5>
                            </a>
                            <a href="{{route('orders')}}" class="nav-grid-item"><i class="ti-truck text-danger "></i>
                                <h5>Orders</h5>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown mr-30">
                    <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('assets/images/logo/prof.png')}}" alt="avatar">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-0">{{ucfirst(\Illuminate\Support\Facades\Auth::user()->name)}}</h5>
                                    <span>{{\Illuminate\Support\Facades\Auth::user()->email}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/"><i class="text-danger ti-unlock"></i>Back-Site</a>
                    </div>
                </li>
            </ul>
        </nav>

        <!--=================================
 header End-->
