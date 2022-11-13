<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin_common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    <link rel="stylesheet" href="{{ asset('css/category.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/changePassword.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <title>One Click</title>
</head>

<body>
    <div>
        <nav class="nav clearfix">
            <h1 class="logo pc">
                <a href="#" class="logo-img">
                    <img src="{{ asset('img/oneclick_logo.png') }}" alt="One Click" width="250" height="250">
                </a>
            </h1>
            <p class="btn-gnavi">
                <span></span>
                <span></span>
                <span></span>
            </p>
            <div class="top-nav">
                <ul class="nav-item">
                    <li>
                        <a href="mailto:{{ Auth::user()->email }}"><i class="fa fa-envelope"></i><span>  {{ notification() }}</span></a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard.orderlist') }}"><i class="fa fa-bell"></i><span>  {{ notification() }}</span></a>
                    </li>
                    <li>
                        <div class="profile">
                            <div class="dropbtn">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <div class="dropdown-content">
                                <a href="{{ url('/adminProfile') }}"><i class="fa fa-user"
                                        aria-hidden="true"></i>Profile</a>
                                <a href="{{ url('/changePassword') }}"><i class="fa fa-key"
                                        aria-hidden="true"></i>Change Password</a>
                                <a href="{{ url('/logout') }}"><i class="fa fa-sign-out"
                                        aria-hidden="true"></i>Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="content clearfix">
        <div class="side-nav" id="side-nav">
            <h1 class="logo">
                <a href="#" class="logo-img">
                    <img src="{{ asset('img/oneclick_logo.png') }}" alt="One Click" width="250" height="250">
                </a>
            </h1>

            <center>
                <img src="{{ asset('img/user.png') }}" alt="profile pic"><br>
                <h4 class="username">{{ Auth::user()->name }}</h4>
            </center><br>
            <hr>
            <ul class="sidenav-item">
                <li class="side-list {{ Request::is('admin-dashboard') ? 'active' : '' }}">
                    <a href="{{ url('/admin-dashboard') }}" class="side-menu"><i class="fa fa-home"
                            aria-hidden="true"></i><span>Home</span></a>
                </li>
                <li class="sidenav-dropdown">
                    <a href="#" class="pttl">Manage Product<i class="fa fa-angle-down drop-arrow"
                            aria-hidden="true"></i> </a>
                    <div
                        class="side-dropdown-content {{ Request::is('product/create') || Request::is('product') ? 'show' : '' }}">
                        <a href="{{ url('product') }}"
                            class="dropdown-menu {{ Request::is('product') ? 'active' : '' }}"><i class="fa fa-eye"
                                aria-hidden="true"></i><span>Product List</span></a><br>
                        <a href="{{ url('product/create') }}"
                            class="dropdown-menu {{ Request::is('product/create') ? 'active' : '' }}"><i
                                class="fa fa-plus" aria-hidden="true"></i><span>Add
                                Product</span></a>
                    </div>
                </li>
                <li class="sidenav-dropdown">
                    <a href="#" class="pttl">Manage Category<i
                            class="fa fa-angle-down drop-arrow {{ Request::is('category/create') || Request::is('category') ? 'rotate' : '' }}"
                            aria-hidden="true"></i> </a>
                    <div
                        class="side-dropdown-content {{ Request::is('category/create') || Request::is('category') ? 'show' : '' }}">
                        <a href="{{ url('category') }}"
                            class="dropdown-menu {{ Request::is('category') ? 'active' : '' }}"><i class="fa fa-eye"
                                aria-hidden="true"></i><span>Category List</span></a><br>
                        <a href="{{ url('category/create') }}"
                            class="dropdown-menu {{ Request::is('category/create') ? 'active' : '' }}"><i
                                class="fa fa-plus" aria-hidden="true"></i><span>Add
                                Category</span></a>
                    </div>
                </li>
                <li class="side-list {{ Request::is('orderlist') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.orderlist') }}" class="side-menu"><i class="fa fa-eye"
                            aria-hidden="true"></i><span>Order List</span></a>
                </li>
                <li class="side-list {{ Request::is('userlist') ? 'active' : '' }}">
                    <a href="{{ route('user.userlist') }}" class="side-menu"><i class="fa fa-eye"
                            aria-hidden="true"></i><span>User List</span></a>
                </li>
            </ul>
        </div>
        <div class="mv-section">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('js/library/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/library/way_point/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/library/counter_up/counter_up.js') }}"></script>
    <script src="{{ asset('js/admin_common.js') }}"></script>
    <script src="{{ asset('js/product.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    @stack('script')
</body>

</html>
