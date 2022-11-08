@extends('layouts.admin_common')

@section('content')
<div class="profile-container">
    @if (session('status'))
        <div class="alert ">
            {{ session('status') }}
        </div>
    @endif
    <div class="profile-detail">
        <button class="profile-edit"><a href="{{ route('user.userEdit', Auth::user()) }}" class="success"><i class="fa-solid fa-pen-to-square"></i></a></button>
        <img src="{{ asset('img/user.png') }}" alt="profile pic"><br>
        <div>
            <p class="name">Name  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  - &nbsp;&nbsp; {{ Auth::user()->name }} </p>
            <p class="email">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  - &nbsp;&nbsp; {{ Auth::user()->email }}</p>
            <p class="address">Address &nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp; {{ Auth::user()->address }}</p>
        </div>

        <ul class="social">
            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
        </ul>
    </div>
</div>
@endsection
