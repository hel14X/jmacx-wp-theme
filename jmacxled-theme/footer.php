    <footer id="colophon" class="site-footer">
        <div class="footer-container">
            
            <div class="newsletter-wrapper glass-panel" style="margin-bottom: 3rem; padding: 2rem; border-radius: 16px; display: flex; flex-wrap: wrap; gap: 2rem; align-items: center;">
                <div class="newsletter-text" style="flex: 1 1 300px;">
                    <h3>Stay Updated with Our Newsletter</h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem;">Join our mailing list to receive the latest updates and exclusive offers on LED products and services. We promise not to spam your inbox.</p>
                </div>
                <div class="newsletter-form" style="flex: 1 1 400px;">
                    <form action="#" method="POST" class="custom-form">
                        <div style="display: flex; gap: 1rem;">
                            <input type="email" name="email" placeholder="Enter your email" required style="flex: 1; padding: 0.8rem; border-radius: 8px;">
                            <button type="submit" class="btn-primary" style="padding: 0.8rem 1.5rem; border-radius: 8px;">Subscribe Now</button>
                        </div>
                        <p style="font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem;">By subscribing you're confirming that you agree with our Terms and Conditions.</p>
                    </form>
                </div>
            </div>

            <div class="footer-grid" style="gap: 4rem;">
                <div class="footer-col about-col">
                    <h3 class="footer-title">JMACX<span class="accent">LED</span></h3>
                    <p><?php echo esc_html( get_theme_mod( 'footer_about', 'Professional LED Wall Solutions for rental, fixed installation, commercial, and creative applications.' ) ); ?></p>
                </div>
                <div class="footer-col links-col">
                    <h4 class="footer-title">Products</h4>
                    <?php
                    if ( has_nav_menu( 'footer-products' ) ) {
                        wp_nav_menu( array( 'theme_location' => 'footer-products', 'container' => false, 'menu_class' => 'footer-nav' ) );
                    } else {
                        ?>
                        <ul>
                            <li><a href="#rental">Rental LED Displays</a></li>
                            <li><a href="#outdoor">Outdoor LED Displays</a></li>
                            <li><a href="#indoor">Indoor Fine Pitch</a></li>
                            <li><a href="#creative">Creative Displays</a></li>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
                <div class="footer-col contact-col" id="contact">
                    <h4 class="footer-title">Company</h4>
                    <?php
                    if ( has_nav_menu( 'footer-company' ) ) {
                        wp_nav_menu( array( 'theme_location' => 'footer-company', 'container' => false, 'menu_class' => 'footer-nav' ) );
                    } else {
                        ?>
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About Us</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact Us</a></li>
                        </ul>
                        <?php
                    }
                    ?>
                    <h4 class="footer-title" style="margin-top: 1.5rem;">Contact</h4>
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
