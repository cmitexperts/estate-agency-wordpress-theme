<?php
//  Template Name: Rent-Template;
?>


<?php get_header(); ?>

<main id="main">
    <!-- ======= Intro Single ======= -->
    <section class="intro-single property-grid grid">
        <div class="container">
            <div class="row">
                <?php
                if (have_rows('for_rent')) {
                    while (have_rows('for_rent')) {
                        the_row();
                        ?>
                        <div class="col-md-4">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                    <img src="<?php the_sub_field('image'); ?>" alt="" class="img-a img-fluid"
                                        style="width:515px; height: 450px;">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_sub_field('sub_title'); ?>
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a">
                                                    <?php the_sub_field('rent'); ?>
                                                </span>
                                            </div>
                                            <!-- <a href="<?php the_permalink(); ?>" class="link-a">
                                                <?php _e("Click here to view", "EstateAgency") ?>
                                                <span class="bi bi-chevron-right"></span>
                                            </a> -->
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h4 class="card-info-title">
                                                        <?php _e("Area", "EstateAgency") ?>
                                                    </h4>
                                                    <?php the_sub_field('area'); ?>
                                                    <sup>2</sup>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">
                                                        <?php _e("Beds", "EstateAgency") ?>
                                                    </h4>
                                                    <?php the_sub_field('beds'); ?>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">
                                                        <?php _e("Baths", "EstateAgency") ?>
                                                    </h4>
                                                    <?php the_sub_field('baths'); ?>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">
                                                        <?php _e("Garage", "EstateAgency") ?>
                                                    </h4>
                                                    <?php the_sub_field('garage'); ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
            <div class="row float-end">
                <div class="col-sm-12">
                    <!-- <nav>
                        <ul class="pager h6">
                            <li class="pager-sub">
                                <?php previous_posts_link('&laquo; PREV', $query->max_num_pages) ?>
                            </li>
                            <li class="pager-sub2">
                                <?php next_posts_link('NEXT &raquo;', $query->max_num_pages) ?>
                            </li>
                        </ul>
                    </nav> -->
                </div>
            </div>
        </div>
        </div>
    </section><!-- End Intro Single-->

</main><!-- End #main -->



