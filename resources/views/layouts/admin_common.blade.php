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
                        <a href=""><i class="fa fa-envelope"></i><span>0</span></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-bell"></i><span>0</span></a>
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
                <h4 class="username">user name</h4>
            </center><br>
            <hr>
            <ul class="sidenav-item">
                <li>
                    <a href="{{ url('/admin-dashboard') }}" class="side-menu"><i class="fa fa-home"
                            aria-hidden="true"></i><span>Home</span></a>
                </li>
                <li class="sidenav-dropdown">
                    <a href="#" class="pttl">Manage Product </a>
                    <ul class="side-dropdown-content">
                        <li>
                            <a href="{{ url('/product') }}" class="side-menu"><i class="fa fa-eye"
                                    aria-hidden="true"></i><span>Product List</span></a>
                        </li>
                        <li>
                            <a href="{{ url('/product/create') }}" class="side-menu"><i class="fa fa-plus"
                                    aria-hidden="true"></i><span>Add
                                    Product</span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-dropdown">
                    <a href="#" class="pttl">Manage Category </a>
                    <ul class="side-dropdown-content">
                        <li>
                            <a href="{{ url('/category') }}" class="side-menu"><i class="fa fa-eye"
                                    aria-hidden="true"></i><span>Category List</span></a>
                        </li>
                        <li>
                            <a href="{{ url('/category/create') }}" class="side-menu"><i class="fa fa-plus"
                                    aria-hidden="true"></i><span>Add
                                    Category</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/user') }}" class="side-menu active"><i class="fa fa-eye"
                            aria-hidden="true"></i><span>User List</span></a>
                </li>
            </ul>
        </div>
        <div class="mv-section">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('js/library/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/admin_common.js') }}"></script>
</body>

</html>
