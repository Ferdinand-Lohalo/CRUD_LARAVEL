<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tutoriel Laravel 8 CRUD</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        {{-- <link href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css" /> --}}
    </head>
    <body>
        
        <div class="container">
            @yield('content')
        </div>

        <script src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}" type="text/js"></script>
    </body>
</html>