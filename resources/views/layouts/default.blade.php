<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title','Sample') - Laravel 新手入门教程</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('layouts._herder')

        <div class="content">
            <div class="col-md-10 col-md-offset-1">
                @include('shared._messages')
                @yield('content')
                @include('layouts._footer')
            </div>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>