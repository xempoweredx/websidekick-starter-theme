<?php
/**
* Template Name: BS4 List Groups
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
								<ul class="list-group">
								  <li class="list-group-item">Cras justo odio</li>
								  <li class="list-group-item">Dapibus ac facilisis in</li>
								  <li class="list-group-item">Morbi leo risus</li>
								  <li class="list-group-item">Porta ac consectetur ac</li>
								  <li class="list-group-item">Vestibulum at eros</li>
								</ul>
							</div>
						</div>


						<h3 class="pl-md-5">Active items</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<ul class="list-group">
								  <li class="list-group-item active">Cras justo odio</li>
								  <li class="list-group-item">Dapibus ac facilisis in</li>
								  <li class="list-group-item">Morbi leo risus</li>
								  <li class="list-group-item">Porta ac consectetur ac</li>
								  <li class="list-group-item">Vestibulum at eros</li>
								</ul>
							</div>
						</div>


						<h3 class="pl-md-5">Disabled items</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<ul class="list-group">
								  <li class="list-group-item disabled">Cras justo odio</li>
								  <li class="list-group-item">Dapibus ac facilisis in</li>
								  <li class="list-group-item">Morbi leo risus</li>
								  <li class="list-group-item">Porta ac consectetur ac</li>
								  <li class="list-group-item">Vestibulum at eros</li>
								</ul>
							</div>
						</div>


						<h3 class="pl-md-5">Links and buttons</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-3">
								<div class="list-group">
								  <a href="#" class="list-group-item list-group-item-action active">
								    Cras justo odio
								  </a>
								  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
								  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
								  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
								  <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="list-group">
								  <button type="button" class="list-group-item list-group-item-action active">
								    Cras justo odio
								  </button>
								  <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
								  <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
								  <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
								  <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Flush</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-3">
								<ul class="list-group list-group-flush">
								  <li class="list-group-item">Cras justo odio</li>
								  <li class="list-group-item">Dapibus ac facilisis in</li>
								  <li class="list-group-item">Morbi leo risus</li>
								  <li class="list-group-item">Porta ac consectetur ac</li>
								  <li class="list-group-item">Vestibulum at eros</li>
								</ul>
							</div>
						</div>


						<h3 class="pl-md-5">Contextual classes</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-3">
								<ul class="list-group">
								  <li class="list-group-item">Dapibus ac facilisis in</li>
								  <li class="list-group-item list-group-item-primary">This is a primary list group item</li>
								  <li class="list-group-item list-group-item-secondary">This is a secondary list group item</li>
								  <li class="list-group-item list-group-item-success">This is a success list group item</li>
								  <li class="list-group-item list-group-item-danger">This is a danger list group item</li>
								  <li class="list-group-item list-group-item-warning">This is a warning list group item</li>
								  <li class="list-group-item list-group-item-info">This is a info list group item</li>
								  <li class="list-group-item list-group-item-light">This is a light list group item</li>
								  <li class="list-group-item list-group-item-dark">This is a dark list group item</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<h4>With .item-action</h4>
								<div class="list-group">
								  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
								  <a href="#" class="list-group-item list-group-item-action list-group-item-primary">This is a primary list group item</a>
								  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">This is a secondary list group item</a>
								  <a href="#" class="list-group-item list-group-item-action list-group-item-success">This is a success list group item</a>
								  <a href="#" class="list-group-item list-group-item-action list-group-item-danger">This is a danger list group item</a>
								  <a href="#" class="list-group-item list-group-item-action list-group-item-warning">This is a warning list group item</a>
								  <a href="#" class="list-group-item list-group-item-action list-group-item-info">This is a info list group item</a>
								  <a href="#" class="list-group-item list-group-item-action list-group-item-light">This is a light list group item</a>
								  <a href="#" class="list-group-item list-group-item-action list-group-item-dark">This is a dark list group item</a>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">With badges</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<ul class="list-group">
								  <li class="list-group-item d-flex justify-content-between align-items-center">
								    Cras justo odio
								    <span class="badge badge-primary badge-pill">14</span>
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center">
								    Dapibus ac facilisis in
								    <span class="badge badge-primary badge-pill">2</span>
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center">
								    Morbi leo risus
								    <span class="badge badge-primary badge-pill">1</span>
								  </li>
								</ul>
							</div>
						</div>


						<h3 class="pl-md-5">Custom content</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="list-group">
								  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
								    <div class="d-flex w-100 justify-content-between">
								      <h5 class="mb-1">List group item heading</h5>
								      <small>3 days ago</small>
								    </div>
								    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
								    <small>Donec id elit non mi porta.</small>
								  </a>
								  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
								    <div class="d-flex w-100 justify-content-between">
								      <h5 class="mb-1">List group item heading</h5>
								      <small class="text-muted">3 days ago</small>
								    </div>
								    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
								    <small class="text-muted">Donec id elit non mi porta.</small>
								  </a>
								  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
								    <div class="d-flex w-100 justify-content-between">
								      <h5 class="mb-1">List group item heading</h5>
								      <small class="text-muted">3 days ago</small>
								    </div>
								    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
								    <small class="text-muted">Donec id elit non mi porta.</small>
								  </a>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">JavaScript behavior</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="row">
								  	<div class="col-12 col-md-4">
									    <div class="list-group" id="list-tab" role="tablist">
									      	<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
									      	<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
									      	<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
									      	<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
									    </div>
								  	</div>
								  	<div class="col-12 col-md-8">
									    <div class="tab-content" id="nav-tabContent">
									      	<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit occaecat nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in cupidatat nisi enim eu nostrud do aliquip veniam minim.</div>
									      	<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa commodo veniam incididunt veniam ad.</div>
									      	<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Ut ut do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit aute ipsum voluptate. Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit consequat enim tempor. Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure. Ipsum id Lorem sit sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt. Consectetur et fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur cillum.</div>
									      	<div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute est cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut exercitation irure commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui aute irure eu. Magna labore dolor quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa mollit in irure.</div>
									    </div>
								  	</div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Using data attributes</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="row">
								  	<div class="col-12 col-md-4">
										<!-- List group -->
										<div class="list-group" id="myList" role="tablist">
										  	<a class="list-group-item list-group-item-action active" data-toggle="list" href="#home2" role="tab">Home</a>
										  	<a class="list-group-item list-group-item-action" data-toggle="list" href="#profile2" role="tab">Profile</a>
										  	<a class="list-group-item list-group-item-action" data-toggle="list" href="#messages2" role="tab">Messages</a>
										  	<a class="list-group-item list-group-item-action" data-toggle="list" href="#settings2" role="tab">Settings</a>
										</div>
									</div>
								  	<div class="col-12 col-md-8">
										<!-- Tab panes -->
										<div class="tab-content">
										  	<div class="tab-pane active" id="home2" role="tabpanel">Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit occaecat nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in cupidatat nisi enim eu nostrud do aliquip veniam minim.</div>
										  	<div class="tab-pane" id="profile2" role="tabpanel">Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa commodo veniam incididunt veniam ad.</div>
										  	<div class="tab-pane" id="messages2" role="tabpanel">Ut ut do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit aute ipsum voluptate. Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit consequat enim tempor. Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure. Ipsum id Lorem sit sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt. Consectetur et fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur cillum.</div>
										  	<div class="tab-pane" id="settings2" role="tabpanel">Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute est cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut exercitation irure commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui aute irure eu. Magna labore dolor quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa mollit in irure.</div>
										</div>
									</div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Fade effect</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="row">
								  	<div class="col-12 col-md-4">
										<!-- List group -->
										<div class="list-group" id="myList" role="tablist">
										  	<a class="list-group-item list-group-item-action active" data-toggle="list" href="#home3" role="tab">Home</a>
										  	<a class="list-group-item list-group-item-action" data-toggle="list" href="#profile3" role="tab">Profile</a>
										  	<a class="list-group-item list-group-item-action" data-toggle="list" href="#messages3" role="tab">Messages</a>
										  	<a class="list-group-item list-group-item-action" data-toggle="list" href="#settings3" role="tab">Settings</a>
										</div>
									</div>
									<div class="col-12 col-md-8">
										<!-- Tab panes -->
										<div class="tab-content">
										  	<div class="tab-pane fade show active" id="home3" role="tabpanel">Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit occaecat nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in cupidatat nisi enim eu nostrud do aliquip veniam minim.</div>
										  	<div class="tab-pane fade" id="profile3" role="tabpanel">Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa commodo veniam incididunt veniam ad.</div>
										  	<div class="tab-pane fade" id="messages3" role="tabpanel">Ut ut do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit aute ipsum voluptate. Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit consequat enim tempor. Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure. Ipsum id Lorem sit sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt. Consectetur et fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur cillum.</div>
										  	<div class="tab-pane fade" id="settings3" role="tabpanel">Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute est cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut exercitation irure commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui aute irure eu. Magna labore dolor quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa mollit in irure.</div>
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
