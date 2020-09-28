<?php /*Template Name: Internal Page Template*/ ?>

<?php get_header(); ?>

<div class="main-content">
  <div class="white-banner">
  </div>
  <div class="single-post-header mb-5">
  </div>
  <div class="container">
          <?php
            if(have_posts()){
              while(have_posts()){
                the_post();?>
                <?php the_content();
              }
            }
          ?>
        </div>
</div>

<?php get_footer(); ?>
