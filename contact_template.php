<?php
// template name: contact-template
?>
<?php get_header();?>


<main id="main">

<!-- ======= Intro Single ======= -->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single"><?php the_title(); ?></h1>
          <span class="color-text-a"><?php the_content(); ?></span>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url(); ?>"><?php _e("Home", "EstateAgency") ?></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
            <?php _e("Contact", "EstateAgency") ?>
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section><!-- End Intro Single-->

<!-- ======= Contact Single ======= -->
<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="contact-map box">
          <div id="map" class="contact-map">
            <iframe src="<?php the_field('location');?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="col-sm-12 section-t8">
        <div class="row">
          <div class="col-md-7">
            <?php echo do_shortcode('[contact-form-7 id="aff4576" title="Contact"]')?>
          </div>
          <div class="col-md-5 section-md-t3">
            <div class="icon-box section-b2">
              <div class="icon-box-icon">
                <span class="bi bi-envelope"></span>
              </div>
              <div class="icon-box-content table-cell">
                <div class="icon-box-title">
                  <h4 class="icon-title"> <?php _e("Say Hello", "EstateAgency") ?></h4>
                </div>
                <div class="icon-box-content">
                  <p class="mb-1"><?php _e("Email", "EstateAgency") ?>
                    <span class="color-a"><?php the_field('email'); ?></span>
                  </p>
                  <p class="mb-1"><?php _e("Phone", "EstateAgency") ?>
                    <span class="color-a"><?php the_field('phone_number'); ?></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="icon-box section-b2">
              <div class="icon-box-icon">
                <span class="bi bi-geo-alt"></span>
              </div>
              <div class="icon-box-content table-cell">
                <div class="icon-box-title">
                  <h4 class="icon-title"><?php _e("Find us in", "EstateAgency") ?></h4>
                </div>
                <div class="icon-box-content">
                  <p class="mb-1">
                    <?php the_field('find_us'); ?>
                  </p>
                </div>
              </div>
            </div>
            <div class="icon-box">
              <div class="icon-box-icon">
                <span class="bi bi-share"></span>
              </div>
              <div class="icon-box-content table-cell">
                <div class="icon-box-title">
                  <h4 class="icon-title"><?php _e("Social networks", "EstateAgency") ?></h4>
                </div>
                <div class="icon-box-content">
                  <div class="socials-footer">
                    <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="<?php the_field('facebook');?>" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                      <a href="<?php the_field('twitter');?>" class="link-one">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                      <a href="<?php the_field('instagram');?>" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                      <a href="<?php the_field('linkedin');?>" class="link-one">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Contact Single-->

</main><!-- End #main -->


<?php get_footer();?>