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
			navText: ["<img src='/wp-content/themes/tmwf/img/icons/slider-nav-left.png'>","<img src='/wp-content/themes/tmwf/img/icons/slide-nav-right.png'>"],
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
		
		$('.wpcf7-exclusive-checkbox .wpcf7-list-item.last').on('click', $('input'), function(){

			$('span.wpcf7-form-control-wrap.other').css('display', 'block');

		});

		$('.wpcf7-exclusive-checkbox .wpcf7-list-item:not(.last)').on('click', $('input'), function(){

			$('span.wpcf7-form-control-wrap.other').css('display', 'none');

		});

		$('.shadow .search').on('click', function(){
			$('.search-wrapper').toggleClass('active');
		});

		$('.search-header .close a').on('click', function(){
			$('.search-wrapper').toggleClass('active');
		});
		
		var timeout = null;
		$('#search-input').on('keyup', function () {

			var searchInput = $(this).val();
			clearTimeout(timeout);
			var counter = 0;
			
			timeout = setTimeout(function(){
				if (searchInput) {
					$('.search-results ul').children().fadeOut(500, function () {
						$('.search-results ul').empty();
					});
					$.getJSON('http://tmwf.lo/wp-json/wp/v2/posts?search=' + searchInput, function (result) {
						console.log(result);
						if (result.length) {
							$.each(result, function (i, field) {
								console.log(field);
								var response = '<li><a href="'+field.guid.rendered+'"><h5>'+field.title.rendered+'</h5><p>'+field.content.rendered.replace(/(<([^>]+)>)/ig, "").substr(0, 175)+'...</p></a></li>';
								// var response = '<li><a href="' + field.guid.rendered + '"><h5 class="orange">' + field.title.rendered + ' - Blog</h5><p>' + field.content.rendered.replace(/(<([^>]+)>)/ig, "").substr(0, 175) + '...</p></a></li>';​
								$('.search-results ul').append(response).hide().fadeIn(500);
							});
						} else {
							console.log('no response');
							++counter;
						}
					});
				}
			}, 500);
		});

	});
	
})(jQuery, this);
