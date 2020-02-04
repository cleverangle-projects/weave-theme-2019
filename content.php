<?php
/**
 * The default template to display the content of the single post, page or attachment
 *
 * Used for index/archive/search.
 *
 * @package WordPress
 * @subpackage RHODOS
 * @since RHODOS 1.0
 */

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

    do_action( 'rhodos_action_before_post_pagination' );

    wp_link_pages(
        array(
            'before'      => '<div class="page_links"><span class="page_links_title">' . esc_html__( 'Pages:', 'rhodos' ) . '</span>',
            'after'       => '</div>',
            'link_before' => '<span>',
            'link_after'  => '</span>',
            'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'rhodos' ) . ' </span>%',
            'separator'   => '<span class="screen-reader-text">, </span>',
        )
    );

    // Taxonomies and share
    if ( is_single() && ! is_attachment() ) {

      do_action( 'rhodos_action_before_post_meta' );

      // Post rating
      do_action(
          'trx_addons_action_post_rating', array(
              'class'                => 'single_post_rating',
              'rating_text_template' => esc_html__( 'Post rating: {{X}} from {{Y}} (according {{V}})', 'rhodos' ),
          )
      );

      ?>
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
    }
    ?>
  </div><!-- .entry-content -->


  <?php
  do_action( 'rhodos_action_after_post_content' );

  // Author bio
  if ( rhodos_get_theme_option( 'show_author_info' ) == 1 && is_single() && ! is_attachment() && get_the_author_meta( 'description' ) ) {
    do_action( 'rhodos_action_before_post_author' );
    get_template_part( apply_filters( 'rhodos_filter_get_template_part', 'templates/author-bio' ) );
    do_action( 'rhodos_action_after_post_author' );
  }
  // If comments are open or we have at least one comment, load up the comment template.
  if ( comments_open() || get_comments_number() ) {
    comments_template();
  }
  do_action( 'rhodos_action_after_post_data' );
  ?>
</article>
