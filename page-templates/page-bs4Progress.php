<?php
/**
* Template Name: BS4 Progress
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

							<h3 class="pl-md-5">Standard</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="progress">
								  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress" style="margin-top: 1rem;">
								  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress" style="margin-top: 1rem;">
								  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress" style="margin-top: 1rem;">
								  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress" style="margin-top: 1rem;">
								  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Labels</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="progress">
								  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Height</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="progress" style="height: 1px;">
								  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress" style="height: 20px;" style="margin-top: 1rem;">
								  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Backgrounds</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="progress">
								  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress" style="margin-top: 1rem;">
								  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress" style="margin-top: 1rem;">
								  <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress" style="margin-top: 1rem;">
								  <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Multiple bars</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="progress">
								  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								  <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								  <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Striped</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="progress">
								  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress" style="margin-top: 1rem;">
								  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress" style="margin-top: 1rem;">
								  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress" style="margin-top: 1rem;">
								  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress" style="margin-top: 1rem;">
								  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Animated stripes</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="progress">
								  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
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
