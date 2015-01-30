<?php

/**

 * Template Name: Events Page

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
 
          <ul class="events_ul">
            <?php $args = array( 'post_type'=> 'events','posts_per_page' => 30,'events_category'=>'events' ); query_posts( $args ); if (have_posts()) : while (have_posts()) : the_post();?>
            <li>
              <div class="date_box">
                 <h6><?php the_field('month'); ?> <span><?php the_field('date'); ?></span></h6>
              </div>
               
              <div class="tab_text">
              <div class="tab_image">
                <?php the_post_thumbnail('thumbnail'); ?>
              </div>
                <h5>
                  <?php the_title(); ?>
                </h5>
                <?php the_content(); ?> </div>
                <a href="<?php the_field('add_custom_url'); ?>" class="view_all">View Event</a>
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