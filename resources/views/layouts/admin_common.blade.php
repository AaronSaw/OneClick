<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin_common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/category.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>@yield('title')</title>
</head>

<body>
    <input type="checkbox" id="menu">
    <nav class="nav clearfix">
        <label for="menu" class="menu-bar">
            <i class="fa fa-bars"></i>
        </label>
        <a href="#" class="logo">One Click</a>
        <ul class="top-nav">
            <li>
                <a href=""><i class="fa fa-envelope"></i><span>0</span></a>
            </li>
            <li>
                <a href=""><i class="fa fa-bell"></i><span>0</span></a>
            </li>
            <li>
                <div class="profile">
                    <p class="dropbtn"><i class="fa fa-user" aria-hidden="true"></i></p>
                    <div class="dropdown-content">
                        <a href="{{ url('/userprofile') }}"><i class="fa fa-user" aria-hidden="true"></i>Profile</a>
                        <a href="{{ url('/logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>

    <div class="clearfix">
        <div class="side-nav">
            <center>
                <img src="{{ asset('img/user.png') }}" alt="profile pic"><br>
                <h4 class="username">user name</h4>
            </center><br>
            <hr>
            <a href="#"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a>
            <p class="pttl">Manage Product</p>
            <a href="{{ url('/product') }}"><i class="fa fa-eye" aria-hidden="true"></i><span>Product
                    List</span></a>
            <a href="{{ url('/product/create') }}"><i class="fa fa-plus" aria-hidden="true"></i><span>Add
                    Product</span></a>
            <p class="pttl">Manage Category</p>
            <a href="{{ url('/category') }}"><i class="fa fa-eye" aria-hidden="true"></i><span>Category
                    List</span></a>
            <a href="{{ url('/category/create') }}"><i class="fa fa-plus" aria-hidden="true"></i><span>Add
                    Category</span></a>
            <a href="{{ url('/user') }}"><i class="fa fa-eye" aria-hidden="true"></i><span>User List</span></a>
        </div>
        <div class="mv-section">
            @yield('content')
        </div>
    </div>

    <!-- Remember to include jQuery :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="{{ asset('js/admin_common.js') }}"></script>
    @stack('script')
</body>

</html>
