$window = $(window).height();
// $('#welcome').css('min-height', $window);
// $('#about').css('min-height', $window);

$(document).ready(function() {
  
	// Affix Navigation
	// var $work_nav = $('#work_nav');
	// var offsetTop = $work_nav.offset().top - 55;
	// $('#work_nav .nav-inner').affix({
 //    offset: {
 //      top: offsetTop,
 //    }
 //  });	



	// Scroll to Anchor
  $('.nav a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
	

	
	// The Kinetoscope - the group of rotating images on the front.
	$kinetoscope = $('#kinetoscope');
	$kinetoscope.cycle({
		timeout: 50
	});
	$kinetoscope.click(function () {
		$(this).cycle('next');
	});
	
	
	
	
	// The Work — Slideshows for displaying work examples
	$('.work').cycle({
		next: '.work',
		prev: '.work',
		timeout: '1000',
	});
	$('.work').click(function () {
		$(this).cycle('next');
	});
  
});