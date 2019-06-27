<?php
/**
* Template Name: BS4 Carousels
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

							<h3 class="pl-md-5">Slides only</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img class="d-block w-100" data-src="holder.js/920x400?bg=2a2025" alt="First slide">
											</div>
											<div class="carousel-item">
												<img class="d-block w-100" data-src="holder.js/920x400?bg=333333" alt="Second slide">
											</div>
											<div class="carousel-item">
												<img class="d-block w-100" data-src="holder.js/920x400?bg=555555" alt="Third slide">
											</div>
										</div>
									</div>
								</div>
							</div>


							<h3 class="pl-md-5">With controls</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img class="d-block w-100" data-src="holder.js/920x400?bg=2a2025" alt="First slide">
											</div>
											<div class="carousel-item">
												<img class="d-block w-100" data-src="holder.js/920x400?bg=555555" alt="Second slide">
											</div>
											<div class="carousel-item">
												<img class="d-block w-100" data-src="holder.js/920x400?bg=777777" alt="Third slide">
											</div>
										</div>
										<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
								</div>
							</div>


							<h3 class="pl-md-5">With indicators</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
										<ol class="carousel-indicators">
											<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
											<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
											<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
										</ol>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img class="d-block w-100" data-src="holder.js/920x400?bg=2a2025" alt="First slide">
											</div>
											<div class="carousel-item">
												<img class="d-block w-100" data-src="holder.js/920x400?bg=777777" alt="Second slide">
											</div>
											<div class="carousel-item">
												<img class="d-block w-100" data-src="holder.js/920x400?bg=444444" alt="Third slide">
											</div>
										</div>
										<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
								</div>
							</div>


							<h3 class="pl-md-5">With captions</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="carousel-item active">
										<img class="d-block w-100" data-src="holder.js/920x400?bg=777777" alt="First slide">
										<div class="carousel-caption d-none d-md-block">
											<h3>Caption Title 1</h3>
											<p>Stuff about slide!!</p>
										</div>
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" data-src="holder.js/920x400?bg=555555" alt="Second slide">
										<div class="carousel-caption d-none d-md-block">
											<h3>Caption Title 2</h3>
											<p>Stuff about slide!!</p>
										</div>
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" data-src="holder.js/920x400?bg=2a2025" alt="Third slide">
										<div class="carousel-caption d-none d-md-block">
											<h3>Caption Title 3</h3>
											<p>Stuff about slide!!</p>
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
