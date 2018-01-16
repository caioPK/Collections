@extends('layouts.box')


@section('content')

    <div class="uk-padding-remove">

        {{ Form::open(array('url' => 'collections/'.$collec->idCollec.'edit')) }}
        {{Form::hidden('_method', 'PUT')}}
        <div class="uk-flex uk-flex-center uk-margin-medium-bottom">
            {{ Form::text('name',$collec->nomeCollec, array('class' => 'uk-input  uk-text-center uk-form-blank uk-text-uppercase uk-form-width-large uk-form-large')) }}
        </div>


        <div class="form-group ">
            <input type="hidden" name="hlista" id="hlista", value="tese">
            <div class="uk-child-width-expand@s uk-text-center uk-margin-small-top" uk-grid>

                <div class="panel-content">

                    <div class="uk-padding-remove">CANAIS ADICIONADOS</div>


                    <div class="uk-panel uk-overflow-auto uk-height-small uk-box-shadow-small uk-padding-small ">

                        <div class="uk-grid uk-flex  uk-flex-middle uk-padding-remove">
                            @foreach($nomes as $canal )
                                <div class="">

                                    <a class="uk-icon" uk-icon="icon: trash" onclick="remove('{{$canal['id']}}');" uk-toggle="animation: uk-animation-slide-left">
                                        {{$canal['nome']}}
                                    </a>

                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>



        </div>

        <div class="uk-margin uk-flex uk-flex-center" uk-margin>
            <button type="submit" class="uk-button uk-button-primary uk-width-3-4" onclick="enviar(); ">SALVAR MUDANÇAS</button>
        </div>
    </div>


    {{ Form::close() }}
    <script type="text/javascript">


        var listastring='';
        function enviar() {
            document.getElementById('hlista').value = listastring;
        }
        function remove (a) {
            listastring = listastring + "@" + a;
        }
    </script>

@endsection