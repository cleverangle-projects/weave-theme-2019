<?php
/**
 * Child-Theme functions and definitions
 */

function rhodos_child_scripts() {
    wp_enqueue_style( 'rhodos-parent-style', get_template_directory_uri(). '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/css/styles.css' );
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


?>