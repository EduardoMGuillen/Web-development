<?php
/**
 * Template part for displaying the testimonials section
 *
 * @package CreativeIQ
 */

$testimonials_query = creativeiq_get_testimonials(6);
?>

<section class="testimonials" id="testimonials">
    <div class="section-header">
        <span class="section-badge">Client Success Stories</span>
        <h2 class="section-title">What Our Clients Say</h2>
        <p class="section-description">Don't just take our word for it. Here's what our satisfied clients have to say about their experience working with us.</p>
    </div>
    
    <?php if ($testimonials_query->have_posts()) : ?>
        <div class="testimonials-grid">
            <?php while ($testimonials_query->have_posts()) : $testimonials_query->the_post(); ?>
                <?php
                $author_name = get_post_meta(get_the_ID(), '_testimonial_author_name', true);
                $author_title = get_post_meta(get_the_ID(), '_testimonial_author_title', true);
                $rating = get_post_meta(get_the_ID(), '_testimonial_rating', true);
                $rating = $rating ? $rating : 5;
                
                // Get initials for avatar
                $initials = '';
                if ($author_name) {
                    $name_parts = explode(' ', $author_name);
                    if (count($name_parts) >= 2) {
                        $initials = strtoupper(substr($name_parts[0], 0, 1) . substr($name_parts[1], 0, 1));
                    } else {
                        $initials = strtoupper(substr($author_name, 0, 2));
                    }
                }
                ?>
                <div class="testimonial-card">
                    <div class="stars">
                        <?php
                        for ($i = 0; $i < $rating; $i++) {
                            echo '★';
                        }
                        ?>
                    </div>
                    <p class="testimonial-text"><?php the_content(); ?></p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('thumbnail', array('style' => 'width: 48px; height: 48px; border-radius: 50%; object-fit: cover;')); ?>
                            <?php else : ?>
                                <?php echo esc_html($initials); ?>
                            <?php endif; ?>
                        </div>
                        <div class="author-info">
                            <h4><?php echo esc_html($author_name ? $author_name : 'Anonymous'); ?></h4>
                            <p><?php echo esc_html($author_title ? $author_title : 'Client'); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    <?php else : ?>
        <!-- Default Testimonials if no custom post type posts exist -->
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="stars">★★★★★</div>
                <p class="testimonial-text">"Partnering with Creative IQ marketing team has been a game changer for my business. Their creativity, strategy, and passion has taken my business to the next level. Truly the best decision I've made!"</p>
                <div class="testimonial-author">
                    <div class="author-avatar">KR</div>
                    <div class="author-info">
                        <h4>Kassandra Ramirez</h4>
                        <p>Business Owner</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="stars">★★★★★</div>
                <p class="testimonial-text">"Had an awesome experience working with Vilma! She's super friendly, easy to work with, and really knows her stuff. The whole process was smooth, and the final recording came out better than I expected."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">FJ</div>
                    <div class="author-info">
                        <h4>Fernando Jesus</h4>
                        <p>Entrepreneur</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="stars">★★★★★</div>
                <p class="testimonial-text">"The results have been incredible. Our organic traffic has increased by 300% and we're seeing consistent growth month over month. Highly recommend CreativeIQ!"</p>
                <div class="testimonial-author">
                    <div class="author-avatar">SM</div>
                    <div class="author-info">
                        <h4>Sarah Mitchell</h4>
                        <p>CEO, TechFlow Inc.</p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    
    <div class="testimonials-stats">
        <div class="testimonial-stat">
            <h3>4.9/5</h3>
            <p>Average Rating</p>
        </div>
        <div class="testimonial-stat">
            <h3>500+</h3>
            <p>Happy Clients</p>
        </div>
        <div class="testimonial-stat">
            <h3>98%</h3>
            <p>Retention Rate</p>
        </div>
    </div>
</section>

