<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <style>
            .alert {
                padding: 10px;
            }

            .alert-notice {
                background-color: blue;
            }    

            .alert-sucess {
                background: #8AC48A;
            }

            .alert-error {
                background-color: red;
                color: white;
            }
        </style>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                @include('flash')

                <h1>Laravel</h1>

                <a href="/sucess">Click Here to see Flash messages - Success</a><br>
                <a href="/notice">Click Here to see Flash messages - Notice</a><br>
                <a href="/error">Click Here to see Flash messages - Error</a>
            </div>
        </div>
    </body>
</html>
