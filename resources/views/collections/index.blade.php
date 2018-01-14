@extends('layouts.full')

@section('content')

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <div class="pure-u-1-1">
        <table class="pure-table pure-table-horizontal">
            <thead>
            <tr>
                <th>ID</th>
                <th>Collection</th>
                <th>Canais</th>
                <th>id User</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($collec as $key => $value)
                <tr>
                    <td>{{ $value->idCollec }}</td>
                    <td>{{ $value->nomeCollec }}</td>
                    <td>{{ $value->canais }}</td>
                    <td>{{ $value->idUser }}</td>

                    <td>
                        <a class="btn btn-small btn-success" href="{{ URL::to('collections/'.$value->idCollec) }}">
                            Abrir coleção
                        </a>
                        <a class="btn btn-small btn-info" href="{{ URL::to('collections/' . $value->idCollec . '/edit') }}">
                            Editar Coleção
                        </a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection