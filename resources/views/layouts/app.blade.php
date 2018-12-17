<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Planning Melbourne') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bankgothic_medium.css') }}" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/knox_screen.css" rel="stylesheet">
     <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    
</head>
<body>
    <div id="app">
    
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="d-flex flex-column">
                <a class="navbar-brand" style="margin-top:-6px;" href="/directories/4">&nbsp;&nbsp;<img src="/images/header/pm_header.png" alt="Planning Melbourne heading" width="50%"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="p-2">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">            
                        <div class="navbar-nav" style="margin-top:-24px;">
                            <a class="nav-item nav-link" href="/directories/4">Home</a>
                            <a class="nav-item nav-link" href="{{ action('BooksController@index') }}">Publications</a>
                            <a class="nav-item nav-link" href="{{ action('ArticlesController@index') }}">Articles</a>
                            <a class="nav-item nav-link" href="{{ action('PeopleController@index') }}">People</a>
                            <a class="nav-item nav-link" href="{{ action('PlacesController@index') }}">Places</a>
                            <a class="nav-item nav-link" href="{{ action('DirectoriesController@show', [3]) }}">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </div>
    <div class="block w95 centre_one">
        <div class="container-fluid">
            @yield('content')
            @yield('sidebar')
            @yield('footer')
            @yield('vars')
       </div>
    </div>

    <div class="container">
        @yield('content2')     
    </div>
                   

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
