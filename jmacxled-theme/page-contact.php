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
                        <p>123 Display Avenue<br>Tech District, TD 90210</p>
                    </div>
                    <div class="info-item">
                        <h4>Direct Contact</h4>
                        <p>Email: info@jmacxled.com<br>Phone: +1 (555) 019-8372</p>
                    </div>
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
