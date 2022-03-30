@extends('layouts.base')

@section('pageTitle', 'DC Comics')

@section('content')

<main>
    <div class="main-container">

        <span id="series-label">Current series</span>

        <div class="align-content">
            
            @if (is_array($comics)) 

            @foreach($comics as $comic)
            <div class="box-series">
                <a href="{{ $comic['thumb']}}">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title']}}">
                    <p>{{ $comic['series']}}</p>
                </a>    
            </div>
            @endforeach
            @endif
        </div>

        <div class="flex">
            <span id="load-more">Load more</span>
        </div>
    </div>

    <div class="main-bottom-container">
        <ul>
            <li>
                <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
                <a href="#">DIGITAL COMICS</a>
            </li>

            <li>
                <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
                <a href="#">DC MERCHANDISE</a>
            </li>

            <li>
                <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
                <a href="#">SUBSCRIPTION</a>
            </li>

            <li>
                <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
                <a href="">COMIC SHOP LOCATOR</a>
            </li>

            <li>
                <img src="{{ asset('img/buy-dc-power-visa.svg') }}"alt="">
                <a href="">DC POWER VISA</a>
            </li>

        </ul>
    </div>

</main>


@endsection