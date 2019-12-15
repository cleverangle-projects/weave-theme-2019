<?php
/**
 * Child-Theme functions and definitions
 */

function rhodos_child_scripts() {
    wp_enqueue_style( 'rhodos-parent-style', get_template_directory_uri(). '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'rhodos_child_scripts' );
 
?>