<?php
/**
 * The Header: Logo and main menu
 *
 * @package WordPress
 * @subpackage RHODOS
 * @since RHODOS 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js
    <?php
      echo ' scheme_' . esc_attr( rhodos_get_theme_option( 'color_scheme' ) );
    ?>
      ">
<head>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php do_action( 'rhodos_action_before_body' ); ?>
  <div class="body_wrap">

    <div class="page_wrap">
      <?php
      // Desktop header
      // $rhodos_header_type = rhodos_get_theme_option( 'header_type' );
      // if ( 'custom' == $rhodos_header_type && ! rhodos_is_layouts_available() ) {
      //  $rhodos_header_type = 'default';
      // }
      // get_template_part( apply_filters( 'rhodos_filter_get_template_part', "templates/header-{$rhodos_header_type}" ) );

      // // Side menu
      // if ( in_array( rhodos_get_theme_option( 'menu_style' ), array( 'left', 'right' ) ) ) {
      //  get_template_part( apply_filters( 'rhodos_filter_get_template_part', 'templates/header-navi-side' ) );
      // }

      // // Mobile menu
      // get_template_part( apply_filters( 'rhodos_filter_get_template_part', 'templates/header-navi-mobile' ) );
     
      include_once('inc/weave-header.php');
      
      // Single posts banner after header
      rhodos_show_post_banner( 'header' );
      ?>

      <div class="page_content_wrap">
        <?php
        // Single posts banner on the background
        if ( is_singular( 'post' ) ) {

          rhodos_show_post_banner( 'background' );

          $rhodos_post_thumbnail_type  = rhodos_get_theme_option( 'post_thumbnail_type' );
          $rhodos_post_header_position = rhodos_get_theme_option( 'post_header_position' );
          $rhodos_post_header_align    = rhodos_get_theme_option( 'post_header_align' );

          // Boxed post thumbnail
          if ( in_array( $rhodos_post_thumbnail_type, array( 'boxed', 'fullwidth') ) ) {
            ?>
            <div class="header_content_wrap header_align_<?php echo esc_attr( $rhodos_post_header_align ); ?>">
              <?php
              if ( 'boxed' === $rhodos_post_thumbnail_type ) {
                ?>
                <div class="content_wrap">
                <?php
              }

              // Post title and meta
              if ( 'above' === $rhodos_post_header_position ) {
                rhodos_show_post_title_and_meta();
              }

              // Featured image
              rhodos_show_post_featured_image();

              // Post title and meta
              if ( in_array( $rhodos_post_header_position, array( 'under', 'on_thumb' ) ) ) {
                rhodos_show_post_title_and_meta();
              }

              if ( 'boxed' === $rhodos_post_thumbnail_type ) {
                ?>
                </div>
                <?php
              }
              ?>
            </div>
            <?php
          }
        }

        if ( 'fullscreen' != rhodos_get_theme_option( 'body_style' ) ) {
          ?>
          <div class="content_wrap">
            <?php
        }

        // Widgets area above page content
        rhodos_create_widgets_area( 'widgets_above_page' );
        ?>

        <div class="content">
          <?php
          // Widgets area inside page content
          rhodos_create_widgets_area( 'widgets_above_content' );
