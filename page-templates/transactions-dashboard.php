<?php
/**
 * Template Name: Transactions Dashboard Page
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<h1 class="h3">Dashboard</h1>

					<?php 

					$args = array(
						'post_type' => 'transactions',
					);

					// the query
					$the_query = new WP_Query( $args ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

						<div class="row">

							<!-- the loop -->
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

								<?php get_template_part( 'loop-templates/content', 'transactions' ); ?>

							<?php endwhile; ?>
							<!-- end of the loop -->

						</div>

						<?php wp_reset_postdata(); ?>

					<?php else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
