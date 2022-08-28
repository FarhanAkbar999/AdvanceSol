var words = '';

function rebuildCart(cartData) {
	var html = '';
	var total = 0;
	var totalQty = 0;

	if (cartData.length)
		jq('#page-cart').removeClass('item-count-0');

	jq.each(cartData, function(index, item) {
		total += (item['quantity'] * item['price']);
		totalQty += item['quantity'];

		html += '<div class="cart-item">';
			html += '<input type="text" value="' + item['quantity'] + '" title="Quantity for ' + item['sku'] + '" name="' + item['id'] + '|||' + item['options'] + '"' + (item['price'] == 0 ? ' readonly' : '') + '>';
			html += '<span class="cart-name">' + item['name'] + '</span>';
			html += '<span class="price-wrapper">';
				html += '<span class="price">$' + (item['price'] * item['quantity']).formatMoney(2, '.', ',') + '</span>';
				html += '<a class="delete" data-value="' + item['id'] + '"><i class="fa fa-times"></i></a>';
			html += '</span>';
		html += '</div>';
	});

	if (typeof sessionStorage !== 'undefined') {
		sessionStorage.setItem('cart_qty', totalQty);
	}
	jq('.cart-bubble').remove();
	jq('.nav-cart').append('<span class="cart-bubble">' + totalQty + '</span>');

	//html += '<input type="hidden" name="ajax" value="1">';
	html += '<input type="submit" name="updateCart:method" value="Update Cart">';

	jq('.cart-item, #page-cart .total').remove();

	jq('#page-cart-inner form').html(html);
	jq('#page-cart-inner form').append('<span class="total" data-total="' + total + '">Subtotal: $' + total.formatMoney(2, '.', ',') + '</span>');


	// remove from cart any word found in title
	if (words !== '') {
		words.push('Cabinet');
		jq('.cart-name').each(function() {
			var prodname = jq(this).text();
			jq.each(words, function(index, word) {
				prodname = prodname.replace(word, '');
			});

			jq(this).text(prodname);
		});
	}


	if (jq('.affirm-as-low-as').length && total >= 250) {
		jq('.affirm-site-modal').remove();

		var programs = {
			'zero': {
				250: 'promo_set_zero_3_6_12',
				2000: 'promo_set_zero_6_12_36',
				2500: 'promo_set_zero_12_18_36'
			},
			'ib': {
				250: 'promo_set_std_3_6_12',
				2000: 'promo_set_std_6_12_18',
				2500: 'promo_set_std_12_24_36'
			}
		};

		var cProgram = (document.cookie.indexOf('fin_ib') === -1 ? 'zero' : 'ib');
		var dollarProgram = 250;
		if (total >= 2500)
			dollarProgram = 2500;
		else if (total >= 2000)
			dollarProgram = 2000;

		var selectedProgram = programs[cProgram][dollarProgram];

		var programHTML = '';

		// remove the condition when ready
		programHTML = 'data-promo-id="' + selectedProgram + '"';

		jq('.affirm-wrapper').remove();
		jq('.yes-bread').append('<div class="affirm-wrapper" />');
		jq('.affirm-wrapper').html('<span class="affirm-as-low-as" ' + programHTML + ' data-affirm-type="text" data-amount="' + Math.ceil(total * 100) + '"></span><a class="low-price" href="/lowest-price-guarantee/">Low Price Guarantee</a>');
		affirm.ui.refresh();
	}

	if (total)
		jq('#page-cart-inner input[type=submit]').css('opacity', 1);
	else
		jq('#page-cart-inner input[type=submit]').css('opacity', 0);

	if (jq('.cart-item').length > 5 || jq('#page-cart-inner').html().indexOf('Sample Door') !== -1)
		jq('.sidebar-sample').fadeOut();
	else
		jq('.sidebar-sample').fadeIn();
}

(function($) {

	$('.free-kit-design-form a').on('click', function(e) {
		e.preventDefault();

		  $('html, body').animate(
		    {
		      scrollTop: $($(this).attr('href')).offset().top,
		    },
		    500,
		    'linear'
		  )
	});

	if (location.search.indexOf('ts=') !== -1) {
		// really make sure the cart doesn't cache, load it again
		$.ajax({
			url: 'jsoncart',
			context: this,
			dataType: 'json',
			success: function(response) {
				rebuildCart(response);
			}
		});
	}

	$('.thumb-image').click(function() {
		var href = $(this).data('original');
		if (!href)
			href = $(this).attr('src');

		if (href.indexOf('/thumb/') !== -1)
			href = href.replace('/thumb/', '/');
		if (href.indexOf('image_thumb') !== -1)
			href = href.replace('image_thumb', 'image');

		$.colorbox({ href: href, photo: true, opacity: .5, maxWidth: '90%', maxHeight: '90%', scrolling: false });
	});

	$('body').on('click', '.low-price', function(e) {
		e.preventDefault();
		$.colorbox({ href: $(this).attr('href') + '?iframe=1', iframe: true, width: 800, height: 500, maxWidth: '90%', maxHeight: '90%', opacity: .5 });
	});

	if (typeof $.fn.meanmenu !== 'undefined' && !$('.mean-bar').length) {
		$('nav').meanmenu();
	}

	// hide #back-top first
	$("#back-top").hide();

	// fade in #back-top
	$(window).scroll(function () {
		if ($(this).scrollTop() > 600 && $(window).width() > 1200) {
			$('#back-top').fadeIn();
		} else {
			$('#back-top').fadeOut();
		}
	});

	// scroll body to 0px on click
	$('#back-top a').click(function (e) {
		e.preventDefault();

		$('body,html').animate({
			scrollTop: 1000
		}, 800);
	});

	$('.quick-checkout-prod-desc').click(function() {
		if ($(this).children('a').length)
			return;

		location.href = $(this).siblings('.item-link').attr('href');
	});

	$('body').on('click', '.item-link, .more-detail', function(e) {
		e.preventDefault();
		var params = 'iframe=1&w=800&nol=1&detail_only=1';
		if ($(this).attr('href').indexOf('sample') === -1)
			params += '&include_parent=1';

		if ($(this).attr('href').indexOf('?') !== -1)
			params = '&' + params;
		else
			params = '?' + params;

		$.colorbox({ href: $(this).attr('href') + params, iframe: true, width: 850, height: '85%', maxWidth: '90%', opacity: .5 });
	});

	if ($(window).width() > 600) {
		$('.block-item').hover(function() {
			if ($(this).parent().hasClass('sample-door')) return;
			if ($(this).find('.item-link').text().indexOf('Sample Door') !== -1) return;

			if ($(this).attr('id') == 'block-EXPRESSKIT') return;
			if ($(this).attr('id') == 'block-StainStick') return;

			$(this).find('.block-desc').append('<a class="more-detail" href="' + $(this).find('.item-link').attr('href') + '">more detail</a>');

			if ($(this).find('.item-link').text().indexOf('Vanity') !== -1)
				return;

			if ($(this).find('.item-link').text().indexOf('Cabinet') !== -1 || $(this).find('.item-link').text().indexOf('Three Drawer') !== -1) {

				$(this).find('.block-desc').append('<a class="upgrade-product rta-button-flat call">accessorize</a>');

			}

		}, function() {
			$(this).find('.more-detail,.upgrade-product').remove();
		});
	}


	// if there is sale text, remove any 'additional' messaging to avoid confusion
	if ($('.sale-text').length && $('#cotm-promo-message').length) {
		$('#cotm-promo-message').html( $('#cotm-promo-message').html().replace('additional', '' ).replace('>an ', '>'));
	}


	if ($('#page-cart').length) {

		$(window).scroll(function() {
			if ($(window).width() <= 960)
				return;

			var elPos = ( ($('#page-listing').offset())['top']);
			var windowPos = $(window).scrollTop() + $(window).height();
			var pageListingBottom = ( ($('#page-listing').offset())['top'] + $('#page-listing').height() );

			if (windowPos > pageListingBottom + 300) {
				$('#page-cart').removeClass('cart-fixed').hide();
			}
			else if (windowPos > elPos + 600) {
				$('#page-cart').addClass('cart-fixed').css({ position: 'fixed', bottom: '4%', top: 'auto', right: 'auto' });
				$('#page-cart').show();
			}
			else {
				$('#page-cart').removeClass('cart-fixed').css({ position: 'static', bottom: 'auto', top: 'auto', right: 'auto' });;
				$('#page-cart').show();
			}


		}).scroll();

		if ($(window).width() < 960)
			$('#page-cart').addClass('mobile');

		$('body').on('click', '#page-cart.mobile h3, #page-cart.mobile h3 a', function(e) {
			e.preventDefault();
			e.stopPropagation();
			$(this).parents('#page-cart').toggleClass('mobile-collapsed');
			$('body').toggleClass('cart-expanded');

			/*
			try {
				Beacon("destroy"); // remove the chat, so it doesn't cover the cart
			}
			catch(e) { }
			*/
		});


		$('body').on('submit', '.quick-cart-form', function(e) {

			/*
			try {
				Beacon("destroy"); // remove the chat, so it doesn't cover the cart
			}
			catch(e) { }
			*/

			e.preventDefault();

			var value = Math.round(parseFloat($(this).find('input[name=price]').val()) * parseInt($(this).find('input[name=quantity]').val()));

			var data = $(this).serialize();
			data = data + '&ajax=1';






		});


	}


	$('#button-find-contractor').insertBefore($('#button-find-contractor').prev().prev());
	$('.quick-checkout-prod-desc a').each(function() {
		$(this).colorbox({href : $(this).attr('href') + '?iframe=1&nol=1&w=700', iframe: true, width: 750, height: 600, opacity: .5});
		return false;
	});


	//$('.pdf-brochure-thumb').parent().after( $('.features') );
	//$('.pdf-brochure-thumb').parent().not('.short-pdf').css('float', 'right').css('margin', '5em 4em 0 0');
		//$('#brochure').prepend( $('.pdf-brochure-thumb').unwrap() );
		//$('.pdf-brochure-thumb');
	$('.pdf-brochure-thumb').remove();

	$('.price-list-download').click(function() {
		$(this).fadeOut(function() { $(this).after('<div class="price-list-waiting"><span class="fa fa-spinner fa-spin"></span><br>Downloading</div>'); });
		setTimeout(function() {
			$('.price-list-waiting').remove();
			$('.price-list-download').fadeIn();
		}, 7000);
	});

	/* if ($('#gallery .gallery-entry').length === 0 && $('.manager').length === 0) {
		$('#tab-gallery, #gallery').remove();
	} */

	$('#tab-gallery').click(function() {
		if ($(this).data('loaded') == 1) return;
		$(this).data('loaded', 1);

		var parts = location.href.split('?')[0].split('/');
		var page_id = parts.pop();
		if (page_id == '')
			page_id = parts.pop();

		$.ajax({
			url: '/assets/html/photo-gallery/ajax-get-photos.php',
			data: { page_id: page_id },
			dataType: 'json',
			success: function(images) {

				var manager = false;
				if ($('.manager').length) manager = true;

				var timestamp = new Date().getTime();
				$.each(images, function(index, image) {
					$('#gallery').append('<div class="gallery-entry external-gallery' + (image.title != '' ? ' has-title' : '') + '" data-url="' + image.url.replace('thumb/', '') + '"><a href="' + image.url.replace('thumb/', '') + (manager ? '?v=' + timestamp : '') + '"><span class="gallery-entry-wrapper"><img width="200" alt="" data-original="' + image.url + (manager ? '?v=' + timestamp : '') + '"></span><span class="gallery-entry-title">' + image.title + '</span></a></div>');
				});

				$('#gallery').append('<div class="visualClear"></div>');

				$('.external-gallery img').lazyload({
				    effect : 'fadeIn'
				});

				if (manager) {
					$('.gallery-entry.external-gallery').prepend('<i class="edit-title fa fa-pencil"></i><i class="rotate fa fa-repeat"></i><i class="remove fa fa-times"></i>');
					$('.gallery-entry.legacy-gallery').prepend('<i class="uncat fa fa-times"></i>');
					$('.edit-title').click(function() {
						var $parent = $(this).parents('.gallery-entry');
						var $title = $parent.find('.gallery-entry-title');
						if (!$parent.hasClass('has-title')) $parent.addClass('has-title');

						$title.hide();
						$parent.append('<textarea>' + $title.text() + '</textarea>');
						$parent.children('textarea').focus();
					});

					$('body').on('blur', '.gallery-entry textarea', function() {
						var $parent = $(this).parents('.gallery-entry');
						var $title = $parent.find('.gallery-entry-title');
						var url = $parent.data('url');
						var title = $(this).val();
						var ekey = $('#ekey').data('ekey');

						$.ajax({
							url: '/assets/html/photo-gallery/ajax-update-photo-title.php',
							data: { url: url, title: title, key: ekey },
							dataType: 'json',
							context: this,
							success: function(response) {
								$(this).remove();
								$title.html(title).show();
							}
						})
					});

					$('body').on('click', '.gallery-entry .rotate', function() {
						$(this).addClass('fa-spin');

						var $parent = $(this).parents('.gallery-entry');
						var url = $parent.data('url');
						var object_key = url.split('?')[0].split('/').pop();
						var parts = location.href.split('/');
						var page_id = parts.pop();
						if (page_id === '')
							page_id = parts.pop();

						var ekey = $('#ekey').data('ekey');

						$.ajax({
							url: '/assets/html/photo-gallery/ajax-rotate.php',
							data: { page_id: page_id, object_key: object_key, key: ekey },
							dataType: 'json',
							context: this,
							success: function(response) {
								$(this).removeClass('fa-spin');
								var $img = $parent.find('img')
								$img.attr('src', $img.attr('src') + '?nocache=' + (new Date()));
							}
						});
					});

					$('body').on('click', '.gallery-entry .remove', function() {
						var okay = confirm('Really delete this photo?');
						if (!okay) return;

						$(this).addClass('fa-spin');

						var $parent = $(this).parents('.gallery-entry');
						var url = $parent.data('url');
						var object_key = url.split('?')[0].split('/').pop();
						var parts = location.href.split('/');
						var page_id = parts.pop();
						if (page_id === '')
							page_id = parts.pop();

						var ekey = $('#ekey').data('ekey');

						$.ajax({
							url: '/assets/html/photo-gallery/ajax-delete.php',
							data: { page_id: page_id, object_key: object_key, key: ekey },
							dataType: 'json',
							context: this,
							success: function(response) {
								$(this).removeClass('fa-spin');
								$parent.remove();
							}
						});
					});

					$('body').on('click', '.gallery-entry .uncat', function() {
						$(this).addClass('fa-spin');

						var $parent = $(this).parents('.gallery-entry');
						var photo_id = $parent.data('id');
						var photo_type = $parent.data('type');

						$.ajax({
							url: '/assets/html/photo-gallery/ajax-unassign-cat.php',
							data: { photo_id: photo_id, photo_type: photo_type },
							dataType: 'json',
							context: this,
							success: function(response) {
								$(this).removeClass('fa-spin');
								$parent.remove();
							}
						});
					});
				}

			}
		});

	});

	$('.image-enlarge').colorbox({photo: true, maxWidth: '90%', maxHeight: '90%', opacity: .65, onComplete: function() { jq('img').bind('contextmenu',function(e){ return false; });  }})

	$('body').on('click', '.gallery-entry a', function(e) {
		e.preventDefault();
		$.colorbox( { href: $(this).attr('href'), photo: true, opacity: .5, 'maxwidth': '90%', 'maxHeight': '90%', scrolling: false } );
	});

	Number.prototype.formatMoney = function(c, d, t) {
		var n = this,
		    c = isNaN(c = Math.abs(c)) ? 2 : c,
		    d = d == undefined ? "." : d,
		    t = t == undefined ? "," : t,
		    s = n < 0 ? "-" : "",
		    i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
		    j = (j = i.length) > 3 ? j % 3 : 0;
		   return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
	};


	var title = $('h1').text();

	if (title.indexOf('Kitchen') !== -1) {
		title = title.replace('Assembled', '');  // don't want to strip out assembled from product titles
		words = title.split(' ');
		// remove from listing any word found in title

		$('.block-desc a:first-child span').each(function() {
			var prodname = $(this).html();

			$.each(words, function(index, word) {
				prodname = prodname.replace(' ' + word, '');
				prodname = prodname.replace(word, '');
			});

			if ($(window).width() < 500 && prodname.length > 40) {
				// try to shorten titles as much as possible
				prodname = prodname.replace('Cabinet', '');
				prodname = prodname.replace('Diagonal', 'Diag.');
			}

			$(this).html(prodname);
		});
	}




	//load cart (primarily for back-button usage)
	$.ajax({
		url: '/getCartJSON',
		method: 'GET',
		dataType: 'json',
		success: function(cart) {
			rebuildCart(cart);
		}
	});

	// vertically center images
	var imgParentHeight = $('.block-image-wrapper img').first().parent().height();
	$('.block-image-wrapper img').load(function() {
		var marginTop = (imgParentHeight - $(this).height()) / 2;
		if (marginTop > 10)
			marginTop -= 4;
		$(this).css('margin-top', marginTop + 'px');
	});


	/* no glass emphasizing */
	$('.quick-checkout-prod-desc').each(function() {

		if ($(this).text().toLowerCase() === 'does not come with glass')
			$(this).addClass('red no-glass');
		else if ($(this).text().toLowerCase().indexOf('glass not included') !== -1)
			$(this).html( $(this).html().replace('Glass not included.', '<span class="red no-glass">Glass not included.</span>') );

	});


	// bathroom page - hide irrelevant accessories
	if (location.href.indexOf('Bathroom-Vanities') !== -1) {

		var hasFiller = false;

		$('.item-link').each(function() {
			var text = $(this).text();
			if (text.indexOf('Molding') !== -1 || text.indexOf('42') !== -1 || text.indexOf('Valance') !== -1 || text.indexOf('Stem') !== -1 || text.indexOf('Fluted') !== -1 || text.indexOf('Return') !== -1)
				$(this).parents('.block-item').remove();

			if (text.indexOf('Filler') !== -1)
				hasFiller = true;

			if (hasFiller && text.indexOf('Wall') !== -1)
				$(this).parents('.block-item').remove();
		});

	}


	if ($('#block-EXPRESSKIT').length) {
		var allowExpressKit = ['arles creme', 'bordeaux shaker', 'ebony shaker', 'glazed saddle', 'hartford grey', 'henna shaker', 'humboldt fog', 'imperial grey', 'merion grey', 'onyx shaker', 'smokey mountain shaker', 'birmingham shaker', 'avalon white','west point grey','colonial shaker','arlington white shaker','arlington linen shaker','adirondack white','alpine raised panel','artisan shaker','cabana white','casa blanca glazed','coastal ivory','cambridge white','elegant white shaker','frosted white shaker','gunnison raised panel','gunnison shaker','heritage white','lancaster linen','lexington','stone grey shaker','shaker hill','tuscany maple','vanilla shaker','cherryville','espresso shaker','ebony shaker','bainbridge chocolate','cambridge chocolate','brandywine maple','dover white','regal oak','honey maple','york cherry','gainsboro grey','riviera white','ostland white','westhighland','sable shaker','oxford white','butterscotch glazed','windsor white shaker','smokey mountain shaker', 'riviera white', 'humboldt fog', 'merion grey', 'ostland white', 'oxford white', 'west highland', 'traditional white shaker', 'navy blue shaker', 'dove white', 'frameless white shaker', 'storm grey', 'vanilla cream', 'ivory white shaker', 'ultra white shaker'];
		var lineName = $('h1').text().replace(' Kitchen Cabinets', '').toLowerCase();
		if ($.inArray(lineName, allowExpressKit) !== -1 || lineName.indexOf('white') !== -1 || lineName.indexOf('grey') !== -1 || lineName.indexOf('cream') !== -1)
			$('#block-StainStick').remove();
		else
			$('#block-EXPRESSKIT').remove();



		$('#block-StainStick, #block-EXPRESSKIT').each(function() {
			var title = $(this).find('.cart-title').val();
			 $(this).find('.cart-title').val(title + ' -- ' + $('h1').text().replace(' Kitchen Cabinets', ''));
		})
	}

});









$('#content').on('click', '.tabs a', function(e) {
	e.preventDefault();

	var activateId = jq(this).attr('id').substring(4); // get id of tab "body"
	jq(this).parent().siblings().removeClass('selected');
	jq(this).parent().addClass('selected');

	jq(this).parent().parent().parent().siblings().hide(); // hide all tab bodies
	jq('#' + activateId).show().parent().show(); // show only the selected tab body

	setTimeout(function() {
		jq(window).scroll();
	}, 100);
	console.log('scroll');
});

$('#content .plain ul:first').not('.tabs,.photo-slides,.feature-logos ul').appendTo('#specs');

/* DOM adjustments */
$('.tab-body').wrap('<div />');
$('.initial-hide').parent().hide();

$('.gallery-entry img').each(function() {
	var centerInHeight = parseInt(jq(this).parent().css('height').replace('px',''));
	var image= jq(this);
	image.removeAttr("height");
	var imageHeight=image.attr('height');

	if (imageHeight > 0)
		jq(this).css('margin-top', ((centerInHeight - imageHeight) / 2) + 'px');
});


if (jq('#cat-testimonial-wrapper').length) {
	jq('#cat-testimonial-wrapper').wrap('<div id="testimonials" class="tab-body initial-hide">');

	jq('#tabbed-content .tabs').append('<li' + '><' + 'a href="" id="tab-testimonials" rel="nofollow">Testimonials<' + '/a><' + '/li>');
	jq('#tabbed-content').append( jq('#testimonials') );
}/*
else {
	jq('#tabbed-content').append('<div id="testimonials" class="tab-body initial-hide"/>');
}
*/

/*
jq('#testimonials').append('<p class="center"><a id="test-gallery" class="rta-button-flat">View Photos Submitted by Our Customers</a></p>');
jq('#test-gallery').click(function() {
	jq('#tab-gallery').click();
});
*/


jq('#tab-specs').click(function() {
	if (jq('#dynamic-spec-url iframe').length === 0) {
		jq('#dynamic-spec-url').append('<' + 'h3' + '>Cabinet Spec Sheets<' + '/' + 'h3><iframe src="' + jq('#dynamic-spec-url').data('spec_url') + '" width="100%" height="500" frameborder="no" style="border: 1px solid #888;" />');
	}
});

jq('#tab-design').click(function() {
	if (jq('#dynamic-design').length === 0) {
		jq('#design').append('<div' + ' id="dynamic-design"><img' + ' src="https://assets.rtacabinetstore.com/assets/img/spinner.gif"' + ' /' + '>' + '<' + '/' + 'div>');
		jq('#dynamic-design').load('/design-ideas', function() {

			jq('#dynamic-design img[data-original]').lazyload({
			    effect : 'fadeIn'
			});

		});


	}
});


jq('.fkdh-start-shopping').on('click', function(e) {
 	e.preventDefault();
	jq('html,body').animate({
		scrollTop: jq(".category-heading").first().offset().top
	}, 1000);
});
jq('.order-sample-btn').on('click', function(e) {
 	e.preventDefault();
	jq('html,body').animate({
		scrollTop: jq('#item-listing').first().offset().top
	}, 1000);
});


if (location.search.indexOf('tab=testimonials') !== -1)
	jq('#tab-testimonials').click();
else if (location.search.indexOf('tab=design') !== -1)
	jq('#tab-design').click();



if ( jq.trim(jq('#features').html()) === '') jq('#tab-features, #features').remove();
if ( jq.trim(jq('#specs').html()) === '') jq('#tab-specs, #specs').remove();
if ( jq.trim(jq('#assembly').html()) === '') jq('#tab-assembly').remove();


/* countdown library */
if (typeof RTA !== 'undefined') {
	jq('.cotm-countdown').countdown(jq('.cotm-countdown').data('exp'), function(event) {
		jq(this).html(event.strftime('Offer ends in <span>%D</span> Day%!D <span>%H</span>:<span>%M</span>:<span>%S</span>'));
	});
}

jq('.pdf-brochure-thumb').click(function() {
	ga('send', 'event', 'PDF', 'download', 'Brochure');
});

jq('.price-list-download').click(function() {
	ga('send', 'event', 'PDF', 'download', 'Price List');
});


jQuery('.quick-checkout-prod-desc').each(function(){
  if (jq(this).text() == 'Door Only')
      jq(this).addClass('red');
});


// remove 30" & 36" rollout trays from Oak
if (location.href.indexOf('regal-oak') !== -1) {

	jq('.item-link').each(function() {

		if (jq(this).text().indexOf('Rollout Tray 30"') !== -1 || jq(this).text().indexOf('Rollout Tray 36"') !== -1)
			jq(this).parents('form').remove();

	});

}


// show assembled option
(function() {

	// already on assembled page
	if (location.href.indexOf('assembled') !== -1) {
		/*
		if (RTA.getCookie('asmbzone') !== '"1"' && !jq('#wrapper.manager').length) {
			location.href = location.href.replace('/assembled', '');
		}
		*/

		var html = '<div id="pre-assembled-banner" style="margin-bottom: 24px; padding: 24px; background-color: #f7f7f7;">';
		html += '<h3>You are viewing Pre-Assembled Cabinets</h3>';
		html += '<h4 style="margin-top: 12px;">Save Money!</h4>';
		html += '<p style="max-width: 730px;">Most wall cabinets take less than 15 minutes to assemble. You can save money on your order by assembling some of the more easily built cabinets yourself.</p>';
		html += '<a class="rta-button-flat" href="">Shop Ready-to-Assemble Cabinets</a>';
		html += '</div>';
		jq('.category-description').after(html);

		return;
	}


	// determine eligibility to see assembled option
	var lineSlug = location.href.split('/')[4];

	if (lineSlug === 'elegant-white-shaker' ||
		lineSlug === 'alpine-raised-panel-kitchen-cabinets' ||
		lineSlug === 'bainbridge-chocolate' ||
		lineSlug === 'butterscotch-glazed-kitchen-cabinets' ||
		lineSlug === 'carolina-hickory-kitchen-cabinets' ||
		lineSlug === 'colonial-shaker-kitchen-cabinets' ||
		lineSlug === 'elegant-white-shaker' ||
		lineSlug === 'espresso-shaker-cabinets' ||
		lineSlug === 'heritage-white-kitchen-cabinets' ||
		lineSlug === 'west-point-grey-kitchen-cabinets' ||
		lineSlug === 'york-cherry-kitchen-cabinets'
		) {

		showAssembledCallback(true);

		/*
		if (jq('#wrapper.manager').length) {
			showAssembledCallback(true);
			return;
		}

		if (RTA.getCookie('asmbzone')) {

			if (RTA.getCookie('asmbzone') === '"1"')
				showAssembledCallback(true);
			else
				showAssembledCallback(false);

			return;
		}
		else {

			jq.ajax({
				url: '/ajax-allow-assembled',
				dataType: 'json',
				success: function(response) {
					showAssembledCallback(response);
				}
			});

		}
		*/

	}



})();

function showAssembledCallback(showAssembled) {

	if (!showAssembled) return;

	var html = '<div id="pre-assembled-banner" style="margin: 24px 0; padding: 24px; background-color: #f7f7f7;">';
	html += '<h3>You are viewing Ready-to-Assemble Cabinets</h3>';
	html += '<h4 style="margin-top: 12px;">Save Time!</h4>';
	html += '<p style="max-width: 730px;">Let us do some of the more time consuming assemblies like lazy susan &amp; corner cabinets to help you get your project done faster. Or better yet, let us assemble ALL your cabinets for you!</p>';
	//html += '<p style="font-weight: 600; font-size: .9em;">Assembled 10x10 Kitchen Price: $' + Math.round( jq('.price_10x10').data('price10x10') * 1.716 ) + '.00</p>';
	html += '<a class="rta-button-flat" href="assembled/">Shop Assembled Cabinets</a>';
	html += '</div>';

	jq('.category-description').after(html);


	jq('.item-link').each(function() {
		var title = jq(this).text();

		if (title.indexOf('Sample') === -1 && title.indexOf('Organizers') === -1 && title.indexOf('Glideware') === -1 && title.indexOf('Touch-Up') === -1 && title.indexOf('Tray') === -1 && title.indexOf('Panel') === -1 && title.indexOf('Mullion') === -1 && title.indexOf('Filler') === -1 && title.indexOf('Corbel') === -1 && title.indexOf('Molding') === -1 && title.indexOf('Toe Kick') === -1 && title.indexOf('Valance') === -1) {
			jq(this).html(title + ' <span class="subtitle">(Ready-to-Assemble)</span>')
		}

	});

}

