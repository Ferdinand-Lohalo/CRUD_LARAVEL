<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CRUD|LARAVEL 8</title>

        {{-- ***css de bootstrap*** --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Boutique</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="create">Admin</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="cars">Liste des voitures disponibles</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
            @yield('content')
        </div>
        <footer class="blog-footer">
            <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            <p>
              <a href="#">Back to top</a>
            </p>
        </footer>
        {{-- ***js local*** --}}
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}" type="text/js"></script>
    </body>
</html>