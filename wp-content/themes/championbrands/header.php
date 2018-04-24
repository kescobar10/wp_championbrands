<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php the_title(''); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- TYPEKIT / GOOGLE FONTS / FONTS.COM -->
		<link href="https://fonts.googleapis.com/css?family=Zilla+Slab:400,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">

		<!-- SCRIPT -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
          // Add smooth scrolling to all links
          $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();

              // Store hash
              var hash = this.hash;

              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 500, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });
        });
        </script>

		<!-- STYLES ARE ENQUED THROUGH FUNCTIONS.PHP -->

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<div class="container">

		<header>

			<!-- LOGO AND NAVIGATION -->
			<div class="header-background">
				<a href="index.html"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-white.png" alt="Champion Brands" class="logo-desktop"></a>
				<!-- <a href="#main-menu" class="menu-toggle" role="button" id="main-menu-toggle" aria-expanded="false" aria-controls="main-menu" aria-label="Open main menu">
					<span class="visually-hidden">Open main menu</span>
					<span class="fa fa-bars fa-2x"></span></a> -->

					<nav id="main-menu" class="main-menu" role="navigation" aria-expanded="false" aria-label="Main menu">
						<!-- <a href="#main-menu-toggle" class="menu-close" role="button" id="main-menu-close" aria-expanded="false" aria-controls="main-menu" aria-label="Close main menu">
							<span class="visually-hidden">Close main menu</span>
							<span class="fa fa-close fa-2x"></span></a> -->
							<ul>
								<li><a href="home" class="navlist">Home</a></li>
								<li><a href="about" class="navlist current-nav">About</a></li>
								<li><a href="community" class="navlist">Community</a></li>
								<li><a href="product" class="navlist">Products</a></li>
								<li><a href="careers" class="navlist">Careers</a></li>
								<li><a href="blog" class="navlist">Blog</a></li>
								<li><a href="contact" class="navlist">Contact</a></li>
							</ul>
						</nav>
						<!-- <a href="#main-menu-toggle" class="backdrop" tabindex="-1" aria-hidden="true" hidden></a> -->
			</div>
			<h1 class="visually-hidden">Champion Brands</h1>
			<figure class="headerlogo">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/champion-logo.png" alt="Champion Brands" class="logo logo-mobile" /></a>
			</figure>
		</header><!-- <header> -->

        <main>
