<?php
/**
 * Template Name: The Blog Layout
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper mt-md-5 pt-md-3" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

				<main class="site-main" id="main">
				    
				    <?php while ( have_posts() ) : the_post(); ?>

					<header class="entry-header">
						<h1 class="entry-title font-weight-light text-dark">The Blog</h1>
					</header><!-- .entry-header -->

    					<?php 
    					//$paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
    					$args = array( 
    						'post_type' => 'post',
    						'posts_per_page' => -1,
    						'paged' => 1,
    					);
    					$query1 = new WP_Query( $args ); // The Query
						if ( $query1->have_posts() ) { ?>
							<div class="row">
							<?php while ( $query1->have_posts() ) { // The Loop
								$query1->the_post();
									get_template_part( 'loop-templates/content', 'post' );
								} ?>
							</div>
			
						<?php } ?>
						
						<?php wp_reset_postdata(); ?>
						
						<?php understrap_post_nav(); ?>
						
					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->
				
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
