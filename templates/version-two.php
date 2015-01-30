<?php

/**

 * Template Name: Version Two

 *

 * @package WordPress

 * @subpackage Twenty_Fourteen

 * @since Twenty Fourteen 1.0

 */

 

 

 

get_template_part( 'templates/header' ); ?>

<!-- ===== Start Programe Page ===== -->

<section class="programe_single">
  
  <!-- Single Banner -->
  
  
  
<?php 
					   
$sadv = get_field('change_colour',$queried_object);
					   
	 if (!empty ($sadv)) { ?>

	 <div class="single_banner" style="background:<?php the_field('change_colour'); ?>;"> </div>

<?php } else { ?>
  
        <div class="single_banner" style="background:#79cbd3;"> </div>

<?php } ?>
  
  
  
  
  
  <!-- End Single Banner --> 
  
  <!-- Programe Single Content -->
  
  <div class="programe_single_content">
    <div class="container">
      <div class="row">
        <?php /*?><!-- Single Side Buttons -->
        
                <div class="col-md-3 col-sm-4">
          <div class="single_side_btns"> 
            
            <!-- Single Image -->
            
            <div class="single_side_image">
              <?php the_post_thumbnail(); ?>
            </div>
            
            <!-- End Single Image -->
            
            <?php $link1 = get_field( 'icon_title_link1' );  

if (!empty($link1)) { ?>
            <a class="pink" href="<?php the_field('icon_title_link1'); ?>">
            <?php the_field('add_icon_1'); ?>
            <span>
            <?php the_field('icon_title_1'); ?>
            </span> </a>
            <?php } ?>
            <?php $link1 = get_field( 'icon_title_link2' );  

if (!empty($link1)) { ?>
            <a class="blue" href="<?php the_field('icon_title_link2'); ?>">
            <?php the_field('add_icon_2'); ?>
            <span>
            <?php the_field('icon_title_2'); ?>
            </span> </a>
            <?php } ?>
            <?php $link1 = get_field( 'icon_title_link3' );  

if (!empty($link1)) { ?>
            <a class="green" href="<?php the_field('icon_title_link3'); ?>">
            <?php the_field('add_icon_3'); ?>
            <span>
            <?php the_field('icon_title_3'); ?>
            </span> </a>
            <?php } ?>
          </div>
        </div>
        
        <!-- End Single Side Buttons --> 
        <?php */?>
        
        <!-- Single Side Buttons -->
        
        <div class="col-md-3 col-sm-4">
          <div class="single_side_btns"> 
            
            <!-- Single Image -->
            
            <div class="single_side_image">
              <?php the_post_thumbnail('large'); ?>
            </div>
            
            <!-- End Single Image --> 
            
            <a class="pink" href="<?php bloginfo('url'); ?>/program-registration/"> <i class="fa fa-users"></i> <span> Register </span> </a> 
            <a class="blue" href="<?php bloginfo('url'); ?>/landing-page-two/"> <i class="fa fa-check-square-o"></i> <span> Join </span> </a>
             <a class="green" href="<?php bloginfo('url'); ?>/schedules/"> <i class="fa fa-calendar"></i> <span> FIT SCHEDULE </span> </a> 
             </div>
        </div>
        
        <!-- End Single Side Buttons --> 
        
        <!-- Single Main Content -->
        
        <div class="col-md-9 col-sm-8">
          <div class="single_main_content"> 
            
            <!-- Training Area -->
            
            <div class="training"> 
              
              <!-- Training Text -->
              
              <div class="training_text">
                <h1>
                  <?php the_title();?>
                </h1>
                <?php the_field('description'); ?>
              </div>
              
              <!-- End Training Text --> 
              
              <!-- Training Blue Area -->
              
              <div class="training_blue_area"> 
                
                <!-- Blue Area Text -->
                
                <div class="blue_area_text">
                  <div class="row"> 
                    
                    <!-- Blue Column -->
                    
                    <div class="col-md-4 col-sm-4">
                      <div class="blue_column">
                        <?php the_field('add_box_content_one'); ?>
                      </div>
                    </div>
                    
                    <!-- End Blue Column --> 
                    
                    <!-- Blue Column -->
                    
                    <div class="col-md-4 col-sm-4">
                      <div class="blue_column">
                        <?php the_field('add_box_content_two'); ?>
                      </div>
                    </div>
                    
                    <!-- End Blue Column --> 
                    
                    <!-- Blue Column -->
                    
                    <div class="col-md-4 col-sm-4">
                      <div class="blue_column">
                        <?php the_field('add_box_content_three'); ?>
                      </div>
                    </div>
                    
                    <!-- End Blue Column --> 
                    
                  </div>
                </div>
                
                <!-- End Blue Area Text --> 
                
              </div>
              
              <!-- End Blue Area --> 
              
            </div>
            
            <!-- End Training Area --> 

            
            <!-- Client Testimonial -->
            
            <div class="client_testi">
              <h1>Featured Member</h1>
              
              <!-- Testi Box -->
              
              <div class="client_testi_box">
                <div class="row"> 
                  
                  
                  
                <?php $sticky = get_option( 'sticky_posts' );







$args = array(







'post_type' => 'testimonials',







'posts_per_page' => 1,







'post__in'  => $sticky,







'ignore_sticky_posts' => 1







);







$the_query = new WP_Query( $args ); ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                  <!-- Testi Image -->
                  
                  <div class="col-md-4 col-sm-4 padding_zero">
                    <div class="testi_image">  <?php the_post_thumbnail(); ?> </div>
                  </div>
                  
                  <!-- End Testi Image --> 
                  
                  <!-- Testi Text -->
                  
                  <div class="col-md-8 col-sm-8 padding_zero">
                    <div class="testi_text">
                      <h4><?php the_title(); ?></h4>
                      <h6><?php the_field('position'); ?></h6>
                      <?php the_content(); ?>
                    </div>
                  </div>
                  
                  <!-- End Testi Text --> 
                  
          <?php endwhile; ?>
            <?php endif; ?>
    
                  
                  
                  
                
                  
                </div>
              </div>
              
              <!-- <a href="#" class="view_all">View All Testimonials</a>-->
              
              <div class="clear"></div>
              
              <!-- End Testi Box --> 
              
            </div>
            
            <!-- End Client Testimonial --> 
            
          </div>
        </div>
        
        <!-- End Single Main Content --> 
        
      </div>
    </div>
  </div>
  
  <!-- End Programe Single Content --> 
  
</section>

<!-- ===== End Programe Page ===== -->

<?php get_template_part( 'templates/footer'); ?>