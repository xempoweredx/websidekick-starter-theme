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

	$prefix 			= '_sidekick_book_';

	$subtitle    		= get_post_meta( get_the_ID(), $prefix . 'subtitle', true );
	$series_number		= get_post_meta( get_the_ID(), $prefix . 'series_number', true );
	$orig_pub_date		= get_post_meta( get_the_ID(), $prefix . 'orig_pub_date', true );
	$summary			= get_post_meta( get_the_ID(), $prefix . 'summary', true );

	$personal_review	= get_post_meta( get_the_ID(), $prefix . 'personal_review', true );
	$personal_notes		= get_post_meta( get_the_ID(), $prefix . 'personal_notes', true ); 

	$gr_id       		= get_post_meta( get_the_ID(), $prefix . 'gr_id', true );
	$author_last		= get_post_meta( get_the_ID(), $prefix . 'author_last', true ); 
	$isbn 				= get_post_meta( get_the_ID(), $prefix . 'isbn', true );
	$isbn13 			= get_post_meta( get_the_ID(), $prefix . 'isbn13', true );
	$asin 				= get_post_meta( get_the_ID(), $prefix . 'asin', true );
	$google_preview_link	= get_post_meta( get_the_ID(), $prefix . 'google_preview_link', true );
	$google_info_link	= get_post_meta( get_the_ID(), $prefix . 'google_info_link', true );
	$lt_id				= get_post_meta( get_the_ID(), $prefix . 'lt_id', true );
	
	$books_options 		= get_option('collections_books_options');

?>

<div class="col-6 col-md-4 col-xl-3">

	<div <?php post_class( 'card mb-5' ); ?> id="post-<?php the_ID(); ?>">

		<!-- Types Tax Query -->
		<?php $types = wp_get_post_terms($post->ID, 'book-formats', array("fields" => "all"));
			foreach($types as $type) {
				$types_name 	= $type->name;
				$types_ID 		= $type->term_id;
				$types_slug 	= $type->slug;
				$types_link   	= get_term_link($type);
				$tax_icon		= get_term_meta( $types_ID, $prefix . 'tax_icon', true );

				if ( 'audible' == $types_slug ) { echo '<div class="card-header bg-primary text-white"><span class="mr-3 text-white"><i class="' . $tax_icon . '"></i></span>'; }
				elseif ( 'mp3' == $types_slug ) { echo '<div class="card-header md_bg-danger text-white"><span class="mr-3 text-white"><i class="' . $tax_icon . '"></i></span>'; }
				elseif ( 'ebook' == $types_slug ) { echo '<div class="card-header md_bg-success text-white"><span class="mr-3 text-white"><i class="' . $tax_icon . '"></i></span>'; }
				elseif ( 'hardcover' == $types_slug ) { echo '<div class="card-header md_bg-warning text-dark"><span class="mr-3 text-white"><i class="' . $tax_icon . '"></i></span>'; }
				elseif ( 'kindle' == $types_slug ) { echo '<div class="card-header md_bg-info text-white"><span class="mr-3 text-white"><i class="' . $tax_icon . '"></i></span>'; }
				elseif ( 'paperback' == $types_slug ) { echo '<div class="card-header bg-primary text-white"><span class="mr-3 text-white"><i class="' . $tax_icon . '"></i></span>'; }
				elseif ( 'pdf' == $types_slug ) { echo '<div class="card-header bg-primary text-white"><span class="mr-3 text-white"><i class="' . $tax_icon . '"></i></span>'; }
				else { echo '<div class="card-header bg-secondary text-white"><span class="mr-3 text-white"><i class="fal fa-bookmark"></i></span>'; }

				echo '<a class="text-white display-inline" href="' . $types_link . '">' . $types_name . '</a></div>';

			}

		?>

		<div class="card-body">
			<div class="row">

			<?php
				if ( has_post_thumbnail() ) { ?>
					
				<div class="col-6 offset-3 mb-3">
					<a class="" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
						<img class="w-100 h-auto rounded" src="<?php echo esc_url(the_post_thumbnail_url() ); ?>" />
					</a>
				</div>
						
				<?php } elseif ($isbn) { ?>
					<div class="col-6 offset-3 mb-3">
					<a class="" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
						<img class="w-100 h-auto rounded" src="http://covers.openlibrary.org/b/isbn/<?php echo esc_html($isbn);?>-M.jpg" />
					</a>
				</div>
				<?php } else {} ?>

				<div class="col-12 text-center">
					<?php the_title( sprintf( '<h4 class="card-title font-weight-light"><a class="text-dark" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
				</div>

			</div>
				<!-- Author Tax Query -->

				<?php $authors = wp_get_post_terms($post->ID, 'book-authors', array("fields" => "all"));
				if ( $authors && ! is_wp_error( $authors ) ) : ?>
						
				<?php foreach($authors as $author) {

					echo '<a class="btn btn-sm btn-outline-info rounded-pill mr-1 mb-2" title="See all books written by ' . $author->name . '" href="' . get_term_link($author) . '" style="line-height: .9;"><span class="mr-2"><i class="fal fa-user-edit fa-sm"></i></span><span class="small">' . $author->name . '</span></a>';
				} ?>

				<?php endif; ?>


				<?php $narrators = wp_get_post_terms($post->ID, 'book-narrators', array("fields" => "all"));
				if ( $narrators && ! is_wp_error( $narrators ) ) : ?>
						
				<?php foreach($narrators as $narrator) {

					echo '<a class="btn btn-sm btn-outline-success rounded-pill mr-1 mb-2" title="See all books narrated by ' . $narrator->name . '" href="' . get_term_link($narrator) . '" style="line-height: .9;"><span class="mr-2"><i class="fal fa-microphone fa-sm"></i></span><span class="small">' . $narrator->name . '</span></a>';
				} ?>

				<?php endif; ?>

				<?php $shelves = wp_get_post_terms($post->ID, 'book-shelves', array("fields" => "all"));
				if ( $shelves && ! is_wp_error( $shelves ) ) : ?>
					
				<?php foreach($shelves as $shelf) {

					$shelf_ID 		= $shelf->term_id;
					$tax_icon		= get_term_meta( $shelf_ID, $prefix . 'tax_icon', true ); ?>

					<?php echo '<a class="btn btn-sm btn-outline-danger rounded-pill mr-1 mb-2" title="See all books shelved as ' . $shelf->name . '" href="' . get_term_link($shelf) . '" style="line-height: .9;"><span class="mr-2"><i class="' . esc_html($tax_icon) . '"></i></span><span class="small">' . $shelf->name . '</span></a>';
				} ?>
				<?php endif; ?>


			<?php if ( $link ) { ?>

				<div class="text-center mb-4">
					<a class="btn btn-outline-primary btn-rounded" title="External link to resource origin" target="_blank" href="<?php echo esc_url( $link ); ?>">
						<span class="mr-2">
							<i class="fal fa-link"></i>
						</span>
						<span class="font-weight-light">Resource Origin</span>
					</a>
				</div>

			<?php } ?>


			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			) );
			?>

			<footer class="entry-footer">

				<?php understrap_entry_footer(); ?>

			</footer><!-- .entry-footer -->

		</div><!-- .card-body -->

	</div><!-- .card -->

</div>

