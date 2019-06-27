<?php
/**
* Template Name: BS4 Popovers
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
							<div class="col-12 col-md-8 offset-md-2 mb-5">
								<div class="popover bs-popover-top bs-popover-top-docs" style="position: relative; display: block; float: left; width: 260px; margin: 1.25rem;">
								    <div class="arrow" style="left: 50%;"></div>
								    <h3 class="popover-header">Popover top</h3>
								    <div class="popover-body">
								      	<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
								    </div>
								</div>
								<div class="popover bs-popover-right bs-popover-right-docs" style="position: relative; display: block; float: left; width: 260px; margin: 1.25rem;">
								    <div class="arrow" style="top: 50%;"></div>
								    <h3 class="popover-header">Popover right</h3>
								    <div class="popover-body">
								      	<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
								    </div>
								</div>
								<div class="popover bs-popover-bottom bs-popover-bottom-docs" style="position: relative; display: block; float: left; width: 260px; margin: 1.25rem;">
								    <div class="arrow" style="left: 50%;"></div>
								    <h3 class="popover-header">Popover bottom</h3>
								    <div class="popover-body">
								      	<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
								    </div>
								</div>
								<div class="popover bs-popover-left bs-popover-left-docs" style="position: relative; display: block; float: left; width: 260px; margin: 1.25rem;">
								    <div class="arrow" style="top: 50%;"></div>
								    <h3 class="popover-header">Popover left</h3>
								    <div class="popover-body">
								      	<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
								    </div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Live demo</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
							</div>
						</div>


						<h3 class="pl-md-5">Four directions</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
								  Popover on top
								</button>

								<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
								  Popover on right
								</button>

								<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
								sagittis lacus vel augue laoreet rutrum faucibus.">
								  Popover on bottom
								</button>

								<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
								  Popover on left
								</button>
							</div>
						</div>


						<h3 class="pl-md-5">Dismiss on next click</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<a tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
							</div>
							<script>
								jQuery('.popover-dismiss').popover({
								  trigger: 'focus'
								})
							</script>
						</div>


						<script>
							jQuery(function () {
						  		jQuery('[data-toggle="popover"]').popover()
							})
						</script>

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
