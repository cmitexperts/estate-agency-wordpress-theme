<?php
// template name: property-template
?>
<?php get_header(); ?>

<main id="main">
  <!-- ======= Intro Single ======= -->
  <section class="intro-single property-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box mb-5">
            <h1 class="title-single">
              <?php _e("Our Amazing Properties", "EstateAgency") ?>
            </h1>
            <span class="color-text-a">
              <?php _e("Grid Properties", "EstateAgency") ?>
            </span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?php echo site_url(); ?>">
                  <?php _e("Home", "EstateAgency"); ?>
                </a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <?php _e("Property Grid", "EstateAgency") ?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="grid-option">
            <form>
              <select class="custom-select" id="custom_select">
                <option value="all" class="all" name="all">
                  <?php _e("All", "EstateAgency") ?>
                </option>
                <option value="New_To_Old" class="New_To_Old" name="New_To_Old">
                  <?php _e("New To Old", "EstateAgency") ?>
                </option>
                <option value="rent" class="rent" name="rent">
                  <?php _e("For Rent", "EstateAgency") ?>
                </option>
                <option value="sale" class="sale" name="sale">
                  <?php _e("For Sale", "EstateAgency") ?>
                </option>
              </select>
            </form>
          </div>
        </div>
      </div>
      <div class="row" id="property_rent">
        <?php
        // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'property',
          'post_status' => 'publish',
          'paged' => 1,
          'posts_per_page' => 3,
          // 'order' => 'asc',
        );
        $query = new WP_Query($args);
        // if ($query->found_posts) {
        //   echo "-1";
        // }
        while ($query->have_posts()) {
          $query->the_post();
          $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
          ?>
          <div class="col-md-4" id="prop_rent">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="<?php echo $image[0]; ?>" alt="" class="img-a img-fluid" style="width:515px; height: 450px;">
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
            <?php wp_reset_postdata(); ?>
          </div>
        <?php } ?>
      </div>
    </div>
    <!-- <div class="row"> -->
    <div class="col-sm-12">
      <div class="btn__wrapper text-center">
        <button class="btn btn__primary" id="load_more">Load More</button>
      </div>
    </div>
    <!-- </div> -->
  </section><!-- End Intro Single-->

  <!-- ======= Property Grid ======= -->
  <!-- <section class="property-grid grid">
    <div class="container">
     
    </div>
  </section> -->
  <!-- End Property Grid Single-->

</main><!-- End #main -->



<?php get_footer(); ?>