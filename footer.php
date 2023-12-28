<!-- ======= Footer ======= -->
<section class="section-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="widget-a">
          <div class="w-header-a">
            <h3 class="w-title-a text-brand">
              <?php _e("EstateAgency", "EstateAgency") ?>
            </h3>
          </div>
          <div class="w-body-a">
            <p class="w-text-a color-text-a">
              <?php _e("EstateAgencyEnim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat duissed aute irure.", "EstateAgency") ?>
            </p>
          </div>
          <div class="w-footer-a">
            <ul class="list-unstyled">
              <li class="color-a">
                <span class="color-text-a">
                  <?php _e("Phone. +54 356 945234", "EstateAgency") ?>
                </span>
              </li>
              <li class="color-a">
                <span class="color-text-a">
                  <?php _e("Email. contact@example.com", "EstateAgency") ?>
                </span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 section-md-t3">
        <div class="widget-a">
          <div class="w-header-a">
            <h3 class="w-title-a text-brand">
              <?php _e("The Company", "EstateAgency") ?>
            </h3>
          </div>
          <div class="w-body-a">
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">
                    <?php _e("Site Map", "EstateAgency") ?>
                  </a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">
                    <?php _e("Legal", "EstateAgency") ?>
                  </a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">
                    <?php _e("Agent Admin", "EstateAgency") ?>
                  </a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">
                    <?php _e("Careers", "EstateAgency") ?>
                  </a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">
                    <?php _e("Affiliate", "EstateAgency") ?>
                  </a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">
                    <?php _e("Privacy Policy", "EstateAgency") ?>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 section-md-t3">
        <div class="widget-a">
          <div class="w-header-a">
            <h3 class="w-title-a text-brand">
              <?php _e("International sites", "EstateAgency") ?>
            </h3>
          </div>
          <div class="w-body-a">
            <ul class="list-unstyled">
              <li class="item-list-a">
                <i class="bi bi-chevron-right"></i> <a href="#">
                  <?php _e("Venezuela", "EstateAgency") ?>
                </a>
              </li>
              <li class="item-list-a">
                <i class="bi bi-chevron-right"></i> <a href="#">
                  <?php _e("China", "EstateAgency") ?>
                </a>
              </li>
              <li class="item-list-a">
                <i class="bi bi-chevron-right"></i> <a href="#">
                  <?php _e("Hong Kong", "EstateAgency") ?>
                </a>
              </li>
              <li class="item-list-a">
                <i class="bi bi-chevron-right"></i> <a href="#">
                  <?php _e("Argentina", "EstateAgency") ?>
                </a>
              </li>
              <li class="item-list-a">
                <i class="bi bi-chevron-right"></i> <a href="#">
                  <?php _e("Singapore", "EstateAgency") ?>
                </a>
              </li>
              <li class="item-list-a">
                <i class="bi bi-chevron-right"></i> <a href="#">
                  <?php _e("Philippines", "EstateAgency") ?>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="nav-footer justify-content-center d-flex">
          <!-- <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Property</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Blog</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
            </ul> -->
          <?php wp_nav_menu(array('theme_location' => 'secondary-menu', 'menu_class' => 'footer-nav')); ?>
        </nav>
        <div class="socials-a">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="<?php the_field('facebook', 991); ?>">
                <i class="bi bi-facebook" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php the_field('twitter', 991); ?>">
                <i class="bi bi-twitter" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php the_field('instagram', 991); ?>">
                <i class="bi bi-instagram" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php the_field('linkedin', 991); ?>">
                <i class="bi bi-linkedin" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="copyright-footer">
          <p class="copyright color-text-a">
            &copy;
            <?php _e("Copyright", "EstateAgency") ?>
            <span class="color-a">
              <?php _e("EstateAgency", "EstateAgency") ?>
            </span>
            <?php _e("All Rights Reserved.", "EstateAgency") ?>
          </p>
        </div>
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
          <?php _e("Designed by", "EstateAgency") ?> <a href="https://bootstrapmade.com/">
            <?php _e("Cmit", "EstateAgency") ?>
            <?php _e("Experts", "EstateAgency") ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer><!-- End  Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/php-email-form/validate.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<script>
  var ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom_script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<?php if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
  wp_enqueue_script('comment-reply', 'wp-includes/js/comment-reply', array(), false, true);
} ?>
</body>

</html>