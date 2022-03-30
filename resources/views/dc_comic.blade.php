@extends('layouts.base')

@section('pageTitle', $comic['title'])

@section('content')

    <div class="wrapper-comic">
        <div class="comic-top">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
            <h1>{{$comic['title']}}</h1>
            <p>{{$comic['description']}}</p>
            <img src="" alt="">
        </div>
        <div class="comic-bottom">

        </div>
    </div>

@endsection