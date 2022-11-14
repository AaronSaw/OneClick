@extends('layouts.admin_common')

@section('content')
    <div class="changePassword">
        @if (session('success_message'))
            <div class="change-success">
                <span class="change-message">{{ session('success_message') }}<i
                        class="fa-solid fa-xmark icon-btn js-close"></i></span>
            </div>
        @endif
        <div class="form-blk">
            <h2 class="title">ChangePassword Form</h2>
            <form action="{{ route('update.password') }}" method="POST">
                @csrf
                <div class="input-gp">
                    <label for="current_password">Current Password:</label><br>
                    <input type="password" name="current_password" id="current_password"
                        placeholder="Enter current password..." value="{{ old('current_password') }}">
                    @error('current_password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-gp">
                    <label for="new_password">New Password:</label><br>
                    <input type="password" name="new_password" id="new_password" placeholder="Enter new password..."
                        value="{{ old('new_password') }}">
                    @error('new_password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-gp">
                    <label for="confirm_password">Comfirm Password:</label><br>
                    <input type="password" name="confirm_password" id="confirm_password"
                        placeholder="Enter confirm password..." value="{{ old('confirm_password') }}">
                    @error('confirm_password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-gp change-blk">
                    <input type="submit" value="Change Password" class="change-btn">
                </div>
            </form>
        </div>
    </div>
@endsection
