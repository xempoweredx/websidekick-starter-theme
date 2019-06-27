<?php
/**
* Template Name: BS4 Navs
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

						<h3 class="pl-md-5">Base nav</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<ul class="nav">
								  <li class="nav-item">
								    <a class="nav-link active" href="#">Active</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#">Link</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#">Link</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link disabled" href="#">Disabled</a>
								  </li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav class="nav">
								  <a class="nav-link active" href="#">Active</a>
								  <a class="nav-link" href="#">Link</a>
								  <a class="nav-link" href="#">Link</a>
								  <a class="nav-link disabled" href="#">Disabled</a>
								</nav>
							</div>
						</div>


						<h3 class="pl-md-5">Horizontal alignment</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<ul class="nav justify-content-center">
								  <li class="nav-item">
								    <a class="nav-link active" href="#">Active</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#">Link</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#">Link</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link disabled" href="#">Disabled</a>
								  </li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<ul class="nav justify-content-end">
								  <li class="nav-item">
								    <a class="nav-link active" href="#">Active</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#">Link</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#">Link</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link disabled" href="#">Disabled</a>
								  </li>
								</ul>
							</div>
						</div>


						<h3 class="pl-md-5">Vertical</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<ul class="nav flex-column">
								  <li class="nav-item">
								    <a class="nav-link active" href="#">Active</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#">Link</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#">Link</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link disabled" href="#">Disabled</a>
								  </li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav class="nav flex-column">
								  <a class="nav-link active" href="#">Active</a>
								  <a class="nav-link" href="#">Link</a>
								  <a class="nav-link" href="#">Link</a>
								  <a class="nav-link disabled" href="#">Disabled</a>
								</nav>
							</div>
						</div>


						<h3 class="pl-md-5">Tabs</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<ul class="nav nav-tabs">
								  <li class="nav-item">
								    <a class="nav-link active" href="#">Active</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#">Link</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#">Link</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link disabled" href="#">Disabled</a>
								  </li>
								</ul>
							</div>
						</div>


						<h3 class="pl-md-5">Pills</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<ul class="nav nav-pills">
								  <li class="nav-item">
								    <a class="nav-link active" href="#">Active</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#">Link</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#">Link</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link disabled" href="#">Disabled</a>
								  </li>
								</ul>
							</div>
						</div>


						<h3 class="pl-md-5">Fill and justify</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<ul class="nav nav-pills nav-fill">
								  <li class="nav-item">
								    <a class="nav-link active" href="#">Active</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#">Longer nav link</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#">Link</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link disabled" href="#">Disabled</a>
								  </li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<h4>.nav-based Navigation</h4>
								<nav class="nav nav-pills nav-fill bg-white">
								  <a class="nav-item nav-link active" href="#">Active</a>
								  <a class="nav-item nav-link" href="#">Link</a>
								  <a class="nav-item nav-link" href="#">Link</a>
								  <a class="nav-item nav-link disabled" href="#">Disabled</a>
								</nav>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<h4>Equal Width Elements</h4>
								<nav class="nav nav-pills nav-justified">
								  <a class="nav-link active" href="#">Active</a>
								  <a class="nav-link" href="#">Longer nav link</a>
								  <a class="nav-link" href="#">Link</a>
								  <a class="nav-link disabled" href="#">Disabled</a>
								</nav>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<h4>.nav-fill Nav-based</h4>
								<nav class="nav nav-pills nav-justified">
								  <a class="nav-item nav-link active" href="#">Active</a>
								  <a class="nav-item nav-link" href="#">Link</a>
								  <a class="nav-item nav-link" href="#">Link</a>
								  <a class="nav-item nav-link disabled" href="#">Disabled</a>
								</nav>
							</div>
						</div>


						<h3 class="pl-md-5">Working with flex utilities</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav class="nav nav-pills flex-column flex-sm-row">
								  <a class="flex-sm-fill text-sm-center nav-link active" href="#">Active</a>
								  <a class="flex-sm-fill text-sm-center nav-link" href="#">Link</a>
								  <a class="flex-sm-fill text-sm-center nav-link" href="#">Link</a>
								  <a class="flex-sm-fill text-sm-center nav-link disabled" href="#">Disabled</a>
								</nav>
							</div>
						</div>


						<h3 class="pl-md-5">Tabs with dropdowns</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<ul class="nav nav-tabs">
								  <li class="nav-item">
								    <a class="nav-link active" href="#">Active</a>
								  </li>
								  <li class="nav-item dropdown">
								    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
								    <div class="dropdown-menu">
								      <a class="dropdown-item" href="#">Action</a>
								      <a class="dropdown-item" href="#">Another action</a>
								      <a class="dropdown-item" href="#">Something else here</a>
								      <div class="dropdown-divider"></div>
								      <a class="dropdown-item" href="#">Separated link</a>
								    </div>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#">Link</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link disabled" href="#">Disabled</a>
								  </li>
								</ul>
							</div>
						</div>


						<h3 class="pl-md-5">Pills with dropdowns</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<ul class="nav nav-pills">
								  <li class="nav-item">
								    <a class="nav-link active" href="#">Active</a>
								  </li>
								  <li class="nav-item dropdown">
								    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
								    <div class="dropdown-menu">
								      <a class="dropdown-item" href="#">Action</a>
								      <a class="dropdown-item" href="#">Another action</a>
								      <a class="dropdown-item" href="#">Something else here</a>
								      <div class="dropdown-divider"></div>
								      <a class="dropdown-item" href="#">Separated link</a>
								    </div>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#">Link</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link disabled" href="#">Disabled</a>
								  </li>
								</ul>
							</div>
						</div>


						<h3 class="pl-md-5">JavaScript behavior</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
								  <li class="nav-item">
								    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
								  </li>
								</ul>
								<div class="tab-content" id="myTabContent">
								  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</div>
								  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</div>
								  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<nav class="nav nav-tabs bg-white" id="myTab" role="tablist">
								  <a class="nav-item nav-link active" id="home-tab1" data-toggle="tab" href="#nav-home1" role="tab" aria-controls="nav-home1" aria-selected="true">Home</a>
								  <a class="nav-item nav-link" id="profile-tab1" data-toggle="tab" href="#nav-profile1" role="tab" aria-controls="nav-profile1" aria-selected="false">Profile</a>
								  <a class="nav-item nav-link" id="contact-tab1" data-toggle="tab" href="#nav-contact1" role="tab" aria-controls="nav-contact1" aria-selected="false">Contact</a>
								</nav>
								<div class="tab-content" id="nav-tabContent">
								   <div class="tab-pane fade show active" id="nav-home1" role="tabpanel" aria-labelledby="home-tab1">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</div>
								  <div class="tab-pane fade" id="nav-profile1" role="tabpanel" aria-labelledby="profile-tab1">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</div>
								  <div class="tab-pane fade" id="nav-contact1" role="tabpanel" aria-labelledby="contact-tab1">Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<ul class="nav nav-pills mb-5 bg-white" id="pills-tab" role="tablist">
								  <li class="nav-item">
								    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
								  </li>
								</ul>
								<div class="tab-content" id="pills-tabContent">
								  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</div>
								  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</div>
								  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<div class="row">
									<div class="col-12 col-md-4">
										<div class="nav flex-column nav-pills bg-white" id="v-pills-tab" role="tablist" aria-orientation="vertical">
										  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
										  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
										  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
										  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
										</div>
									</div>
									<div class="col-12 col-md-8">
										<div class="tab-content" id="v-pills-tabContent">
										  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incididunt minim occaecat.</div>
										  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur qui.</div>
										  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</div>
										  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</div>
										</div>
									</div>
								</div>
							</div>
						</div>


						<h3 class="pl-md-5">Using data attributes</h3>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs bg-white" id="myTab" role="tablist">
								  <li class="nav-item">
								    <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home3" aria-selected="true">Home</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile3" aria-selected="false">Profile</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="messages-tab3" data-toggle="tab" href="#messages3" role="tab" aria-controls="messages3" aria-selected="false">Messages</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="settings-tab3" data-toggle="tab" href="#settings3" role="tab" aria-controls="settings3" aria-selected="false">Settings</a>
								  </li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">
								  <div class="tab-pane active" id="home3" role="tabpanel" aria-labelledby="home-tab3">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incididunt minim occaecat.</div>
								  <div class="tab-pane" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur qui.</div>
								  <div class="tab-pane" id="messages3" role="tabpanel" aria-labelledby="messages-tab3">Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</div>
								  <div class="tab-pane" id="settings3" role="tabpanel" aria-labelledby="settings-tab3">Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 mb-5">
								<ul class="nav nav-tabs bg-white" id="myTab" role="tablist">
								  <li class="nav-item">
								    <a class="nav-link active" id="home-tab5" data-toggle="tab" href="#home5" role="tab" aria-controls="home5" aria-selected="true">Home</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="profile-tab5" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile5" aria-selected="false">Profile</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="messages-tab5" data-toggle="tab" href="#messages5" role="tab" aria-controls="messages5" aria-selected="false">Messages</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="settings-tab5" data-toggle="tab" href="#settings5" role="tab" aria-controls="settings5" aria-selected="false">Settings</a>
								  </li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">
								  <div class="tab-pane fade show active" id="home5" role="tabpanel" aria-labelledby="home-tab5">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incididunt minim occaecat.</div>
								  <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab5">Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur qui.</div>
								  <div class="tab-pane fade" id="messages5" role="tabpanel" aria-labelledby="messages-tab5">Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</div>
								  <div class="tab-pane fade" id="settings5" role="tabpanel" aria-labelledby="settings-tab5">Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</div>
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
