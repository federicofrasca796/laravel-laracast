<header id="site_header">
    <nav class="navbar navbar-expand-lg navbar-light bg_primary">
    <div class="container-fluid d-flex justify-content-between">
        <a class="navbar-brand" href="#">
            <img src="{{asset('img/laracasts-logo.svg')}}" alt="laracasts logo">
        </a>
        
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button> --}}

        <div>
            <ul class="navbar-nav mb-2 mb-lg-0">
                @foreach ($nav_items as $item)
                <li class="nav-item {{$item['new']?'badge-new':''}}">
                    <a class="nav-link" href="">{{$item['name']}}</a>
                </li>
                @endforeach
            </ul>
        </div>
        
        <div>
            <ul class="navbar-nav d-flex">
            <li>
                <button class="btn btn-outline-success" type="submit">
                    <img src="{{asset('img/search-icon.svg')}}" alt="search icon">
                </button>
            </li>
            <li>
                <a href="" class="nav-link">
                    Sign in
                </a>
            </li>
            <li>
                <a href="" class="btn btn-outline-light rounded-pill">
                    Get Started
                </a>
            </li>
        </ul>
        </div>
    </div>
</nav>
</header>
