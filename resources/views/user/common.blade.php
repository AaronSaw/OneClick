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
  <link rel="stylesheet" href="{{ asset('user/common_css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('user/common_css/changePassword.css')}}">
  <link rel="stylesheet" href="{{ asset('user/common_css/profile.css')}}">
  <link rel="stylesheet" href="{{ asset('user/common_css/profileEdit.css')}}">
  <link rel="stylesheet" href="{{ asset('user/common_css/shop.css') }}">
  <link rel="stylesheet" href="{{ asset('user/common_css/detail.css') }}">
  <link rel="stylesheet" href="{{ asset('user/common_css/aboutUs.css') }}">
</head>

<body>
  <header class="header">
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
          @if (url()->current() == 'http://127.0.0.1:8000')
          <li class="menu-items">
            <a href="#" class="link">
              <div class="search">
                <input type="text" name="" placeholder="Search..." class="search-input" id="show-search">
                <button type="submit" class="cmn-btn search-btn"><i class="fa fa-search"></i></button>
              </div>
            </a>
          </li>
          @endif
          <li class="menu-items"><a href="{{ url('/shop') }}" class="link">SHOP</a></li>
          @if (url()->current() == 'http://127.0.0.1:8000')
          <li class="menu-items">
            <span class="dropdown-items link side-arrow">
              <select name="" id="list-category" class="menu-category link">
                <option value="">ALL CATEGORIES</option>
              </select>
            </span>
          </li>
          @endif
          <li class="menu-items">
            <a href="{{ url('/member') }}" class="link">TEAM MEMBER</a>
          </li>
          <li class="menu-items btn-login">
            <div class="profile">
              <div class="dropbtn">
                <i class="fa fa-user" aria-hidden="true"></i>
              </div>
              <div class="dropdown-content">
                <a href="{{ url('/userProfile') }}"><i class="fa fa-user" aria-hidden="true"></i>
                  Profile </a>
                <a href="{{ url('/user/changePassword') }}"><i class="fa fa-key" aria-hidden="true"></i>
                  Change Password </a>
                <a href="{{ url('/logout') }}"><i class="fa-solid fa-right-from-bracket"></i> Logout
                </a>
              </div>
            </div>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/js/all.min.js"></script>
  <script src="{{ asset('user/js/slick.min.js') }}"></script>
  <script src="{{ asset('user/js/main.js') }}"></script>
  <script src="{{ asset('user/js/shop.js') }}"></script>
  <script src="{{ asset('js/index.js')}}"></script>
  <script src="{{ asset('user/js/slider.js')}}"></script>
  <script src="{{ asset('user/js/detail.js') }}"></script>
  <script src="{{ asset('user/js/tab.js') }}"></script>
  @stack('script')
</body>

</html>
