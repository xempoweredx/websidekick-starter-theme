<?php
/**
* Template Name: BS4 Cards
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

							<h3 class="pl-md-5">Basic</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="card" style="width: 20rem;">
								  		<img class="w-100 card-img-top" data-src="holder.js/318x180" alt="Card image cap">
								  		<div class="card-body">
									    	<h5 class="card-title">Card title</h5>
									    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									    	<a href="#" class="btn btn-primary">Go somewhere</a>
									  	</div>
									</div>	
								</div>
							</div>


							<h3 class="pl-md-5">Titles, text, and links</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="card" style="width: 20rem;">
									  	<div class="card-body">
										    <h5 class="card-title">Card title</h5>
										    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
										    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										    <a href="#" class="card-link">Card link</a>
										    <a href="#" class="card-link">Another link</a>
									  	</div>
									</div>
								</div>
							</div>


							<h3 class="pl-md-5">Images</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="card" style="width: 20rem;">
									  	<img class="w-100 card-img-top" data-src="holder.js/318x180" alt="Card image cap">
									  	<div class="card-body">
									    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  	</div>
									</div>
								</div>
							</div>


							<h3 class="pl-md-5">List Groups</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="card" style="width: 20rem;">
									  	<ul class="list-group list-group-flush">
									    	<li class="list-group-item">Cras justo odio</li>
									    	<li class="list-group-item">Dapibus ac facilisis in</li>
									    	<li class="list-group-item">Vestibulum at eros</li>
									  </ul>
									</div>
								</div>
							</div>


							<h3 class="pl-md-5">Kitchen Sink</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="card" style="width: 20rem;">
									  	<img class="w-100 card-img-top" data-src="holder.js/318x180" alt="Card image cap">
									  	<div class="card-body">
									    	<h5 class="card-title">Card title</h5>
									    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  	</div>
									  	<ul class="list-group list-group-flush">
										    <li class="list-group-item">Cras justo odio</li>
										    <li class="list-group-item">Dapibus ac facilisis in</li>
										    <li class="list-group-item">Vestibulum at eros</li>
									  	</ul>
									  	<div class="card-body">
										    <a href="#" class="card-link">Card link</a>
										    <a href="#" class="card-link">Another link</a>
									  	</div>
									</div>
								</div>
							</div>


							<h3 class="pl-md-5">Header & Footer</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-3">
									<div class="card">
									  <div class="card-header">
									    Featured
									  </div>
									  <div class="card-body">
									    <h5 class="card-title">Special title treatment</h5>
									    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									    <a href="#" class="btn btn-primary">Go somewhere</a>
									  </div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-3">
									<div class="card">
									  <h5 class="card-header">Styled Header</h5>
									  <div class="card-body">
									    <h5 class="card-title">Special title treatment</h5>
									    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									    <a href="#" class="btn btn-primary">Go somewhere</a>
									  </div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-3">
									<div class="card">
									  <div class="card-header">
									    Quote
									  </div>
									  <div class="card-body">
									    <blockquote class="blockquote mb-0">
									      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
									      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
									    </blockquote>
									  </div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="card text-center">
									  <div class="card-header">
									    Featured
									  </div>
									  <div class="card-body">
									    <h5 class="card-title">Special title treatment</h5>
									    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									    <a href="#" class="btn btn-primary">Go somewhere</a>
									  </div>
									  <div class="card-footer text-muted">
									    2 days ago
									  </div>
									</div>
								</div>
							</div>


							<h3 class="pl-md-5">Sizing</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-3">
									<h4>Grid Markup</h4>
									<div class="row">
									  <div class="col-sm-6">
									    <div class="card">
									      <div class="card-body">
									        <h5 class="card-title">Special title treatment</h5>
									        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									        <a href="#" class="btn btn-primary">Go somewhere</a>
									      </div>
									    </div>
									  </div>
									  <div class="col-sm-6">
									    <div class="card">
									      <div class="card-body">
									        <h5 class="card-title">Special title treatment</h5>
									        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									        <a href="#" class="btn btn-primary">Go somewhere</a>
									      </div>
									    </div>
									  </div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-3">
									<h4>Using Utilities</h4>
									<div class="card w-75">
									  <div class="card-body">
									    <h5 class="card-title">Card title</h5>
									    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									    <a href="#" class="btn btn-primary">Button</a>
									  </div>
									</div>

									<div class="card w-50">
									  <div class="card-body">
									    <h5 class="card-title">Card title</h5>
									    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									    <a href="#" class="btn btn-primary">Button</a>
									  </div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<h4>Using Custom CSS</h4>
									<div class="card" style="width: 18rem;">
									  <div class="card-body">
									    <h5 class="card-title">Special title treatment</h5>
									    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									    <a href="#" class="btn btn-primary">Go somewhere</a>
									  </div>
									</div>
								</div>
							</div>


							<h3 class="pl-md-5">Text Alignment</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="card" style="width: 18rem;">
									  <div class="card-body">
									    <h5 class="card-title">Special title treatment</h5>
									    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									    <a href="#" class="btn btn-primary">Go somewhere</a>
									  </div>
									</div>

									<div class="card text-center" style="width: 18rem;">
									  <div class="card-body">
									    <h5 class="card-title">Special title treatment</h5>
									    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									    <a href="#" class="btn btn-primary">Go somewhere</a>
									  </div>
									</div>

									<div class="card text-right" style="width: 18rem;">
									  <div class="card-body">
									    <h5 class="card-title">Special title treatment</h5>
									    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									    <a href="#" class="btn btn-primary">Go somewhere</a>
									  </div>
									</div>
								</div>
							</div>


							<h3 class="pl-md-5">Navigation</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-3">
									<div class="card text-center">
									  <div class="card-header">
									    <ul class="nav nav-tabs card-header-tabs">
									      <li class="nav-item">
									        <a class="nav-link active" href="#">Active</a>
									      </li>
									      <li class="nav-item">
									        <a class="nav-link" href="#">Link</a>
									      </li>
									      <li class="nav-item">
									        <a class="nav-link disabled" href="#">Disabled</a>
									      </li>
									    </ul>
									  </div>
									  <div class="card-body">
									    <h5 class="card-title">Special title treatment</h5>
									    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									    <a href="#" class="btn btn-primary">Go somewhere</a>
									  </div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="card text-center">
									  <div class="card-header">
									    <ul class="nav nav-pills card-header-pills">
									      <li class="nav-item">
									        <a class="nav-link active" href="#">Active</a>
									      </li>
									      <li class="nav-item">
									        <a class="nav-link" href="#">Link</a>
									      </li>
									      <li class="nav-item">
									        <a class="nav-link disabled" href="#">Disabled</a>
									      </li>
									    </ul>
									  </div>
									  <div class="card-body">
									    <h5 class="card-title">Special title treatment</h5>
									    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									    <a href="#" class="btn btn-primary">Go somewhere</a>
									  </div>
									</div>
								</div>
							</div>


							<h3 class="pl-md-5">Images</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-3">
									<h4>Top Image</h4>
									<div class="card mb-3">
									  <img class="w-100 card-img-top" data-src="holder.js/1076x180?auto=yes&bg=777777&fg=aaaaaa" alt="Card image">
									  <div class="card-body">
									    <h5 class="card-title">Card title</h5>
									    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									  </div>
									</div>
									<h4>Bottom Image</h4>
									<div class="card">
									  <div class="card-body">
									    <h5 class="card-title">Card title</h5>
									    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									  </div>
									  <img class="w-100 card-img-bottom" data-src="holder.js/1076x180?auto=yes&bg=777777&fg=aaaaaa" alt="Card image">
									</div>
									<h4>Overlay Image</h4>
									<div class="card bg-dark text-white">
									  <img class="w-100 card-img" data-src="holder.js/1076x180?auto=yes&bg=777777&fg=aaaaaa" alt="Card image">
									  <div class="card-img-overlay">
									    <h5 class="card-title">Card title</h5>
									    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									    <p class="card-text">Last updated 3 mins ago</p>
									  </div>
									</div>
								</div>
							</div>


							<h3 class="pl-md-5">Card styles</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-3">
									<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body">
									    <h5 class="card-title">Primary card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
									<div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body">
									    <h5 class="card-title">Secondary card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
									<div class="card text-white bg-success mb-3" style="max-width: 20rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body">
									    <h5 class="card-title">Success card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
									<div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body">
									    <h5 class="card-title">Danger card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
									<div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body">
									    <h5 class="card-title">Warning card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
									<div class="card text-white bg-info mb-3" style="max-width: 20rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body">
									    <h5 class="card-title">Info card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
									<div class="card bg-light mb-3" style="max-width: 20rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body">
									    <h5 class="card-title">Light card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
									<div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body">
									    <h5 class="card-title">Dark card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-3">
									<div class="card border-primary mb-3" style="max-width: 20rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body text-primary">
									    <h5 class="card-title">Primary card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
									<div class="card border-secondary mb-3" style="max-width: 20rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body text-secondary">
									    <h5 class="card-title">Secondary card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
									<div class="card border-success mb-3" style="max-width: 20rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body text-success">
									    <h5 class="card-title">Success card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
									<div class="card border-danger mb-3" style="max-width: 20rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body text-danger">
									    <h5 class="card-title">Danger card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
									<div class="card border-warning mb-3" style="max-width: 20rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body text-warning">
									    <h5 class="card-title">Warning card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
									<div class="card border-info mb-3" style="max-width: 20rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body text-info">
									    <h5 class="card-title">Info card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
									<div class="card border-light mb-3" style="max-width: 20rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body">
									    <h5 class="card-title">Light card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
									<div class="card border-dark mb-3" style="max-width: 20rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body text-dark">
									    <h5 class="card-title">Dark card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<h4>Change Default Borders & BGs</h4>
									<div class="card border-success mb-3" style="max-width: 20rem;">
									  <div class="card-header bg-transparent border-success">Header</div>
									  <div class="card-body text-success">
									    <h5 class="card-title">Success card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									  <div class="card-footer bg-transparent border-success">Footer</div>
									</div>	
								</div>
							</div>


							<h3 class="pl-md-5">Card groups</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="card-group">
									  <div class="card">
									    <img class="w-100 card-img-top" data-src="holder.js/358x180?auto=yes&bg=777777&fg=aaaaaa" alt="Card image cap">
									    <div class="card-body">
									      <h5 class="card-title">Card title</h5>
									      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									    </div>
									  </div>
									  <div class="card">
									    <img class="w-100 card-img-top" data-src="holder.js/358x180?auto=yes&bg=777777&fg=aaaaaa" alt="Card image cap">
									    <div class="card-body">
									      <h5 class="card-title">Card title</h5>
									      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
									      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									    </div>
									  </div>
									  <div class="card">
									    <img class="w-100 card-img-top" data-src="holder.js/358x180?auto=yes&bg=777777&fg=aaaaaa" alt="Card image cap">
									    <div class="card-body">
									      <h5 class="card-title">Card title</h5>
									      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
									      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									    </div>
									  </div>
									</div>
								</div>
							</div>


							<h3 class="pl-md-5">Card Groups with Footers</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="card-group">
									  <div class="card">
									    <img class="w-100 card-img-top" data-src="holder.js/358x180?auto=yes&bg=777777&fg=aaaaaa" alt="Card image cap">
									    <div class="card-body">
									      <h5 class="card-title">Card title</h5>
									      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									    </div>
									    <div class="card-footer">
									      <small class="text-muted">Last updated 3 mins ago</small>
									    </div>
									  </div>
									  <div class="card">
									    <img class="w-100 card-img-top" data-src="holder.js/358x180?auto=yes&bg=777777&fg=aaaaaa" alt="Card image cap">
									    <div class="card-body">
									      <h5 class="card-title">Card title</h5>
									      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
									    </div>
									    <div class="card-footer">
									      <small class="text-muted">Last updated 3 mins ago</small>
									    </div>
									  </div>
									  <div class="card">
									    <img class="w-100 card-img-top" data-src="holder.js/358x180?auto=yes&bg=777777&fg=aaaaaa" alt="Card image cap">
									    <div class="card-body">
									      <h5 class="card-title">Card title</h5>
									      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
									    </div>
									    <div class="card-footer">
									      <small class="text-muted">Last updated 3 mins ago</small>
									    </div>
									  </div>
									</div>
								</div>
							</div>


							<h3 class="pl-md-5">Card Decks</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="card-deck">
									  <div class="card">
									    <img class="w-100 card-img-top" data-src="holder.js/358x180?auto=yes&bg=777777&fg=aaaaaa" alt="Card image cap">
									    <div class="card-body">
									      <h5 class="card-title">Card title</h5>
									      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									    </div>
									  </div>
									  <div class="card">
									    <img class="w-100 card-img-top" data-src="holder.js/358x180?auto=yes&bg=777777&fg=aaaaaa" alt="Card image cap">
									    <div class="card-body">
									      <h5 class="card-title">Card title</h5>
									      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
									      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									    </div>
									  </div>
									  <div class="card">
									    <img class="w-100 card-img-top" data-src="holder.js/358x180?auto=yes&bg=777777&fg=aaaaaa" alt="Card image cap">
									    <div class="card-body">
									      <h5 class="card-title">Card title</h5>
									      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
									      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									    </div>
									  </div>
									</div>
								</div>
							</div>


							<h3 class="pl-md-5">Card Decks with Footers</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="card-deck">
									  <div class="card">
									    <img class="w-100 card-img-top" data-src="holder.js/358x180?auto=yes&bg=777777&fg=aaaaaa" alt="Card image cap">
									    <div class="card-body">
									      <h5 class="card-title">Card title</h5>
									      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									    </div>
									    <div class="card-footer">
									      <small class="text-muted">Last updated 3 mins ago</small>
									    </div>
									  </div>
									  <div class="card">
									    <img class="w-100 card-img-top" data-src="holder.js/358x180?auto=yes&bg=777777&fg=aaaaaa" alt="Card image cap">
									    <div class="card-body">
									      <h5 class="card-title">Card title</h5>
									      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
									    </div>
									    <div class="card-footer">
									      <small class="text-muted">Last updated 3 mins ago</small>
									    </div>
									  </div>
									  <div class="card">
									    <img class="w-100 card-img-top" data-src="holder.js/358x180?auto=yes&bg=777777&fg=aaaaaa" alt="Card image cap">
									    <div class="card-body">
									      <h5 class="card-title">Card title</h5>
									      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
									    </div>
									    <div class="card-footer">
									      <small class="text-muted">Last updated 3 mins ago</small>
									    </div>
									  </div>
									</div>
								</div>
							</div>


							<h3 class="pl-md-5">Card Columns Masonry-style</h3>
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 mb-5">
									<div class="card-columns">
									  <div class="card">
										    <img class="w-100 card-img-top" data-src="holder.js/358x180?auto=yes&bg=777777&fg=aaaaaa" alt="Card image cap">
									    <div class="card-body">
									      <h5 class="card-title">Card title that wraps to a new line</h5>
									      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									    </div>
									  </div>
									  <div class="card p-3">
									    <blockquote class="blockquote mb-0 card-body">
									      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
									      <footer class="blockquote-footer">
									        <small class="text-muted">
									          Someone famous in <cite title="Source Title">Source Title</cite>
									        </small>
									      </footer>
									    </blockquote>
									  </div>
									  <div class="card">
										    <img class="w-100 card-img-top" data-src="holder.js/358x180?auto=yes&bg=777777&fg=aaaaaa" alt="Card image cap">
									    <div class="card-body">
									      <h5 class="card-title">Card title</h5>
									      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
									      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									    </div>
									  </div>
									  <div class="card bg-primary text-white text-center p-3">
									    <blockquote class="blockquote mb-0">
									      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
									      <footer class="blockquote-footer">
									        <small>
									          Someone famous in <cite title="Source Title">Source Title</cite>
									        </small>
									      </footer>
									    </blockquote>
									  </div>
									  <div class="card text-center">
									    <div class="card-body">
									      <h5 class="card-title">Card title</h5>
									      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
									      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									    </div>
									  </div>
									  <div class="card">
										    <img class="w-100 card-img" data-src="holder.js/358x180?auto=yes&bg=777777&fg=aaaaaa" alt="Card image cap">
									  </div>
									  <div class="card p-3 text-right">
									    <blockquote class="blockquote mb-0">
									      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
									      <footer class="blockquote-footer">
									        <small class="text-muted">
									          Someone famous in <cite title="Source Title">Source Title</cite>
									        </small>
									      </footer>
									    </blockquote>
									  </div>
									  <div class="card">
									    <div class="card-body">
									      <h5 class="card-title">Card title</h5>
									      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
									      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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
