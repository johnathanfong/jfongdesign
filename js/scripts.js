$(function(){

	console.log("It's working");
	// SMOOTH SCROLL PLUGIN
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	// END SMOOTH SCROLL

	// TOGGLE CLASS

		function toggleShow() {
			$('#menu-main-menu').toggleClass('show');
	        console.log('working')
		}
		
		$(".mobile-menu").on("click", toggleShow);
		$("#menu-main-menu li a").on("click", toggleShow);

	// END TOGGLE CLASS
});

