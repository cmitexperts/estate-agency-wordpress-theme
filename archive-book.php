<?php
//  template name: book-template; 
?>
<?php get_header(); ?>


<div class="container">

    <div class="row ">

        <?php $args = array('post_type' => 'book', 'post_status' => 'publish');

        $query_post = new WP_Query($args);

        while ($query_post->have_posts()) {
            $query_post->the_post(); do_action('my_action');
            $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
            ?>
            <div class="col-4">
                <img src="<?php
                echo $image[0];
                ?>" alt="daffodils.jpg">
                <h4>
                    <?php the_title(); ?>
                </h4>
                <?php the_excerpt(); ?>
                <a id="demo" href="<?php the_permalink(); ?>">read more.....</a>

                <a href="">
                    <?php the_category(); ?>
                </a>

            </div>
        <?php } ?>
    </div>

</div>


<?php get_footer(); ?>