<?php

 // ------------------------------------------------------------------
 // Theme Setting Fields
 // ------------------------------------------------------------------
 //

$sidekick_includes = array(
	'/sidekick-images.php',				// Initialize custom image settings.
);

foreach ( $sidekick_includes as $sidekick_file ) {
	$filepath = locate_template( 'inc' . $sidekick_file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $sidekick_file ), E_USER_ERROR );
	}
	require_once $filepath;
}

// *Requires Yoast SEO plugin - CG
add_theme_support( 'yoast-seo-breadcrumbs' );


/*********************************************************
    Integrity Hash Support - CG
    Adds ability to have integrity hashes for added security. 

    *Requires Websidekick plugin. Comment-out or remove filter to use your own jquery, BS4, & FontAwesome files.
*********************************************************/

add_filter( 'script_loader_tag', 'add_attribs_to_scripts', 10, 3 );
function add_attribs_to_scripts( $tag, $handle, $src ) {

	$options = get_option('websidekick_main_options');

	// The handles of the enqueued scripts we want to defer
	$jquery = array(
    'jquery'
	);
	$fa5 = array(
	    'fontawesome'
	);
	$bsjs = array(
	    'bootstrapjs'
	);

	if ( in_array( $handle, $jquery ) ) {
    	return '<script src="' . $src . '" integrity="' . $options['jq_integrity'] . '" crossorigin="anonymous" type="text/javascript"></script>' . "\n";
	} 
	if ( in_array( $handle, $fa5 ) ) {
	    return '<script src="' . $src . '" integrity="' . $options['fa_integrity'] . '" crossorigin="anonymous" type="text/javascript"></script>' . "\n";
	}
	if ( in_array( $handle, $bsjs ) ) {
	    return '<script src="' . $src . '" integrity="' . $options['bsjs_integrity'] . '" crossorigin="anonymous" type="text/javascript"></script>' . "\n";
	}

	return $tag;

}


function understrap_remove_scripts() {

	/********************************************************* 
		Replaces default WP jQuery version with version 3.3.1. - CG

		*Requires Websidekick plugin. Comment-out or remove "$options..." to use your own jquery files or to use WP default files.
	*********************************************************/
	// Begin Websidekick replace jQuery. - CG
		$options = get_option('websidekick_main_options');

		if($options['jq_cdn']) {
			wp_deregister_script('jquery');
			wp_register_script( 'jquery', $options['jq_cdn'], false, $options['jq_version'], false );
			wp_enqueue_script( 'jquery');
		}
	// END Websidekick replace jQuery.

	// DO NOT EDIT. Necessary to override Understrap SCC & JS.
	// Removes the parent themes stylesheet and scripts from understrap/inc/enqueue.php - Understrap
	    wp_dequeue_style( 'understrap-styles' );
	    wp_deregister_style( 'understrap-styles' );

	    wp_dequeue_script( 'understrap-scripts' );
	    wp_deregister_script( 'understrap-scripts' );

}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data - CG
	$the_theme = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );
	$theme_name = 'websidekick-theme-starter';

	$options = get_option('websidekick_main_options');
	$menu = get_option('websidekick_menu_options');

	/*********************************************************
    *  Theme Styles 
    *********************************************************/

	// Fonts  - CG
	wp_enqueue_style( 'websidekick_fonts', get_stylesheet_directory_uri() . '/fonts/fonts.css', false, $theme_version );

	// Bootstrap  *Requires Websidekick plugin. - CG
	if($options['bs_cdn']) {
		wp_enqueue_style( 'bootstrapcss', $options['bs_cdn'], false, $options['bs_version'], 'all' );
	}

	// Understrap to help WP conform to BS4 - Understrap
	wp_enqueue_style( 'websidekick-understrap', get_stylesheet_directory_uri() . '/css/understrap.css', false, $theme_version );

	// Underscores to help WP conform to BS4 - Understrap
	wp_enqueue_style( 'websidekick-underscores', get_stylesheet_directory_uri() . '/css/underscores.css', false, $theme_version );

	// Ninja Bootstrap Utilities - CG
	wp_enqueue_style( 'websidekick-bootstrap-utilities', get_stylesheet_directory_uri() . '/css/websidekick-bootstrap-utilities.css', false, $theme_version );

	// Additional Colors Palette based on BS4 - CG
	wp_enqueue_style( 'websidekick-bootstrap_colors', get_stylesheet_directory_uri() . '/css/bootstrap_color_palette.css', false, $theme_version );

	// Additional Styles based on Material Design - CG
	wp_enqueue_style( 'websidekick-bootstrap_md_styles', get_stylesheet_directory_uri() . '/css/bootstrap_md_styles.css', false, $theme_version );

	// Additional Colors Palette based on Material Design - CG
	wp_enqueue_style( 'websidekick-bootstrap_md_colors', get_stylesheet_directory_uri() . '/css/bootstrap_md_color_palette.css', false, $theme_version );

	// Additional Colors Palette based on iOS10 - CG
	wp_enqueue_style( 'websidekick-bootstrap_ios_colors', get_stylesheet_directory_uri() . '/css/bootstrap_ios_color_palette.css', false, $theme_version );

	if($menu['mobile_menu_style']  == 'bar' ) {
		// Menu-Mobile Styles - CG
		wp_enqueue_style( 'menu-mobile-offcanvas-styles', get_stylesheet_directory_uri() . '/css/menu-mobile_off-canvas.css', array(), filemtime(get_stylesheet_directory() . '/css/menu-mobile_off-canvas.css') );
	}

	if($menu['mobile_menu_style']  == 'fab' ) {
		// Menu-Mobile Styles - CG
		wp_enqueue_style( 'menu-mobile-fab-styles', get_stylesheet_directory_uri() . '/css/menu-mobile_fab.css', array(), filemtime(get_stylesheet_directory() . '/css/menu-mobile_fab.css') );
	}

	if($menu['home_menu_trans'] ) {
		// Menu-Home Styles - CG
		wp_enqueue_style( 'home-menu-styles', get_stylesheet_directory_uri() . '/css/menu-home-trans.css', array(), filemtime(get_stylesheet_directory() . '/css/menu-home-trans.css') );
	}

	// Flickity Styles - CG
	// Used to create horizontal scrolling for images/content posts. Comment out if unused.
	wp_enqueue_style( 'flickity-styles', 'https://unpkg.com/flickity@2/dist/flickity.min.css', false, '2.2.0' );

	// Main Theme Styles & Overrides - CG
	/* This is basically your custom styles.css. Editing this file may cause a few style issues which can be easily fixed
	but won't effect any of the core functionality. I've tried to keep it as simple as possible. */
    wp_enqueue_style( 'websidekick-theme-styles', get_stylesheet_directory_uri() . '/css/websidekick-theme.css', array(), filemtime(get_stylesheet_directory() . '/css/websidekick-theme.css') );

     /*********************************************************
    *  Theme Scripts 
    *********************************************************/

	// FontAwesome 5 *Requires Websidekick plugin. - CG
 	if($options['fa_cdn']) {
		wp_enqueue_script( 'fontawesome', $options['fa_cdn'], false, $options['fa_version'], false);
	}

	// Bootstrap Bundle 4.3.1  *Requires Websidekick plugin. - CG
	if($options['bsjs_cdn']) {
		wp_enqueue_script( 'bootstrapjs', $options['bsjs_cdn'], false, $options['bsjs_version'], true);
	}

	if($menu['home_menu_trans'] ) {
		// Menu Home Page Transparecy - CG
		wp_enqueue_script( 'menu-home-script', get_stylesheet_directory_uri() . '/js/menu-home-trans.js', array(), false, true );
	}

	if($menu['desktop_menu_scroll']  == 'scrollfixed' ) {
		// MenuDesktop Scroll - CG
		wp_enqueue_script( 'menu-scroll-fixed-script', get_stylesheet_directory_uri() . '/js/menu-scroll-fixed.js', array(), false, true );
	}

	if($menu['mobile_menu_style']  == 'bar' ) {
		// Menu Mobile Bar - CG
		wp_enqueue_script( 'menu-mobile-bar-script', get_stylesheet_directory_uri() . '/js/menu-mobile_off-canvas.js', array(), false, true );
	}

	if($menu['mobile_menu_style']  == 'fab' ) {
		// Menu Mobile FAB - CG
		wp_enqueue_script( 'menu-mobile-fab-script', get_stylesheet_directory_uri() . '/js/menu-mobile_fab.js', array(), false, true );
	}

	// Flickity Script - CG
	// Used to create horizontal scrolling for images/content posts. Comment out if unused.
	wp_enqueue_script( 'flickity-script', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array(), false, true );

	// Main Theme Scripts & Overrides - CG
	/* This is basically your custom scripts.js. Editing this file may cause a few small issues which can be easily fixed
	but won't effect any of the core functionality. I've tried to keep it as simple as possible. */
    wp_enqueue_script( 'websidekick-theme-scripts', get_stylesheet_directory_uri() . '/js/websidekick-theme.js', array(), $theme_version . '.' . filemtime(get_stylesheet_directory() . '/js/websidekick-theme.js'), true );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}


/**
 * Remove archive title prefixes.
 *
 * @param  string  $title  The archive title from get_the_archive_title();
 * @return string          The cleaned title.
 */
function cnCustomArchiveTitle( $title ) {
    // Remove any HTML, words, digits, and spaces before the title.
    return preg_replace( '#^[\w\d\s]+:\s*#', '', strip_tags( $title ) );
}
add_filter( 'get_the_archive_title', 'cnCustomArchiveTitle' );


/**
 * Add CPTs to main index.php. - CG
 */
add_action( 'pre_get_posts', 'include_cpts_in_home' );
function include_cpts_in_home( $query ) {

    if ( ! is_admin() && $query->is_main_query() && $query->is_home() ) {
        $query->set( 'post_type', array( 'post', 'sermons', 'page' ) ); // Be sure to add all your CPTs to the array.
    }
}


/**
 * Add CPTs to search queries. - CG
 */
add_action('pre_get_posts', 'djg_includ_my_cpt_in_query', 99);
function djg_includ_my_cpt_in_query($query){

    if(is_home() && $query->is_main_query()) :              // Ensure you only alter your desired query

        $post_types = $query->get('post_type');             // Get the currnet post types in the query

        if(!is_array($post_types) && !empty($post_types))   // Check that the current posts types are stored as an array
            $post_types = explode(',', $post_types);

        if(empty($post_types))                              // If there are no post types defined, be sure to include posts so that they are not ignored
            $post_types[] = 'post';         
        	$post_types[] = 'page';
        	$post_types[] = 'sermons';                       //  Be sure to add all your CPTs to the array.

        $post_types = array_map('trim', $post_types);       // Trim every element, just in case
        $post_types = array_filter($post_types);            // Remove any empty elements, just in case

        $query->set('post_type', $post_types);              // Add the updated list of post types to your query

    endif; 

    return $query;

}

/**
 * Limit Excerpt Length by number of Words Call by using   echo excerpt(30); - CG
 */
function excerpt( $limit ) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
return $excerpt;
}
function content($limit) {
	$content = explode(' ', get_the_content(), $limit);
	if (count($content)>=$limit) {
		array_pop($content);
		$content = implode(" ",$content).'...';
	} else {
		$content = implode(" ",$content);
	}
	$content = preg_replace('/[.+]/','', $content);
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
return $content;
}

/**
 * Custom comment markup - CG
 * Comment-out to use default Understrap comment markup.
 */
function mytheme_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } ?>
        <div class="comment-author vcard"><?php 
            if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] ); 
            } 
            printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ); ?>
        </div><?php 
        if ( $comment->comment_approved == '0' ) { ?>
            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
        } ?>
        <div class="comment-meta commentmetadata">
            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
                /* translators: 1: date, 2: time */
                printf( 
                    __('%1$s at %2$s'), 
                    get_comment_date(),  
                    get_comment_time() 
                ); ?>
            </a><?php 
            edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
        </div>

        <?php comment_text(); ?>

        <div class="reply"><?php 
                comment_reply_link( 
                    array_merge( 
                        $args, 
                        array( 
                            'add_below' => $add_below, 
                            'depth'     => $depth, 
                            'max_depth' => $args['max_depth'] 
                        ) 
                    ) 
                ); ?>
        </div><?php 
    if ( 'div' != $args['style'] ) : ?>
        </div><?php 
    endif;
}