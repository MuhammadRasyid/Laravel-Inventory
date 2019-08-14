<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    </head>
    <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ url('/')}}">KOI CAFE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">                                                  
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/crew') }}">Crew</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Stok Barang</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container mb-4" style="margin-top: 80px;">
            <h3>Koi Cafe Indonesia</h3>
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
</html>











