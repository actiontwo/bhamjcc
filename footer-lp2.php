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
  <!-- ===== Start Footer ===== -->
        <footer class="body_lp2_footer">
        	<div class="container">
                <div class="row">
                    <!-- Copy Rights -->
                    <div class="col-md-6">
                    	<div class="body_lp2_copy_text">
                        	<p>&copy; Copyright 2014 - Levite, JCC. (Levite Jewish Community Center).  All Rights Reserved.</p>
                        </div>
                    </div>
                    <!-- End Copy Rights -->
                    
                    <!-- Social Icons -->
                    <div class="col-md-6">
                    	<div class="body_lp2_footer_social">
                            <p>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                            </p>
                        </div>
                    </div>
                    <!-- End Social Icons -->
                </div>
            </div>
        </footer>
        <!-- ===== End Footer ===== -->
    
    
    	<!-- ===== Start Bootstrap core JavaScript ===== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/docs.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.meanmenu.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/animation.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/custome.js"></script>
        <a href="#" class="scrollup">Scroll to Top</a>
        <!-- ===== End Bootstrap core JavaScript ===== -->
	<?php wp_footer(); ?>
</body>
</html>