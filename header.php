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

<!--
	 _____ _    _          _ _         _                 _       ___
	|_   _| |  |/         | | |       | |               | |     |_  |
	  | | | |_ ___    __ _| | |   __ _| |__   ___  _   _| |_      | | ___  ___ _   _ ___
	  | | | __/ __|  / _` | | |  / _` | '_ \ / _ \| | | | __|     | |/ _ \/ __| | | / __|
	 _| |_| |_\__ \ | (_| | | | | (_| | |_) | (_) | |_| | |_  /\__/ /  __/\__ \ |_| \__ \
	 \___/ \__|___/  \__,_|_|_|  \__,_|_.__/ \___/ \__,_|\__| \____/ \___||___/\__,_|___/
-->

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
	$menu_options = get_option('websidekick_menu_options');

	$main_text_color			= $sidekick_options['main_text_color'];
	$primary_link_color			= $sidekick_options['primary_link_color'];
	$primary_link_hover_color	= $sidekick_options['primary_link_hover_color'];
	$desktop_menu_scroll_check	= $menu_options['desktop_menu_scroll'];
		if ( ($desktop_menu_scroll_check) == 'scrollfixed' ) { $desktop_menu_scroll = 'scroll-fixed'; } 
		elseif ( ($desktop_menu_scroll_check) == 'fixed' ) { $desktop_menu_scroll = 'fixed-top'; } 
		else { $desktop_menu_scroll = ''; }
	$home_menu_trans_check		= $menu_options['home_menu_trans'];
		if ( $home_menu_trans_check && is_front_page() ) { $home_menu_trans = 'nav-trans'; } 
		else{ $home_menu_trans = ''; }
	$menu_bg_color 				= $menu_options['menu_bg_color'];
	$menu_link_color 			= $menu_options['menu_link_color'];
	$menu_link_hover_color 		= $menu_options['menu_link_hover_color'];
	$menu_link_hover_bg_color 	= $menu_options['menu_link_hover_bg_color'];
	$mobile_menu_bg_color		= $menu_options['mobile_menu_bg_color'];
	$mobile_menu_style			= $menu_options['mobile_menu_style'];
	
	$bottom_bar_icon_1			= $menu_options['bottom_bar_icon_1'];
	$bottom_bar_icon_2			= $menu_options['bottom_bar_icon_2'];
	$bottom_bar_icon_3			= $menu_options['bottom_bar_icon_3'];
	$bottom_bar_icon_menu_closed = $menu_options['bottom_bar_icon_menu_closed'];
	$bottom_bar_icon_menu_open	= $menu_options['bottom_bar_icon_menu_open'];
	$bottom_bar_text_1			= $menu_options['bottom_bar_text_1'];
	$bottom_bar_text_2			= $menu_options['bottom_bar_text_2'];
	$bottom_bar_text_3			= $menu_options['bottom_bar_text_3'];
	$bottom_bar_text_menu       = $menu_options['bottom_bar_text_menu'];
	$bottom_bar_url_1			= $menu_options['bottom_bar_url_1'];
	$bottom_bar_url_2			= $menu_options['bottom_bar_url_2'];
	$bottom_bar_url_3			= $menu_options['bottom_bar_url_3'];

	$custom_logo_id				= get_theme_mod( 'custom_logo' );
	$custom_logo 				= wp_get_attachment_image_src( $custom_logo_id , 'full' );

	if ( $main_text_color ) { echo 'body { color: ' . ( $main_text_color ) . '; }'; } 
	else { echo 'body { color: #555; }'; }

	if ( $primary_link_color ) { echo 'a, .text-primary { color: ' . ( $primary_link_color ) . '; }'; } 
	else { echo 'a, .text-primary { color: #007bff; }'; }

	if ( $primary_link_hover_color ) { echo 'a:hover, .text-primary:hover { color: ' . ( $primary_link_hover_color ) . '; }'; } 
	else { echo 'a:hover, .text-primary:hover { color: #0056b3; }'; }

	if ( $menu_bg_color ) { echo '.main-menu-navbar { background-color: ' . ( $menu_bg_color ) . '; }'; } 
	else { echo '.main-menu-navbar { background-color: #fff; }'; }

	if ( $menu_link_color ) { echo '.main-menu-navbar .navbar-nav .nav-link, .main-menu-navbar .navbar-brand a, .navbar-toggler { color: ' . ( $menu_link_color ) . '; }'; } 
	else { echo '.main-menu-navbar .navbar-nav .nav-link, .main-menu-navbar .navbar-brand a { color: #23343b; }'; }

	if ( $menu_link_hover_color ) { echo '.main-menu-navbar .navbar-nav .nav-link:hover, .main-menu-navbar .navbar-brand a:hover { color: ' . ( $menu_link_hover_color ) . '; }'; } 
	else { echo '.main-menu-navbar .navbar-nav .nav-link:hover, .main-menu-navbar .navbar-brand a:hover { color: #23343b; }'; }

	//if ( $menu_link_hover_bg_color ) { echo '.main-menu-navbar .navbar-nav .nav-link:hover, .main-menu-navbar .navbar-brand a:hover { background-color: ' . ( $menu_link_hover_bg_color ) . '; }'; } 
	//else { echo '.main-menu-navbar .navbar-nav .nav-link:hover, .main-menu-navbar .navbar-brand a:hover { background-color: transparent; }'; }

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

	if ( $mobile_menu_bg_color ) { echo '.offcanvas-collapse { background-color: ' . ( $mobile_menu_bg_color ) . '; }'; } 
	else { echo '.offcanvas-collapse { background-color: #007bff; }'; }

	if ( $mobile_menu_style == 'bar' ) {
		if ( $mobile_menu_bg_color ) { echo '.fixed-bottom { background-color: ' . ( $mobile_menu_bg_color ) . '; }'; } 
		else { echo '.fixed-bottom { background-color: #007bff; }'; }
	}

	if ( $mobile_menu_style == 'fab' ) {
		if ( $mobile_menu_bg_color ) { echo '.fab-toggler { background-color: ' . ( $mobile_menu_bg_color ) . '; }'; } 
		else { echo '.fab-toggler { background-color: #007bff; }'; }
	}

?>

</style>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page"><!-- closed in footer.php -->

	<!-- ******************* Mobile Top Area ******************* 
		May want to uncomment this area if using the FAB menu or Bottom Bar menu types. 

	<div class="mobile-top-wrapper d-flex d-md-none justify-content-between w-100 text-white py-3 px-3 position-absolute">
		<div class="mobile-top-brand">
			Top Bar Text
		</div>
		<div class="mobile-top-phone">
			<a class="text-white" href="tel:555-555-5555">
				<span class="mr-2">
					<i class="fal fa-phone"></i>
				</span>
				<span>555-555-5555</span>
			</a>
		</div>
	</div>

	******************* Main Menu Desktop ******************* -->

	<?php // if ( is_front_page() ) : ?>

		<!-- <div id="wrapper-navbar" class="main-menu-navbar main-menu-desktop navbar-top-trans d-none d-md-block" itemscope itemtype="http://schema.org/WebSite"> -->

	<?php if ( $mobile_menu_style == 'bar' || $mobile_menu_style == 'fab' ) { ?>

		<div id="wrapper-navbar" class="main-menu-navbar main-menu-desktop d-none d-md-block <?php echo esc_html( $home_menu_trans ) . ' ' . esc_html( $desktop_menu_scroll ); ?>" itemscope itemtype="http://schema.org/WebSite" style="background-color:<?php if ( $menu_bg_color ) { echo ( $menu_bg_color ); } ?>;">

	<?php } else { ?>

		<div id="wrapper-navbar" class="main-menu-navbar main-menu-desktop <?php echo esc_html( $home_menu_trans ) . ' ' . esc_html( $desktop_menu_scroll ); ?>" itemscope itemtype="http://schema.org/WebSite" style="background-color:<?php if ( $menu_bg_color ) { echo ( $menu_bg_color ); } ?>;">

	<?php } ?>

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
		<nav class="navbar navbar-expand-md">
			<div class="container" >
				<h1 class="navbar-brand mb-0">
					<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php if ( has_custom_logo() ) { ?><img class="" src="<?php echo esc_url( $custom_logo[0] ); ?>" style="max-width: 230px;" /> <?php } else { bloginfo( 'name' ); } ?></a>
				</h1>

				<?php if ( $mobile_menu_style == 'bs4' ) { ?>
					<button class="navbar-toggler menu-style-bs4" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>" style="color:<?php if ( $menu_link_color ) { echo ( $menu_link_color ); } ?>;">
						<span class=""><i class="far fa-bars"></i></span>
					</button>
				<?php } ?>

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

	<?php if ( $mobile_menu_style == 'bar' || $mobile_menu_style == 'fab' ) { ?>

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

	<?php } ?><!-- END if('bar') -->

	<?php if ( $mobile_menu_style == 'fab' ) { ?>

	<!-- FAB Navbar Toggler -->

	<div class="fab-toggler-wrap position-fixed d-md-none menu-closed" style="bottom:30px; right: 30px; z-index: 100;">
		<button class="fab-toggler collapsed btn rounded-pill md_bg-primary position-relative border-none" type="button" data-toggle="offcanvas" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="toggler-icon d-block">
				<h5 class="scroll-menu-text position-absolute text-white" style="top: 6px; right: 36px; z-index: 0; opacity:0;">MENU</h5>
				<div class="icon-placeholder" style="width:27px; height:25px; z-index: 1;"></div>
				<span class="position-absolute menu-icon text-white" style="top: 6px; right: 16px;">
					<i class="menu-closed-icon far fa-bars fa-lg active"></i>
				</span>
				<span class="position-absolute menu-icon text-white" style="top: 6px; right: 19px;">
					<i class="menu-open-icon far fa-times fa-lg"></i>
				</span>
			</span>
		</button>
	</div>

	<?php } ?><!-- END if('bar') -->

	<?php if ( $mobile_menu_style == 'bar' ) { ?>

	<!-- ======== MOBILE BOTTOM BAR ========= -->
	
    <div class="d-md-none fixed-bottom py-2">
    	<div class="container">
  			<div class="row">

                <?php if ( $bottom_bar_url_1 ) { ?>
  				<div class="col text-center px-1 px-sm-2">
    				<a class="text-white d-block" href="<?php echo esc_url( $bottom_bar_url_1 ); ?>">
    					<div><i class="<?php echo esc_html( $bottom_bar_icon_1 ); ?>"></i></div>
    					<div class="small font-weight-light" style="line-height: 1rem;"><?php echo esc_html( $bottom_bar_text_1 ); ?></div>
      				</a>
      			</div><!-- /.col -->
                <?php } if ( $bottom_bar_url_2 ) { ?>
      		    <div class="col text-center px-1 px-sm-2">
    				<a class="text-white d-block" href="<?php echo esc_url( $bottom_bar_url_2 ); ?>">
    					<div><i class="<?php echo esc_html( $bottom_bar_icon_2 ); ?>"></i></div>
    					<div class="small font-weight-light" style="line-height: 1rem;"><?php echo esc_html( $bottom_bar_text_2 ); ?></div>
      				</a>
      			</div><!-- /.col -->
                <?php } if ( $bottom_bar_url_3 ) { ?>
      			<div class="col text-center px-1 px-sm-2">
    				<a class="text-white d-block" href="<?php echo esc_url( $bottom_bar_url_3 ); ?>">
    					<div><i class="<?php echo esc_html( $bottom_bar_icon_3 ); ?>"></i></div>
    					<div class="small font-weight-light" style="line-height: 1rem;"><?php echo esc_html( $bottom_bar_text_3 ); ?></div>
      				</a>
      			</div><!-- /.col -->
                <?php } ?>
      			<div class="col text-center px-1 px-sm-2">
      				<!-- Bottom Bar Navbar Toggler -->
					<div class="fab-toggler-wrap menu-closed">
						<button class="fab-toggler collapsed btn btn-block border-none shadow-none bg-transparent text-white text-center p-0" type="button" data-toggle="offcanvas" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span class="toggler-icon d-block position-relative mx-auto" style="width: 16px; height: 24px;">
								<i class="<?php echo 'position-absolute text-white menu-icon menu-closed-icon ' . esc_html( $bottom_bar_icon_menu_closed ); ?>" style="top: 0; left: 0;"></i>
								<i class="<?php echo 'position-absolute text-white menu-icon menu-open-icon ' . esc_html( $bottom_bar_icon_menu_open ); ?>" style="top: 0; left: 0;"></i>
							</span>
							<span class="font-weight-light d-block position-relative" style="line-height: 1rem;"><?php echo esc_html( $bottom_bar_text_menu ); ?></span>
						</button>
					</div>
      			</div><!-- /.col -->
      			
      		</div><!-- /.row -->
      	</div><!-- /.container -->
    </div><!-- /.fixed-bottom -->
    <!-- ======== END MOBILE BOTTOM BAR ========= -->

    <?php } ?><!-- END if('bar') --> 
