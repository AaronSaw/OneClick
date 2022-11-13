<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password Email Page</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .header {
            text-align: center;
        }

        .body-blk {
            color: #fdb5dc;
        }
    </style>
</head>

<body>
    <div class="header">
        {!! $header !!}
    </div>
    <div class="body-blk">
        {!! $body !!}
    </div>
    <script src="{{ asset('js/library/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
