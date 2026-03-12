    <!-- Footer -->
    <footer class="footer bg-dark text-white text-center-mobile">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col about-col">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo text-white mb-2 d-inline-block">
                        <i class="fa-solid fa-tooth text-primary"></i> BrightSmile
                    </a>
                    <p class="opacity-80 mt-2">Providing advanced, compassionate, and professional dental care for the whole family.</p>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col links-col">
                    <h4 class="mb-3">Quick Links</h4>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#home">Home</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#about">About Clinic</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#services">Our Services</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#dentist">Meet the Dentist</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#appointment">Book Appointment</a></li>
                    </ul>
                </div>
                <div class="footer-col links-col">
                    <h4 class="mb-3">Our Services</h4>
                    <ul>
                        <li><a href="#">Teeth Cleaning</a></li>
                        <li><a href="#">Teeth Whitening</a></li>
                        <li><a href="#">Dental Implants</a></li>
                        <li><a href="#">Root Canal</a></li>
                        <li><a href="#">Emergency Dental</a></li>
                    </ul>
                </div>
                <div class="footer-col hours-col">
                    <h4 class="mb-3">Opening Hours</h4>
                    <ul>
                        <li>Monday - Friday: <span class="float-right text-primary">8:00 AM - 6:00 PM</span></li>
                        <li>Saturday: <span class="float-right text-primary">9:00 AM - 2:00 PM</span></li>
                        <li>Sunday: <span class="float-right text-primary">Closed</span></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom mt-4 pt-3 border-top opacity-80 position-relative text-center">
                <p>&copy; <?php echo date('Y'); ?> BrightSmile Dental Clinic. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Simple Mobile Menu Script -->
    <script>
        const mobileToggle = document.querySelector('.mobile-toggle');
        const navbar = document.querySelector('.navbar');

        if(mobileToggle && navbar) {
            mobileToggle.addEventListener('click', () => {
                navbar.classList.toggle('active');
            });

            // Close menu when clicking a link
            document.querySelectorAll('.nav-list a').forEach(link => {
                link.addEventListener('click', () => {
                    navbar.classList.remove('active');
                });
            });
        }
    </script>
    
    <?php wp_footer(); ?>
</body>
</html>
