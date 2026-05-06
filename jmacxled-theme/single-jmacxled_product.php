<?php
/**
 * The template for displaying single portfolio items (LED Products).
 */

get_header();

// Get custom specs
$spec_1 = get_post_meta( get_the_ID(), '_jmacxled_spec_1', true );
$spec_2 = get_post_meta( get_the_ID(), '_jmacxled_spec_2', true );
$bg_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
?>

<main id="primary" class="site-main">

    <?php while ( have_posts() ) : the_post(); ?>
    
        <!-- PRODUCT HERO -->
        <section class="single-product-hero">
            <div class="hero-background" <?php if ( $bg_image ) { echo 'style="background-image: url(\'' . esc_url( $bg_image ) . '\'); opacity: 0.6;"'; } ?>></div>
            <div class="hero-content fade-in-up">
                <h1 class="hero-title gradient-text"><?php the_title(); ?></h1>
            </div>
        </section>

        <!-- PRODUCT DETAILS -->
        <section class="product-details-section section-padding">
            <div class="container product-layout-grid">
                
                <!-- Description -->
                <div class="product-description fade-in">
                    <h2>Overview</h2>
                    <div class="content-body">
                        <?php the_content(); ?>
                    </div>
                </div>

                <!-- Sidebar / Specs -->
                <div class="product-sidebar fade-in" style="animation-delay: 0.2s;">
                    <div class="product-specs-card glass-panel">
                        <h3>Hardware Specifications</h3>
                        <ul class="spec-list">
                            <?php if ( ! empty( $spec_1 ) ) : ?>
                                <li><i class="icon-check"></i> <strong>Key Spec:</strong> <?php echo esc_html( $spec_1 ); ?></li>
                            <?php endif; ?>
                            <?php if ( ! empty( $spec_2 ) ) : ?>
                                <li><i class="icon-check"></i> <strong>Configuration:</strong> <?php echo esc_html( $spec_2 ); ?></li>
                            <?php endif; ?>
                        </ul>
                        
                        <div class="cta-wrapper">
                            <p class="cta-text">Ready to integrate this display into your next project?</p>
                            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>?product=<?php echo urlencode( get_the_title() ); ?>" class="btn-primary btn-full">Request a Quote</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php
get_footer();
