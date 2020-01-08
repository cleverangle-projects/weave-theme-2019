<?php
/**
 * Child-Theme functions and definitions
 */

function rhodos_child_scripts()
{
  wp_enqueue_style('rhodos-parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/css/styles.css');
  wp_enqueue_style('animate-css', get_stylesheet_directory_uri() . '/css/animate.css');
  wp_enqueue_script('wow_js', get_stylesheet_directory_uri() . '/js/wow.min.js', array('jquery'),
      '1.0', true);
  wp_enqueue_script('theme_js', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'),
      '1.0', true);
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


function weaver_post_type() {
  register_post_type( 'weaver',
// CPT Options
      array(
          'labels' => array(
              'name' => __( 'Weaver Stories' ),
              'singular_name' => __( 'Weaver Story' )
          ),
          'show_in_rest' => true,
          'supports'  => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions',
              'page-attributes'),
          'public' => true,
          'has_archive' => false,
          'rewrite' => array('slug' => 'weavers'),
      )
  );
}
add_action( 'init', 'weaver_post_type' );



function register_weave_menu() {
  register_nav_menu( 'weave_menu', __( 'Primary Weave Menu', 'rhodos' ) );
}
add_action( 'after_setup_theme', 'register_weave_menu' );


function add_toolbar_items($wp_admin_bar) {
  $home_id = get_option('page_on_front');

  $wp_admin_bar->add_node( array(
      'id'		=> 'edithome',
      'title' => 'Edit Homepage',
      'href' => '/wp-admin/post.php?post=' . $home_id . '&action=edit',
  ) );
}

add_action('admin_bar_menu', 'add_toolbar_items', 999);

function content_widgets_init() {
  register_sidebar( array(
      'name' => __( 'Content Widget Area', 'rhodos' ),
      'id' => 'content-widget-area',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<span style="display: none!important;">',
      'after_title' => '</span>',
  ) );
}
add_action( 'widgets_init', 'content_widgets_init' );