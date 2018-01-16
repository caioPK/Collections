@extends('layouts.box')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(Auth::guest())
                        Você deve logar primeiro.
                    @else
                            <div class="panel-heading">Atualizar XML</div>

                            <form action="{{url('xmls/editar')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="file" name="file"/>
                                <input type="submit">
                            </form>

                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection