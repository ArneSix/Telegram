<header class="header-bg">
    <div class="container-md">
        <nav class="navbar navbar-expand-md sticky-top">
            <a href="#" class="navbar-brand">
                <img src="{{ asset('img/telegram.svg')  }}" alt="telegram logo">
            </a>
            <div class="collapse navbar-collapse" id="collapse_target">
                <ul class="navbar-nav">
                    <li class="nav-item text-center {{ (request()->is('home.index')) ? 'active' : '' }}">
                        <a href="#" class="nav-link">about</a>
                    </li>
                    <li class="nav-item text-center {{ (request()->is('home.index')) ? 'active' : '' }}">
                        <a href="#" class="nav-link">contact</a>
                    </li>
                    <li class="nav-item text-center {{ (request()->is('privacy.index')) ? 'active' : '' }}">
                        <a href="#" class="nav-link">privacy</a>
                    </li>
                    <li class="nav-item text-center {{ (request()->is('news.index')) ? 'active' : '' }}">
                        <a href="#" class="nav-link">news</a>
                    </li>
                    <li class="nav-item text-center {{ (request()->is('donate.index')) ? 'active' : '' }}">
                        <a href="#" class="nav-link">
                            Donate now
                        </a>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
            <span class="navbar-toggler-icon">
                <img src="{{ asset('img/nav-burger.svg') }}" alt="">
            </span>
            </button>
        </nav>
    </div>

</header>

