<?php
/**
 * Template Name: Ninja Books Table
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="ninja-table-page-wrapper">

	<div class="container-fluid" id="content">

		<div class="table-responsive">

			<table class="table table-sm bg-white table-bordered table-striped table-hover dataTable" id="booksDatatable" class="display" cellspacing="0" style="font-size:16px;">
	            <thead class="thead-default">
	                <tr class="bg-secondary text-white">
	                    <th class="text-center">Edit</th>
	                    <th>Title</th>
	                    <th>Format</th>
	                    <th>Shelf</th>
	                    <th>Authors</th>
	                    <th>Narrators</th>
	                    <th>Book#</th>
	                    <th>Series</th>
	                </tr>
	            </thead>
	            <tfoot>
	                <tr class="bg-secondary text-white">
	                    <th class="text-center">Edit</th>
	                    <th>Title</th>
	                    <th>Format</th>
	                    <th>Shelf</th>
	                    <th>Authors</th>
	                    <th>Narrators</th>
	                    <th>Book#</th>
	                    <th>Series</th>
	                </tr>
	            </tfoot>
	        </table>

	    </div>

	</div><!-- Container end -->

</div><!-- Wrapper end -->


<script>
	jQuery(document).ready(function( $ ) {

        var table = $('#booksDatatable').DataTable({
            "data": testdata.data,
            select:"single",
            "columns": [
                { "orderable": false, "className": 'text-center',  "data": "edit" },
                { "className": 'cell-title', "data": "title" },
                { "data": "formats" },
                { "data": "shelves" },
                { "data": "authors" },
                { "data": "narrators" },
                { "data": "seriesnumber" },
                { "data": "series" }
            ],
            "order": [[1, 'asc']],
            "lengthMenu": [ 50, 100, 150, 200 ]
        });

    });


    var testdata = {
    "data": [

    	<?php 
		// the query
		$args = array( 'post_type' => 'books', 'posts_per_page' => 100 );
		$the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>

		<?php 
		//the loop
		while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<?php

			$prefix = 'ninja_books_';

			$title		= get_the_title( $post );
			$subtitle    		= get_post_meta( get_the_ID(), $prefix . 'subtitle', true );
			$series_number		= get_post_meta( get_the_ID(), $prefix . 'series_number', true );

		?>

    {
    "edit": "<a title='Edit Book' class='px-1 text-primary' href='http://192.168.1.5/wordpress/wp-admin/post.php?post=<?php the_ID(); ?>&action=edit'><i class='fal fa-edit'></i></a>",
    "title": "<a title='View Book' class='text-primary' href='<?php the_permalink(); ?>'><?php echo $title; ?></a>",
    "formats": "<?php $term_list = wp_get_post_terms($post->ID, 'book_formats', array('fields' => 'all')); ?><?php foreach($term_list as $term_single) { ?><a class='d-block text-dark font-weight-light' href='<?php get_term_link($term_single); ?>'><?php echo $term_single->name; ?></a><?php } ?>",
    "shelves": "<?php $term_list = wp_get_post_terms($post->ID, 'book_shelves', array('fields' => 'all')); ?><?php foreach($term_list as $term_single) { ?><a class='d-block text-dark font-weight-light' href='<?php get_term_link($term_single); ?>'><?php echo $term_single->name; ?></a><?php } ?>",
    "authors": "<?php $term_list = wp_get_post_terms($post->ID, 'book_authors', array('fields' => 'all')); ?><div class='tax-list'><?php foreach($term_list as $term_single) { ?><a class='d-inline-block text-dark font-weight-light' href='<?php get_term_link($term_single); ?>'><?php echo $term_single->name; ?></a><span class='tax-separator'>, </span><?php } ?></div>",
    "narrators": "<?php $term_list = wp_get_post_terms($post->ID, 'book_narrators', array('fields' => 'all')); ?><div class='tax-list'><?php foreach($term_list as $term_single) { ?><a class='d-inline-block text-dark font-weight-light' href='<?php get_term_link($term_single); ?>'><?php echo $term_single->name; ?></a><span class='tax-separator'>, </span><?php } ?></div>",
    "seriesnumber": "<div class=' text-center'><?php if ($series_number) { echo ($series_number);} ?></div>",
    "series": "<?php $term_list = wp_get_post_terms($post->ID, 'book_series', array('fields' => 'all')); ?><div class='tax-list'><?php foreach($term_list as $term_single) { ?><a class='d-inline-block text-dark font-weight-light' href='<?php get_term_link($term_single); ?>'><?php echo $term_single->name; ?></a><span class='tax-separator'>, </span><?php } ?></div>",
    },

    <?php endwhile; ?>

			<?php wp_reset_postdata(); ?>

	<?php endif; ?>
    
    ]
    };

</script>


<?php get_footer(); ?>
