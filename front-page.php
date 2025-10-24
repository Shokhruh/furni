<?php get_template_part( 'template-parts/header/header' )?>

		<?php get_template_part( 'template-parts/content/content', 'hero', ['title' => 'Modern Interior <br> Design Studio', 'description' => 'Description main page'] ) ?>

		<?php get_template_part( 'template-parts/content/content', 'craft' ) ?>

		<?php get_template_part( 'template-parts/content/content', 'choose' ) ?>

		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-grid-1.jpg" alt="Untree.co"></div>
							<div class="grid grid-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-grid-2.jpg" alt="Untree.co"></div>
							<div class="grid grid-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-grid-3.jpg" alt="Untree.co"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4">We Help You Make Modern Interior Design</h2>
						<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada</p>

						<ul class="list-unstyled custom-list my-4">
							<li>Donec vitae odio quis nisl dapibus malesuada</li>
							<li>Donec vitae odio quis nisl dapibus malesuada</li>
							<li>Donec vitae odio quis nisl dapibus malesuada</li>
							<li>Donec vitae odio quis nisl dapibus malesuada</li>
						</ul>
						<p><a herf="/blog" class="btn">Explore</a></p>
					</div>
				</div>
			</div>
		</div>

		<div class="popular-product">
			<div class="container">
				<div class="row">
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
									<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
										<div class="product-item-sm d-flex">
											<div class="thumbnail">
												<img src="<?php the_post_thumbnail_url(); ?>" alt="Image" class="img-fluid">
											</div>
											<div class="pt-3">
												<h3><?php the_title(); ?></h3>
												<p><?php the_excerpt(); ?></p>
												<p><a href="<?php the_permalink(); ?>">Read More</a></p>
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

		<?php get_template_part( 'template-parts/content/content', 'testimonial' )?>

		<div class="blog-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h2 class="section-title">Recent Blog</h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<a href="/blog" class="more">View All Posts</a>
					</div>
				</div>

				<div class="row">
					<?php 
						global $post;

						$query = new WP_Query( array(
							'post_type' => 'post',
							'posts_per_page' => 3,
						) );

						if ($query->have_posts()) {
							while ($query->have_posts()) {
								$query->the_post();
								?>
									<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
										<div class="post-entry">
											<a href="<?php the_permalink(); ?>" class="post-thumbnail"><img src="<?php the_post_thumbnail_url()?>" alt="Image" class="img-fluid"></a>
											<div class="post-content-entry">
												<h3><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
												<div class="meta">
													<span>by <a href="#"><?php the_author(); ?></a></span> <span>on <a href="#"><?php echo date('M j, Y'); ?></a></span>
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

<?php get_template_part('template-parts/footer/footer'); ?>
