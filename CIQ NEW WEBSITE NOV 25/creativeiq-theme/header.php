<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <div class="header-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            if ($custom_logo_id) {
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                echo '<img src="' . esc_url($logo[0]) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
            } else {
                ?>
                <div class="logo-icon">CIQ</div>
                <div class="logo-text"><?php bloginfo('name'); ?></div>
                <?php
            }
            ?>
        </a>
        <nav class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="screen-reader-text"><?php _e('Primary Menu', 'creativeiq'); ?></span>
                ☰
            </button>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'container'      => false,
                'fallback_cb'    => 'creativeiq_fallback_menu',
            ));
            ?>
        </nav>
        <div class="header-buttons">
            <a href="#contact" class="btn btn-outline">Get Quote</a>
            <a href="#contact" class="btn btn-primary">Start Project</a>
        </div>
    </div>
</header>

<?php
/**
 * Fallback menu if no menu is set
 */
function creativeiq_fallback_menu() {
    ?>
    <ul id="primary-menu">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#testimonials">Testimonials</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
    <?php
}

