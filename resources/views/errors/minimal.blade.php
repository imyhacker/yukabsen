 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('code') | @yield('message')</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:700,900" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('error/css/style.css')}}" />
</head>

<body>

    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h1>@yield('code')</h1>
            </div>
            <h2>Oops! This Page @yield('message')</h2>
            <p>{{ config('app.name', 'YukAbsen') }} - Arikun</p>
            <a href="/admin">Go To Homepage</a>
        </div>
    </div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
