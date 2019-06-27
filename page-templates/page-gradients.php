<?php
/**
* Template Name: Gradients
*
* @package understrap
*/

get_header(); ?>

<div id="content" class="site-content container"><!-- closed in footer.php -->

	<div class="row">
		<div class="col-12"> <!-- Default Page is Full-Width -->
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</header><!-- .entry-header -->
						<div class="entry-content card">
							<div class="card-body">

								<h3 class="pl-md-5">Background Gradients</h3>
								<div class="row">
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-pink text-white">.gradient-pink</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-pink-1 text-white">.gradient-pink-1</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-pink-2 text-white">.gradient-pink-2</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-peach text-white">.gradient-peach</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-peach-1 text-white">.gradient-peach-1</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-peach-2 text-white">.gradient-peach-2</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-light-blue text-white">.gradient-light-blue</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-light-blue-1 text-white">.gradient-light-blue-1</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-light-blue-2 text-white">.gradient-light-blue-2</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-teal text-white">.gradient-teal</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-teal-1 text-white">.gradient-teal-1</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-teal-2 text-white">.gradient-teal-2</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-green text-white">.gradient-green</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-green-1 text-white">.gradient-green-1</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-green-2 text-white">.gradient-green-2</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-blue text-white">.gradient-blue</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-blue-1 text-white">.gradient-blue-1</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-blue-2 text-white">.gradient-blue-2</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-indigo text-white">.gradient-indigo</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-indigo-1 text-white">.gradient-indigo-1</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-indigo-2 text-white">.gradient-indigo-2</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-violet text-white">.gradient-violet</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-violet-1 text-white">.gradient-violet-1</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-violet-2 text-white">.gradient-violet-2</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-purple text-white">.gradient-purple</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-purple-1 text-white">.gradient-purple-1</div>
									</div>
									<div class="col-12 col-md-4 mb-3">
										<div class="py-5 px-3 mb-2 text-center gradient-purple-2 text-white">.gradient-purple-2</div>
									</div>
								</div>
							</div>

						</div><!-- .entry-content -->
						<?php if ( get_edit_post_link() ) : ?>
						<footer class="entry-footer">
							<?php
								edit_post_link(
									sprintf(
										wp_kses(
											/* translators: %s: Name of current post. Only visible to screen readers */
											__( 'Edit <span class="screen-reader-text">%s</span>', 'bootscores' ),
											array(
												'span' => array(
													'class' => array(),
												),
											)
										),
										get_the_title()
									),
									'<span class="edit-link">',
									'</span>'
								);
							?>
						</footer><!-- .entry-footer -->
						<?php endif; ?>
					</article><!-- #post-<?php the_ID(); ?> -->
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .col -->
	</div><!-- .row -->

<?php
//get_sidebar();
get_footer();
