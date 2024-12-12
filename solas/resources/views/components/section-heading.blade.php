@props([
    'miniTitle',
    'title',
    'routeText' => 'Back',
    'route' => url()->previous(),
    'centered' => false,
    'hideRight' => false,
])

<div class="container section-title {{ $centered ? 'mb-md-5' : '' }}">
    <div>
        <h2 data-aos="fade-right" data-aos-delay="100">{{ $miniTitle }}</h2>
        <div class="d-flex justify-content-between flex-column flex-md-row">
            <div data-aos="fade-right" data-aos-delay="100">{{ $title }}</div>
            @if (!$hideRight)
                <a data-aos="fade-left" data-aos-delay="100" href="{{ $route }}" class="float-end">
                    {{ $routeText }}
                    <i class="bi bi-arrow-right"></i>
                </a>
            @else
                {{ $slot }}
            @endif
        </div>
    </div>
</div>
