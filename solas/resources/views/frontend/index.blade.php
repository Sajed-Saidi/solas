@extends('frontend.layouts.app')

@push('style')
    <style>
        .swiper {
            width: 100%;
            /* height: 100%; */
        }

        .swiper-wrapper {
            height: fit-content !important;
        }

        .swiper-slide {
            /* height: fit-content !important; */
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endpush

@section('content')
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="{{ asset('frontend/assets/img/hero-bg-2.jpg') }}" alt="" class="hero-bg" />

            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                        <img src="{{ asset('frontend/assets/img/hero-image.png') }}" class="img-fluid animated"
                            style="color: transparent; background-color: transparent" alt="" />
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-in">
                        <h1>Supporting Lives With <span>Care and Inclusion</span></h1>
                        <p>
                            We are a dedicated team committed to empowering individuals with
                            autism and building supportive communities.
                        </p>

                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">Read More</a>
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                class="glightbox btn-watch-video d-flex align-items-center"><i
                                    class="bi bi-play-circle"></i><span>Watch Video</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28 " preserveAspectRatio="none">
                <defs>
                    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                    </path>
                </defs>
                <g class="wave1">
                    <use xlink:href="#wave-path" x="50" y="3"></use>
                </g>
                <g class="wave2">
                    <use xlink:href="#wave-path" x="50" y="0"></use>
                </g>
                <g class="wave3">
                    <use xlink:href="#wave-path" x="50" y="9"></use>
                </g>
            </svg>
        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-xl-center gy-5">
                    <div class="col-xl-5 content">
                        <h3>About Us</h3>
                        <h2>Creating a World of Understanding and Inclusion</h2>
                        <p>
                            We are dedicated to empowering individuals with autism,
                            fostering understanding, and creating a community where everyone
                            can thrive. Together, we can build a more inclusive and
                            supportive world.
                        </p>
                        <a href="#" class="read-more"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                    </div>

                    <div class="col-xl-7">
                        <div class="row gy-4 icon-boxes">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box">
                                    <i class="bi bi-people"></i>
                                    <h3>Community Support</h3>
                                    <p>
                                        Connecting families, educators, and caregivers to build
                                        strong networks of support and understanding.
                                    </p>
                                </div>
                            </div>
                            <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-lightbulb"></i>
                                    <h3>Educational Programs</h3>
                                    <p>
                                        Providing resources, workshops, and tailored learning
                                        tools to empower individuals with autism.
                                    </p>
                                </div>
                            </div>
                            <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-heart"></i>
                                    <h3>Empathy and Awareness</h3>
                                    <p>
                                        Promoting awareness and understanding to break down
                                        barriers and celebrate diversity.
                                    </p>
                                </div>
                            </div>
                            <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-globe"></i>
                                    <h3>Global Advocacy</h3>
                                    <p>
                                        Advocating for policies and practices that ensure
                                        inclusivity and accessibility for everyone.
                                    </p>
                                </div>
                            </div>
                            <!-- End Icon Box -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section -->

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
                                        data-bs-target="#features-tab-{{ $key }}" aria-selected="true"
                                        role="tab">
                                        <i class="{{ $icons[$key] }}"></i>
                                        <div>
                                            <h4 class="d-none d-lg-block">{{ $activity->title }}</h4>
                                            <p class="truncate">
                                                {{ $activity->description }}
                                            </p>
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

        <!-- Articles Section -->
        <section id="articles" class="details section">
            <x-section-heading miniTitle="Articles" title="Discover Our Mission" routeText='View All'
                route="{{ route('contents.showAll') . '?type=article' }}" centered='true' />

            <div class="container">
                <div class="swiper detailsSwiper">
                    <div class="swiper-wrapper">
                        @foreach ($articles as $key => $article)
                            <div class="swiper-slide">
                                <div class="row gy-4 align-items-center features-item">
                                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out"
                                        data-aos-delay="100">
                                        <img src="{{ asset($article->images != null ? 'storage/' . $article->images[0] : 'frontend/assets/img/details-1.png') }}"
                                            class="img-fluid" alt="Supporting Individuals with Autism" />
                                    </div>
                                    <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                                        <h3>{{ $article->title }}</h3>
                                        <p class="fst-italic">
                                            {{ $article->description }}
                                        </p>
                                        <ul>
                                            <li>
                                                <i class="bi bi-check"></i><span>Personalized programs tailored to
                                                    individual
                                                    needs.</span>
                                            </li>
                                            <li>
                                                <i class="bi bi-check"></i>
                                                <span>Workshops and training for families and educators.</span>
                                            </li>
                                        </ul>
                                        <a href="{{ route('contents.show', $article->id) }}"
                                            class="read-more mt-1"><span>Learn More</span><i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <!-- Features Item -->
            </div>
        </section>

        <!-- Articles Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <x-section-heading miniTitle="Contact" title="Check Our Contact" hideRight="true" />

            <div class="container" data-aos="fade" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>{{ $settings->address }}</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>{{ $settings->phone }}</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>{{ $settings->email }}</p>
                            </div>
                        </div>
                        <!-- End Info Item -->
                    </div>

                    <div class="col-lg-8">
                        <form id="contact-form" action="{{ route('contact-us', $settings->email) }}" method="POST"
                            class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                            @csrf
                            @method('POST')
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required />
                                </div>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required />
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required />
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message">
                                        Error! Something went wrong...
                                    </div>
                                    <div class="sent-message">
                                        Your message has been sent. Thank you!
                                    </div>

                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Contact Form -->
                </div>
            </div>
        </section>
        <!-- /Contact Section -->
    </main>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll('.activity-btn').forEach(button => {
            button.addEventListener('click', () => {
                const form = button.closest('form');
                if (form) {
                    form.submit();
                } else {
                    console.error('No form found for this button');
                }
            });
        });

        var swiper = new Swiper(".detailsSwiper", {
            grabCursor: true,
            direction: "horizontal",
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        const errorCont = document.querySelector(".error-message");
        const successCont = document.querySelector(".sent-message");
        const loading = document.querySelector(".loading");

        document.getElementById('contact-form').addEventListener('submit', async function(e) {
            e.preventDefault();

            if (errorCont.classList.contains('d-block')) {
                errorCont.classList.remove("d-block");
            }
            if (successCont.classList.contains('d-block')) {
                successCont.classList.remove("d-block");
            }
            loading.classList.add("d-block");

            const formData = new FormData(this); // Use FormData directly
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            try {
                const response = await fetch(this.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken, // Add CSRF token
                        'Accept': 'application/json',
                    },
                    body: formData, // Directly send the FormData
                });

                loading.classList.remove("d-block");

                if (response.ok) {
                    const result = await response.json();
                    successCont.textContent = result.message;
                    successCont.style.display = 'block';
                    this.reset();
                    hideMessage(successCont);
                } else if (response.status === 422) {
                    const result = await response.json();
                    displayValidationErrors(result.errors);
                } else {
                    const result = await response.json();
                    displayError(result.message);
                }
            } catch (error) {
                displayError("An unexpected error occurred. Please try again later.");
            }
        });

        function displayValidationErrors(errors) {
            errorCont.innerHTML = "";
            for (const [field, messages] of Object.entries(errors)) {
                messages.forEach(message => {
                    const errorItem = document.createElement("p");
                    errorItem.textContent = `${field}: ${message}`;
                    errorCont.appendChild(errorItem);
                });
            }
            errorCont.classList.add("d-block");
            hideMessage(errorCont);
        }

        function displayError(errorMessage) {
            const errorCont = document.querySelector(".error-message");
            errorCont.innerHTML = `<p>${errorMessage}</p>`;
            errorCont.classList.add("d-block");
            loading.classList.remove("d-block");
            hideMessage(errorCont);
        }

        function hideMessage(element) {
            setTimeout(() => {
                element.classList.remove('d-block');
                element.style.display = 'none';
            }, 5000);
        }
    </script>
@endpush
