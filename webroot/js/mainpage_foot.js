


// set up horizontal scroll
var setupFeaturedBoxes = function () {
	var buttons = {
		previous: {
			enabled: 'images/arrow-left.jpg',
			hover: 'images/arrow-left.jpg'
		},
		next: {
			enabled: 'images/arrow-right.jpg',
			hover: 'images/arrow-right.jpg'
		}
	};
	var featuredContentWidth = 197;
	var featuredContentScrollPrefs = {
		speed: 800,
		axis: 'x'
	};
	jQuery('.featuredBox').each( function (i) {
		var featuredBox = jQuery(this);
		featuredBox
			.find('.scrollArrow')
				.filter('.next')
					.hover(
						function () {
							jQuery(this)
								.attr( 'src', buttons.next.hover )
								.css( 'cursor', 'pointer' )
							;
						},
						function () {
							jQuery(this)
								.attr( 'src', buttons.next.enabled )
								.css( 'cursor', 'default' )
							;
						}
					)
					.click( function() {
						featuredBox.find('.featuredContent').scrollTo(
							'+=' + featuredContentWidth + 'px',
							featuredContentScrollPrefs
						);
						return false;
					})
				.end()
				.filter('.prev')
					.hover(
						function () {
							jQuery(this)
								.attr( 'src', buttons.previous.hover )
								.css( 'cursor', 'pointer' )
							;
						},
						function () {
							jQuery(this)
								.attr( 'src', buttons.previous.enabled )
								.css( 'cursor', 'default' )
							;
						}
					)
					.click( function() {
						featuredBox.find('.featuredContent').scrollTo(
							'-=' + featuredContentWidth + 'px',
							featuredContentScrollPrefs
						);
						return false;
					})
		;
	});
	jQuery('.featuredBox .featuredContent .featuredDisplayDiv').each( function (i) {
		jQuery(this).css( 'width', ( featuredContentWidth * jQuery(this).find('ul li').size() ) + 'px' );
	});
};

jQuery(document).ready(function(){


// set up horizontal scroll
	setupFeaturedBoxes();

});
