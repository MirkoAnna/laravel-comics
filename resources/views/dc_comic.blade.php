@extends('layouts.base')

@section('pageTitle', $comic['title'])

@section('content')

    <div class="wrapper-comic">


        <div class="comic-image">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
            <p>{{$comic['type']}}</p>
            <p>view gallery</p>
        </div>


        <div class="comic-top">

            <div class="sub-container-top">

                <div class="comic-details">
                    <h1>{{$comic['title']}}</h1>
                    <div class="shop-bar">
                        <div class="shop-bar-left">
                            <span><font color=#96F99C>U.S. Price: </font><font color=#FAFAFA>$19.99</font></span>
                            <span><font color=#96F99C>AVAILABLE</font></span>

                        </div>
                        <div class="shop-bar-right">
                            <span><font color=#FAFAFA>Check Availability &dtrif;</font></span>
                        </div>
                    </div>
                    <p>{{$comic['description']}}</p>
                </div>

                <div class="advertisement">
                    <p>ADVERTISEMENT</p>
                    <img src="{{ asset('img/advertisement.jpg') }}" alt="">
                </div>

            </div>
        </div>


        <div class="comic-bottom">

            <div class="sub-container-info">
                <div class="comic-info">
    
                    <div class="talents">
                        <h3>Talent</h3>
                            <div class="artists">
                                <p>Art by: </p>  
                                    <p>
                                        @foreach ($comic['artists'] as $artist)
                                            {{$artist}};
                                        @endforeach
                                    </p>
                            </div>
                            <div class="writers">
                                <p>Written by: </p>
                                <p>
                                    @foreach ($comic['writers'] as $writer)
                                        {{$writer}};
                                    @endforeach
                                </p>
                            </div>
                        
                    </div>
    
                    <div class="specs">
                        <h3>Specs</h3>
                    </div>
    
                </div>

            </div>


        </div>

    </div>

@endsection