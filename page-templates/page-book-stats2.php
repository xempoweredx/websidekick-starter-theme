<?php
/**
 * Template Name: Ninja Book Stats 2
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

<div class="wrapper" id="ninja-table-page-wrapper">

	<div class="container-fluid mb-5" id="content">
		<div class="chart-container">
			<div class="chart" id="google-line"></div>
		</div>
	</div><!-- Container end -->

	<div class="container-fluid mt-5" id="content">
		<div class="chart-container">
			<div class="chart" id="google-bar-stacked"></div>
		</div>
	</div><!-- Container end -->

	<div class="container-fluid mt-5" id="content">
		<div class="chart-container">
			<div class="chart has-fixed-height" id="bars_stacked"></div>
		</div>
	</div><!-- Container end -->

</div><!-- Wrapper end -->

<script> // Google Lines

	// Setup module
	// ------------------------------

	var GoogleLineBasic = function() {


	    //
	    // Setup module components
	    //

	    // Line chart
	    var _googleLineBasic = function() {
	        if (typeof google == 'undefined') {
	            console.warn('Warning - Google Charts library is not loaded.');
	            return;
	        }

	        // Initialize chart
	        google.charts.load('current', {
	            callback: function () {

	                // Draw chart
	                drawLineChart();

	                // Resize on sidebar width change
	                $(document).on('click', '.sidebar-control', drawLineChart);

	                // Resize on window resize
	                var resizeLineBasic;
	                $(window).on('resize', function() {
	                    clearTimeout(resizeLineBasic);
	                    resizeLineBasic = setTimeout(function () {
	                        drawLineChart();
	                    }, 200);
	                });
	            },
	            packages: ['corechart']
	        });

	        // Chart settings
	        function drawLineChart() {

	            // Define charts element
	            var line_chart_element = document.getElementById('google-line');

	            // Data
	            var data = google.visualization.arrayToDataTable([
	            <?php
	        	//first get all shelves
				$shelves = get_terms( 'book_shelves', array(
				    'hide_empty' => true,
				    'orderby' => 'name',
				    'order' => 'ASC',
				));

				$formats = get_terms( 'book_formats', array(
				    'hide_empty' => true,
				    'orderby' => 'name',
				    'order' => 'ASC',
				));

				?>['Shelf', <?php

				//then create an array for easier processing
				foreach ( $formats as $format ) {
				       $format_slugs[] = $format->slug;
				       $format_names[] = $format->name;
				       ?>'<?php echo $format->name; ?>', <?php
				} ?>], <?php

				//then create an array for easier processing
				foreach ( $shelves as $shelf ) {
				       $shelf_slugs[] = $shelf->slug;
				}

				//then loop over the shelves and for each one create a "query" to count the number of books
				foreach($shelf_slugs as $shelf_slug){ ?>
					['<?php echo get_term_by('slug', $shelf_slug, 'book_shelves')->name; ?>', <?php
					foreach($format_slugs as $format_slug){
					    $books = get_posts(array(
					        'post_type' => 'books',
					        'posts_per_page' => -1,
					        'tax_query' => array(
					            'relation' => 'AND',
					            array(
					                'taxonomy' => 'book_shelves',
					                'field' => 'slug',
					                'terms' => array($shelf_slug)
					            ),
					            array(
					                'taxonomy' => 'book_formats',
					                'field' => 'slug',
					                'terms' => array($format_slug)
					            )
					        )   
					    ));
					    //$books_count = count($books);
					    echo count($books) . ', ';
					} ?>
					], <?php
				} ?><?php wp_reset_postdata(); ?>

	            ]);

	            // Options
	            var options = {
	                fontName: 'Roboto',
	                height: 400,
	                curveType: 'function',
	                fontSize: 10,
	                chartArea: {
	                    left: '5%',
	                    width: '94%',
	                    height: 350
	                },
	                pointSize: 4,
	                tooltip: {
	                    textStyle: {
	                        fontName: 'Roboto',
	                        fontSize: 13
	                    }
	                },
	                vAxis: {
	                    title: 'Books in Library',
	                    titleTextStyle: {
	                        fontSize: 13,
	                        italic: false
	                    },
	                    gridlines:{
	                        color: '#e5e5e5',
	                        count: 10
	                    },
	                    minValue: 0
	                },
	                legend: {
	                    position: 'top',
	                    alignment: 'center',
	                    textStyle: {
	                        fontSize: 13
	                    }
	                }
	            };

	            // Draw chart
	            var line_chart = new google.visualization.LineChart(line_chart_element);
	            line_chart.draw(data, options);
	        }
	    };


	    //
	    // Return objects assigned to module
	    //

	    return {
	        init: function() {
	            _googleLineBasic();
	        }
	    }
	}();


	// Initialize module
	// ------------------------------

	GoogleLineBasic.init();


</script>

<script> // Google Bars Stacked

	// Setup module
	// ------------------------------

	var GoogleBarStacked = function() {


	    //
	    // Setup module components
	    //

	    // Stacked bar chart
	    var _googleBarStacked = function() {
	        if (typeof google == 'undefined') {
	            console.warn('Warning - Google Charts library is not loaded.');
	            return;
	        }

	        // Initialize chart
	        google.charts.load('current', {
	            callback: function () {

	                // Draw chart
	                drawBarStacked();

	                // Resize on sidebar width change
	                $(document).on('click', '.sidebar-control', drawBarStacked);

	                // Resize on window resize
	                var resizeBarStacked;
	                $(window).on('resize', function() {
	                    clearTimeout(resizeBarStacked);
	                    resizeBarStacked = setTimeout(function () {
	                        drawBarStacked();
	                    }, 200);
	                });
	            },
	            packages: ['corechart']
	        });

	        // Chart settings
	        function drawBarStacked() {

	            // Define charts element
	            var bar_stacked_element = document.getElementById('google-bar-stacked');

	            // Data
	            var data = google.visualization.arrayToDataTable([
	            	<?php
	        	//first get all shelves
				$shelves2 = get_terms( 'book_shelves', array(
				    'hide_empty' => true,
				    'orderby' => 'name',
				    'order' => 'ASC',
				));

				$formats2 = get_terms( 'book_formats', array(
				    'hide_empty' => true,
				    'orderby' => 'name',
				    'order' => 'ASC',
				));

				?>['Format', <?php
				foreach ( $formats2 as $format2 ) {
				       $format2_slugs[] = $format2->slug;
				       ?>'<?php echo $format2->name; ?>', <?php
				} ?>],

				<?php

				//then create an array for easier processing
				foreach ( $shelves2 as $shelf2 ) {
				       $shelf2_slugs[] = $shelf2->slug;
				}

				//then loop over the shelves and for each one create a "query" to count the number of books
				foreach($shelf2_slugs as $shelf2_slug){ ?>
					['<?php echo get_term_by('slug', $shelf2_slug, 'book_shelves')->name; ?>', <?php
					foreach($format2_slugs as $format2_slug){
					    $books2 = get_posts(array(
					        'post_type' => 'books',
					        'posts_per_page' => -1,
					        'tax_query' => array(
					            'relation' => 'AND',
					            array(
					                'taxonomy' => 'book_shelves',
					                'field' => 'slug',
					                'terms' => array($shelf2_slug)
					            ),
					            array(
					                'taxonomy' => 'book_formats',
					                'field' => 'slug',
					                'terms' => array($format2_slug)
					            )
					        )   
					    ));
					    //$books_count = count($books);
					    echo count($books2) . ', ';
					} ?>
					], <?php
				} ?><?php wp_reset_postdata(); ?>

	            ]);


	            // Options
	            var options_bar_stacked = {
	                fontName: 'Roboto',
	                height: 400,
	                fontSize: 12,
	                chartArea: {
	                    left: '5%',
	                    width: '94%',
	                    height: 350
	                },
	                isStacked: true,
	                tooltip: {
	                    textStyle: {
	                        fontName: 'Roboto',
	                        fontSize: 13
	                    }
	                },
	                hAxis: {
	                    gridlines:{
	                        color: '#e5e5e5',
	                        count: 10
	                    },
	                    minValue: 0
	                },
	                legend: {
	                    position: 'top',
	                    alignment: 'center',
	                    textStyle: {
	                        fontSize: 12
	                    }
	                }
	            };

	            // Draw chart
	            var bar_stacked = new google.visualization.BarChart(bar_stacked_element);
	            bar_stacked.draw(data, options_bar_stacked);
	        }

	    };


	    //
	    // Return objects assigned to module
	    //

	    return {
	        init: function() {
	            _googleBarStacked();
	        }
	    }
	}();


	// Initialize module
	// ------------------------------

	GoogleBarStacked.init();

</script>

<?php get_footer(); ?>
