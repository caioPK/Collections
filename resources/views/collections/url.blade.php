@extends('layouts.box')


@section('content')

    <div class="uk-padding-remove">
        <form class="uk-form-stacked uk-margin " action="{{url('collections/url')}}" method="post">
            {{ csrf_field() }}
            <input class="uk-input uk-form-blank uk-form-large  uk-align-center uk-text-center" id="novaURL" name="novaURL" type="text" placeholder="https://www.youtube.com/channel/SEUCANAL">


        <div class="uk-margin uk-flex uk-flex-center" uk-margin>
            <button type="submit" class="uk-button uk-button-primary uk-width-3-4" >ADICIONAR CANAL</button>
        </div>


        </form>
    </div>







@endsection