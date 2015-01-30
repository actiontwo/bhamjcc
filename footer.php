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
        <footer>
        	<div class="container">
            	<div class="copy_text">
                	<p><?php the_field('footer'); ?></p>
                </div>
            </div>
        </footer>
        <!-- ===== End Footer ===== -->
        
    	
    
    
    
    	<!-- ===== Start Bootstrap core JavaScript ===== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/docs.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/custome.js"></script>
        <a href="#" class="scrollup">Scroll to Top</a>
        <!-- ===== End Bootstrap core JavaScript ===== -->
	<?php wp_footer(); ?>
</body>
</html>