<?php

/**

 * Initialize the custom theme options.

 */

add_action( 'admin_init', 'custom_theme_options' );



/**

 * Build the custom settings & update OptionTree.

 */

function custom_theme_options() {

  

  /* OptionTree is not loaded yet */

  if ( ! function_exists( 'ot_settings_id' ) )

    return false;

    

  /**

   * Get a copy of the saved settings array. 

   */

  $saved_settings = get_option( ot_settings_id(), array() );

  

  /**

   * Custom settings array that will eventually be 

   * passes to the OptionTree Settings API Class.

   */

  $custom_settings = array( 

    'contextual_help' => array( 

      'sidebar'       => ''

    ),

    'sections'        => array( 

      array(

        'id'          => 'general',

        'title'       => __( 'General', 'theme-options.php' )

      ),


      array(

        'id'          => 'slider',

        'title'       => __( 'Slider', 'theme-options.php' )

      ),

      array(

        'id'          => 'footer',

        'title'       => __( 'Footer', 'theme-options.php' )

      ),

      array(

        'id'          => 'social_links',

        'title'       => __( 'Social Links', 'theme-options.php' )

      )

    ),

    'settings'        => array( 

      array(

        'id'          => 'theme_logo',

        'label'       => __( 'Theme Logo', 'theme-options.php' ),

        'desc'        => __( 'Paste the full URL (include http://) of your custom logo here or you can insert the image through the button.', 'theme-options.php' ),

        'std'         => '',

        'type'        => 'upload',

        'section'     => 'general',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

	   array(

        'id'          => 'events',

        'label'       => __( 'Select Events Page', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'page-select',

        'section'     => 'general',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

      array(

        'id'          => 'alert',

        'label'       => __( 'Add or Change Alert Text', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'general',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),


 array(

        'id'          => 'column_one_direction',

        'label'       => __( 'Add Column One Hours & Direction ', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'textarea',

        'section'     => 'general',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),
	  array(

        'id'          => 'column_two_direction',

        'label'       => __( 'Add Column Two Hours & Direction With Button', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'textarea',

        'section'     => 'general',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),
	
	 array(

        'id'          => 'mail_chimp',

        'label'       => __( 'Add Mailchimp Form Image', 'theme-options.php' ),

        'desc'        => __( '.', 'theme-options.php' ),

        'std'         => '',

        'type'        => 'upload',

        'section'     => 'general',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

   

	  array(

        'id'          => 'slide',

        'label'       => __( 'Slide', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'slider',

        'section'     => 'slider',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

    

	  

      array(

        'id'          => 'copyright',

        'label'       => __( 'Footer Bottom Copyright Text', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'footer',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),
	     array(

        'id'          => 'address',

        'label'       => __( 'Add Your Address Here', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'footer',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),
	   array(

        'id'          => 'phone',

        'label'       => __( 'Add Your Phone Number Here', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'footer',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),



      array(

        'id'          => 'soc_pintrest',

        'label'       => __( 'Pintrest icon link', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'social_links',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

	  array(

        'id'          => 'soc_instagram',

        'label'       => __( 'instagram icon link', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'social_links',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

	    array(

        'id'          => 'soc_google',

        'label'       => __( 'Google Plus icon link', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'social_links',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

      array(

        'id'          => 'soc_facebook',

        'label'       => __( 'Facebook icon link', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'social_links',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

      array(

        'id'          => 'soc_twitter',

        'label'       => __( 'Twitter icon link', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'social_links',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),



      array(

        'id'          => 'soc_youtube',

        'label'       => __( 'YouTube icon link', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'social_links',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      )

    )

  );

  

  /* allow settings to be filtered before saving */

  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );

  

  /* settings are not the same update the DB */

  if ( $saved_settings !== $custom_settings ) {

    update_option( ot_settings_id(), $custom_settings ); 

  }

  

  /* Lets OptionTree know the UI Builder is being overridden */

  global $ot_has_custom_theme_options;

  $ot_has_custom_theme_options = true;

  

}