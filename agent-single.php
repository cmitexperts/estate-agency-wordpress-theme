<?php
// template name: agent-single
?>

<?php get_header(); ?>

<main id="main">

  <!-- ======= Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">
              <?php _e("Margaret Stone", "EstateAgency") ?>
            </h1>
            <span class="color-text-a">
              <?php _e("Agent Immobiliari", "EstateAgency") ?>
            </span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">
                  <?php _e("Home", "EstateAgency") ?>
                </a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">
                  <?php _e("Agents", "EstateAgency") ?>
                </a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <?php _e("Margaret Stone", "EstateAgency") ?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section><!-- End Intro Single -->

  <!-- ======= Agent Single ======= -->
  <section class="agent-single">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 mb-5">
          <div class="row">
            <div class="col-md-6">
              <div class="agent-avatar-box">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="agent-avatar img-fluid">
              </div>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="agent-info-box">
                <div class="agent-title">
                  <div class="title-box-d">
                    <h3 class="title-d">
                      <?php the_title(); ?>
                    </h3>
                  </div>
                </div>
                <div class="agent-content mb-3">
                  <p class="content-d color-text-a">
                    <?php the_content(); ?>
                  </p>
                  <div class="info-agents color-a mb-5">
                    <p>
                      <strong>
                        <?php _e("Phone: ", "EstateAgency") ?>
                      </strong>
                      <span class="color-text-a">
                        <?php the_field('phone'); ?>
                      </span>
                    </p>
                    <p>
                      <strong>
                        <?php _e("Mobile: ", "EstateAgency") ?>
                      </strong>
                      <span class="color-text-a">
                        <?php the_field('mobile'); ?>
                      </span>
                    </p>
                    <p>
                      <strong>
                        <?php _e("Email: ", "EstateAgency") ?>
                      </strong>
                      <span class="color-text-a">
                        <?php the_field('email'); ?>
                      </span>
                    </p>
                  </div>
                </div>
                <div class="socials-footer">
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
        <div class="col-md-12 section-t8">
          <div class="title-box-d">
            <h3 class="title-d">
              <?php _e("My Properties (6)", "EstateAgency") ?>
            </h3>
          </div>
        </div>
        <div class="row property-grid grid">
          <div class="col-sm-12">
            <div class="grid-option">
              <form>
                <select class="custom-select">
                  <option selected>
                    <?php _e("All", "EstateAgency") ?>
                  </option>
                  <option value="1">
                    <?php _e("New To Old", "EstateAgency") ?>
                  </option>
                  <option value="2">
                    <?php _e("For Rent", "EstateAgency") ?>
                  </option>
                  <option value="3">
                    <?php _e("For Sale", "EstateAgency") ?>
                  </option>
                </select>
              </form>
            </div>
          </div>
          <?php
          $args = array(
            'post_type' => 'property',
            'post_status' => 'publish',
            'posts_per_page' => '6',
            // 'post_name__in' => ['spilver-stiven'],
          );
          $query = new WP_Query($args);
          while ($query->have_posts()) {
            $query->the_post();
            // the_ID();
            $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
            ?>
            <div class="col-md-4">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="<?php echo $image[0]; ?>" alt="" class="img-a img-fluid" style="height: 500px; width: 600px;">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="<?php the_permalink(); ?>">
                          <?php the_title(); ?>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">
                          <?php the_field('rent'); ?>
                        </span>
                      </div>
                      <a href="<?php the_permalink(); ?>" class="link-a">Click here to view
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
                            <?php _e("Beds", "EstateAgency") ?>
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
      </div>
    </div>
  </section><!-- End Agent Single -->

</main><!-- End #main -->



<?php get_footer(); ?>