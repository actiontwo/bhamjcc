<?php
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
 
 
get_template_part( 'templates/header' ); ?>

	 
        <!-- ===== Start Programe Page ===== -->
        <section class="programe_single">
        	<!-- Single Banner -->
        	<div class="single_banner">
            
            </div>
            <!-- End Single Banner -->
            
            <!-- Programe Single Content -->
            <div class="programe_single_content">
            	<div class="container">
                	<div class="row">
                    	<!-- Single Side Buttons -->
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
<span><?php the_field('icon_title_1'); ?></span>
</a>
<?php } ?>


<?php $link1 = get_field( 'icon_title_link2' );  
if (!empty($link1)) { ?>
<a class="blue" href="<?php the_field('icon_title_link2'); ?>">
<?php the_field('add_icon_2'); ?>
<span><?php the_field('icon_title_2'); ?></span>
</a>
<?php } ?>


<?php $link1 = get_field( 'icon_title_link3' );  
if (!empty($link1)) { ?>
<a class="green" href="<?php the_field('icon_title_link3'); ?>">
<?php the_field('add_icon_3'); ?>
<span><?php the_field('icon_title_3'); ?></span>
</a>
<?php } ?>
                            
                     
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
                                    	<h1><?php the_title();?></h1>
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
                                <div class="featured_boxes">
                                	<div class="row">
                                    <?php echo do_shortcode( '[recent_products per_page="3" columns="4"]' ); ?>
                                
                                    </div>
                                </div>
                                <!-- End Featured Boxes -->
                                
                                <!-- Client Testimonial -->
                                <div class="client_testi">
                                	<h1>Featured Client Testimonial</h1>
                                    
                                    <!-- Testi Box -->
                                    <div class="client_testi_box">
                                    	<div class="row">
                                        	<!-- Testi Image -->
                                        	<div class="col-md-4 col-sm-4 padding_zero">
                                            	<div class="testi_image">
                                                	<img src="<?php bloginfo("template_url");?>/assets-web/images/testi3.jpg" alt="Image" title="Image" />
                                                </div>
                                            </div>
                                            <!-- End Testi Image -->
                                            
                                            <!-- Testi Text -->
                                        	<div class="col-md-8 col-sm-8 padding_zero">
                                            	<div class="testi_text">
                                                	<h4>Client Name</h4>
                                                    <h6>Romeoville, IL</h6>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
                                                </div>
                                            </div>
                                            <!-- End Testi Text -->
                                        </div>
                                    </div>
                                    <a href="#" class="view_all">View All Testimonials</a>
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