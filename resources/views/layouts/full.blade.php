


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

    <button class="uk-button uk-button-default uk-margin-small" type="button" uk-toggle="target: #menu">menu</button>

    <div class="uk-offcanvas-content">
    </div>
    <div id="menu" uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar">

                    <ul class="uk-nav uk-nav-default">
                        <li ><a href="#"">Configurações</a></li>
                        <li><a href="{{ URL::to('collections') }}">View All Nerds</a></li>
                        <li><a href="{{ URL::to('collections/create') }}" >Create a Nerd</a>
                        <li >Collections</li>
                        <li ><a href="#">Personal</></li>
                        <li ><a href="#" >Work</a></li>
                        <li ><a href="#" >Travel</a></li>
                    </ul>
        </div>
    </div>




    <div class="pure-u-1-1">
        @yield('content')
    </div>
</div>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>