(function( $ ) {
	'use strict'

	$('[data-toggle="offcanvas"]').on('click', function () {
    	$('.offcanvas-collapse').toggleClass('open');
    	$('.fab-toggler-wrap').toggleClass('menu-open').toggleClass('menu-closed');

    	//$('.toggler-icon .menu-icon').toggleClass('d-none');

  })

})( jQuery );