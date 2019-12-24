<header id="header" class="nav-closed">
    <div id="branding">
      <?php
        if ( get_theme_mod( 'brand_logo' ) ) :
          $brand_logo = get_theme_mod( 'brand_logo');
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
      <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>

<!--      <ul>-->
<!--        <li class="page_item page-item-2466 current_page_item"><a href="/" aria-current="page">Home</a></li>-->
<!--        <li class="page_item page-item-2484"><a href="/meet-the-weavers/">Meet the Weavers</a></li>-->
<!--        <li class="page_item page-item-2486"><a href="/the-weave-story/">The Weave Story</a></li>-->
<!--        <li class="page_item page-item-2488"><a href="/be-a-weaver/">Be a Weaver</a></li>-->
<!--        <li class="page_item page-item-2490"><a href="/contact-us/">Contact Us</a></li>-->
<!--      </ul>-->
    </nav>
  </header>