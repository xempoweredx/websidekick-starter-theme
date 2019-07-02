(function( $ ) {
	'use strict'

	$('[data-toggle="offcanvas"]').on('click', function () {
    	$('.offcanvas-collapse').toggleClass('open');
    	$('.fab-toggler-wrap').toggleClass('menu-open').toggleClass('menu-closed');

  })

	var position = $(window).scrollTop(); 

	// should start at 0

	$(window).scroll(function() {
	    var scroll = $(window).scrollTop();
	    if(scroll > position) {
	        console.log('scrollDown');
	        $('.icon-placeholder').animate({width: '27px'}, 100);
	        $('.scroll-menu-text').animate({right: '16px', opacity: '0'}, 100); 
	    } else {
	         console.log('scrollUp');
	         $('.icon-placeholder').animate({width: '92px'}, 100);
	         $('.scroll-menu-text').animate({right: '46px', opacity: '1'}, 100); 
	    }
	    position = scroll;
	});

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

})( jQuery );