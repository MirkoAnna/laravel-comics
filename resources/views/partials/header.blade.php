<header>

    <div class="header-container">
        <div class="align-content relative">
            <div id="logo">
                <img src="{{ asset('img/dc-logo.png') }}" alt="">
            </div>

            <div id="links">
                <ul>
                    {{-- <li v-for="(link, index) in links" :key="index"  >
                        <a :href="link.url">{{link.text}}</a>
                    </li> --}}
                    <li><a href="/characters">Characters</a></li>
                    <li class="{{ Request::route() ->getName() == 'comics' ? 'active' : '' }}"><a href="{{route('comics')}}">Comics</a></li>
                    <li><a href="/movies">Movies</a></li>
                    <li><a href="/tv">Tv</a></li>
                    <li><a href="/games">Games</a></li>
                    <li><a href="/collectibles">Collectibles</a></li>
                    <li><a href="/videos">Videos</a></li>
                    <li><a href="/fans">Fans</a></li>
                    <li><a href="/news">News</a></li>
                    <li><a href="/shop">Shop</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="jumbotron-image">
        <img src="{{ asset('img/jumbotron.jpg') }}" alt="">
    </div>

</header>