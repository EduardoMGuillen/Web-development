<?php
/**
 * Template part for displaying the contact section
 *
 * @package CreativeIQ
 */

$phone = creativeiq_get_option('creativeiq_phone', '(804) 651-2531');
$email = creativeiq_get_option('creativeiq_email', 'hello@creativeiq.marketing');
$address = creativeiq_get_option('creativeiq_address', '123 Business District, Richmond, VA 23219');
?>

<section class="contact" id="contact">
    <div class="section-header">
        <span class="section-badge">Get in Touch</span>
        <h2 class="section-title">Ready to Grow Your Business?</h2>
        <p class="section-description">Let's discuss your digital marketing goals and create a custom strategy that drives real results for your business.</p>
    </div>
    <div class="contact-container">
        <div class="contact-form">
            <h3 style="margin-bottom: 1.5rem; font-size: 1.5rem; color: var(--text-dark);">Send Us a Message</h3>
            <?php
            // Check if Contact Form 7 is active
            if (function_exists('wpcf7_contact_form')) {
                // Try to get the default contact form
                $contact_form_id = get_theme_mod('contact_form_id', '');
                if ($contact_form_id) {
                    echo do_shortcode('[contact-form-7 id="' . esc_attr($contact_form_id) . '"]');
                } else {
                    // Fallback to default form HTML
                    include get_template_directory() . '/template-parts/contact-form-default.php';
                }
            } else {
                // Default form HTML
                include get_template_directory() . '/template-parts/contact-form-default.php';
            }
            ?>
        </div>
        <div class="contact-info">
            <div class="info-item">
                <div class="info-icon">📍</div>
                <div class="info-content">
                    <h4>Office Location</h4>
                    <p><?php echo esc_html($address); ?></p>
                </div>
            </div>
            <div class="info-item">
                <div class="info-icon">📞</div>
                <div class="info-content">
                    <h4>Phone Number</h4>
                    <p><?php echo esc_html($phone); ?><br>Monday - Friday 9AM - 5PM</p>
                </div>
            </div>
            <div class="info-item">
                <div class="info-icon">✉️</div>
                <div class="info-content">
                    <h4>Email Address</h4>
                    <p><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></p>
                </div>
            </div>
            <div class="info-item">
                <div class="info-icon">🕒</div>
                <div class="info-content">
                    <h4>Business Hours</h4>
                    <p>Mon - Fri: 9AM - 6PM<br>Sat: 10AM - 4PM</p>
                </div>
            </div>
            <div class="audit-box">
                <p><strong>Free Digital Marketing Audit</strong><br>Get a comprehensive analysis of your current digital marketing performance and discover opportunities for growth - completely free!</p>
                <a href="#contact" class="btn btn-white btn-large" style="width: 100%;">Claim Your Free Audit</a>
            </div>
        </div>
    </div>
</section>

