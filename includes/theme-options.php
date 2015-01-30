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

        'desc'        => __( 'Upload your Logo Image Here.Logo Dimension width:223px,Height:52px.', 'theme-options.php' ),

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

        'id'          => 'alert',

        'label'       => __( 'Add or Change Alert Box Text from Home Page', 'theme-options.php' ),

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

        'label'       => __( 'Add Mailchimp Form Image:Dimension: width:340px & Height:151px', 'theme-options.php' ),

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

        'desc'        => 'Click Add New Button to add the slider Images.Slider Image Dimention - Width:1400px Height:573px',

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

        'label'       => __( 'Add Your Footer Bottom Copyright Text', 'theme-options.php' ),

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

        'label'       => __( 'Add Your Footer Address Here', 'theme-options.php' ),

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

        'label'       => __( 'Add Your Footer Phone Number Here', 'theme-options.php' ),

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

        'label'       => __( 'Add Your Pintrest Profile link', 'theme-options.php' ),

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

        'label'       => __( 'Add Your instagram Profile link', 'theme-options.php' ),

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

        'label'       => __( 'Add Your  Google Plus Profile link', 'theme-options.php' ),

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

        'label'       => __( 'Add Your Facebook Profile link', 'theme-options.php' ),

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

        'label'       => __( 'Add Your Twitter Profile link', 'theme-options.php' ),

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

        'label'       => __( 'Add Your YouTube Profile link', 'theme-options.php' ),

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