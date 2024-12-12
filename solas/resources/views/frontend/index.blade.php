@extends('frontend.layouts.app')

@push('style')
    <style>
        .header {
            box-shadow: 0 -10px 0 #3a98d4 !important;
            margin-top: 10px;
        }

        .swiper {
            width: 100%;
            /* height: 100%; */
        }

        .swiper-wrapper {
            height: fit-content !important;
        }

        .swiper-slide {
            height: fit-content !important;
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

        .truncate-article {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            line-clamp: 4;
            /* For modern browsers */
            -webkit-line-clamp: 4;
            /* For WebKit browsers */
        }

        .about-section {
            /* background-color: #f9f9f9; */
            padding: 60px 0;
        }

        .about-heading {
            color: #3a98d4;
        }

        .about-points {
            margin-top: 20px;
            list-style: none;
            padding: 0;
        }

        .about-points li {
            margin-bottom: 15px;
            padding: 0 30px;
            position: relative;
        }

        .about-points li::before {
            content: '•';
            color: #3a98d4;
            font-size: 24px;
            margin: 0 10px;
        }
    </style>
@endpush


@section('content')
    <div>
        <div>
            <!-- Button trigger modal -->
            <button type="button" id="modalTrigger" class="d-none" data-bs-toggle="modal" data-bs-target="#languageModal">
                Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="languageModal" tabindex="-1" aria-labelledby="languageModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="languageModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Choose your preffered language.
                            </p>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <div id="google_translate_element"></div>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                onclick="">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main class="main">
            <!-- Hero Section -->
            <section id="hero" class="hero section dark-background">
                <img src="{{ asset('frontend/assets/img/hero-bg-2.jpg') }}" alt="" class="hero-bg" />

                <div class="container">
                    <div class="row gy-4 justify-content-between">
                        <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                            <img src="{{ asset('frontend/assets/img/logo.jpg') }}" class="img-fluid animated rounded"
                                style="color: transparent; background-color: transparent" alt="" />
                        </div>

                        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-in">
                            <h1 translate="no">The Spectrum Of Light Autism Society <span translate="no">Solas</span></h1>

                            <p>
                                We are a nonprofit organization officially licensed by the
                                Lebanese government (Registration No. 1568). Based in Beirut...
                            </p>
                            <div class="d-flex">
                                <a href="#about" class="btn-get-started">Read More</a>

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

            {{-- About Section --}}
            <section id="about" class="about-section">
                <div class="container">
                    <x-section-heading miniTitle="About Us" title="More About Our Community!" hideRight="true" />

                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="fw-bold about-heading" data-aos="fade-up" data-aos-delay="100">Our Objectives:</h4>
                            <p class="text-justify" data-aos="fade-up" data-aos-delay="200">
                                The <strong>Spectrum Of Light Autism Society</strong> is a nonprofit organization based in
                                Beirut, dedicated to supporting individuals with autism and raising community awareness
                                about
                                this condition.
                            </p>
                            <h4 class="fw-bold about-heading" data-aos="fade-up" data-aos-delay="100">Our Mission:</h4>
                            <p class="text-justify" data-aos="fade-up" data-aos-delay="200">
                                We strive to create an inclusive and supportive community that ensures equal opportunities
                                for
                                individuals with autism to reach their full potential, with a focus on engaging all members
                                of
                                society and enhancing their roles in achieving our vision.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <ul class="about-points">
                                <li data-aos="fade-up" data-aos-delay="100">Community Awareness: Organizing comprehensive
                                    awareness campaigns to highlight autism
                                    among
                                    children and youth.</li>
                                <li data-aos="fade-up" data-aos-delay="200">Specialized Services: Establishing units and
                                    centers across various Lebanese regions to
                                    focus on early diagnosis, treatment, and providing essential support to individuals with
                                    autism and their families.</li>
                                <li data-aos="fade-up" data-aos-delay="300">Family Support: Working to reduce treatment
                                    costs by collaborating with specialized
                                    centers
                                    and offering accessible services.</li>
                                <li data-aos="fade-up" data-aos-delay="400">Training and Development: Providing training
                                    programs for professionals to enhance their
                                    skills in managing autism.</li>
                                <li data-aos="fade-up" data-aos-delay="500">Government Collaboration: Coordinating with
                                    ministries and relevant entities to adopt
                                    policies that support individuals with autism.</li>
                            </ul>
                        </div>
                    </div>

                </div>

            </section>
            {{-- About Section --}}

            <!-- Activities Section -->
            <section id="activity" class="details section">
                <x-section-heading miniTitle="Activity" title="Bright Steps" routeText='View All'
                    route="{{ route('contents.showAll') . '?type=activity' }}" />

                <div class="container">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="row gy-4 align-items-center features-item">
                            <div class="col-md-5 d-flex align-items-center " data-aos="zoom-out" data-aos-delay="100">
                                <img src="{{ asset(isset($activity->images) ? 'storage/' . $activity->images[0] : 'frontend/assets/img/articles/article-1.webp') }}"
                                    class="img-fluid" alt="Supporting Individuals with Autism" />
                            </div>
                            <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                                <h3>{!! $activity->title !!}</h3>
                                <p class="fst-italic">
                                    {!! $activity->description !!}
                                </p>
                                @if (isset($activity->id))
                                    <a href="{{ route('contents.show', $activity->id) }}"
                                        class="read-more mt-1"><span>Learn
                                            More</span><i class="bi bi-arrow-right"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Activities Section -->

            <!-- Articles Section -->
            <section id="articles" class="details section">
                <x-section-heading miniTitle="Articles" title="Discover Our Mission" routeText='View All'
                    route="{{ route('contents.showAll') . '?type=article' }}" centered='true' />

                <div class="container">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="row gy-4 align-items-center features-item">
                            <div class="col-md-5 d-flex align-items-center " data-aos="zoom-out" data-aos-delay="100">
                                <img src="{{ asset(isset($article->images) ? 'storage/' . $article->images[0] : 'frontend/assets/img/details-1.png') }}"
                                    class="img-fluid" alt="Supporting Individuals with Autism" />
                            </div>
                            <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                                <h3>{!! $article->title !!}</h3>
                                <p class="fst-italic">
                                    {!! $article->description !!}
                                </p>
                                @if (isset($activity->id))
                                    <a href="{{ route('contents.show', $article->id) }}"
                                        class="read-more mt-1"><span>Learn
                                            More</span><i class="bi bi-arrow-right"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
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
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Your Name" required />
                                    </div>

                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Your Email" required />
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
    </div>
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

        document.querySelector('#modalTrigger').click();
    </script>
@endpush
