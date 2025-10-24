<?php
/*Template Name: Services
Template Post Type: page
*/
?>
<?php get_template_part('template-parts/header/header'); ?>

<!-- Start Hero Section -->
    <?php get_template_part('template-parts/content/content', 'hero', ['class' => 'pb200', 'title' => 'Services', 'description' => 'Browse our popular services'])?>
<!-- End Hero Section -->

		
<!-- Start Why Choose Us Section -->
    <?php get_template_part('template-parts/content/content', 'choose') ?>
<!-- End Why Choose Us Section -->

<!-- Start Product Section -->
    <?php get_template_part('template-parts/content/content', 'craft') ?>
<!-- End Product Section -->

		

<!-- Start Testimonial Slider -->
    <?php get_template_part('template-parts/content/content', 'testimonial') ?>
<!-- End Testimonial Slider -->

<?php get_template_part('template-parts/footer/footer'); ?>