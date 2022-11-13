@extends('user.common')
@section('content')
    <div class="profile-blk">
        @if (session('status'))
            <div class="alert-box">
                <span class="alert-message">{{ session('status') }}<i class="fa-solid fa-xmark icon-btn js-close"></i></span>
            </div>
        @endif
        <div class="profileForm-blk">
            <button class="profileEdit-btn">
                <a href="{{ route('user.edit', Auth::user()) }}" class="success">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
            </button>
            <h2 class="profile-title">User profile Page</h2>
            <ul class="profile">
                <li>Name: <b>{{ Auth::user()->name }}</b></li>
                <li>Email: <b>{{ Auth::user()->email }}</b></li>
                <li>Address: <b>{{ Auth::user()->address }}</b></li>
            </ul>
            <ul class="social-icon">
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
            </ul>
        </div>
    </div>
@endsection
