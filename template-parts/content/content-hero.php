<!-- Start Hero Section -->
    <div class="hero <?= !empty($args['class']) ? $args['class'] : '' ?>">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1><?= !empty($args['title']) ? $args['title'] : '' ?></h1>
                        <p class="mb-4"><?= !empty($args['description']) ? $args['description'] : '' ?></p>
                        <p><a href="/shop" class="btn btn-secondary me-2">Shop Now</a><a href="/blog" class="btn btn-white-outline">Explore</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/couch.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End Hero Section -->