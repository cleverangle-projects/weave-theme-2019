<?php
/**
 * The Front Page template file.
 *
 * @package WordPress
 * @subpackage RHODOS
 * @since RHODOS 1.0.31
 */

get_header();

// // If front-page is a static page
// if ( get_option( 'show_on_front' ) == 'page' ) {

// 	// If Front Page Builder is enabled - display sections
// 	if ( rhodos_is_on( rhodos_get_theme_option( 'front_page_enabled' ) ) ) {

// 		if ( have_posts() ) {
// 			the_post();
// 		}

// 		$rhodos_sections = rhodos_array_get_keys_by_value( rhodos_get_theme_option( 'front_page_sections' ), 1, false );
// 		if ( is_array( $rhodos_sections ) ) {
// 			foreach ( $rhodos_sections as $rhodos_section ) {
// 				get_template_part( apply_filters( 'rhodos_filter_get_template_part', 'front-page/section', $rhodos_section ), $rhodos_section );
// 			}
// 		}

// 		// Else if this page is blog archive
// 	} elseif ( is_page_template( 'blog.php' ) ) {
// 		get_template_part( apply_filters( 'rhodos_filter_get_template_part', 'blog' ) );

// 		// Else - display native page content
// 	} else {
// 		get_template_part( apply_filters( 'rhodos_filter_get_template_part', 'page' ) );
// 	}

// 	// Else get index template to show posts
// } else {
// 	get_template_part( apply_filters( 'rhodos_filter_get_template_part', 'index' ) );
// }

echo 'Hi There';

get_footer();
