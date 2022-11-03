@extends('layouts.admin_common')

@section('content')
<div class="profile-container">
  <div class="profile-detail">
    <button class="profile-edit"><a href="{{ url('/adminProfile/edit') }}">Edit</a></button>
    <img src="{{ asset('img/user.png') }}" alt="profile pic"><br>
    <div>
      <p class="name">Name    - </p>
      <p class="email">Email   - </p>
      <p class="address">Address - </p>
    </div>

    <ul class="social">
      <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
      <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
      <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
    </ul>
  </div>
</div>
@endsection
