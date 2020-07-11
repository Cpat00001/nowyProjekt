<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
              <h2>main page: MojProjekt</h2>
              <h5>CRUD App Laravel</h5>
            </div>
            <div>
                <ul>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('posts.index') }}">Posts</a></li>
                    <li><a href="{{ route('posts.create') }}">Create a Post</a></li>
                </ul>
            </div>
        </div>

        @if(session()->has('status'))
            <h3 style="color:green">{{ session()->get('status') }}</h3>
        @endif

        <p>@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@</p>
        @section('sidebar')
            This line comes from layouts/app.blade.php.
        @show

        <div class="container" style="background-color:rgb(209, 204, 204)">
            @yield('content')
        </div>
    </body>
</html>