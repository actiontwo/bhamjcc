<?php
/**
 * Template Name: Landing Page Two
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header('lp2'); ?>
 
       <!-- ===== Start Deal Form Area ===== -->
        <section class="body_lp2_deal">
        	<div class="container">
            	<div class="row">
                	<!-- Empty Column -->
                	<div class="col-md-5">
                    </div> 
                    <!-- End Empty Column -->
                    
                    <!-- Deal Form -->
                	<div class="col-md-7">
                    	<div class="body_lp2_deal_form_box">
                            <h6><?php the_field('backend_form_line_1'); ?></h6>
                            <h4><?php the_field('backend_deal_form_line_2'); ?></h4>
                            
                            <form>
                            	<input type="text" placeholder="Name:" required />
                            	<input type="email" placeholder="E-mail Address:" required />
                            	<input type="submit" value=""/>
                            </form>
                        </div>
                    </div> 
                    <!-- End Deal Form -->
                </div>
            </div>
        </section>
        <!-- ===== End Deal Form Area ===== -->
        
        <!-- ===== Start Three Box ===== -->
        <section class="body_lp2_three_box">
        	<div class="container">
            	<div class="row">
                	<!-- Color Box 1 -->
                	<div class="col-md-4">
                    	<div class="body_lp2_color_box body_lp2_pink">
                        	<i class="fa fa-medkit"></i>
                        	<!-- Color Box Text -->
                        	<div class="body_lp2_color_box_text">
                            	<h6><?php the_field('backend_point_1'); ?></h6>
                                <p><?php the_field('backend_body_1'); ?></p>
                            </div>
                            <!-- End Color Box Text -->
                        </div>
                    </div>
                    <!-- End Color Box 1 -->
                    
                    <!-- Color Box 2 -->
                	<div class="col-md-4">
                    	<div class="body_lp2_color_box body_lp2_blue">
                        	<i class="fa fa-heart"></i>
                        	<!-- Color Box Text -->
                        	<div class="body_lp2_color_box_text">
                            	<h6><?php the_field('backend_point_2'); ?></h6>
                                <p><?php the_field('backend_body_2'); ?></p>
                            </div>
                            <!-- End Color Box Text -->
                        </div>
                    </div>
                    <!-- End Color Box 2 -->
                    
                    <!-- Color Box 3 -->
                	<div class="col-md-4">
                    	<div class="body_lp2_color_box body_lp2_green">
                        	<i class="fa fa-money"></i>
                        	<!-- Color Box Text -->
                        	<div class="body_lp2_color_box_text">
                            	<h6><?php the_field('backend_point_3'); ?></h6>
                                <p><?php the_field('backend_body_3'); ?></p>
                            </div>
                            <!-- End Color Box Text -->
                        </div>
                    </div>
                    <!-- End Color Box 3 -->
                </div>
            </div>
        </section>
        <!-- ===== End Three Box ===== -->
        
        <!-- ===== Start About ===== -->
        <section class="body_lp2_about">
        	<div class="container">
            	<div class="row">
                	<!-- About Image -->
                	<div class="col-md-6">
                    	<div class="body_lp2_about_image">
                        	<img src="<?php the_field('backend_offer_image'); ?>" />
                        </div>
                    </div>
                    <!-- End About Image -->
                    
                    <!-- About Text -->
                	<div class="col-md-6">
                    	<div class="body_lp2_about_text">
                            <h5><?php the_field('offer_line_1'); ?></h5>
                            <h6><?php the_field('offer_line_2'); ?></h6>
                            <?php the_field('body_text_offer'); ?>
                            <a href="#">Wiretap Our Facebook</a>
                        </div>
                    </div>
                    <!-- End About Text -->
                </div>
            </div>
        </section>
        <!-- ===== End About ===== -->
        
        <!-- ===== Start Community ===== -->
        <section class="body_lp2_community">
        	<div class="container">
            	<!-- Intro Text -->
            	<div class="body_lp2_intro">
                    <h4>AROUND THE <span>J</span></h4>
                    <h5>Levite Jewish Community Center</h5>
                </div>
                <!-- End Intro Text -->
                
                <!-- Community Boxes -->
                <div class="body_lp2_community_boxes">
                	<div class="row">
                    	<!-- Community Box 1 -->
                    	<div class="col-md-3 col-sm-6">
                        	<div class="body_lp2_comu_box">
                            	<img src="<?php bloginfo("template_url");?>/images/lp2_comunity1.jpg" alt="Image" title="Image" />
                                <h4>Swim Lessons</h4>
                                <a href="#" class="body_lp2_see_all">See All Programes</a>
                            </div>
                        </div>
                        <!-- End Community Box 1 -->
                        
                        <!-- Community Box 2 -->
                    	<div class="col-md-3 col-sm-6">
                        	<div class="body_lp2_comu_box">
                            	<img src="<?php bloginfo("template_url");?>/images/lp2_comunity2.jpg" alt="Image" title="Image" />
                                <h4>Food Fest Prep</h4>
                                <a href="#" class="body_lp2_see_all">See All Programes</a>
                            </div>
                        </div>
                        <!-- End Community Box 2 -->
                        
                        <!-- Community Box 3 -->
                    	<div class="col-md-3 col-sm-6">
                        	<div class="body_lp2_comu_box">
                            	<img src="<?php bloginfo("template_url");?>/images/lp2_comunity3.jpg" alt="Image" title="Image" />
                                <h4>Food Fest Prep</h4>
                                <a href="#" class="body_lp2_see_all">See All Programes</a>
                            </div>
                        </div>
                        <!-- End Community Box 3 -->
                        
                        <!-- Community Box 4 -->
                    	<div class="col-md-3 col-sm-6">
                        	<div class="body_lp2_comu_box">
                            	<img src="<?php bloginfo("template_url");?>/images/lp2_comunity4.jpg" alt="Image" title="Image" />
                                <h4>Bodypump Class</h4>
                                <a href="#" class="body_lp2_see_all">See All Programes</a>
                            </div>
                        </div>
                        <!-- End Community Box 4 -->
                    </div>
                </div>
                <!-- End Community Boxes -->
                
                <!-- Donate Btn -->
                    <div class="body_lp2_donate_box">
                    	<a href="#" class="body_lp2_donate_btn">Donate to the</a>
                    </div>
                <!-- End Donate Btn -->
            </div>
        </section>
        <!-- ===== End Community ===== -->
    
    
    
<?php get_footer('lp2');
