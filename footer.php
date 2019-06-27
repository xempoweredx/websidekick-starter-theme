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

			<div id="bugtrack" class="col-12 col-md-8 offset-md-2">

				<div class="alert alert-warning alert-dismissible fade show small text-center" role="alert">
					If you happen to spot an error on the site, please take a minute to inform me by filling out <a href="#bugModal" class="alert-link" data-toggle="modal">this brief form</a>. Whether spelling/grammar error, broken link, bad code, etc. With so much content on the site it's hard to keep track of everything, but I try. Your help in this is much appreciated! Thank you! - Chad
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>

			</div>

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

<!-- Modal -->
<div class="modal fade" id="bugModal" tabindex="-1" role="dialog" aria-labelledby="bugModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bugModalLabel">Bug Track/Error Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<?php echo do_shortcode('[wpforms id="4209"]'); ?>
      </div>
    </div>
  </div>
</div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

