<?php
// template name: agent-grid
?>

<?php get_header(); ?>


<main id="main">
  <!-- =======Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">
              <?php _e("Our Amazing Agents", "EstateAgency") ?>
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
                <a href="#">
                  <?php _e("Home", "EstateAgency") ?>
                </a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <?php _e("Agents Grid", "EstateAgency") ?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section><!-- End Intro Single-->

  <!-- ======= Agents Grid ======= -->
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'agent',
          'post_status' => 'publish',
          'posts_per_page' => '3',
          'order' => 'asc',
          'paged' => $paged
          // 'offset'=> '2',
        );
        $query = new WP_Query($args);
        while ($query->have_posts()) {
          $query->the_post();
          $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
          ?>
          <div class="col-md-4 mb-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="<?php echo $image[0]; ?>" alt="" class="img-d img-fluid" style="height: 450px; width: 520px;">
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
                        <a href="#" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
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
      <div class="row float-end">
        <div class="col-sm-12">
          <nav>
            <ul class="pager h6">
              <li class="pager-sub"> 
                <?php previous_posts_link('&laquo; PREV', $query->max_num_pages) ?>
              </li>
              <li class="pager-sub2">
                <?php next_posts_link('NEXT &raquo;', $query->max_num_pages) ?>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section><!-- End Agents Section -->

</main><!-- End #main -->



<?php get_footer(); ?>