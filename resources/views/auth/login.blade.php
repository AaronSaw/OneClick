<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="login-form">
        @if (session('error'))
            <div class="alert-box">
                <span class="alert-message">{{ session('error') }}<i
                        class="fa-solid fa-xmark icon-btn js-close"></i></span>
            </div>
        @endif
        @if (session('info'))
            <div class="alert-green">
                <span class="message-green">{{ session('info') }}<i
                        class="fa-solid fa-xmark icon-btn js-close"></i></span>
            </div>
        @endif
        @if (session('registerSuccess'))
            <div class="alert-green">
                <h3 class="message-green">{{ session('registerSuccess') }}<i
                        class="fa-solid fa-xmark icon-btn js-close"></i></h3>
            </div>
        @endif
        <div class="form-blk">
            <h2 class="title">Login Form</h2>
            <form action="{{ route('auth.create') }}" method="POST">
                @csrf
                <div class="input-gp">
                    <label for="email">Name or Email:</label><br>
                    <input type="text" name="email" id="email" placeholder="Enter name or email.."
                        value="{{ old('email') }}">
                    @error('email')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-gp">
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" id="password" placeholder="Enter password..."
                        value="{{ old('password') }}">
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-gp login-blk">
                    <input type="submit" value="Login" class="login-btn">
                    <div class="forgot-pw">
                        <p><a href="{{ route('forgot.index') }}">Forgot Password?</a></p>
                        <p>Don't have an account? <a href="{{ route('auth.register') }}">Sign Up Here!</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="background-wrap">
        <div class="bubble x1"></div>
        <div class="bubble x2"></div>
        <div class="bubble x3"></div>
        <div class="bubble x4"></div>
        <div class="bubble x5"></div>
        <div class="bubble x6"></div>
    </div>

    <script src="{{ asset('js/library/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
