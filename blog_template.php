<?php
// template name: blog-template
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
              <?php _e("Our Amazing Posts", "EstateAgency") ?>
            </h1>
            <span class="color-text-a">
              <?php _e("Grid News", "EstateAgency") ?>
            </span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?php echo site_url(); ?>">
                  <?php _e("Home", "EstateAgency") ?>
                </a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <?php _e("News Grid", "EstateAgency") ?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section><!-- End Intro Single-->

  <!-- ======= Latest News Section ======= -->
  <section class="section-news section-t8 mt-5">
    <div class="container">
      <!-- <div id="news-carousel" class="swiper"> -->
      <div class="row">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => 3,
          'order' => 'asc',
          'paged' => $paged,
        );
        $query = new WP_Query($args);
        while ($query->have_posts()) {
          $query->the_post();
          $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
          ?>
          <div class="col-lg-4 mb-4">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="<?php echo $image[0]; ?>" alt="" class="img-b img-fluid">
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
      <!-- </div> -->
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
  </section><!-- End Latest News Section -->

</main><!-- End #main -->


<?php get_footer(); ?>