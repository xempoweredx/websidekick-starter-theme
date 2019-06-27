<?php
/**
* Template Name: BS4 Tooltips
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

							<h3 class="pl-md-5">Examples</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<p class="muted">Tight pants next level keffiyeh <a href="#" data-toggle="tooltip" title="Default tooltip">you probably</a> haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href="#" data-toggle="tooltip" title="Another tooltip">have a</a> terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href="#" data-toggle="tooltip" title="Another one here too">whatever keytar</a>, scenester farm-to-table banksy Austin <a href="#" data-toggle="tooltip" title="The last tip!">twitter handle</a> freegan cred raw denim single-origin coffee viral.
						  		</p>
							</div>
						</div>


						<h3 class="pl-md-5">Static demo</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="bd-example bd-example-tooltip-static">
								  <div class="tooltip bs-tooltip-top bs-tooltip-top-docs" role="tooltip" style="position: relative; display: inline-block; margin: 10px 20px; opacity: 1;">
								    <div class="arrow" style="left: 50%;"></div>
								    <div class="tooltip-inner">
								      Tooltip on the top
								    </div>
								  </div>
								  <div class="tooltip bs-tooltip-right bs-tooltip-right-docs" role="tooltip" style="position: relative; display: inline-block; margin: 10px 20px; opacity: 1;">
								    <div class="arrow" style="top: 50%;"></div>
								    <div class="tooltip-inner">
								      Tooltip on the right
								    </div>
								  </div>
								  <div class="tooltip bs-tooltip-bottom bs-tooltip-bottom-docs" role="tooltip" style="position: relative; display: inline-block; margin: 10px 20px; opacity: 1;">
								    <div class="arrow" style="left: 50%;"></div>
								    <div class="tooltip-inner">
								      Tooltip on the bottom
								    </div>
								  </div>
								  <div class="tooltip bs-tooltip-left bs-tooltip-left-docs" role="tooltip" style="position: relative; display: inline-block; margin: 10px 20px; opacity: 1;">
								    <div class="arrow" style="top: 50%;"></div>
								    <div class="tooltip-inner">
								      Tooltip on the left
								    </div>
								  </div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Interactive demo</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
								  Tooltip on top
								</button>
								<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
								  Tooltip on right
								</button>
								<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
								  Tooltip on bottom
								</button>
								<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
								  Tooltip on left
								</button>
							</div>
						</div>


						<h3 class="pl-md-5">With HTML</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
								  Tooltip with HTML
								</button>
							</div>
						</div>


						<script>
							jQuery(function () {
							  jQuery('[data-toggle="tooltip"]').tooltip()
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
