<?php
/**
 * Template Name: Version One
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
 
 get_template_part( 'templates/header' ); ?>

       <!-- ===== Start Wellness ===== -->
        <section class="wellness">
        	<div class="container">
            	<div class="row">
                	<!-- Wellness Boxes -->
                	<div class="col-md-8">
                    
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>        
                    	<div class="wellness_boxes">
                        	 <h1><?php the_title();?></h1>
                            
                            <!-- Big Image -->
                            <div class="big_image">
                            	<?php the_post_thumbnail(); ?>
                            </div>
                            <!-- End Big Image -->
                            
                            <div class="core_barre_text">
                            
								<?php the_content(); ?>
                            	
                            </div>
                        </div>
                        
                       
    <?php endwhile; ?>
	<?php edit_post_link('Edit This Entry', '<p>', '</p>'); ?>
	<?php else: ?>
	<?php endif; ?>
 
                        
                        
                    </div>
                    <!-- End Wellness Boxes -->
                    
                    <!-- Side Bar -->
                	<div class="col-md-4">
                    	<div class="side_bar">
                            <!-- Accordion begin -->
                            <div class="accordion_example2">
                                <!-- Section 1 -->
                                <div class="accordion_in acc_active">
                                    <div class="acc_head"><h3>Sports & Wellness </h3></div>
                                    <div class="acc_content">
                                    	<ul>
                                        	<li><a href="#">Meet Our Staff</a></li>
                                        	<li><a href="#">Aquatics</a></li>
                                            <li><a href="#">Core Barre</a></li>
                                            <li><a href="#">Core Suspend</a></li>
                                            <li><a href="#">Group Fitness</a></li>
                                            <li><a href="#">Specialty Fitness Classes</a></li>
                                            <li><a href="#">Biggest Loser</a></li>
                                            <li><a href="#">Bootcamp</a></li>
                                            <li><a href="#">Personal Training</a></li>
                                            <li><a href="#">Youth Fitness</a></li>
                                            <li><a href="#">Men's Basketball</a></li>
                                            <li><a href="#">Tennis</a></li>
                                            <li><a href="#">Youth Sports</a></li>
                                            <li><a href="#">Special Events</a></li>
                                            <li><a href="#">Biking & Hiking Trail</a></li>
                                            <li><a href="#">Massage</a></li>
                                            <li><a href="#">365 Sports Training</a></li>
                                        </ul>
                                  	</div>
                                </div>
                                <!-- End Section 1 -->
                                
                                <!-- Section 2 -->
                                <div class="accordion_in">
                                    <div class="acc_head"><h3>Early Childhood Education</h3></div>
                                    <div class="acc_content">
                                    	<ul>
                                        	<li><a href="#">Meet Our Staff</a></li>
                                        	<li><a href="#">Aquatics</a></li>
                                            <li><a href="#">Core Barre</a></li>
                                            <li><a href="#">Core Suspend</a></li>
                                            <li><a href="#">Group Fitness</a></li>
                                            <li><a href="#">Specialty Fitness Classes</a></li>
                                            <li><a href="#">Biggest Loser</a></li>
                                            <li><a href="#">Bootcamp</a></li>
                                            <li><a href="#">Personal Training</a></li>
                                            <li><a href="#">Youth Fitness</a></li>
                                            <li><a href="#">Men's Basketball</a></li>
                                            <li><a href="#">Tennis</a></li>
                                            <li><a href="#">Youth Sports</a></li>
                                            <li><a href="#">Special Events</a></li>
                                            <li><a href="#">Biking & Hiking Trail</a></li>
                                            <li><a href="#">Massage</a></li>
                                            <li><a href="#">365 Sports Training</a></li>
                                        </ul>
                                  	</div>
                                </div>
                                <!-- End Section 2 -->
                                
                                <!-- Section 4 -->
                                <div class="accordion_in">
                                    <div class="acc_head"><h3>Adults & Seniors Programs</h3></div>
                                    <div class="acc_content">
                                    	<ul>
                                        	<li><a href="#">Meet Our Staff</a></li>
                                        	<li><a href="#">Aquatics</a></li>
                                            <li><a href="#">Core Barre</a></li>
                                            <li><a href="#">Core Suspend</a></li>
                                            <li><a href="#">Group Fitness</a></li>
                                            <li><a href="#">Specialty Fitness Classes</a></li>
                                            <li><a href="#">Biggest Loser</a></li>
                                            <li><a href="#">Bootcamp</a></li>
                                            <li><a href="#">Personal Training</a></li>
                                            <li><a href="#">Youth Fitness</a></li>
                                            <li><a href="#">Men's Basketball</a></li>
                                            <li><a href="#">Tennis</a></li>
                                            <li><a href="#">Youth Sports</a></li>
                                            <li><a href="#">Special Events</a></li>
                                            <li><a href="#">Biking & Hiking Trail</a></li>
                                            <li><a href="#">Massage</a></li>
                                            <li><a href="#">365 Sports Training</a></li>
                                        </ul>
                                  	</div>
                                </div>
                                <!-- End Section 4 -->
                                
                                <!-- Section 5 -->
                                <div class="accordion_in">
                                    <div class="acc_head"><h3>Cultural Programs</h3></div>
                                    <div class="acc_content">
                                    	<ul>
                                        	<li><a href="#">Meet Our Staff</a></li>
                                        	<li><a href="#">Aquatics</a></li>
                                            <li><a href="#">Core Barre</a></li>
                                            <li><a href="#">Core Suspend</a></li>
                                            <li><a href="#">Group Fitness</a></li>
                                            <li><a href="#">Specialty Fitness Classes</a></li>
                                            <li><a href="#">Biggest Loser</a></li>
                                            <li><a href="#">Bootcamp</a></li>
                                            <li><a href="#">Personal Training</a></li>
                                            <li><a href="#">Youth Fitness</a></li>
                                            <li><a href="#">Men's Basketball</a></li>
                                            <li><a href="#">Tennis</a></li>
                                            <li><a href="#">Youth Sports</a></li>
                                            <li><a href="#">Special Events</a></li>
                                            <li><a href="#">Biking & Hiking Trail</a></li>
                                            <li><a href="#">Massage</a></li>
                                            <li><a href="#">365 Sports Training</a></li>
                                        </ul>
                                  	</div>
                                </div>
                                <!-- End Section 5 -->
                                
                                <!-- Section 6 -->
                                <div class="accordion_in">
                                    <div class="acc_head"><h3>Year-Round Camp Activities</h3></div>
                                    <div class="acc_content">
                                    	<ul>
                                        	<li><a href="#">Meet Our Staff</a></li>
                                        	<li><a href="#">Aquatics</a></li>
                                            <li><a href="#">Core Barre</a></li>
                                            <li><a href="#">Core Suspend</a></li>
                                            <li><a href="#">Group Fitness</a></li>
                                            <li><a href="#">Specialty Fitness Classes</a></li>
                                            <li><a href="#">Biggest Loser</a></li>
                                            <li><a href="#">Bootcamp</a></li>
                                            <li><a href="#">Personal Training</a></li>
                                            <li><a href="#">Youth Fitness</a></li>
                                            <li><a href="#">Men's Basketball</a></li>
                                            <li><a href="#">Tennis</a></li>
                                            <li><a href="#">Youth Sports</a></li>
                                            <li><a href="#">Special Events</a></li>
                                            <li><a href="#">Biking & Hiking Trail</a></li>
                                            <li><a href="#">Massage</a></li>
                                            <li><a href="#">365 Sports Training</a></li>
                                        </ul>
                                  	</div>
                                </div>
                                <!-- End Section 6 -->
                                
                                <!-- Section 7 -->
                                <div class="accordion_in">
                                    <div class="acc_head border_none"><h3>Jewish Life</h3></div>
                                    <div class="acc_content">
                                    	<ul>
                                        	<li><a href="#">Meet Our Staff</a></li>
                                        	<li><a href="#">Aquatics</a></li>
                                            <li><a href="#">Core Barre</a></li>
                                            <li><a href="#">Core Suspend</a></li>
                                            <li><a href="#">Group Fitness</a></li>
                                            <li><a href="#">Specialty Fitness Classes</a></li>
                                            <li><a href="#">Biggest Loser</a></li>
                                            <li><a href="#">Bootcamp</a></li>
                                            <li><a href="#">Personal Training</a></li>
                                            <li><a href="#">Youth Fitness</a></li>
                                            <li><a href="#">Men's Basketball</a></li>
                                            <li><a href="#">Tennis</a></li>
                                            <li><a href="#">Youth Sports</a></li>
                                            <li><a href="#">Special Events</a></li>
                                            <li><a href="#">Biking & Hiking Trail</a></li>
                                            <li><a href="#">Massage</a></li>
                                            <li><a href="#">365 Sports Training</a></li>
                                        </ul>
                                  	</div>
                                </div>
                                <!-- End Section 8 -->
                            </div>
                            <!-- Accordion end -->
                        </div>
                    </div>
                    <!-- End Side Bar -->
                </div>
            </div>
        </section>
        <!-- ===== End Wellness ===== -->

<?php get_template_part( 'templates/footer'); ?>