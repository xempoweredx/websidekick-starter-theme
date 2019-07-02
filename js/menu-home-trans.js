(function( $ ) {

  $(window).scroll(function(){

    	if ($(window).scrollTop() > 200){
		    $('.home .main-menu-desktop').removeClass( 'nav-trans' );
		}
		else {
		    $('.home .main-menu-desktop').addClass( 'nav-trans' );
		}

 	});



})( jQuery );