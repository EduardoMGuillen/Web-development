<?php
/**
 * The main template file
 *
 * @package CreativeIQ
 */

get_header();
?>

<main id="main" class="site-main">

    <?php
    // Hero Section
    get_template_part('template-parts/section', 'hero');

    // Stats Bar
    get_template_part('template-parts/section', 'stats');

    // Services Section
    get_template_part('template-parts/section', 'services');

    // About Section
    get_template_part('template-parts/section', 'about');

    // Testimonials Section
    get_template_part('template-parts/section', 'testimonials');

    // Contact Section
    get_template_part('template-parts/section', 'contact');
    ?>

</main>

<?php
get_footer();

