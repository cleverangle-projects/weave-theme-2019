<?php
/**
 * The template to display single post
 *
 * @package WordPress
 * @subpackage RHODOS
 * @since RHODOS 1.0
 */

get_header();

while ( have_posts() ) {
  the_post();

  $page_image = get_the_post_thumbnail_url(get_the_ID(),'full');

  ?>
  <div id="hero" style="background-image: url(<?php echo $page_image ?>);">
    <h1><?php the_title() ?></h1>
  </div>
  <?php

  get_template_part( apply_filters( 'rhodos_filter_get_template_part', 'content', get_post_format() ), get_post_format() );

  // Previous/next post navigation.
  $rhodos_show_posts_navigation = ! rhodos_is_off( rhodos_get_theme_option( 'show_posts_navigation' ) );
  $rhodos_fixed_posts_navigation = ! rhodos_is_off( rhodos_get_theme_option( 'fixed_posts_navigation' ) ) ? 'nav-links-fixed fixed' : '';
  if ( $rhodos_show_posts_navigation ) {
    ?>
    <div class="nav-links-single<?php echo ' ' . esc_attr( $rhodos_fixed_posts_navigation ); ?>">
      <?php
      the_post_navigation(
          array(
              'next_text' => '<span class="nav-arrow"></span>'
                  . '<span class="screen-reader-text">' . esc_html__( 'Next', 'rhodos' ) .
                  '</span> '
                  . '<h6 class="post-title">%title</h6>',
              'prev_text' => '<span class="nav-arrow"></span>'
                  . '<span class="screen-reader-text">' . esc_html__( 'Prev', 'rhodos' ) .
                  '</span> '
                  . '<h6 class="post-title">%title</h6>',
          )
      );
      ?>
    </div>
    <?php
  }

  // Related posts
//  if ( rhodos_get_theme_option( 'related_position' ) == 'below_content' ) {
//    do_action( 'rhodos_action_related_posts' );
//  }

  // If comments are open or we have at least one comment, load up the comment template.
  if ( comments_open() || get_comments_number() ) {
    comments_template();
  }

  echo '<div id="tlaform">';
  echo '<p><span class="highlighted">Sign up for our newsletter</span> to receive updates on our work, invitations to get involved, including a future invitation to join our online community, and resources to support you and other Weavers.</p>';
  echo '<iframe id="front-signup" name="example" onload="resizeIframe(this)" src="/sign-up" width="100%" height="100vh" frameborder="0" scrolling="no" > </iframe>';
  echo '</div>';
}

get_footer();
