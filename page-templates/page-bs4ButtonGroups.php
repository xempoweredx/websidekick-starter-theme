<?php
/**
* Template Name: BS4 Button Groups
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

							<h3 class="pl-md-5">Basic example</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="btn-group" role="group" aria-label="Basic example">
										<button type="button" class="btn btn-secondary">Left</button>
										<button type="button" class="btn btn-secondary">Middle</button>
										<button type="button" class="btn btn-secondary">Right</button>
									</div>
								</div>
							</div>


							<h3 class="pl-md-5">Button toolbar</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-3">
									<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
										<div class="btn-group mr-2" role="group" aria-label="First group">
											<button type="button" class="btn btn-secondary">1</button>
											<button type="button" class="btn btn-secondary">2</button>
											<button type="button" class="btn btn-secondary">3</button>
											<button type="button" class="btn btn-secondary">4</button>
										</div>
										<div class="btn-group mr-2" role="group" aria-label="Second group">
											<button type="button" class="btn btn-secondary">5</button>
											<button type="button" class="btn btn-secondary">6</button>
											<button type="button" class="btn btn-secondary">7</button>
										</div>
										<div class="btn-group" role="group" aria-label="Third group">
											<button type="button" class="btn btn-secondary">8</button>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-3">
									<div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
									  	<div class="btn-group mr-2" role="group" aria-label="First group">
										    <button type="button" class="btn btn-secondary">1</button>
										    <button type="button" class="btn btn-secondary">2</button>
										    <button type="button" class="btn btn-secondary">3</button>
										    <button type="button" class="btn btn-secondary">4</button>
									  	</div>
									  	<div class="input-group">
									    	<div class="input-group-prepend">
									      		<div class="input-group-text" id="btnGroupAddon">@</div>
									    	</div>
									    	<input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
									  	</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
									  	<div class="btn-group" role="group" aria-label="First group">
										    <button type="button" class="btn btn-secondary">1</button>
										    <button type="button" class="btn btn-secondary">2</button>
										    <button type="button" class="btn btn-secondary">3</button>
										    <button type="button" class="btn btn-secondary">4</button>
									  	</div>
									  <div class="input-group">
									    	<div class="input-group-prepend">
									      		<div class="input-group-text" id="btnGroupAddon2">@</div>
									    	</div>
									    	<input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon2">
									  	</div>
									</div>
								</div>
							</div>


							<h3 class="pl-md-5">Sizing</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-3">
									<div class="btn-group btn-group-lg" role="group" aria-label="Sizing">
										<button type="button" class="btn btn-secondary">Left</button>
										<button type="button" class="btn btn-secondary">Middle</button>
										<button type="button" class="btn btn-secondary">Right</button>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-3">
									<div class="btn-group" role="group" aria-label="Sizing">
										<button type="button" class="btn btn-secondary">Left</button>
										<button type="button" class="btn btn-secondary">Middle</button>
										<button type="button" class="btn btn-secondary">Right</button>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="btn-group btn-group-sm" role="group" aria-label="Sizing">
										<button type="button" class="btn btn-secondary">Left</button>
										<button type="button" class="btn btn-secondary">Middle</button>
										<button type="button" class="btn btn-secondary">Right</button>
									</div>
								</div>
							</div>


							<h3 class="pl-md-5">Nesting</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
										<button type="button" class="btn btn-secondary">1</button>
										<button type="button" class="btn btn-secondary">2</button>
										<div class="btn-group" role="group">
											<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Dropdown
											</button>
											<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
												<a class="dropdown-item" href="#">Dropdown link</a>
												<a class="dropdown-item" href="#">Dropdown link</a>
											</div>
										</div>
									</div>
								</div>
							</div>


							<h3 class="pl-md-5">Vertical variation</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="btn-group-vertical" role="group" aria-label="Vertical variation">
										<button type="button" class="btn btn-secondary">Left</button>
										<button type="button" class="btn btn-secondary">Middle</button>
										<button type="button" class="btn btn-secondary">Right</button>
										<div class="btn-group" role="group">
											<button id="btnGroupDropA" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Dropdown
											</button>
											<div class="dropdown-menu" aria-labelledby="btnGroupDropA">
												<a class="dropdown-item" href="#">Dropdown link</a>
												<a class="dropdown-item" href="#">Dropdown link</a>
											</div>
										</div>
										<div class="btn-group" role="group">
											<button id="btnGroupDropB" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Dropdown
											</button>
											<div class="dropdown-menu" aria-labelledby="btnGroupDropB">
												<a class="dropdown-item" href="#">Dropdown link</a>
												<a class="dropdown-item" href="#">Dropdown link</a>
											</div>
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
