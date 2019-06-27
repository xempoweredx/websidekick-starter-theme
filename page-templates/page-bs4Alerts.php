<?php
/**
* Template Name: BS4 Alerts
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
									<div class="alert alert-primary" role="alert">
								    	This is a primary alert—check it out!
								    </div>
								    <div class="alert alert-secondary" role="alert">
								    	This is a secondary alert—check it out!
								    </div>
								    <div class="alert alert-success" role="alert">
								    	This is a success alert—check it out!
								    </div>
								    <div class="alert alert-danger" role="alert">
								   	 	This is a danger alert—check it out!
								    </div>
								    <div class="alert alert-warning" role="alert">
								    	This is a warning alert—check it out!
								    </div>
								    <div class="alert alert-info" role="alert">
								    	This is a info alert—check it out!
								    </div>
								    <div class="alert alert-light" role="alert">
								    	This is a light alert—check it out!
								    </div>
								    <div class="alert alert-dark" role="alert">
								    	This is a dark alert—check it out!
								    </div>
								</div>
							</div>

							<h3 class="pl-md-5">Link Color</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="alert alert-primary" role="alert">
								      	This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
								    </div>
								    <div class="alert alert-secondary" role="alert">
								      	This is a secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
								    </div>
								    <div class="alert alert-success" role="alert">
								      	This is a success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
								    </div>
								    <div class="alert alert-danger" role="alert">
								      	This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
								    </div>
								    <div class="alert alert-warning" role="alert">
								      	This is a warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
								    </div>
								    <div class="alert alert-info" role="alert">
								      	This is a info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
								    </div>
								    <div class="alert alert-light" role="alert">
								      	This is a light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
								    </div>
								    <div class="alert alert-dark" role="alert">
								      	This is a dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
								    </div>
								</div>
							</div>


							<h3 class="pl-md-5">Additional content</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="alert alert-success" role="alert">
								      	<h4 class="alert-heading">Well done!</h4>
								      	<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
								      	<hr>
								      	<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
								    </div>
								</div>
							</div>


							<h3 class="pl-md-5">Dismissing</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
								      	<strong>Holy guacamole!</strong> You should check in on some of those fields below.
								      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								        	<span aria-hidden="true">&times;</span>
								      	</button>
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
