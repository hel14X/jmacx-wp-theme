<?php
/**
 * Template Name: Front Page
 *
 * The front page template file for JMACXLED
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="hero-background"></div>
        <div class="hero-content fade-in-up">
            <h1 class="hero-title"><?php echo wp_kses_post( get_theme_mod( 'hero_title', 'Professional <span class="gradient-text">LED Wall Solutions</span>' ) ); ?></h1>
            <p class="hero-subtitle"><?php echo esc_html( get_theme_mod( 'hero_subtitle', 'Superior brightness, seamless integration, and long-term reliability for live events, advertising, and large-scale architectural installations.' ) ); ?></p>
            <div class="hero-actions">
                <a href="#portfolio" class="btn-primary btn-lg">Explore Portfolio</a>
                <a href="#contact" class="btn-secondary btn-lg">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- PRODUCT PORTFOLIO SECTION -->
    <section id="portfolio" class="portfolio-section section-padding">
        <div class="container">
            <div class="section-header fade-in">
                <h2>Product <span class="accent">Portfolio</span></h2>
                <p>Engineered to deliver high-performance visual systems for every environment.</p>
            </div>

            <div class="portfolio-grid">
                <!-- Rental LED -->
                <div class="portfolio-card fade-in-up" style="animation-delay: 0.1s;">
                    <div class="card-image rental-bg"></div>
                    <div class="card-content">
                        <h3>Rental LED Systems</h3>
                        <p>For concerts, stage productions, and touring events. Featuring precision seamless stitching, ultra-lightweight structure, and 3840 Hz refresh rates.</p>
                        <ul class="spec-list">
                            <li><i class="icon-check"></i> Die-casting aluminum</li>
                            <li><i class="icon-check"></i> P2.604 - P4.81 Pitch</li>
                        </ul>
                    </div>
                </div>

                <!-- Outdoor Energy Saving -->
                <div class="portfolio-card fade-in-up" style="animation-delay: 0.2s;">
                    <div class="card-image outdoor-bg"></div>
                    <div class="card-content">
                        <h3>Outdoor Energy Saving</h3>
                        <p>High impact advertising with IP66 protection. Maintains visibility under direct sunlight while remaining operational in challenging conditions.</p>
                        <ul class="spec-list">
                            <li><i class="icon-check"></i> >6500 cd/m² Brightness</li>
                            <li><i class="icon-check"></i> Front & Rear Maintenance</li>
                        </ul>
                    </div>
                </div>

                <!-- Indoor Fine Pitch -->
                <div class="portfolio-card fade-in-up" style="animation-delay: 0.3s;">
                    <div class="card-image indoor-bg"></div>
                    <div class="card-content">
                        <h3>Indoor Fine Pitch</h3>
                        <p>Optimized for broadcast studios and control centers. Sharp image reproduction, color accuracy, and consistent brightness.</p>
                        <ul class="spec-list">
                            <li><i class="icon-check"></i> P1.25 - P2.5 Pitch</li>
                            <li><i class="icon-check"></i> Advanced ripple-free tech</li>
                        </ul>
                    </div>
                </div>

                <!-- Creative LED -->
                <div class="portfolio-card fade-in-up" style="animation-delay: 0.4s;">
                    <div class="card-image creative-bg"></div>
                    <div class="card-content">
                        <h3>Creative LED Displays</h3>
                        <p>Unconventional digital installations. Spheres, domes, cubes, and glass-free 3D LED displays for immersive environments.</p>
                        <ul class="spec-list">
                            <li><i class="icon-check"></i> Flexible & Arc configs</li>
                            <li><i class="icon-check"></i> Custom diameters up to 17m</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HIGHLIGHTS / SPECS SECTION -->
    <section class="specs-section section-padding dark-bg">
        <div class="container">
            <div class="specs-wrapper glass-panel fade-in">
                <div class="specs-text">
                    <h2>Technical <span class="gradient-text">Excellence</span></h2>
                    <p>Our solutions combine engineering precision with design flexibility.</p>
                </div>
                <div class="specs-grid">
                    <div class="spec-item">
                        <div class="spec-value"><?php echo esc_html( get_theme_mod( 'spec_1_value', '3840' ) ); ?><span class="unit"><?php echo esc_html( get_theme_mod( 'spec_1_unit', 'Hz' ) ); ?></span></div>
                        <div class="spec-label"><?php echo esc_html( get_theme_mod( 'spec_1_label', 'High Refresh Rate' ) ); ?></div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-value"><?php echo esc_html( get_theme_mod( 'spec_2_value', 'IP66' ) ); ?></div>
                        <div class="spec-label"><?php echo esc_html( get_theme_mod( 'spec_2_label', 'Protection Rating' ) ); ?></div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-value"><?php echo esc_html( get_theme_mod( 'spec_3_value', 'P1.25' ) ); ?></div>
                        <div class="spec-label"><?php echo esc_html( get_theme_mod( 'spec_3_label', 'Minimum Pixel Pitch' ) ); ?></div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-value"><?php echo esc_html( get_theme_mod( 'spec_4_value', '3D' ) ); ?></div>
                        <div class="spec-label"><?php echo esc_html( get_theme_mod( 'spec_4_label', 'Glasses-Free Capable' ) ); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- #primary -->

<?php
get_footer();
