@extends('frontend.layouts.app')

@push('style')
    <style>
        .header {
            --background-color: #3a98d4;
        }

        .content-title {
            font-size: 36px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 15px;
            color: var(--primary-color, #333);
            /* Use a primary theme color */
            font-family: 'Poppins', sans-serif;
            /* Ensure modern, legible font */
            text-transform: capitalize;
        }

        .content-description {
            font-size: 20px;
            font-weight: 400;
            line-height: 1.6;
            color: var(--secondary-color, #555);
            /* Slightly muted tone for body text */
            font-family: 'Roboto', sans-serif;
        }

        /* Add responsive styling for better readability on smaller devices */
        @media (max-width: 768px) {
            .content-title {
                font-size: 26px;
                line-height: 1.3;
            }

            .content-description {
                font-size: 14px;
                line-height: 1.5;
            }
        }
    </style>
@endpush

@section('content')
    <main class="single-content p-5">
        <x-section-heading miniTitle="{{ $content->type == 'activity' ? 'Activities' : 'Articles' }}"
            title="Explore with us" />
        <div class="container">
            <div class="content row">
                @if (!$content)
                    <h1>No Content Found</h1>
                @else
                    <div class="col-md-7 mb-5">
                        <h3 class="content-title" data-aos="fade-up" data-aos-delay="100">
                            {{ $content->title }}
                        </h3>
                        <div class="content-description default" data-aos="fade-up" data-aos-delay="100">
                            {{ $content->description }}
                        </div>
                    </div>
                    <div class="col-md-5" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                            @if ($content->images != null && count($content->images) > 0)
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($content->images as $key => $image)
                                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                <img src="{{ asset('storage/' . $image) }}" class="d-block w-100 img-fluid"
                                                    alt="">
                                            </div>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            @else
                                <div class="swiper-slide">
                                    <img src="{{ asset('frontend/assets/img/activities/act1.jpg') }}" class="img-fluid"
                                        alt="">
                            @endif
                            {{-- <div class="swiper-pagination"></div> --}}
                        </div>
                    </div>
            </div>
        </div>
        @endif
        </div>
        </div>

    </main>
@endsection
