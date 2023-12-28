<?php
register_nav_menus(array('primary-menu' => 'header-menu', 'secondary-menu' => 'footer-menu'));
// add_theme_support('post-thumbnails');
add_theme_support('custom-header');


function wpdocs_code_service()
{
	$labels = array(
		'name' => _x('Service', 'Post type general name', 'textdomain'),
		'singular_name' => _x('Service', 'Post type singular name', 'textdomain'),
		'menu_name' => _x('Service', 'Admin Menu text', 'textdomain'),
		'name_admin_bar' => _x('Service', 'Add New on Toolbar', 'textdomain'),
		'add_new' => __('Add New', 'textdomain'),
		'add_new_item' => __('Add New Service', 'textdomain'),
		'new_item' => __('New Service', 'textdomain'),
		'edit_item' => __('Edit Service', 'textdomain'),
		'view_item' => __('View Service', 'textdomain'),
		'all_items' => __('All Service', 'textdomain'),
		'search_items' => __('Search Service', 'textdomain'),
		'parent_item_colon' => __('Parent Service:', 'textdomain'),
		'not_found' => __('No Service found.', 'textdomain'),
		'not_found_in_trash' => __('No Service found in Trash.', 'textdomain'),
		'featured_image' => _x('Service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
		'set_featured_image' => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
		'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
		'use_featured_image' => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
		'archives' => _x('Service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
		'insert_into_item' => _x('Insert into Service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
		'uploaded_to_this_item' => _x('Uploaded to this Service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
		'filter_items_list' => _x('Filter Service list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
		'items_list_navigation' => _x('Service list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
		'items_list' => _x('Service list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => 'admin.php?page=menu_slug',
		'query_var' => true,
		'rewrite' => array('slug' => 'Service'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
		// 'taxonomies'           => array('category','post_tag')

	);

	register_post_type('Service', $args);
}

add_action('init', 'wpdocs_code_service');


// custom
function wpdocs_code_property()
{
	$labels = array(
		'name' => _x('Properties', 'Post type general name', 'textdomain'),
		'singular_name' => _x('Property', 'Post type singular name', 'textdomain'),
		'menu_name' => _x('Properties', 'Admin Menu text', 'textdomain'),
		'name_admin_bar' => _x('Property', 'Add New on Toolbar', 'textdomain'),
		'add_new' => __('Add New', 'textdomain'),
		'add_new_item' => __('Add New Property', 'textdomain'),
		'new_item' => __('New Property', 'textdomain'),
		'edit_item' => __('Edit Property', 'textdomain'),
		'view_item' => __('View Property', 'textdomain'),
		'all_items' => __('All Properties', 'textdomain'),
		'search_items' => __('Search Properties', 'textdomain'),
		'parent_item_colon' => __('Parent Properties:', 'textdomain'),
		'not_found' => __('No Properties found.', 'textdomain'),
		'not_found_in_trash' => __('No Properties found in Trash.', 'textdomain'),
		'featured_image' => _x('Property Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
		'set_featured_image' => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
		'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
		'use_featured_image' => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
		'archives' => _x('Properties archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
		'insert_into_item' => _x('Insert into Property', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
		'uploaded_to_this_item' => _x('Uploaded to this Property', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
		'filter_items_list' => _x('Filter Properties list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
		'items_list_navigation' => _x('Properties list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
		'items_list' => _x('Properties list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => 'admin.php?page=menu_slug',
		'query_var' => true,
		'rewrite' => array('slug' => 'Property'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),

	);

	register_post_type('Property', $args);
}

add_action('init', 'wpdocs_code_property');

function wpdocs_code_agent()
{
	$labels = array(
		'name' => _x('Agents', 'Post type general name', 'textdomain'),
		'singular_name' => _x('Agent', 'Post type singular name', 'textdomain'),
		'menu_name' => _x('Agents', 'Admin Menu text', 'textdomain'),
		'name_admin_bar' => _x('Agent', 'Add New on Toolbar', 'textdomain'),
		'add_new' => __('Add New', 'textdomain'),
		'add_new_item' => __('Add New Agent', 'textdomain'),
		'new_item' => __('New Agent', 'textdomain'),
		'edit_item' => __('Edit Agent', 'textdomain'),
		'view_item' => __('View Agent', 'textdomain'),
		'all_items' => __('All Agents', 'textdomain'),
		'search_items' => __('Search Agents', 'textdomain'),
		'parent_item_colon' => __('Parent Agents:', 'textdomain'),
		'not_found' => __('No Agents found.', 'textdomain'),
		'not_found_in_trash' => __('No Agents found in Trash.', 'textdomain'),
		'featured_image' => _x('Agent Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
		'set_featured_image' => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
		'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
		'use_featured_image' => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
		'archives' => _x('Agents archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
		'insert_into_item' => _x('Insert into Agent', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
		'uploaded_to_this_item' => _x('Uploaded to this Agent', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
		'filter_items_list' => _x('Filter Agents list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
		'items_list_navigation' => _x('Agents list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
		'items_list' => _x('Agents list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => 'admin.php?page=menu_slug',
		'query_var' => true,
		'rewrite' => array('slug' => 'Agent'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),


	);

	register_post_type('Agent', $args);
}

add_action('init', 'wpdocs_code_agent');

// category--news

// function news_taxonomies() {

// 	$labels = array(
// 		'name'              => _x( 'category', 'taxonomy general name', 'textdomain' ),
// 		'singular_name'     => _x( 'category', 'taxonomy singular name', 'textdomain' ),
// 		'search_items'      => __( 'Search category', 'textdomain' ),
// 		'all_items'         => __( 'All category', 'textdomain' ),
// 		'parent_item'       => __( 'Parent category', 'textdomain' ),
// 		'parent_item_colon' => __( 'Parent category', 'textdomain' ),
// 		'edit_item'         => __( 'Edit category', 'textdomain' ),
// 		'update_item'       => __( 'Update category', 'textdomain' ),
// 		'add_new_item'      => __( 'Add New category', 'textdomain' ),
// 		'new_item_name'     => __( 'New category Name', 'textdomain' ),
// 		'menu_name'         => __( 'news_category', 'textdomain' ),
// 	);

// 	$args = array(
// 		'hierarchical'      => true,
// 		'labels'            => $labels,
// 		'show_ui'           => true,
// 		'show_admin_column' => true,
// 		'query_var'         => true,
// 		'rewrite'           => array( 'slug' => 'category' ),
// 	);

// 	register_taxonomy( 'category', 'news', $args );
// }
// add_action( 'init', 'news_taxonomies' );

// category--news--end......

function wpdocs_code_testimonial()
{
	$labels = array(
		'name' => _x('Testimonials', 'Post type general name', 'textdomain'),
		'singular_name' => _x('Testimonial', 'Post type singular name', 'textdomain'),
		'menu_name' => _x('Testimonials', 'Admin Menu text', 'textdomain'),
		'name_admin_bar' => _x('Testimonial', 'Add New on Toolbar', 'textdomain'),
		'add_new' => __('Add New', 'textdomain'),
		'add_new_item' => __('Add New Testimonial', 'textdomain'),
		'new_item' => __('New Testimonial', 'textdomain'),
		'edit_item' => __('Edit Testimonial', 'textdomain'),
		'view_item' => __('View Testimonial', 'textdomain'),
		'all_items' => __('All Testimonials', 'textdomain'),
		'search_items' => __('Search Testimonials', 'textdomain'),
		'parent_item_colon' => __('Parent Testimonials:', 'textdomain'),
		'not_found' => __('No Testimonials found.', 'textdomain'),
		'not_found_in_trash' => __('No Testimonials found in Trash.', 'textdomain'),
		'featured_image' => _x('Testimonial Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
		'set_featured_image' => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
		'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
		'use_featured_image' => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
		'archives' => _x('Testimonials archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
		'insert_into_item' => _x('Insert into Testimonial', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
		'uploaded_to_this_item' => _x('Uploaded to this Testimonial', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
		'filter_items_list' => _x('Filter Testimonials list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
		'items_list_navigation' => _x('Testimonials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
		'items_list' => _x('Testimonials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => 'admin.php?page=menu_slug',
		'query_var' => true,
		'rewrite' => array('slug' => 'Testimonial'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
		// 'taxonomies'           => array('category','post_tag')

	);

	register_post_type('Testimonial', $args);
}

add_action('init', 'wpdocs_code_testimonial');

// FEATURED IMAGE 

add_action('after_setup_theme', 'cxc_add_post_thumbnail_supports', 99);
function cxc_add_post_thumbnail_supports()
{
	add_theme_support('post-thumbnails');
}

// add_theme_support('post-thumbnails', array(
// 	'post',
// 	'page',
// 	'custom-post-type-name',
// ));

//FEATURED IMAGE  END..


// Add menu page............

add_action('admin_menu', 'custom_menu');
function custom_menu()
{
	add_menu_page(
		__('EstateAgency Title', 'textdomain'),
		'EstateAgency',
		'edit_posts',
		'admin.php?page=menu_slug',
		'EstateAgency_callback_function',
		'dashicons-open-folder',
		4
	);
}
?>

<!--.....................................................Ajax through out this code.................................................-->
<?php
// function my_enqueue()
// {

// 	wp_enqueue_script('custom-js', get_template_directory_uri() .'assets\js\custom_script.js', array('jquery'), true);

// 	wp_localize_script('custom-js', 'my_ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));

// }

// add_action('wp_enqueue_scripts', 'my_enqueue');



function saveAjaxData()
{
	// print_r($_POST);
	$sale_type = ($_POST);
	$val = array(
		'post_type' => 'property',
		'post_status' => 'publish',

		// 'posts_per_page' => 3,
	);

	?>
	<div class="row" id="properties_rent" class="property_sale">
		<?php
		if ($sale_type['filter'] == 'rent') {
			$args = array(
				'post_type' => $val,
				'posts_per_page' => 3,
				// 'paged' => $_POST['paged'],
				// 'order' => 'asc',
				'meta_query' => array(
					array(
						'key' => 'sale_type',
						'value' => 'rent',
						// 'compare' => '='
					),
				)
			);
		} 
		else if ($sale_type['filter'] == 'sale') {

			$args = array(
				'post_type' => $val,
				'posts_per_page' => 3,
				'meta_query' => array(
					array(
						'key' => 'sale_type',
						'value' => 'sale',
						// 'compare' => '='
					),
				)
			);
		} else if ($sale_type['filter'] == 'New_To_Old') {
			$args = array('post_type' => $val,
				'posts_per_page' => 3,
				// 'order' => 'asc',
			);

		} else if ($sale_type['filter'] == 'all') {
			$args = array('post_type' => $val,
				// 'order' => 'asc',
				'posts_per_page' => 3,
			);
		}
		else{
			$args = array(
				'post_type' => 'property',
				'post_status' => 'publish',
				'posts_per_page' => 3,
				'paged' => $_POST['paged'],
			);
		}
		$query = new WP_Query($args);
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
	<div class="row text-center">
		<div class="col-sm-12">
			<div class="btn__wrapper text-center">
				<button type="submit" class="btn btn__primary" id="load_more">Load More...</button>
			</div>
		</div>
	</div>
	<?php
	wp_die();
}
add_action('wp_ajax_nopriv_saveAjaxData', 'saveAjaxData');
add_action('wp_ajax_saveAjaxData', 'saveAjaxData');


// Load More for rent...


