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
    
     <!-- Bootstrap core CSS -->
     
     <link href="<?php echo get_template_directory_uri(); ?>/style-landing.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

     <!-- Awesome Fonts -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
        
        <!-- Bootstrap core CSS -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap theme -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css" rel="stylesheet">
        
        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    
    
	<?php wp_head(); ?>
</head>

  	     <body class="body_lp2">
    
    	<!-- ===== Start Top Bar ===== -->
        <section class="body_lp2_top_bar">
        	<div class="container">
            	<div class="row">
                	<!-- Logo -->
                	<div class="col-md-6">
                    	<div class="body_lp2_logo">
                        	<a href="#"><img src="<?php the_field('logo-lp2'); ?>" alt="Image" title="Image" /></a>
                        </div>
                    </div>
                    <!-- End Logo -->
                    
                    <!-- Top Links -->
                	<div class="col-md-6">
                    	<div class="body_lp2_top_links">
                        	<ul>
                            	<li><i class="fa fa-map-marker"></i><a href="#">Directions</a></li>
                            	<li><i class="fa fa-headphones"></i>Call Now: <a href="callto:<?php the_field('unique_phone_number_for_call_now'); ?>">+<?php the_field('unique_phone_number_for_call_now'); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Top Links -->
                </div>
            </div>
        </section>
        <!-- ===== End Top Bar ===== -->
        
        <!-- ===== Start Banner ===== -->
        <section class="body_lp2_banner">
        	<div class="container">
            	<!-- Banner Text -->
            	<div class="body_lp2_banner_text">
                	<!-- Coupon Image -->
                    <img src="<?php bloginfo("template_url");?>/images/lp2_coupon.png" alt="Image" title="Image" />
                    <!-- End Coupon Image -->
                	<h1><?php the_field('slider_line_1'); ?></h1>
                    <hr>
                	<h3><?php the_field('call_to_action_line_1'); ?></h3>
                	<h2><?php the_field('call_to_action_line_2'); ?></h2>
                </div>
                <!-- End Banner Text -->
            </div>
        </section>
        <!-- ===== End Banner ===== -->