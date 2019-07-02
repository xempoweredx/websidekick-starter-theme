(function( $ ) {

$(window).scroll(function(){

	if ($(window).scrollTop() > 50){
	    $('.main-menu-desktop').css( 'opacity', '0' );
	}
	else {
	   $('.main-menu-desktop').css( 'opacity', '1' );
	}

	if ($(window).scrollTop() > 400){
	    $('.main-menu-desktop').addClass( 'fixed-top' );
	    $('.main-menu-desktop').css( 'opacity', '1' );
	}
	else {
	    $('.main-menu-desktop').removeClass( 'fixed-top' );
	}

});

})( jQuery );