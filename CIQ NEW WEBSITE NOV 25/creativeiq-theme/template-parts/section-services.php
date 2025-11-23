<?php
/**
 * Template part for displaying the services section
 *
 * @package CreativeIQ
 */

$services_query = creativeiq_get_services(6);
?>

<section class="services" id="services">
    <div class="section-header">
        <span class="section-badge">Our Services</span>
        <h2 class="section-title">Complete Digital Marketing Solutions</h2>
        <p class="section-description">From strategy to execution, we provide comprehensive digital marketing services that drive real business growth and measurable results.</p>
    </div>
    
    <?php if ($services_query->have_posts()) : ?>
        <div class="services-grid">
            <?php while ($services_query->have_posts()) : $services_query->the_post(); ?>
                <div class="service-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="service-icon">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </div>
                    <?php else : ?>
                        <div class="service-icon">🔍</div>
                    <?php endif; ?>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                    <?php
                    $features = get_post_meta(get_the_ID(), '_service_features', true);
                    if ($features) :
                        $features_list = explode("\n", $features);
                        if (!empty($features_list)) :
                    ?>
                        <ul class="service-features">
                            <?php foreach ($features_list as $feature) : ?>
                                <?php $feature = trim($feature); ?>
                                <?php if (!empty($feature)) : ?>
                                    <li><?php echo esc_html($feature); ?></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php
                        endif;
                    endif;
                    ?>
                    <a href="<?php the_permalink(); ?>" class="service-link">Learn More →</a>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    <?php else : ?>
        <!-- Default Services if no custom post type posts exist -->
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">🔍</div>
                <h3>Search Engine Optimization</h3>
                <p>Boost your organic visibility and drive qualified traffic with our comprehensive SEO strategies.</p>
                <ul class="service-features">
                    <li>Keyword Research</li>
                    <li>On-Page Optimization</li>
                    <li>Link Building</li>
                    <li>Technical SEO</li>
                </ul>
                <a href="#" class="service-link">Learn More →</a>
            </div>
            <div class="service-card">
                <div class="service-icon">🖱️</div>
                <h3>Pay-Per-Click Advertising</h3>
                <p>Maximize your ROI with strategic PPC campaigns that drive targeted traffic and conversions.</p>
                <ul class="service-features">
                    <li>Campaign Setup</li>
                    <li>Ad Creation</li>
                    <li>Bid Management</li>
                    <li>Performance Tracking</li>
                </ul>
                <a href="#" class="service-link">Learn More →</a>
            </div>
            <div class="service-card">
                <div class="service-icon">💬</div>
                <h3>Social Media Marketing</h3>
                <p>Build authentic connections with your audience through strategic content creation and community management.</p>
                <ul class="service-features">
                    <li>Content Strategy</li>
                    <li>Community Management</li>
                    <li>Paid Social</li>
                    <li>Influencer Marketing</li>
                </ul>
                <a href="#" class="service-link">Learn More →</a>
            </div>
            <div class="service-card">
                <div class="service-icon">✍️</div>
                <h3>Content Marketing</h3>
                <p>Tell your brand's story and engage your audience with high-quality, strategic content.</p>
                <ul class="service-features">
                    <li>Content Strategy</li>
                    <li>Blog Writing</li>
                    <li>Video Production</li>
                    <li>Infographic Design</li>
                </ul>
                <a href="#" class="service-link">Learn More →</a>
            </div>
            <div class="service-card">
                <div class="service-icon">📊</div>
                <h3>Analytics & Reporting</h3>
                <p>Make data-driven decisions with comprehensive analytics and transparent reporting.</p>
                <ul class="service-features">
                    <li>Google Analytics</li>
                    <li>Custom Dashboards</li>
                    <li>ROI Tracking</li>
                    <li>Monthly Reports</li>
                </ul>
                <a href="#" class="service-link">Learn More →</a>
            </div>
            <div class="service-card">
                <div class="service-icon">✉️</div>
                <h3>Email Marketing</h3>
                <p>Nurture leads and drive conversions with targeted email campaigns that deliver results.</p>
                <ul class="service-features">
                    <li>Email Design</li>
                    <li>List Segmentation</li>
                    <li>Automation</li>
                    <li>A/B Testing</li>
                </ul>
                <a href="#" class="service-link">Learn More →</a>
            </div>
        </div>
    <?php endif; ?>
    
    <div class="custom-solution">
        <p>Need a custom solution? We create tailored strategies for your unique business needs.</p>
        <a href="#contact" class="btn btn-primary">Get Custom Strategy →</a>
    </div>
</section>

