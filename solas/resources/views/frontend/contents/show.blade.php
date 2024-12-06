@extends('frontend.layouts.app')

@push('style')
    <style>
        .header {
            --background-color: #3a98d4;
        }

        .swiper {
            width: 240px;
            height: 320px;
        }

        .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 18px;
            font-size: 22px;
            font-weight: bold;
            color: #fff;
            background-color: transparent !important;
        }

        .swiper-3d .swiper-slide-shadow {
            background-color: transparent !important;
        }

        .single-heading {
            color: var(--heading-color);
            margin: 0;
            margin: 0;
            font-size: 28px;
            font-weight: 700;
            text-transform: uppercase;
            font-family: var(--heading-font);
        }

        .content-title {
            font-size: 32px;
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
            font-size: 16px;
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
                <div class="col-md-7 mb-5">
                    <h3 class="content-title" data-aos="fade-up" data-aos-delay="100">
                        {{ $content->title }}
                    </h3>
                    <div class="content-description default" data-aos="fade-up" data-aos-delay="100">
                        {{ $content->description }}
                    </div>
                </div>
                <div class="col-md-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                @if ($content->images != null && count($content->images) > 0)
                                    @foreach ($content->images as $image)
                                        <div class="swiper-slide">
                                            <img src="{{ asset('storage/' . $image) }}" class="img-fluid" alt="">
                                        </div>
                                    @endforeach
                                @else
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/assets/img/activities/act1.jpg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/assets/img/activities/act2.jpg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/assets/img/activities/act3.jpg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                @endif
                                {{-- <div class="swiper-pagination"></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection


@push('scripts')
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "cards",
            grabCursor: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
@endpush
