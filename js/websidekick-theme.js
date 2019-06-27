// For Dev only
(function( $ ) {

 	// To prevent "Added non-passive event listener to a scroll-blocking 'touchstart ..." error in Chrome for .click functions
 	$.event.special.touchstart = {
  		setup: function( _, ns, handle ){
    		if ( ns.includes("noPreventDefault") ) {
      			this.addEventListener("touchstart", handle, { passive: false });
    		} 
    		else {
      			this.addEventListener("touchstart", handle, { passive: true });
    		}
  		}
	};

	//$( '.nav-links' ).addClass( 'mt-3 mb-4' );
	//$( '.nav-links a' ).addClass( 'btn btn-sm md_btn-outline-blue-grey rounded-pill' );
	$( 'aside.widget_search' ).addClass( 'mb-4' );



})( jQuery );