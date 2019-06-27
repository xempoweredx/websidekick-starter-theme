<?php
/**
* Template Name: BS4 Navbars
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

							<h3 class="pl-md-5">Supported content</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav class="navbar navbar-expand-lg navbar-light bg-light">
								  <a class="navbar-brand" href="#">Navbar</a>
								  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								    <span class="navbar-toggler-icon"></span>
								  </button>

								  <div class="collapse navbar-collapse" id="navbarSupportedContent">
								    <ul class="navbar-nav mr-auto">
								      <li class="nav-item active">
								        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
								      </li>
								      <li class="nav-item">
								        <a class="nav-link" href="#">Link</a>
								      </li>
								      <li class="nav-item dropdown">
								        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								          Dropdown
								        </a>
								        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
								          <a class="dropdown-item" href="#">Action</a>
								          <a class="dropdown-item" href="#">Another action</a>
								          <div class="dropdown-divider"></div>
								          <a class="dropdown-item" href="#">Something else here</a>
								        </div>
								      </li>
								      <li class="nav-item">
								        <a class="nav-link disabled" href="#">Disabled</a>
								      </li>
								    </ul>
								    <form class="form-inline my-2 my-lg-0">
								      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
								      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
								    </form>
								  </div>
								</nav>
							</div>
						</div>


						<h3 class="pl-md-5">Brand</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<!-- As a link -->
								<nav class="navbar navbar-light bg-light mb-3">
								  <a class="navbar-brand" href="#">Navbar</a>
								</nav>

								<!-- As a heading -->
								<nav class="navbar navbar-light bg-light">
								  <span class="navbar-brand mb-0 h1">Navbar</span>
								</nav>
							</div>
						</div>


						<h3 class="pl-md-5">Nav</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav class="navbar navbar-expand-lg navbar-light bg-light">
								  <a class="navbar-brand" href="#">Navbar</a>
								  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								    <span class="navbar-toggler-icon"></span>
								  </button>
								  <div class="collapse navbar-collapse" id="navbarNav">
								    <ul class="navbar-nav">
								      <li class="nav-item active">
								        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
								      </li>
								      <li class="nav-item">
								        <a class="nav-link" href="#">Features</a>
								      </li>
								      <li class="nav-item">
								        <a class="nav-link" href="#">Pricing</a>
								      </li>
								      <li class="nav-item">
								        <a class="nav-link disabled" href="#">Disabled</a>
								      </li>
								    </ul>
								  </div>
								</nav>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav class="navbar navbar-expand-lg navbar-light bg-light">
								  <a class="navbar-brand" href="#">Navbar</a>
								  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
								    <span class="navbar-toggler-icon"></span>
								  </button>
								  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
								    <div class="navbar-nav">
								      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
								      <a class="nav-item nav-link" href="#">Features</a>
								      <a class="nav-item nav-link" href="#">Pricing</a>
								      <a class="nav-item nav-link disabled" href="#">Disabled</a>
								    </div>
								  </div>
								</nav>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav class="navbar navbar-expand-lg navbar-light bg-light">
								  <a class="navbar-brand" href="#">Navbar</a>
								  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
								    <span class="navbar-toggler-icon"></span>
								  </button>
								  <div class="collapse navbar-collapse" id="navbarNavDropdown">
								    <ul class="navbar-nav">
								      <li class="nav-item active">
								        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
								      </li>
								      <li class="nav-item">
								        <a class="nav-link" href="#">Features</a>
								      </li>
								      <li class="nav-item">
								        <a class="nav-link" href="#">Pricing</a>
								      </li>
								      <li class="nav-item dropdown">
								        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								          Dropdown link
								        </a>
								        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								          <a class="dropdown-item" href="#">Action</a>
								          <a class="dropdown-item" href="#">Another action</a>
								          <a class="dropdown-item" href="#">Something else here</a>
								        </div>
								      </li>
								    </ul>
								  </div>
								</nav>
							</div>
						</div>


						<h3 class="pl-md-5">Forms</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav class="navbar navbar-light bg-light">
								  <form class="form-inline">
								    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
								    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
								  </form>
								</nav>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav class="navbar navbar-light bg-light justify-content-between">
								  <a class="navbar-brand">Navbar</a>
								  <form class="form-inline">
								    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
								    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
								  </form>
								</nav>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav class="navbar navbar-light bg-light">
								  <form class="form-inline">
								    <div class="input-group">
								      <div class="input-group-prepend">
								        <span class="input-group-text" id="basic-addon1">@</span>
								      </div>
								      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
								    </div>
								  </form>
								</nav>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav class="navbar navbar-light bg-light">
								  <form class="form-inline">
								    <button class="btn btn-outline-success" type="button">Main button</button>
								    <button class="btn btn-sm align-middle btn-outline-secondary" type="button">Smaller button</button>
								  </form>
								</nav>
							</div>
						</div>


						<h3 class="pl-md-5">Text</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav class="navbar navbar-light bg-light">
								  <span class="navbar-text">
								    Navbar text with an inline element
								  </span>
								</nav>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav class="navbar navbar-expand-lg navbar-light bg-light">
								  <a class="navbar-brand" href="#">Navbar w/ text</a>
								  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
								    <span class="navbar-toggler-icon"></span>
								  </button>
								  <div class="collapse navbar-collapse" id="navbarText">
								    <ul class="navbar-nav mr-auto">
								      <li class="nav-item active">
								        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
								      </li>
								      <li class="nav-item">
								        <a class="nav-link" href="#">Features</a>
								      </li>
								      <li class="nav-item">
								        <a class="nav-link" href="#">Pricing</a>
								      </li>
								    </ul>
								    <span class="navbar-text">
								      Navbar text with an inline element
								    </span>
								  </div>
								</nav>
							</div>
						</div>


						<h3 class="pl-md-5">Color schemes</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-3">
								<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
								    <a class="navbar-brand" href="#">Navbar</a>
								    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
								      <span class="navbar-toggler-icon"></span>
								    </button>

								    <div class="collapse navbar-collapse" id="navbarColor01">
								      <ul class="navbar-nav mr-auto">
								        <li class="nav-item active">
								          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
								        </li>
								        <li class="nav-item">
								          <a class="nav-link" href="#">Features</a>
								        </li>
								        <li class="nav-item">
								          <a class="nav-link" href="#">Pricing</a>
								        </li>
								        <li class="nav-item">
								          <a class="nav-link" href="#">About</a>
								        </li>
								      </ul>
								      <form class="form-inline">
								        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
								        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
								      </form>
								    </div>
								  </nav>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-3">
								<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
								    <a class="navbar-brand" href="#">Navbar</a>
								    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
								      <span class="navbar-toggler-icon"></span>
								    </button>

								    <div class="collapse navbar-collapse" id="navbarColor02">
								      <ul class="navbar-nav mr-auto">
								        <li class="nav-item active">
								          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
								        </li>
								        <li class="nav-item">
								          <a class="nav-link" href="#">Features</a>
								        </li>
								        <li class="nav-item">
								          <a class="nav-link" href="#">Pricing</a>
								        </li>
								        <li class="nav-item">
								          <a class="nav-link" href="#">About</a>
								        </li>
								      </ul>
								      <form class="form-inline">
								        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
								        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
								      </form>
								    </div>
								  </nav>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav class="navbar navbar-expand-lg navbar-light bg-purple lighten-3">
								    <a class="navbar-brand" href="#">Navbar</a>
								    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
								      <span class="navbar-toggler-icon"></span>
								    </button>

								    <div class="collapse navbar-collapse" id="navbarColor02">
								      <ul class="navbar-nav mr-auto">
								        <li class="nav-item active">
								          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
								        </li>
								        <li class="nav-item">
								          <a class="nav-link" href="#">Features</a>
								        </li>
								        <li class="nav-item">
								          <a class="nav-link" href="#">Pricing</a>
								        </li>
								        <li class="nav-item">
								          <a class="nav-link" href="#">About</a>
								        </li>
								      </ul>
								      <form class="form-inline">
								        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
								        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
								      </form>
								    </div>
								  </nav>
							</div>
						</div>


						<h3 class="pl-md-5">Containers</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-3">
								<div class="container">
								  <nav class="navbar navbar-expand-lg navbar-light bg-light">
								    <a class="navbar-brand" href="#">Navbar</a>
								  </nav>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav class="navbar navbar-expand-lg navbar-light bg-light">
								  <div class="container">
								    <a class="navbar-brand" href="#">Navbar</a>
								  </div>
								</nav>
							</div>
						</div>


						<h3 class="pl-md-5">Toggler</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-3">
								<nav class="navbar navbar-expand-lg navbar-light bg-light">
								  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
								    <span class="navbar-toggler-icon"></span>
								  </button>
								  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
								    <a class="navbar-brand" href="#">Hidden brand</a>
								    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
								      <li class="nav-item active">
								        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
								      </li>
								      <li class="nav-item">
								        <a class="nav-link" href="#">Link</a>
								      </li>
								      <li class="nav-item">
								        <a class="nav-link disabled" href="#">Disabled</a>
								      </li>
								    </ul>
								    <form class="form-inline my-2 my-lg-0">
								      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
								      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
								    </form>
								  </div>
								</nav>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-3">
								<nav class="navbar navbar-expand-lg navbar-light bg-light">
								  <a class="navbar-brand" href="#">Navbar</a>
								  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
								    <span class="navbar-toggler-icon"></span>
								  </button>

								  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
								    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
								      <li class="nav-item active">
								        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
								      </li>
								      <li class="nav-item">
								        <a class="nav-link" href="#">Link</a>
								      </li>
								      <li class="nav-item">
								        <a class="nav-link disabled" href="#">Disabled</a>
								      </li>
								    </ul>
								    <form class="form-inline my-2 my-lg-0">
								      <input class="form-control mr-sm-2" type="search" placeholder="Search">
								      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
								    </form>
								  </div>
								</nav>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav class="navbar navbar-expand-lg navbar-light bg-light">
								  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
								    <span class="navbar-toggler-icon"></span>
								  </button>
								  <a class="navbar-brand" href="#">Navbar</a>

								  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
								    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
								      <li class="nav-item active">
								        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
								      </li>
								      <li class="nav-item">
								        <a class="nav-link" href="#">Link</a>
								      </li>
								      <li class="nav-item">
								        <a class="nav-link disabled" href="#">Disabled</a>
								      </li>
								    </ul>
								    <form class="form-inline my-2 my-lg-0">
								      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
								      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
								    </form>
								  </div>
								</nav>
							</div>
						</div>


						<h3 class="pl-md-5">External content</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="pos-f-t">
								  <div class="collapse" id="navbarToggleExternalContent">
								    <div class="bg-dark p-4">
								      <h4 class="text-white">Collapsed content</h4>
								      <span class="text-muted">Toggleable via the navbar brand.</span>
								    </div>
								  </div>
								  <nav class="navbar navbar-dark bg-dark">
								    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
								      <span class="navbar-toggler-icon"></span>
								    </button>
								  </nav>
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
