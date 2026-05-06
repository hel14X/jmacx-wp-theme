<?php
/**
 * The main template file
 */

get_header();
?>

<main id="primary" class="site-main jmacx-container">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php
                    if ( is_singular() ) :
                        the_title( '<h1 class="entry-title">', '</h1>' );
                    else :
                        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    endif;
                    ?>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php
                    the_content(
                        sprintf(
                            wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'jmacxled' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            wp_kses_post( get_the_title() )
                        )
                    );
                    ?>
                </div><!-- .entry-content -->
            </article><!-- #post-<?php the_ID(); ?> -->
            <?php
        endwhile;

        the_posts_navigation();

    else :
        ?>
        <section class="no-results not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'jmacxled' ); ?></h1>
            </header><!-- .page-header -->
            <div class="page-content">
                <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'jmacxled' ); ?></p>
            </div><!-- .page-content -->
        </section><!-- .no-results -->
        <?php
    endif;
    ?>
</main><!-- #primary -->

<?php
get_footer();
