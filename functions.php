<?php
/**
 * Child-Theme functions and definitions
 */

function rhodos_child_scripts()
{
  wp_enqueue_style('rhodos-parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/css/styles.css');
  wp_enqueue_style('animate-css', get_stylesheet_directory_uri() . '/css/animate.css');
  wp_enqueue_script('wow_js', get_stylesheet_directory_uri() . '/js/wow.min.js', array('jquery'),
      '1.0', true);
  wp_enqueue_script('theme_js', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'),
      '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'rhodos_child_scripts' );
 
// function weave_enqueue_styles() {
//   $parent_style ='styles';

//   wp_enqueue_style( 'child-style',
//       get_stylesheet_directory_uri() . '/css/styles.css',
//       array( $parent_style ),
//       wp_get_theme()->get('Version')
//   );
// }
// add_action( 'wp_enqueue_scripts', 'weave_enqueue_styles' );

add_action('customize_register', 'weave_customizer_settings');
function weave_customizer_settings($wp_customize) {
  $wp_customize->add_setting('brand_logo');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'brand_logo',
          array(
              'label' => 'Brand Logo',
              'section' => 'title_tagline',
              'settings' => 'brand_logo',
          )
      )
  );
  $wp_customize->add_setting('brand_logo_reverse');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'brand_logo_reverse',
          array(
              'label' => 'Brand Logo Reverse',
              'section' => 'title_tagline',
              'settings' => 'brand_logo_reverse',
          )
      )
  );
}

function weave_button_shortcode( $atts, $content = null ) {
  // Extract shortcode attributes
  extract( shortcode_atts( array(
      'url'    => '',
      'title'  => '',
      'target' => '',
      'text'   => '',
      'color'  => 'green',
  ), $atts ) );
  // Use text value for items without content
  $content = $text ? $text : $content;
  // Return button with link
  if ( $url ) {
    $link_attr = array(
        'href'   => esc_url( $url ),
        'title'  => esc_attr( $title ),
        'target' => ( 'blank' == $target ) ? '_blank' : '',
        'class'  => 'weave-button color-' . esc_attr( $color ),
    );
    $link_attrs_str = '';
    foreach ( $link_attr as $key => $val ) {
      if ( $val ) {
        $link_attrs_str .= ' ' . $key . '="' . $val . '"';
      }
    }
    return '<a' . $link_attrs_str . '><span>' . do_shortcode( $content ) . '</span></a>';
  }
  // No link defined so return button as a span
  else {
    return '<span class="weave-button"><span>' . do_shortcode( $content ) . '</span></span>';
  }
}
add_shortcode( 'button', 'weave_button_shortcode' );

function weave_btn_func( $atts ) {
  $a = shortcode_atts( array(
      'link' => '',
      'text' => 'Try it Out',
      'color' => 'green',
  ), $atts );
  return '<a style="background-color:' . $a['color'] . ';" class="weave-button" href="' . $a['link'] . '">' . $a['text'] . '</a>';
}
add_shortcode( 'weave-btn', 'weave_btn_func' );


function weave_squares_func( $atts ) {
  $a = shortcode_atts( array(
      'type' => '',
      'max' => '',
      'all' => false,
      'more' => true,
  ), $atts );

  ob_start() ?>
    <div class="page-links weave-boxes <?php echo $a['type'] ?>">
      <?php

      $loop = new WP_Query(array('post_type' => $a['type'], 'ignore_sticky_posts' => 1));
      if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post();
          setup_postdata($post);
          $page_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail');
          $box_link = get_the_permalink();
          if ($a['type'] == 'team') {
            $box_link = '/team#' . $post->post_name;
          }
          
          ?>
          <a class="page-link roll-link" href="<?php echo $box_link ?>">
            <div class="<?php echo $a['type'] ?>-wrapper">
              <div class="page-thumbnail" style="background-image: url('<?php echo
              $page_image; ?>')">

              </div>
            </div>
            <h4><?php the_title(); ?></h4>
            <p class="title"><?php echo get_field('field_5e15f8d365ec3') ?></p>
          </a>

        <?php

        endwhile;
      endif;
      wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly

      ?>
    </div>
    <?php
  $squares = ob_get_clean();
  return $squares;
}
add_shortcode( 'weave-squares', 'weave_squares_func' );

function weaver_post_type() {
  register_post_type( 'weaver',
// CPT Options
      array(
          'labels' => array(
              'name' => __( 'Weaver Stories' ),
              'singular_name' => __( 'Weaver Story' )
          ),
          'show_in_rest' => true,
          'supports'  => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions',
              'comments', 'page-attributes'),
          'public' => true,
          'has_archive' => false,
          'menu_icon' => 'dashicons-universal-access-alt',
          'rewrite' => array('slug' => 'weavers'),
      )
  );
}
add_action( 'init', 'weaver_post_type' );


function team_post_type() {
  register_post_type( 'team',
// CPT Options
      array(
          'labels' => array(
              'name' => __( 'Team' ),
              'singular_name' => __( 'Team Member' )
          ),
          'show_in_rest' => true,
          'supports'  => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions',
              'page-attributes'),
          'public' => true,
          'has_archive' => false,
          'menu_icon' => 'dashicons-admin-users',
          'rewrite' => array('slug' => 'team'),
      )
  );
}
add_action( 'init', 'team_post_type' );


function register_weave_menu() {
  register_nav_menu( 'weave_menu', __( 'Primary Weave Menu', 'rhodos' ) );
}
add_action( 'after_setup_theme', 'register_weave_menu' );


function add_toolbar_items($wp_admin_bar) {
  $home_id = get_option('page_on_front');

  $wp_admin_bar->add_node( array(
      'id'		=> 'edithome',
      'title' => 'Edit Homepage',
      'href' => '/wp-admin/post.php?post=' . $home_id . '&action=edit',
  ) );
}

add_action('admin_bar_menu', 'add_toolbar_items', 999);

function content_widgets_init() {
  register_sidebar( array(
      'name' => __( 'Content Widget Area', 'rhodos' ),
      'id' => 'content-widget-area',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<span style="display: none!important;">',
      'after_title' => '</span>',
  ) );
}
add_action( 'widgets_init', 'content_widgets_init' );

class Weave_Stories_Widget extends WP_Widget {

  function __construct() {
    parent::__construct(
        'weave-stories',
        __( 'Weave Stories', 'rhodos' ),
        array(
            'description' => __('Shows Weave Stories in a grid', 'rhodos' ),
            'menu_icon'   => 'dashicons-format-aside',
        )
    );

  }

  function widget( $args, $instance ) {
    static $widget_called = false;
    if ($widget_called) return;

    if(!empty($_POST['widget_name'])) {
      $widget_name = $instance['widget_name'];
    }

    ?>
    <div>Weave Stories Go Here</div>
    <?php
  }

  function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
  }

  function form( $instance ) {
    $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Stories', 'rhodos' );
    ?>
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
        <?php esc_attr_e( 'Title:', 'rhodos' ); ?>
      </label>

      <input
          class="widefat"
          id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
          name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
          type="text"
          value="<?php echo esc_attr( $title ); ?>">
    </p>
    <?php
  }
}

add_action( 'widgets_init', 'register_weave_stories' );
function register_weave_stories() {
  register_widget( 'Weave_Stories_Widget' );
}


add_filter( 'display_post_states', 'ecs_add_post_state', 10, 2 );
function ecs_add_post_state( $post_states, $post ) {
  if( $post->post_name == 'our-stories' ) {
    $post_states[] = 'Our Stories Page';
  }
  if( $post->post_name == 'join-us' ) {
    $post_states[] = 'Join Us Page';
  }
  return $post_states;
}