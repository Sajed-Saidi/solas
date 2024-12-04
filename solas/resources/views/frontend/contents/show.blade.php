@extends('frontend.layouts.app')

<style>
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
    }

    .swiper-slide:nth-child(1n) {
        background-color: rgb(206, 17, 17);
    }

    .swiper-slide:nth-child(2n) {
        background-color: rgb(0, 140, 255);
    }

    .swiper-slide:nth-child(3n) {
        background-color: rgb(10, 184, 111);
    }

    .swiper-slide:nth-child(4n) {
        background-color: rgb(211, 122, 7);
    }

    .swiper-slide:nth-child(5n) {
        background-color: rgb(118, 163, 12);
    }

    .swiper-slide:nth-child(6n) {
        background-color: rgb(180, 10, 47);
    }

    .swiper-slide:nth-child(7n) {
        background-color: rgb(35, 99, 19);
    }

    .swiper-slide:nth-child(8n) {
        background-color: rgb(0, 68, 255);
    }

    .swiper-slide:nth-child(9n) {
        background-color: rgb(218, 12, 218);
    }

    .swiper-slide:nth-child(10n) {
        background-color: rgb(54, 94, 77);
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
</style>
<style>
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

@section('content')
    <main class="single-content p-5">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                <div>
                    <h2>Activities</h2>
                    <div>
                        <span>Experience</span>
                        <span class="description-title">With Us</span>
                        <a href="#readmore" class="float-end">
                            View All<i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content row">
                <div class="col-md-7 mb-5">
                    <h3 class="content-title">
                        The title goes here perfectly
                    </h3>
                    <div class="content-description default">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis, praesentium delectus assumenda
                        odio nihil nulla asperiores quo sed animi a. Deserunt pariatur fugiat deleniti eaque quisquam
                        quaerat dolores consequuntur veniam Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem
                        consectetur voluptas deleniti amet delectus, odio tempora voluptate, nobis excepturi nulla unde
                        itaque suscipit, sed laborum id culpa fugit ipsam ab?
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">Slide 1</div>
                                <div class="swiper-slide">Slide 2</div>
                                <div class="swiper-slide">Slide 3</div>
                                <div class="swiper-slide">Slide 4</div>
                                <div class="swiper-slide">Slide 5</div>
                                <div class="swiper-slide">Slide 6</div>
                                <div class="swiper-slide">Slide 7</div>
                                <div class="swiper-slide">Slide 8</div>
                                <div class="swiper-slide">Slide 9</div>
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
        });
    </script>
@endpush
