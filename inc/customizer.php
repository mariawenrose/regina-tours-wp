
<?php
function mytheme_customize_register( $wp_customize ) {


  $wp_customize->add_section( 'custom_theme_colour_section' , array(
    'title'      => __( 'Navigation Bar Colour', 'RTTheme' ),
    'priority'   => 30,
) );


  $wp_customize->add_setting( 'navigation_background' , array(
    'default'   => '#8B7FE2',
    'transport' => 'refresh',
) );


  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_header_background_colour', array(
    'label'      => __( 'Header Colour', 'RTTheme' ),
    'section'    => 'custom_theme_colour_section',
    'settings'   => 'navigation_background',
  ) ) );


  // ===================
  // header 
  // ===================

  $wp_customize->add_section( 'header_logo_section' , array(
    'title'      => __( 'Upload Logo', 'RTTheme' ),
    'priority'   => 30,
  ) );

  $wp_customize->add_setting( 'header_logo_setting' , array(
    'transport' => 'refresh',
) );

$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'header_logo_control', array(
	'label'      => __( 'Custom Logo', 'RTTheme' ),
	'section'    => 'header_logo_section',
	'settings'   => 'header_logo_setting',
) ) );



}
add_action( 'customize_register', 'mytheme_customize_register' );

function customize_css() {
  ?>
  <style type ='text/css'>
    
    .custom_nav {
      background-color: <?php echo get_theme_mod('navigation_background', '#ffffff');?>;
    }
    
  </style>
<?php
}
add_action('wp_head', 'customize_css');