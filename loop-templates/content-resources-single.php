<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
} ?>

<?php

$prefix = 'ninja_resources_';

$link = get_post_meta( get_the_ID(), $prefix . 'link', true );
$poster_comments = get_post_meta( get_the_ID(), $prefix . 'comments', true );

?>

<?php $resource_types = wp_get_post_terms($post->ID, 'resource_types', array("fields" => "all"));
	foreach($resource_types as $resource_type) {
		$resource_type_name 	= $resource_type->name;
		$resource_type_ID 		= $resource_type->term_id;
		$resource_type_slug 	= $resource_type->slug;
		$resource_type_link   	= get_term_link($resource_type); 
	}
?>

<?php $resource_authors = wp_get_post_terms($post->ID, 'resource_authors', array("fields" => "all"));
	foreach($resource_authors as $resource_author) {
		$resource_author_name	= $resource_author->name;
		$resource_author_ID		= $resource_author->term_id;
		$resource_author_slug	= $resource_author->slug;
		$resource_author_link	= get_term_link($resource_author); 
	}
?>


<div class="col-12">

	<article <?php post_class( 'mb-5' ); ?> id="post-<?php the_ID(); ?>">

		<div class="row">

			<div class="entry-content text-center col-12">

				<?php if ( $resource_types ) { 
					echo '<span class="mb-3">
							<a class="text-dark text-uppercase font-weight-light" href="' . ( $resource_type_link ) . '">' . ( $resource_type_name ) . '</a>
						</span>'; 
				} ?>

				<h1 class="entry-title display-4 mb-3"><?php the_title(); ?></h1>

				<div class="mb-3 tax-list">

				<?php 
				if ( $resource_authors ) { 
					echo '<a class="d-inline-block text-dark text-uppercase" href="' . ( $resource_author_link ) . '">' . ( $resource_author_name ) . '</a>
						<span class="mx-2 tax-separator">|</span>'; 
				} ?>

				</div>

				<?php $resource_topics = wp_get_post_terms($post->ID, 'resource_topics', array("fields" => "all"));
				if ( $resource_topics ) { 
					echo '<div class="mb-4 tax-list">
						<span class="text-uppercase font-weight-light mr-2">Topics:</span>';
						foreach($resource_topics as $resource_topic) {
							$resource_topic_name	= $resource_topic->name;
							$resource_topic_ID		= $resource_topic->term_id;
							$resource_topic_slug	= $resource_topic->slug;
							$resource_topic_link	= get_term_link($resource_topic); 
							echo '<a class="d-inline-block text-uppercase font-weight-light" href="' . ( $resource_topic_link ) . '">' . ( $resource_topic_name ) . '</a>';
							echo '<span class="mx-2 tax-separator">|</span>';
						}
					echo '</div>';
				} ?>

				<?php if ( $link ) { ?>

					<div class="text-center mb-4">
						<a class="btn btn-outline-primary btn-rounded font-size-18px" title="External link to resource origin" target="_blank" href="<?php echo esc_url( $link ); ?>">
							<span class="mr-2">
								<i class="fal fa-link"></i>
							</span>
							<span class="">Resource Origin</span>
						</a>
					</div>

				<?php } ?>

				<div class="mb-4">
					<span>Posted by: <a class="text-muted" title="All posts by <?php the_author(); ?>" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>  on  <?php echo get_the_date(); ?></span>
				</div>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
						'after'  => '</div>',
					) );
				?>

			</div>

			<footer class="entry-footer small">

				<?php understrap_entry_footer(); ?>

			</footer><!-- .entry-footer -->

		</div>

	</article><!-- #post-## -->

</div>