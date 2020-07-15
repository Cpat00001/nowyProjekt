<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" >
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
              <h2>main page: MojProjekt</h2>
              <h5>CRUD App Laravel</h5>
            </div>
            <div class="container">
              
                <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
                    <h5 class="my-0 mr-md-auto font-weight-normal">Laravel Blog</h5>
                    <nav class="my-2 my-md-0 mr-md-3">
                        <a class="p-2 text-dark" href="{{ route('home') }}">Home</a>
                        <a class="p-2 text-dark" href="{{ route('contact') }}">Contact</a>
                        <a class="p-2 text-dark" href="{{ route('posts.index') }}">Blog Posts</a>
                        <a class="p-2 text-dark" href="{{ route('posts.create') }}">Add Blog Post</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container">
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
    </div>
        <script src="{{ mix('js/app.js') }}" ></script>
    </body>
</html>