<!doctype html>
<html lang="PT">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>YouCollections</title>

<!-- Styles<link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->    <link href="{{ asset('css/extra.css') }}" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.36/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.36/js/uikit-icons.min.js"></script>

</head>
<body>
<div class="uk-container-medium uk-padding-small">
    <a class="uk-icon-link  uk-float-right"  href="{{ URL::to('/') }}" uk-icon="icon: arrow-left; ratio:3;"></a>

        @yield('content')

</div>

</body>
</html>