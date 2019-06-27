<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<!-- Set this option in "Appearance/Customize" -->
<?php $container   = get_theme_mod( 'understrap_container_type' ); ?>

<div class="wrapper mt-md-5 pt-md-3" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<!-- Install Yoast SEO plugin and enable breadcrumbs for them to be displayed here. -->
		<?php  if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>

		<div class="row">

			<!-- Do the left sidebar check. Set this option in "Appearance/Customize" -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php if ( have_posts() ) : ?>

						<div class="row">

					<header class="page-header w-100 mb-3">
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description text-muted">', '</div>' );
						?>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<!--  Pulls markup from file: "loop-templates/content-posttype.php" -->
						<?php get_template_part( 'loop-templates/content', get_post_type() ); ?>

					<?php endwhile; ?>

						</div>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<!-- Do the right sidebar check. Set this option in "Appearance/Customize" -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div> <!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
