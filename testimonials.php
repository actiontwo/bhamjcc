<?php
/**
 * Template Name: Testimonials Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
 
 
get_template_part( 'templates/header' ); ?>

	 <section class="programe_single">
      
            
            <!-- Programe Single Content -->
            <div class="programe_single_content2">
            	<div class="container">
                	<div class="row">
                    	<!-- Single Side Buttons -->
                    	
                        <!-- End Single Side Buttons -->
                        
                        <!-- Single Main Content -->
                    	<div class="col-md-9 col-sm-8">
                        	<div class="single_main_content">
                            	<!-- Training Area -->
                                
                                <!-- End Training Area -->
                                
                                <!-- Featured Boxes -->
                                
                                <!-- End Featured Boxes -->
                                
                                <!-- Client Testimonial -->
                                <div class="client_testi">
                                	<h1>Featured Clients</h1>
                                
                                
                                
                                <?php $args = array( 'post_type'=> 'testimonials','post' => ( get_query_var('paged') ? get_query_var('paged') : 1 ) ); query_posts( $args ); if (have_posts()) : while (have_posts()) : the_post();?>
                                    
                                    <!-- Testi Box -->
                                    <div class="client_testi_box">
                                    	<div class="row">
                                        	<!-- Testi Image -->
                                        	<div class="col-md-4 col-sm-4 padding_zero">
                                            	<div class="testi_image">
                                                	<?php the_post_thumbnail(); ?>
                                                </div>
                                            </div>
                                            <!-- End Testi Image -->
                                            
                                            <!-- Testi Text -->
                                        	<div class="col-md-8 col-sm-8 padding_zero">
                                            	<div class="testi_text">
                                                
                                                     <h4><?php the_title(); ?></h4>
                                    <?php echo content(25); ?>
                                                    
                                                </div>
                                            </div>
                                            <!-- End Testi Text -->
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <!-- End Testi Box -->
                                                                                                              
<?php endwhile; ?>
<?php  else:  ?>
<?php endif; wp_reset_query(); ?> 
                                </div>
                                <!-- End Client Testimonial -->
                            </div>
                        </div>
                        <!-- End Single Main Content -->
                        <div class="col-md-3">
                    	<div class="side_bar join_side_bar">
                       
                            
                            <!-- Contact Form -->
                            <div class="side_contact_form">
                            	<div class="form_heading">
                                    <h3> CONTACT US </h3>
                                    <h6>FOR IMMIDIATE RESPONSE:</h6>
                                </div>
                                    
                                <?php echo do_shortcode( '[contact-form-7 id="105" title="Contact Form Shop Products Page"]' ); ?>
                            </div>
                            <!-- End Contact Form -->
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- End Programe Single Content -->
        </section>
        

<?php get_template_part( 'templates/footer'); ?>