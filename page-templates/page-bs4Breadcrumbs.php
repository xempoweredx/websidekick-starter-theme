<?php
/**
* Template Name: BS4 Breadcrumbs
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
							  	<div class="col-12 col-md-10 offset-md-1 mb-3">
							    	<nav aria-label="breadcrumb" role="navigation">
							      		<ol class="breadcrumb">
							        		<li class="breadcrumb-item active" aria-current="page">Home</li>
							      		</ol>
							    	</nav>
							  	</div>
							</div>
							<div class="row">
							  	<div class="col-12 col-md-10 offset-md-1 mb-3">
							    	<nav aria-label="breadcrumb" role="navigation">
							      		<ol class="breadcrumb">
							        		<li class="breadcrumb-item"><a href="#">Home</a></li>
							        		<li class="breadcrumb-item active" aria-current="page">Library</li>
							      		</ol>
							    	</nav>
							  	</div>
							</div>
							<div class="row">
							  	<div class="col-12 col-md-10 offset-md-1 mb-5">
							    	<nav aria-label="breadcrumb" role="navigation">
							      		<ol class="breadcrumb">
							        		<li class="breadcrumb-item"><a href="#">Home</a></li>
							        		<li class="breadcrumb-item"><a href="#">Library</a></li>
							        		<li class="breadcrumb-item active" aria-current="page">Data</li>
							      		</ol>
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
