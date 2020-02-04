<?php /* Template Name: Donation Form */



get_header();

while ( have_posts() ) {
the_post();

$page_image = get_the_post_thumbnail_url(get_the_ID(),'full');

?>
<div id="hero" style="background-image: url(<?php echo $page_image ?>);">
  <h1><?php the_title() ?></h1>
</div>
<?php
  $rhodos_seo = rhodos_is_on( rhodos_get_theme_option( 'seo_snippets' ) );
  ?>
  <article id="post-<?php the_ID(); ?>"
      <?php
      post_class('post_item_single post_type_' . esc_attr( get_post_type() )
          . ' post_format_' . esc_attr( str_replace( 'post-format-', '', get_post_format() ) )
      );
      if ( $rhodos_seo ) {
        ?>
        itemscope="itemscope"
        itemprop="articleBody"
        itemtype="http://schema.org/<?php echo esc_attr( rhodos_get_markup_schema() ); ?>"
        itemid="<?php echo esc_url( get_the_permalink() ); ?>"
        content="<?php echo esc_attr( get_the_title() ); ?>"
        <?php
      }
      ?>
  >
    <?php

    do_action( 'rhodos_action_before_post_data' );

    // Structured data snippets
    if ( $rhodos_seo ) {
      get_template_part( apply_filters( 'rhodos_filter_get_template_part', 'templates/seo' ) );
    }

    if ( is_singular( 'post' ) ) {
      $rhodos_post_thumbnail_type  = rhodos_get_theme_option( 'post_thumbnail_type' );
      $rhodos_post_header_position = rhodos_get_theme_option( 'post_header_position' );
      $rhodos_post_header_align    = rhodos_get_theme_option( 'post_header_align' );

      if ( 'default' === $rhodos_post_thumbnail_type ) {
        ?>
        <div class="header_content_wrap header_align_<?php echo esc_attr( $rhodos_post_header_align ); ?>">
          <?php
          // Post title and meta
          if ( 'above' === $rhodos_post_header_position ) {
            rhodos_show_post_title_and_meta();
          }

          // Featured image
          rhodos_show_post_featured_image();

          // Post title and meta
          if ( 'above' !== $rhodos_post_header_position ) {
            rhodos_show_post_title_and_meta();
          }
          ?>
        </div>
        <?php
      } elseif ( 'default' === $rhodos_post_header_position ) {
        // Post title and meta
        rhodos_show_post_title_and_meta();
      }
    }

    do_action( 'rhodos_action_before_post_content' );

    // Post content
    ?>
    <div class="post_content post_content_single entry-content" itemprop="mainEntityOfPage">
      <?php
        the_content();
      ?>
      <div id="wufoo-zhtmrjk0yo56y7"> Fill out my <a href="https://aspeninstitute.wufoo.com/forms/zhtmrjk0yo56y7">online form</a>. </div> <script type="text/javascript"> var zhtmrjk0yo56y7; (function(d, t) { var s = d.createElement(t), options = { 'userName':'aspeninstitute', 'formHash':'zhtmrjk0yo56y7', 'autoResize':true, 'height':'1199', 'async':true, 'host':'wufoo.com', 'header':'show', 'ssl':true }; s.src = ('https:' == d.location.protocol ?'https://':'http://') + 'secure.wufoo.com/scripts/embed/form.js'; s.onload = s.onreadystatechange = function() { var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return; try { zhtmrjk0yo56y7 = new WufooForm(); zhtmrjk0yo56y7.initialize(options); zhtmrjk0yo56y7.display(); } catch (e) { } }; var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr); })(document, 'script'); </script>

      <div class="post_meta post_meta_single">
        <?php

        // Post taxonomies
        the_tags( '<span class="post_meta_item post_tags">', ' ', '</span>' );

        // Share
        if ( rhodos_is_on( rhodos_get_theme_option( 'show_share_links' ) ) ) {
          rhodos_show_share_links(
              array(
                  'type'    => 'block',
                  'caption' => '',
                  'before'  => '<span class="post_meta_item post_share">',
                  'after'   => '</span>',
              )
          );
        }
        ?>
      </div>
  <?php
    do_action( 'rhodos_action_after_post_meta' );
  } ?>
    </div><!-- .entry-content -->


    <?php
    do_action( 'rhodos_action_after_post_content' );
    ?>
  </article>
}

<?php
get_footer();