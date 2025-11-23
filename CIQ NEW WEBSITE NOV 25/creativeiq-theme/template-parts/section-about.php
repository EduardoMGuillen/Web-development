<?php
/**
 * Template part for displaying the about section
 *
 * @package CreativeIQ
 */
?>

<section class="about" id="about">
    <div class="about-container">
        <div class="about-content">
            <span class="section-badge">About CreativeIQ</span>
            <h2>Your Growth Partner in the Digital Age</h2>
            <p>With over 8 years of experience, we've helped hundreds of businesses transform their online presence and achieve sustainable growth through strategic digital marketing.</p>
            <div class="differentiators">
                <div class="differentiator">
                    <div class="differentiator-icon">🏆</div>
                    <h4>Industry Recognition</h4>
                </div>
                <div class="differentiator">
                    <div class="differentiator-icon">📈</div>
                    <h4>Proven Results</h4>
                </div>
                <div class="differentiator">
                    <div class="differentiator-icon">👥</div>
                    <h4>Expert Team</h4>
                </div>
            </div>
            <ul class="benefits-list">
                <li>Data-driven strategies</li>
                <li>Dedicated account manager</li>
                <li>Transparent reporting</li>
                <li>Cutting-edge tools</li>
                <li>Proven track record</li>
            </ul>
            <a href="#contact" class="btn btn-primary btn-large">Schedule Free Consultation</a>
        </div>
        <div class="about-image">
            <?php
            $about_image = get_theme_mod('about_image', '');
            if ($about_image) {
                echo wp_get_attachment_image($about_image, 'large', false, array('alt' => 'Expert digital marketing consultant'));
            } else {
                ?>
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&h=600&fit=crop" alt="Expert digital marketing consultant">
                <?php
            }
            ?>
            <div class="image-overlay overlay-bottom-right">8+ Years Experience</div>
            <div class="image-overlay overlay-top-left">500+ Happy Clients</div>
        </div>
    </div>
</section>

