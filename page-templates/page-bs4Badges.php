<?php
/**
* Template Name: BS4 Badges
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

							<h3 class="pl-md-5">Example</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-3">
								<h1>Example heading <span class="badge badge-secondary">New</span></h1>
								<h2>Example heading <span class="badge badge-secondary">New</span></h2>
								<h3>Example heading <span class="badge badge-secondary">New</span></h3>
								<h4>Example heading <span class="badge badge-secondary">New</span></h4>
								<h5>Example heading <span class="badge badge-secondary">New</span></h5>
								<h6>Example heading <span class="badge badge-secondary">New</span></h6>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-3">
								<h4>Button Badge Notifications</h4>
								<button type="button" class="btn btn-primary">
							  		Notifications <span class="badge badge-light">4</span>
								</button>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<button type="button" class="btn btn-primary">
						  			Profile <span class="badge badge-light">9</span>
						  			<span class="sr-only">unread messages</span>
								</button>
							</div>
						</div>


						<h3 class="pl-md-5">Contextual variations</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<span class="badge badge-primary">Primary</span>
								<span class="badge badge-secondary">Secondary</span>
								<span class="badge badge-success">Success</span>
								<span class="badge badge-danger">Danger</span>
								<span class="badge badge-warning">Warning</span>
								<span class="badge badge-info">Info</span>
								<span class="badge badge-light">Light</span>
								<span class="badge badge-dark">Dark</span>
							</div>
						</div>


						<h3 class="pl-md-5">Pill badges</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<span class="badge badge-pill badge-primary">Primary</span>
								<span class="badge badge-pill badge-secondary">Secondary</span>
								<span class="badge badge-pill badge-success">Success</span>
								<span class="badge badge-pill badge-danger">Danger</span>
								<span class="badge badge-pill badge-warning">Warning</span>
								<span class="badge badge-pill badge-info">Info</span>
								<span class="badge badge-pill badge-light">Light</span>
								<span class="badge badge-pill badge-dark">Dark</span>
							</div>
						</div>


						<h3 class="pl-md-5">Links</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<a href="#" class="badge badge-primary">Primary</a>
								<a href="#" class="badge badge-secondary">Secondary</a>
								<a href="#" class="badge badge-success">Success</a>
								<a href="#" class="badge badge-danger">Danger</a>
								<a href="#" class="badge badge-warning">Warning</a>
								<a href="#" class="badge badge-info">Info</a>
								<a href="#" class="badge badge-light">Light</a>
								<a href="#" class="badge badge-dark">Dark</a>
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
