<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneClick | Team Memmber</title>
    <link rel="stylesheet" href="{{ asset('user/common_css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/common_css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('user/common_css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('user/common_css/member.css') }}">
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
                        <a href="#" class="link">TEAM MEMBER</a>
                        
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

<section class="member">
    <h2 class="member-ttl">Our Team</h2>
    <div class="member-card wrap">
        <div class="cards">
            <div class="card">
                <div class="content-card">
                    <div class="img-member rotate-bdr">
                        <img src="{{ asset('user/img/img_img1.png') }}" alt="Member Image">
                    </div>
                    <div class="info">
                        <div class="name">Mary</div>
                        <div class="detail">
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, cum.</p>
                        </div>
                        <div class="social-media">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="content-card">
                    <div class="img-member rotate-bdr">
                        <img src="{{ asset('user/img/img_img1.png') }}" alt="Member Image">
                    </div>
                    <div class="info">
                        <div class="name">Mary</div>
                        <div class="detail">
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, cum.</p>
                        </div>
                        <div class="social-media">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="content-card">
                    <div class="img-member rotate-bdr">
                        <img src="{{ asset('user/img/img_img1.png') }}" alt="Member Image">
                    </div>
                    <div class="info">
                        <div class="name">Mary</div>
                        <div class="detail">
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, cum.</p>
                        </div>
                        <div class="social-media">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="content-card">
                    <div class="img-member rotate-bdr">
                        <img src="{{ asset('user/img/img_img1.png') }}" alt="Member Image">
                    </div>
                    <div class="info">
                        <div class="name">Mary</div>
                        <div class="detail">
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, cum.</p>
                        </div>
                        <div class="social-media">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="user/js/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/js/all.min.js"></script>
<script src="user/js/main.js"></script>
</body>

</html>


