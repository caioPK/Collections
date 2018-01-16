@extends('layouts.box')


@section('content')

    <div class="uk-padding-remove">

        {{ Form::open(array('url' => 'collections/'.$collec->idCollec.'edit')) }}
        {{Form::hidden('_method', 'PUT')}}
        <div class="uk-flex uk-flex-center uk-margin-medium-bottom">
            {{ Form::text('name',$collec->nomeCollec, array('class' => 'uk-input  uk-text-center uk-form-blank uk-text-uppercase uk-form-width-large uk-form-large')) }}
        </div>

        <input type="hidden" name="hlista" id="hlista", value="teste">

        <div class="form-group ">

            <div class="uk-child-width-expand@s uk-text-center uk-margin-small-top" uk-grid>

                <div class="panel-content">

                    <div class="uk-padding-remove">CANAIS ADICIONADOS</div>

                    <div class="uk-panel uk-overflow-auto uk-height-small ">

                        <div class="uk-flex  uk-flex-middle uk-padding-remove">
                            @foreach($nomes as $nome )
                                <p>{{$nome}}</p>
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


@endsection