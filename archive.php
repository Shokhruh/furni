<?php get_template_part( 'template-parts/header/header'); ?>
<?php 
    if (is_author()) {
        $description = "Author: <span class='text-success fw-bold'>" . get_queried_object()->display_name . "</span>";
    } if(is_date()) {
        $description = "Date: <span class='text-danger fw-bold'>" . get_the_date() . "</span>";
    }
?>

    <!-- Start Hero Section -->
    <?php get_template_part( 'template-parts/content/content', 'hero', [ 'class' => 'pb200', 'title' => 'Blog', 'description' => $description]); ?>
    <!-- End Hero Section -->

    

    <!-- Start Blog Section -->
    <div class="blog-section">
        <div class="container">
            
            <div class="row">
                <?php 
                    global $post;

                    $query = new WP_Query( array(
                        'post_type' => 'post',
                        'posts_per_page' => 12,
                    ) );

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                                <div class="col-12 col-sm-6 col-md-4 mb-5">
                                    <div class="post-entry">
                                        <a href="<?php the_permalink(); ?>" class="post-thumbnail"><img src="<?php the_post_thumbnail_url(); ?>" alt="Image" class="img-fluid"></a>
                                        <div class="post-content-entry">
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <?php 
                                                $year  = get_the_date('Y'); // 2025
                                                $month = get_the_date('m'); // 10
                                                $day   = get_the_date('d'); // 24
                                            ?>
                                            <div class="meta">
                                                <span>by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span> <span>on <a href="<?php echo get_day_link($year, $month, $day); ?>"><?php echo get_the_date('M j, Y'); ?></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    } else {
                        echo '<p class="text-danger">No posts found.</p>';
                    }
                ?>

            </div>
        </div>
    </div>
    <!-- End Blog Section -->	

    

    <!-- Start Testimonial Slider -->
    <?php get_template_part( 'template-parts/content/content', 'testimonial' ); ?>
    <!-- End Testimonial Slider -->

<?php get_template_part('template-parts/footer/footer'); ?>