<?php
get_header();
// start wp_query....................

// // The Query.
// $query = new WP_Query('posts_per_page=3');

// // The Loop.
// if ( $query->have_posts() ) {
// 	echo '<ul>';
// 	while ( $query->have_posts() ) {
// 		$query->the_post();
// 		echo '<li>' . esc_html( get_the_title() ) . '</li>';
// 	}
// 	echo '</ul>';
// } else {
// 	esc_html_e( 'Sorry, no posts matched your criteria.' );
// }
// // Restore original Post Data.
// wp_reset_postdata();

// end wp_query....................
?>

<div class="demo">
	This is single-book.php file.
</div>
<?php

$args = array(
	'post_type' => 'book',
	'post_status' => 'publish',
	'posts_per_page' => 3,
	// 'category__not_in' => array( 15,23 ),
	// 'tags_id' => '24',
	// 'offset' => 5,
	// 'meta_key' => '_edit_last',
	// 'meta_value' => '1',
	// 'order' => 'desc',
	// 'order by' => '',
);

$query = new WP_Query($args);
while ($query->have_posts()) {
	$query->the_post(); ?>
	<div class="post-custom">
		<h2 style="text-align:center; text-transform:capitalize; margin:4%">
			<?php
			the_title();
			?>
		</h2>
		<?php //the_excerpt(); ?>
		<?php the_content(); ?>
		<hr>
		<?php //previous_post_link(); ?>
		<?php // the_tags(); ?>
	</div>
	<?php
}
// wp_reset_query();
wp_reset_postdata();
?>




<!-- footer -->
<?php
get_footer();
do_action('demo');
?>