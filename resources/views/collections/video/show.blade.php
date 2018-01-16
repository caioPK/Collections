@extends('layouts.full')

@section('menu')
    @foreach($collec as $key => $value)
        <li ><a class="uk-text-uppercase" href="{{url('collections/')}}/{{$value->idCollec}}">{{$value->nomeCollec}}</a></li>
    @endforeach
@endsection


@section('content')

    <div class="uk-flex uk-flex-column uk-flex-middle">

            <div class="uk-flex uk-flex-column">
                <div class="pure-u-1-2">
                    <h1 class="email-content-title">{{$dados->snippet->title}}<br></h1>
                </div>

                <div class="uk-flex  ">
                    <p class="email-content-subtitle">
                    <!-- From <a>{{$dados->snippet->title}}</a> at <span>3:56pm, April 3, 2012</span> -->
                        By <a>{{$dados->snippet->channelTitle}}</a> at <span>{{$dados->snippet->publishedAt}}</span>
                    </p>
                    <panel class="uk-float-right">
                        <button class="secondary-button pure-button">Não lida</button>
                        <button class="secondary-button pure-button">Ler depois</button>
                        <button class="secondary-button pure-button">Share</button>
                    </panel>
                </div>
            </div>

            <div class="email-content-body">
                <br><iframe src='http://www.youtube.com/embed/{{$dados->id}}' width="640" height="360" allowfullscreen>
                </iframe><br>
                <p> <pre class="descricao"> {{$dados->snippet->description}} </pre><br> </p>
            </div>

    </div>


@endsection