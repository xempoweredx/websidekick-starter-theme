<?php
/**
 * Template Name: Ninja Resource Table
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

			<table class="table table-sm bg-white table-bordered table-striped table-hover dataTable" id="resourcesDatatable" class="display" cellspacing="0" style="font-size:16px;">
	            <thead class="thead-default">
	                <tr class="bg-secondary text-white">
	                    <th class="text-center">Edit</th>
	                    <th>Title</th>
	                    <th>Type</th>
	                    <th>Authors</th>
	                    <th>Topics</th>
	                    <th>Link</th>
	                    <th>Posted</th>
	                    <th>By</th>
	                </tr>
	            </thead>
	            <tfoot>
	                <tr class="bg-secondary text-white">
	                    <th class="text-center">Edit</th>
	                    <th>Title</th>
	                    <th>Type</th>
	                    <th>Authors</th>
	                    <th>Topics</th>
	                    <th>Link</th>
	                    <th>Posted</th>
	                    <th>By</th>
	                </tr>
	            </tfoot>
	        </table>

	    </div>

	</div><!-- Container end -->

</div><!-- Wrapper end -->


<script>
	jQuery(document).ready(function( $ ) {

        var table = $('#resourcesDatatable').DataTable({
            "data": testdata.data,
            select:"single",
            "columns": [
                { "orderable": false, "className": 'text-center',  "data": "edit" },
                { "className": 'cell-title', "data": "title" },
                { "data": "types" },
                { "data": "authors" },
                { "data": "topics" },
                { "data": "link" },
                { "data": "date" },
                { "data": "user" }
            ],
            "order": [[1, 'asc']],
            "lengthMenu": [ 50, 100, 150, 200 ]
        });

    });


    var testdata = {
    "data": [

    	<?php 
		// the query
		$args = array( 'post_type' => 'resources', 'posts_per_page' => 100 );
		$the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>

		<?php 
		//the loop
		while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<?php

			$prefix = 'ninja_resources_';

			$title		= get_the_title( $post );
			$link		= get_post_meta( get_the_ID(), $prefix . 'link', true );
			$author_posts = get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) );

		?>

    {
    "edit": "<a title='Edit Resource' class='px-1 text-primary' href='http://192.168.1.5/wordpress/wp-admin/post.php?post=<?php the_ID(); ?>&action=edit'><i class='fal fa-edit'></i></a>",
    "title": "<a title='View Resource' class='text-primary' href='<?php the_permalink(); ?>'><?php echo $title; ?></a>",
    "types": "<?php $term_list = wp_get_post_terms($post->ID, 'resource_types', array('fields' => 'all')); ?><?php foreach($term_list as $term_single) { ?><a class='d-block text-dark font-weight-light' href='<?php get_term_link($term_single); ?>'><?php echo $term_single->name; ?></a><?php } ?>",
    "authors": "<?php $term_list = wp_get_post_terms($post->ID, 'resource_authors', array('fields' => 'all')); ?><div class='tax-list'><?php foreach($term_list as $term_single) { ?><a class='d-inline-block text-dark font-weight-light' href='<?php get_term_link($term_single); ?>'><?php echo $term_single->name; ?></a><span class='tax-separator'>, </span><?php } ?></div>",
    "topics": "<?php $term_list = wp_get_post_terms($post->ID, 'resource_topics', array('fields' => 'all')); ?><div class='tax-list'><?php foreach($term_list as $term_single) { ?><a class='d-inline-block text-dark font-weight-light' href='<?php get_term_link($term_single); ?>'><?php echo $term_single->name; ?></a><span class='tax-separator'>, </span><?php } ?></div>",
    "link": "<a class='d-block text-center' href='<?php echo ($link); ?>' target='_blank'><i class='fal fa-link'></i></a>",
    "date": "<?php echo get_the_date(); ?>",
    "user": "<a href='<?php echo ($author_posts); ?>'><?php the_author(); ?></a>",

    },

    <?php endwhile; ?>

			<?php wp_reset_postdata(); ?>

	<?php endif; ?>
    
    ]
    };

</script>


<?php get_footer(); ?>
