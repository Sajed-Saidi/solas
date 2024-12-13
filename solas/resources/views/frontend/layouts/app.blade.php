<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', $settings->website_name)</title>
        <meta name="description" content="{{ $settings->meta_description }}" />
        <meta name="keywords" content="{{ $settings->meta_keywords }}" />

        <!-- Favicons -->
        <link href="{{ asset('frontend/assets/img/favicon.ico') }}" rel="icon" />
        <link href="{{ asset('frontend/assets/img/favicon.ico') }}" rel="apple-touch-icon" />

        <!-- Vendor CSS Files -->
        <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

        <link href="{{ asset('frontend/assets/css/main.css') }}" rel="stylesheet" />

        @stack('style')
    </head>

    <body class="index-page">

        @include('frontend.layouts.header')
        @yield('content')
        @include('frontend.layouts.footer')

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
        <script src="{{ asset('frontend/assets/js/jquery-3.7.1.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/Autolinker.min.js') }}"></script>

        <!-- Main JS File -->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

        <script>
            $('input[type="text"],textarea,input[type="password"],input[type="search"]').on('input', function() {
                var trimmedValue = $(this).val().trim();
                if (trimmedValue == "") {
                    $(this).val(trimmedValue);
                }
            });

            $('form button[type="submit"]').on("click", function() {
                $('form input[type="text"]').each(function() {
                    var trimmedValue = $(this).val().trim();
                    $(this).val(trimmedValue);
                });
            })
        </script>

        @stack('scripts')

        <script>
            const contentLinker = document.querySelectorAll('.contentLinker');

            contentLinker.forEach(function(cont) {
                console.log(cont);

                cont.innerHTML = Autolinker.link(cont.innerHTML);
            });
        </script>

        <script>
            function adjustTextDirection() {
                const elements = document.querySelectorAll('div, p, span, a');

                elements.forEach(element => {
                    const content = element.textContent.trim();

                    // Regex to detect RTL characters (Arabic, Hebrew, etc.)
                    const hasRTL = /[\u0590-\u06FF]/.test(content);
                    const hasLTR = /[a-zA-Z0-9]/.test(content);

                    // If both RTL and LTR characters are present, handle as mixed
                    if (hasRTL && hasLTR) {
                        element.style.direction = 'rtl'; // Base direction
                        element.style.unicodeBidi = 'embed'; // Properly arranges mixed text
                    } else if (hasRTL) {
                        // Pure RTL content
                        element.setAttribute('dir', 'rtl');
                        element.style.unicodeBidi = 'normal';
                    } else if (hasLTR) {
                        // Pure LTR content
                        element.setAttribute('dir', 'ltr');
                        element.style.unicodeBidi = 'normal';
                    }
                });
            }

            $.ready(function() {
                adjustTextDirection();
            });
        </script>

    </body>

</html>
