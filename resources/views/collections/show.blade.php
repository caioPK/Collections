@extends('layouts.full')

@section('menu')
    @foreach($nomes as $nome)
        @if($nome->idCollec == $collec->idCollec)
            <li class="uk-active uk-disabled"><a class="uk-text-uppercase " href="{{url('collections/')}}/{{$nome->idCollec}}">{{$nome->nomeCollec}}</a></li>
        @else
            <li ><a class="uk-text-uppercase" href="{{url('collections/')}}/{{$nome->idCollec}}">{{$nome->nomeCollec}}</a></li>
        @endif
    @endforeach
@endsection

@section('content')
        <h1 class="uk-heading-line uk-text-bold uk-text-uppercase uk-text-nowrap uk-text-center uk-margin-small-top">{{$collec->nomeCollec}}</h1>
        <div class="">

            <div class=" uk-flex-center uk-flex-1 uk-grid-small uk-text-center"uk-grid>

                @foreach($videos as $canal)
                    @foreach($canal as $video)

                        <div>

                            <a href='{{url('collections/video')}}/{{$video->id->videoId}}'>
                                <img src="https://i4.ytimg.com/vi/{{$video->id->videoId}}/hqdefault.jpg" width="300"><br></a>
                        </div>
                    @endforeach
                @endforeach

            </div>
        </div>



@endsection