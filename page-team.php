<?php
/* Template Name: Team Page */

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

  ?>
  <div id="weave-team" class="page-links">
    <?php

    $loop = new WP_Query( array( 'post_type' => 'team', 'ignore_sticky_posts' => 1) );
    if ( $loop->have_posts() ) :
      while ( $loop->have_posts() ) : $loop->the_post();
        $page_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
        setup_postdata( $post);

        ?>
        <div class="wp-block-columns has-2-columns team-member" id="<?php echo $post->post_name;
        ?>">
          <div class="wp-block-column">
            <?php echo get_the_post_thumbnail( $post->ID, 'medium', array( 'class' => 'aligncenter'
            ) ) ?>
          </div>
          <div class="wp-block-column">
            <h3><?php the_title(); ?></h3>
            <h5 class="title"><?php echo get_field('field_5e15f8d365ec3') ?></h5>
            <p class="quote"><?php echo get_field('field_5e15f8d865ec4') ?></p>
            <?php echo the_content() ?>
            <a class="email-weave-team" href="mailto:<?php echo get_field('field_5e3d009a2626c')
            ?>">Email</a>
          </div>
        </div>
        <?php
        wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly

      endwhile;
    endif;

    ?>
  </div>

  <?php

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
