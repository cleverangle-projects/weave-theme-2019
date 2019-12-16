<?php
/**
 * The Front Page template file.
 *
 * @package WordPress
 * @subpackage RHODOS
 * @since RHODOS 1.0.31
 */

get_header();

?>
<section id="content-boxes">
  <?php
  if( have_rows('field_5df68d6f05f9c') ):
    while ( have_rows('field_5df68d6f05f9c') ) : the_row();
      $box_type = get_sub_field('field_5df6bc90f4bea');
      $image = get_sub_field('field_5df6b36c51d17')['url'];
      $headline = get_sub_field('field_5df68f162f3b9');
      $show_headline = get_sub_field('field_5df6c11f2c756');
      $overlay_color = get_sub_field('field_5df6b78dbcd98');
      $copy = get_sub_field('field_5df68f2456665');

      echo '<div class="box box-type-' . $box_type . ' box-' . get_row_index() . '" style="background-image: url(' .
          $image
          .')">';

      if ($box_type == 'one_col' || $box_type == 'about' ):
        echo '<div class="box-wide">';
        if ($show_headline) :
          echo '<h2>' . $headline . '</h2>';
        endif;
        echo $copy;
        if ($box_type == 'about') :
          if( have_rows('field_5df6d0fddcce4') ):
            echo '<div class="page-links">';
            while ( have_rows('field_5df6d0fddcce4') ) : the_row();
              $post_object = get_sub_field('field_5df6d110dcce5');
              if( $post_object ):
                $post = $post_object;
                $page_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );

                setup_postdata( $post);

                ?>
                <a class="page-link" href="<?php the_permalink(); ?>" style="background-image: url('<?php echo
                $page_image; ?>')">
                  <div>
                    <h4><?php the_title(); ?></h4>
                  </div>
                </a>
                <?php
                wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
              endif;
            endwhile;
            echo '</div>';
          endif;
        endif;
        echo '</div>';
      endif;

      if ($box_type == 'two_col'):
        echo '<div class="box-image"></div>';
        echo '<div class="box-inner"><div>';
        echo '<h2>' . $headline . '</h2>';
        echo $copy;
        echo '<div class="overlay" style="background-color: ' . $overlay_color . '"></div>';
        echo '</div></div>';
      endif;

      echo '</div>';
    endwhile;
  else :
    // no rows found\
  endif;
  ?>
</section>
<!--<section id="video"></section>-->
<!--<section id="about">-->
<!--  <h2>Be a Weaver</h2>-->
<!--</section>-->
<!--<section id="signup">-->
<!--  <h2>Be a Weaver</h2>-->
<!--</section>-->
<?php
get_footer();
