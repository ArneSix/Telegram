<header class="header-bg">
    <div class="container-md">
        <nav class="navbar navbar-expand-md sticky-top">
            <a href="{{route('home')}}" class="navbar-brand">
                <img src="{{ asset('img/telegram.svg')  }}" alt="telegram logo">
            </a>
            <div class="collapse navbar-collapse d-flex" id="collapse_target">
                <ul class="navbar-nav">
                    <li class="nav-item text-center {{ (request()->is('home.index')) ? 'active' : '' }}">
                        <a href="{{route('about')}}" class="nav-link">@lang('navigation.about')</a>
                    </li>
                    <li class="nav-item text-center {{ (request()->is('home.index')) ? 'active' : '' }}">
                        <a href="{{route('contact')}}" class="nav-link">@lang('navigation.contact')</a>
                    </li>
                    <li class="nav-item text-center {{ (request()->is('privacy.index')) ? 'active' : '' }}">
                        <a href="{{route('privacy')}}" class="nav-link">@lang('navigation.privacy')</a>
                    </li>
                    <li class="nav-item text-center {{ (request()->is('news.index')) ? 'active' : '' }}">
                        <a href="{{route('articles')}}" class="nav-link">@lang('navigation.news')</a>
                    </li>
                    <li class="nav-item text-center {{ (request()->is('donate.index')) ? 'active' : '' }}">
                        <a href="{{route('donate')}}" class="nav-link">
                            @lang('navigation.donate')
                        </a>
                    </li>
                </ul>
                <div class="nav-language">
                    @php $locale = session()->get('locale'); @endphp
                    <a id="navbarDropdown" class="nav-link dropdown-toggle nav-language" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        @switch($locale)
                            @case('nl')
                            <img src="{{asset('img/nl.png')}}" width="30px" height="20x"> Dutch
                            @break
                            @default
                            <img src="{{asset('img/en.png')}}" width="30px" height="20x"> English
                        @endswitch
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="lang/en"><img src="{{asset('img/en.png')}}" width="30px" height="20x"> English</a>
                        <a class="dropdown-item" href="lang/nl"><img src="{{asset('img/nl.png')}}" width="30px" height="20x"> Dutch</a>
                    </div>
                </div>
            </div>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
            <span class="navbar-toggler-icon">
                <img src="{{ asset('img/nav-burger.svg') }}" alt="">
            </span>
            </button>
        </nav>
    </div>

</header>

