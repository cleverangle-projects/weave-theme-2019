<?php
/* Template Name: Join Page */

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

echo '<div id="tlaform">';
echo '<div id="signup-copy"></div>';
echo '<iframe id="signup" name="salesforce" onload="reloadIframe(this)" src="/sign-up" width="100%" height="100vh" frameborder="0" scrolling="no" ></iframe>';
echo '<div id="successful-signup" style="font-size: 18px;">Thank you for signing up. You can expect to hear from us every two weeks.</div>';
echo '</div>';

?>
<script>
  (function($) {
    var divider = $('hr.wp-block-separator'),
        signupCopy = divider.nextAll();

    divider.hide();
    var el = $.map(signupCopy, function(val, i) {
      $('#signup-copy').append(val.outerHTML);
    });

    signupCopy.hide();
    console.log(signupCopy);


    console.log($('#signup-copy'));

    // $('#signup-copy').html = el[0];

  })( jQuery );
</script>

<?php

get_footer();
