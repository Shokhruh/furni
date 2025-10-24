<!doctype html>
<html lang="en">
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="author" content="Untree.co">
  	<meta name="description" content="" />
  	<meta name="keywords" content="bootstrap, bootstrap4" />
	<?php wp_head();?>
</head>

	<body>

		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html">
					<?php 
						if (has_custom_logo()) {
							echo get_custom_logo();
						}
					?>
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'primary',
						'echo'      => true,
						'container'      => false,
						'menu_class'     => 'custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0',
						'walker'         => new Furni_Walker_Nav_Menu(),
						'fallback_cb'    => false,
					));
					?>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="/cart"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user.svg"></a></li>
						<li><a class="nav-link" href="/cart"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cart.svg"></a></li>
					</ul>
				</div>


			</div>
				
		</nav>