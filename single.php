<?php get_header(); ?>

<div class="main-content">
  <div class="white-banner">
  </div>
  <div class="single-post-header">
  </div>
  <div class="container mt-5">
  <?php
    if(have_posts()){
      while(have_posts()){
        the_post(); ?>
      <!--  <div class="post-feature">
          <?php the_post_thumbnail(); ?>
        </div>-->
        <!--<h2 class="post-title"><?php the_title(); ?></h2>-->
        <!--<p><?php echo "Published: " . get_the_date(); ?></p>-->
        <!--<p><?php echo "This post is written by : " . get_the_author(); ?></p>-->
          <?php the_content(); ?>

        <div class="pagination-single">
          <?php previous_post_link('%link', '<< Previous Post');?>
        </div>

        <div class="pagination-single">
          <?php next_post_link('%link', 'Next Post >>');?>
        </div>

        <?php
      }
    }
    if (comments_open() || get_comments_number()):
      comments_template();
    endif;
  ?>
  </div>
</div>
<style>
.head-text {
  color:#fff !important;
}
</style>
<?php get_footer(); ?>
