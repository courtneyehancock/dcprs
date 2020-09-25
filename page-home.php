<?php /*Template Name: Home Page Template*/ ?>

<?php get_header(); ?>

<div class="main-content">
  <div class="white-banner">
  </div>
          <?php
            if(have_posts()){
              while(have_posts()){
                the_post();?>
                <?php the_content();
              }
            }
          ?>
</div>

<?php get_footer(); ?>
