<header id="header" class="nav-closed">
    <div id="branding">
      <?php
        if ( get_theme_mod( 'brand_logo' ) ) :
          $brand_logo = get_theme_mod( 'brand_logo');
        else:
          $brand_logo = get_stylesheet_directory_uri() . '/css/img/weave-aspen-logo.png';
        endif;
      ?>
      <a id="logo" href="/">
        <h1><?php bloginfo( 'name' ); ?></h1>
        <img src="<?php echo $brand_logo; ?>" alt="<?php bloginfo( 'name' ); ?>">
      </a>
      <div id="search">
        <?php get_search_form(); ?>
      </div>
      <div id="top-links">
        <ul>
          <li>
            <a
                href="#"
                class="social fb"
                title="Facebook"
                style="background-image: url(<?php echo get_template_directory_uri() .
                '/css/img/facebook.svg' ?>)"
            ></a>
          </li>
          <li>
            <a
                href="#"
                class="social tw"
                title="Twitter"
                style="background-image: url(<?php echo get_template_directory_uri() .
                '/css/img/twitter.svg' ?>)"
            ></a>
          </li>
          <li>
            <a
                href="#"
                class="social ig"
                title="Instagram"
                style="background-image: url(<?php echo get_template_directory_uri() .
                '/css/img/instagram.svg' ?>)"
            ></a>
          </li>
        </ul>
      </div>
    </div>
    <div id="hamburger-btn"></div>
    <nav id="menu" data-rellax-speed="-4" data-rellax-zindex="10"r>
      <?php wp_nav_menu( array( 'theme_location' => 'weave_menu' ) ); ?>


    </nav>
  </header>