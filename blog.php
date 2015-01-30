<?php

/**

 * Template Name: Blog Page

 *

 * @package WordPress

 * @subpackage Twenty_Fourteen

 * @since Twenty Fourteen 1.0

 */

 

 

 

get_template_part( 'templates/header' ); ?>

<section class="blogevents">
<div class="container">


<!-- Tabs -->

<div class="blogevents_box">
 
          <ul>
            <?php $args = array( 'post_type'=> 'news','posts_per_page' => 3,'post' => ( get_query_var('paged') ? get_query_var('paged') : 1 ) ); query_posts( $args ); if (have_posts()) : while (have_posts()) : the_post();?>
            <li>
              <div class="date_box">
                <h6><?php echo get_the_date('M'); ?> <span><?php echo get_the_date('d'); ?></span></h6>
              </div>
              <div class="tab_text">
                <h5>
                  <?php the_title(); ?>
                </h5>
                <span><?php echo get_the_date('M d,Y'); ?></span> <?php echo content(25); ?> </div>
                   <a href="<?php the_permalink(); ?>" class="view_all">View This Post</a>
                   <div class="clear"></div>
            </li>
            <?php endwhile; ?>
            <?php  else:  ?>
            <?php endif; wp_reset_query(); ?>
          </ul>
      

<!-- End Tabs --> 

<!-- Sponsers -->



</div></div>
</section>



<?php get_template_part( 'templates/footer'); ?>