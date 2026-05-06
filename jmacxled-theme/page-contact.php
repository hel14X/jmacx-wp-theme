<?php
/**
 * Template Name: Contact Page
 *
 * The template for displaying the contact page.
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- CONTACT HERO -->
    <section class="page-hero">
        <div class="hero-background" style="background-color: var(--bg-dark); opacity: 1;"></div>
        <div class="hero-content fade-in-up">
            <h1 class="hero-title"><span class="gradient-text">Contact</span> Us</h1>
            <p class="hero-subtitle">Get in touch with our team of display experts.</p>
        </div>
    </section>

    <!-- CONTACT CONTENT -->
    <section class="contact-section section-padding">
        <div class="container contact-grid">
            
            <div class="contact-info fade-in">
                <h2>Let's build something <span class="accent">brilliant.</span></h2>
                <p>Whether you need a massive outdoor billboard or a fine-pitch indoor display, we're here to help you achieve visual excellence.</p>
                
                <div class="info-blocks">
                    <div class="info-item">
                        <h4>Headquarters</h4>
                        <p>123 LED Street<br>London, UK</p>
                    </div>
                    <div class="info-item">
                        <h4>Direct Contact</h4>
                        <p>Email: info@jmacxled.com<br>Phone: +44 1234 567890</p>
                    </div>
                </div>

                <div class="contact-map-wrapper" style="margin-top: 2rem; border-radius: 12px; overflow: hidden; border: 1px solid var(--border-glass);">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.5463435165187!2d-0.122145384230248!3d51.50329727963462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2suk!4v1680000000000!5m2!1sen!2suk" width="100%" height="250" style="border:0; filter: invert(90%) hue-rotate(180deg);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="contact-form-wrapper glass-panel fade-in" style="animation-delay: 0.2s;">
                <h3>Send an Inquiry</h3>
                <!-- Note: This is a static HTML form styled to match the theme. 
                     In a production WP environment, replace this with a CF7 or WPForms shortcode -->
                <form class="custom-form" action="#" method="POST">
                    
                    <?php 
                    // Pre-fill product name if redirected from a single product page
                    $product_interest = isset( $_GET['product'] ) ? sanitize_text_field( $_GET['product'] ) : ''; 
                    ?>

                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="interest">Product of Interest</label>
                        <input type="text" id="interest" name="interest" value="<?php echo esc_attr( $product_interest ); ?>">
                    </div>
                    <div class="form-group">
                        <label for="message">Project Details</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn-primary btn-full">Submit Request</button>
                </form>
            </div>

        </div>
    </section>

</main>

<?php
get_footer();
