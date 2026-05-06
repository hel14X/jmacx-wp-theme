<?php
/**
 * The template for displaying archive pages and the blog index.
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- ARCHIVE HERO -->
    <section class="page-hero">
        <div class="hero-background" style="background-color: var(--bg-dark); opacity: 1;"></div>
        <div class="hero-content fade-in-up">
            <h1 class="hero-title gradient-text">
                <?php
                if ( is_category() ) {
                    single_cat_title();
                } elseif ( is_tag() ) {
                    single_tag_title();
                } elseif ( is_author() ) {
                    the_author();
                } elseif ( is_post_type_archive( 'jmacxled_product' ) ) {
                    echo 'Product Portfolio';
                } else {
                    echo 'Company News';
                }
                ?>
            </h1>
            <p class="hero-subtitle">Latest updates, technical insights, and project showcases.</p>
        </div>
    </section>

    <!-- ARCHIVE CONTENT -->
    <section class="archive-section section-padding">
        <div class="container">
            <?php if ( have_posts() ) : ?>
                <div class="blog-grid">
                    <?php
                    $delay = 0.1;
                    while ( have_posts() ) : the_post(); 
                    ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card fade-in-up'); ?> style="animation-delay: <?php echo esc_attr( $delay ); ?>s;">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>" class="blog-image">
                                    <?php the_post_thumbnail( 'large' ); ?>
                                </a>
                            <?php endif; ?>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="posted-on"><?php echo get_the_date(); ?></span>
                                </div>
                                <h2 class="blog-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                <div class="blog-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="btn-text">Read More &rarr;</a>
                            </div>
                        </article>
                    <?php 
                        $delay += 0.1;
                    endwhile; 
                    ?>
                </div>

                <div class="pagination-wrapper fade-in" style="margin-top: 3rem; text-align: center;">
                    <?php
                    the_posts_pagination( array(
                        'prev_text' => '&larr; Previous',
                        'next_text' => 'Next &rarr;',
                    ) );
                    ?>
                </div>

            <?php else : ?>
                <div class="no-results not-found fade-in text-center">
                    <h2>Nothing Found</h2>
                    <p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
                    <?php get_search_form(); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

</main>

<?php
get_footer();
