<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- TYPEKIT / GOOGLE FONTS / FONTS.COM -->

		<!-- STYLES ARE ENQUED THROUGH FUNCTIONS.PHP -->

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<div class="container">

        <header>

            <!-- LOGO AND NAVIGATION -->
                      <div class="header-background">
                          <!-- SOCIAL MEDIA -->
                          <section class="social-media-top-hp">
                              <figure class="social">
                                <a href="https://www.facebook.com/pages/Champion-Brands-Inc/152755478079234">
                                  <img class="socialicon" src="<?php bloginfo('template_url'); ?>/assets/img/facebook.png" alt="facebook" />
                                </a>
                              </figure>

                              <figure class="social">
                                <a href="https://instagram.com/championbrands/">
                                  <img class="socialicon" src="<?php bloginfo('template_url'); ?>/assets/img/instagram.png" alt="instagram" />
                                </a>
                              </figure>

                              <figure class="social">
                                <a href="https://twitter.com/championbrands">
                                  <img class="socialicon" src="<?php bloginfo('template_url'); ?>/assets/img/twitter.png" alt="twitter" />
                                </a>
                              </figure>

                              <figure class="social">
                                <a href="https://www.linkedin.com/company/champion-brands-inc?trk=top_nav_home">
                                  <img class="socialicon" src="<?php bloginfo('template_url'); ?>/assets/img/linkedin.png" alt="linkedin" />
                                </a>
                              </figure>

                            <!-- <figure class="social">
                              <a href="#">
                                <img class="socialicon" src="img/search.png" alt="search" />
                              </a>
                            </figure> -->
                          </section>
                          <!-- SOCIAL MEDIA -->
                          <h1 class="visually-hidden">Champion Brands</h1>
                          <figure class="headerlogo">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/champion-logo.png" alt="Champion Brands" class="logo" />
                          </figure>
                        <a href="#main-menu" class="menu-toggle" role="button" id="main-menu-toggle" aria-expanded="false" aria-controls="main-menu" aria-label="Open main menu">
                          <span class="visually-hidden">Open main menu</span>
                          <span class="fa fa-bars fa-3x"></span>
                        </a>

                        <nav id="main-menu" class="main-menu" role="navigation" aria-expanded="false" aria-label="Main menu">
                            <a href="#" class="menu-close" role="button" id="main-menu-close" aria-expanded="false" aria-controls="main-menu" aria-label="Close main menu">
                                <span class="visually-hidden">Close main menu</span>
                                <span class="fa fa-close fa-2x"></span>
                            </a>
                            <ul>
                                <li><a href="home" class="navlist">Home</a></li>
                                <li><a href="about" class="navlist">About</a></li>
                                <li><a href="community" class="navlist">Community</a></li>
                                <li><a href="product" class="navlist">Products</a></li>
                                <li><a href="careers" class="navlist">Careers</a></li>
                                <li><a href="blog" class="navlist">Blog</a></li>
                                <li><a href="contact" class="navlist">Contact</a></li>
                            </ul>
                        </nav>
                        <a href="#main-menu-toggle" class="backdrop" tabindex="-1" aria-hidden="true" hidden></a>
                      </div>
                    </header><!-- <header> -->

        <main>
