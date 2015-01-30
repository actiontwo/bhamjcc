<?php
/**
 * The template for displaying Search Results pages
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
              <?php the_post_thumbnail(); ?>
            </div>
            
            <!-- End Single Image --> 
            
            <a class="pink" href="<?php bloginfo('url'); ?>/program-registration/"> <i class="fa fa-check-square-o"></i> <span> Register </span> </a> <a class="blue" href="<?php bloginfo('url'); ?>/schedules/"> <i class="fa fa-calendar"></i> <span> Schedule </span> </a> <a class="green" href="<?php bloginfo('url'); ?>/landing-page-two/"> <i class="fa fa-tag"></i> <span> Try The J </span> </a> </div>
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
            
            <!-- Featured Boxes -->
            
            <?php /*?><div class="featured_boxes">
              <div class="row"> <?php echo do_shortcode( '[recent_products per_page="3" columns="4"]' ); ?> </div>
            </div><?php */?>
            <div class="featured_boxes">
                                	<div class="row">
                                    
                                    
                                           <?php 
					   
$snumber = get_field('related_products_posts',$queried_object);
					   
	 if (!empty ($snumber)) { ?>

<?php 

$posts = get_field('related_products_posts');

if( $posts ): ?>
    
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
<div class="col-md-4 col-sm-4">
<div class="mission_box">
<span class="overlay">
<a href="<?php the_permalink(); ?>" class="more_info">More Info</a>
</span>
<?php the_post_thumbnail('medium'); ?>
<h4><?php the_title(); ?></h4>
<a href="" class="see_all">Sub Title</a>
</div>
</div>
    <?php endforeach; ?>
  
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>



<?php 

$posts = get_field('related_products_products');

if( $posts ): ?>
    
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>


<div class="col-md-4 col-sm-3">

                                    <div class="mission_box join_today">

                                    <span class="overlay">

                                        

                                            <form class="cart" method="post" enctype='multipart/form-data'>

	 	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>



	 	<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />



	 	<button type="submit" class="cart-simple"><?php echo $product->single_add_to_cart_text(); ?></button>



		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

	</form>

                                        	<a href="<?php the_permalink(); ?>" class="more_info">More Info</a>

                                        </span>

	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>





		<?php

			/**

			 * woocommerce_before_shop_loop_item_title hook

			 *

			 * @hooked woocommerce_show_product_loop_sale_flash - 10

			 * @hooked woocommerce_template_loop_product_thumbnail - 10

			 */

			do_action( 'woocommerce_before_shop_loop_item_title' );

		?>



        <h4><?php echo $product->get_price_html(); ?></h4>

         

         <a href="<?php the_permalink(); ?>" class="see_all"><?php the_title();?></a>













        </div>

                                </div>



    <?php endforeach; ?>
  
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>

<?php } else { ?>
  
                   <div class="row"> <?php echo do_shortcode( '[recent_products per_page="3" columns="4"]' ); ?> </div>

<?php } ?>
                                    
                                    
                                    
                                      


                                
                                    </div>
                                </div>
            
            <!-- End Featured Boxes --> 
            
            <!-- Client Testimonial -->
            
            <div class="client_testi">
              <h1>Featured Member</h1>
              
              <!-- Testi Box -->
              
              <div class="client_testi_box">
                <div class="row"> 
                  
                  
                  
                  <?php 
					   
$sadv = get_field('featured_testi_select',$queried_object);
					   
	 if (!empty ($sadv)) { ?>

  <?php 

$posts = get_field('featured_testi_select');

if( $posts ): ?>
    
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
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
                  
                    <?php endforeach; ?>
  
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>

<?php } else { ?>
  <?php $args = array( 'post_type'=> 'testimonials','posts_per_page' => 1,'post' => ( get_query_var('paged') ? get_query_var('paged') : 1 ) ); query_posts( $args ); if (have_posts()) : while (have_posts()) : the_post();?>
  
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
            <?php  else:  ?>
            <?php endif; wp_reset_query(); ?>

<?php } ?>
                  
                  
                  
                  
                
                  
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
