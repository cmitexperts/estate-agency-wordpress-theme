<?php get_header(); ?>
<main id="main">

  <!-- carousel -->
<!-- <div class="container-fluid"> -->
  <div class="intro intro-carousel swiper position-relative">
    <div class="swiper-wrapper">
      <?php
      if (have_rows('slides',824)):
        while (have_rows('slides',824)):
          the_row();
      ?>
      <div class="swiper-slide carousel-item-a intro-item bg-image"
        style="background-image: url(<?php the_sub_field('image',824); ?>)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      <?php the_sub_field('sub-title',824); ?>
                    </p>
                    <h1 class="intro-title mb-4 ">
                      <?php the_sub_field('title',824); ?>
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">
                          <?php the_sub_field('rent',824); ?>
                        </span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php  
      endwhile;
      endif; ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
<!-- </div> -->

  <!-- end carousel -->
  <!-- ======= Services Section ======= -->
  <section class="section-services section-t8 mb-5">
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">
                <?php _e("Our Services", "EstateAgency") ?>
              </h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        $args = array(
          'post_type' => 'service',
          'post_status' => 'publish',
          'order' => 'ASC',
        );
        $query = new WP_Query($args);
        while ($query->have_posts()) {
          $query->the_post();
          $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
          ?>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico mt-5">
                  <h2>
                    <?php the_title(); ?>
                  </h2>
                </div>
                <!-- <div class="card-title-c align-self-center">
                  <h2 class="title-c">Lifestyle</h2>
                </div> -->
                <!-- <div class="card-img-d">
                  <img src="<?php echo $image[0]; ?>" alt="" class="img-d img-fluid" style="height: 400px; width: 400px;">
                </div> -->
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  <?php the_content(); ?>
                </p>
              </div>
              <div class="card-footer-c">
                <a href="<?php the_permalink(); ?>" class="link-c link-icon">
                  <?php _e("Read More", "EstateAgency") ?>
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section><!-- End Services Section -->

  <!-- ======= Latest Properties Section ======= -->
  <section class="section-property section-t8 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">
                <?php _e("Latest Properties", "EstateAgency") ?>
              </h2>
            </div>
            <div class="title-link">
              <a href="http://localhost/wordpress/demo/">
                <?php _e("All Properties", "EstateAgency") ?>
                <span class="bi bi-chevron-right"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="property-carousel" class="swiper">
        <div class="swiper-wrapper">
          <?php
          $args = array(
            'post_type' => 'property',
            'post_status' => 'publish',
            // 'posts_per_page' => 6,
            'order' => 'asc',
          );
          $query = new WP_Query($args);
          while ($query->have_posts()) {
            $query->the_post();
            $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
            ?>
            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="<?php echo $image[0]; ?>" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="<?php the_permalink(); ?>">
                          <?php the_title(); ?>
                        </a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">
                          <?php the_field('rent'); ?>
                        </span>
                      </div>
                      <a href="<?php the_permalink(); ?>" class="link-a">
                        <?php _e("Click here to view", "EstateAgency") ?>
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">
                            <?php _e("Area", "EstateAgency") ?>
                          </h4>
                          <?php the_field('area'); ?>
                          <sup>2</sup>
                        </li>
                        <li>
                          <h4 class="card-info-title">
                            <?php _e("Beds ", "EstateAgency") ?>
                          </h4>
                          <?php the_field('beds'); ?>
                        </li>
                        <li>
                          <h4 class="card-info-title">
                            <?php _e("Baths", "EstateAgency") ?>
                          </h4>
                          <?php the_field('baths'); ?>
                        </li>
                        <li>
                          <h4 class="card-info-title">
                            <?php _e("Garages", "EstateAgency") ?>
                          </h4>
                          <?php the_field('garages'); ?>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div><!-- End carousel item -->
      <div class="propery-carousel-pagination carousel-pagination"></div>
    </div>
  </section><!-- End Latest Properties Section -->

  <!-- ======= Agents Section ======= -->
  <section class="section-agents section-t8 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">
                <?php _e("Best Agents", "EstateAgency") ?>
              </h2>
            </div>
            <div class="title-link">
              <a href="http://localhost/wordpress/agent-grid/">
                <?php _e("All Agents", "EstateAgency") ?>
                <span class="bi bi-chevron-right"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        $args = array(
          'post_type' => 'agent',
          'post_status' => 'publish',
          'posts_per_page' => '3',
          // 'order'=> 'desc',
          'offset' => '3',
        );
        $query = new WP_Query($args);
        while ($query->have_posts()) {
          $query->the_post();
          $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
          ?>
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="<?php echo $image[0]; ?>" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="<?php the_permalink(); ?>" class="link-two">
                        <?php the_title(); ?>
                      </a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <div class="info-agents color-a">
                    <p>
                      <?php the_excerpt(); ?>
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                      <a href="<?php the_field('facebook'); ?>" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                      <a href="<?php the_field('twitter'); ?>" class="link-one">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                      <a href="<?php the_field('instagram'); ?>" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                      <a href="<?php the_field('linkedin'); ?>" class="link-one">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section><!-- End Agents Section -->

  <!-- ======= Latest News Section ======= -->
  <section class="section-news section-t8 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">
                <?php _e("latest News", "EstateAgency") ?>
              </h2>
            </div>
            <div class="title-link">
              <a href="http://localhost/wordpress/blog/">
                <?php _e("All News", "EstateAgency") ?>
                <span class="bi bi-chevron-right"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="news-carousel" class="swiper">
        <div class="swiper-wrapper">
          <?php
          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
          );
          $query = new WP_Query($args);
          while ($query->have_posts()) {
            $query->the_post();
            $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
            ?>
            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="<?php echo $image[0]; ?>" alt="" class="img-b img-fluid" style="height: 300px; width: 520px;">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="<?php the_permalink(); ?>" class="category-b">
                        <?php the_field('categories'); ?>
                      </a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="<?php the_permalink(); ?>">
                          <?php the_title(); ?>
                        </a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">
                        <?php the_field('date'); ?>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->
          <?php } ?>
        </div>
      </div>
      <div class="news-carousel-pagination carousel-pagination"></div>
    </div>
  </section><!-- End Latest News Section -->

  <!-- ======= Testimonials Section ======= -->
  <section class="section-testimonials section-t8 nav-arrow-a mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">
                <?php _e("Testimonials", "EstateAgency") ?>
              </h2>
            </div>
          </div>
        </div>
      </div>

      <div id="testimonial-carousel" class="swiper">
        <div class="swiper-wrapper">
          <?php
          $args = array(
            'post_type' => 'testimonial',
            'post_status' => 'publish',
            // 'posts_per_page' => '1',
          
          );
          $query = new WP_Query($args);
          while ($query->have_posts()) {
            $query->the_post();
            $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
            ?>
            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">

                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="<?php echo $image[0]; ?>" alt="" class="img-fluid" style="height: 450px; width: 500px;">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        <?php the_content(); ?>
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="<?php echo $image[0]; ?>" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author">
                        <?php the_title(); ?>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->
          <?php } ?>
        </div>
      </div>
      <div class="testimonial-carousel-pagination carousel-pagination"></div>
    </div>
  </section><!-- End Testimonials Section -->
</main><!-- End #main -->
<?php get_footer(); ?>