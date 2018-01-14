


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.36/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.36/js/uikit-icons.min.js"></script>

</head>
<body>
<div class="uk-offcanvas-content ">
    <!-- menu toggle botão-->
    <div uk-sticky>
        <button class="uk-button uk-button-default uk-margin-small" type="button" uk-toggle="target: #menu">menu</button>
    </div>

    <div id="menu" uk-offcanvas="mode: reveal; overlay: true">

        <div class="uk-offcanvas-bar uk-width-4-5" >
            <!--<button class="uk-offcanvas-close" type="button" uk-close></button>-->
            <div class="uk-panel">
                <ul class="uk-nav uk-nav-default uk-height-small" >
                    <!--Circle image
                    <img class="uk-border-circle" src="" alt="">
                    -->
                    <div class="uk-height-small uk-margin-large-bottom">
                        <img class="uk-border-circle uk-align-center uk-margin-small-bottom" src="https://pbs.twimg.com/profile_images/831993825635745796/HnVmB0-k_400x400.jpg"
                             alt="Avatar" height="120" width="120" align="center">

                            <div align="center" class="uk-margin-small-bottom ">
                                {{Auth::user()->name}}
                            </div>

                        <p align="center">
                            <a href="{{ URL::to('collections/create') }}" uk-icon="icon: plus"></a>
                            <a href="{{ URL::to('collections') }}" uk-icon="icon: copy"></a>
                        </p>
                    </div>
                </ul>
            </div>

            <div class="uk-panel uk-margin-large-top">
                <ul class="uk-nav uk-nav-default ">
                    <li class="uk-nav-header uk-nav-center">COLLECTIONS</li>
                    <li class="uk-nav-divider"></li>
                    <div class="uk-panel uk-margin-small-top">

                        <li ><a href="#">Personal</a></li>
                        <li ><a href="#" >Work</a></li>
                        <li ><a href="#" >Travel</a></li>  <li ><a href="#">Personal</a></li>
                        <li ><a href="#" >Work</a></li>
                        <li ><a href="#" >Travel</a></li>  <li ><a href="#">Personal</a></li>
                        <li ><a href="#" >Work</a></li>
                        <li ><a href="#" >Travel</a></li>  <li ><a href="#">Personal</a></li>
                        <li ><a href="#" >Work</a></li>
                        <li ><a href="#" >Travel</a></li>  <li ><a href="#">Personal</a></li>
                        <li ><a href="#" >Work</a></li>
                        <li ><a href="#" >Travel</a></li>  <li ><a href="#">Personal</a></li>
                        <li ><a href="#" >Work</a></li>
                        <li ><a href="#" >Travel</a></li>  <li ><a href="#">Personal</a></li>
                        <li ><a href="#" >Work</a></li>
                        <li ><a href="#" >Travel</a></li>  <li ><a href="#">Personal</a></li>
                        <li ><a href="#" >Work</a></li>
                        <li ><a href="#" >Travel</a></li>
                    </div>
                </ul>



        </div>

            </ul>


        </div>

    </div>




    <div class="uk-section uk-section-default">
        @yield('content')
    </div>
</div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>