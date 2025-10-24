<?php get_template_part( 'template-parts/header/header'); ?>
<?php 
    if(is_date()) {
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
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); 
            ?>
                <div class="col-12 col-sm-6 col-md-4 mb-5">
                    <div class="post-entry">
                        <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.jpg" alt="No Image" class="img-fluid">
                            <?php endif; ?>
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php 
                                $year  = get_the_date('Y');
                                $month = get_the_date('m');
                                $day   = get_the_date('d');
                            ?>
                            <div class="meta">
                                <span>by 
                                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                        <?php the_author(); ?>
                                    </a>
                                </span> 
                                <span>on 
                                    <a href="<?php echo get_day_link($year, $month, $day); ?>">
                                        <?php echo get_the_date('M j, Y'); ?>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
                endwhile;
            else :
                echo '<p class="text-danger">No posts found for this date.</p>';
            endif;
            ?>
        </div>
    </div>
</div>
<!-- End Blog Section -->



    

    <!-- Start Testimonial Slider -->
    <?php get_template_part( 'template-parts/content/content', 'testimonial' ); ?>
    <!-- End Testimonial Slider -->

<?php get_template_part('template-parts/footer/footer'); ?>