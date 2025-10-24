<div class="testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="section-title">Testimonials</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="testimonial-slider-wrap text-center">

                    <div id="testimonial-nav">
                        <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                        <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                    </div>

                    <div class="testimonial-slider">
                        
                        <?php 
                            global $post;

                            $query = new WP_Query( array(
                                'post_type' => 'testimonial',
                                'posts_per_page' => 3,
                            ) );

                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    ?>
                                        <div class="item">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-8 mx-auto">

                                                    <div class="testimonial-block text-center">
                                                        <blockquote class="mb-5 text-center">
                                                            <p class="testimoniall"><?php the_content(); ?></p>
                                                        </blockquote>

                                                        <div class="author-info">
                                                            <div class="author-pic">
                                                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                                                            </div>
                                                            <h3 class="font-weight-bold"><?php the_title(); ?></h3>
                                                            <span class="position d-block mb-3"><?php the_excerpt();?></span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div> 
                                        <!-- END item -->
                                    <?php
                                }
                            } else {
                                echo '<p class="text-danger">No testimonials found.</p>';
                            }
                        ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>