<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <title>One Click</title>
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
                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i>Profile</a>
                        <a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                    </div>
                  </div>
            </li>
        </ul>
        <!--<label for="menu" class="menu-bar">
            <i class="fa fa-bars"></i>
        </label>-->
    </nav>

    <div class="side-nav">
        <center>
            <img src="{{asset('img/user.png')}}" alt="profile pic"><br>
            <h4 class="username">user name</h4>
        </center><br> 
        <hr>
        <a href="#"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a>
        <p class="pttl">Manage Product</p>
        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i><span>Product List</span></a>
        <a href="#"><i class="fa fa-plus" aria-hidden="true"></i><span>Create Product</span></a>
        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i><span>User List</span></a>

        <!--<a href="#"><i class="fa-regular fa-pen-to-square"></i><span>Edit Post</span></a>-->
        <!--<a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span>Setting</span></a>  -->
        <!--<a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i><span>Log Out</span></a>-->
    </div>
    @yield('content')
</body>
</html>