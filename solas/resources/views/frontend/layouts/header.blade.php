@php
    $isHome = Route::is('/');
    $isAdmin = Auth::check();
@endphp
<header id="header" class="header d-flex align-items-center {{ $isHome ? 'fixed-top' : 'sticky-top' }}">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('/') }}" class="logo d-flex align-items-center">
            <h1 class="sitename">{{ $settings->website_name }}</h1>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('/') }}" class="{{ Route::is('/') ? 'active' : '/' }}">Home</a></li>
                <li><a href="{{ route('contents.showAll') . '?type=activity' }}"
                        class="{{ Route::is('contents.showAll') && ($type == 'all' || $type == 'activity') ? 'active' : '' }}">
                        Activities
                    </a>
                </li>
                <li>
                    <a href="{{ route('contents.showAll') . '?type=article' }}"
                        class="{{ Route::is('contents.showAll') && ($type == 'all' || $type == 'activity') ? 'active' : '' }}">
                        Articles
                    </a>
                </li>
                @if ($isHome)
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                @endif
                @if ($isAdmin)
                    <li><a href="{{ route('/') . '/admin' }}">Admin</a></li>
                @endif
                <li>
                    @if (!$isHome)
                        <div id="google_translate_element"></div>
                    @endif
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
