<?php
// template name: blog-single
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
              <?php _e("Book Cover Deisgn", "EstateAgency") ?>
            </h1>
            <span class="color-text-a">
              <?php _e("News Single", "EstateAgency") ?>
            </span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">
                  <?php _e("Home", "EstateAgency") ?>
                </a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <?php _e("Book Cover Deisgn", "EstateAgency") ?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section><!-- End Intro Single-->

  <!-- ======= Blog Single ======= -->
  <section class="news-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="news-img-box">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid"
              style="width:100%; height:500px">
          </div>
        </div>
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
          <div class="post-information">
            <ul class="list-inline text-center color-a">
              <li class="list-inline-item mr-2">
                <strong>
                  <?php _e('Author: ', 'EstateAgency'); ?>
                </strong>
                <span class="color-text-a">
                  <?php the_field('writer'); ?>
                </span>
              </li>
              <li class="list-inline-item mr-2">
                <strong>
                  <?php _e('Category: ', 'EstateAgency'); ?>
                </strong>
                <span class="color-text-a">
                  <?php the_field('category'); ?>
                </span>
              </li>
              <li class="list-inline-item">
                <strong>
                  <?php _e('Date: ', 'EstateAgency'); ?>
                </strong>
                <span class="color-text-a">
                  <?php the_field('date'); ?>
                </span>
              </li>
            </ul>
          </div>
          <div class="post-content color-text-a">
            <p class="post-intro">
              <?php the_content(); ?>
            </p>

            <blockquote class="blockquote">
              <p class="mb-4">
                <?php the_field('sub_title'); ?>
              </p>
              <footer class="blockquote-footer">
                <?php the_field('writer'); ?>
              </footer>
            </blockquote>
            <p>
              <?php the_field('sub_title2'); ?>
            </p>
          </div>
          <div class="post-footer">
            <div class="post-share">
              <span>
                <?php _e("Share :", "EstateAgency"); ?>
              </span>
              <ul class="list-inline socials">
                <li class="list-inline-item">
                  <a href=" <?php the_field('facebook'); ?>">
                    <i class="bi bi-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href=" <?php the_field('twitter'); ?>">
                    <i class="bi bi-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href=" <?php the_field('instagram'); ?>">
                    <i class="bi bi-instagram" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href=" <?php the_field('linked'); ?>">
                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1">
          <div class="title-box-d">
            <h3 class="title-d">
              <?php _e("Comments", "estateagency"); ?>
            </h3>
          </div>
          <div class="box-comments" id="demo">
            <?php
            // $query = new WP_Comment_Query();
            // $comments = $query->query($query);
            // if ($comments) {
            //   foreach ($comments as $comment) {
            //     echo '<p>' . $comment->comment_content . '</p>';
            //   }
            // } else {
            //   echo '<p>No comments found.</p>';
            // }
            
            // $comments = get_comments($args);
            // foreach ($comments as $comment):
            //   echo ($comment->comment_author . '<br />' . $comment->comment_content) . '<br />';
            // endforeach;
            ?>
          </div>
          <!-- ************* comment *********** -->
          <?php
           if (comments_open() || get_comments_number()):
            comments_template();
          endif;
          ?>
        </div>
      </div>
    </div>
  </section><!-- End Blog Single-->

</main><!-- End #main -->

<?php get_footer(); ?>