<?php
/*
 * Template Name: A Static Page
 */
get_header(); ?>


   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
<div class="main">	

        
           <?php the_content(); ?>
    </div> 
  <?php endwhile; endif; ?>
 
  
<?php get_footer(); ?>