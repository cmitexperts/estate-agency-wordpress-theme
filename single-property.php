<?php get_header(); ?>
<!-- ======= Intro Single ======= -->
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">
                        <?php the_title(); ?>
                    </h1>
                    <span class="color-text-a">
                        <?php _e("Chicago, IL 606543", "EstateAgency") ?>
                    </span>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <?php _e("Home", "EstateAgency") ?>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="http://localhost/wordpress/demo/">
                                <?php _e("Properties", "EstateAgency") ?>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?php _e("304 Blaster Up", "EstateAgency") ?>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section><!-- End Intro Single-->


<!-- single slider-start -->
<section class="property-single nav-arrow-b">
    <div class="container">
        <div class="row mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div id="property-single-carousel" class="swiper">
                        <!-- <div class="swiper-wrapper text-center"> -->
                            <div class="carousel-item-b swiper-slide">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid"
                                    style="width:720px; height: 600px;">
                            </div>
                        <!-- </div> -->
                    </div>
                    <div class="property-single-carousel-pagination carousel-pagination"></div>
                </div>
            </div>
        </div>
        <!-- single-slider-end -->


        <!-- Property-Description -->
        <div class="row">
            <div class="col-sm-12">
                <div class="row justify-content-between">
                    <div class="col-md-5 col-lg-4">
                        <!-- Rent -->
                        <div class="property-price d-flex justify-content-center foo">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico">
                                    <span class="bi bi-cash">
                                        <?php _e("$", "EstateAgency") ?>
                                    </span>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h5 class="title-c">
                                        <?php the_field('rent'); ?> 
                                    </h5>
                                </div>
                            </div>
                        </div> <!-- Rent-end -->

                        <!-- garages -->
                        <div class="property-summary">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d section-t4">
                                        <h3 class="title-d">
                                            <?php _e("Quick Summary", "EstateAgency") ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="summary-list">
                                <ul class="list">
                                    <li class="d-flex justify-content-between">
                                        <!-- <strong>
                                        <?php _e("Property ID:", "EstateAgency") ?>
                                    </strong>
                                    <span>
                                        <?php _e("1134", "EstateAgency") ?>
                                    </span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <strong>Location:</strong>
                                    <span>
                                        <?php _e("Chicago, IL 606543", "EstateAgency") ?>
                                    </span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <strong>
                                        <?php _e("Property Type:", "EstateAgency") ?>
                                    </strong>
                                    <span>
                                        <?php _e("House", "EstateAgency") ?>
                                    </span> -->
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>
                                            <?php _e("Status:", "EstateAgency") ?>
                                        </strong>
                                        <span>
                                            <?php the_field('status'); ?>
                                        </span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>
                                            <?php _e("Area:", "EstateAgency") ?>
                                        </strong>
                                        <span>
                                            <?php the_field('area'); ?>
                                            <sup>2</sup>
                                        </span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>
                                            <?php _e("Beds:", "EstateAgency") ?>
                                        </strong>
                                        <span>
                                            <?php the_field('beds'); ?>
                                        </span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>
                                            <?php _e("Baths:", "EstateAgency") ?>
                                        </strong>
                                        <span>
                                            <?php the_field('baths'); ?>
                                        </span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>
                                            <?php _e("Garage:", "EstateAgency") ?>
                                        </strong>
                                        <span>
                                            <?php the_field('garage'); ?>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- garages-end -->

                    <!-- Properties -->
                    <div class="col-md-7 col-lg-7 section-md-t3">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="title-box-d">
                                    <h3 class="title-d">
                                        <?php the_field('sub_title'); ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="property-description">
                            <p class="description color-text-a">
                                <?php the_content(); ?>
                            </p>
                        </div>
                        <div class="row section-t3">
                            <div class="col-sm-12">
                                <div class="title-box-d">
                                    <h3 class="title-d">
                                        <?php _e("Amenities", "EstateAgency") ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- amnities -->

                        <div class="amenities-list color-text-a">
                            <ul class="list-a no-margin">
                                <li>
                                    <?php echo the_field('amenities'); ?>
                                </li>
                            </ul>
                        </div> <!-- amities-end -->
                    </div> <!-- Properties-end -->
                </div>
            </div>
            <!-- Video/Floor-plan/Ubication -->
            <div class="col-md-10 offset-md-1">
                <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-video-tab" data-bs-toggle="pill" href="#pills-video"
                            role="tab" aria-controls="pills-video" aria-selected="true">Video</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" id="pills-plans-tab" data-bs-toggle="pill" href="#pills-plans" role="tab"
                            aria-controls="pills-plans" aria-selected="false">Floor Plans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-map-tab" data-bs-toggle="pill" href="#pills-map" role="tab"
                            aria-controls="pills-map" aria-selected="false">Ubication</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-video" role="tabpanel"
                        aria-labelledby="pills-video-tab">
                        <iframe src="<?php the_field('property_video'); ?>" width="100%" height="460" frameborder="0"
                            webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                    <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
                        <img src="<?php the_field('floor'); ?>" alt="" class="img-fluid" style="width:100%">
                    </div>
                    <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                        <iframe src="<?php the_field('google_map'); ?>" width="100%" height="460" frameborder="0"
                            style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div> <!-- Video/Floor-plan/Ubication -->

            <!-- Contact-Agent -->
            <div class="col-md-12">
                <div class="row section-t3">
                    <div class="col-sm-12">
                        <div class="title-box-d">
                            <h3 class="title-d">
                                <?php _e("Contact Agent", "EstateAgency") ?>
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- contact-agent -->
                <div class="row">
            <div class="col-md-6 col-lg-4">
              <img src="<?php the_field('image_agent',840); ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="property-agent">
                <h4 class="title-agent">
                  <?php the_field('sub_title2',840); ?>
                </h4>
                <p class="color-text-a">
                  <?php the_field('sub_content',840); ?>
                </p>
                <ul class="list-unstyled mt-5">
                  <li class="d-flex justify-content-between">
                    <strong><?php _e("Phone:", "EstateAgency") ?></strong>
                    <span class="color-text-a"><?php the_field('phone',840); ?></span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong><?php _e("Mobile:", "EstateAgency") ?></strong>
                    <span class="color-text-a"><?php the_field('number',840); ?></span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong><?php _e("Email:", "EstateAgency") ?></strong>
                    <span class="color-text-a"><?php the_field('email',840); ?></span>
                  </li>
                </ul>
                <div class="socials-a mt-5">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="<?php the_field('facebook'); ?>">
                        <i class="bi bi-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="<?php the_field('twitter'); ?>">
                        <i class="bi bi-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="<?php the_field('instagram'); ?>">
                        <i class="bi bi-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="<?php the_field('linkedin'); ?>">
                        <i class="bi bi-linkedin" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <?php echo do_shortcode('[contact-form-7 id="aff4576" title="Contact"]') ?>
            </div>
          </div>
            </div><!-- Contact-Agent-end -->
        </div>
    </div>
</section>
<!-- Property-Description -->
<?php get_footer(); ?>