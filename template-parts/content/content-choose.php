<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Why Choose Us</h2>
						<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>

						<div class="row my-5">
							<?php 
								global $post;

								$query = new WP_Query( array(
									'post_type' => 'service',
									'posts_per_page' => 4,
								) );

								if ($query->have_posts()) {
									while ($query->have_posts()) {
										$query->the_post();
										?>
											<div class="col-6 col-md-6">
												<div class="feature">
													<div class="icon">
														<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="imf-fluid">
													</div>
													<h3><?php the_title(); ?></h3>
													<p><?php the_excerpt(); ?></p>
												</div>
											</div>
										<?php
									}
								} else {
									echo '<p class="text-danger">No services found.</p>';
								}
							?>
							
						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>