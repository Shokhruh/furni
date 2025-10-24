<div class="product-section">
			<div class="container">
				<div class="row">

					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Crafted with excellent material.</h2>
						<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. </p>
						<p><a href="/blog" class="btn">Explore</a></p>
					</div> 

					<?php 
						global $post;

						$query = new WP_Query( array(
							'post_type' => 'product',
							'posts_per_page' => 3,
						) );

						if ($query->have_posts()) {
							while ($query->have_posts()) {
								$query->the_post();
								?>
									<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
										<a class="product-item" href="<?php the_permalink(); ?>">
											<img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid product-thumbnail">
											<h3 class="product-title"><?php the_title(); ?></h3>
											<strong class="product-price"><?php echo get_post_meta( $post->ID, 'price', true ); ?></strong>

											<span class="icon-cross">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cross.svg" class="img-fluid">
											</span>
										</a>
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