<?php
/**
 * The template to display all single pages
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

  // If comments are open or we have at least one comment, load up the comment template.
  if ( ! is_front_page() && ( comments_open() || get_comments_number() ) ) {
    comments_template();
  }
}

if (is_page( 'Contact Us' )) :
?>


Contact Form

<?php
endif;
get_footer();
