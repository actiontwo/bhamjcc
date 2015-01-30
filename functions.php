<?php

/**

 * Twenty Fourteen functions and definitions

 *

 * Set up the theme and provides some helper functions, which are used in the

 * theme as custom template tags. Others are attached to action and filter

 * hooks in WordPress to change core functionality.

 *

 * When using a child theme you can override certain functions (those wrapped

 * in a function_exists() call) by defining them first in your child theme's

 * functions.php file. The child theme's functions.php file is included before

 * the parent theme's file, so the child theme functions would be used.

 *

 * @link http://codex.wordpress.org/Theme_Development

 * @link http://codex.wordpress.org/Child_Themes

 *

 * Functions that are not pluggable (not wrapped in function_exists()) are

 * instead attached to a filter or action hook.

 *

 * For more information on hooks, actions, and filters,

 * @link http://codex.wordpress.org/Plugin_API

 *

 * @package WordPress

 * @subpackage Twenty_Fourteen

 * @since Twenty Fourteen 1.0

 */



/**

 * Set up the content width value based on the theme's design.

 *

 * @see twentyfourteen_content_width()

 *

 * @since Twenty Fourteen 1.0

 */

if ( ! isset( $content_width ) ) {

	$content_width = 474;

}



/**

 * Twenty Fourteen only works in WordPress 3.6 or later.

 */

if ( version_compare( $GLOBALS['wp_version'], '3.6', '<' ) ) {

	require get_template_directory() . '/inc/back-compat.php';

}



if ( ! function_exists( 'twentyfourteen_setup' ) ) :

/**

 * Twenty Fourteen setup.

 *

 * Set up theme defaults and registers support for various WordPress features.

 *

 * Note that this function is hooked into the after_setup_theme hook, which

 * runs before the init hook. The init hook is too late for some features, such

 * as indicating support post thumbnails.

 *

 * @since Twenty Fourteen 1.0

 */

function twentyfourteen_setup() {



	/*

	 * Make Twenty Fourteen available for translation.

	 *

	 * Translations can be added to the /languages/ directory.

	 * If you're building a theme based on Twenty Fourteen, use a find and

	 * replace to change 'twentyfourteen' to the name of your theme in all

	 * template files.

	 */

	load_theme_textdomain( 'twentyfourteen', get_template_directory() . '/languages' );



	// Add RSS feed links to <head> for posts and comments.

	add_theme_support( 'automatic-feed-links' );



	// Enable support for Post Thumbnails, and declare two sizes.

	add_theme_support( 'post-thumbnails' );

	set_post_thumbnail_size( 672, 372, true );

	add_image_size( 'twentyfourteen-full-width', 1038, 576, true );



	// This theme uses wp_nav_menu() in two locations.

	register_nav_menus( array(

		'main-menu'   => __( 'Main Menu', 'twentyfourteen' ),
		'footer-menu'   => __( 'Footer Menu', 'twentyfourteen' )

		//'secondary' => __( 'Secondary menu in left sidebar', 'twentyfourteen' ),

	) );





	/*

	 * Switch default core markup for search form, comment form, and comments

	 * to output valid HTML5.

	 */

	add_theme_support( 'html5', array(

		'search-form', 'comment-form', 'comment-list',

	) );



	

	// This theme uses its own gallery styles.

	add_filter( 'use_default_gallery_style', '__return_false' );

}

endif; // twentyfourteen_setup

add_action( 'after_setup_theme', 'twentyfourteen_setup' );



/**

 * Adjust content_width value for image attachment template.

 *

 * @since Twenty Fourteen 1.0

 *

 * @return void

 */

function twentyfourteen_content_width() {

	if ( is_attachment() && wp_attachment_is_image() ) {

		$GLOBALS['content_width'] = 810;

	}

}

add_action( 'template_redirect', 'twentyfourteen_content_width' );



/**

 * Getter function for Featured Content Plugin.

 *

 * @since Twenty Fourteen 1.0

 *

 * @return array An array of WP_Post objects.

 */

function twentyfourteen_get_featured_posts() {

	/**

	 * Filter the featured posts to return in Twenty Fourteen.

	 *

	 * @since Twenty Fourteen 1.0

	 *

	 * @param array|bool $posts Array of featured posts, otherwise false.

	 */

	return apply_filters( 'twentyfourteen_get_featured_posts', array() );

}



/**

 * A helper conditional function that returns a boolean value.

 *

 * @since Twenty Fourteen 1.0

 *

 * @return bool Whether there are featured posts.

 */

function twentyfourteen_has_featured_posts() {

	return ! is_paged() && (bool) twentyfourteen_get_featured_posts();

}



/**

 * Register three Twenty Fourteen widget areas.

 *

 * @since Twenty Fourteen 1.0

 *

 * @return void

 */

function twentyfourteen_widgets_init() {

	require get_template_directory() . '/inc/widgets.php';

	register_widget( 'Twenty_Fourteen_Ephemera_Widget' );



	register_sidebar( array(

		'name'          => __( 'Primary Sidebar', 'twentyfourteen' ),

		'id'            => 'sidebar-1',

		'description'   => __( 'Main sidebar that appears on the left.', 'twentyfourteen' ),

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h1 class="widget-title">',

		'after_title'   => '</h1>',

	) );

	register_sidebar( array(

		'name'          => __( 'Content Sidebar', 'twentyfourteen' ),

		'id'            => 'sidebar-2',

		'description'   => __( 'Additional sidebar that appears on the right.', 'twentyfourteen' ),

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h1 class="widget-title">',

		'after_title'   => '</h1>',

	) );

	register_sidebar( array(

		'name'          => __( 'Footer Widget Area', 'twentyfourteen' ),

		'id'            => 'sidebar-3',

		'description'   => __( 'Appears in the footer section of the site.', 'twentyfourteen' ),

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h1 class="widget-title">',

		'after_title'   => '</h1>',

	) );

}

add_action( 'widgets_init', 'twentyfourteen_widgets_init' );





/**

 * Enqueue scripts and styles for the front end.

 *

 * @since Twenty Fourteen 1.0

 *

 * @return void

 */

function twentyfourteen_scripts() {

	

wp_enqueue_style( 'css', get_template_directory_uri() . '/style.css' );



}

add_action( 'wp_enqueue_scripts', 'twentyfourteen_scripts' );



/**

 * Enqueue Google fonts style to admin screen for custom header display.

 *

 * @since Twenty Fourteen 1.0

 *

 * @return void

 */

function twentyfourteen_admin_fonts() {

	wp_enqueue_style( 'twentyfourteen-lato', twentyfourteen_font_url(), array(), null );

}

add_action( 'admin_print_scripts-appearance_page_custom-header', 'twentyfourteen_admin_fonts' );



if ( ! function_exists( 'twentyfourteen_the_attached_image' ) ) :

/**

 * Print the attached image with a link to the next attached image.

 *

 * @since Twenty Fourteen 1.0

 *

 * @return void

 */

function twentyfourteen_the_attached_image() {

	$post                = get_post();

	/**

	 * Filter the default Twenty Fourteen attachment size.

	 *

	 * @since Twenty Fourteen 1.0

	 *

	 * @param array $dimensions {

	 *     An array of height and width dimensions.

	 *

	 *     @type int $height Height of the image in pixels. Default 810.

	 *     @type int $width  Width of the image in pixels. Default 810.

	 * }

	 */

	$attachment_size     = apply_filters( 'twentyfourteen_attachment_size', array( 810, 810 ) );

	$next_attachment_url = wp_get_attachment_url();



	/*

	 * Grab the IDs of all the image attachments in a gallery so we can get the URL

	 * of the next adjacent image in a gallery, or the first image (if we're

	 * looking at the last image in a gallery), or, in a gallery of one, just the

	 * link to that image file.

	 */

	$attachment_ids = get_posts( array(

		'post_parent'    => $post->post_parent,

		'fields'         => 'ids',

		'numberposts'    => -1,

		'post_status'    => 'inherit',

		'post_type'      => 'attachment',

		'post_mime_type' => 'image',

		'order'          => 'ASC',

		'orderby'        => 'menu_order ID',

	) );



	// If there is more than 1 attachment in a gallery...

	if ( count( $attachment_ids ) > 1 ) {

		foreach ( $attachment_ids as $attachment_id ) {

			if ( $attachment_id == $post->ID ) {

				$next_id = current( $attachment_ids );

				break;

			}

		}



		// get the URL of the next image attachment...

		if ( $next_id ) {

			$next_attachment_url = get_attachment_link( $next_id );

		}



		// or get the URL of the first image attachment.

		else {

			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );

		}

	}



	printf( '<a href="%1$s" rel="attachment">%2$s</a>',

		esc_url( $next_attachment_url ),

		wp_get_attachment_image( $post->ID, $attachment_size )

	);

}

endif;



if ( ! function_exists( 'twentyfourteen_list_authors' ) ) :

/**

 * Print a list of all site contributors who published at least one post.

 *

 * @since Twenty Fourteen 1.0

 *

 * @return void

 */

function twentyfourteen_list_authors() {

	$contributor_ids = get_users( array(

		'fields'  => 'ID',

		'orderby' => 'post_count',

		'order'   => 'DESC',

		'who'     => 'authors',

	) );



	foreach ( $contributor_ids as $contributor_id ) :

		$post_count = count_user_posts( $contributor_id );



		// Move on if user has not published a post (yet).

		if ( ! $post_count ) {

			continue;

		}

	?>



	<div class="contributor">

		<div class="contributor-info">

			<div class="contributor-avatar"><?php echo get_avatar( $contributor_id, 132 ); ?></div>

			<div class="contributor-summary">

				<h2 class="contributor-name"><?php echo get_the_author_meta( 'display_name', $contributor_id ); ?></h2>

				<p class="contributor-bio">

					<?php echo get_the_author_meta( 'description', $contributor_id ); ?>

				</p>

				<a class="contributor-posts-link" href="<?php echo esc_url( get_author_posts_url( $contributor_id ) ); ?>">

					<?php printf( _n( '%d Article', '%d Articles', $post_count, 'twentyfourteen' ), $post_count ); ?>

				</a>

			</div><!-- .contributor-summary -->

		</div><!-- .contributor-info -->

	</div><!-- .contributor -->



	<?php

	endforeach;

}

endif;



/**

 * Extend the default WordPress post classes.

 *

 * Adds a post class to denote:

 * Non-password protected page with a post thumbnail.

 *

 * @since Twenty Fourteen 1.0

 *

 * @param array $classes A list of existing post class values.

 * @return array The filtered post class list.

 */

function twentyfourteen_post_classes( $classes ) {

	if ( ! post_password_required() && has_post_thumbnail() ) {

		$classes[] = 'has-post-thumbnail';

	}



	return $classes;

}

add_filter( 'post_class', 'twentyfourteen_post_classes' );



/**

 * Create a nicely formatted and more specific title element text for output

 * in head of document, based on current view.

 *

 * @since Twenty Fourteen 1.0

 *

 * @param string $title Default title text for current view.

 * @param string $sep Optional separator.

 * @return string The filtered title.

 */

function twentyfourteen_wp_title( $title, $sep ) {

	global $paged, $page;



	if ( is_feed() ) {

		return $title;

	}



	// Add the site name.

	$title .= get_bloginfo( 'name' );



	// Add the site description for the home/front page.

	$site_description = get_bloginfo( 'description', 'display' );

	if ( $site_description && ( is_home() || is_front_page() ) ) {

		$title = "$title $sep $site_description";

	}



	// Add a page number if necessary.

	if ( $paged >= 2 || $page >= 2 ) {

		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentyfourteen' ), max( $paged, $page ) );

	}



	return $title;

}

add_filter( 'wp_title', 'twentyfourteen_wp_title', 10, 2 );

// Custom template tags for this theme.

require get_template_directory() . '/inc/template-tags.php';



/**

 * Optional: set 'ot_show_pages' filter to false.

 * This will hide the settings & documentation pages.

 */

add_filter( 'ot_show_pages', '__return_false' );



/**

 * Optional: set 'ot_show_new_layout' filter to false.

 * This will hide the "New Layout" section on the Theme Options page.

 */

add_filter( 'ot_show_new_layout', '__return_false' );



/**

 * Required: set 'ot_theme_mode' filter to true.

 */

add_filter( 'ot_theme_mode', '__return_true' );



/**

 * Required: include OptionTree.

 */

include_once( 'option-tree/ot-loader.php' );

include_once( 'includes/theme-options.php' );



add_filter('widget_text', 'do_shortcode');





 

 /**

 * Start News Custom Post Type.

 */

 

 

 add_action('init', 'cptui_register_my_cpt_news');



function cptui_register_my_cpt_news() {



register_post_type('News', array(



'label' => 'News',



'description' => '',



'public' => true,



'show_ui' => true,



'show_in_menu' => true,



'capability_type' => 'post',



'map_meta_cap' => true,



'hierarchical' => false,



'rewrite' => array('slug' => 'News', 'with_front' => true),



'menu_position' => 5,



'query_var' => true,



'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),



'labels' => array (



  'name' => 'News',



  'singular_name' => '',



  'menu_name' => 'News',



  'add_new' => 'Add News',



  'add_new_item' => 'Add New News',



  'edit' => 'Edit',



  'edit_item' => 'Edit News',



  'new_item' => 'New News',



  'view' => 'View News',



  'view_item' => 'View News',



  'search_items' => 'Search News',



  'not_found' => 'No News Found',



  'not_found_in_trash' => 'No News Found in Trash',



  'parent' => 'Parent News',



)



) ); }

 

 /**

 * End News Custom Post Type.

 */

 

 

 

  

 /**

 * Start Events Custom Post Type.

 */

 

 

 add_action('init', 'cptui_register_my_cpt_events');



function cptui_register_my_cpt_events() {



register_post_type('Events', array(



'label' => 'Events',



'description' => '',



'public' => true,



'show_ui' => true,



'show_in_menu' => true,



'capability_type' => 'post',



'map_meta_cap' => true,



'hierarchical' => false,



'rewrite' => array('slug' => 'Events', 'with_front' => true),



'menu_position' => 5,



'query_var' => true,



'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),



'labels' => array (



  'name' => 'Events',



  'singular_name' => '',



  'menu_name' => 'Events',



  'add_new' => 'Add Events',



  'add_new_item' => 'Add New Events',



  'edit' => 'Edit',



  'edit_item' => 'Edit Events',



  'new_item' => 'New Events',



  'view' => 'View Events',



  'view_item' => 'View Events',



  'search_items' => 'Search Events',



  'not_found' => 'No Events Found',



  'not_found_in_trash' => 'No Events Found in Trash',



  'parent' => 'Parent Events',



)



) ); }

 

 /**

 * End Events Custom Post Type.

 */

 

 

 

  

 /**

 * Start Testimonials Custom Post Type.

 */

 

add_action('init', 'cptui_register_my_cpt_testimonials');



function cptui_register_my_cpt_testimonials() {



register_post_type('testimonials', array(



'label' => 'testimonials',



'description' => '',



'public' => true,



'show_ui' => true,



'show_in_menu' => true,



'capability_type' => 'post',



'map_meta_cap' => true,



'hierarchical' => false,



'rewrite' => array('slug' => 'testimonials', 'with_front' => true),



'menu_position' => 5,



'query_var' => true,



'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),



'labels' => array (



  'name' => 'Testimonials',



  'singular_name' => '',



  'menu_name' => 'Testimonials',



  'add_new' => 'Add Testimonials',



  'add_new_item' => 'Add New Testimonials',



  'edit' => 'Edit',



  'edit_item' => 'Edit Testimonials',



  'new_item' => 'New Testimonials',



  'view' => 'View Testimonials',



  'view_item' => 'View Testimonials',



  'search_items' => 'Search Testimonials',



  'not_found' => 'No Testimonials Found',



  'not_found_in_trash' => 'No Testimonials Found in Trash',



  'parent' => 'Parent Testimonials',



)



) ); }



 

 /**

 * End Testimonials Custom Post Type.

 */

 

 

 

 function excerpt($limit) {

      $excerpt = explode(' ', get_the_excerpt(), $limit);

      if (count($excerpt)>=$limit) {

        array_pop($excerpt);

        $excerpt = implode(" ",$excerpt).'...';

      } else {

        $excerpt = implode(" ",$excerpt);

      } 

      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);

      return $excerpt;

    }



    function content($limit) {

      $content = explode(' ', get_the_content(), $limit);

      if (count($content)>=$limit) {

        array_pop($content);

        $content = implode(" ",$content).'...';

      } else {

        $content = implode(" ",$content);

      } 

      $content = preg_replace('/\[.+\]/','', $content);

      $content = apply_filters('the_content', $content); 

      $content = str_replace(']]>', ']]&gt;', $content);

      return $content;

    }

	

 /**

 * Start Videos Custom Post Type.

 */

 

add_action('init', 'cptui_register_my_cpt_videos');



function cptui_register_my_cpt_videos() {



register_post_type('videos', array(



'label' => 'videos',



'description' => '',



'public' => true,



'show_ui' => true,



'show_in_menu' => true,



'capability_type' => 'post',



'map_meta_cap' => true,



'hierarchical' => false,



'rewrite' => array('slug' => 'videos', 'with_front' => true),



'menu_position' => 5,



'query_var' => true,



'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),



'labels' => array (



  'name' => 'Videos',



  'singular_name' => '',



  'menu_name' => 'Videos',



  'add_new' => 'Add Videos',



  'add_new_item' => 'Add New Videos',



  'edit' => 'Edit',



  'edit_item' => 'Edit Videos',



  'new_item' => 'New Videos',



  'view' => 'View Videos',



  'view_item' => 'View Videos',



  'search_items' => 'Search Videos',



  'not_found' => 'No Videos Found',



  'not_found_in_trash' => 'No Videos Found in Trash',



  'parent' => 'Parent Videos',



)



) ); }



 

 /**

 * End Videos Custom Post Type.

 */
	
	
	
	
if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'Footer Menu',
'id' => 'extra-widgets1',
'description' => 'The extra widgets for your website.',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h6>',
'after_title' => '</h6>'
));
}

	
if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'Our Latest Offer',
'id' => 'extra-widgets2',
'description' => 'The extra widgets for your website.',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h6>',
'after_title' => '</h6>'
));
}

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'Search',
'id' => 'extra-widgets3',
'description' => 'The extra widgets for your website.',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h6>',
'after_title' => '</h6>'
));
}


