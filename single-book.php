<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-12 bg-black text-white text-center text-capitalize mb-8 green">
            <h2>
                <?php the_title(); ?>
            </h2>
            <a href="">
                <?php the_category(); ?>
            </a>
        </div>
    </div>
    <div class="row">

        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
        ?>

        <div
            class=" bg-black col-6 d-flex align-items-center justify-content-center border border-secondary border-end-0 text-center mx-auto d-block">

            <img src="<?php echo $image[0]; ?>" ; style="height:200px; width:200px">
            <?php
            //  do_action('my_action');
            ?>

        </div>
        <div class="col-6 bg-black text-white text-center border border-secondary">

            <?php
            the_content();

            ?>
        </div>
        <div class="col-12 bg-black text-white border border-secondary text-center">
        <h5 style="color:brown">the_excerpt</h5>
            <?php
            the_excerpt();

            ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>