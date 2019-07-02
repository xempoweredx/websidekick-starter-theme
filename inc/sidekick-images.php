<?php
// Change crop sizes and options to fit your theme's needs.
// The theme currently expects images to have 16:9 ratio. - CG
add_action( 'after_setup_theme', 'websidekick_custom_image_sizes' );
function websidekick_custom_image_sizes() {
    add_image_size( 'feed_top_img', 500 );
	add_image_size( 'single_top_md', 720 );
	add_image_size( 'single_top_lg', 1200 );
}

// Change image size names to fit your theme's needs. - CG
add_filter( 'image_size_names_choose', 'websidekick_custom_image_names' );
function websidekick_custom_image_names( $sizes ) {
    return array_merge( $sizes, array(
        'feed_top_img' => __( 'Feed Image Top' ),
        'single_top_md' => __( 'Single Image Medium' ),
        'single_top_lg' => __( 'Single Image Large' ),
    ) );
}
