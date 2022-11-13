@extends('user.common')
@section('content')
<div class="l-inner">
    <div class="home-ttl">
        <h2 class="pg-ttl">Your OneClick Paradise Is Here</h2>
        <h2 class="pg-ttl">Your OneClick Paradise Is Here</h2>
    </div>

    <div class="slider">
      <ul class="slick-slider clearfix">
        <li class="slick-content">
          <a href="#"><img src="{{ asset('user/img/pink_girl.jpg') }}" alt="Banner Slider 1"></a>
        </li>
        <li class="slick-content">
          <a href="#"><img src="{{ asset('user/img/blue_items.jpg') }}" alt="Banner Slider 2"></a>
        </li>
        <li class="slick-content">
          <a href="#"><img src="{{ asset('user/img/boss_girl_img.jpg') }}" alt="Banner Slider 3"></a>
        </li>
        <li class="slick-content">
          <a href="#"><img src="{{ asset('user/img/yellow_girl.jpg') }}" alt="Banner Slider 4"></a>
        </li>
        <li class="slick-content">
          <a href="#"><img src="{{ asset('user/img/hat_girl_img.jpg') }}" alt="Banner Slider 5"></a>
        </li>
        <li class="slick-content">
          <a href="#"><img src="{{ asset('user/img/three_girl_img.jpg') }}" alt="Banner Slider 6"></a>
        </li>
        <li class="slick-content">
          <a href="#"><img src="{{ asset('user/img/glass_girl_img.jpg') }}" alt="Banner Slider 7"></a>
        </li>
      </ul>
    </div>
  </div>
@endsection
