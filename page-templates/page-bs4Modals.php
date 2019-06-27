<?php
/**
* Template Name: BS4 Modals
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

						<h3 class="pl-md-5">Modal components</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="modal" tabindex="-1" role="dialog" style="position: relative;top: auto;right: auto;bottom: auto;left: auto;z-index: 1;display: block;">
								  	<div class="modal-dialog" role="document">
								    	<div class="modal-content">
								      		<div class="modal-header">
								        		<h5 class="modal-title">Modal title</h5>
								        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          			<span aria-hidden="true">&times;</span>
								        		</button>
								      		</div>
								      		<div class="modal-body">
								        		<p>Modal body text goes here.</p>
								      		</div>
								      		<div class="modal-footer">
								        		<button type="button" class="btn btn-primary">Save changes</button>
								        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								      		</div>
								    	</div>
								  	</div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Live demo</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
								  Launch demo modal
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  	<div class="modal-dialog" role="document">
								    	<div class="modal-content">
								      		<div class="modal-header">
								        		<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
								        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          			<span aria-hidden="true">&times;</span>
								        		</button>
								      		</div>
								      		<div class="modal-body">
								        		Woohoo, you're reading this text in a modal!
								      		</div>
								      		<div class="modal-footer">
								        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								        		<button type="button" class="btn btn-primary">Save changes</button>
								      		</div>
								    	</div>
								  	</div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Scrolling long content</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
								  Launch demo modal
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
								  	<div class="modal-dialog" role="document">
								    	<div class="modal-content">
								      		<div class="modal-header">
								        		<h5 class="modal-title" id="exampleModalLongTitle1">Modal title</h5>
							        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          			<span aria-hidden="true">&times;</span>
								        		</button>
								      		</div>
								      		<div class="modal-body">
								        		Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

												Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

												Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

												Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

												Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

												Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

												Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

												Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

												Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

												Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

												Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

												Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

												Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

												Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

												Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

												Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

												Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

												Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
								      		</div>
								      		<div class="modal-footer">
								        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								        		<button type="button" class="btn btn-primary">Save changes</button>
								      		</div>
								    	</div>
								  	</div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Vertically centered</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
								  Launch demo modal
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								  	<div class="modal-dialog modal-dialog-centered" role="document">
								    	<div class="modal-content">
								      		<div class="modal-header">
								        		<h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
								        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          			<span aria-hidden="true">&times;</span>
								        		</button>
								      		</div>
								      		<div class="modal-body">
								        		Woohoo, you're reading this text in a modal!
								      		</div>
								      		<div class="modal-footer">
								        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								        		<button type="button" class="btn btn-primary">Save changes</button>
								      		</div>
								    	</div>
								  	</div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Tooltips and popovers</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalPopovers">
								  Launch demo modal
								</button>

								<div id="exampleModalPopovers" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalPopoversLabel">Modal title</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">×</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <h5>Popover in a modal</h5>
								        <p>This <button href="#" role="button" class="btn btn-secondary" data-toggle="popover" title="Popover title" data-content="Popover body content is set in this attribute." data-container="#exampleModalPopovers" data-original-title="Popover title" aria-describedby="popover910266">button</button> triggers a popover on click.</p>
								        <hr>
								        <h5>Tooltips in a modal</h5>
								        <p>
								        	<a href="#" title="" data-toggle="tooltip" data-container="#exampleModalPopovers" data-original-title="Tooltip">This link</a>
								        	 and 
								        	<a href="#" title="" data-toggle="tooltip" data-container="#exampleModalPopovers" data-original-title="Tooltip">that link</a> have tooltips on hover.
							        	</p>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								        <button type="button" class="btn btn-primary">Save changes</button>
								      </div>
								    </div>
								  </div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Using the grid</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong3">
								  Launch demo modal
								</button>

								<div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle3" aria-hidden="true">
								  	<div class="modal-dialog" role="document">
								    	<div class="modal-content">
								      		<div class="modal-header">
								        		<h5 class="modal-title" id="exampleModalLongTitle3">Modal Grid</h5>
								        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          			<span aria-hidden="true">&times;</span>
								        		</button>
								      		</div>
											<div class="modal-body">
											  	<div class="container-fluid">
											    	<div class="row">
											      		<div class="col-md-4" style="background-color: rgba(86,61,124,.15); border: 1px solid rgba(86,61,124,.2);">.col-md-4</div>
											      		<div class="col-md-4 ml-auto" style="background-color: rgba(86,61,124,.15); border: 1px solid rgba(86,61,124,.2);">.col-md-4 .ml-auto</div>
											    	</div>
											    	<div class="row">
											      		<div class="col-md-3 ml-auto" style="background-color: rgba(86,61,124,.15); border: 1px solid rgba(86,61,124,.2);">.col-md-3 .ml-auto</div>
											      		<div class="col-md-2 ml-auto" style="background-color: rgba(86,61,124,.15); border: 1px solid rgba(86,61,124,.2);">.col-md-2 .ml-auto</div>
											    	</div>
											    	<div class="row">
											      		<div class="col-md-6 ml-auto" style="background-color: rgba(86,61,124,.15); border: 1px solid rgba(86,61,124,.2);">.col-md-6 .ml-auto</div>
											    	</div>
											    	<div class="row">
											      		<div class="col-sm-9" style="background-color: rgba(86,61,124,.15); border: 1px solid rgba(86,61,124,.2);">
											        		Level 1: .col-sm-9
											        		<div class="row">
											          			<div class="col-8 col-sm-6" style="background-color: rgba(86,61,124,.15); border: 1px solid rgba(86,61,124,.2);">
											            			Level 2: .col-8 .col-sm-6
											          			</div>
											          			<div class="col-4 col-sm-6" style="background-color: rgba(86,61,124,.15); border: 1px solid rgba(86,61,124,.2);">
											            			Level 2: .col-4 .col-sm-6
											          			</div>
											        		</div>
											      		</div>
											    	</div>
											  	</div>
											</div>
											<div class="modal-footer">
								        		<button type="button" class="btn btn-primary">Save changes</button>
								        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								      		</div>
										</div>
									</div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Varying modal content</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel6">New message</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <form>
								          <div class="form-group">
								            <label for="recipient-name" class="col-form-label">Recipient:</label>
								            <input type="text" class="form-control" id="recipient-name">
								          </div>
								          <div class="form-group">
								            <label for="message-text" class="col-form-label">Message:</label>
								            <textarea class="form-control" id="message-text"></textarea>
								          </div>
								        </form>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								        <button type="button" class="btn btn-primary">Send message</button>
								      </div>
								    </div>
								  </div>
								</div>
							</div>
						</div>
						<script>
						jQuery('#exampleModal').on('show.bs.modal', function (event) {
						  var button = jQuery(event.relatedTarget) // Button that triggered the modal
						  var recipient = button.data('whatever') // Extract info from data-* attributes
						  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
						  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
						  var modal = jQuery(this)
						  modal.find('.modal-title').text('New message to ' + recipient)
						  modal.find('.modal-body input').val(recipient)
						})
						</script>


						<h3 class="pl-md-5">Optional sizes</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-3">
								<!-- Large modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

								<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								  	<div class="modal-dialog modal-lg">
								    	<div class="modal-content">
								      		<div class="modal-header">
								        		<h5 class="modal-title" id="myLargeModalLabel">Modal title</h5>
								        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          			<span aria-hidden="true">&times;</span>
								        		</button>
								      		</div>
								      		<div class="modal-body">
								        		<p>Modal body text goes here.</p>
								      		</div>
								      		<div class="modal-footer">
								        		<button type="button" class="btn btn-primary">Save changes</button>
								        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								      		</div>
								    	</div>
								  	</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">

								<!-- Small modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>

								<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
								  	<div class="modal-dialog modal-sm">
								    	<div class="modal-content">
								     		<div class="modal-header">
								        		<h5 class="modal-title" id="mySmallModalLabel">Modal title</h5>
								        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          			<span aria-hidden="true">&times;</span>
								        		</button>
								      		</div>
								      		<div class="modal-body">
								        		<p>Modal body text goes here.</p>
								      		</div>
								      		<div class="modal-footer">
								        		<button type="button" class="btn btn-primary">Save changes</button>
								        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								      		</div>
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
