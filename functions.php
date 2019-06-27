<?php

 // ------------------------------------------------------------------
 // Theme Setting Fields
 // ------------------------------------------------------------------
 //

// Change crop sizes and options to fit your theme's needs.
// The theme currently expects images to have 16:9 ratio. - CG
add_action( 'after_setup_theme', 'ninja_custom_image_sizes' );
function ninja_custom_image_sizes() {
    add_image_size( 'feed_top_img', 500 );
	add_image_size( 'single_top_md', 720 );
	add_image_size( 'single_top_lg', 1200 );
}

// Change image size names to fit your theme's needs. - CG
add_filter( 'image_size_names_choose', 'ninja_custom_image_names' );
function ninja_custom_image_names( $sizes ) {
    return array_merge( $sizes, array(
        'feed_top_img' => __( 'Feed Image Top' ),
        'single_top_md' => __( 'Single Image Medium' ),
        'single_top_lg' => __( 'Single Image Large' ),
    ) );
}

// *Requires Yoast SEO plugin
add_theme_support( 'yoast-seo-breadcrumbs' );


/*********************************************************
    *  	Integrity Hash Support - CG
    	Adds ability to have integrity hashes for added security. 
    *	Requires Websidekick plugin. Comment-out or remove filter to use your own jquery, BS4, & FontAwesome files.
*********************************************************/

add_filter( 'script_loader_tag', 'add_attribs_to_scripts', 10, 3 );
function add_attribs_to_scripts( $tag, $handle, $src ) {

	$options = get_option('ninja_admin_main_options');

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
		Replaces default WP jQuery version with version 3.3.1.
	*	Requires Websidekick plugin. Comment-out or remove "$options..." to use your own jquery files or to use WP default files.
	*********************************************************/

	// Begin Websidekick replace jQuery.
		$options = get_option('websidekick_main_options');

		wp_deregister_script('jquery');
		wp_register_script( 'jquery', $options['jq_cdn'], false, $options['jq_version'], false );
		wp_enqueue_script( 'jquery');
	// END Websidekick replace jQuery.

	// DO NOT EDIT. Necessary to override Understrap SCC & JS.
	// Removes the parent themes stylesheet and scripts from understrap/inc/enqueue.php
	    wp_dequeue_style( 'understrap-styles' );
	    wp_deregister_style( 'understrap-styles' );

	    wp_dequeue_script( 'understrap-scripts' );
	    wp_deregister_script( 'understrap-scripts' );

}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );
	$theme_name = 'ninja-theme-starter';

	$options = get_option('websidekick_main_options');

	/*********************************************************
    *  Theme Styles 
    *********************************************************/

	// Fonts
	wp_enqueue_style( 'ninja-bootstrap_fonts', get_stylesheet_directory_uri() . '/fonts/fonts.css', false, $theme_version );

	// Bootstrap
	wp_enqueue_style( 'bootstrapcss', $options['bs_cdn'], false, $options['bs_version'], 'all' );

	// Understrap to help WP conform to BS4
	wp_enqueue_style( 'ninja-understrap', get_stylesheet_directory_uri() . '/css/understrap.css', false, $theme_version );

	// Underscores to help WP conform to BS4
	wp_enqueue_style( 'ninja-underscores', get_stylesheet_directory_uri() . '/css/underscores.css', false, $theme_version );

	// Ninja Bootstrap Utilities
	wp_enqueue_style( 'ninja-bootstrap-utilities', get_stylesheet_directory_uri() . '/css/ninja-bootstrap-utilities.css', false, $theme_version );

	// Additional Colors Palette based on BS4
	wp_enqueue_style( 'ninja-bootstrap_colors', get_stylesheet_directory_uri() . '/css/bootstrap_color_palette.css', false, $theme_version );

	// Additional Styles based on Material Design
	wp_enqueue_style( 'ninja-bootstrap_md_styles', get_stylesheet_directory_uri() . '/css/bootstrap_md_styles.css', false, $theme_version );

	// Additional Colors Palette based on Material Design
	wp_enqueue_style( 'ninja-bootstrap_md_colors', get_stylesheet_directory_uri() . '/css/bootstrap_md_color_palette.css', false, $theme_version );

	// Additional Colors Palette based on iOS10
	wp_enqueue_style( 'ninja-bootstrap_ios_colors', get_stylesheet_directory_uri() . '/css/bootstrap_ios_color_palette.css', false, $theme_version );

		// Menu-Mobile Styles
		wp_enqueue_style( 'menu-mobile-offcanvas-styles', get_stylesheet_directory_uri() . '/css/menu-mobile_off-canvas.css', array(), filemtime(get_stylesheet_directory() . '/css/menu-mobile_off-canvas.css') );

		// Menu-Desktop Styles
	    wp_enqueue_style( 'menu-desktop-styles', get_stylesheet_directory_uri() . '/css/menu-desktop_fixed_transparent-to-solid.css', array(), filemtime(get_stylesheet_directory() . '/css/menu-desktop_fixed_transparent-to-solid.css') );

	// Flickity Styles
	wp_enqueue_style( 'flickity-styles', 'https://unpkg.com/flickity@2/dist/flickity.min.css', false, '2.2.0' );

	// Main Theme Styles & Overrides
    wp_enqueue_style( 'ninja-theme-styles', get_stylesheet_directory_uri() . '/css/ninja-theme.css', array(), filemtime(get_stylesheet_directory() . '/css/ninja-theme.css') );

     /*********************************************************
    *  Theme Scripts 
    *********************************************************/

	// FontAwesome 5 All
	wp_enqueue_script( 'fontawesome', $options['fa_cdn'], false, $options['fa_version'], false);

	// Bootstrap Bundle 4.3.1
	wp_enqueue_script( 'bootstrapjs', $options['bsjs_cdn'], false, $options['bsjs_version'], true);

	// Menu Mobile
	wp_enqueue_script( 'menu-mobile-script', get_stylesheet_directory_uri() . '/js/menu-mobile_off-canvas.js', array(), false, true );

	// Menu Desktop
	wp_enqueue_script( 'menu-desktop-script', get_stylesheet_directory_uri() . '/js/menu-desktop_trans-to-solid.js', array(), false, true );

	// Flickity
	wp_enqueue_script( 'flickity-script', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array(), false, true );

	// Main Theme Scripts & Overrides
    wp_enqueue_script( 'ninja-theme-scripts', get_stylesheet_directory_uri() . '/js/ninja-theme.js', array(), $theme_version . '.' . filemtime(get_stylesheet_directory() . '/js/ninja-theme.js'), true );


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
 * Add CPTs to main index.php.
 */
add_action( 'pre_get_posts', 'include_cpts_in_home' );
function include_cpts_in_home( $query ) {

    if ( ! is_admin() && $query->is_main_query() && $query->is_home() ) {
        $query->set( 'post_type', array( 'post', 'sermons', 'page' ) );
    }
}


/**
 * Add CPTs to search queries.
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
        	$post_types[] = 'sermons';                         // Add your custom post type

        $post_types = array_map('trim', $post_types);       // Trim every element, just in case
        $post_types = array_filter($post_types);            // Remove any empty elements, just in case

        $query->set('post_type', $post_types);              // Add the updated list of post types to your query

    endif; 

    return $query;

}

// Limit Excerpt Length by number of Words Call by using   echo excerpt(30);
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