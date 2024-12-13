<footer id="footer" class="footer dark-background">
    <div class="container footer-top">
        <!-- About Section -->
        <div class="footer-about mx-auto text-center">
            <a href="{{ route('/') }}" class="logo">
                <span class="sitename">{{ $settings->website_name }}</span>
            </a>
            <div class="footer-contact pt-3">
                <p translate="no">{{ $settings->address }}</p>
                <p translate="no" class="mt-3">
                    <strong>Phone:</strong> <span>{{ $settings->phone }}</span>
                </p>
                <p translate="no"><strong>Email:</strong> <span>{{ $settings->email }}</span></p>
            </div>
            <div class="social-links d-flex align-items-center justify-content-center mt-4">
                <a href="{{ $settings->facebook }}"><i class="bi bi-facebook"></i></a>
                <a href="{{ $settings->instagram }}"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>
            © <span>Copyright</span>
            <strong class="px-1 sitename">{{ $settings->website_name }}</strong>
            <span>All Rights Reserved</span>
        </p>
        <div class="credits">
            Designed with ❤️ for autism awareness and inclusion.
        </div>
    </div>
</footer>
