<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>@yield('title', 'Solas')</title>
        <meta name="description" content="@yield('description')" />
        <meta name="keywords" content="@yield('keywords')" />

        <!-- Favicons -->
        <link href="{{ asset('frontend/assets/img/favicon.ico') }}" rel="icon" />
        <link href="{{ asset('frontend/assets/img/favicon.ico') }}" rel="apple-touch-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet" />

        <!-- Vendor CSS Files -->
        <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

        <link href="{{ asset('frontend/assets/css/main.css') }}" rel="stylesheet" />

    </head>

    <body class="index-page">
        <header id="header" class="header d-flex align-items-center stickk sticky-top">
            <div
                class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <h1 class="sitename">Solas</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Home</a></li>
                        <li><a href="#activities">Activites</a></li>
                        <li><a href="#articles">Articles</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#about">About</a></li>
                        <!-- <li class="dropdown">
              <a href="#"
                ><span>Dropdown</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i
              ></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown">
                  <a href="#"
                    ><span>Deep Dropdown</span>
                    <i class="bi bi-chevron-down toggle-dropdown"></i
                  ></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li> -->
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>
        </header>

        @yield('content')

        <footer id="footer" class="footer dark-background">
            <div class="container footer-top">
                <div class="row gy-4">
                    <!-- About Section -->
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename">Solas</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>123 Hope Street</p>
                            <p>New York, NY 123456</p>
                            <p class="mt-3">
                                <strong>Phone:</strong> <span>+1 234 567 890</span>
                            </p>
                            <p><strong>Email:</strong> <span>support@autismcare.org</span></p>
                        </div>
                        <div class="social-links d-flex mt-4">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <!-- Useful Links -->
                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Programs</a></li>
                            <li><a href="#">Volunteer</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>

                    <!-- Services Links -->
                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="#">Therapy Programs</a></li>
                            <li><a href="#">Parent Support</a></li>
                            <li><a href="#">Educational Workshops</a></li>
                            <li><a href="#">Community Events</a></li>
                            <li><a href="#">Advocacy</a></li>
                        </ul>
                    </div>

                    <!-- Newsletter -->
                    <div class="col-lg-4 col-md-12 footer-newsletter">
                        <h4>Stay Connected</h4>
                        <p>
                            Subscribe to our newsletter to stay informed about our latest
                            programs, events, and resources.
                        </p>
                        <form action="forms/newsletter.php" method="post" class="php-email-form">
                            <div class="newsletter-form">
                                <input type="email" name="email" style="color: white"
                                    placeholder="Enter your email" />
                                <input type="submit" value="Subscribe" />
                            </div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">
                                Your subscription request has been sent. Thank you!
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="container copyright text-center mt-4">
                <p>
                    © <span>Copyright</span>
                    <strong class="px-1 sitename">Solas</strong>
                    <span>All Rights Reserved</span>
                </p>
                <div class="credits">
                    Designed with ❤️ for autism awareness and inclusion.
                </div>
            </div>
        </footer>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

        <!-- Main JS File -->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

        @stack('scripts')
    </body>

</html>
