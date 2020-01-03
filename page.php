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

<div id="contact-form">
  <div>
    <?php echo do_shortcode('[contact-form-7 id="2545" title="Contact form 1"]') ?>
  </div>
</div>

<?php
else:
  echo '<div id="tlaform">';
  echo '<p><span class="highlighted">Sign up for our newsletter</span> to receive updates on our work, invitations to get involved, including a future invitation to join our online community, and resources to support you and other Weavers.</p>';
  echo '<iframe id="signup" name="salesforce" onload="reloadIframe(this)" src="/sign-up" width="100%" height="100vh" frameborder="0" scrolling="no" ></iframe>';
  echo '<div id="successful-signup" style="font-size: 18px;">Thank you for signing up. You can expect to hear from us every two weeks.</div>';
  echo '</div>';
endif;
get_footer();
