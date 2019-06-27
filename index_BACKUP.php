<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' ); ?>

<div class="wrapper mt-md-5" id="index-wrapper">

	<div class="welcome bg-danger py-5 w-100">
		<div class="container py-3 text-white font-weight-100">
			<div class="h3 font-weight-100 text-center">Welcom to BiblicalMen.com, a website dedicated to helping men grow in knowledge and love of God through the gosepl of His Son, our Lord Jesus Christ. I pray we all grow in holiness & Christlikeness as we study His Word, and that our lives are marked by the humility, grace, and peace which are only produced by His Spirit at work in us. Thanks for dropping by. Soli Deo Gloria!</div>
		</div>
	</div>

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		} ?>
		<main class="site-main d-block w-100" id="main">

			<div class="mb-5">
				<h3 class="font-weight-light text-dark text-center">Featured Resources: Marriage</h3>
				<?php $args3 = array( 
					'post_type' => 'resources',
					'posts_per_page' => 18,
					'tag' => array('featured+marriage'),
				);
				$query3 = new WP_Query( $args3 ); // The Query
					if ( $query3->have_posts() ) { ?>
				<div class="carousel" data-flickity='{ "freeScroll": true, "cellAlign": "left", "pageDots": false }'>
						<?php while ( $query3->have_posts() ) { // The Loop
						$query3->the_post(); ?>

						<?php $resource_authors = wp_get_post_terms($post->ID, 'resources-authors', array("fields" => "all"));
							foreach($resource_authors as $resource_author) {
								$resource_author_name	= $resource_author->name;
								$resource_author_ID		= $resource_author->term_id;
								$resource_author_slug	= $resource_author->slug;
								$resource_author_link	= get_term_link($resource_author); 
							}
							$paperback = get_post_meta( get_the_ID(), 'ninja_resources_url_paperback', true );
							$hardcover = get_post_meta( get_the_ID(), 'ninja_resources_url_hardcover', true );
							$audible = get_post_meta( get_the_ID(), 'ninja_resources_url_audible', true );
							$kindle = get_post_meta( get_the_ID(), 'ninja_resources_url_kindle', true );
							$audio = get_post_meta( get_the_ID(), 'ninja_resources_url_audio', true );
							$pdf = get_post_meta( get_the_ID(), 'ninja_resources_url_pdf', true );
						?>

					<div class="carousel-cell col-9 col-md-5" style="max-width: 350px;">
						<div id="<?php the_ID(); ?>" class="card w-100">
							<div class="card-header text-white bg-primary text-center"><span class="mr-3"><i class="fal fa-books"></i></span><span>Book/Audiobook</span></div>
							<div class="card-body">
							<?php if (get_the_post_thumbnail( $post->ID, 'medium' )) { ?>
								<a class="d-block float-left mr-3" href="<?php echo esc_url( get_permalink() ); ?>"><img class="rounded w-100" src="<?php echo (get_the_post_thumbnail_url( $post->ID, 'medium' )); ?>" style="max-width: 85px;" /></a>
							<?php } ?>
								<?php the_title( sprintf( '<h6 class="card-title font-weight-light mb-1" style="max-height: 3.65rem; overflow: hidden;"><a class="text-dark" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h6>' ); ?>
								<div class="text-muted small"><span class="mr-2"><i class="fal fa-user-edit"></i></span><span><?php echo esc_html($resource_author_name); ?></span></div>
								<div class="post-tags">
								<?php 
									$tags = get_the_tags();
									if (! empty( $tags )) {
										$tag_bgs = array( 'md_bg-grey text-white', 'md_bg-cyan text-white', 'md_bg-amber text-white', 'md_bg-blue-grey text-white', 'md_bg-lime text-white', 'md_bg-blue text-white' );
										$x=0;
										foreach($tags as $tag) :
											$x++; 
											$tag_bg = $tag_bgs[$x%6];?>

										    	<a class="mr-1 mt-1 badge badge-pill <?php echo $tag_bg; ?> font-weight-light"
					        						href="<?php bloginfo('url');?>/tag/<?php print_r($tag->slug);?>">
					        						<span class="mr-1"><i class="fal fa-tag fa-sm"></i></span>
					              					<span class="mr-1"><?php print_r($tag->name); ?></span>
					              					<span class="bg-white text-dark rounded-pill px-1 small" style="opacity: .8;"><?php print_r($tag->count); ?></span>
					     						</a>

									    <?php endforeach;
									}
								?>
								</div><!-- /post-tags -->
							</div><!-- /card-body -->
						</div><!-- /card -->
					</div><!-- /cell -->
						<?php } ?><!-- /while -->
					<?php wp_reset_postdata(); ?>
				</div><!-- /carousel -->
					<?php } ?><!-- /if -->
			</div><!-- /mb-5 -->

			<div class="mb-5">
				<h3 class="font-weight-light text-dark text-center">Latest Blog Posts</h3>
  				<div class="carousel" data-flickity='{ "freeScroll": true, "cellAlign": "left", "pageDots": false }'>
				<?php $args2 = array( 
					'post_type' => 'post',
					'posts_per_page' => 8,
					'tag__not_in' => 74,
				);
				$query2 = new WP_Query( $args2 ); // The Query
					if ( $query2->have_posts() ) {
						while ( $query2->have_posts() ) { // The Loop
						$query2->the_post(); ?>

					<div class="carousel-cell col-9 col-md-5" style="max-width: 350px;">
						<div id="<?php the_ID(); ?>" class="card w-100">
  							<?php if (get_the_post_thumbnail( $post->ID, 'feed_top_img' )) { ?>
							<a class="d-block" href="<?php echo esc_url( get_permalink() ); ?>">
								<div class="feed-featured-img" style="background-image: url(<?php echo get_the_post_thumbnail_url( $post->ID, 'feed_top_img' ); ?>);"></div>
							</a>
							
							<div class="card-body">
								<?php the_title( sprintf( '<h4 class="card-title" style="max-height: 3.65rem; overflow: hidden;"><a class="text-dark font-weight-light" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' );
								echo excerpt(30); ?>
							</div><!-- /card-body -->
						</div><!-- /card -->
					</div><!-- /carousel-cell -->
						<?php } } ?><!-- /while -->
				</div><!-- /carousel -->
			</div>

					<?php wp_reset_postdata();
					} ?><!-- /if -->
					
		</main><!-- #main -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?> 