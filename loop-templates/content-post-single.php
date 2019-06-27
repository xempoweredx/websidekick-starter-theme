<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class( 'col-12' ); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<div class="row">

		<?php if ( has_post_thumbnail() ) { ?>

			<div class="col-12">

			<?php if (get_the_post_thumbnail( $post->ID, 'single_top_md' )) { ?>

				<div class="single-featured-img d-lg-none"> 
					<img class="w-100" src="<?php echo esc_url(get_the_post_thumbnail_url( $post->ID, 'single_top_md' )); ?>" />
				</div>

			<?php } ?>

			<?php if (get_the_post_thumbnail( $post->ID, 'single_top_lg' )) { ?>

				<div class="single-featured-img d-none d-lg-block"> 
					<img class="w-100" src="<?php echo esc_url(get_the_post_thumbnail_url( $post->ID, 'single_top_lg' )); ?>" />
				</div>

			<?php } elseif (get_the_post_thumbnail( $post->ID, 'large' )) { ?>

				<div class="single-featured-img"> 
					<img class="w-100" src="<?php echo esc_url(get_the_post_thumbnail_url( $post->ID, 'large' )); ?>" />
				</div>

			<?php } ?>

			</div><!-- /col-12 -->

		<?php } ?><!-- /has_post_thumbnail -->

		</div><!-- /row -->

		<div class="d-flex justify-content-between flex-wrap text-muted mb-3">
			<!-- <div><span class="mr-2"><i class="fal fa-calendar"></i></span><span><?php //echo get_the_date(); ?></span></div> -->
			<div class="mr-2">
				<span class="mr-1"><i class="fal fa-user-edit fa-sm"></i></span>
				<span><a class="small text-muted" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'display_name' ) ); ?>"><?php the_author(); ?></a></span>
			</div>
			<div class="mr-2">
				<span class="mr-1"><i class="fal fa-calendar fa-sm"></i></span>
				<span class="small"><?php the_date(); ?></span>
			</div>
			<div>
				<span class="mr-1"><i class="fal fa-folder fa-sm"></i></span>
				<span>
				<?php

					$category_object = get_the_category($obj_wp_id);

					if ( ! empty( $category_object ) ) {

						$cat_name = $category_object[0]->name;
						$cat_url = get_category_link( $category_object[0]->term_id );
					
						echo '<a class="small text-muted" href="' . esc_url( $cat_url ) . '" alt="All posts listed in ' . esc_attr( $cat_name ) . '">' . esc_html( $cat_name ) . '</a>';
					}
				?>
				</span>
			</div>
		</div><!-- .justify-content-between -->

		<div class="post-tags mb-4 d-flex justify-content-center">
		<?php 
			$tags = get_the_tags();
			if (! empty( $tags )) {
				$tag_bgs = array( 'md_bg-grey text-white', 'md_bg-cyan text-white', 'md_bg-amber text-white', 'md_bg-blue-grey text-white', 'md_bg-lime text-white', 'md_bg-blue text-white' );
				$x=0;
				foreach($tags as $tag) :
					$x++; 
					$tag_bg = $tag_bgs[$x%6];?>

				    	<a class="mx-1 mx-lg-2 badge badge-pill <?php echo $tag_bg; ?> font-weight-light"
    						href="<?php bloginfo('url');?>/tag/<?php print_r($tag->slug);?>">
    						<span class="mr-1"><i class="fal fa-tag fa-sm"></i></span>
          					<span class="mr-1"><?php print_r($tag->name); ?></span>
          					<span class="bg-white text-dark rounded-pill px-1 small" style="opacity: .8;"><?php print_r($tag->count); ?></span>
 						</a>

			    <?php endforeach;
			} ?>
		</div>

		<?php the_title( '<h1 class="entry-title font-weight-light text-dark w-100 text-center mb-4">', '</h1>' ); ?>

		<div class="entry-meta">

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->