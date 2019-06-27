<?php
/**
* Template Name: BS4 Colors
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

							<h3 class="pl-md-5">Color</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<p class="text-primary">.text-primary</p>
									<p class="text-secondary">.text-secondary</p>
									<p class="text-success">.text-success</p>
									<p class="text-danger">.text-danger</p>
									<p class="text-warning">.text-warning</p>
									<p class="text-info">.text-info</p>
									<p class="text-light bg-dark">.text-light</p>
									<p class="text-dark">.text-dark</p>
									<p class="text-muted">.text-muted</p>
									<p class="text-white bg-dark">.text-white</p>
								</div>
							</div>


							<h3 class="pl-md-5">Links</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<p><a href="#" class="text-primary">Primary link</a></p>
									<p><a href="#" class="text-secondary">Secondary link</a></p>
									<p><a href="#" class="text-success">Success link</a></p>
									<p><a href="#" class="text-danger">Danger link</a></p>
									<p><a href="#" class="text-warning">Warning link</a></p>
									<p><a href="#" class="text-info">Info link</a></p>
									<p><a href="#" class="text-light bg-dark">Light link</a></p>
									<p><a href="#" class="text-dark">Dark link</a></p>
									<p><a href="#" class="text-muted">Muted link</a></p>
									<p><a href="#" class="text-white bg-dark">White link</a></p>
								</div>
							</div>


							<h3 class="pl-md-5">Background color</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
									<div class="p-3 mb-2 bg-secondary text-white">.bg-secondary</div>
									<div class="p-3 mb-2 bg-success text-white">.bg-success</div>
									<div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
									<div class="p-3 mb-2 bg-warning text-white">.bg-warning</div>
									<div class="p-3 mb-2 bg-info text-white">.bg-info</div>
									<div class="p-3 mb-2 bg-light text-dark">.bg-light</div>
									<div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
									<div class="p-3 mb-2 bg-white text-dark">.bg-white</div>
								</div>
							</div>


							<h3 class="pl-md-5">Background gradient</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="p-3 mb-2 bg-gradient-primary text-white">.bg-gradient-primary</div>
									<div class="p-3 mb-2 bg-gradient-secondary text-white">.bg-gradient-secondary</div>
									<div class="p-3 mb-2 bg-gradient-success text-white">.bg-gradient-success</div>
									<div class="p-3 mb-2 bg-gradient-danger text-white">.bg-gradient-danger</div>
									<div class="p-3 mb-2 bg-gradient-warning text-white">.bg-gradient-warning</div>
									<div class="p-3 mb-2 bg-gradient-info text-white">.bg-gradient-info</div>
									<div class="p-3 mb-2 bg-gradient-light text-dark">.bg-gradient-light</div>
									<div class="p-3 mb-2 bg-gradient-dark text-white">.bg-gradient-dark</div>
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
