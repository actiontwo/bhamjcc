<?php
/**
 * Template Name: Programme Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
 
 
get_template_part( 'templates/header' ); ?>

	





<section class="wellness">
        	<div class="container">
            	<div class="row">
                	<!-- Wellness Boxes -->
                	<div class="col-md-8">
                    	<div class="wellness_boxes">
                        	<h1><?php the_title(); ?></h1>
                            <div class="row">
                            	<!-- Mission Box -->
                            	
                                
                                
                                 <?php 

$posts = get_field('related_products_cat');

if( $posts ): ?>
    
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>

<div class="col-md-6 col-sm-6">

                                    <div class="mission_box">
                                    	 <span class="overlay">
                                            <a href="<?php the_permalink(); ?>" class="more_info">Read More</a>
                                        </span>
                                        <?php the_post_thumbnail(); ?>
                                        <a href="<?php the_permalink(); ?>" class="see_all"><?php the_title(); ?></a>
                                    </div>

</div>
                                <!-- End Mission Box -->
    <?php endforeach; ?>
  
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
                                
                                
                            	
                            
                         <?php /*?>   <div class="bottom_anchors">
                            	<a href="#" class="programe_anchor">More Programs</a>
                            	<a href="#" class="payment_anchor">No Payments Until March</a>
                            </div><?php */?>
                        </div>
                    </div>
                    <!-- End Wellness Boxes -->
                    </div>
                    <!-- Side Bar -->
                	<div class="col-md-4">
                    	<div class="side_bar join_side_bar">
                            <!-- Accordion begin -->
                            <div class="accordion_example2">
                                <!-- Section 1 -->
                                <div class="accordion_in acc_active">
                                    <div class="acc_head"><h3>Join Today</h3></div>
                                    <div class="acc_content">
                                    	<ul>
                                        	<li><a href="#">Membership Type</a></li>
                                        	<li><a href="#">Camps</a></li>
                                            <li><a href="#">Membership Offers</a></li>
                                        </ul>
                                  	</div>
                                </div>
                                <!-- End Section 1 -->
                            </div>
                            <!-- Accordion end -->
                            
                            <!-- Contact Form -->
                            <div class="side_contact_form">
                            	<div class="form_heading">
                                    <h3> CONTACT US </h3>
                                    <h6>FOR IMMEDIATE RESPONSE:</h6>
                                </div>
                                    
                                <?php echo do_shortcode( '[contact-form-7 id="105" title="Contact Form Shop Products Page"]' ); ?>
                            </div>
                            <!-- End Contact Form -->
                        </div>
                    </div>
                    
                    <!-- End Side Bar -->
                </div>
            </div>
        </section>
    
    

<?php get_template_part( 'templates/footer'); ?>