@extends('layouts.full')

@section('content')
<div class="uk-section uk-section-primary">
    <div id="main" class="pure-u-1">
        <div class="email-content">
            <div class="email-content-header pure-g">
                <div class="pure-u-1-2">
                    <h1 class="email-content-title">{{$dados->snippet->title}}<br></h1>
                    <p class="email-content-subtitle">
                    <!-- From <a>{{$dados->snippet->title}}</a> at <span>3:56pm, April 3, 2012</span> -->
                        By <a>{{$dados->snippet->channelTitle}}</a> at <span>{{$dados->snippet->publishedAt}}</span>
                    </p>
                </div>

                <div class="email-content-controls pure-u-1-2">
                    <button class="secondary-button pure-button">Não lida</button>
                    <button class="secondary-button pure-button">Ler depois</button>
                    <button class="secondary-button pure-button">Share</button>
                </div>
            </div>

            <div class="email-content-body">
                <br><iframe src='http://www.youtube.com/embed/{{$dados->id}}' width="640" height="360" allowfullscreen>
                </iframe><br>
                <p> <pre class="descricao"> {{$dados->snippet->description}} </pre><br> </p>
            </div>
        </div>
    </div>
</div>

@endsection