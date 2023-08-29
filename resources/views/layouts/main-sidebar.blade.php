<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="{{route('dashboard.admin')}}" data-toggle="collapse" data-target="#dashboard">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Dashboard</span>
                            </div>
                            <div class="pull-right"></div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Components </li>


                    @if(\Illuminate\Support\Facades\Auth::user()->utype === 'ADM')
                    <!-- menu item Elements-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
                            <div class="pull-left"><i class="fas fa-chalkboard-teacher"></i><span
                                    class="right-nav-text">Users</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('users.index')}}">Create User</a></li>

                        </ul>
                    </li>
                    @endif
                    <!-- menu item Categories-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
                            <div class="pull-left"><i class="ti-calendar"></i><span
                                    class="right-nav-text">Categories</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('category.index')}}">Add New Category</a></li>
                        </ul>
                    </li>


                    <!-- menu item Products-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#chart">
                            <div class="pull-left"><i class="ti-blackboard"></i><span
                                    class="right-nav-text">Products</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="chart" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('products.index')}}">Show All product</a> </li>
                            <li> <a href="{{route('products.create')}}">Add New Product</a> </li>
                        </ul>
                    </li>

                    <!-- menu item chat-->

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#projects_customer">
                            <div class="pull-left"><i class="ti-comments"></i><span
                                    class="right-nav-text">Projects Customer</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="projects_customer" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('projects_customers.index')}}">Show All projects for customer</a> </li>
                            <li> <a href="{{route('show.comments')}}">Show Comments</a> </li>
                        </ul>
                    </li>

                    <!-- menu item mailbox-->
                    <li>
                        <a href="{{route('orders')}}"><i class="ti-bag"></i><span class="right-nav-text">Orders
                                </span>
                        </a>
                    </li>


                    <li>
                        <a href="{{route('all.contactUs')}}"><i class="ti-comments"></i><span class="right-nav-text">ContactUs
                                </span>
                        </a>
                    </li>

                    @if(\Illuminate\Support\Facades\Auth::user()->utype === 'ADM')
                    <li>
                        <a href="{{route('add.tasks')}}"><i class="ti-time"></i><span class="right-nav-text">Add Time Sheet
                                </span>
                        </a>
                    </li>
                    @endif

                    <li>
                        <a href="{{route('emp.tasks')}}"><i class="ti-time"></i><span class="right-nav-text">Show Time Sheet
                                </span>
                        </a>
                    </li>

                    <!-- menu item Projects-->
{{--                    <li>--}}
{{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#project">--}}
{{--                            <div class="pull-left"><i class="ti-files"></i><span--}}
{{--                                    class="right-nav-text">Projects</span></div>--}}
{{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </a>--}}
{{--                        <ul id="project" class="collapse" data-parent="#sidebarnav">--}}
{{--                            <li> <a href="{{route('projects.index')}}">Create And Display All Projects</a> </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <!-- menu font tasks-->--}}
{{--                    <li>--}}
{{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#task">--}}
{{--                            <div class="pull-left"><i class="ti-file"></i><span--}}
{{--                                    class="right-nav-text">Tasks</span></div>--}}
{{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </a>--}}
{{--                        <ul id="task" class="collapse" data-parent="#sidebarnav">--}}
{{--                            <li> <a href="{{route('tasks.index')}}">Create And Display All Tasks</a> </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <a href="{{route('time_entry.index')}}"><i class="ti-time"></i><span class="right-nav-text">Time Entry--}}
{{--                            </span></a>--}}
{{--                    </li>--}}

{{--                    <!-- menu title -->--}}
{{--                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Widgets, Forms & Tables </li>--}}
{{--                    <!-- menu item Widgets-->--}}
{{--                    <li>--}}
{{--                        <a href="widgets.html"><i class="ti-blackboard"></i><span class="right-nav-text">Widgets</span>--}}
{{--                            <span class="badge badge-pill badge-danger float-right mt-1">59</span> </a>--}}
{{--                    </li>--}}
{{--                    <!-- menu item Form-->--}}
{{--                    <li>--}}
{{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Form">--}}
{{--                            <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">Form &--}}
{{--                                    Editor</span></div>--}}
{{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </a>--}}
{{--                        <ul id="Form" class="collapse" data-parent="#sidebarnav">--}}
{{--                            <li> <a href="editor.html">Editor</a> </li>--}}
{{--                            <li> <a href="editor-markdown.html">Editor Markdown</a> </li>--}}
{{--                            <li> <a href="form-input.html">Form input</a> </li>--}}
{{--                            <li> <a href="form-validation-jquery.html">form validation jquery</a> </li>--}}
{{--                            <li> <a href="form-wizard.html">form wizard</a> </li>--}}
{{--                            <li> <a href="form-repeater.html">form repeater</a> </li>--}}
{{--                            <li> <a href="input-group.html">input group</a> </li>--}}
{{--                            <li> <a href="toastr.html">toastr</a> </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <!-- menu item table -->--}}
{{--                    <li>--}}
{{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#table">--}}
{{--                            <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">data--}}
{{--                                    table</span></div>--}}
{{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </a>--}}
{{--                        <ul id="table" class="collapse" data-parent="#sidebarnav">--}}
{{--                            <li> <a href="data-html-table.html">Data html table</a> </li>--}}
{{--                            <li> <a href="data-local.html">Data local</a> </li>--}}
{{--                            <li> <a href="data-table.html">Data table</a> </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">More Pages</li>--}}
{{--                    <!-- menu item Custom pages-->--}}
{{--                    <li>--}}
{{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#custom-page">--}}
{{--                            <div class="pull-left"><i class="ti-file"></i><span class="right-nav-text">Custom--}}
{{--                                    pages</span></div>--}}
{{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </a>--}}
{{--                        <ul id="custom-page" class="collapse" data-parent="#sidebarnav">--}}
{{--                            <li> <a href="projects.html">projects</a> </li>--}}
{{--                            <li> <a href="project-summary.html">Projects summary</a> </li>--}}
{{--                            <li> <a href="profile.html">profile</a> </li>--}}
{{--                            <li> <a href="app-contacts.html">App contacts</a> </li>--}}
{{--                            <li> <a href="contacts.html">Contacts</a> </li>--}}
{{--                            <li> <a href="file-manager.html">file manager</a> </li>--}}
{{--                            <li> <a href="invoice.html">Invoice</a> </li>--}}
{{--                            <li> <a href="blank.html">Blank page</a> </li>--}}
{{--                            <li> <a href="layout-container.html">layout container</a> </li>--}}
{{--                            <li> <a href="error.html">Error</a> </li>--}}
{{--                            <li> <a href="faqs.html">faqs</a> </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <!-- menu item Authentication-->--}}
{{--                    <li>--}}
{{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#authentication">--}}
{{--                            <div class="pull-left"><i class="ti-id-badge"></i><span--}}
{{--                                    class="right-nav-text">Authentication</span></div>--}}
{{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </a>--}}
{{--                        <ul id="authentication" class="collapse" data-parent="#sidebarnav">--}}
{{--                            <li> <a href="login.html">login</a> </li>--}}
{{--                            <li> <a href="register.html">register</a> </li>--}}
{{--                            <li> <a href="lockscreen.html">Lock screen</a> </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <!-- menu item maps-->--}}
{{--                    <li>--}}
{{--                        <a href="maps.html"><i class="ti-location-pin"></i><span class="right-nav-text">maps</span>--}}
{{--                            <span class="badge badge-pill badge-success float-right mt-1">06</span></a>--}}
{{--                    </li>--}}
{{--                    <!-- menu item timeline-->--}}
{{--                    <li>--}}
{{--                        <a href="timeline.html"><i class="ti-panel"></i><span class="right-nav-text">timeline</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <!-- menu item Multi level-->--}}
{{--                    <li>--}}
{{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#multi-level">--}}
{{--                            <div class="pull-left"><i class="ti-layers"></i><span class="right-nav-text">Multi--}}
{{--                                    level Menu</span></div>--}}
{{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </a>--}}
{{--                        <ul id="multi-level" class="collapse" data-parent="#sidebarnav">--}}
{{--                            <li>--}}
{{--                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#auth">Level--}}
{{--                                    item 1<div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                                    <div class="clearfix"></div>--}}
{{--                                </a>--}}
{{--                                <ul id="auth" class="collapse">--}}
{{--                                    <li>--}}
{{--                                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#login">Level--}}
{{--                                            item 1.1<div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                                            <div class="clearfix"></div>--}}
{{--                                        </a>--}}
{{--                                        <ul id="login" class="collapse">--}}
{{--                                            <li>--}}
{{--                                                <a href="javascript:void(0);" data-toggle="collapse"--}}
{{--                                                    data-target="#invoice">level item 1.1.1<div class="pull-right"><i--}}
{{--                                                            class="ti-plus"></i></div>--}}
{{--                                                    <div class="clearfix"></div>--}}
{{--                                                </a>--}}
{{--                                                <ul id="invoice" class="collapse">--}}
{{--                                                    <li> <a href="#">level item 1.1.1.1</a> </li>--}}
{{--                                                    <li> <a href="#">level item 1.1.1.2</a> </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li> <a href="#">level item 1.2</a> </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#error">level--}}
{{--                                    item 2<div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                                    <div class="clearfix"></div>--}}
{{--                                </a>--}}
{{--                                <ul id="error" class="collapse">--}}
{{--                                    <li> <a href="#">level item 2.1</a> </li>--}}
{{--                                    <li> <a href="#">level item 2.2</a> </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
