<?php
/**
 * The Classic template to display the content
 *
 * Used for index/archive/search.
 *
 * @package WordPress
 * @subpackage RHODOS
 * @since RHODOS 1.0
 */

$rhodos_template_args = get_query_var( 'rhodos_template_args' );
if ( is_array( $rhodos_template_args ) ) {
  $rhodos_columns    = empty( $rhodos_template_args['columns'] ) ? 2 : max( 1, $rhodos_template_args['columns'] );
  $rhodos_blog_style = array( $rhodos_template_args['type'], $rhodos_columns );
} else {
  $rhodos_blog_style = explode( '_', rhodos_get_theme_option( 'blog_style' ) );
  $rhodos_columns    = empty( $rhodos_blog_style[1] ) ? 2 : max( 1, $rhodos_blog_style[1] );
}
$rhodos_expanded   = ! rhodos_sidebar_present() && rhodos_is_on( rhodos_get_theme_option( 'expand_content' ) );
$rhodos_animation  = rhodos_get_theme_option( 'blog_animation' );
$rhodos_components = rhodos_array_get_keys_by_value( rhodos_get_theme_option( 'meta_parts' ) );
$rhodos_counters   = rhodos_array_get_keys_by_value( rhodos_get_theme_option( 'counters' ) );

if ( 'masonry' == $rhodos_blog_style[0]  && 'cpt_services' == get_post_type() ) {
  $categories = 'categories';
  $pos = strpos($rhodos_components, $categories);
  if ( $pos !==false ) {
    $rhodos_components = $categories;
  }
}

$rhodos_post_format = get_post_format();
$rhodos_post_format = empty( $rhodos_post_format ) ? 'standard' : str_replace( 'post-format-', '', $rhodos_post_format );


?><div class="
<?php
if ( ! empty( $rhodos_template_args['slider'] ) ) {
  echo ' slider-slide swiper-slide';
} else {
  echo ( 'classic' == $rhodos_blog_style[0] ? 'column' : 'masonry_item masonry_item' ) . '-1_' . esc_attr( $rhodos_columns );
}
?>
"><article id="post-<?php the_ID(); ?>"
      <?php
      post_class(
          'post_item post_format_' . esc_attr( $rhodos_post_format )
          . ' post_layout_classic post_layout_classic_' . esc_attr( $rhodos_columns )
          . ' post_layout_' . esc_attr( $rhodos_blog_style[0] )
          . ' post_layout_' . esc_attr( $rhodos_blog_style[0] ) . '_' . esc_attr( $rhodos_columns )
      );
      echo ( ! rhodos_is_off( $rhodos_animation ) && empty( $rhodos_template_args['slider'] ) ? ' data-animation="' . esc_attr( rhodos_get_animation_classes( $rhodos_animation ) ) . '"' : '' );
      ?>
  >
    <?php
    // Sticky label
    if ( is_sticky() && ! is_paged() ) {
      ?>
      <span class="post_label label_sticky"></span>
      <?php
    }

    // Featured image
    $rhodos_hover = ! empty( $rhodos_template_args['hover'] ) && ! rhodos_is_inherit( $rhodos_template_args['hover'] )
        ? $rhodos_template_args['hover']
        : rhodos_get_theme_option( 'image_hover' );
    rhodos_show_post_featured(
        array(
            'thumb_size' => rhodos_get_thumb_size(
                'classic' == $rhodos_blog_style[0]
                    ? ( strpos( rhodos_get_theme_option( 'body_style' ), 'full' ) !== false
                    ? ( $rhodos_columns > 2 ? 'big' : 'huge' )
                    : ( $rhodos_columns > 2
                        ? ( $rhodos_expanded ? 'med' : 'small' )
                        : ( $rhodos_expanded ? 'big' : 'med' )
                    )
                )
                    : ( strpos( rhodos_get_theme_option( 'body_style' ), 'full' ) !== false
                    ? ( $rhodos_columns > 2 ? 'masonry-big' : 'full' )
                    : ( $rhodos_columns <= 2 && $rhodos_expanded ? 'masonry-big' : 'masonry' )
                )
            ),
            'hover'      => $rhodos_hover,
            'no_links'   => ! empty( $rhodos_template_args['no_links'] ),
            'singular'   => false,
        )
    );

    if ( ! in_array( $rhodos_post_format, array( 'link', 'aside', 'status', 'quote' ) ) ) {
      ?>
      <div class="post_header entry-header">
        <?php
        do_action( 'rhodos_action_before_post_title' );

        // Post title
        if ( empty( $rhodos_template_args['no_links'] ) ) {
          the_title( sprintf( '<h4 class="post_title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' );
        } else {
          the_title( '<h4 class="post_title entry-title">', '</h4>' );
        }

        do_action( 'rhodos_action_before_post_meta' );

        // Post meta
        if ( ! empty( $rhodos_components ) && ! in_array( $rhodos_hover, array( 'border', 'pull', 'slide', 'fade' ) ) ) {
          rhodos_show_post_meta(
              apply_filters(
                  'rhodos_filter_post_meta_args', array(
                  'components' => $rhodos_components,
                  'counters'   => $rhodos_counters,
                  'seo'        => false,
              ), $rhodos_blog_style[0], $rhodos_columns
              )
          );
        }

        do_action( 'rhodos_action_after_post_meta' );
        ?>
      </div><!-- .entry-header -->
      <?php
    }

    if ( empty( $rhodos_template_args['hide_excerpt'] ) ) {  ?>
    <div class="post_content entry-content"><?php
      } ?>
      <?php
      if ( empty( $rhodos_template_args['hide_excerpt'] ) ) {
        ?>
        <div class="post_content_inner">
          <?php
          if ( has_excerpt() ) {
            the_excerpt();
          } elseif ( strpos( get_the_content( '!--more' ), '!--more' ) !== false ) {
            the_content( '' );
          } elseif ( in_array( $rhodos_post_format, array( 'link', 'aside', 'status' ) ) ) {
            the_content();
          } elseif ( 'quote' == $rhodos_post_format ) {
            $quote = rhodos_get_tag( get_the_content(), '<blockquote>', '</blockquote>' );
            if ( ! empty( $quote ) ) {
              rhodos_show_layout( wpautop( $quote ) );
            } else {
              the_excerpt();
            }
          } elseif ( substr( get_the_content(), 0, 4 ) != '[vc_' ) {
            the_excerpt();
          }
          ?>
        </div>
        <?php
      }
      // Post meta
      if ( in_array( $rhodos_post_format, array( 'link', 'aside', 'status', 'quote' ) ) ) {
        if ( ! empty( $rhodos_components ) ) {
          rhodos_show_post_meta(
              apply_filters(
                  'rhodos_filter_post_meta_args', array(
                  'components' => $rhodos_components,
                  'counters'   => $rhodos_counters,
              ), $rhodos_blog_style[0], $rhodos_columns
              )
          );
        }
      }
      // More button
      if ( false && empty( $rhodos_template_args['no_links'] ) && ! in_array( $rhodos_post_format, array( 'link', 'aside', 'status', 'quote' ) ) ) {
        ?>
        <p><a class="more-link" href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'Read more', 'rhodos' ); ?></a></p>
        <?php
      }
      if ( empty( $rhodos_template_args['hide_excerpt'] ) ) {  ?>
    </div><!-- .entry-content --><?php
  }?>

  </article></div><?php
// Need opening PHP-tag above, because div is a inline-block element (used as column)!
