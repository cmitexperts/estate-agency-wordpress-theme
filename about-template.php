<?php
// template name: about_template
?>
<?php get_header(); ?>

<main id="main">
  <!-- ======= Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
          <div class="col-md-12 col-lg-8 mb-5">
            <div class="title-single-box">
              <h1 class="title-single">
              <?php _e("We Do Great Designs For Creative Folks","EstateAgency")?>
              </h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="<?php echo site_url(); ?>"><?php _e("home","EstateAgency")?></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                <?php _e("About","EstateAgency")?>
                </li>
              </ol>
            </nav>
          </div>
          <div class="col-sm-12 position-relative">
            <div class="about-img-box">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
            </div>
            <div class="sinse-box">
              <h5 class="sinse-title">
                <?php the_field('banner_title'); ?>
              </h5>
              <p>
                <?php the_field('banner_sub_title'); ?>
              </p>
            </div>
          </div>
      </div>
    </div>
  </section><!-- End Intro Single-->

  <!-- ======= About Section ======= -->
  <section class="section-about">
    <div class="container">
      <div class="col-md-12 section-t8 position-relative">
        <div class="row mt-5">
    
            <div class="col-md-6 col-lg-5">
              <img src="<?php the_field('image'); ?>" alt="" class="img-fluid">
            </div>
            <div class="col-lg-2  d-none d-lg-block position-relative">
              <div class="title-vertical d-flex justify-content-start">
                <span>
                <?php the_field('sub_title1'); ?>
                </span>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 section-md-t3">
              <div class="title-box-d">
                <h3 class="title-d">
                <?php the_field('sub_title2'); ?>
                </h3>
              </div>
              <p class="color-text-a">
                <?php the_content(); ?>
              </p>
            </div>
          
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- =======Team Section ======= -->
  <section class="section-agents section-t8 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a"><?php _e("Meet Our Team","EstateAgency")?></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        $args = array(
          'post_type' => 'agent',
          'post_status' => 'publish',
          'posts_per_page' => '6',
          'order' => 'asc',
          // 'offset'=> '3',
        );
        $query = new WP_Query($args);
        while ($query->have_posts()) {
          $query->the_post();
          $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
          ?>
          <div class="col-md-4 mb-3">
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
  </section><!-- End About Section-->

</main><!-- End #main -->


<?php get_footer(); ?>