<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <h1>HEADER</h1>
        @section('sidebar')
            This is the master sidebar.
        @show
 
        <div class="container">
            @yield('content')
        </div>
        <h1>FOOTER</h1>
    </body>
</html>