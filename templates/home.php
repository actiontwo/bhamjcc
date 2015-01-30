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







<div class="slider_text">







	<div class="container">







		<div class="row">







			<div class="col-md-10 col_center">







				<div class="slider_text_main">' . $slide['description'] . '</div>







			</div>







		</div>







	</div>







</div>































</li>';







}







}















}















?>

  </ul>

  <div class="alert_box">

    <div class="container">

      <?php $link1 = ot_get_option( 'alert' );    if (!empty($link1)) { ?>

      <div role="alert" class="alert alert-warning alert-dismissible fade in">

        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>

      















                                   

        <p><?php echo ot_get_option( 'alert' ); ?></p>

     

      </div>

         <?php } ?>

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

          <h5><a href="<?php the_field('button_one_link'); ?>"><?php echo the_field('button_one_icon'); ?> <?php the_field('button_one_text'); ?></a></h5>

        </div>

      </div>

      

      <!-- End Box 1 --> 

      

      <!-- Box 2 -->

      

      <div class="col-md-3 padding">

        <div class="blue_box">

          <h5><a href="<?php the_field('button_two_link'); ?>"><?php echo the_field('button_two_icon'); ?> <?php the_field('button_two_text'); ?></a></h5>

        </div>

      </div>

      

      <!-- End Box 2 --> 

      

      <!-- Box 3 -->

      

      <div class="col-md-3 padding">

        <div class="green_box">

        <h5><a href="<?php the_field('button_three_link'); ?>"><?php echo the_field('button_three_icon'); ?> <?php the_field('button_three_text'); ?></a></h5>

        </div>

      </div>

      

      <!-- End Box 3 --> 

      

      <!-- Box 4 -->

      

      <div class="col-md-3 padding">

        <div class="pink_box_last">

       <h5><a href="<?php the_field('button_four_link'); ?>"><?php echo the_field('button_four_icon'); ?> <?php the_field('button_four_text'); ?></a></h5>

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

        <li class="active">

        <a data-toggle="tab" href="#events">Events</a> <i class="fa fa-caret-down"></i>

        </li>

        <li class=""><a data-toggle="tab" href="#feed">Social</a> <i class="fa fa-caret-down"></i> </li>

        <?php /*?><li class=""><a data-toggle="tab" href="#blog">Blog</a> <i class="fa fa-caret-down"></i> </li><?php */?>

      </ul>

      <div class="tab-content" id="myTabContent">

        <div id="events" class="tab-pane fade active in">

          <div class="scroll_description">

          <ul class="events_ul">

            <?php $args = array( 'post_type'=> 'events','events_category'=>'events','posts_per_page' => 3,'post' => ( get_query_var('paged') ? get_query_var('paged') : 1 ) ); query_posts( $args ); if (have_posts()) : while (have_posts()) : the_post();?>

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

                <?php echo content(25); ?> </div>

                <a href="<?php the_field('add_custom_url'); ?>" class="view_all">View Event</a>

                <div class="clear"></div>

            </li>

            <?php endwhile; ?>

            <?php  else:  ?>

            <?php endif; wp_reset_query(); ?>

            </ul>

            

            </div>

          <a href="<?php bloginfo('url'); ?>/events" class="view_all">View All Events</a> </div>

        <div id="feed" class="tab-pane fade">

          <div class="scroll_description"> <?php echo do_shortcode( '[fts facebook id=LeviteJCCBirmingham posts_displayed=page_only type=page]' ); ?> </div>

          <a href="#" class="view_all">View All</a> </div>

        <?php /*?><div id="blog" class="tab-pane fade">

          <ul>

            <?php $args = array( 'post_type'=> 'news','posts_per_page' => 3,'post' => ( get_query_var('paged') ? get_query_var('paged') : 1 ) ); query_posts( $args ); if (have_posts()) : while (have_posts()) : the_post();?>

            <li>

              <div class="date_box">

                <h6><?php echo get_the_date('M'); ?> <span><?php echo get_the_date('d'); ?></span></h6>

              </div>

              <div class="tab_text">

                <h5>

                  <?php the_title(); ?>

                </h5>

                <span><?php echo get_the_date('M d,Y'); ?></span> <?php echo content(25); ?> </div>

                   <a href="<?php the_permalink(); ?>" class="view_all">View This Post</a>

                   <div class="clear"></div>

            </li>

            <?php endwhile; ?>

            <?php  else:  ?>

            <?php endif; wp_reset_query(); ?>

          </ul>

          <a href="<?php bloginfo('url'); ?>/blog" class="view_all">View All</a> </div><?php */?>

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

      <h3>Our Latest Offer</h3>

    </div>

    <div class="form_image"> <img src="<?php echo ot_get_option( 'mail_chimp' ); ?>" alt="Image" title="Image" /> </div>

    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Our Latest Offer')) :endif; ?>

    



    

  </div>

</div>

</div>

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

        <div class="video"> <img src="<?php bloginfo("template_url");?>/assets-web/images/video_screen.png" alt="Image" title="Image" />

          <iframe name="someFrame" id="someFrame" src="http://player.vimeo.com/video/<?php the_field('lats_vid'); ?>?title=0&amp;byline=0&amp;portrait=0rel=0?"></iframe>

        </div>

      </div>

    

      <!-- End Video --> 

      

      <!-- Video Text -->

      

      <div class="col-md-7">

        <div class="video_text"> <img src="<?php bloginfo("template_url");?>/assets-web/images/arrow.png" alt="Image" title="Image" />

      

          <?php the_field('add_latest_video_heading_and_title'); ?>

          <div class="videos_small">

            <ul>

              <?php $args = array( 'post_type'=> 'videos','post','posts_per_page' => 4,( get_query_var('paged') ? get_query_var('paged') : 1 ) ); query_posts( $args ); if (have_posts()) : while (have_posts()) : the_post();?>

              <li>

                <div class="video_thmb"> <a href="http://player.vimeo.com/video/<?php the_field('video_id'); ?>?title=0&byline=0&portrait=0rel=0&autoplay=1" target="someFrame"> <span class="overlay"><i class="fa fa-play"></i></span> </a> <img src="<?php the_field('add_thumbnail_image'); ?>" alt="Image" title="Image" /> </div>

                <h6>

                  <?php the_title();?>

                </h6>

              </li>

              <?php endwhile; ?>

              <?php  else:  ?>

              <?php endif; wp_reset_query(); ?>

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

      

      <div class="col-md-3 padding_zero">

        <div class="testi_heading">

        <?php the_field('client_testiiiiiii'); ?>

          

        </div>

        

        <!-- <div class="view_all_testi">







                        	<a href="<?php bloginfo('url'); ?>/testimonials/" target="_blank">View All</a>







                        </div>



--> 

        

      </div>

      

      <div class="col-md-9">

        <div class="main_testi_box">

          <div id="owl-demo" class="owl-carousel owl-theme">

            <?php $args = array( 'post_type'=> 'testimonials','post' => ( get_query_var('paged') ? get_query_var('paged') : 1 ) ); query_posts( $args ); if (have_posts()) : while (have_posts()) : the_post();?>

            <div class="item">

              <div class="testi_box_img">

                <?php the_post_thumbnail(); ?>

              </div>

              <h6>

                <?php the_title(); ?>

              </h6>

              <?php echo content(25); ?> </div>

            <?php endwhile; ?>

            <?php  else:  ?>

            <?php endif; wp_reset_query(); ?>

          </div>

        </div>

      </div>

      

      <!-- End Testi Slider --> 

      

      <!-- Title & View All -->

      

      

      

      <!-- End Title & View All --> 

      

    </div>

  </div>

</section>



<!-- ===== End Testimonials ===== --> 



<!-- ===== Start Mission ===== -->



<!--<section class="mission">

  <div class="container"> -->

    

    <!-- Intro Text -->

    

    <!--<div class="intro">-->

     <?php /*?><?php the_field('featured_client'); ?><?php */?>

      

    <!--</div>-->

    

    <!-- End Intro Text -->

    

   <!-- <div class="row"> <?php /*?><?php echo do_shortcode( '[featured_products per_page="9" columns="4"] ' ); ?><?php */?> </div>

  </div>

</section>-->



<!-- ===== End Mission ===== -->



<?php get_template_part( 'templates/footer'); ?>

