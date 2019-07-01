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

<div class="col-12 col-md-6">

	<div <?php post_class( 'card mb-5' ); ?> id="post-<?php the_ID(); ?>">

		<?php if ( has_post_thumbnail() ) { ?>

			<a class="d-block" href="<?php echo esc_url( get_permalink() ); ?>">

				<?php if (get_the_post_thumbnail( $post->ID, 'feed_top_img' )) : ?>

				<div class="feed-featured-img" style="background-image: url(<?php echo get_the_post_thumbnail_url( $post->ID, 'feed_top_img' ); ?>);">
				</div>

				<?php elseif (get_the_post_thumbnail( $post->ID, 'large' )) : ?>

				<div class="feed-featured-img" style="background-image: url(<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>);">
				</div>

				<?php endif; ?>

			</a>

		<?php } ?>

		<div class="card-body position-relative">

			<div class="position-absolute" style="top: 10px; right: 40px;">
				<span class="position-relative">
					<i class="position-absolute text-muted fas fa-comment fa-lg"></i>
					<span class="position-absolute text-white small" style="top: 0;line-height: .9;right: -15px;text-align: center;"><?php echo get_comments_number(); ?></span>
				</span>
			</div>

				<?php the_title( sprintf( '<h3 class="card-title"><a class="text-dark font-weight-light" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

				<?php the_excerpt(); ?>

			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			) );
			?>

			<footer class="entry-footer">

				<div class="post-tags mb-3">
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
				</div>

				<div class="d-flex justify-content-between flex-wrap">
					
					<a class="btn md_btn-outline-blue-grey btn-sm rounded-pill mr-2" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'display_name' ) ); ?>" style="line-height: 0.9;">
						<span class="mr-1"><i class="fal fa-user-edit fa-sm"></i></span>
						<span class="small"><?php the_author(); ?></span>
					</a>
					<?php

					//$post_id = the_ID(); // or use the post id if you already have it
					$category_object = get_the_category($obj_wp_id);

					if ( ! empty( $category_object ) ) {

						$cat_name = $category_object[0]->name;
						$cat_url = get_category_link( $category_object[0]->term_id );
					
						echo '<a class="btn md_btn-outline-blue-grey btn-sm rounded-pill mr-2" href="' . esc_url( $cat_url ) . '" alt="All posts listed in ' . esc_attr( $cat_name ) . '" style="line-height: 0.9;"><span class="mr-1"><i class="fal fa-folder fa-sm"></i></span><span class="small">' . esc_html( $cat_name ) . '</span></a>';
					}
					?>

				</div><!-- .justify-content-between -->

			</footer><!-- .entry-footer -->

		</div><!-- .card-body -->

	</div><!-- .card -->

</div>