<?php
/**
 * The Footer: widgets area, logo, footer menu and socials
 *
 * @package WordPress
 * @subpackage RHODOS
 * @since RHODOS 1.0
 */

// Widgets area inside page content
rhodos_create_widgets_area( 'widgets_below_content' );
?>
</div><!-- </.content> -->

<?php
// Show main sidebar
get_sidebar();

$rhodos_body_style = rhodos_get_theme_option( 'body_style' );
if ( 'fullscreen' != $rhodos_body_style ) {
  ?>
  </div><!-- </.content_wrap> -->
  <?php
}

// Widgets area below page content and related posts below page content
$rhodos_widgets_name = rhodos_get_theme_option( 'widgets_below_page' );
$rhodos_show_widgets = ! rhodos_is_off( $rhodos_widgets_name ) && is_active_sidebar( $rhodos_widgets_name );
$rhodos_show_related = is_single() && rhodos_get_theme_option( 'related_position' ) == 'below_page';
if ( $rhodos_show_widgets || $rhodos_show_related ) {
  if ( 'fullscreen' != $rhodos_body_style ) {
    ?>
    <div class="content_wrap">
    <?php
  }
  // Show related posts before footer
  if ( $rhodos_show_related ) {
    do_action( 'rhodos_action_related_posts' );
  }

  // Widgets area below page content
  if ( $rhodos_show_widgets ) {
    rhodos_create_widgets_area( 'widgets_below_page' );
  }
  if ( 'fullscreen' != $rhodos_body_style ) {
    ?>
    </div><!-- </.content_wrap> -->
    <?php
  }
}
?>
</div><!-- </.page_content_wrap> -->

<?php
//// Single posts banner before footer
//if ( is_singular( 'post' ) ) {
//  rhodos_show_post_banner('footer');
//}
//// Footer
//$rhodos_footer_type = rhodos_get_theme_option( 'footer_type' );
//if ( 'custom' == $rhodos_footer_type && ! rhodos_is_layouts_available() ) {
//  $rhodos_footer_type = 'default';
//}
//get_template_part( apply_filters( 'rhodos_filter_get_template_part', "templates/footer-{$rhodos_footer_type}" ) );
//?>

<footer id="footer">

<?php
if ( get_theme_mod( 'brand_logo_reverse' ) ) :
$brand_logo_rev = get_theme_mod( 'brand_logo_reverse');
endif;
?>
  <div class="contact-links">
    <a class="facebook-btn" href="" alt="Facebook"></a>
    <a class="twitter-btn" href="" alt="Twitter"></a>
    <a class="email-btn" href="" alt="Email"></a>
  </div>
  <div>
    <img id="logo-rev" src="<?php echo $brand_logo_rev; ?>" alt="">
  </div>
</footer>
<div id="rights">
  <p>Copyright © 2019. Weave, The Social Project. All rights reserved.</p>
</div>
</div><!-- /.page_wrap -->

</div><!-- /.body_wrap -->

<?php wp_footer(); ?>

</body>
</html>