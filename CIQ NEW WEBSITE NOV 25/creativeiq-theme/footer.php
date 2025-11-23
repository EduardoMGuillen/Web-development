<footer>
    <div class="footer-container">
        <div class="footer-brand">
            <h3><?php bloginfo('name'); ?></h3>
            <p><?php bloginfo('description'); ?></p>
            <div class="footer-contact">
                <?php
                $address = creativeiq_get_option('creativeiq_address', '123 Business District, Richmond, VA 23219');
                $phone = creativeiq_get_option('creativeiq_phone', '(804) 651-2531');
                $email = creativeiq_get_option('creativeiq_email', 'hello@creativeiq.marketing');
                ?>
                <?php if ($address) : ?>
                    <p>📍 <?php echo esc_html($address); ?></p>
                <?php endif; ?>
                <?php if ($phone) : ?>
                    <p>📞 <?php echo esc_html($phone); ?></p>
                <?php endif; ?>
                <?php if ($email) : ?>
                    <p>✉️ <a href="mailto:<?php echo esc_attr($email); ?>" style="color: rgba(255, 255, 255, 0.7);"><?php echo esc_html($email); ?></a></p>
                <?php endif; ?>
            </div>
            <div class="social-icons">
                <?php
                // Social media links - can be added to theme customizer later
                $social_links = array(
                    'facebook'  => get_theme_mod('social_facebook', ''),
                    'twitter'   => get_theme_mod('social_twitter', ''),
                    'instagram' => get_theme_mod('social_instagram', ''),
                    'linkedin'  => get_theme_mod('social_linkedin', ''),
                    'youtube'   => get_theme_mod('social_youtube', ''),
                );
                
                if (!empty($social_links['facebook'])) {
                    echo '<a href="' . esc_url($social_links['facebook']) . '" class="social-icon" target="_blank" rel="noopener">f</a>';
                }
                if (!empty($social_links['twitter'])) {
                    echo '<a href="' . esc_url($social_links['twitter']) . '" class="social-icon" target="_blank" rel="noopener">t</a>';
                }
                if (!empty($social_links['linkedin'])) {
                    echo '<a href="' . esc_url($social_links['linkedin']) . '" class="social-icon" target="_blank" rel="noopener">in</a>';
                }
                if (!empty($social_links['instagram'])) {
                    echo '<a href="' . esc_url($social_links['instagram']) . '" class="social-icon" target="_blank" rel="noopener">ig</a>';
                }
                if (!empty($social_links['youtube'])) {
                    echo '<a href="' . esc_url($social_links['youtube']) . '" class="social-icon" target="_blank" rel="noopener">yt</a>';
                }
                ?>
            </div>
        </div>
        <div class="footer-column">
            <h4>Services</h4>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'menu_class'     => 'footer-menu',
                'container'      => false,
                'fallback_cb'    => false,
            ));
            ?>
            <?php if (!has_nav_menu('footer')) : ?>
                <ul>
                    <li><a href="<?php echo get_post_type_archive_link('service'); ?>">All Services</a></li>
                    <li><a href="#services">Search Engine Optimization</a></li>
                    <li><a href="#services">Pay-Per-Click Advertising</a></li>
                    <li><a href="#services">Social Media Marketing</a></li>
                    <li><a href="#services">CRM & Automation</a></li>
                    <li><a href="#services">Web Development</a></li>
                    <li><a href="#services">Video Production</a></li>
                </ul>
            <?php endif; ?>
        </div>
        <div class="footer-column">
            <h4>Company</h4>
            <ul>
                <li><a href="#about">About Us</a></li>
                <li><a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h4>Resources</h4>
            <ul>
                <li><a href="#contact">Free Audit</a></li>
                <li><a href="<?php echo esc_url(home_url('/blog')); ?>">Marketing Guide</a></li>
                <li><a href="#contact">Get Started</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        <div class="footer-links">
            <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy</a>
            <a href="<?php echo esc_url(home_url('/terms-of-service')); ?>">Terms of Service</a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

