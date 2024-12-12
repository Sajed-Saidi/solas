<footer id="footer" class="footer dark-background">
    <div class="container footer-top">
        <div class="row gy-4">
            <!-- About Section -->
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="{{ route('/') }}" class="logo d-flex align-items-center">
                    <span class="sitename">{{ $settings->website_name }}</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>{{ $settings->address }}</p>
                    <p class="mt-3">
                        <strong>Phone:</strong> <span>{{ $settings->phone }}</span>
                    </p>
                    <p><strong>Email:</strong> <span>{{ $settings->email }}</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                    <a href="{{ $settings->facebook }}"><i class="bi bi-facebook"></i></a>
                    <a href="{{ $settings->instagram }}"><i class="bi bi-instagram"></i></a>
                </div>
            </div>

            <!-- Useful Links -->
            <div class="col-lg-4 col-md-6 footer-links">
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
            <div class="col-lg-4 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="#">Therapy Programs</a></li>
                    <li><a href="#">Parent Support</a></li>
                    <li><a href="#">Educational Workshops</a></li>
                    <li><a href="#">Community Events</a></li>
                    <li><a href="#">Advocacy</a></li>
                </ul>
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
