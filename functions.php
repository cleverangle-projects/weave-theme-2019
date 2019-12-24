<?php
/**
 * Child-Theme functions and definitions
 */

function rhodos_child_scripts() {
    wp_enqueue_style( 'rhodos-parent-style', get_template_directory_uri(). '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/css/styles.css' );
  wp_enqueue_script( 'theme_js', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'rhodos_child_scripts' );
 
// function weave_enqueue_styles() {
//   $parent_style ='styles';

//   wp_enqueue_style( 'child-style',
//       get_stylesheet_directory_uri() . '/css/styles.css',
//       array( $parent_style ),
//       wp_get_theme()->get('Version')
//   );
// }
// add_action( 'wp_enqueue_scripts', 'weave_enqueue_styles' );

add_action('customize_register', 'weave_customizer_settings');
function weave_customizer_settings($wp_customize) {
  $wp_customize->add_setting('brand_logo');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'brand_logo',
          array(
              'label' => 'Brand Logo',
              'section' => 'title_tagline',
              'settings' => 'brand_logo',
          )
      )
  );
  $wp_customize->add_setting('brand_logo_reverse');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'brand_logo_reverse',
          array(
              'label' => 'Brand Logo Reverse',
              'section' => 'title_tagline',
              'settings' => 'brand_logo_reverse',
          )
      )
  );
}

function weave_button_shortcode( $atts, $content = null ) {
  // Extract shortcode attributes
  extract( shortcode_atts( array(
      'url'    => '',
      'title'  => '',
      'target' => '',
      'text'   => '',
      'color'  => 'green',
  ), $atts ) );
  // Use text value for items without content
  $content = $text ? $text : $content;
  // Return button with link
  if ( $url ) {
    $link_attr = array(
        'href'   => esc_url( $url ),
        'title'  => esc_attr( $title ),
        'target' => ( 'blank' == $target ) ? '_blank' : '',
        'class'  => 'weave-button color-' . esc_attr( $color ),
    );
    $link_attrs_str = '';
    foreach ( $link_attr as $key => $val ) {
      if ( $val ) {
        $link_attrs_str .= ' ' . $key . '="' . $val . '"';
      }
    }
    return '<a' . $link_attrs_str . '><span>' . do_shortcode( $content ) . '</span></a>';
  }
  // No link defined so return button as a span
  else {
    return '<span class="weave-button"><span>' . do_shortcode( $content ) . '</span></span>';
  }
}
add_shortcode( 'button', 'weave_button_shortcode' );