<?php
/**
 * Template Name: About Us Page
 *
 * The template for displaying the About Us page based on the Company Profile.
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- ABOUT HERO SECTION -->
    <section class="hero-section" style="min-height: 60vh; display: flex; align-items: center; justify-content: center;">
        <div class="hero-background"></div>
        <div class="hero-content fade-in-up text-center" style="max-width: 900px; padding: 0 2rem;">
            <h1 class="hero-title" style="font-size: clamp(3rem, 6vw, 4.5rem); margin-bottom: 1.5rem;">About <span class="gradient-text">JMACXLED</span></h1>
            <p class="hero-subtitle" style="font-size: clamp(1.1rem, 2vw, 1.3rem); color: var(--text-muted);">
                A specialized LED display solutions provider delivering high-performance visual systems for rental, fixed installation, commercial, and creative applications.
            </p>
        </div>
    </section>

    <!-- COMPANY OVERVIEW SECTION -->
    <section class="section-padding dark-bg">
        <div class="max-w-[1200px] mx-auto px-8">
            <div class="glass-panel fade-in-up" style="padding: var(--spacing-xl); border-radius: 24px; text-align: center;">
                <h2 style="font-size: 2.5rem; margin-bottom: 2rem;">Our <span class="accent">Mission & Vision</span></h2>
                <p style="font-size: 1.2rem; line-height: 1.8; color: var(--text-main); margin-bottom: 2rem; max-width: 800px; margin: 0 auto;">
                    JMACXLED combines engineering precision with design flexibility to produce advanced LED technologies for both indoor and outdoor environments. With a strong foundation in durability, innovation, and visual excellence, we serve industries including live events, advertising, retail, exhibitions, corporate environments, and large-scale architectural installations.
                </p>
                <p style="font-size: 1.2rem; line-height: 1.8; color: var(--text-muted); max-width: 800px; margin: 0 auto;">
                    Each solution is engineered to deliver superior brightness, seamless integration, and long-term reliability.
                </p>
            </div>
        </div>
    </section>

    <!-- PRODUCT PORTFOLIO SECTION -->
    <section class="section-padding">
        <div class="max-w-[1200px] mx-auto px-8">
            <div class="section-header fade-in">
                <h2>Our <span class="gradient-text">Core Expertise</span></h2>
                <p>Engineered for high-impact visual performance across all environments.</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card glass-panel fade-in-up">
                    <div class="service-icon" style="color: var(--accent-blue); font-size: 2.5rem; margin-bottom: 1.5rem;"><i class="icon-install"></i></div>
                    <h3>Rental LED Display Systems</h3>
                    <p>Engineered for concerts, stage productions, touring events, and temporary installations. Featuring lightweight structures and rapid assembly mechanisms.</p>
                </div>
                
                <div class="service-card glass-panel fade-in-up" style="animation-delay: 0.1s;">
                    <div class="service-icon" style="color: var(--accent-purple); font-size: 2.5rem; margin-bottom: 1.5rem;"><i class="icon-consult"></i></div>
                    <h3>Outdoor Energy Saving Displays</h3>
                    <p>Developed for high-impact advertising and permanent outdoor installations. Built to withstand extreme weather conditions while delivering exceptional visibility under direct sunlight.</p>
                </div>
                
                <div class="service-card glass-panel fade-in-up" style="animation-delay: 0.2s;">
                    <div class="service-icon" style="color: var(--accent-blue); font-size: 2.5rem; margin-bottom: 1.5rem;"><i class="icon-maintenance"></i></div>
                    <h3>Indoor Fine Pitch Displays</h3>
                    <p>Optimized for meeting rooms, broadcast studios, control centers, and retail environments requiring high resolution, sharp image reproduction, and accurate colors.</p>
                </div>

                <div class="service-card glass-panel fade-in-up" style="animation-delay: 0.3s;">
                    <div class="service-icon" style="color: var(--accent-purple); font-size: 2.5rem; margin-bottom: 1.5rem;"><i class="icon-install"></i></div>
                    <h3>Creative LED Display Solutions</h3>
                    <p>Fully customized display structures designed to create immersive architectural and experiential environments. Includes flexible modules, spheres, and glasses-free 3D displays.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="section-padding dark-bg" style="text-align: center;">
        <div class="max-w-[800px] mx-auto px-8 fade-in-up">
            <h2 style="font-size: 3rem; margin-bottom: 1.5rem;">Ready to <span class="accent">Transform</span> Your Space?</h2>
            <p style="font-size: 1.2rem; color: var(--text-muted); margin-bottom: 3rem;">
                Partner with us to create a stunning, custom-engineered LED display solution for your next project.
            </p>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-primary" style="padding: 1rem 3rem; font-size: 1.1rem;">Get in Touch Today</a>
        </div>
    </section>

</main><!-- #primary -->

<?php
get_footer();
