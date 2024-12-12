{{-- Activities Section --}}
<section id="activities" class="activities section">
    <x-section-heading miniTitle="Activities" title="Experience With Us" routeText='View All'
        route="{{ route('contents.showAll') . '?type=activity' }}" />

    @php
        $icons = ['bi-brightness-high', 'bi bi-binoculars', 'bi bi-box-seam'];
    @endphp
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
                <ul class="nav nav-tabs aos-init aos-animate" role="tablist">
                    @foreach ($activities as $key => $activity)
                        <li class="nav-item" role="presentation">
                            <a class="nav-link {{ $key == 0 ? 'show active' : '' }}" data-bs-toggle="tab"
                                data-bs-target="#features-tab-{{ $key }}" aria-selected="true" role="tab">
                                <i class="{{ $icons[$key] }}"></i>
                                <div>
                                    <h4 class="d-none d-lg-block truncate-title">{{ $activity->title }}</h4>
                                    <p class="truncate">
                                        {{ $activity->description }}
                                    </p>
                                    @if (isset($activity->id))
                                        <form id="activity-form-{{ $key }}"
                                            action="{{ route('contents.show', $activity->id) }}" method="POST">
                                            @csrf
                                            @method('GET')
                                            <button class="btn btn-sm read-more activity-btn" type="submit"
                                                data-key={{ $key }}>
                                                <div class="d-flex align-items-center">
                                                    Read More
                                                    <i class="bi bi-arrow-right"></i>
                                                </div>
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul><!-- End Tab Nav -->

            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

                <div class="tab-content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">

                    @foreach ($activities as $key => $activity)
                        <div class="tab-pane fade {{ $key == 0 ? 'active show' : '' }}"
                            id="features-tab-{{ $key }}" role="tabpanel">
                            @if ($activity->images != null)
                                <img src="{{ asset('storage/' . $activity->images[0]) }}" alt=""
                                    class="img-fluid">
                            @else
                                <img src="{{ asset('frontend/assets/img/activities/act' . $key + 1 . '.jpg') }}"
                                    alt="" class="img-fluid">
                            @endif
                        </div>
                    @endforeach
                </div>

            </div>

        </div>

    </div>
</section>
{{-- Activties Section --}}
