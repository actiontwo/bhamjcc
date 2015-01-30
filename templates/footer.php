<?php

/**

 * The template for displaying the footer

 *

 * Contains footer content and the closing of the #main and #page div elements.

 *

 * @package WordPress

 * @subpackage Twenty_Fourteen

 * @since Twenty Fourteen 1.0

 */

?>

<!--  <!-- ===== Start Footer ===== -->

        <footer id="footer">

        	<div class="container">

            	<div class="row"> 

                    

                    <!-- Contact -->

                	<div class="col-md-3">

                    	<div class="footer_contact">

                         <h6>GET CONNECTED</h6>

                            <ul>

                             <li>

                                 <a href="https://www.google.com/maps/place/Levite+Jewish+Community+Center/@33.5113245,-86.7546728,19z/data=!4m2!3m1!1s0x0000000000000000:0xdf876a08b7caf74c" target="_blank">Map <i class="fa fa-map-marker"></i></a>

                                 <a href="callto:2058790411">Dial <i class="fa fa-phone"></i></a>

                             </li>
                             
                             <li>
                             	<a class="question_anchor" data-toggle="collapse" href="#collapseExamplee" aria-expanded="false" aria-controls="collapseExample">Ask a Question</a>
                            
                            <div class="collapse" id="collapseExamplee">
                                <div class="ask">
                                	<i class="fa fa-caret-up"></i>
                                    <div class="ask_question_form">
                                        
                                        <?php echo do_shortcode( '[contact-form-7 id="2981" title="Footer Ask your Question Form"]' ); ?>
                                    </div>
                                </div>
                            </div>
                             </li>

                             <li>

                                 <i class="fa fa-map-marker"></i>

                                    <div class="footer_contact_text">

                                     <h6>Address:</h6>

                                        <p><?php echo ot_get_option( 'address' ); ?></p>

                                    </div>

                                </li>

                             <li>

                                 <i class="fa fa-phone"></i>

                                    <div class="footer_contact_text">

                                     <h6>Phone: <a href="callto:<?php echo ot_get_option( 'phone' ); ?>"><?php echo ot_get_option( 'phone' ); ?></a></h6>

                                    </div>

                                </li>

                          

                            </ul>

                        </div>

                    </div>

                    <!-- End Contact -->  

                    

                    <!-- Links -->

                	<div class="col-md-6">

                    	<div class="footer_links">
                        
                        <h6>Links</h6>
                       <?php

$defaults = array(
 
 'menu_class'      => 'footer_links',
 'menu_id'         => '',
 'echo'            => true,
 'fallback_cb'     => 'wp_page_menu',
 'before'          => '',
 'after'           => '',
 'link_before'     => '',
 'link_after'      => '',
 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
 'depth'           => 0,
 'walker'          => ''
);

wp_nav_menu( $defaults );

?>

                        </div>

                    </div>

                    <!-- Links -->                 

                    <!-- Donate -->

                	<div class="col-md-3">

						<!-- Footer About -->
                    	<?php /*?><div class="footer_about">
                        	<h6>About jcc</h6>
                            <p>Camp LJCC offers day camps to the entire Birmingham community for entering grades 1 - 8. We offer camps all 12 weeks of summer and most importantly, our camp has a  "camp a la carte" system that allows you to plan your summer exactly as you wish - <a href="#">sign up</a></p>
                        </div><?php */?>
                        <!-- End Footer About -->
                        
                        <!-- Footer Donate -->
                        <div class="footer_donate">
                        	<h6>DONATIONS</h6>
                            <p>Complete the form to start begin your donation and stay updated on our effort</p>
                            <?php /*?><?php echo do_shortcode("[qpp]"); ?><?php */?>
                            <?php echo do_shortcode( '[mailchimp list="1"]' ); ?>
                         	<!--<form>
                            	<input type="text" name="dollor" required placeholder="Dollar Amount:" />
                            	<input type="text" required placeholder="Your Name:" />
                            	<input type="email" required placeholder="Your Email:" />
                                <input type="checkbox" class="css-checkbox" id="checkboxG5" name="checkboxG5">
                                <label class="css-label" for="checkboxG5">"Yes, I'd like to donate and receive community news."</label>
                                <input type="submit" value="PLEDGE SUPPORT &#xf0a4;" />
                            </form>-->
                        </div>
                        <!-- End Footer Donate -->
                    </div>

                    <!-- End Donate -->

                </div>

            </div>

            

            <!-- Copy Rights & Social -->

            <div class="copy_rights_social">

            	<div class="container">

                	<div class="row">

                    	<!-- Copy Rights -->

                    	<div class="col-md-6">

                        	<div class="copy">

                            	<p><?php echo ot_get_option( 'copyright' ); ?></p>

                            </div>

                        </div>

                        <!-- End Copy Rights -->

                        

                        <!-- Footer Social -->

                    	<div class="col-md-6">

                        	<div class="footer_social">

                                 <p>

                                                            

                                

                                

								<?php $link1 = ot_get_option( 'soc_facebook' );   
                                
                                
                                
                                if (!empty($link1)) { ?>
                                
                                
                                
                                <a href="<?php echo ot_get_option( 'soc_facebook' ); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                
                                
                                
                                <?php } ?>  



                                    



								<?php $link1 = ot_get_option( 'soc_instagram' );   
                                
                                
                                
                                if (!empty($link1)) { ?>
                                
                                
                                
                                <a href="<?php echo ot_get_option( 'soc_instagram' ); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                                
                                
                                
                                <?php } ?> 



                                    



								<?php $link1 = ot_get_option( 'soc_twitter' );   
                                
                                
                                
                                if (!empty($link1)) { ?>   
                                
                                
                                
                                <a href="<?php echo ot_get_option( 'soc_twitter' ); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                
                                
                                
                                <?php } ?>



                                    



								<?php $link1 = ot_get_option( 'soc_google' );   
                                
                                
                                
                                if (!empty($link1)) { ?>
                                
                                
                                
                                <a href="<?php echo ot_get_option( 'soc_google' ); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                                
                                
                                
                                <?php } ?>



                                    



								<?php $link1 = ot_get_option( 'soc_youtube' );   
                                
                                
                                
                                if (!empty($link1)) { ?>
                                
                                
                                
                                <a href="<?php echo ot_get_option( 'soc_youtube' ); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
                                
                                
                                
                                <?php } ?>     






								<?php $link1 = ot_get_option( 'soc_pintrest' );   
                                
                                
                                
                                if (!empty($link1)) { ?>
                                
                                
                                
                                <a href="<?php echo ot_get_option( 'soc_pintrest' ); ?>" target="_blank"><i class="fa fa-pinterest"></i></a>
                                
                                
                                
                                <?php } ?>  

                                

                                

                                

                                

                            </p>

                            </div>

                        </div>

                        <!-- End Footer Social -->

                    </div>

                </div>

            </div>

            <!-- Copy Rights & Social -->

        </footer>

        <!-- ===== End Footer ===== -->

        

        

    

    	<!-- ===== Start Bootstrap core JavaScript ===== -->

        <!-- Placed at the end of the document so the pages load faster -->

        

        <a href="#" class="scrollup">Scroll to Top</a>

        <!-- ===== End Bootstrap core JavaScript ===== -->
        

	<?php wp_footer(); ?>
    
    
    <?php /*?><div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 id="myLargeModalLabel" class="modal-title"><MARK>JCC MAP</mark></h4>
                </div>
                <div class="modal-body">
                    <div class="map_frame">
                        <div id="gmap_canvas"></div>
                    </div>
                </div>
            </div>
        </div>
    </div><?php */?>

</body>

</html>