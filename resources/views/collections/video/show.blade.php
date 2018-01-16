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
                    </panel>
                </div>
            </div>

            <div class="uk-panel uk-width-large">
                <div class="uk-flex uk-flex-column uk-flex-middle">
                    <br>
                    <iframe uk-responsive src='http://www.youtube.com/embed/{{$dados->id}}' width="1224" height="720" allowfullscreen> </iframe>
                    <br>
                </div>
            </div>

    </div>


@endsection