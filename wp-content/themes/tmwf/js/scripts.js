(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

		$('.slider__container')
		.on('changed.owl.carousel initialized.owl.carousel', function(event) {
			$(event.target)
			  .find('.owl-item').removeClass('last')
			  .eq(event.item.index + event.page.size - 1).addClass('last');
		  }).owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			dots: false,
			autoplay:true,
			autoplayTimeout:10000,
			autoplayHoverPause:true,
			navText: ["<img src='/wp-content/themes/tmwf/img/icons/slider-nav-left.png'>","<img src='wp-content/themes/tmwf/img/icons/slide-nav-right.png'>"],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:4
				}
			}
		});

		$('.event-slider').owlCarousel({
            loop:true,
			nav:true,
			items: 1,
			dots: false,
			navText: ["<img src='wp-content/themes/tmwf/img/icons/slider-nav-left-white.png'>","<img src='/wp-content/themes/tmwf/img/icons/slide-nav-right-white.png'>"],
		});
		
		$('.fullslider-slider').owlCarousel({
            loop:true,
			nav:true,
			items: 1,
			dots: false,
			navText: ["<img src='/wp-content/themes/tmwf/img/icons/slider-nav-left.png'>","<img src='/wp-content/themes/tmwf/img/icons/slide-nav-right.png'>"],
        });
		
	});
	
})(jQuery, this);
