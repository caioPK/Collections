@extends('layouts.full')

@section('content')
    <h1>Showing </h1>

    <div class="jumbotron text-center">
        <h2>COLEÇÃO </h2>


        @foreach($videos as $canal)
            @foreach($canal as $video)

                <h4 id="title">

                    <a href='{{url('collections/video')}}/{{$video->id->videoId}}'>
                        {{$video->snippet->title}}    -  data: {{$video->snippet->publishedAt}}<br>
                        <img src="https://i4.ytimg.com/vi/{{$video->id->videoId}}/hqdefault.jpg"/>
                    </a>
                </h4>


            @endforeach
        @endforeach
    </div>


@endsection