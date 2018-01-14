@extends('layouts.full')

@section('content')

        <div class="">

            <div class=" uk-flex-center uk-flex-1 uk-grid-small uk-text-center"uk-grid>

                @foreach($videos as $canal)
                    @foreach($canal as $video)

                        <div class="">

                            <a href='{{url('collections/video')}}/{{$video->id->videoId}}'>
                                <img src="https://i4.ytimg.com/vi/{{$video->id->videoId}}/hqdefault.jpg" width="300"><br></a>
                        </div>
                    @endforeach
                @endforeach

            </div>
        </div>



@endsection