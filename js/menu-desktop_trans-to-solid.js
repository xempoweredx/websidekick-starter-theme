(function( $ ) {

  $(window).scroll(function(){

    	if ($(window).scrollTop() > 200){
		    $('.home .main-menu-desktop').removeClass( 'navbar-top-trans' );
		    $('.main-menu-desktop').addClass( 'fixed-top' );
		}
		else {
		    $('.home .main-menu-desktop').addClass( 'navbar-top-trans' );
		    $('.main-menu-desktop').removeClass( 'fixed-top' );
		}

 	});



})( jQuery );