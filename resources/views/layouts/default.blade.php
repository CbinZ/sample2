<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title','Sample') - Laravel 新手入门教程</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('layouts._herder')

        <div class="content">
            <div class="col-md-8 col-md-offset-2">
                @yield('content')
                @include('layouts._footer')
            </div>
        </div>

    </body>
</html>