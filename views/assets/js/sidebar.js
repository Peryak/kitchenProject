var ExperiensiGlobal = {
	init: function() {
		this.swipeableEffect();
	},

	/**
	 * This function creates the swipeable effect on the sidebar menu
	 */	
	swipeableEffect: function(counter) {
		$('.menu-icon')[0].addEventListener('touchend', function(e) {
			$('.menu-text').toggleClass('on');
		});
		isToggle = false;
		$('.menu-icon').click(function() {
			if (isToggle) {
				$('.menu-text').hide();
				  $( "#page-wrapper" ).animate({
					    marginLeft: "+=200"
					  }, 400, function() {
						  $('.menu-text').show();
						  $('.iconswipeablebtn-clara_global').toggleClass('fa fa-chevron-right fa-lg fa fa-chevron-left fa-lg');
						  $('.titleswipeablebtn-clara_global').show();
						  $('.sidebar ul li').css('border-bottom', '1px solid #e7e7e7');
						  $('.sidebartitle-clara_global').css('width', '250px');
						  $('.swipeablebtn-clara_global').css('width', '250px');
						  $('ul.nav.nav-second-level.collapse').css({
							  'position': 'relative',
							  'left': '0px',
							  'top': '0px'
								  });
						  $('.navbar .sidebar .sidebar-nav .nav-second-level > li > a').css('padding-left', '37px');
						  $('.navbar .sidebar .sidebar-nav .nav-second-level > li > .nav-third-level.collapse > li > a').css('padding-left', '52px');
						  });
			} else {
				$('.menu-text').hide();
				  $( "#page-wrapper" ).animate({
					    marginLeft: "-=200"
					  }, 400, function() {
					    // Animation complete.
					  });
				  $('.titleswipeablebtn-clara_global').hide();
				  $('.iconswipeablebtn-clara_global').toggleClass('fa fa-chevron-left fa-lg fa fa-chevron-right fa-lg');
				  $('.sidebar ul li').css('border-bottom', 'none');
				  $('.sidebartitle-clara_global').css('width', '50px');
				  $('.swipeablebtn-clara_global').css('width', '50px');
				  $('ul.nav.nav-second-level.collapse').css({
					  'position': 'absolute',
					  'z-index': '99',
					  'left': '52px',
					  'top': '0px'
						  });
				  $('.navbar .sidebar .sidebar-nav .nav-second-level > li > a').css('padding-left', '10px');
				  $('.navbar .sidebar .sidebar-nav .nav-second-level > li > .nav-third-level.collapse > li > a').css('padding-left', '30px');
				  }
			isToggle = !isToggle;
		});
	}
};

$(document).ready(function(e) {
	ExperiensiGlobal.init();
});