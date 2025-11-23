<?php
/**
 * Default contact form template
 *
 * @package CreativeIQ
 */
?>

<form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="contact-form-form">
    <input type="hidden" name="action" value="creativeiq_contact_form">
    <?php wp_nonce_field('creativeiq_contact_form', 'creativeiq_contact_nonce'); ?>
    
    <div class="form-row">
        <div class="form-group">
            <label for="firstName">First Name *</label>
            <input type="text" id="firstName" name="firstName" required>
        </div>
        <div class="form-group">
            <label for="lastName">Last Name *</label>
            <input type="text" id="lastName" name="lastName" required>
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email Address *</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone Number *</label>
        <input type="tel" id="phone" name="phone" required>
    </div>
    <div class="form-group">
        <label for="company">Company Name</label>
        <input type="text" id="company" name="company">
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="service">Service Interested In</label>
            <select id="service" name="service">
                <option value="">Select a service</option>
                <option value="seo">Search Engine Optimization</option>
                <option value="ppc">Pay-Per-Click Advertising</option>
                <option value="smm">Social Media Marketing</option>
                <option value="crm">CRM & Automation</option>
                <option value="web">Web Development</option>
                <option value="gmb">Google My Business</option>
                <option value="video">Video Production</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="budget">Monthly Budget Range</label>
            <select id="budget" name="budget">
                <option value="">Select budget</option>
                <option value="0-500">$0 - $500</option>
                <option value="500-1000">$500 - $1,000</option>
                <option value="1000-2500">$1,000 - $2,500</option>
                <option value="2500-5000">$2,500 - $5,000</option>
                <option value="5000+">$5,000+</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Tell us about your project..."></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-large" style="width: 100%;">Send Message</button>
    <p class="form-note">We'll get back to you within 24 hours with a custom proposal.</p>
</form>

