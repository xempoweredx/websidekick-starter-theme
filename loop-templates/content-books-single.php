<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	$prefix 			= '_sidekick_book_';

	$subtitle    		= get_post_meta( get_the_ID(), $prefix . 'subtitle', true );
	$series_number		= get_post_meta( get_the_ID(), $prefix . 'series_number', true );
	$summary			= get_post_meta( get_the_ID(), $prefix . 'summary', true );
	$status				= get_post_meta( get_the_ID(), $prefix . 'status', true );
	$started			= get_post_meta( get_the_ID(), $prefix . 'started', true );
	$finished			= get_post_meta( get_the_ID(), $prefix . 'finished', true );
	$rating_overall		= get_post_meta( get_the_ID(), $prefix . 'rating_overall', true );
	$maturity			= get_post_meta( get_the_ID(), $prefix . 'maturity', true );
	$personal_review	= get_post_meta( get_the_ID(), $prefix . 'personal_review', true );
	$personal_notes		= get_post_meta( get_the_ID(), $prefix . 'personal_notes', true ); 
	$gr_id       		= get_post_meta( get_the_ID(), $prefix . 'gr_id', true );
	$author_last		= get_post_meta( get_the_ID(), $prefix . 'author_last', true ); 
	$google_preview_link = get_post_meta( get_the_ID(), $prefix . 'google_preview_link', true );
	$google_info_link	= get_post_meta( get_the_ID(), $prefix . 'google_info_link', true );
	$lt_id				= get_post_meta( get_the_ID(), $prefix . 'lt_id', true );

	$editions = get_post_meta( get_the_ID(), $prefix . 'edition_group', true );
	$i1=0;
	$i2=0;
	$len=count($editions);

?>

<div class="col-12">
    
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    	<div class="row">
    		<div class="col-12 col-md-6">
    			<img class="w-100" src="<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>" />
    		</div>
    		<div class="col-12 col-md-6">
    			<header class="entry-header">
    
    		<h1 class="entry-title mb-0"><?php the_title(); ?></h1>
    		<h4 class="text-muted"><?php if (isset($subtitle)) { echo esc_html($subtitle); } ?></h4>

    		<?php $series = get_the_terms($post->ID, 'book-series');
				if ( $series && ! is_wp_error( $series ) ) : ?>
				<?php foreach($series as $series_term) { ?>
					<h5><a class="" title="See all books in <?php echo $series_term->name; ?>" href="<?php echo get_term_link($series_term); ?>"><?php echo $series_term->name; ?></a> Book <?php if ($series_number) { echo esc_html($series_number); }
					} ?></h5>
				<?php endif; ?>
    
    		<div class="entry-meta">

    			<div class="pt-3">

					<?php $authors = get_the_terms($post->ID, 'book-authors');
					if ( $authors && ! is_wp_error( $authors ) ) : ?>
					<?php foreach($authors as $author) { echo '<a class="h5 d-block" title="Author. See all books written by ' . $author->name . '" href="' . get_term_link($author) . '"><span class="mr-2"><i class="fal fa-book-user"></i></span><span>' . $author->name . '</span></a>'; } ?>
					<?php endif; ?>

					<?php $narrators = get_the_terms($post->ID, 'book-narrators');
					if ( $narrators && ! is_wp_error( $narrators ) ) : ?>
					<?php foreach($narrators as $narrator) { echo '<a class="h5 d-block" title="Narrator. See all books written by ' . $narrator->name . '" href="' . get_term_link($narrator) . '"><span class="mr-2"><i class="fal fa-book-reader"></i></span><span>' . $narrator->name . '</span></a>'; } ?>
					<?php endif; ?>

					<?php $genres = get_the_terms($post->ID, 'book-genres');
					if ( $genres && ! is_wp_error( $genres ) ) : ?>
					<?php foreach($genres as $genre) { 
						$genre_icon = get_term_meta( $genre->term_id, '_sidekick_book_tax_meta_icon', true );
						echo '<a class="h5 d-block" title="Genre. See all books in ' . $genre->name . '" href="' . get_term_link($genre) . '"><span class="mr-2"><i class="' . $genre_icon . '"></i></span><span>' . $genre->name . '</span></a>'; } ?>
					<?php endif; ?>

				</div>

				<div class="pt-4">

					<?php foreach($editions as $edition_link) {

						if ( isset( $edition_link['format'] ) ) 		{ $edition_link_format = esc_html( $edition_link['format'] ); }

						if ( 'audible' == $edition_link_format ) { $btn_color = 'md_btn-outline-orange'; $ed_icon = 'fab fa-audible'; }
						if ( 'mp3' == $edition_link_format ) { $btn_color = 'md_btn-outline-red'; $ed_icon = 'fal fa-headphones'; }
						if ( 'kindle' == $edition_link_format ) { $btn_color = 'md_btn-outline-blue-grey'; $ed_icon = 'fab fa-amazon'; }
						if ( 'paperback' == $edition_link_format ) { $btn_color = 'md_btn-outline-blue'; $ed_icon = 'fal fa-book-alt'; }
						if ( 'hardcover' == $edition_link_format ) { $btn_color = 'md_btn-outline-cyan'; $ed_icon = 'fal fa-book'; }
						if ( 'ebook' == $edition_link_format ) { $btn_color = 'md_btn-outline-green'; $ed_icon = 'fal fa-tablet'; }
						if ( 'pdf' == $edition_link_format ) { $btn_color = 'md_btn-outline-grey'; $ed_icon = 'fal fa-flie-pdf'; }

						echo '<a class="btn ' . $btn_color . ' rounded-pill mr-3 mb-2" href="#bookEdition' . $i1++ . '"><span class="mr-2"><i class="' . $ed_icon . '"></i></span><span class="text-capitalize">' . $edition_link_format . '</span></a>';
					} ?>

				</div>
    
    		</div><!-- .entry-meta -->
    
    	</header><!-- .entry-header -->

    			
    		</div>
    	</div>
        
    	<div class="entry-content">
    		<?php

    		foreach ( (array) $editions as $key => $entry ) {

				//$img = $title = $desc = $caption = '';

				if ( isset( $entry['title'] ) ) 		{ $title = esc_html( $entry['title'] ); }
				if ( isset( $entry['format'] ) ) 		{ $format = esc_html( $entry['format'] ); }
				if ( isset( $entry['pages'] ) ) 		{ $pages = esc_html( $entry['pages'] ); }
				if ( isset( $entry['time'] ) ) 			{ $time = esc_html( $entry['time'] ); }
				if ( isset( $entry['pub_year'] ) ) 		{ $pub_year = esc_html( $entry['pub_year'] ); }
				if ( isset( $entry['ownership'] ) )		{ $ownership = esc_html( $entry['ownership'] ); }
				if ( isset( $entry['isbn'] ) ) 			{ $isbn = esc_html( $entry['isbn'] ); }
				if ( isset( $entry['isbn13'] ) ) 		{ $isbn13 = esc_html( $entry['isbn13'] ); }
				if ( isset( $entry['asin'] ) ) 			{ $asin = esc_html( $entry['asin'] ); }
				if ( isset( $entry['rating_story'] ) )	{ $rating_story = esc_html( $entry['rating_story'] ); }
				if ( isset( $entry['rating_performance'] ) )	{ $rating_performance = esc_html( $entry['rating_performance'] ); } ?>

				<h4 id="bookEdition<?php echo $i2++; ?>" class="edition-title text-capitalize"><?php echo $format; ?><small class="pl-2 text-muted font-weight-light">Edition</small></h4>

				<?php
				//if ($title) { echo '<h5>Title: ' . $title . '</h5>'; }
				//if ($format) { echo '<h4 class="text-muted">' . $format . '</h4>'; }
				if ($pages) { echo '<h5>Pages: ' . $pages . '</h5>'; }
				if ($time) { echo '<h5>Time: ' . $time . '</h5>'; }
				if ($pub_year) { echo '<h5>Year: ' . $pub_year . '</h5>'; }
				if ($ownership) { echo '<h5>Ownership: ' . $ownership . '</h5>'; }
				if ($isbn) { echo '<h5>ISBN: ' . $isbn . '</h5>'; }
				if ($isbn13) { echo '<h5>ISBN13: ' . $isbn13 . '</h5>'; }
				if ($asin) { echo '<h5>ASIN: ' . $asin . '</h5>'; }
				if ($rating_story) { echo '<h5>Story: ' . $rating_story . '</h5>'; }
				if ($rating_performance) { echo '<h5>Performance: ' . $rating_performance . '</h5>'; }

				echo '<hr>';

				/*if ( isset( $entry['description'] ) ) {
					$desc = wpautop( $entry['description'] );
				}

				if ( isset( $entry['image_id'] ) ) {
					$img = wp_get_attachment_image( $entry['image_id'], 'share-pick', null, array(
						'class' => 'thumb',
					) );
				}

				$caption = isset( $entry['image_caption'] ) ? wpautop( $entry['image_caption'] ) : '';*/

			}
			?>

			<?php understrap_posted_on(); ?>
    
    		<?php
    		wp_link_pages( array(
    			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
    			'after'  => '</div>',
    		) );
    		?>
    
    	</div><!-- .entry-content -->
    
    	<footer class="entry-footer">
    
    		<?php understrap_entry_footer(); ?>
    
    	</footer><!-- .entry-footer -->
    
    </article><!-- #post-## -->

</div>
