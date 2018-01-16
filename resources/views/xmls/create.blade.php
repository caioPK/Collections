@extends('layouts.box')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(Auth::guest())
                        Você deve logar primeiro.
                    @else
                        @if(\youCollections\xml::find(Auth::user()->id))
                            Você já possue um XML, deseja atualizar?
                        @else
                            <form action="{{url('xmls')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <h1 class="panel-heading uk-text-center uk-text-bold">Adicionar XML</h1>

                                <div class="js-upload uk-placeholder uk-text-center">
                                    <span uk-icon="icon: cloud-upload"></span>
                                    <span class="uk-text-middle">Arraste seu arquivo aqui ou</span>
                                    <div uk-form-custom>
                                        <input name="file"type="file">
                                        <span class="uk-link">procure por ele</span>
                                    </div>
                                </div>

                                <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>

                                <input type="file" name="file" >
                                <input id="botaoEnviar" type="submit"  >



                            </form>
                        @endif
                    @endif
                </div>
            </div>
        </div>

    </div>
    <script>

        var bar = document.getElementById('js-progressbar');
        var botao = document.getElementById('botaoEnviar');


        UIkit.upload('.js-upload', {

            url: '',
            multiple: true,

            beforeSend: function () {
                console.log('beforeSend', arguments);
            },
            beforeAll: function () {
                console.log('beforeAll', arguments);
            },
            load: function () {
                console.log('load', arguments);
            },
            error: function () {
                console.log('error', arguments);
            },
            complete: function () {
                console.log('complete', arguments);
            },

            loadStart: function (e) {
                console.log('loadStart', arguments);

                bar.removeAttribute('hidden');
                bar.max = e.total;
                bar.value = e.loaded;
            },

            progress: function (e) {
                console.log('progress', arguments);

                bar.max = e.total;
                bar.value = e.loaded;
            },

            loadEnd: function (e) {
                console.log('loadEnd', arguments);

                bar.max = e.total;
                bar.value = e.loaded;
            },

            completeAll: function () {
                console.log('completeAll', arguments);

                setTimeout(function () {
                    bar.setAttribute('hidden', 'hidden');
                }, 100);

                alert('Upload Completed');
                botao.removeAttribute('hidden');

            }

        });

    </script>
@endsection

