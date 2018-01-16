@extends('layouts.box')


@section('content')

    <div class="uk-padding-remove">
        <h1 class="uk-text-center ">NOME DA COLEÇÃO</h1>
        {{ Form::open(array('url' => 'collections')) }}
        <div class="uk-flex uk-flex-center ">
            {{ Form::text('name','COLEÇÃO', array('class' => 'uk-input uk-form-width-large uk-form-large')) }}
        </div>

        <input type="hidden" name="hlista" id="hlista", value="teste">

        <div class="form-group ">

            <div class="uk-child-width-expand@s uk-text-center uk-margin-small-top" uk-grid>
                <div class="panel-content">
                    <div class="uk-padding-remove">CANAIS DISPONIVEIS</div>
                    <div class="uk-panel uk-overflow-auto uk-height-small uk-align-right">
                        @foreach($xml->body->outline->outline as $canal)
                            <div class="uk-flex  uk-flex-middle uk-padding-remove">
                                <div class="panel uk-width-3-4 uk-text-break"> {{$canal[0]['text']}} </div>

                                <div class="panel uk-width-1-4 uk-padding-remove">
                                    <div class="uk-flex  uk-flex-middle uk-flex-left ">
                                        <a class="uk-icon-link uk-padding-remove " id="novocanal" uk-icon="icon: plus-circle"
                                           onclick="insere(
                                                   '{{$xml->body->outline->outline[ $loop->index ]['xmlUrl']}}',
                                                   '{{$xml->body->outline->outline[ $loop->index ]['text']}}'
                                                   );"></a>
                                        <a class="uk-icon-link uk-padding-remove uk-margin-small-left"  uk-icon="icon: trash"
                                           onclick="this.disabled=true;insere(
                                                   '{{$xml->body->outline->outline[ $loop->index ]['xmlUrl']}}',
                                                   '{{$xml->body->outline->outline[ $loop->index ]['text']}}'
                                                   )"></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!--  lsita de canais adicionados-->
                <div class="panel-content ">
                    <div class="uk-padding-remove"> CANAIS ADICIONADOS</div>
                    <div class="uk-panel uk-overflow-auto uk-height-small">
                        <ul id="listCanal" class="uk-list uk-list-divider ">
                            <li >

                            </li>
                        </ul>
                    </div>
                </div>
            </div>



        </div>

        <div class="uk-margin uk-flex uk-flex-center" uk-margin>
            <button type="submit" class="uk-button uk-button-primary uk-width-3-4" onclick="enviar(); ">Criar Coleção</button>
        </div>
    </div>


    {{ Form::close() }}

    <script type="text/javascript">


        var listastring='';
        function enviar() {
            document.getElementById('hlista').value = listastring;
        }
        function insere (a,b) {

            listastring = listastring + "@" + a.replace ("https://www.youtube.com/feeds/videos.xml?channel_id=", "");

            var ul = document.getElementById("listCanal");
            var li = document.createElement("li");
            li.appendChild(document.createTextNode(b));
            ul.appendChild(li);
        }
    </script>
@endsection