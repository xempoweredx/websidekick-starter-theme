<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
} ?>

<!-- Set this option in "Appearance/Customize" -->
<?php $container   = get_theme_mod( 'understrap_container_type' ); ?>

<!--  Pulls markup from file: "sidebar-templates/sidebar-footerfull.php" -->
<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info text-center">

						<a href="https://github.com/xempoweredx/websidekick-starter-theme" target="_blank">WebSidekick Starter Theme</a> (child theme for <a href="https://understrap.com/" target="_blank">Understrap</a>) developed by <a href="http://chadgray.me" target="_blank">Chad Gray</a>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

