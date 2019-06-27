<?php
/**
* Template Name: BS4 Dropdowns
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

							<h3 class="pl-md-5">Single button dropdowns</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-3">
								<div class="dropdown">
									<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown button</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-3">
								<div class="dropdown show">
									<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown link</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
							<!-- Example single buttons -->
								<div class="btn-group">
									<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Split button dropdowns</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
							<!-- Example split button -->
								<div class="btn-group">
									<button type="button" class="btn btn-primary">Primary</button>
									<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-secondary">Secondary</button>
									<button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-success">Success</button>
									<button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-info">Info</button>
									<button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-warning">Warning</button>
									<button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-danger">Danger</button>
									<button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Sizing</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-3">
							<!-- Large button groups (default and split) -->
								<div class="btn-group">
									<button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Large button</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
								<div class="btn-group">
									<button class="btn btn-secondary btn-lg" type="button">Large split button</button>
									<button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
							<!-- Small button groups (default and split) -->
								<div class="btn-group">
									<button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Small button</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
								<div class="btn-group">
									<button class="btn btn-secondary btn-sm" type="button">Small button</button>
									<button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Dropup variation</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
							<!-- Default dropup button -->
								<div class="btn-group dropup">
									<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Dropup
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>

								<!-- Split dropup button -->
								<div class="btn-group dropup">
									<button type="button" class="btn btn-secondary">Split dropup</button>
									<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Dropright variation</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
							<!-- Default dropright button -->
								<div class="btn-group dropright">
									<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Dropright
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>

								<!-- Split dropright button -->
								<div class="btn-group dropright">
									<button type="button" class="btn btn-secondary">Split dropright</button>
									<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Dropleft variation</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
							<!-- Default dropleft button -->
								<div class="btn-group dropleft">
									<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Dropleft
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>

								<!-- Split dropleft button -->
								<div class="btn-group dropleft">
									<button type="button" class="btn btn-secondary">Split dropleft</button>
									<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Menu items</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="dropdown">
									<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
										<button class="dropdown-item" type="button">Action</button>
										<button class="dropdown-item" type="button">Another action</button>
										<button class="dropdown-item" type="button">Something else here</button>
									</div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Menu alignment</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="btn-group">
								  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    Right-aligned menu
								  </button>
								  <div class="dropdown-menu dropdown-menu-right">
								    <button class="dropdown-item" type="button">Action</button>
								    <button class="dropdown-item" type="button">Another action</button>
								    <button class="dropdown-item" type="button">Something else here</button>
								  </div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Menu Headers</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="dropdown-menu" style="display: block; position: static;">
							 	 	<h6 class="dropdown-header">Dropdown header</h6>
							  		<a class="dropdown-item" href="#">Action</a>
							  		<a class="dropdown-item" href="#">Another action</a>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Menu Dividers</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="dropdown-menu" style="display: block; position: static;">
							  		<a class="dropdown-item" href="#">Action</a>
							  		<a class="dropdown-item" href="#">Another action</a>
							  		<a class="dropdown-item" href="#">Something else here</a>
							  		<div class="dropdown-divider"></div>
							  		<a class="dropdown-item" href="#">Separated link</a>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Menu Forms</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-3">
								<div class="dropdown-menu" style="display: block; position: static;">
									<form class="px-4 py-3">
									    <div class="form-group">
									      <label for="exampleDropdownFormEmail1">Email address</label>
									      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
									    </div>
									    <div class="form-group">
									      <label for="exampleDropdownFormPassword1">Password</label>
									      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
									    </div>
									    <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="dropdownCheck">
									      <label class="form-check-label" for="dropdownCheck">
									        Remember me
									      </label>
									    </div>
									    <button type="submit" class="btn btn-primary">Sign in</button>
									  </form>
									  <div class="dropdown-divider"></div>
									  <a class="dropdown-item" href="#">New around here? Sign up</a>
									  <a class="dropdown-item" href="#">Forgot password?</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="dropdown-menu" style="display: block; position: static;">
									<form class="dropdown-menu p-4">
									  <div class="form-group">
									    <label for="exampleDropdownFormEmail2">Email address</label>
									    <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
									  </div>
									  <div class="form-group">
									    <label for="exampleDropdownFormPassword2">Password</label>
									    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
									  </div>
									  <div class="form-check">
									    <input type="checkbox" class="form-check-input" id="dropdownCheck2">
									    <label class="form-check-label" for="dropdownCheck2">
									      Remember me
									    </label>
									  </div>
									  <button type="submit" class="btn btn-primary">Sign in</button>
									</form>
								</div>
							</p>
							</div>
						</div>


						<h3 class="pl-md-5">Active menu items</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="dropdown-menu" style="display: block; position: static;">
									<a class="dropdown-item" href="#">Regular link</a>
								    <a class="dropdown-item active" href="#">Active link</a>
								    <a class="dropdown-item" href="#">Another link</a>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Disabled menu items</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="dropdown-menu" style="display: block; position: static;">
									<a class="dropdown-item" href="#">Regular link</a>
									<a class="dropdown-item disabled" href="#">Disabled link</a>
									<a class="dropdown-item" href="#">Another link</a>
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
