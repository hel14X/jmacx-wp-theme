    <footer id="colophon" class="site-footer">
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-col about-col">
                    <h3 class="footer-title">JMACX<span class="accent">LED</span></h3>
                    <p><?php echo esc_html( get_theme_mod( 'footer_about', 'Professional LED Wall Solutions for rental, fixed installation, commercial, and creative applications.' ) ); ?></p>
                </div>
                <div class="footer-col links-col">
                    <h4 class="footer-title">Products</h4>
                    <ul>
                        <li><a href="#rental">Rental LED Displays</a></li>
                        <li><a href="#outdoor">Outdoor LED Displays</a></li>
                        <li><a href="#indoor">Indoor Fine Pitch</a></li>
                        <li><a href="#creative">Creative Displays</a></li>
                    </ul>
                </div>
                <div class="footer-col contact-col" id="contact">
                    <h4 class="footer-title">Contact</h4>
                    <p>Web: www.jmacxled.com</p>
                    <p><?php echo esc_html( get_theme_mod( 'footer_contact', 'Ready for your next architectural installation or live event? Get in touch today.' ) ); ?></p>
                </div>
            </div>
            <div class="site-info">
                <p>&copy; <?php echo date('Y'); ?> JMACXLED. All rights reserved.</p>
            </div><!-- .site-info -->
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
