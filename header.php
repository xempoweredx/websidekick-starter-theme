<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$user = wp_get_current_user();
$loggedin = is_user_logged_in();

$container = get_theme_mod( 'understrap_container_type' );

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-2679884-10"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'UA-2679884-10');
	</script>


	<?php wp_head(); ?>
</head>

<style>
	<?php
	$sidekick_options = get_option('websidekick_main_options');

	$primary_link_color			= $sidekick_options['primary_link_color'];
	$primary_link_hover_color	= $sidekick_options['primary_link_hover_color'];
	$menu_bg_color 				= $sidekick_options['menu_bg_color'];
	$menu_link_color 			= $sidekick_options['menu_link_color'];
	$menu_link_hover_color 		= $sidekick_options['menu_link_hover_color'];
	$menu_link_hover_bg_color 	= $sidekick_options['menu_link_hover_bg_color'];
	$mobile_menu_bg_color		= $sidekick_options['mobile_menu_bg_color'];
	$main_text_color			= $sidekick_options['main_text_color'];

	$custom_logo_id				= get_theme_mod( 'custom_logo' );
	$custom_logo 				= wp_get_attachment_image_src( $custom_logo_id , 'full' );

	if ( $main_text_color ) {
		echo 'body {
			color: ' . ( $main_text_color ) . '; 
		}';
	} else {
		echo 'body {
			color: #555; 
		}';
	}
	if ( $primary_link_color ) {
		echo 'a, .text-primary {
			color: ' . ( $primary_link_color ) . '; 
		}';
	} else {
		echo 'a, .text-primary {
			color: #007bff; 
		}';
	}
	if ( $primary_link_hover_color ) {
		echo 'a:hover, .text-primary:hover {
			color: ' . ( $primary_link_hover_color ) . '; 
		}';
	} else {
		echo 'a:hover, .text-primary:hover {
			color: #0056b3; 
		}';
	}
	if ( $menu_link_color ) {
		echo '.main-menu-navbar .navbar-nav .nav-link, .main-menu-navbar .navbar-brand a {
			color: ' . ( $menu_link_color ) . '; 
		}';
	} else {
		echo '.main-menu-navbar .navbar-nav .nav-link, .main-menu-navbar .navbar-brand a {
			color: #23343b; 
		}';
	}
	if ( $menu_bg_color ) {
		echo '.main-menu-navbar .navbar-nav .nav-link, .main-menu-navbar .navbar-brand a {
			background-color: ' . ( $menu_bg_color ) . '; 
		}';
	} else {
		echo '.main-menu-navbar .navbar-nav .nav-link, .main-menu-navbar .navbar-brand a {
			color: #fff; 
		}';
	}
	if ( $menu_link_hover_color ) {
		echo '.main-menu-navbar .navbar-nav .nav-link:hover, .main-menu-navbar .navbar-brand a:hover {
			color: ' . ( $menu_link_hover_color ) . '; 
		}';
	} else {
		echo '.main-menu-navbar .navbar-nav .nav-link:hover, .main-menu-navbar .navbar-brand a:hover {
			color: #23343b; 
		}';
	}
	if ( $menu_link_hover_bg_color ) {
		echo '.main-menu-navbar .navbar-nav .nav-link:hover, .main-menu-navbar .navbar-brand a:hover {
			background-color: ' . ( $menu_link_hover_bg_color ) . '; 
		}';
	} else {
		echo '.main-menu-navbar .navbar-nav .nav-link:hover, .main-menu-navbar .navbar-brand a:hover {
			background-color: transparent; 
		}';
	}
	echo '.main-menu-navbar.main-menu-mobile .navbar-nav .nav-link,
	.main-menu-navbar.main-menu-mobile .navbar-brand a,
	.main-menu-navbar.main-menu-mobile .dropdown-menu,
	.main-menu-navbar.main-menu-mobile .dropdown-menu a {
		color: #fff;
		border: none !important;
	}';
	if ( $mobile_menu_bg_color ) {
		echo '.main-menu-navbar.main-menu-mobile .navbar-nav .nav-link,
		.main-menu-navbar.main-menu-mobile .navbar-brand a,
		.main-menu-navbar.main-menu-mobile .dropdown-menu,
		.main-menu-navbar.main-menu-mobile .dropdown-menu a {
			background-color: ' . ( $mobile_menu_bg_color ) . '; 
		}';
	} else {
		echo '.main-menu-navbar.main-menu-mobile .navbar-nav .nav-link,
		.main-menu-navbar.main-menu-mobile .navbar-brand a,
		.main-menu-navbar.main-menu-mobile .dropdown-menu,
		.main-menu-navbar.main-menu-mobile .dropdown-menu a {
			color: #007bff; 
		}';
	}
	if ( $mobile_menu_bg_color ) {
		echo '.offcanvas-collapse {
			background-color: ' . ( $mobile_menu_bg_color ) . '; 
		}';
	}
	else {
		echo 'background-color: #007bff;';
	}
	if ( $mobile_menu_bg_color ) {
		echo '.fixed-bottom {
			background-color: ' . ( $mobile_menu_bg_color ) . '; 
		}';
	}
	else {
		echo 'background-color: #007bff;';
	}

?>

</style>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page"><!-- closed in footer.php -->

	<!-- ******************* Mobile Top Area ******************* 

	<div class="mobile-top-wrapper d-flex d-md-none justify-content-between w-100 text-white py-3 px-3 position-absolute">
		<div class="mobile-top-brand">
			FBC Glencoe
		</div>
		<div class="mobile-top-phone">
			<a class="text-white" href="tel:256-492-2460">
				<span class="mr-2">
					<i class="fal fa-phone"></i>
				</span>
				<span>256-492-2460</span>
			</a>
		</div>
	</div>

	******************* Main Menu Desktop ******************* -->

	<?php // if ( is_front_page() ) : ?>

		<!-- <div id="wrapper-navbar" class="main-menu-navbar main-menu-desktop navbar-top-trans d-none d-md-block" itemscope itemtype="http://schema.org/WebSite"> -->

	<?php // else : ?>

		<div id="wrapper-navbar" class="main-menu-navbar main-menu-desktop d-none d-md-block" itemscope itemtype="http://schema.org/WebSite" style="background-color:<?php if ( $menu_bg_color ) { echo ( $menu_bg_color ); } ?>;">

	<?php // endif; ?>

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
		<nav class="navbar navbar-expand-md">
			<div class="container" >
				<h1 class="navbar-brand mb-0">
					<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php if ( has_custom_logo() ) { ?><img class="" src="<?php echo esc_url( $custom_logo[0] ); ?>" style="max-width: 230px;" /> <?php } else { bloginfo( 'name' ); } ?></a>
				</h1>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav justify-content-md-center w-100',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>

			</div><!-- .container -->
		</nav><!-- .site-navigation -->
	</div><!-- #wrapper-navbar end -->

	<!-- ******************* Main Menu Mobile ******************* -->

	<div id="wrapper-navbar" class="main-menu-navbar main-menu-mobile d-md-none" itemscope itemtype="http://schema.org/WebSite">
		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
		<nav class="navbar">
			<div class="container" >

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'navbar-collapse offcanvas-collapse', // Offcanvas wrapper
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav justify-content-md-center w-100',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>

			</div><!-- .container -->
		</nav><!-- .site-navigation -->
	</div><!-- #wrapper-navbar end -->

	
<!-- ======== MOBILE BOTTOM BAR =========
	Uncomment HTML & PHP, then edit links, icons, and text to have a fixed bar and menu at the bottom of mobile devices.
	*Requires "css/menu-mobile_off-canvas.css" & "js/menu-mobile_off-canvas.js" to be enqueued. -->
	
    <!-- UNCOMMENT!
    <div class="d-md-none fixed-bottom py-2">
    	<div class="container">
  			<div class="row">

  				<div class="col text-center pr-2 pr-sm-3">
    				<a class="text-white d-block" href="<?php //echo esc_url( home_url() ); ?>">
    					<div><i class="fal fa-rocket"></i></div>
    					<div class="small font-weight-light" style="line-height: 1rem;">HOME</div>
      				</a>
      			</div>

      			<div class="col text-center px-2 px-sm-3">
    				<a class="text-white d-block" href="<?php //echo esc_url( home_url( '/tag/blog' ) ); ?>">
    					<div><i class="fal fa-jedi"></i></div>
    					<div class="small font-weight-light" style="line-height: 1rem;">BLOG</div>
      				</a>
      			</div>

      			<div class="col text-center px-2 px-sm-3">
    				<a class="text-white d-block" href="<?php //echo esc_url( home_url( '/recommended-reading' ) ); ?>">
    					<div><i class="fal fa-books"></i></div>
    					<div class="small font-weight-light" style="line-height: 1rem;">BOOKS</div>
      				</a>
      			</div>

      			<div class="col text-center px-2 px-sm-3">
    				<a class="text-white d-block" href="<?php //echo esc_url( home_url( '/articles-for-biblical-manhood' ) ); ?>">
    					<div><i class="fal fa-file-alt"></i></div>
    					<div class="small font-weight-light" style="line-height: 1rem;">LINKS</div>
      				</a>
      			</div>

      			<div class="col text-center pl-2 pl-sm-3"> -->

      				<!-- FAB Navbar Toggler -->

      				<!-- UNCOMMENT!
					<div class="fab-toggler-wrap menu-closed">
						<button class="fab-toggler collapsed btn btn-block border-none bg-transparent text-white text-center p-0" type="button" data-toggle="offcanvas" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span class="toggler-icon d-block position-relative mx-auto" style="width: 16px; height: 24px;">
								<i class="position-absolute text-white menu-icon menu-closed-icon far fa-bars" style="top: 0; left: 0;"></i>
								<i class="position-absolute text-white menu-icon menu-open-icon far fa-times fa-lg" style="top: 0; left: 0;"></i>
							</span>
							<span class="font-weight-light d-block position-relative" style="line-height: 1rem;">MENU</span>
						</button>
					</div>

      			</div>
      			
      		</div>
      	</div>
    </div> -->

    <!-- ======== END MOBILE BOTTOM BAR ========= -->