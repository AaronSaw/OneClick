@extends('user.common')
@section('content')
<div class="profileEdit-blk">
    <div class="profileForm-edit">
        <h2 class="profileEdit-title">User Edit Form</h2>
        <a href="{{ route('user#profile') }}"><i class="fa-solid fa-xmark icon-profile"></i></a>
        <form action="{{ route('user#update',Auth::user()->id) }}" method="POST">
            @csrf
            <div class="input-gp">
                <label for="name">User Name:</label><br>
                <input type="text" name="name" id="name" value="{{Auth::user()->name}}">
                @error('name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-gp">
                <label for="email">User Email:</label><br>
                <input type="email" name="email" id="email" value="{{Auth::user()->email}}">
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-gp">
                <label for="address">User Address:</label><br>
                <input type="text" name="address" id="address" value="{{Auth::user()->address}}">
                @error('address')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-gp change-blk">
                <input type="submit" value="Update User Profile" class="change-btn">
            </div>
        </form>
    </div>
</div>
@endsection
