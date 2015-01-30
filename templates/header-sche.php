<?php



/**



 * The Header for our theme



 *



 * Displays all of the <head> section and everything up till <div id="main">



 *



 * @package WordPress



 * @subpackage Twenty_Fourteen



 * @since Twenty Fourteen 1.0



 */



?><!DOCTYPE html>



<!--[if IE 7]>



<html class="ie ie7" <?php language_attributes(); ?>>



<![endif]-->



<!--[if IE 8]>



<html class="ie ie8" <?php language_attributes(); ?>>



<![endif]-->



<!--[if !(IE 7) | !(IE 8) ]><!-->



<html <?php language_attributes(); ?>>



<!--<![endif]-->



<head>



	<meta charset="<?php bloginfo( 'charset' ); ?>">



	<meta name="viewport" content="width=device-width">



	<title><?php wp_title( '|', true, 'right' ); ?></title>



	<link rel="profile" href="http://gmpg.org/xfn/11">



	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">



	<!--[if lt IE 9]>



	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>



	<![endif]-->



     <!-- Custom styles for this template -->



        <link href="<?php echo get_template_directory_uri(); ?>/assets-web/css/style.css" rel="stylesheet">



        <link href="<?php echo get_template_directory_uri(); ?>/assets-web/css/component.css" rel="stylesheet">



        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets-web/css/jquery.bxslider.css" />



        <link href="<?php echo get_template_directory_uri(); ?>/assets-web/css/animation.css" rel="stylesheet">



        <link href="<?php echo get_template_directory_uri(); ?>/assets-web/css/perfect-scrollbar.css" rel="stylesheet">



        



        



        <!-- Awesome Fonts -->



        <link href="<?php echo get_template_directory_uri(); ?>/assets-web/css/font-awesome.css" rel="stylesheet">



        <link href="<?php echo get_template_directory_uri(); ?>/assets-web/css/font-awesome.min.css" rel="stylesheet">



    	



        <!-- Owl Slider -->



        <link href="<?php echo get_template_directory_uri(); ?>/assets-web/css/owl.carousel.css" rel="stylesheet">



    	<link href="<?php echo get_template_directory_uri(); ?>/assets-web/css/owl.theme.css" rel="stylesheet">



        



        <!-- Bootstrap core CSS -->



        <link href="<?php echo get_template_directory_uri(); ?>/assets-web/css/bootstrap.min.css" rel="stylesheet">



        <!-- Bootstrap theme -->



        <link href="<?php echo get_template_directory_uri(); ?>/assets-web/css/bootstrap-theme.min.css" rel="stylesheet">



        



        <!-- Favicon -->



        <link rel="shortcut icon" href="<?php bloginfo("template_url");?>/assets-web/images/favicon.ico" type="image/x-icon">



        <link rel="icon" href="<?php bloginfo("template_url");?>/assets-web/images/favicon.ico" type="image/x-icon">



        



        <!-- Google Fonts -->



        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,700' rel='stylesheet' type='text/css'>



        <link href='http://fonts.googleapis.com/css?family=Fira+Sans:400,300,700,500' rel='stylesheet' type='text/css'>



        <link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,600,700' rel='stylesheet' type='text/css'>



        



        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->



        <!--[if lt IE 9]>



        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>



        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>



        <![endif]-->

        

        

		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>



		<?php wp_enqueue_script( 'moasddernizr', get_template_directory_uri() . '/assets-web/js/modernizr.custom.js', '', '', false ); ?>


		<?php wp_enqueue_script( 'bootastrap', get_template_directory_uri() . '/assets-web/js/bootstrap.min.js', '', '', true ); ?>

        

		<?php wp_enqueue_script( 'doasdcs', get_template_directory_uri() . '/assets-web/js/docs.min.js', '', '', true ); ?>

        <?php wp_enqueue_script( 'clasdassie', get_template_directory_uri() . '/assets-web/js/classie.js', '', '', true ); ?>

        <?php wp_enqueue_script( 'uisasdearch', get_template_directory_uri() . '/assets-web/js/uisearch.js', '', '', true ); ?>

        <?php wp_enqueue_script( 'bxslasdider', get_template_directory_uri() . '/assets-web/js/jquery.bxslider.js', '', '', true ); ?>

        <?php wp_enqueue_script( 'carasdasdousel', get_template_directory_uri() . '/assets-web/js/owl.carousel.js', '', '', true ); ?>

        <?php wp_enqueue_script( 'accdsordion', get_template_directory_uri() . '/assets-web/js/accordion.js', '', '', true ); ?>

        <?php wp_enqueue_script( 'perfasdect', get_template_directory_uri() . '/assets-web/js/perfect-scrollbar.js', '', '', true ); ?>

        <?php wp_enqueue_script( 'aasdnimation', get_template_directory_uri() . '/assets-web/js/animation.js', '', '', true ); ?>

         

        <?php wp_enqueue_script( 'cusasdtome', get_template_directory_uri() . '/assets-web/js/custome.js', '', '', true ); ?>

    



	<?php wp_head(); ?>



</head>











    <body>



    



    	<!-- ===== Start Header ===== -->



        <header>



        	<div class="container">



            	<div class="row">



                	<!-- Logo -->



                	<div class="col-md-3">



                    	<div class="logo">



                        <a href="<?php echo home_url(); ?>"><img src="<?php echo ot_get_option( 'theme_logo' ); ?>" alt="Image" title="Image" /></a>



                        </div>



                    </div>



                    <!-- End Logo -->



                    



                    <!-- Social Icons -->



                	<div class="col-md-3">



                    	<div class="social_icons">



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



                    <!-- End Social Icons -->



                    



                    <!-- Top Cart -->



                	<div class="col-md-6">



                    	<div class="cart_area">



                        	<ul>



                            	<li class="contact_scroll_down"><a href="#footer">Contact</a></li>



                            	<li><a aria-controls="collapseExample" aria-expanded="false" href="#collapseExample" data-toggle="collapse">Hours & Directions</a></li>



                            	<?php /*?><li><?php global $woocommerce; ?><a aria-controls="collapseExample" aria-expanded="false" href="#collapseExampleCart" data-toggle="collapse" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><i class="fa fa-shopping-cart"></i> <span><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></span> - <?php echo $woocommerce->cart->get_cart_total(); ?> </a></li>
<?php */?>


                            </ul>



                            <div class="collapse" id="collapseExample">



                                <div class="well">



                                	<i class="fa fa-caret-up"></i>



                                    <div class="row">



                                        <div class="col-md-6 col-sm-6 col-xs-6">



                                            <div class="column_mtfw">



                                                <?php echo ot_get_option( 'column_one_direction' ); ?>



                                            </div>



                                        </div>



                                        <div class="col-md-6 col-sm-6 col-xs-6 border_stroke">



                                            <div class="column_fss">



                                                <?php echo ot_get_option( 'column_two_direction' ); ?>



                                            </div>



                                        </div>



                                    </div>



                                </div>



                            </div>

                            

                            <?php /*?><div class="collapse cartCollapse" id="collapseExampleCart">



                                <div class="cart_toggle">



                                	<i class="fa fa-caret-up"></i>

                                    

                                    <ul>

                                    	<li>

                                        	<a href="#">

                                                <img src="<?php bloginfo("template_url");?>/assets-web/images/pro_thmb.jpg" alt="Image" title="Image" />

                                                <div class="product_thmb_details">

                                                    <span class="product_thmb_title">

                                                        Product Title

                                                    </span>

                                                    <span class="product_thmb_price">

                                                        $100

                                                    </span>

                                                </div>

                                            </a>

                                        </li>

                                    	

                                    </ul>

									

                                    <a href="<?php echo $woocommerce->cart->get_cart_url(); ?>" class="view_entire_cart">View Entire Cart</a>

                                </div>



                            </div><?php */?>



                        </div>



                    </div>



                    <!-- End Cart -->



                </div>



            </div>



            <img class="line" src="<?php bloginfo("template_url");?>/assets-web/images/color_line.png" alt="Line" title="Line" />



            



            <!-- Menu -->



            <div class="menu">



            	<div class="container position_relative">



                    <nav>



                        <div class="main-nav">



                                                     

							<?php



$defaults = array(

	

	'menu_class'      => 'main-nav',

	'theme_location'  => 'main-menu',

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



                    </nav>



                



                	<!-- Search -->



                    <div id="sb-search" class="sb-search">



                        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Search')) :endif; ?>



                    </div>



                	<!-- End Search -->



                </div>



                <div class="clear"></div>



            </div>



            <!-- End Menu -->



        </header>



        <!-- ===== End Header ===== -->



       