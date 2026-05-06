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
        <div class="max-w-[1200px] mx-auto px-8">
            <div class="section-header fade-in">
                <h2>Product <span class="accent">Portfolio</span></h2>
                <p>Engineered to deliver high-performance visual systems for every environment.</p>
            </div>

            <div class="portfolio-grid">
                <?php
                $portfolio_query = new WP_Query( array(
                    'post_type'      => 'jmacxled_product',
                    'posts_per_page' => -1,
                    'orderby'        => 'date',
                    'order'          => 'ASC'
                ) );

                if ( $portfolio_query->have_posts() ) :
                    $delay = 0.1;
                    while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
                        $bg_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                        $spec_1 = get_post_meta( get_the_ID(), '_jmacxled_spec_1', true );
                        $spec_2 = get_post_meta( get_the_ID(), '_jmacxled_spec_2', true );
                        ?>
                        <div class="portfolio-card fade-in-up" style="animation-delay: <?php echo esc_attr( $delay ); ?>s;">
                            <div class="card-image" <?php if ( $bg_image ) { echo 'style="background-image: url(\'' . esc_url( $bg_image ) . '\');"'; } else { echo 'style="background-color: rgba(255,255,255,0.05);"'; } ?>></div>
                            <div class="card-content">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php if ( has_excerpt() ) {
                                    the_excerpt();
                                } else {
                                    echo '<p>' . wp_trim_words( get_the_content(), 20, '...' ) . '</p>';
                                } ?>
                                <ul class="spec-list">
                                    <?php if ( ! empty( $spec_1 ) ) : ?>
                                        <li><i class="icon-check"></i> <?php echo esc_html( $spec_1 ); ?></li>
                                    <?php endif; ?>
                                    <?php if ( ! empty( $spec_2 ) ) : ?>
                                        <li><i class="icon-check"></i> <?php echo esc_html( $spec_2 ); ?></li>
                                    <?php endif; ?>
                                </ul>
                                <div style="margin-top: auto; padding-top: 1.5rem;">
                                    <a href="<?php the_permalink(); ?>" class="btn-secondary" style="width: 100%; text-align: center;">View Details</a>
                                </div>
                            </div>
                        </div>
                        <?php
                        $delay += 0.1;
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>' . esc_html__( 'No portfolio items found. Please add new LED products in the WordPress Admin > Portfolio!', 'jmacxled' ) . '</p>';
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- HIGHLIGHTS / SPECS SECTION -->
    <section class="specs-section section-padding dark-bg">
        <div class="max-w-[1200px] mx-auto px-8">
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

    <!-- SERVICES SECTION -->
    <section class="services-section section-padding">
        <div class="max-w-[1200px] mx-auto px-8">
            <div class="section-header fade-in">
                <h2>Our <span class="accent">Services</span></h2>
                <p>Comprehensive LED solutions designed for durability and efficiency.</p>
            </div>
            <div class="services-grid">
                <div class="service-card glass-panel fade-in-up">
                    <div class="service-icon"><i class="icon-consult"></i></div>
                    <h3>LED Consultation</h3>
                    <p>Our LED consultation services focus on understanding your unique needs. We provide tailored advice to help you choose the right solutions.</p>
                </div>
                <div class="service-card glass-panel fade-in-up" style="animation-delay: 0.1s;">
                    <div class="service-icon"><i class="icon-install"></i></div>
                    <h3>Installation Services</h3>
                    <p>We specialize in professional LED installation, ensuring every setup is optimized for performance. Our skilled team handles everything.</p>
                </div>
                <div class="service-card glass-panel fade-in-up" style="animation-delay: 0.2s;">
                    <div class="service-icon"><i class="icon-maintenance"></i></div>
                    <h3>Maintenance Support</h3>
                    <p>Our maintenance and repair services ensure your LED systems remain fully operational. We provide ongoing support to address any issues promptly.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section class="testimonials-section section-padding dark-bg">
        <div class="max-w-[1200px] mx-auto px-8">
            <div class="section-header fade-in">
                <h2>What Our <span class="gradient-text">Clients Say</span></h2>
                <p>Here are some thoughts from our satisfied clients.</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card glass-panel fade-in-up">
                    <p class="quote">"The LED upgrade transformed our office. Our energy bills have dropped significantly, and the bright lighting has improved our working environment."</p>
                    <div class="client-info">
                        <strong>John D.</strong>
                    </div>
                </div>
                <div class="testimonial-card glass-panel fade-in-up" style="animation-delay: 0.1s;">
                    <p class="quote">"I was impressed with the service from start to finish. The team was knowledgeable, professional, and delivered exactly what we needed."</p>
                    <div class="client-info">
                        <strong>Sarah L.</strong>
                    </div>
                </div>
                <div class="testimonial-card glass-panel fade-in-up" style="animation-delay: 0.2s;">
                    <p class="quote">"The consultation really helped us design the perfect lighting scheme. The installation was hassle-free, and we couldn't be happier with the results."</p>
                    <div class="client-info">
                        <strong>Emily T.</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="faq-section section-padding">
        <div class="max-w-[800px] mx-auto px-8">
            <div class="section-header fade-in">
                <h2>Frequently Asked <span class="accent">Questions</span></h2>
                <p>Get answers to your LED installation and product questions.</p>
            </div>
            <div class="faq-accordion fade-in-up">
                <div class="faq-item">
                    <button class="faq-question">How long does the installation process take?</button>
                    <div class="faq-answer"><p>Installation timelines vary based on the scale of the project, but typical indoor setups take 1-3 days, while large outdoor billboards may take longer.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">What are the costs involved?</button>
                    <div class="faq-answer"><p>Costs depend on screen size, pixel pitch, and structural requirements. Contact us for a detailed, customized quote.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Do you offer maintenance services?</button>
                    <div class="faq-answer"><p>Yes, we offer comprehensive ongoing maintenance and support contracts to ensure your display stays perfectly lit.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Can I customize my LED setup?</button>
                    <div class="faq-answer"><p>Absolutely. We specialize in custom shapes, curves, and unique architectural integrations.</p></div>
                </div>
            </div>
        </div>
    </section>

</main><!-- #primary -->

<?php
get_footer();
