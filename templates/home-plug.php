<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_template_part( 'templates/header' ); ?>

 
        <!-- ===== Start Slider ===== -->
        <div class="slide_show">
            <ul class="bxslider">
            
            
              <?php
if ( function_exists( 'ot_get_option' ) ) {

/* get the slider array */
$slides = ot_get_option( 'slide', array() );

if ( ! empty( $slides ) ) {
foreach( $slides as $slide ) {
echo '
<li>
<img src="' . $slide['image'] . '" alt="' . $slide['title'] . '" />
</li>';
}
}

}

?>
   
            
     
            </ul>
            <div class="alert_box">
                <div class="container">
                
                
                    <div role="alert" class="alert alert-warning alert-dismissible fade in">
                        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
                        <p><strong>Holy guacamole!</strong> Best check yo self, you're not looking too good. </p>
                    </div>
                    
                    
                    
                </div>
            </div>
            <div class="slider_text">
            	<div class="container">
                	<div class="row">
                    	<div class="col-md-10 col_center">
                            <div class="slider_text_main">
                                <?php echo ot_get_option( 'slide_text' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===== End Slider ===== -->
   
        <!-- ===== Start Four Boxes ===== -->
        <section class="four_boxes">
        	<div class="container">
            	<div class="row">
                	<!-- Box 1 -->
                	<div class="col-md-3 padding">
                    	<div class="pink_box">
                        	<h5><a href="#"><i class="fa fa-users"></i> Members</a></h5>
                        </div>
                    </div>
                    <!-- End Box 1 -->
                    
                	<!-- Box 2 -->
                	<div class="col-md-3 padding">
                    	<div class="blue_box">
                        	<h5><a href="<?php bloginfo('url'); ?>/shop" target="_blank"><i class="fa fa-check-square-o"></i> Join Today</a></h5>
                        </div>
                    </div>
                    <!-- End Box 2 -->
                    
                	<!-- Box 3 -->
                	<div class="col-md-3 padding">
                    	<div class="green_box">
                        	<h5><a href="<?php bloginfo('url'); ?>/shop"target="_blank"><i class="fa fa-tags"></i> Shop</a></h5>
                        </div>
                    </div>
                    <!-- End Box 3 -->
                    
                	<!-- Box 4 -->
                	<div class="col-md-3 padding">
                    	<div class="pink_box_last">
                        	<h5><a href="#"><i class="fa fa-calendar"></i> Schedules</a></h5>
                        </div>
                    </div>
                    <!-- End Box 4 -->
                </div>
            </div>
        </section>
        <!-- ===== End Four Boxes ===== -->
        
        <!-- ===== Start Tabs & Sponsers ===== -->
        <section class="tabs_sponsers">
        	<div class="container">
            	<div class="row">
                	<!-- Tabs -->
                	<div class="col-md-8">
                        <div class="tabs_box">
                            <div class="bs-example bs-example-tabs">
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="active"><a data-toggle="tab" href="#blog">Blog</a> <i class="fa fa-caret-down"></i>
</li>
                                    <li class=""><a data-toggle="tab" href="#feed">Social Feed</a> <i class="fa fa-caret-down"></i>
</li>
    
                                    <li class=""><a data-toggle="tab" href="#events">Events</a> <i class="fa fa-caret-down"></i>
</li>
                                </ul>                                                
                                <div class="tab-content" id="myTabContent">
                                    <div id="blog" class="tab-pane fade active in">
                                    	<ul>
<?php $args = array( 'post_type'=> 'blog','posts_per_page' => 3,'post' => ( get_query_var('paged') ? get_query_var('paged') : 1 ) ); query_posts( $args ); if (have_posts()) : while (have_posts()) : the_post();?>

							<li>
                                            	<div class="date_box">
                                                	<h6><?php echo get_the_date('M'); ?> <span><?php echo get_the_date('d'); ?></span></h6>
                                                </div>
                                            	<div class="tab_text">
                                                	<h5><?php the_title(); ?></h5>
                                                    <span><?php echo get_the_date('M d,Y'); ?></span>
                                                    <?php echo content(25); ?>
                                                </div>
                                            </li>
                                            
                                            
<?php endwhile; ?>
<?php  else:  ?>
<?php endif; wp_reset_query(); ?> 
                                        	
                                        </ul>
                                        <a href="#" class="view_all">View All</a>
                                    </div>
                                    <div id="feed" class="tab-pane fade">
                                    	<ul>
                                        <?php echo do_shortcode( '[fts facebook id=235045286515031 posts_displayed=page_only type=page]' ); ?>
                                        	
                                        </ul>
                                        <a href="#" class="view_all">View All</a>
                                    </div>
                               
                                    <div id="events" class="tab-pane fade">
                                    	<ul>
<?php $args = array( 'post_type'=> 'events','posts_per_page' => 3,'post' => ( get_query_var('paged') ? get_query_var('paged') : 1 ) ); query_posts( $args ); if (have_posts()) : while (have_posts()) : the_post();?>

							<li>
                                            	<div class="date_box">
                                                	<h6><?php echo get_the_date('M'); ?> <span><?php echo get_the_date('d'); ?></span></h6>
                                                </div>
                                            	<div class="tab_text">
                                                	<h5><?php the_title(); ?></h5>
                                                    <span><?php echo get_the_date('M d,Y'); ?></span>
                                                    <?php echo content(25); ?>
                                                </div>
                                            </li>
                                            
                                            
<?php endwhile; ?>
<?php  else:  ?>
<?php endif; wp_reset_query(); ?> 
                                        	
                                        </ul>
                                        <a href="#" class="view_all">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Tabs -->
                    
                    <!-- Sponsers -->
                	<div class="col-md-4">
                    	<div class="sponser_box">
                            <div class="side_contact_form">
                            	<div class="form_heading">
                                    <h3> CONTACT US </h3>
                                    <h6>FOR IMMIDIATE RESPONSE:</h6>
                                </div>
                                <?php echo do_shortcode( '[contact-form-7 id="105" title="Contact Form Shop Products Page"]' ); ?>
                            </div>
                        </div>
                    </div>
                    <!-- End Sponsers -->
                </div>
            </div>
        </section>
        <!-- ===== End Tabs & Sponsers ===== -->
        
        <!-- ===== Start Video ===== -->
        <section class="video_area">
        	<div class="container">
            	<div class="row">
                	<!-- Video -->
                	<div class="col-md-5">
                    	<div class="video">
                        	<img src="<?php bloginfo("template_url");?>/assets-web/images/video_screen.png" alt="Image" title="Image" />
                            <iframe name="someFrame" id="someFrame"></iframe>
                        </div>
                    </div>
                    <!-- End Video -->
                    
                    <!-- Video Text -->
                	<div class="col-md-7">
                    	<div class="video_text">
                        	<img src="<?php bloginfo("template_url");?>/assets-web/images/arrow.png" alt="Image" title="Image" />
                        	<h1>Latest <strong>Video</strong></h1>
                            <h6>Lorem Ipsum is simply dummy text of the printing </h6>
                            <div class="videos_small">
                            	<ul>
                                	<li>
                                    	<div class="video_thmb">
                                        	<a href="http://player.vimeo.com/video/105640283?title=0&byline=0&portrait=0rel=0&autoplay=1" target="someFrame">
                                            	<span class="overlay"><i class="fa fa-play"></i></span>
                                            </a>
                                    		<img src="<?php bloginfo("template_url");?>/assets-web/images/video_thmb1.jpg" alt="Video Thumbnail" title="Video Thumbnail" />
                                        </div>
                                    	<h6>Video Title</h6>
                                    </li>
                                	<li>
                                    	<div class="video_thmb">
                                        	<a href="http://player.vimeo.com/video/105640283?title=0&byline=0&portrait=0rel=0&autoplay=1" target="someFrame">
                                            	<span class="overlay"><i class="fa fa-play"></i></span>
                                            </a>
                                    		<img src="<?php bloginfo("template_url");?>/assets-web/images/video_thmb2.jpg" alt="Video Thumbnail" title="Video Thumbnail" />
                                        </div>
                                    	<h6>Video Title</h6>
                                    </li>
                                	<li>
                                    	<div class="video_thmb">
                                        	<a href="http://player.vimeo.com/video/105640283?title=0&byline=0&portrait=0rel=0&autoplay=1" target="someFrame">
                                            	<span class="overlay"><i class="fa fa-play"></i></span>
                                            </a>
                                    		<img src="<?php bloginfo("template_url");?>/assets-web/images/video_thmb3.jpg" alt="Video Thumbnail" title="Video Thumbnail" />
                                        </div>
                                    	<h6>Video Title</h6>
                                    </li>
                                	<li>
                                    	<div class="video_thmb">
                                        	<a href="http://player.vimeo.com/video/105640283?title=0&byline=0&portrait=0rel=0&autoplay=1" target="someFrame">
                                            	<span class="overlay"><i class="fa fa-play"></i></span>
                                            </a>
                                    		<img src="<?php bloginfo("template_url");?>/assets-web/images/video_thmb4.jpg" alt="Video Thumbnail" title="Video Thumbnail" />
                                        </div>
                                    	<h6>Video Title</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Video Text -->
                </div>
            </div>
        </section>
        <!-- ===== End Video ===== -->
        
        <!-- ===== Start Testimonials ===== -->
        <section class="testimonials">
        	<div class="container">
            	<div class="row">
                	<!-- Testi Slider -->
                	<div class="col-md-9">
                    	<div class="main_testi_box">
                            <div id="owl-demo" class="owl-carousel owl-theme">
                                
                                
                                
                                <?php $args = array( 'post_type'=> 'testimonials','post' => ( get_query_var('paged') ? get_query_var('paged') : 1 ) ); query_posts( $args ); if (have_posts()) : while (have_posts()) : the_post();?>
                                
                                
                                
                                <div class="item">
                                    <div class="testi_box_img">
                                       <?php the_post_thumbnail(); ?>
                                    </div>
                                    <h6><?php the_title(); ?></h6>
                                    <?php echo content(25); ?>
                                </div>
                                
                                
                                                                           
<?php endwhile; ?>
<?php  else:  ?>
<?php endif; wp_reset_query(); ?>  
                                
                            </div>
                        </div>
                    </div>
                    <!-- End Testi Slider -->
                    
                    <!-- Title & View All -->
                	<div class="col-md-3 padding_zero">
                    	<div class="testi_heading">
                        	<h3>Client</h3>
                            <h4>Testimonials</h4>
                        </div>
                        <div class="view_all_testi">
                        	<a href="<?php bloginfo('url'); ?>/testimonials/" target="_blank">View All</a>
                        </div>
                    </div>
                    <!-- End Title & View All -->
                </div>
            </div>
        </section>
        <!-- ===== End Testimonials ===== -->
        
        <!-- ===== Start Mission ===== -->
        <section class="mission">
        	<div class="container">
            	<!-- Intro Text -->
            	<div class="intro">
                	<h1><mark>FEATURED</mark></h1>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h6>
                </div>
                <!-- End Intro Text -->
                
                <div class="row">
                <?php
        $args = array( 'post_type' => 'product', 'instock' => 1, 'posts_per_page' => 8,'orderby' =>'rand','order' => 'DESC' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
               <div class="col-md-3 col-sm-3">
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
                    <?php endwhile; ?>
    <?php wp_reset_query(); ?> 
                                  
                               
                	
                </div>
                
            </div>
        </section>
        <!-- ===== End Mission ===== -->
        



<?php get_template_part( 'templates/footer'); ?>
