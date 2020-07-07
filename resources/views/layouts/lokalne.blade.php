<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            Some extra text from parent blade.
        @show

        <div class="container">
            @yield('Lokalne')
        <div style="background-color:rgb(121, 112, 160);height:50px;width:500px;text-align:center">
            @yield('stopka')
        </div>
        </div>
    </body>
</html>