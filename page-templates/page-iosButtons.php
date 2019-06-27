<?php
/**
* Template Name: BS4 iOS Buttons
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

							<h3 class="pl-md-5">Default Theme Examples</h3>
						<div class="row">
						  <div class="col-12 col-md-10 offset-md-1 mb-3">
						    <button type="button" class="btn ios_btn ios_btn-link">Link</button>
						  </div>
						</div>
						<div class="row">
						  <div class="col-12 col-md-10 offset-md-1 mb-5">
						    <button type="button" class="btn ios_btn ios_btn-primary">Primary</button>
						    <button type="button" class="btn ios_btn ios_btn-secondary">Secondary</button>
						    <button type="button" class="btn ios_btn ios_btn-success">Success</button>
						    <button type="button" class="btn ios_btn ios_btn-danger">Danger</button>
						    <button type="button" class="btn ios_btn ios_btn-warning">Warning</button>
						    <button type="button" class="btn ios_btn ios_btn-info">Info</button>
						    <button type="button" class="btn ios_btn ios_btn-light">Light</button>
						    <button type="button" class="btn ios_btn ios_btn-dark">Dark</button>
						  </div>
						</div>


						<h3 class="pl-md-5">FA 5 Icon Buttons</h3>
						<div class="row">
						  <div class="col-12 col-md-10 offset-md-1 mb-5">
						    <button type="button" class="btn ios_btn ios_btn-primary"><span class="mr-2"><i class="fas fa-rocket"></i></span>Rocket</button>
						    <button type="button" class="btn ios_btn ios_btn-primary"><span class="mr-2"><i class="fab fa-facebook"></i></span>Share</button>
						    <button type="button" class="btn ios_btn ios_btn-secondary">Sweet!<span class="ml-2"><i class="fas fa-paper-plane"></i></span></button>
						    <button type="button" class="btn ios_btn ios_btn-success"><span class="mr-2"><i class="fal fa-download"></i></span>Oh Yeah!</button>
						    <button type="button" class="btn ios_btn ios_btn-danger"><span><i class="fas fa-ban"></i></span></button>
						  </div>
						</div>


						<h3 class="pl-md-5">Button tags</h3>
						<div class="row">
						  <div class="col-12 col-md-10 offset-md-1 mb-5">
						    <a class="btn ios_btn ios_btn-primary" href="#" role="button">Link</a>
						    <button class="btn ios_btn ios_btn-primary" type="submit">Button</button>
						    <input class="btn ios_btn ios_btn-primary" type="button" value="Input">
						    <input class="btn ios_btn ios_btn-primary" type="submit" value="Submit">
						    <input class="btn ios_btn ios_btn-primary" type="reset" value="Reset">
						  </div>
						</div>


						<h3 class="pl-md-5">Outline buttons</h3>
						<div class="row">
						  <div class="col-12 col-md-10 offset-md-1 mb-5">
						    <button type="button" class="btn ios_btn ios_btn-outline-primary">Primary</button>
						    <button type="button" class="btn ios_btn ios_btn-outline-secondary">Secondary</button>
						    <button type="button" class="btn ios_btn ios_btn-outline-success">Success</button>
						    <button type="button" class="btn ios_btn ios_btn-outline-danger">Danger</button>
						    <button type="button" class="btn ios_btn ios_btn-outline-warning">Warning</button>
						    <button type="button" class="btn ios_btn ios_btn-outline-info">Info</button>
						    <button type="button" class="btn ios_btn ios_btn-outline-light">Light</button>
						    <button type="button" class="btn ios_btn ios_btn-outline-dark">Dark</button>
						  </div>
						</div>


						<h3 class="pl-md-5">Sizes</h3>
						<div class="row">
						  <div class="col-12 col-md-10 offset-md-1 mb-3">
						    <button type="button" class="btn ios_btn ios_btn-primary btn-lg">Large button</button>
						    <button type="button" class="btn ios_btn ios_btn-secondary btn-lg">Large button</button>
						  </div>
						</div>
						<div class="row">
						  <div class="col-12 col-md-10 offset-md-1 mb-3">
						    <button type="button" class="btn ios_btn ios_btn-primary btn-sm">Small button</button>
						    <button type="button" class="btn ios_btn ios_btn-secondary btn-sm">Small button</button>
						  </div>
						</div>
						<div class="row">
						  <div class="col-12 col-md-10 offset-md-1 mb-5">
						    <button type="button" class="btn ios_btn ios_btn-primary btn-lg btn-block">Block level button</button>
						    <button type="button" class="btn ios_btn ios_btn-secondary btn-lg btn-block">Block level button</button>
						  </div>
						</div>


						<h3 class="pl-md-5">Active state</h3>
						<div class="row">
						  <div class="col-12 col-md-10 offset-md-1 mb-5">
						    <a href="#" class="btn ios_btn ios_btn-primary btn-lg active" role="button" aria-pressed="true">Primary link</a>
						    <a href="#" class="btn ios_btn ios_btn-secondary btn-lg active" role="button" aria-pressed="true">Link</a>
						  </div>
						</div>


						<h3 class="pl-md-5">Disabled state</h3>
						<div class="row">
						  <div class="col-12 col-md-10 offset-md-1 mb-3">
						    <button type="button" class="btn ios_btn ios_btn-lg btn-primary" disabled>Primary button</button>
						    <button type="button" class="btn ios_btn ios_btn-secondary btn-lg" disabled>Button</button>
						  </div>
						</div>
						<div class="row">
						  <div class="col-12 col-md-10 offset-md-1 mb-5">
						    <a href="#" class="btn ios_btn ios_btn-primary btn-lg disabled" role="button" aria-disabled="true">Primary link</a>
						    <a href="#" class="btn ios_btn ios_btn-secondary btn-lg disabled" role="button" aria-disabled="true">Link</a>
						  </div>
						</div>


						<h3 class="pl-md-5">Toggle states</h3>
						<div class="row">
						  <div class="col-12 col-md-10 offset-md-1 mb-5">
						    <button type="button" class="btn ios_btn ios_btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
						      Single toggle
						    </button>
						  </div>
						</div>


						<h3 class="pl-md-5">Checkbox and radio buttons</h3>
						<div class="row">
						  <div class="col-12 col-md-10 offset-md-1 mb-3">
						    <div class="btn-group" data-toggle="buttons">
						      <label class="btn ios_btn ios_btn-secondary active">
						        <input type="checkbox" checked autocomplete="off"> Checkbox 1 (pre-checked)
						      </label>
						      <label class="btn ios_btn ios_btn-secondary">
						        <input type="checkbox" autocomplete="off"> Checkbox 2
						      </label>
						      <label class="btn ios_btn ios_btn-secondary">
						        <input type="checkbox" autocomplete="off"> Checkbox 3
						      </label>
						    </div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-12 col-md-10 offset-md-1 mb-5">
						    	<div class="btn-group" data-toggle="buttons">
						      <label class="btn ios_btn ios_btn-secondary active">
						        <input type="radio" name="options" id="option1" autocomplete="off" checked> Radio 1 (preselected)
						      </label>
						      <label class="btn ios_btn ios_btn-secondary">
						        <input type="radio" name="options" id="option2" autocomplete="off"> Radio 2
						      </label>
						      <label class="btn ios_btn ios_btn-secondary">
						        <input type="radio" name="options" id="option3" autocomplete="off"> Radio 3
						      </label>
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
