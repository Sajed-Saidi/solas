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

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet" /> --}}

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

        <script type="text/javascript" defer src="{{ asset('frontend/assets/js/google.translate.js') }}"></script>

        <script defer type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                        pageLanguage: 'bg',
                        includedLanguages: 'en,ar',
                        autoDisplay: false,
                        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                    },
                    'google_translate_element')
            }
        </script>

        <script>
            const myTextEl = document.getElementById('articles');
            myTextEl.innerHTML = Autolinker.link(myTextEl.innerHTML);
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

            // Run the function after the page loads
            document.addEventListener('DOMContentLoaded', adjustTextDirection);

            // Observe changes to the <html> lang attribute
            const htmlElement = document.querySelector('html');

            const observer = new MutationObserver(() => adjustTextDirection);
            observer.observe(document.documentElement, {
                attributes: true,
                attributeFilter: ['lang']
            });
        </script>

    </body>

</html>
