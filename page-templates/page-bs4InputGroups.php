<?php
/**
* Template Name: BS4 Input Groups
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
									<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    <span class="input-group-text" id="basic-addon1">@</span>
									  </div>
									  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
									</div>

									<div class="input-group mb-3">
									  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
									  <div class="input-group-append">
									    <span class="input-group-text" id="basic-addon2">@example.com</span>
									  </div>
									</div>

									<label for="basic-url">Your vanity URL</label>
									<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
									  </div>
									  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
									</div>

									<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    <span class="input-group-text">$</span>
									  </div>
									  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
									  <div class="input-group-append">
									    <span class="input-group-text">.00</span>
									  </div>
									</div>

									<div class="input-group">
									  <div class="input-group-prepend">
									    <span class="input-group-text">With textarea</span>
									  </div>
									  <textarea class="form-control" aria-label="With textarea"></textarea>
									</div>
								</div>
							</div>


						<h3 class="pl-md-5">Sizing</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="input-group input-group-sm mb-3">
								  <div class="input-group-prepend">
								    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
								  </div>
								  <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
								</div>

								<div class="input-group mb-3">
								  <div class="input-group-prepend">
								    <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
								  </div>
								  <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
								</div>

								<div class="input-group input-group-lg">
								  <div class="input-group-prepend">
								    <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
								  </div>
								  <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Checkboxes and radio addons</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="input-group mb-3">
								  <div class="input-group-prepend">
								    <div class="input-group-text">
								      <input type="checkbox" aria-label="Checkbox for following text input">
								    </div>
								  </div>
								  <input type="text" class="form-control" aria-label="Text input with checkbox">
								</div>

								<div class="input-group">
								  <div class="input-group-prepend">
								    <div class="input-group-text">
								    <input type="radio" aria-label="Radio button for following text input">
								    </div>
								  </div>
								  <input type="text" class="form-control" aria-label="Text input with radio button">
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Multiple Inputs</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="input-group">
								  <div class="input-group-prepend">
								    <span class="input-group-text" id="">First and last name</span>
								  </div>
								  <input type="text" class="form-control">
								  <input type="text" class="form-control">
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Multiple addons</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="input-group mb-3">
								  <div class="input-group-prepend">
								    <span class="input-group-text">$</span>
								    <span class="input-group-text">0.00</span>
								  </div>
								  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
								</div>

								<div class="input-group">
								  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
								  <div class="input-group-append">
								    <span class="input-group-text">$</span>
								    <span class="input-group-text">0.00</span>
								  </div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Button addons</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="input-group mb-3">
								  <div class="input-group-prepend">
								    <button class="btn btn-outline-secondary" type="button">Button</button>
								  </div>
								  <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
								</div>

								<div class="input-group mb-3">
								  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
								  <div class="input-group-append">
								    <button class="btn btn-outline-secondary" type="button">Button</button>
								  </div>
								</div>

								<div class="input-group mb-3">
								  <div class="input-group-prepend">
								    <button class="btn btn-outline-secondary" type="button">Button</button>
								    <button class="btn btn-outline-secondary" type="button">Button</button>
								  </div>
								  <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
								</div>

								<div class="input-group">
								  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
								  <div class="input-group-append">
								    <button class="btn btn-outline-secondary" type="button">Button</button>
								    <button class="btn btn-outline-secondary" type="button">Button</button>
								  </div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Buttons with dropdowns</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="input-group mb-3">
								  <div class="input-group-prepend">
								    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
								    <div class="dropdown-menu">
								      <a class="dropdown-item" href="#">Action</a>
								      <a class="dropdown-item" href="#">Another action</a>
								      <a class="dropdown-item" href="#">Something else here</a>
								      <div role="separator" class="dropdown-divider"></div>
								      <a class="dropdown-item" href="#">Separated link</a>
								    </div>
								  </div>
								  <input type="text" class="form-control" aria-label="Text input with dropdown button">
								</div>

								<div class="input-group">
								  <input type="text" class="form-control" aria-label="Text input with dropdown button">
								  <div class="input-group-append">
								    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
								    <div class="dropdown-menu">
								      <a class="dropdown-item" href="#">Action</a>
								      <a class="dropdown-item" href="#">Another action</a>
								      <a class="dropdown-item" href="#">Something else here</a>
								      <div role="separator" class="dropdown-divider"></div>
								      <a class="dropdown-item" href="#">Separated link</a>
								    </div>
								  </div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Segmented buttons</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="input-group mb-3">
								  <div class="input-group-prepend">
								    <button type="button" class="btn btn-outline-secondary">Action</button>
								    <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								      <span class="sr-only">Toggle Dropdown</span>
								    </button>
								    <div class="dropdown-menu">
								      <a class="dropdown-item" href="#">Action</a>
								      <a class="dropdown-item" href="#">Another action</a>
								      <a class="dropdown-item" href="#">Something else here</a>
								      <div role="separator" class="dropdown-divider"></div>
								      <a class="dropdown-item" href="#">Separated link</a>
								    </div>
								  </div>
								  <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
								</div>

								<div class="input-group">
								  <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
								  <div class="input-group-append">
								    <button type="button" class="btn btn-outline-secondary">Action</button>
								    <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								      <span class="sr-only">Toggle Dropdown</span>
								    </button>
								    <div class="dropdown-menu">
								      <a class="dropdown-item" href="#">Action</a>
								      <a class="dropdown-item" href="#">Another action</a>
								      <a class="dropdown-item" href="#">Something else here</a>
								      <div role="separator" class="dropdown-divider"></div>
								      <a class="dropdown-item" href="#">Separated link</a>
								    </div>
								  </div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Custom Forms</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<h4>Custom Select</h4>
								<div class="input-group mb-3">
								  <div class="input-group-prepend">
								    <label class="input-group-text" for="inputGroupSelect01">Options</label>
								  </div>
								  <select class="custom-select" id="inputGroupSelect01">
								    <option selected>Choose...</option>
								    <option value="1">One</option>
								    <option value="2">Two</option>
								    <option value="3">Three</option>
								  </select>
								</div>

								<div class="input-group mb-3">
								  <select class="custom-select" id="inputGroupSelect02">
								    <option selected>Choose...</option>
								    <option value="1">One</option>
								    <option value="2">Two</option>
								    <option value="3">Three</option>
								  </select>
								  <div class="input-group-append">
								    <label class="input-group-text" for="inputGroupSelect02">Options</label>
								  </div>
								</div>

								<div class="input-group mb-3">
								  <div class="input-group-prepend">
								    <button class="btn btn-outline-secondary" type="button">Button</button>
								  </div>
								  <select class="custom-select" id="inputGroupSelect03">
								    <option selected>Choose...</option>
								    <option value="1">One</option>
								    <option value="2">Two</option>
								    <option value="3">Three</option>
								  </select>
								</div>

								<div class="input-group">
								  <select class="custom-select" id="inputGroupSelect04">
								    <option selected>Choose...</option>
								    <option value="1">One</option>
								    <option value="2">Two</option>
								    <option value="3">Three</option>
								  </select>
								  <div class="input-group-append">
								    <button class="btn btn-outline-secondary" type="button">Button</button>
								  </div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<h4>Custom File Input</h4>
								<div class="input-group mb-3">
								  <div class="input-group-prepend">
								    <span class="input-group-text">Upload</span>
								  </div>
								  <div class="custom-file">
								    <input type="file" class="custom-file-input" id="inputGroupFile01">
								    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
								  </div>
								</div>

								<div class="input-group mb-3">
								  <div class="custom-file">
								    <input type="file" class="custom-file-input" id="inputGroupFile02">
								    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
								  </div>
								  <div class="input-group-append">
								    <span class="input-group-text" id="">Upload</span>
								  </div>
								</div>

								<div class="input-group mb-3">
								  <div class="input-group-prepend">
								    <button class="btn btn-outline-secondary" type="button">Button</button>
								  </div>
								  <div class="custom-file">
								    <input type="file" class="custom-file-input" id="inputGroupFile03">
								    <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
								  </div>
								</div>

								<div class="input-group">
								  <div class="custom-file">
								    <input type="file" class="custom-file-input" id="inputGroupFile04">
								    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
								  </div>
								  <div class="input-group-append">
								    <button class="btn btn-outline-secondary" type="button">Button</button>
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
