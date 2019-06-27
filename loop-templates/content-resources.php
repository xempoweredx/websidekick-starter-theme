<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php

	$post_obj = get_post_type_object( $post_type );

	// Book CPT WP Default Fields
	$obj_wp_id         	= get_the_id();
	$obj_wp_title      	= get_the_title();
	$obj_wp_link       	= get_permalink();
	$obj_wp_classes    	= get_post_class();
	$obj_wp_edit		= get_edit_post_link();

	$post_author_name	= get_the_author_meta( 'display_name' );
	$post_author_url	= get_the_author_meta( 'user_url' );

?>

<div class="col-12 col-sm-6 col-xl-4">
	<?php 
	$resource_authors = wp_get_post_terms($post->ID, 'resources-authors', array("fields" => "all"));
	foreach($resource_authors as $author) {
		$author_name	= $author->name;
		$author_ID		= $author->term_id;
		$author_slug	= $author->slug;
		$author_link	= get_term_link($author); 
	}
	$resource_formats = wp_get_post_terms($post->ID, 'resources-formats', array("fields" => "all"));
	foreach($resource_formats as $format) {
		$format_name	= $format->name;
		$format_ID		= $format->term_id;
		$format_slug	= $format->slug;
		$format_link	= get_term_link($format); 
	}
	$prefix = 'ninja_resources_';
	$paperback = get_post_meta( get_the_ID(), $prefix . 'url_paperback', true );
	$hardcover = get_post_meta( get_the_ID(), $prefix . 'url_hardcover', true );
	$audible = get_post_meta( get_the_ID(), $prefix . 'url_audible', true );
	$kindle = get_post_meta( get_the_ID(), $prefix . 'url_kindle', true );
	$audio = get_post_meta( get_the_ID(), $prefix . 'url_audio', true );
	$pdf = get_post_meta( get_the_ID(), $prefix . 'url_pdf', true );
	?>

	<div id="<?php the_ID(); ?>" class="card w-100">
		<div class="card-header text-white bg-primary">
			<?php if (! empty( $resource_formats )) { echo '<a class="text-white font-weight-light" href="' . esc_url($format_link) . '"><span class="mr-3"><i class="fal fa-books"></i></span><span>' . esc_html($format_name) . '</span>'; } ?>
		</div>
		<div class="card-body">
		<?php if (get_the_post_thumbnail( $post->ID, 'medium' )) { ?>
			<a class="d-block float-left mr-3 mb-3" href="<?php echo esc_url( get_permalink() ); ?>"><img class="w-100" src="<?php echo (get_the_post_thumbnail_url( $post->ID, 'medium' )); ?>" style="max-width: 100px;" /></a>
		<?php } ?>
			<?php the_title( sprintf( '<h5 class="card-title font-weight-light mb-1" style="max-height: 3.65rem; overflow: hidden;"><a class="text-dark" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' ); ?>
			<div class="text-muted small"><span class="mr-2"><i class="fal fa-user-edit"></i></span><span><?php echo esc_html($author_name); ?></span></div>
			<div class="post-tags mb-3 mt-2">
			<?php 
			$tags = get_the_tags();
			if (! empty( $tags )) {
				$tag_bgs = array( 'md_bg-grey text-white', 'md_bg-cyan text-white', 'md_bg-amber text-white', 'md_bg-blue-grey text-white', 'md_bg-lime text-white', 'md_bg-blue text-white' );
				$x=0;
				foreach($tags as $tag) :
					$x++; 
					$tag_bg = $tag_bgs[$x%6];?>

				    	<a class="mr-1 badge badge-pill <?php echo $tag_bg; ?> font-weight-light"
    						href="<?php bloginfo('url');?>/tag/<?php print_r($tag->slug);?>">
    						<span class="mr-1"><i class="fal fa-tag fa-sm"></i></span>
          					<span class="mr-1"><?php print_r($tag->name); ?></span>
          					<span class="bg-white text-dark rounded-pill px-1 small" style="opacity: .8;"><?php print_r($tag->count); ?></span>
 						</a>

			    <?php endforeach;
			}
			?>
			</div><!-- /post-tags -->

				 <div class="mt-3">
				<?php if($paperback) { echo '<a class="small btn btn-sm btn-outline-primary rounded-pill py-0 mr-2 mb-3" href="' . esc_url($paperback) . '" target="_blank"><span class="mr-2"><i class="fal fa-book-alt"></i></span><span>Paperback</span></a>'; } ?>
				<?php if($hardcover) { echo '<a class="small btn btn-sm btn-outline-success rounded-pill py-0 mb-3" href="' . esc_url($hardcover) . '" target="_blank"><span class="mr-2"><i class="fal fa-book"></i></span><span>Hardcover</span></a>'; } ?>
				<?php if($audible) { echo '<a class="small btn btn-sm md_btn-outline-orange rounded-pill py-0 mr-2 mb-3" href="' . esc_url($audible) . '" target="_blank"><span class="mr-2"><i class="fab fa-audible"></i></span><span>Audible</span></a>'; } ?>
				</div>
		 
		</div><!-- /card-body -->
	</div><!-- /card -->

</div><!-- /col -->