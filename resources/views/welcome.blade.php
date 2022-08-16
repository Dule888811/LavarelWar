<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .links {
            display: flex;
            justify-content: space-between;
        }
        .first-form {
            transform: translate(-25%, 6%);
        }
        .second-form{
            transform: translate(20%, 6%);
        }
        .soldiers-Label {
            display:block;
        }
        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
<?php $test = new \App\SerbianSoldier(1,1,1,1); dd($test) ?>
    <div class="content">
        <div class="title m-b-md">
            URA
        </div>

        <div class="links">
            <form method="GET" action ="{{route('nato-soldiers')}}" class="first-form">
                <div class="form-group">
                    <label class="soldiers-Label" for="NATO">Enter number of NATO soldiers</label>
                    <input type="number" class="form-control"  min="100" required="true" name="NATO" id="NATO"  placeholder=" NATO soldiers">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <form method="GET" action="{{route('sr-soldiers')}}" class="second-form">
                <div class="form-group">
                    <label class="soldiers-Label" for="Serbian">Enter number of Serbian soldiers</label>
                    <input type="number" class="form-control" min="100" required="true" name="Serbian" id="Serbian"  placeholder=" Serbian soldiers">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
