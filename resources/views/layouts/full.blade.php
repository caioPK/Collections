


<!doctype html>
<html lang="PT">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>YouColletions</title>

    <link href="{{ asset('css/extra.css') }}" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.36/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.36/js/uikit-icons.min.js"></script>

</head>
<body>
<div class="uk-offcanvas-content ">
    <!-- menu toggle botão-->
    <div uk-sticky>
        <span class="uk-icon-button" uk-icon="icon: menu; ratio: 2" uk-toggle="target: #menu"></span>
    </div>

    <div id="menu" uk-offcanvas="mode: reveal; overlay: true">

        <div class="uk-offcanvas-bar uk-padding-remove"  >


            <div class="uk-flex-column">
                <!--<button class="uk-offcanvas-close" type="button" uk-close></button>-->
                <!--    AVATAR E NOME        -->
                <div class="uk-section-primary uk-flex-column uk-flex-right  " height="150px">
                    <div class="uk-flex uk-padding-remove ">


                                <div class="uk-padding-remove uk-section-default uk-flex uk-flex-column uk-flex-center uk-margin-small-left">
                                    <a class="uk-margin-small-bottom " href="{{ URL::to('collections') }}" uk-icon="icon: home"></a>
                                    <a class="uk-margin-small-bottom" href="#" uk-icon="icon: cog"></a>
                                    <a class="uk-icon" uk-icon="icon: sign-out" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">

                                    </a>
                                </div>


                        <div class="panel-content uk-align-center uk-padding-remove ">
                            <img class="uk-border-rounded  uk-padding-remove" src="https://pbs.twimg.com/profile_images/831993825635745796/HnVmB0-k_400x400.jpg"
                                 alt="Avatar" height="100" width="100" align="center">
                        </div>

                    </div>

                    <div class="uk-flex uk-flex-center uk-padding-remove uk-text-center" >
                        <p class="uk-padding-remove uk-text-bold" align="center">{{Auth::user()->name}}</p>
                    </div>
                </div>


                <!--    COLLECTIONS       -->
                <div class="uk-nav-header uk-nav-center"><a href="{{ URL::to('collections') }}" >COLLECTIONS</a></div>
                <hr>

                    <div class="uk-section-primary uk-padding-remove uk-height-medium uk-overflow-auto">
                        <div class="uk-container uk-padding-small ">
                            <ul class="uk-nav uk-nav-default  ">

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
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </div>


    <!--Modal inicial -->
    <div id="modal-sections" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title uk-text-center uk-text-bold">Adicionar</h2>
            </div>
            <div class="modal-body uk-padding-small">
                <div class="uk-panel uk-height-small uk-padding-small">
                    <div class="uk-flex uk-flex-column uk-flex-middle">
                        <div class="uk-panel uk-margin-small-bottom">
                            <h2>O que deseja adicionar?</h2>
                        </div>
                        <div class="uk-panel uk-flex uk-child-width-1-2\@s">
                            <a id="refXML" class="uk-button  uk-button-large uk-button-secondary uk-margin-small-right " href="{{url('xmls/'. Auth::user()->id .'/edit')}}" >XML</a>
                            <a class="uk-button uk-button-large uk-button-secondary " href="{{url('collections/url')}}">URL</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="uk-section uk-section-default uk-padding-remove">
        @yield('content')
    </div>
</div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>