setTimeout(function() {
	$(window).scroll();
}, 500);  // for lazy loaded assets that are above the fold for *some* viewports

/* only for split test
setTimeout(function() {
	document.getElementById('ab-original-banner').style.opacity = '1.0';
}, 500);
*/

$('.sample-carousel .cabinet-lines').slick({
	slidesToShow: 4,
	slidesToScroll: 4,
    dots: true,
    prevArrow: '<button type="button" class="slick-prev" aria-label="Previous"><i class="fa fa-arrow-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next" aria-label="Next"><i class="fa fa-arrow-right"></i></button>',
	responsive: [
	    {
	      breakpoint: 1350,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3
	      }
	    },
	    {
	      breakpoint: 750,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    }
    ]
});

$('.kitchen-carousel .completed-kitchens').slick({
	slidesToShow: 3,
	slidesToScroll: 3,
    dots: true,
	adaptiveHeight: true,
    prevArrow: '<button type="button" class="slick-prev" aria-label="Previous"><i class="fa fa-arrow-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next" aria-label="Next"><i class="fa fa-arrow-right"></i></button>',
	responsive: [
	    {
	      breakpoint: 1350,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 750,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
    ]
});


var plp = {
	recount: function() {
		$('.filter-line-count').text($('.line:visible').length);
		
		var room = $('.filter-room input:checked').val();
		var roomText = 'Kitchen Cabinet';
		if (room === 'bathroom')
			roomText = 'Bathroom Vanity';
			
		$('.filter-line-count-room').text(roomText);
	},
	recountfilters: function($element) {
	
		var room = $('input[name=room]:checked').val();

		if ($element && $element.prop('checked') === false) {
			$filterSelector = $('.filter');
			$inputSelector = $filterSelector.find('input').add('.filter.single-choice input:checked');
		}
		else {
			$filterSelector = $('.filter').not('.active');
			$inputSelector = $filterSelector.find('input').add('.filter.single-choice input:checked');
		}
		
		$inputSelector.next('span').find('.count').text('0');

		$('.line.room-' + room + ':visible').each(function() {

			var keywords = $(this).data('keywords');
		
			$inputSelector.each(function() {

				var value = $(this).attr('value');
				var $countElement = $(this).next('span').find('.count');
				if (keywords.indexOf(value) !== -1)
					$countElement.text( parseInt($countElement.text()) + 1);
			
			})
		
		});


		// if an item is unchecked, update all unchecked filter counts in the active categories
		if ($element && $element.prop('checked') === false) {
			$('.filter.active input').not(':checked').next('span').find('.count').text('0');
		
			$('.line.room-' + room).each(function() {
	
				var keywords = $(this).data('keywords');
			
				$('.filter.active input').not(':checked').each(function() {
	
					var value = $(this).attr('value');
					
					var $countElement = $(this).next('span').find('.count');
					
					if (keywords.indexOf(value) !== -1)
						$countElement.text( parseInt($countElement.text()) + 1);
				
				})
			
			});
		}

			
	},
	refilter: function($element) {
	
		$('.popular-styles').hide();
		$('.popular-styles.' + $('input[name=room]:checked').val()).show();
		
		if (!$element)
			$('.popular-styles a').removeClass('selected');
		else if (!$element.parent().hasClass('popular-styles'))
			$('.popular-styles a').removeClass('selected');
				
		$('.line').show();

		$('.line').each(function() {
		
			var match = {}
			var $line = $(this);
			var keywords = $line.data('keywords');
			
			$('.filter input').not('input[name=price]').each(function() {
				var name = $(this).attr('name');
				
				if (name === 'price') return;	// price isn't really a filter, but rather a sort
				 
				match[name] = false; 
			});

			$('.filter input:checked').not('input[name=price]').each(function() {
				var val =  $(this).val();
				var name = $(this).attr('name');
				
				if (keywords.indexOf(val) !== -1)
					match[name] = true;
			});

			// loop through checked filters.  If one is checked and it doesn't have a match, hide line
			$('.filter input:checked').not('input[name=price]').each(function() {
				var name = $(this).attr('name');
				
				if (!match[name])
					$line.hide();
					
			});

		});


		$('.filter').not('.filter-room').each(function() {
		
			if ($(this).find('input:checked').length)
				$(this).addClass('active')
			else
				$(this).removeClass('active')
		
		});
		
				
		plp.recount();
		plp.recountfilters($element);

		$('img[data-original]').lazyload({
		    effect : 'fadeIn'
		});	
	 	$(window).scroll();

		if ($('.line:visible').length > 11)
			$('.line:visible:eq(11)').after($('.props'));			
		else
			$('.line:visible').last().after($('.props'));			
		
		
		$('.active-filters').html('').removeClass('active');
		$('.filter input:checked').not('.filter-room input, .filter-price input').each(function() {
			$('.active-filters').append('<a class="filter-tag" data-filtervalue="' + $(this).val() + '">' + $(this).val().replace('_', ' ') + '</a>');
		});
		if ($('.filter input:checked').not('.filter-room input, .filter-price input').length) {
			$('.active-filters').append('<a class="clear-filters">Clear Filters</a>');
			$('.active-filters').addClass('active');
		}
		
	}
}

$('body').on('click', '.filter-tag', function() {

	$('input[value=' + $(this).data('filtervalue') + ']').prop('checked', false);

	plp.refilter();
	plp.recountfilters();	
});
$('body').on('click', '.clear-filters', function() {
	$('.filters input').prop('checked', false);


	plp.refilter();
	plp.recountfilters();	

});

$('input[name=price]').on('click', function() {
	$('.lines div.props').hide();
	var $wrapper = $('.lines');
	var room = $('input[name=room]:checked').val();
	
	if ($(this).val() === 'low') {

		$wrapper.find('.line.room-' + room).sort(function(a, b) {
		    return +a.dataset.price - +b.dataset.price;
		}).appendTo($wrapper);
	
	}
	else {

		$wrapper.find('.line.room-' + room).sort(function(a, b) {
		    return +b.dataset.price - +a.dataset.price;
		}).appendTo($wrapper);
	
	}

	if (room === 'kitchen')
		$('.line.room-bathroom').appendTo($wrapper);
	else
		$('.line.room-kitchen').appendTo($wrapper);


	$('img[data-original]').lazyload({
	    effect : 'fadeIn'
	});	

});

plp.refilter();
plp.recountfilters();

$('.filters input').not('input[name=price]').on('click', function() {	
	if ($(this).attr('name') === 'room') {
		$('.filters input').prop('checked', false);

		var room = $('.filter-room input:checked').val();
		if (room === 'kitchen')
			$('h1').text('RTA Kitchen Cabinets')
		else if (room === 'bathroom')
			$('h1').text('RTA Bathroom Vanities')
			
		$('.close-preview').click();
	}

	plp.refilter($(this));
	
});

setTimeout(function() {
	plp.refilter( $('.filters input:checked').last() );
}, 100);

$('.preview-style').on('click', function(e) {
	e.preventDefault();
	
	if ($(this).parents('.line').hasClass('previewing')) {
		$('.preview .close').click();
		return;
	}

	var $line = $(this).parents('.line');
	
	// position the container 
	$('.preview').remove();
	$('.line').removeClass('previewing');
	$('.preview-style').text('Preview Style');

	$(this).parents('.line').addClass('previewing');
	
	if ($(this).hasClass('preview-style'))
		$(this).text('Previewing');
	
	var $line = $(this).parents('.line');
	var thisLineIndex = $line.index('.line:visible');

	// determine how many items are in each row
	var itemsPerRow = 0;
	var firstTop = $('.line:visible').first().offset().top;
	$('.line:visible').each(function() {
		if ($(this).offset().top === firstTop)
			itemsPerRow++;
		else
			return false;
	});

	var insertAt = itemsPerRow - (thisLineIndex % itemsPerRow) + thisLineIndex;
	var arrowPosition = Math.round(((thisLineIndex % itemsPerRow) * (100 / itemsPerRow)) + ((100 / itemsPerRow / 2)));

	if ($('.props:visible').length && thisLineIndex > $('.props:visible').index('.lines :visible')) {
		insertAt = itemsPerRow - ((thisLineIndex - 1) % itemsPerRow) + (thisLineIndex - 1);
		arrowPosition = ((((thisLineIndex -1) % itemsPerRow) * (100 / itemsPerRow)) + ((100 / itemsPerRow / 2))).toFixed();
	}
	
	if (insertAt >= $('.line:visible').length - 1) {
		insertAt = $('.lines > :visible').length - 1;

		arrowPosition = ((((thisLineIndex) % itemsPerRow) * (100 / itemsPerRow)) + ((100 / itemsPerRow / 2))).toFixed();
		//arrowPosition--;
	}
	
	// determine where to place the floating preview
	$('.line:visible:eq(' + (insertAt - 1) + ')').after('<div class="preview arrow-' + arrowPosition + '"></div>');
	
	
	// fill the content
	var html =  '<a class="close"></a>';
	html += '<div class="img-wrapper">';
	html += '<img src="' + $line.data('roomimage') + '" alt="' + $line.find('h2').text() + ' room image">';
	//html += '<img src="' + $line.find('.img-wrapper img').first().data('original') + '" alt="' + $line.find('h2').text() + ' sample door">';	
	html += '</div>';
	html += '<div class="preview-content">';
	html += '<h2>' + $line.find('h2').text() + '</h2>';
	
	if ($line.find('.quick-ship').length)
		html += '<p class="quick-ship">This cabinet line leaves the warehouse within 3-5 business days!</p>';
	
	if ($line.data('desc').indexOf('<p>') === -1)
		html += '<p>' + $line.data('desc') + '</p>';
	else
		html += $line.data('desc');
	
	html += '<div class="pricing product-price">Basic Kitchen Starting at <span class="strike">$' + $line.data('kitchen_price_slash') + '</span> <span class="price">$' + $line.data('kitchen_price') + '</span></div>';

	html += '<div>';
	html += '<a class="button shop" href="' + $line.data('wc_url') + '">Shop Cabinet</a>';
	html += '<a class="button order-sample" href="/addtoCart?dbsku=' + $line.data('model') + '">Order Sample Door</a>';
	html += '</div>';

	html += '<div><a class="close-preview">Close preview</a></div>';

	html += '</div>';
	
	$('<img/>')[0].src = $line.data('roomimage'); // preload image
	
	$('.preview').hide().append(html);
	$('.preview').slideUp().delay(100).slideDown(function() {

		// scroll preview box into viewport, if not already

		if ($('.preview').offset().top < $(window).scrollTop() + $('.preview').height())
			return;
			
	     $('html, body').animate({
	       scrollTop: $('.preview').offset().top - $(window).height() + $('.preview').height() + 48 // 48 for height of caret and spacing
	     }, 250);
	
	}); // give time for the image preload
	
});

$('body').on('click', '.close-preview, .preview .close', function(e) {
	e.preventDefault();
	$('.preview').slideUp('fast', function() { $('.preview').remove(); });
	$('.line.previewing').find('.preview-style').text('Preview Style');
	$('.line.previewing').removeClass('previewing');
});



$('.line').on('mouseover', function() {
	$(window).scroll();
});

$('.back-to-top').on('click', function () {
   $('html, body').animate({scrollTop: 0}, 1000);
});

$('body').addClass('js');

/*
$('.room-selector div').click(function(e) {
	e.stopPropagation();
});
*/


$('.filter-room span').on('click', function() {
	var room = $(this).text().toLowerCase();	

	if (room === 'bathroom') {
		$('.room-selector').children('div').removeClass().addClass('bathroom');
		$('input[value=bathroom]').prop('checked', true).click();
		$('.filter-style legend').text('Vanity Style');
		$('.button.shop').text('Shop Vanity');		
	}
	else {
		$('.room-selector').children('div').removeClass().addClass('kitchen');
		$('input[value=kitchen]').prop('checked', true).click();
		$('.filter-style legend').text('Cabinet Style');
		$('.button.shop').text('Shop Cabinet');
	}	
});

$('.room-selector').click(function() {
	var room = $(this).children('div').attr('class');
	
	if (room === 'kitchen') {
		$(this).children('div').removeClass().addClass('bathroom');
		$('input[value=bathroom]').prop('checked', true).click();
		$('.filter-style legend').text('Vanity Style');
		$('.button.shop').text('Shop Vanity');
	}
	else {
		$(this).children('div').removeClass().addClass('kitchen');
		$('input[value=kitchen]').prop('checked', true).click();
		$('.filter-style legend').text('Cabinet Style');
		$('.button.shop').text('Shop Cabinet');
	}	

	$(window).scroll();
});

if (location.href.indexOf('Bathroom') !== -1)
	$('input[value=bathroom]').next().click();


$('.filters legend').on('click', function() {
	$(this).parents('form').toggleClass('expanded');
	plp.refilter();
});

$(window).on('scroll', function() {

	var scroll = $(window).scrollTop();
	
	if ($('.filter-room-sort:visible').length) {
		if (scroll > 386)
			$('.filter-room-sort').addClass('fixed');
		else
			$('.filter-room-sort').removeClass('fixed');	
	}

	if ($(window).width() < 1024) return;


	// desktop only
	if (scroll > 1000)
		$('.back-to-top').fadeIn();
	else	
		$('.back-to-top').fadeOut();


	/* per Tom, no more sticky side menu 
	if ($(document).height() < 3000) {
		$('.filters .sticky').removeClass('fixed');
		return;
	}
	
	// if filters height > viewport height, skip
	if ($('.filters').height() > $(window).height() - 150  ||  $('.filters .sticky').height() > $(window).height() - 150) {
		$('.filters .sticky').removeClass('fixed');
		return;
	}
	
	if (scroll > 272 && scroll < ($(document).height() - 2500))
		$('.filters .sticky').addClass('fixed');
	else
		$('.filters .sticky').removeClass('fixed');
	*/
	

}).scroll();

$(window).on('resize', function() {
	if ($(window).width() <= 1024) {
	
		$('.sticky .filter').not('.filter-room').removeClass('expanded');
	
	}
	else {
		$('.filters').show();
		$('.filter-single').addClass('expanded');
		$(window).scroll();
	}
}).resize();

$('.sort-filter').on('click', function() {
	$('.filters').show();
});
$('.close-filter, .filters .button').on('click', function() {
	$('.filters').hide();
});

$('.popular-styles a').on('click', function(e) {
	e.preventDefault();
	
	$('.filter input').not('.filter-room input').prop('checked', false);
	plp.refilter();
	
	if ($(this).data('color'))
		$('.filter [value=' + $(this).data('color') + ']').prop('checked', true);

	if ($(this).data('cabstyle'))
		$('.filter [value=' + $(this).data('cabstyle') + ']').prop('checked', true);

	$('.popular-styles a').removeClass('selected');
	$(this).addClass('selected');

	plp.refilter($(this));
});

$('.quick-ship-prop').on('click', function(e) {
	
	if (!$('input[value=quick_ship]').prop('checked')) {
		e.preventDefault();

		$('.filters input').prop('checked', false);
		
		$('.filter').not('.filter-single, .filter-room, .filter-price').removeClass('expanded');
		
		$('input[value=quick_ship]').click();
		
		$("html, body").animate({ scrollTop: $('.filters').offset().top - $('body > header').height() - 16 });
	}
	
});
	

var fkdhPopHeight = 450;
if ($(window).width() < 600)
	fkdhPopHeight = 520;
	
$('.button-fkdh').colorbox({ inline: true, href: '#design-form', width: 600, height: fkdhPopHeight, maxWidth: '90%', maxHeight: '90%', opacity: .5 });

$('input[data-checked]').click();


$('body').on('click', '.order-sample', function(e) {
	e.preventDefault();

	var $line;
	if ($(this).parents('.line').length)
		$line = $(this).parents('.line');
	else
		$line = $('.line.previewing');	
		
	var title = $line.find('h2').text();
	var html = '<div class="sample-order-wrapper">';
	html += '<div class="sample-left"><img src="' + $line.data('sample_image') + '" alt="' + title + '" height="256"></div>';
	html += '<div class="sample-right"><h3>' + title + ' Sample</h3><p class="product-price">Price: ';
	
	if ($line.data('sample_model') === 'MBLUESAMPLE')	
		html += '$19.99';
	else
		html += '<span class="strike">$20</span> $9.99';
	
	html += '</p>';
	
	html += '<p>Free Shipping for up to 3 sample doors.<br>Fully refundable.<br>Ships out next business day.</p>'; 

	if ($line.find('.order-sample.disabled').length === 0)
		html += '<form action="' + $line.data('sample_url') + 'addtoCart"><fieldset><legend>Add ' + title + ' Sample Door to Cart</legend><input type="hidden" name="quantity" value="1"><input type="submit" class="button" value="Add to Cart"></fieldset></form>';
	else
		html += '<p class="warn">This sample door is currently out of stock.</p>';
		
	html += '</div>';

	
	$.colorbox({ html: html, width: 600, height: 360, maxWidth: '90%', maxHeight: '90%', opacity: .75 });

});

$('.blogs .container').slick({
	slidesToShow: 3,
	slidesToScroll: 3,
    dots: false,
    prevArrow: '<button type="button" class="slick-prev" aria-label="Previous"><img src="//assets.rtacabinetstore.com/assets/img/ico/slider-arrow-left.png" alt="Previous"></button>',
    nextArrow: '<button type="button" class="slick-next" aria-label="Next"><img src="//assets.rtacabinetstore.com/assets/img/ico/slider-arrow-right.png" alt="Next"></button>',
	responsive: [
	    {
	      breakpoint: 1100,
	      settings: {
		    dots: true,
	        slidesToShow: 2,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 750,
	      settings: {
		    dots: true,
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
    ]
});