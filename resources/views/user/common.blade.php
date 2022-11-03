<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneClick</title>
    <link rel="stylesheet" href="{{ asset('user/common_css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/common_css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('user/common_css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('user/common_css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('user/common_css/main.css') }}">
</head>

<body>
    <header class="header">
        <div class="header-inner">
            <h1 class="logo"><a href="#"><img src="{{ asset('user/img/img_logo.png') }}" alt=""></a></h1>
            <div class="mobile-menu js-menu">
                <div class="menu-line">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <nav class="menu-section">
                <ul class="menu-list">
                    <li class="menu-items">
                        <a href="#" class="link">
                            <div class="search">    
                                <input type="text" name="" placeholder="Search..." class="search-input">
                                <button type="submit" class="cmn-btn search-btn"><i class="fa fa-search"></i></button>
                        </div>  
                        </a>             
                    </li>
                    <li class="menu-items"><a href="#" class="link side-arrow">SHOP</a></li>
                    <li class="menu-items">
                        <a href="#" class="link side-arrow">CATEGORY</a>
                        <p class="sub-toggle js-accordion"></p>
                        <div class="dropdown-menu">
                            <ul class="sub-menu-list">
                                <li class="sub-item"><a href="#" class="sub-link">Clothes</a></li>
                                <li class="sub-item"><a href="#" class="sub-link">Clothes</a></li>
                                <li class="sub-item"><a href="#" class="sub-link">Clothes</a></li>
                                <li class="sub-item"><a href="#" class="sub-link">Clothes</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-items">
                        <a href="{{ url('/member') }}" class="link">TEAM MEMBER</a> 
                    </li>
                    <li class="menu-items btn-login">
                        <a href="#" class="link login">
                            LOGIN
                        </a>
                        <span class="login-gap"> | </span>
                        <a href="#" class="link register">
                            REGISTER
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    @yield('content')
   
    <footer class="footer">
        <div class="footer-inner">
            <div class="logo-side">
                <h1 class="footer-logo"><a href="#"><img src="{{ asset('user/img/img_logo.png') }}" alt=""></a></h1>
                <div class="social-media">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fa-solid fa-earth-americas"></i></a>
                </div>
                <p class="footer-txt">Stay in touch with our promotions, discounts, sales, and special offers.</p>
                <div class="footer-search search">
                    <a href="#"> 
                            <input type="text" name="" placeholder="Message..." class="search-input email-input">
                            <button type="submit" class="cmn-btn search-btn"><i class="fa-solid fa-paper-plane"></i></button> 
                    </a>             
                </div>
            </div>
            <span class="bdr-footer"></span>
            <nav class="footer-section">
                <ul class="footer-list">
                    <li class="footer-items"><a href="#">CATEGORIES</a>
                        <ul class="footer-sublist">
                            <li><a href="#">Clothes</a></li>
                            <li><a href="#">Clothes</a></li>
                            <li><a href="#">Clothes</a></li>
                            <li><a href="#">Clothes</a></li>
                            <li><a href="#">Clothes</a></li>
                            <li><a href="#">Clothes</a></li>
                            <li><a href="#">Clothes</a></li>
                        </ul>
                    </li>
                    <li class="footer-items">
                        <a href="#">INFORMATION</a>
                        <ul class="footer-sublist">
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Categories</a></li>
                            <li><a href="#">Team Member</a></li>
                        </ul>
                    </li>
                    <li class="footer-items">
                        <a href="#">CONTACTS</a>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </li>
                </ul>
            </nav>
        </div>
        
    </footer>

    <script src="{{ asset('user/js/jquery-3.6.0.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/js/all.min.js"></script>
    <script src="{{ asset('user/js/slick.min.js') }}"></script>
    <script src="{{ asset('user/js/main.js') }}"></script>
</body>

</html>