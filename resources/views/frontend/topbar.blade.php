<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="/">
                <!-- Logo icon -->
                <b class="logo-icon">
                    <img src="/src/assets/images/eso-logo.png" alt="homepage" class="light-logo rounded-circle" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                    <div class="flex d-flex">
                        <h6 style="color: white" class="pt-2 px-2"><strong>Extension Services Office</strong></h6>
                    </div>

                        </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
               data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto float-left">
                <!-- This is  -->
                <li class="nav-item"> <a
                        class="nav-link sidebartoggler d-none d-md-block waves-effect waves-dark"
                        href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
{{--                <li class="nav-item d-none d-md-block search-box"> <a--}}
{{--                        class="nav-link d-none d-md-block waves-effect waves-dark" href="javascript:void(0)"><i--}}
{{--                            class="ti-search"></i></a>--}}
{{--                    <form class="app-search">--}}
{{--                        <input type="text" class="form-control" placeholder="Search & enter">--}}
{{--                        <a class="srh-btn"><i class="ti-close"></i></a>--}}
{{--                    </form>--}}
{{--                </li>--}}
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <small>{{ implode(', ', Auth::user()->roles()->get()->pluck('name')->toArray()) }}</small>
                        @if (Auth::user()->avatar)
                            <img src="{{ asset('/storage/images/'.Auth::user()->avatar) }}" alt="avatar" width="30" class="profile-pic rounded-circle" />
                        @else
                            <img src="{{ asset('/src/assets/images/profile.png') }}" alt="avatar" width="30" class="profile-pic rounded-circle" />
                        @endif
                    </a>
                    <div class="dropdown-menu mailbox dropdown-menu-right scale-up">
                        <ul class="dropdown-user list-style-none">
                            <li class="user-list"><a class="px-3 py-2" href="{{ route('users.edit', Auth::user()->id ) }}"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="dropdown-divider"></li>
                            @guest
                                <li class="user-list">
                                    <a class="px-3 py-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="user-list">
                                    <a id="navbarDropdown" class="px-3 py-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div>
                                        <a class="px-3 py-2" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-power-off"></i>
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
{{--                            <li class="user-list"><a class="px-3 py-2" href="#"><i class="fa fa-power-off"></i> Logout</a></li>--}}
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
