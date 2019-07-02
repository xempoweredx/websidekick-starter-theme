<?php
/**
 * Declaring widgets
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


// Register and load the widget
function sidekick_load_widget() {
    register_widget( 'sidekick_widget' );
}
add_action( 'widgets_init', 'sidekick_load_widget' );
 
// Creating the widget 
class sidekick_widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'sidekick_widget', 
 
// Widget name will appear in UI
__('Sidekick Widget', 'understrap'), 
 
// Widget description
array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'understrap' ), ) 
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
//$title = apply_filters( 'widget_title', $instance['title'] );
 
// before and after widget arguments are defined by themes
//echo $args['before_widget'];
//if ( ! empty( $title ) )
//echo $args['before_title'] . $title . $args['after_title'];
 
// This is where you run the code and display the output
echo esc_html__( $instance['text'], 'understrap' );
//echo $args['after_widget'];
}
         
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'text' ] ) ) {
$text = $instance[ 'text' ];
}
else {
$text = __( 'New text', 'understrap' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>" type="text" value="<?php echo esc_attr( $text ); ?>" />
</p>
<?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['text'] = ( ! empty( $new_instance['text'] ) ) ? strip_tags( $new_instance['text'] ) : '';
return $instance;
}
} // Class sidekick_widget ends here



/*add_action( 'widgets_init', 'sidekick_widgets_init' );*/

if ( ! function_exists( 'sidekick_widgets_init' ) ) {
	/**
	 * Initializes themes widgets.
	 */
	function sidekick_widgets_init() {

		register_sidebar(
			array(
				'name'          => __( 'Sidekick Hero Slider', 'understrap' ),
				'id'            => 'sidekickhero',
				'description'   => __( 'Sidekick Hero slider area. Place two or more widgets here and they will slide!', 'understrap' ),
				'before_widget' => '<div class="carousel-item"><div class="top-bg-img" style="background-image:(',
				'after_widget'  => ')"></div>',
				'before_title'  => '',
				'after_title'   => '',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Sidekick Canvas', 'understrap' ),
				'id'            => 'sidekickcanvas',
				'description'   => __( 'Full size canvas hero area for Bootstrap and other custom HTML markup', 'understrap' ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
			)
		);

	}
} // endif function_exists( 'sidekick_widgets_init' ).
