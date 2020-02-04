<?php
/* Template Name: About Page */

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

  if( is_active_sidebar( 'content-widget-area' ) ) :
    dynamic_sidebar( 'content-widget-area' );
  endif;

  // If comments are open or we have at least one comment, load up the comment template.
  if ( ! is_front_page() && ( comments_open() || get_comments_number() ) ) {
    comments_template();
  }
}

echo '<div id="tlaform">';
echo '<p><span class="highlighted">Sign up for our newsletter</span> to receive updates on our work, invitations to get involved, including a future invitation to join our online community, and resources to support you and other Weavers.</p>';
echo '<iframe id="signup" name="salesforce" onload="reloadIframe(this)" src="/sign-up" width="100%" height="100vh" frameborder="0" scrolling="no" ></iframe>';
echo '<div id="successful-signup" style="font-size: 16px; text-align: left;">Thanks for your interest in Weave: The Social Fabric Project and signing up to get our newsletters and updates about the growing Weaver Movement across the US. You can expect to hear from us about every 2-3 weeks. Feel free to email us with ideas and requests at <a href="mailto:Weave@AspenInstitute.org" target="_blank">Weave@AspenInstitute.org</a>. Learn more about us at <a href="http://WeaveSocialFabric.org" target="_blank">WeaveSocialFabric.org</a>.</div>';
echo '</div>';

?>
  <script>
    (function($) {
      window.addEventListener("message", function(event) {
        var iframeH = $('#signup');
        var formH = event.data['height'];
        var optionSel = event.data['value'];

        var extra = 100;
        if ($(window).height() < 700) {
          extra = 100;
        }
        console.log(formH + extra);
        console.log(formH + ' vs ' + iframeH.height());

        if ((formH > iframeH.height() - 10) && (optionSel == 'tfa_109')) {
          $('#signup').css('height', formH + extra + 'px');
          //$('#signup').attr('style', function(i,s) { return (s || '') + 'height: ' + iframeH.height() + 60 + 'px !important;' });
          console.log('new height:' + iframeH.height());
        }
      });

    })( jQuery );
  </script>

<?php

get_footer();
