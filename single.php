<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<!-- Set this option in "Appearance/Customize" -->
<?php $container   = get_theme_mod( 'understrap_container_type' ); ?>

<div class="wrapper mt-md-5 pt-md-3" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<!-- Install Yoast SEO plugin and enable breadcrumbs for them to be displayed here. -->
		<?php  if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>

		<div class="row">

			<!-- Do the left sidebar check. Set this option in "Appearance/Customize" -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">
				<div class="row">

				<?php while ( have_posts() ) : the_post(); ?>

					<!--  Pulls markup from file: "loop-templates/content-posttype-single.php" -->
					<?php get_template_part( 'loop-templates/content', get_post_type() . '-single' ); ?>

						<?php understrap_post_nav(); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) : comments_template();
					endif; ?>

				<?php endwhile; // end of the loop. ?>

				</div><!-- /.row -->
			</main><!-- #main -->

			<!-- Do the right sidebar check. Set this option in "Appearance/Customize" -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
