<?php
/*
Template Name: About Us
Template Post Type: page
*/
?>

<?php get_template_part('template-parts/header/header'); ?>

<!-- Start Hero Section -->
<?php get_template_part('template-parts/content/content', 'hero', ['class' => 'pb200', 'title' => 'About Us', 'description' => 'Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.']); ?>
<!-- End Hero Section -->

<!-- Start Choose Us Section -->
<?php get_template_part('template-parts/content/content', 'choose')?>
<!-- End Choose Us Section -->

<!-- Start Team Section -->
<div class="untree_co-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-lg-5 mx-auto text-center">
                <h2 class="section-title">Our Team</h2>
            </div>
        </div>

        <div class="row">
            <?php 
                global $post;

                $query = new WP_Query( array(
                    'post_type' => 'team',
                    'posts_per_page' => 4,
                ) );

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        ?>
                            <!-- Start Column -->
                            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                                <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mb-5">
                                <h3 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <span class="d-block position mb-4"><?php get_post_meta($post->ID, 'job', true); ?></span>
                                <p><?php the_excerpt(); ?></p>
                                <p class="mb-0"><a href="<?php the_permalink(); ?>" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
                            </div> 
                            <!-- End Column -->
                        <?php
                    }
                } else {
                    echo '<p class="text-danger">No products found.</p>';
                }
            ?>            

        </div>
    </div>
</div>
<!-- End Team Section -->



<!-- Start Testimonial Slider Section -->
<?php get_template_part('template-parts/content/content', 'testimonial')?>
<!-- End Testimonial Slider Section -->

<?php get_template_part('template-parts/footer/footer')?>