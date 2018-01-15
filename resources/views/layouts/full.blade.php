


<!doctype html>
<html lang="PT">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles<link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->    <link href="{{ asset('css/extra.css') }}" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.36/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.36/js/uikit-icons.min.js"></script>

</head>
<body>
<div class="uk-offcanvas-content ">
    <!-- menu toggle botão-->
    <div uk-sticky>
        <span class="" uk-icon="icon: menu; ratio: 2" uk-toggle="target: #menu"></span>
    </div>

    <div id="menu" uk-offcanvas="mode: reveal; overlay: true">

        <div class="uk-offcanvas-bar uk-padding-remove"  >


            <div class="uk-flex-column">
                <!--<button class="uk-offcanvas-close" type="button" uk-close></button>-->
                <!--    AVATAR E NOME        -->
                <div class="uk-section-primary uk-flex-column ">
                    <div class="uk-flex ">

                            <div class="uk-flex uk-flex-column uk-flex-center uk-margin-small-left">
                                <a class="uk-margin-small-bottom uk-margin-small-left" href="{{ URL::to('collections') }}" uk-icon="icon: home"></a>
                                <a class="uk-margin-small-left" href="#" uk-icon="icon: cog"></a>
                            </div>

                        <div class="panel-content uk-align-center">
                            <img class="uk-border-circle  uk-margin-small-bottom" src="https://pbs.twimg.com/profile_images/831993825635745796/HnVmB0-k_400x400.jpg"
                                 alt="Avatar" height="120" width="120" align="center">
                        </div>

                    </div>

                    <div class="uk-flex uk-flex-center uk-padding-remove" >
                        <p class="uk-padding-remove" align="center">{{Auth::user()->name}}</p>
                    </div>
                </div>


                <!--    COLLECTIONS       -->
                <div class="uk-nav-header uk-nav-center"><a href="{{ URL::to('collections') }}" >COLLECTIONS</a></div>
                <hr>

                    <div class="uk-section-primary uk-padding-remove ">
                        <div class="uk-container uk-padding-small">
                            <ul class="uk-nav uk-nav-default ">

                                    @yield('menu')

                            </ul>
                        </div>
                    </div>

                <!--       BOTÃO ADICIONAR      --->
                <hr>
                <a class="uk-button uk-button-primary uk-width-1-1 "  href="{{ URL::to('collections/create') }}">COLEÇÃO</a>
                <a class="uk-button  uk-button-secondary uk-width-1-1" href="#modal-sections" uk-toggle>ADD</a>
            </div>
        </div>
    </div>

    <div id="modal-sections" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title">Adicionar</h2>
            </div>
            <div class="uk-modal-body">
                <p>O que deseja adicionar?.</p>
                <a class="uk-button  uk-button-secondary " href="#modal-xml" uk-toggle>XML</a>
                <a class="uk-button  uk-button-secondary " href="#modal-url" uk-toggle>URL</a>
            </div>

            <div class="uk-modal-footer uk-text-right">
                <button class="uk-button uk-button-danger uk-modal-close" type="button">Cancel</button>
                <button class="uk-button uk-button-primary" type="button">Save</button>
            </div>
        </div>
    </div>

    <div id="modal-url"  class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title">Adicionar nova URL</h2>
            </div>
            <div class="uk-modal-body">
                <p>Digite aqui sua nova URL.</p>
            </div>

            <div class="uk-modal-footer uk-text-right">
                <button class="uk-button uk-button-danger uk-modal-close" type="button">Cancel</button>
                <button class="uk-button uk-button-primary" type="button">Save</button>
            </div>
        </div>
    </div>

    <div id="modal-xml" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title">Adicionar novo XML</h2>
            </div>
            <div class="uk-modal-body">
                <p>O que deseja adicionar?.</p>
            </div>

            <div class="uk-modal-footer uk-text-right">
                <button class="uk-button uk-button-danger uk-modal-close" type="button">Cancel</button>
                <button class="uk-button uk-button-primary" type="button">Save</button>
            </div>
        </div>
    </div>


    <div class="uk-section uk-section-default">
        @yield('content')
    </div>
</div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>