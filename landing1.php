<?php
/**
 * Template Name: Landing Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


        <!-- ===== Start Content ===== -->
        <section class="content">
        	<div class="container">
            	<!-- Content Left -->
            	<div class="col-md-7">
                	<div class="content_box">
                        <h4><?php the_field('heading_one'); ?></h4>
                        <h5><?php the_field('sub_title_heading_two'); ?></h5>
                        <?php the_field('bullets'); ?>
                        <h3><?php the_field('summary_lines'); ?></h3>
                        
                        <!-- Call Num -->
                        <div class="call_num">
                            <a href="#"><?php the_field('phone_number'); ?></a>
                            <h6><?php the_field('address_or_supporting_text'); ?></h6>
                        </div>
                        <!-- End Call Num -->
                        
                        <!-- Left Bottom Text -->
                        <div class="bottom_text">
                            <p><a href="<?php the_field('link'); ?>">Click here</a> <?php the_field('link_text'); ?> </p>
                            <h4><?php the_field('link_supporting_text'); ?></h4>
                        </div>
                        <!-- End Left Bottom Text -->
                    </div>
                </div>
                <!-- End Content Left -->
                
                <!-- Side Bar -->
            	<div class="col-md-5">
                	<div class="side_bar">
                    	<!-- Side Form -->
                    	<div class="side_form">
                            <h5><?php the_field('form_line_one'); ?></h5>
                            <h6><?php the_field('form_line_two'); ?></h6>
                             <?php echo do_shortcode('[contact-form-7 id="5" title="Landing Page One Form"]'); ?>
                        </div>
                        <!-- End Side Form -->
                        
                        <!-- Side Payment -->
                        <div class="payment_box">
                        	<div class="border_box">
                            	<div class="main_box">
                                	<a href="<?php the_field('redeem'); ?>"><?php the_field('redeem_link_text'); ?></a>
                                    <h6><?php the_field('redeem_link_text_two'); ?></h6>
                                    <h1><?php the_field('deal_summary_one'); ?> <span><?php the_field('deal_summary_two'); ?></span></h1>
                                    <p><?php the_field('final_print'); ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Side Payment -->
                    </div>
                </div>
                <!-- End Side Bar -->
            </div>
        </section>
        <!-- ===== End Content ===== -->
        
    
    
    
<?php get_footer();
