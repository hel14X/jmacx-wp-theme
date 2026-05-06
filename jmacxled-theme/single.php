<?php
/**
 * The template for displaying all single posts (Blog/News).
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php while ( have_posts() ) : the_post(); ?>
    
        <!-- SINGLE POST HERO -->
        <section class="single-post-hero">
            <div class="hero-background" style="background-color: var(--bg-dark); opacity: 1;"></div>
            <div class="container hero-content fade-in-up" style="text-align: left; padding-top: 6rem;">
                <div class="post-meta" style="color: var(--accent-blue); font-weight: bold; margin-bottom: 1rem;">
                    <?php echo get_the_date(); ?> &bull; <?php echo get_the_category_list( ', ' ); ?>
                </div>
                <h1 class="hero-title" style="font-size: clamp(2rem, 4vw, 3.5rem); margin-bottom: 1rem;"><?php the_title(); ?></h1>
            </div>
        </section>

        <!-- POST CONTENT -->
        <section class="post-content-section section-padding">
            <div class="container post-layout-grid">
                
                <article id="post-<?php the_ID(); ?>" <?php post_class('post-main-content fade-in'); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-featured-image" style="margin-bottom: 2rem; border-radius: 12px; overflow: hidden; border: 1px solid var(--border-glass);">
                            <?php the_post_thumbnail( 'full', array( 'style' => 'width:100%; height:auto; display:block;' ) ); ?>
                        </div>
                    <?php endif; ?>

                    <div class="content-body" style="background: var(--bg-panel); padding: 2.5rem; border-radius: 16px; border: 1px solid var(--border-glass);">
                        <?php
                        the_content();
                        
                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jmacxled' ),
                                'after'  => '</div>',
                            )
                        );
                        ?>
                    </div>

                    <div class="post-navigation" style="margin-top: 3rem; display: flex; justify-content: space-between;">
                        <div class="nav-prev"><?php previous_post_link( '%link', '&larr; %title' ); ?></div>
                        <div class="nav-next"><?php next_post_link( '%link', '%title &rarr;' ); ?></div>
                    </div>
                </article>

                <!-- Optional Sidebar for News could go here, currently full width layout is preferred -->

            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php
get_footer();
