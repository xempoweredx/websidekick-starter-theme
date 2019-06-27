<?php
/**
* Template Name: BS4 ScrollSpy
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

							<h3 class="pl-md-5">Example in navbar</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav id="navbar-example2" class="navbar navbar-light bg-light">
								  <a class="navbar-brand" href="#">Navbar</a>
								  <ul class="nav nav-pills">
								    <li class="nav-item">
								      <a class="nav-link" href="#fat">@fat</a>
								    </li>
								    <li class="nav-item">
								      <a class="nav-link" href="#mdo">@mdo</a>
								    </li>
								    <li class="nav-item dropdown">
								      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
								      <div class="dropdown-menu">
								        <a class="dropdown-item" href="#one">one</a>
								        <a class="dropdown-item" href="#two">two</a>
								        <div role="separator" class="dropdown-divider"></div>
								        <a class="dropdown-item" href="#three">three</a>
								      </div>
								    </li>
								  </ul>
								</nav>
								<div data-spy="scroll" data-target="#navbar-example2" data-offset="0" style="position: relative; height: 200px; margin-top: .5rem; overflow: auto;">
								  <h4 id="fat">@fat</h4>
								  <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
								  <h4 id="mdo">@mdo</h4>
								  <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
								  <h4 id="one">one</h4>
								  <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
								  <h4 id="two">two</h4>
								  <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
								  <h4 id="three">three</h4>
								  <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Example with nested nav</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="row">
									<div class="col-12 col-md-4">
										<nav id="navbar-example3" class="navbar navbar-light bg-light">
										  <a class="navbar-brand" href="#">Navbar</a>
										  <nav class="nav nav-pills flex-column">
										    <a class="nav-link" href="#item-1">Item 1</a>
										    <nav class="nav nav-pills flex-column">
										      <a class="nav-link ml-3 my-1" href="#item-1-1">Item 1-1</a>
										      <a class="nav-link ml-3 my-1" href="#item-1-2">Item 1-2</a>
										    </nav>
										    <a class="nav-link" href="#item-2">Item2</a>
										    <a class="nav-link" href="#item-3">Item3</a>
										    <nav class="nav nav-pills flex-column">
										      <a class="nav-link ml-3 my-1" href="#item-3-1">Item 3-1</a>
										      <a class="nav-link ml-3 my-1" href="#item-3-2">Item 3-2</a>
										    </nav>
										  </nav>
										</nav>
									</div>
									<div class="col-12 col-md-8">
										<div data-spy="scroll" data-target="#navbar-example3" data-offset="0" style="position: relative; height: 350px; margin-top: .5rem; overflow: auto;">
										  <h4 id="item-1">Item 1</h4>
										  <p>Deserunt quis elit Lorem eiusmod amet enim enim amet minim Lorem proident nostrud. Ea id dolore anim exercitation aute fugiat labore voluptate cillum do laboris labore. Ex velit exercitation nisi enim labore reprehenderit labore nostrud ut ut. Esse officia sunt duis aliquip ullamco tempor eiusmod deserunt irure nostrud irure. Ullamco proident veniam laboris ea consectetur magna sunt ex exercitation aliquip minim enim culpa occaecat exercitation. Est tempor excepteur aliquip laborum consequat do deserunt laborum esse eiusmod irure proident ipsum esse qui.</p>
										  <h5 id="item-1-1">Item 1-1</h5>
										  <p>Deserunt quis elit Lorem eiusmod amet enim enim amet minim Lorem proident nostrud. Ea id dolore anim exercitation aute fugiat labore voluptate cillum do laboris labore. Ex velit exercitation nisi enim labore reprehenderit labore nostrud ut ut. Esse officia sunt duis aliquip ullamco tempor eiusmod deserunt irure nostrud irure. Ullamco proident veniam laboris ea consectetur magna sunt ex exercitation aliquip minim enim culpa occaecat exercitation. Est tempor excepteur aliquip laborum consequat do deserunt laborum esse eiusmod irure proident ipsum esse qui.</p>
										  <h5 id="item-1-2">Item 2-2</h5>
										  <p>Deserunt quis elit Lorem eiusmod amet enim enim amet minim Lorem proident nostrud. Ea id dolore anim exercitation aute fugiat labore voluptate cillum do laboris labore. Ex velit exercitation nisi enim labore reprehenderit labore nostrud ut ut. Esse officia sunt duis aliquip ullamco tempor eiusmod deserunt irure nostrud irure. Ullamco proident veniam laboris ea consectetur magna sunt ex exercitation aliquip minim enim culpa occaecat exercitation. Est tempor excepteur aliquip laborum consequat do deserunt laborum esse eiusmod irure proident ipsum esse qui.</p>
										  <h4 id="item-2">Item 2</h4>
										  <p>Deserunt quis elit Lorem eiusmod amet enim enim amet minim Lorem proident nostrud. Ea id dolore anim exercitation aute fugiat labore voluptate cillum do laboris labore. Ex velit exercitation nisi enim labore reprehenderit labore nostrud ut ut. Esse officia sunt duis aliquip ullamco tempor eiusmod deserunt irure nostrud irure. Ullamco proident veniam laboris ea consectetur magna sunt ex exercitation aliquip minim enim culpa occaecat exercitation. Est tempor excepteur aliquip laborum consequat do deserunt laborum esse eiusmod irure proident ipsum esse qui.</p>
										  <h4 id="item-3">Item 3</h4>
										  <p>Deserunt quis elit Lorem eiusmod amet enim enim amet minim Lorem proident nostrud. Ea id dolore anim exercitation aute fugiat labore voluptate cillum do laboris labore. Ex velit exercitation nisi enim labore reprehenderit labore nostrud ut ut. Esse officia sunt duis aliquip ullamco tempor eiusmod deserunt irure nostrud irure. Ullamco proident veniam laboris ea consectetur magna sunt ex exercitation aliquip minim enim culpa occaecat exercitation. Est tempor excepteur aliquip laborum consequat do deserunt laborum esse eiusmod irure proident ipsum esse qui.</p>
										  <h5 id="item-3-1">Item 3-1</h5>
										  <p>Deserunt quis elit Lorem eiusmod amet enim enim amet minim Lorem proident nostrud. Ea id dolore anim exercitation aute fugiat labore voluptate cillum do laboris labore. Ex velit exercitation nisi enim labore reprehenderit labore nostrud ut ut. Esse officia sunt duis aliquip ullamco tempor eiusmod deserunt irure nostrud irure. Ullamco proident veniam laboris ea consectetur magna sunt ex exercitation aliquip minim enim culpa occaecat exercitation. Est tempor excepteur aliquip laborum consequat do deserunt laborum esse eiusmod irure proident ipsum esse qui.</p>
										  <h5 id="item-3-2">Item 3-2</h5>
										  <p>Deserunt quis elit Lorem eiusmod amet enim enim amet minim Lorem proident nostrud. Ea id dolore anim exercitation aute fugiat labore voluptate cillum do laboris labore. Ex velit exercitation nisi enim labore reprehenderit labore nostrud ut ut. Esse officia sunt duis aliquip ullamco tempor eiusmod deserunt irure nostrud irure. Ullamco proident veniam laboris ea consectetur magna sunt ex exercitation aliquip minim enim culpa occaecat exercitation. Est tempor excepteur aliquip laborum consequat do deserunt laborum esse eiusmod irure proident ipsum esse qui.</p>
										</div>
									</div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Example with list-group</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="row">
									<div class="col-12 col-md-4">
										<div id="list-example" class="list-group">
										  <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
										  <a class="list-group-item list-group-item-action" href="#list-item-2">Item2</a>
										  <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
										  <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
										</div>
									</div>
									<div class="col-12 col-md-8">
										<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example" style="position: relative; height: 200px; margin-top: .5rem; overflow: auto;">
										  <h4 id="list-item-1">Item 1</h4>
										  <p>Deserunt quis elit Lorem eiusmod amet enim enim amet minim Lorem proident nostrud. Ea id dolore anim exercitation aute fugiat labore voluptate cillum do laboris labore. Ex velit exercitation nisi enim labore reprehenderit labore nostrud ut ut. Esse officia sunt duis aliquip ullamco tempor eiusmod deserunt irure nostrud irure. Ullamco proident veniam laboris ea consectetur magna sunt ex exercitation aliquip minim enim culpa occaecat exercitation. Est tempor excepteur aliquip laborum consequat do deserunt laborum esse eiusmod irure proident ipsum esse qui.</p>
										  <h4 id="list-item-2">Item 2</h4>
										  <p>Deserunt quis elit Lorem eiusmod amet enim enim amet minim Lorem proident nostrud. Ea id dolore anim exercitation aute fugiat labore voluptate cillum do laboris labore. Ex velit exercitation nisi enim labore reprehenderit labore nostrud ut ut. Esse officia sunt duis aliquip ullamco tempor eiusmod deserunt irure nostrud irure. Ullamco proident veniam laboris ea consectetur magna sunt ex exercitation aliquip minim enim culpa occaecat exercitation. Est tempor excepteur aliquip laborum consequat do deserunt laborum esse eiusmod irure proident ipsum esse qui.</p>
										  <h4 id="list-item-3">Item 3</h4>
										  <p>Deserunt quis elit Lorem eiusmod amet enim enim amet minim Lorem proident nostrud. Ea id dolore anim exercitation aute fugiat labore voluptate cillum do laboris labore. Ex velit exercitation nisi enim labore reprehenderit labore nostrud ut ut. Esse officia sunt duis aliquip ullamco tempor eiusmod deserunt irure nostrud irure. Ullamco proident veniam laboris ea consectetur magna sunt ex exercitation aliquip minim enim culpa occaecat exercitation. Est tempor excepteur aliquip laborum consequat do deserunt laborum esse eiusmod irure proident ipsum esse qui.</p>
										  <h4 id="list-item-4">Item 4</h4>
										  <p>Deserunt quis elit Lorem eiusmod amet enim enim amet minim Lorem proident nostrud. Ea id dolore anim exercitation aute fugiat labore voluptate cillum do laboris labore. Ex velit exercitation nisi enim labore reprehenderit labore nostrud ut ut. Esse officia sunt duis aliquip ullamco tempor eiusmod deserunt irure nostrud irure. Ullamco proident veniam laboris ea consectetur magna sunt ex exercitation aliquip minim enim culpa occaecat exercitation. Est tempor excepteur aliquip laborum consequat do deserunt laborum esse eiusmod irure proident ipsum esse qui.</p>
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
