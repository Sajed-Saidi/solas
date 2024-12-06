<header id="header" class="header d-flex align-items-center {{ Route::is('/') ? 'fixed-top' : 'sticky-top' }}">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('/') }}" class="logo d-flex align-items-center">
            <h1 class="sitename">{{ $settings->website_name }}</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Home</a></li>
                <li class="dropdown">
                    <a href="#"><span>Activties</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('contents.showAll') . '?type=activity' }}">All</a></li>
                        @if (Route::is('/'))
                            <li><a href="#activities">Popular</a></li>
                        @endif
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"><span>Articles</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li><a href="{{ route('contents.showAll') . '?type=activity' }}">All</a></li>
                        @if (Route::is('/'))
                            <li><a href="#articles">Popular</a></li>
                        @endif
                    </ul>
                </li>
                @if (Route::is('/'))
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#about">About</a></li>
                @endif
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
