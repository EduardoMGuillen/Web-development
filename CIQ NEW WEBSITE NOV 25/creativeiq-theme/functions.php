<?php
/**
 * CreativeIQ Theme Functions
 *
 * @package CreativeIQ
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function creativeiq_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'creativeiq'),
        'footer' => __('Footer Menu', 'creativeiq'),
    ));

    // Set content width
    $GLOBALS['content_width'] = 1280;
}
add_action('after_setup_theme', 'creativeiq_setup');

/**
 * Enqueue Styles and Scripts
 */
function creativeiq_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style(
        'creativeiq-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Enqueue main stylesheet
    wp_enqueue_style(
        'creativeiq-style',
        get_stylesheet_uri(),
        array('creativeiq-fonts'),
        wp_get_theme()->get('Version')
    );

    // Enqueue theme JavaScript
    wp_enqueue_script(
        'creativeiq-script',
        get_template_directory_uri() . '/js/theme.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // Enqueue comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'creativeiq_scripts');

/**
 * Register Widget Areas
 */
function creativeiq_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Column 1', 'creativeiq'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in the first footer column.', 'creativeiq'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 2', 'creativeiq'),
        'id'            => 'footer-2',
        'description'   => __('Add widgets here to appear in the second footer column.', 'creativeiq'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 3', 'creativeiq'),
        'id'            => 'footer-3',
        'description'   => __('Add widgets here to appear in the third footer column.', 'creativeiq'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'creativeiq_widgets_init');

/**
 * Custom Excerpt Length
 */
function creativeiq_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'creativeiq_excerpt_length');

/**
 * Custom Excerpt More
 */
function creativeiq_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'creativeiq_excerpt_more');

/**
 * Add Custom Theme Options
 */
function creativeiq_customizer($wp_customize) {
    // Contact Information Section
    $wp_customize->add_section('creativeiq_contact', array(
        'title'    => __('Contact Information', 'creativeiq'),
        'priority' => 30,
    ));

    // Phone Number
    $wp_customize->add_setting('creativeiq_phone', array(
        'default'           => '(804) 651-2531',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('creativeiq_phone', array(
        'label'    => __('Phone Number', 'creativeiq'),
        'section'  => 'creativeiq_contact',
        'type'     => 'text',
    ));

    // Email
    $wp_customize->add_setting('creativeiq_email', array(
        'default'           => 'hello@creativeiq.marketing',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('creativeiq_email', array(
        'label'    => __('Email Address', 'creativeiq'),
        'section'  => 'creativeiq_contact',
        'type'     => 'email',
    ));

    // Address
    $wp_customize->add_setting('creativeiq_address', array(
        'default'           => '123 Business District, Richmond, VA 23219',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('creativeiq_address', array(
        'label'    => __('Address', 'creativeiq'),
        'section'  => 'creativeiq_contact',
        'type'     => 'textarea',
    ));
}
add_action('customize_register', 'creativeiq_customizer');

/**
 * Get Theme Option Helper Function
 */
function creativeiq_get_option($option_name, $default = '') {
    return get_theme_mod($option_name, $default);
}

/**
 * Register Custom Post Types (if needed)
 */
function creativeiq_register_post_types() {
    // Testimonials Post Type
    register_post_type('testimonial', array(
        'labels' => array(
            'name'               => __('Testimonials', 'creativeiq'),
            'singular_name'      => __('Testimonial', 'creativeiq'),
            'add_new'            => __('Add New', 'creativeiq'),
            'add_new_item'       => __('Add New Testimonial', 'creativeiq'),
            'edit_item'          => __('Edit Testimonial', 'creativeiq'),
            'new_item'           => __('New Testimonial', 'creativeiq'),
            'view_item'          => __('View Testimonial', 'creativeiq'),
            'search_items'       => __('Search Testimonials', 'creativeiq'),
            'not_found'          => __('No testimonials found', 'creativeiq'),
            'not_found_in_trash' => __('No testimonials found in trash', 'creativeiq'),
        ),
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'menu_icon'    => 'dashicons-format-quote',
        'supports'     => array('title', 'editor', 'thumbnail'),
        'has_archive'  => false,
    ));

    // Services Post Type
    register_post_type('service', array(
        'labels' => array(
            'name'               => __('Services', 'creativeiq'),
            'singular_name'      => __('Service', 'creativeiq'),
            'add_new'            => __('Add New', 'creativeiq'),
            'add_new_item'       => __('Add New Service', 'creativeiq'),
            'edit_item'          => __('Edit Service', 'creativeiq'),
            'new_item'           => __('New Service', 'creativeiq'),
            'view_item'          => __('View Service', 'creativeiq'),
            'search_items'       => __('Search Services', 'creativeiq'),
            'not_found'          => __('No services found', 'creativeiq'),
            'not_found_in_trash' => __('No services found in trash', 'creativeiq'),
        ),
        'public'       => true,
        'has_archive'  => true,
        'show_in_menu' => true,
        'menu_icon'    => 'dashicons-admin-tools',
        'supports'     => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'      => array('slug' => 'services'),
    ));
}
add_action('init', 'creativeiq_register_post_types');

/**
 * Add Meta Boxes for Testimonials
 */
function creativeiq_add_testimonial_meta_boxes() {
    add_meta_box(
        'testimonial_details',
        __('Testimonial Details', 'creativeiq'),
        'creativeiq_testimonial_meta_box_callback',
        'testimonial',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'creativeiq_add_testimonial_meta_boxes');

/**
 * Testimonial Meta Box Callback
 */
function creativeiq_testimonial_meta_box_callback($post) {
    wp_nonce_field('creativeiq_testimonial_meta_box', 'creativeiq_testimonial_meta_box_nonce');
    
    $author_name = get_post_meta($post->ID, '_testimonial_author_name', true);
    $author_title = get_post_meta($post->ID, '_testimonial_author_title', true);
    $rating = get_post_meta($post->ID, '_testimonial_rating', true);
    
    ?>
    <table class="form-table">
        <tr>
            <th><label for="testimonial_author_name"><?php _e('Author Name', 'creativeiq'); ?></label></th>
            <td><input type="text" id="testimonial_author_name" name="testimonial_author_name" value="<?php echo esc_attr($author_name); ?>" style="width: 100%;" /></td>
        </tr>
        <tr>
            <th><label for="testimonial_author_title"><?php _e('Author Title/Company', 'creativeiq'); ?></label></th>
            <td><input type="text" id="testimonial_author_title" name="testimonial_author_title" value="<?php echo esc_attr($author_title); ?>" style="width: 100%;" /></td>
        </tr>
        <tr>
            <th><label for="testimonial_rating"><?php _e('Rating (1-5)', 'creativeiq'); ?></label></th>
            <td><input type="number" id="testimonial_rating" name="testimonial_rating" value="<?php echo esc_attr($rating); ?>" min="1" max="5" /></td>
        </tr>
    </table>
    <?php
}

/**
 * Save Testimonial Meta Box Data
 */
function creativeiq_save_testimonial_meta_box($post_id) {
    if (!isset($_POST['creativeiq_testimonial_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['creativeiq_testimonial_meta_box_nonce'], 'creativeiq_testimonial_meta_box')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['testimonial_author_name'])) {
        update_post_meta($post_id, '_testimonial_author_name', sanitize_text_field($_POST['testimonial_author_name']));
    }

    if (isset($_POST['testimonial_author_title'])) {
        update_post_meta($post_id, '_testimonial_author_title', sanitize_text_field($_POST['testimonial_author_title']));
    }

    if (isset($_POST['testimonial_rating'])) {
        update_post_meta($post_id, '_testimonial_rating', absint($_POST['testimonial_rating']));
    }
}
add_action('save_post_testimonial', 'creativeiq_save_testimonial_meta_box');

/**
 * Helper function to get testimonials
 */
function creativeiq_get_testimonials($limit = -1) {
    $args = array(
        'post_type'      => 'testimonial',
        'posts_per_page' => $limit,
        'post_status'    => 'publish',
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    );
    return new WP_Query($args);
}

/**
 * Helper function to get services
 */
function creativeiq_get_services($limit = -1) {
    $args = array(
        'post_type'      => 'service',
        'posts_per_page' => $limit,
        'post_status'    => 'publish',
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    );
    return new WP_Query($args);
}

