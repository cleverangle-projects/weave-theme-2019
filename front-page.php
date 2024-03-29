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
      $bg_type = get_sub_field('field_5e019542de230');
      $image = get_sub_field('field_5df6b36c51d17')['url'];
      $headline = get_sub_field('field_5df68f162f3b9');
      $show_headline = get_sub_field('field_5df6c11f2c756');
      $bg_color = get_sub_field('field_5df6b78dbcd98');
      $copy = get_sub_field('field_5df68f2456665');
      $copy_2 = get_sub_field('copy_col_two');
      $slug = get_sub_field('field_5e011e77e1979');

//      $btn = get_field('field_5e0197e638f1d');
//      if( $btn ):
//        $btn_url = $btn['url'];
//        $btn_title = $btn['title'];
//        $btn_target = $btn['target'] ? $btn['target'] : '_self';
//      endif;

      $bg = '';

      if (have_rows('field_5e01965342ca1')) :
        while (have_rows('field_5e01965342ca1')) : the_row();
          $word = get_sub_field('field_5e01969442ca2');
          $matchWords[] = "/$word/i";
        endwhile;
        $headline = preg_replace($matchWords, '<span class="highlighted">$0</span>', $headline);
        $copy = preg_replace($matchWords, '<span class="highlighted">$0</span>', $copy);
      endif;

      if ($bg_type == 'image') {
        $bg = 'background-image: url(' . $image .')';
      }

      if ($bg_type == 'color') {
        $bg = 'background-color:' . $bg_color;
      }

      if ($bg_type == 'video') {

      }

      echo '<div ' . ( $slug ? 'id="' . $slug . '"' : '') . ' class="box box-type-' . $box_type . ' box-' .
              get_row_index() . '" style="' . $bg . '">';

      if (get_row_index() == 1):
      ?>
        <div class="background-video-container">
          <video autoplay loop id="video-background" muted playsinline controls="false">

          </video>
        </div>
        <?php
        echo '<div class="box-wide" data-type="'. $box_type . '">';
        if ($show_headline) :
          echo '<h2 class="wow fadeIn">' . $headline . '</h2>';
        endif;
        echo '<div class="wow fadeIn">' . $copy . '</div>';
        echo '</div>';
      else:
        echo '<div class="box-wide" data-type="'. $box_type . '">';

        if ($box_type == 'col_two_box') :
          echo '<div class="copy_one">';
        endif;

        if ($show_headline) :
          echo '<h2 class="wow fadeIn">' . $headline . '</h2>';
        endif;

        echo '<div class="wow fadeIn">' . $copy . '</div>';

        if ($box_type == 'col_two_box') :
          echo '</div>';
          echo '<div class="copy_two">' . $copy_2 . '</div>';
        endif;

            if ($box_type == 'sign_up_box') :
              echo '<iframe id="signup" name="salesforce" onload="reloadIframe(this)" src="/sign-up" width="100%" height="100vh" frameborder="0" scrolling="no" ></iframe>';
              echo '<div id="successful-signup" style="font-size: 16px; text-align: left;">Thanks for your interest in Weave: The Social Fabric Project and signing up to get our newsletters and updates about the growing Weaver Movement across the US. You can expect to hear from us about every 2-3 weeks. Feel free to email us with ideas and requests at <a href="mailto:Weave@AspenInstitute.org" target="_blank">Weave@AspenInstitute.org</a>. Learn more about us at <a href="http://WeaveSocialFabric.org" target="_blank">WeaveSocialFabric.org</a>.</div>';
            endif;

            if ($box_type == 'about_box') :
              if( have_rows('field_5df6d0fddcce4') ):
                echo '<div class="page-links">';
                while ( have_rows('field_5df6d0fddcce4') ) : the_row();
                  $post_object = get_sub_field('field_5df6d110dcce5');
                  if( $post_object ):
                    $post = $post_object;
                    $page_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );

                    setup_postdata( $post);

                    ?>
                    <a class="page-link home-link" href="<?php the_permalink(); ?>">
                      <div class="page-thumbnail" style="background-image: url('<?php echo
                      $page_image; ?>')">

                      </div>
                      <h4><?php the_title(); ?></h4>
                    </a>
                    <?php
                    wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
                  endif;
                endwhile;
                echo '</div>';
                echo '<a class="weave-button" href="#"><span>More Stories</span>';
                echo '<span>';
                echo '<svg id="arrow-down" viewBox="0 0 18 11"><polygon points="16,0 9,7 2,0 0,2 9,11 18,2 "></polygon></svg></a>';
                echo '</span>';
                echo '</a>';
              endif;
            endif;
          echo '</div><!-- box-wide -->';
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
