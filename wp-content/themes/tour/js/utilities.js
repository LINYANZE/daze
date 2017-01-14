jQuery( document ).ready(function() {

	// add submenu icons class in main menu (only for large resolution)
	if (tour_IsLargeResolution()) {
	
		jQuery('#navmain > div > ul > li:has("ul")').addClass('level-one-sub-menu');
		jQuery('#navmain > div > ul li ul li:has("ul")').addClass('level-two-sub-menu');										
	}

	jQuery('#navmain > div').on('click', function(e) {

		e.stopPropagation();

		// toggle main menu
		if (tour_IsSmallResolution() || tour_IsMediumResolution()) {

			var parentOffset = jQuery(this).parent().offset(); 
			
			var relY = e.pageY - parentOffset.top;
		
			if (relY < 36) {
			
				jQuery('ul:first-child', this).toggle(400);
			}
		}
	});

	jQuery("#navmain > div > ul li").mouseleave( function(event) {
    event.preventDefault();
		if (tour_IsLargeResolution()) {
			jQuery(this).children("ul").stop(true, true).css('display', 'block').slideUp(300);
		}
	});
	
	jQuery("#navmain > div > ul li").mouseenter( function(event) {

    event.preventDefault();
		if (tour_IsLargeResolution()) {

			var curMenuLi = jQuery(this);
			jQuery("#navmain > div > ul > ul:not(:contains('#" + curMenuLi.attr('id') + "')) ul").hide();
		
			jQuery(this).children("ul").stop(true, true).css('display','none').slideDown(400);
		}
	});

	if (typeof jQuery(".pgwSlider").pgwSlider == 'function') {

        jQuery('.pgwSlider').pgwSlider({
									displayControls : true,
									autoSlide : true,
									displayList : true,
									displayControls : true
							});
	}
});

function tour_IsSmallResolution() {

	return (jQuery(window).width() <= 360);
}

function tour_IsMediumResolution() {
	
	var browserWidth = jQuery(window).width();

	return (browserWidth > 360 && browserWidth < 800);
}

function tour_IsLargeResolution() {

	return (jQuery(window).width() >= 800);
}

jQuery(document).ready(function () {

  jQuery(window).scroll(function () {
	  if (jQuery(this).scrollTop() > 100) {
		  jQuery('.scrollup').fadeIn();
	  } else {
		  jQuery('.scrollup').fadeOut();
	  }
  });

  jQuery('.scrollup').click(function () {
	  jQuery("html, body").animate({
		  scrollTop: 0
	  }, 600);
	  return false;
  });

});
