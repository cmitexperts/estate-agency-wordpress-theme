<?php
// template name: custom-form 
?>
<?php
if (isset($_POST['myform'])) {
  $args = array(
    'post_title' => $_POST['title'],
    'post_content' => $_POST['content'],
    'post_status' => 'publish',
    'post_type' => 'book',
    'post_excerpt' => $_POST['excerpt'],
    // 'post_author' => $_POST['author'],
  );
  $post_id = wp_insert_post($args);
  // print_r($post_id);
  // die();

  // wp_insert_attachment.................

  require(dirname(__FILE__) . '/../../../wp-load.php');

  // it allows us to use wp_handle_upload() function
  require_once(ABSPATH . 'wp-admin/includes/file.php');

  // you can add some kind of validation here
  if (empty($_FILES['myfiles'])) {
    wp_die('No files selected.');
  }

  $upload = wp_handle_upload(
    $_FILES['myfiles'],
    array('test_form' => false)
  );

  if (!empty($upload['error'])) {
    wp_die($upload['error']);
  }

  // it is time to add our uploaded image into WordPress media library
  $attachment_id = wp_insert_attachment(
    array(
      'post_type' => 'book',
      'guid' => $upload['url'],
      'post_mime_type' => $upload['type'],
      'post_title' => $_POST['title'],
      'post_content' => $_POST['content'],
      'post_excerpt' => $_POST['excerpt'],
      // 'post_author' => $_POST['author'],
      'post_status' => 'publish',
    ),
    $upload['file']
  );

  if (is_wp_error($attachment_id) || !$attachment_id) {
    wp_die('Upload error.');
  }

  // update medatata, regenerate image sizes
  require_once(ABSPATH . 'wp-admin/includes/image.php');

  wp_update_attachment_metadata(
    $attachment_id,
    $post_id,
    wp_generate_attachment_metadata($attachment_id, $post_id, $upload['file'])
  );

  set_post_thumbnail($post_id, $attachment_id);

  // update post meta.....

  $post_author = $_POST['author'];
  update_post_meta( $post_id, 'author_name', $post_author);
    
  // wp_redirect...

  wp_redirect('http://localhost/wordpress/custom-form/');
  exit();

}

?>
<?php
get_header();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Form</title>
</head>

<body>
  <div class="container p-2 flex-fill mx-auto my-5">
    <h2>Custom-Form</h2>
    <form method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" placeholder="Enter title" name="title" required>
      </div>
      <div class="form-group my-4">
        <label for="content">Content</label>
        <textarea class="form-control" placeholder="Enter Content" name="content" required></textarea>
      </div>
      <!-- <div class="form-group my-4">
        <label for="category">Category</label>
        <input type="text" class="form-control" placeholder="Enter category" name="term_cat" required>
      </div> -->
      <div class="form-group my-4">
        <label for="excerpt">excerpt</label>
        <input type="text" class="form-control" placeholder="Enter excerpt" name="excerpt" required>
      </div>
      <div class="form-group my-4">
        <label for="author">author-name</label>
        <input type="text" class="form-control" placeholder="Enter author" name="author" required>
      </div>
      <div class="form-group my-4">
        <input type="file" name="myfiles" class="form-control border-dark my-4">
      </div>
      <input type="submit" name="myform" value="submit" class="btn btn-secondary">

    </form>
  </div>

</body>

</html>

<?php
get_footer();
?>