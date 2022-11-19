@extends('layouts.admin_common')

@section('content')
<div class="profile-container">
  @if (session('status'))
  <div class="alert ">
    {{ session('status') }}
  </div>
  @endif
  <div class="profile-detail">
    <button class="profile-edit">
      <a href="{{ route('user.userEdit', Auth::user()) }}" class="success">
        <i class="fa-solid fa-pen-to-square"></i>
      </a>
    </button>
    <img src="{{ asset('img/userProfile.png') }}" alt="profile pic">
    <ul class="profile-content">
      <li>Name: <b>{{ Auth::user()->name }}</b></li>
      <li>Email: <b>{{ Auth::user()->email }}</b></li>
      <li>Address: <b>{{ Auth::user()->address }}</b></li>
    </ul>
    <ul class="social">
      <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
      <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
      <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
      <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
    </ul>
  </div>
</div>
@endsection
