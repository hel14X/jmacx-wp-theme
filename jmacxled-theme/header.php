<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="description" content="JMACXLED - Professional LED Wall Solutions. Creative, Indoor, Outdoor, and Rental LED Display Systems.">
	<?php wp_head(); ?>
    <style>
        .custom-logo {
            max-height: <?php echo esc_attr( get_theme_mod( 'logo_max_height', 50 ) ); ?>px !important;
            width: auto;
        }
    </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'jmacxled' ); ?></a>

	<header id="masthead" class="site-header glass-header">
		<div class="header-container">
            <div class="site-branding">
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">
                        <span class="logo-text"><?php echo esc_html( get_theme_mod( 'header_logo_main', 'JMACX' ) ); ?><span class="accent"><?php echo esc_html( get_theme_mod( 'header_logo_accent', 'LED' ) ); ?></span></span>
                    </a>
                    <?php
                }
                ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="hamburger"></span>
                    <span class="hamburger"></span>
                    <span class="hamburger"></span>
                </button>
                <?php
                if ( has_nav_menu( 'menu-1' ) ) {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'container'      => false,
                            'items_wrap'     => '<ul id="%1$s" class="%2$s nav-list">%3$s</ul>',
                        )
                    );
                } else {
                    ?>
                    <ul class="nav-list">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/#portfolio' ) ); ?>">Portfolio</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/category/news' ) ); ?>">News</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About Us</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
                    </ul>
                    <?php
                }
                ?>
                <a href="<?php echo esc_url( get_theme_mod( 'header_cta_link', '#contact' ) ); ?>" class="btn-primary header-cta"><?php echo esc_html( get_theme_mod( 'header_cta_text', 'Get a Quote' ) ); ?></a>
            </nav><!-- #site-navigation -->
        </div>
	</header><!-- #masthead -->
