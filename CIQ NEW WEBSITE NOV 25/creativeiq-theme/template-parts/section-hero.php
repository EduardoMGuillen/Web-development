<?php
/**
 * Template part for displaying the hero section
 *
 * @package CreativeIQ
 */
?>

<section class="hero" id="home">
    <div class="hero-container">
        <div class="hero-content">
            <span class="badge">#1 Digital Marketing Agency</span>
            <h1>Grow Your Business with Digital Excellence</h1>
            <p>We help ambitious brands dominate their competition with data-driven digital marketing strategies that deliver measurable results.</p>
            <div class="hero-buttons">
                <a href="#contact" class="btn btn-primary btn-large btn-icon">
                    Get Free Audit <span>→</span>
                </a>
                <a href="#" class="btn btn-outline btn-large btn-icon">
                    ▶ Watch Demo
                </a>
            </div>
        </div>
        <div class="hero-image">
            <?php
            $hero_image = get_theme_mod('hero_image', '');
            if ($hero_image) {
                echo wp_get_attachment_image($hero_image, 'large', false, array('alt' => 'Team working on digital marketing'));
            } else {
                ?>
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&h=600&fit=crop" alt="Team working on digital marketing">
                <?php
            }
            ?>
            <div class="image-overlay overlay-top-left">Monthly Growth +45%</div>
            <div class="image-overlay overlay-bottom-right">Conversion Rate 12.8%</div>
        </div>
    </div>
</section>

