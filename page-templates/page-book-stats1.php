<?php
/**
 * Template Name: Ninja Book Stats 1
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

	<div class="container-fluid" id="content">

		<div class="chart-container">
			<div class="chart" id="google-bar"></div>
		</div>

	    </div>

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<script>

/* ------------------------------------------------------------------------------
 *
 *  # Google Visualization - bars
 *
 *  Google Visualization bar chart demonstration
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var GoogleBarBasic = function() {


    //
    // Setup module components
    //

    // Bar chart
    var _googleBarBasic = function() {
        if (typeof google == 'undefined') {
            console.warn('Warning - Google Charts library is not loaded.');
            return;
        }

        // Initialize chart
        google.charts.load('current', {
            callback: function () {

                // Draw chart
                drawBar();

                // Resize on sidebar width change
                $(document).on('click', '.sidebar-control', drawBar);

                // Resize on window resize
                var resizeBarBasic;
                $(window).on('resize', function() {
                    clearTimeout(resizeBarBasic);
                    resizeBarBasic = setTimeout(function () {
                        drawBar();
                    }, 200);
                });
            },
            packages: ['corechart']
        });

        // Chart settings
        function drawBar() {

            // Define charts element
            var bar_chart_element = document.getElementById('google-bar');

            // Data
            var data = google.visualization.arrayToDataTable([
                ['Types', 'Books', 'Documents', 'Podcasts', 'Sermons', 'Social', 'Website'],

                <?php 
				// Get a list of categories and extract their names
				$terms = get_terms( 'resource_types', 'hide_empty=0' );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){ ?>
					['Resources',
					<?php foreach ( $terms as $term ) { echo $term->count;?>, <?php } ?> ] <?php
				}
				?>
            ]);


            // Options
            var options_bar = {
                fontName: 'Roboto',
                height: 400,
                fontSize: 12,
                chartArea: {
                    left: '5%',
                    width: '94%',
                    height: 350
                },
                tooltip: {
                    textStyle: {
                        fontName: 'Roboto',
                        fontSize: 13
                    }
                },
                vAxis: {
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
            var bar = new google.visualization.BarChart(bar_chart_element);
            bar.draw(data, options_bar);

        }
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _googleBarBasic();
        }
    }
}();


// Initialize module
// ------------------------------

GoogleBarBasic.init();



</script>

<?php get_footer(); ?>
