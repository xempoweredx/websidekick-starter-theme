<?php
/**
* Template Name: BS4 Jumbotron
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

							<h3 class="pl-md-5"></h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="jumbotron">
								  <h1 class="display-3">Hello, world!</h1>
								  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
								  <hr class="my-4">
								  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
								  <p class="lead">
								    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
								  </p>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5"></h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="jumbotron jumbotron-fluid">
								  <div class="container">
								    <h1 class="display-3">Fluid jumbotron</h1>
								    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
								  </div>
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
