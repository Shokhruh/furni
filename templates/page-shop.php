<?php
/*Template Name: Shop
Template Post Type: page
*/
?>
<?php get_template_part('template-parts/header/header'); ?>

<!-- Start Hero Section -->
    <?php get_template_part('template-parts/content/content', 'hero', ['class' => 'pb200', 'title' => 'Shop', 'description' => 'Browse our popular products'])?>
<!-- End Hero Section -->

		
<!-- Start Products Section -->
<div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <div class="row">
            <?php 
                global $post;

                $query = new WP_Query( array(
                    'post_type' => 'product',
                    'posts_per_page' => 8,
                ) );

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        ?>
                            <!-- Start Column -->
                            <div class="col-12 col-md-4 col-lg-3 mb-5">
                                <a class="product-item" href="<?php the_permalink(); ?>">
                                    <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid product-thumbnail">
                                    <h3 class="product-title"><?php the_title(); ?></h3>
                                    <strong class="product-price"><?php echo get_post_meta($post->ID, 'price', true); ?></strong>

                                    <span class="icon-cross">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/cross.svg" class="img-fluid">
                                    </span>
                                </a>
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
<!-- End Products Section -->

<?php get_template_part('template-parts/footer/footer'); ?>