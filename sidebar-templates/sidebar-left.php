<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! is_active_sidebar( 'left-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
	<div class="col-md-3 widget-area" id="left-sidebar" role="complementary">
<?php else : 
	if(is_singular()) { ?>
		<div class="col-md-4 widget-area" id="left-sidebar" role="complementary">
	<?php } else { ?>
		<div class="col-md-3 widget-area" id="left-sidebar" role="complementary">
	<?php }
	endif; ?>

<?php 
$sidekick_options = get_option('websidekick_main_options');
$blb_search = $sidekick_options['blb_search']; 
if ( $blb_search ) { ?>
	
<div class="pb-4">
	<h3 class="widget-title mb-0">Bible Search Tool</h3><h6 class="font-weight-light mb-2">Powered by <a class="text-primary" href="http://blueletterbible.org" target="_blank">BlueLetterBible.org</a></h6>
	<form action="http://blb.org/search/preSearch.cfm" onSubmit="if(this.cscs.value=='Optional Verse Range')this.cscs.value='';" method="get">
	    <div class="form-row">
	        <div class="col-8">
	            <input class="form-control" type="text" name="Criteria" placeholder="Verse(s), Word(s), Topic" />
	        </div>
	        <div class="col-4">
	            <select class="custom-select" name="t">
	                <option value="ESV" selected="selected">ESV</option>
	                <option value="NASB">NASB</option>
	                <option value="NIV">NIV</option>
	                <option value="KJV">KJV</option>
	                <option value="NKJV">NKJV</option>
	                <option value="CSB">CSB</option>
	                <option value="RSV">RSV</option>
	                <option value="TR">TR</option>
	            </select>
	        </div>
	    </div>
	    <div class="form-row pt-3">
	        <div class="col-8">
	            <input class="form-control" type="text" name="cscs" placeholder="Optional Text Range" title="Use semicolons to separate groups - Gen;Jdg;Psa-Mal;Rom 3-12; Mat 1:15;Mat 5:12-22" value="" onfocus="if(this.value=='Optional Verse Range') this.value='';" onblur="if(this.value=='') this.value='Optional Verse Range';" />
	            <small class="form-text text-muted help-text">i.e. Gen;Jdg;Psa-Mal;Rom3-12;Mat1:15;Mat5:12-22</small>
	        </div>
	        <div class="col-4">
	            <input class="btn btn-block btn-outline-danger rounded-pill" type="submit" value="Search" />
	        </div>
	    </div>
	</form>
</div>

<?php } ?>

<?php dynamic_sidebar( 'left-sidebar' ); ?>

</div><!-- #left-sidebar -->
