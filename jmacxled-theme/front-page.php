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
                                <h3><?php the_title(); ?></h3>
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
