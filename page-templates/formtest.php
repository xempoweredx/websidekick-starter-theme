<?php
/**
 * Template Name: Form Test
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>


<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<form action="http://blb.org/search/preSearch.cfm"

  onSubmit="if(this.cscs.value=='Optional Verse Range')

  this.cscs.value='';"

  method="get">

  

  <p>

  <input type="text" name="Criteria" />

  <select name="t">

    <option value="KJV">KJV</option>

    <option value="NKJV" selected="selected">NKJV</option>

    <option value="NLT">NLT</option>

    <option value="NIV">NIV</option>

    <option value="ESV">ESV</option>

    <option value="CSB">CSB</option>

    <option value="NASB">NASB</option>

    <option value="NET">NET</option>

    <option value="RSV">RSV</option>

    <option value="ASV">ASV</option>

    <option value="YLT">YLT</option>

    <option value="DBY">DBY</option>

    <option value="WEB">WEB</option>

    <option value="HNV">HNV</option>

    <option value="RVR60">RVR60</option>

    <option value="VUL">VUL</option>

    <option value="WLC">WLC</option>

    <option value="LXX">LXX</option>

    <option value="mGNT">mGNT</option>

    <option value="TR">TR</option>

  </select>

  <input type="text" name="cscs"

    title="Use semicolons to separate groups -

      Gen;Jdg;Psa-Mal;Rom 3-12; Mat 1:15;Mat 5:12-22"

    value="Optional Verse Range"

    onfocus="if(this.value=='Optional Verse Range')

      this.value='';"

    onblur="if(this.value=='')

      this.value='Optional Verse Range';" />

  <input type="submit" value="Search" />

  </p>

  

</form>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
