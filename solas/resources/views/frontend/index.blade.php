@extends('frontend.layouts.app')

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
            <div class="container section-title" data-aos="fade-up" data-aos-delay="100">

                <div>
                    <h2>Activities</h2>
                    <div>
                        <span>Experience</span>
                        <span class="description-title">With Us</span>
                        <a href="#readmore" class="float-end">
                            View All<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
                        <ul class="nav nav-tabs aos-init aos-animate" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link show active" data-bs-toggle="tab" data-bs-target="#features-tab-1"
                                    aria-selected="true" role="tab">
                                    <i class="bi bi-binoculars"></i>
                                    <div>
                                        <h4 class="d-none d-lg-block">Modi sit est dela pireda nest</h4>
                                        <p>
                                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                            in reprehenderit in voluptate
                                            velit esse cillum dolore eu fugiat nulla pariatur
                                        </p>
                                        <form action="/">
                                            <button class="btn btn-sm read-more" type="submit">
                                                <div class="d-flex align-items-center">
                                                    Read More
                                                    <i class="bi bi-arrow-right"></i>
                                                </div>
                                            </button>
                                        </form>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2"
                                    aria-selected="false" role="tab" tabindex="-1">
                                    <i class="bi bi-box-seam"></i>
                                    <div>
                                        <h4 class="d-none d-lg-block">Unde praesenti mara setra le</h4>
                                        <p>
                                            Recusandae atque nihil. Delectus vitae non similique magnam molestiae sapiente
                                            similique
                                            tenetur aut voluptates sed voluptas ipsum voluptas
                                        </p>
                                        <form action="/">
                                            <button class="btn btn-sm read-more" type="submit">
                                                <div class="d-flex align-items-center">
                                                    Read More
                                                    <i class="bi bi-arrow-right"></i>
                                                </div>
                                            </button>
                                        </form>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3"
                                    aria-selected="false" role="tab" tabindex="-1">
                                    <i class="bi bi-brightness-high"></i>
                                    <div>
                                        <h4 class="d-none d-lg-block">Pariatur explica nitro dela</h4>
                                        <p>
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                            deserunt mollit anim id est laborum
                                            Debitis nulla est maxime voluptas dolor aut
                                        </p>
                                        <form action="/">
                                            <button class="btn btn-sm read-more" type="submit">
                                                <div class="d-flex align-items-center">
                                                    Read More
                                                    <i class="bi bi-arrow-right"></i>
                                                </div>
                                            </button>
                                        </form>
                                    </div>
                                </a>
                            </li>
                        </ul><!-- End Tab Nav -->

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

                        <div class="tab-content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">

                            <div class="tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                <img src="{{ asset('frontend/assets/img/activities/act1.jpg') }}" alt=""
                                    class="img-fluid">
                            </div><!-- End Tab Content Item -->

                            <div class="tab-pane fade" id="features-tab-2" role="tabpanel">
                                <img src="{{ asset('frontend/assets/img/activities/act2.jpg') }}" alt=""
                                    class="img-fluid">
                            </div><!-- End Tab Content Item -->

                            <div class="tab-pane fade" id="features-tab-3" role="tabpanel">
                                <img src="{{ asset('frontend/assets/img/activities/act3.jpg') }}" alt=""
                                    class="img-fluid">
                            </div><!-- End Tab Content Item -->
                        </div>

                    </div>

                </div>

            </div>
        </section>
        {{-- Activties Section --}}

        <!-- Articles Section -->
        <section id="articles" class="details section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Articles</h2>
                <div>
                    <span>Discover Our</span>
                    <span class="description-title">Mission</span>
                    <a href="#readmore" class="float-end">
                        View All<i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="swiper detailsSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row gy-4 align-items-center features-item">
                                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                                    <img src="{{ asset('frontend/assets/img/details-1.png') }}" class="img-fluid"
                                        alt="Supporting Individuals with Autism" />
                                </div>
                                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                                    <h3>Empowering Individuals with Autism</h3>
                                    <p class="fst-italic">
                                        Our mission is to support individuals with autism by providing
                                        resources, education, and a community where they can thrive.
                                    </p>
                                    <ul>
                                        <li>
                                            <i class="bi bi-check"></i><span>Personalized programs tailored to individual
                                                needs.</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check"></i>
                                            <span>Workshops and training for families and educators.</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check"></i>
                                            <span>Inclusive events fostering acceptance and
                                                understanding.</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="read-more mt-1"><span>Learn More</span><i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="row gy-4 align-items-center features-item">
                                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                                    <img src="{{ asset('frontend/assets/img/details-1.png') }}" class="img-fluid"
                                        alt="Supporting Individuals with Autism" />
                                </div>
                                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                                    <h3>Empowering Individuals with Autism</h3>
                                    <p class="fst-italic">
                                        Our mission is to support individuals with autism by providing
                                        resources, education, and a community where they can thrive.
                                    </p>
                                    <ul>
                                        <li>
                                            <i class="bi bi-check"></i><span>Personalized programs tailored to individual
                                                needs.</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check"></i>
                                            <span>Workshops and training for families and educators.</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check"></i>
                                            <span>Inclusive events fostering acceptance and
                                                understanding.</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="read-more mt-3"><span>Learn More</span><i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>

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
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <div>
                    <span>Check Our</span>
                    <span class="description-title">Contact</span>
                </div>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>info@example.com</p>
                            </div>
                        </div>
                        <!-- End Info Item -->
                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required="" />
                                </div>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required="" />
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="" />
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
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
        var swiper = new Swiper(".detailsSwiper", {
            direction: "horizontal", // Default direction
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            // breakpoints: {
            //     992: { // Apply when the viewport width is 768px or more
            //         direction: "vertical",
            //     },
            //     0: { // Apply for smaller screens
            //         direction: "horizontal",
            //     },
            // },
        });
    </script>
@endpush
