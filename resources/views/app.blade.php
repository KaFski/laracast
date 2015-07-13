<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            @if(Session::has('flash_message')) 
                <div class="alert alert-success"> {{ Session::get('flash_message') }} </div>
            @endif
            @yield('content')
        </div>
    </body>
</html>
