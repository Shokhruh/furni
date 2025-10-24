<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				<div class="sofa-img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sofa.png" alt="Image" class="img-fluid">
				</div>

				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Enter your name">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Enter your email">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>

						</div>
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap">
							<a href="#" class="footer-logo">
								<?= !empty(has_custom_logo()) ? get_custom_logo() : ''?>
							</a>
						</div>
						<?php if (is_active_sidebar('footer-widget-area')) : ?>
							<?php dynamic_sidebar('footer-widget-area'); ?>
						<?php endif; ?>

						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<?php
									wp_nav_menu(array(
										'theme_location' => 'footer_first',
										'container'      => false,
										'menu_class'     => 'list-unstyled',
										'walker'         => new Furni_Footer_Walker(),
										'fallback_cb'    => false,
									));
								?>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<?php
									wp_nav_menu(array(
										'theme_location' => 'footer_second',
										'container'      => false,
										'menu_class'     => 'list-unstyled',
										'walker'         => new Furni_Footer_Walker(),
										'fallback_cb'    => false,
									));
								?>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<?php
									wp_nav_menu(array(
										'theme_location' => 'footer_third',
										'container'      => false,
										'menu_class'     => 'list-unstyled',
										'walker'         => new Furni_Footer_Walker(),
										'fallback_cb'    => false,
									));
								?>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<?php
									wp_nav_menu(array(
										'theme_location' => 'footer_fourth',
										'container'      => false,
										'menu_class'     => 'list-unstyled',
										'walker'         => new Furni_Footer_Walker(),
										'fallback_cb'    => false,
									));
								?>
							</div>
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<?php if (is_active_sidebar('footer-bottom-widget-area')) : ?>
						<?php dynamic_sidebar('footer-bottom-widget-area'); ?>
					<?php endif; ?>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	

        <?php wp_footer(); ?>
	</body>

</html>