<footer>
        <div class="footer container">
            <div class="footer-veg">
                <h5>Vegefoods</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div> <!-- footer-social -->
            </div> <!-- footer-veg -->


            <ul class="footer-links">
                <h5>Menu</h5>
                <li><a href="<?php echo get_home_url();?>">Home</a></li>
                <li><a href="<?php echo site_url( '/shop/' );?>">Shop</a></li>
                <li><a href="<?php echo site_url( '/about/' );?>">About</a></li>
                <li><a href="<?php echo site_url( '/category/blog/' );?>">Blog</a></li>
                <li><a href="<?php echo site_url( '/404/' );?>">404 Page</a></li>
            </ul>

            <ul class="footer-help">
                <h5>Help</h5>
                <li><a href="#">Shipping Information</a></li>
                <li><a href="#">Returns & Exchange</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Contact</a></li>
            </ul>

            <div class="footer-question">
                <h5>Have a Questions?</h5>
                <div>
                    <i></i>
                    <p>203 Fake St. Mountain View, San Francisco, California, USA</p>
                </div>

                <div>
                    <i></i>
                    <a href="tel:+123456789">+123 456 789</a>
                </div>

                <div>
                    <i></i>
                    <a href="mailto:info@yourdomain.com">info@yourdomain.com</a>
                </div>
            </div> <!-- footer-question -->
        </div> <!-- container -->
    </footer>

    <div class="copyright container">
        <p>Copyright &copy;<span id="year"></span> All rights reserved | 
            <a href="http://ac-design.website/" target="_blanc" class="footer-link">AC Website Design </a>
        </p>
    </div> <!-- copyright -->
    <div class="scrolled"></div>

    <?php wp_footer();?>
</body>

</html>