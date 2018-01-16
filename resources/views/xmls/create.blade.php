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
                            <div class="panel-heading">Gerenciar incrições</div>

                            <form action="{{url('xmls')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="file" name="file"/>
                                <input type="submit">
                            </form>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
