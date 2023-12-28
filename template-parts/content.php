<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-12 bg-black display-6 text-white text-center text-capitalize p-3 mt-3">
            <?php the_title(); ?>
        </div>
    </div>
    <div class="row">
        <?php
        $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
        ?>
        <div class="col-6 bg-black d-flex border border-secondary p-3">
            <img src="<?php echo $image[0]; ?>"; style="height:600px; width:700px">
        </div>
        <div class="col-6 p-3 bg-black text-white text-center border border-secondary align-middle pt-5">
            <?php
            the_content();
            ?>
        </div>
        <!-- <div class="col-12 bg-black text-white border border-secondary text-center p-3">
            <h5 style="color:white">the_excerpt</h5> -->
            <?php 
            // the_excerpt();  
            ?>
        <!-- </div> -->
    </div>
</div>
<footer class="entry-footer">
		<?php  wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
	</footer><!-- .entry-footer -->