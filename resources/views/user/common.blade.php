<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneClick</title>
    <link rel="stylesheet" href="{{ asset('user/common_css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/common_css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('user/common_css/main.css') }}">
    {{-- Wow js css --}}
    <link rel="stylesheet" href="{{ asset('user/common_css/animate.css') }}">
    {{-- animate css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
    <header class="header wow slideInDown" data-wow-duration="1.5s">
        <div class="header-inner">
            <h1 class="logo"><a href="{{ url('/') }}"><img src="{{ asset('user/img/img_logo.png') }}" alt="OneClick"></a></h1>
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
                                <input type="text" name="" placeholder="Search..." class="search-input" id="show-search">
                                <button type="submit" class="cmn-btn search-btn"><i class="fa fa-search"></i></button>
                        </div>  
                        </a>             
                    </li>
                    <li class="menu-items"><a href="{{ url('/') }}" class="link">SHOP</a></li>
                    <li class="menu-items">
                        <span class="dropdown-items link side-arrow selector">
                            <select name="list-category" id="list-category" class="menu-category link">
                                <option value="">CATEGORIES</option>
                            </select>
                        </span>
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

    <footer class="footer wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">
        <div class="footer-inner">
            <div class="logo-side">
                <h1 class="footer-logo"><a href="{{ url('/') }}"><img src="{{ asset('user/img/img_logo.png') }}" alt=""></a></h1>
                <div class="social-media">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fa-solid fa-earth-americas"></i></a>
                </div>
            </div>
            <span class="bdr-footer"></span>
            <nav class="footer-section">
                <ul class="footer-list">
                    <li class="footer-items"><a href="{{ url('/') }}">CATEGORIES</a>
                        <ul class="footer-sublist">
                            <li><a href="#">Electronics</a></li>
                            <li><a href="#">Men's Fashion</a></li>
                            <li><a href="#">Women's Fashion</a></li>
                            <li><a href="#">Health & Beauty</a></li>
                            <li><a href="#">Home Appliances</a></li>
                        </ul>
                    </li>
                    <li class="footer-items">
                        <a href="#">INFORMATION</a>
                        <ul class="footer-sublist">
                            <li><a href="{{ url('/') }}">Shop</a></li>
                            <li><a href="{{ url('/') }}">Categories</a></li>
                            <li><a href="{{ url('/member') }}">Team Member</a></li>
                        </ul>
                    </li>
                    <li class="footer-items">
                        <a href="#">GOOGLE MAP</a>
                        <div class="map-blk">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.1859998658533!2d96.12852331488139!3d16.817126323427065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb3590712cc1%3A0xd1674b74cc622b2f!2sJunction%20Square!5e0!3m2!1sen!2smm!4v1668317119687!5m2!1sen!2smm" class="map"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        
    </footer>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/js/all.min.js"></script>
    <script src="{{ asset('user/js/slick.min.js') }}"></script>
    <script src="{{ asset('user/js/main.js') }}"></script>
    <script src="{{ asset('user/js/shop.js') }}"></script>
    {{-- scrollreveal js --}}
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    {{-- wow js --}}
    <script src="{{ asset('user/js/wow.min.js') }}"></script>
    
</body>

</html>