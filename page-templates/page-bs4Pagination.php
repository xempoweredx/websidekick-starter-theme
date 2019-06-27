<?php
/**
* Template Name: BS4 Pagination
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

							<h3 class="pl-md-5">Overview</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav aria-label="Page navigation example">
								  <ul class="pagination">
								    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
								    <li class="page-item"><a class="page-link" href="#">1</a></li>
								    <li class="page-item"><a class="page-link" href="#">2</a></li>
								    <li class="page-item"><a class="page-link" href="#">3</a></li>
								    <li class="page-item"><a class="page-link" href="#">Next</a></li>
								  </ul>
								</nav>
							</div>
						</div>


						<h3 class="pl-md-5">Working with icons</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav aria-label="Page navigation example">
								  <ul class="pagination">
								    <li class="page-item">
								      <a class="page-link" href="#" aria-label="Previous">
								        <span aria-hidden="true">&laquo;</span>
								        <span class="sr-only">Previous</span>
								      </a>
								    </li>
								    <li class="page-item"><a class="page-link" href="#">1</a></li>
								    <li class="page-item"><a class="page-link" href="#">2</a></li>
								    <li class="page-item"><a class="page-link" href="#">3</a></li>
								    <li class="page-item">
								      <a class="page-link" href="#" aria-label="Next">
								        <span aria-hidden="true">&raquo;</span>
								        <span class="sr-only">Next</span>
								      </a>
								    </li>
								  </ul>
								</nav>
							</div>
						</div>


						<h3 class="pl-md-5">Disabled and active states</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-3">
								<nav aria-label="...">
								  <ul class="pagination">
								    <li class="page-item disabled">
								      <a class="page-link" href="#" tabindex="-1">Previous</a>
								    </li>
								    <li class="page-item"><a class="page-link" href="#">1</a></li>
								    <li class="page-item active">
								      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
								    </li>
								    <li class="page-item"><a class="page-link" href="#">3</a></li>
								    <li class="page-item">
								      <a class="page-link" href="#">Next</a>
								    </li>
								  </ul>
								</nav>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav aria-label="...">
								  <ul class="pagination">
								    <li class="page-item disabled">
								      <span class="page-link">Previous</span>
								    </li>
								    <li class="page-item"><a class="page-link" href="#">1</a></li>
								    <li class="page-item active">
								      <span class="page-link">
								        2
								        <span class="sr-only">(current)</span>
								      </span>
								    </li>
								    <li class="page-item"><a class="page-link" href="#">3</a></li>
								    <li class="page-item">
								      <a class="page-link" href="#">Next</a>
								    </li>
								  </ul>
								</nav>
							</div>
						</div>


						<h3 class="pl-md-5">Sizing</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-3">
								<nav aria-label="...">
								  <ul class="pagination pagination-lg">
								    <li class="page-item disabled">
								      <a class="page-link" href="#" tabindex="-1">Previous</a>
								    </li>
								    <li class="page-item"><a class="page-link" href="#">1</a></li>
								    <li class="page-item"><a class="page-link" href="#">2</a></li>
								    <li class="page-item"><a class="page-link" href="#">3</a></li>
								    <li class="page-item">
								      <a class="page-link" href="#">Next</a>
								    </li>
								  </ul>
								</nav>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav aria-label="...">
								  <ul class="pagination pagination-sm">
								    <li class="page-item disabled">
								      <a class="page-link" href="#" tabindex="-1">Previous</a>
								    </li>
								    <li class="page-item"><a class="page-link" href="#">1</a></li>
								    <li class="page-item"><a class="page-link" href="#">2</a></li>
								    <li class="page-item"><a class="page-link" href="#">3</a></li>
								    <li class="page-item">
								      <a class="page-link" href="#">Next</a>
								    </li>
								  </ul>
								</nav>
							</div>
						</div>


						<h3 class="pl-md-5">Alignment</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-3">
								<nav aria-label="Page navigation example">
								  <ul class="pagination justify-content-center">
								    <li class="page-item disabled">
								      <a class="page-link" href="#" tabindex="-1">Previous</a>
								    </li>
								    <li class="page-item"><a class="page-link" href="#">1</a></li>
								    <li class="page-item"><a class="page-link" href="#">2</a></li>
								    <li class="page-item"><a class="page-link" href="#">3</a></li>
								    <li class="page-item">
								      <a class="page-link" href="#">Next</a>
								    </li>
								  </ul>
								</nav>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav aria-label="Page navigation example">
								  <ul class="pagination justify-content-end">
								    <li class="page-item disabled">
								      <a class="page-link" href="#" tabindex="-1">Previous</a>
								    </li>
								    <li class="page-item"><a class="page-link" href="#">1</a></li>
								    <li class="page-item"><a class="page-link" href="#">2</a></li>
								    <li class="page-item"><a class="page-link" href="#">3</a></li>
								    <li class="page-item">
								      <a class="page-link" href="#">Next</a>
								    </li>
								  </ul>
								</nav>
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
