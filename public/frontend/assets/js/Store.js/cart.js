rtaCart = {
	fedExWaiver: false
};

(function($) {
	
	var cartTotal = 0;	
	
	$('.cartItem').each(function() {
		cartTotal += parseFloat($(this).data('price')) * parseFloat($(this).data('qty'));
	});
	
	var todayDate = new Date();

	var showAssembled = false;
	var isCartAssembled = false;
	$('.item-name').each(function() {
		
		var showSkuAssembled = false;
		var isSkuAssembled = false;
		var model = $(this).parents('.cartItem').data('model');
		var asmbPrice = (($(this).parents('.cartItem').data('price') * 1.618) - $(this).parents('.cartItem').data('price')).toFixed(2);
		var rtaPrice = ($(this).parents('.cartItem').data('price') - ($(this).parents('.cartItem').data('price') / 1.618)).toFixed(2);
		
		if (
			$(this).text().indexOf('Cabinet') !== -1 ||
			$(this).text().indexOf('Sink Base') !== -1 ||
			$(this).text().indexOf('Three Drawer Base') !== -1		
		) {
			if ($(this).text().indexOf('Elegant') !== -1 || 
				$(this).text().indexOf('Frameless White') !== -1 ||					
				$(this).text().indexOf('Dove White') !== -1 ||					
				$(this).text().indexOf('Storm Grey') !== -1 ||					
				$(this).text().indexOf('Ivory White') !== -1 ||					
				$(this).text().indexOf('Ambrose Raised') !== -1 ||					
				$(this).text().indexOf('Vanilla Cream') !== -1 ||					
				$(this).text().indexOf('Dark Chocolate') !== -1 ||					
				$(this).text().indexOf('Navy Blue Shaker') !== -1 ||					
				$(this).text().indexOf('West Point Grey') !== -1 ||					
				$(this).text().indexOf('Carolina Hickory') !== -1 ||
				$(this).text().indexOf('Heritage White') !== -1 ||					
				$(this).text().indexOf('Colonial Shaker') !== -1 ||					
				$(this).text().indexOf('Butterscotch Glazed') !== -1 ||					
				$(this).text().indexOf('Alpine Raised') !== -1 ||					
				$(this).text().indexOf('Bainbridge') !== -1 ||					
				$(this).text().indexOf('York Cherry') !== -1
			    ) {
					showAssembled = true;
					showSkuAssembled = true;
			}
		}
		
		if ($(this).text().indexOf('Assembled') !== -1 || $(this).parent().text().indexOf('-ASMB') !== -1) {
			isCartAssembled = true;
			isSkuAssembled = true;
		}

		if (showSkuAssembled) {
			if (!isSkuAssembled)
				$(this).after('<span class="model-asmb-wrapper"><a class="model-asmb" href="/cart_to_assembled?model=' + model + '"><i class="fa fa-wrench" /> Ship Assembled</a> <span>+$' + asmbPrice + '</span></span>');
			else
				$(this).after('<span class="model-asmb-wrapper"><a class="model-asmb" href="/cart_from_assembled?model=' + model + '"><i class="fa fa-undo" /> Back to RTA</a> <span>-$' + rtaPrice + '</span></span>');
		}
		
		
	});
	
	if (!showAssembled)
		$('.cart-assembled').remove();

	if (isCartAssembled)
		$('.cart-assembled').html('<i class="fa fa-undo"></i> Back to RTA').attr('href', '/cart_from_assembled');

	$('title').text('Shopping Cart | RTA Cabinet Store');

	$('.item-name').colorbox({ iframe: true, width: 840, height: 600, opacity: .5, maxWidth: '90%', maxHeight: '80%' });				
	
	$('body').on('click', '.fedex-waiver', function(e) {
		e.preventDefault();
		$.colorbox({
			href: $(this).attr('href') + '?iframe=1',
			iframe: true,
			width: 800,
			maxWidth: '90%',
			height: 530,
			opacity: .5
		});
	});
	
	if ($('.cab-style-wrapper').length) {
		$.ajax({
			url: '//assets.rtacabinetstore.com/assets/html/ajax/get-active-cabinet-styles.php',
			dataType: 'json',
			success: function(lines) {
				var curStyle = $('.cab-style-wrapper').data('current_style');
				$('.cab-style-wrapper').html('<label>Compare pricing for other styles</label><select name="cabinet_style" />');
				$.each(lines, function(index, line) {
					$('select[name=cabinet_style]').append('<option' + (curStyle == line['wc_store_name'] ? ' selected' : '') + '>' + line['wc_store_name'] + '</option>');
				});
			}
		});
	}
		
	// cart recommendation
	function recommend() {
		if ($('.cartItem').length === 0) return;
		
		LazyLoad.css('/assets/css/slick.css');
		
		var maxItemModel, maxPrice = 0, titles = [], models = [];
		$('.cartItem').each(function() {
			var thisPrice = parseFloat($(this).data('price'));
			if (thisPrice > maxPrice) {
				maxItemModel = $(this).data('model');
				maxPrice = thisPrice;
			}
			models.push($(this).data('model'));
			titles.push($(this).find('.prod-col a').text());
		});
		
		$.ajax({
			url: '/assets/html/upsell/others-bought/',
			data: { model: maxItemModel, allModels: models.join(','), allTitles: titles.join(',') },
			method: 'GET',
			dataType: 'json',
			success: function(upsells) {
				if (!upsells.length) {
					$('.recommend-wrapper').remove();
					return;
				}
				
				var html = '';
				$.each(upsells, function(index, upsell) {
					html += '<div class="upsell-item">';
					html += '	<a class="lightbox upsell-image-wrapper" href="' + upsell.item_link + '?iframe=1&w=700&nol=1&detail_only=1"><img src="' + upsell.thumb_url.replace('http:', 'https:') + '" alt=""></a>';
					html += '	<p>' + upsell.title.substring(0,60) + (upsell.title.length > 60 ? '&hellip;' : '') + ' <span>$' + upsell.price + '</span></p>';
					html += '	<a class="rta-button-flat add-cart event-track" href="/addtoCart?source=cart&dbsku=' + upsell.model + '&quantity=1&came_from=/cart" data-event_category="button" data-event_action="click" data-event_label="Cart / Recommended Add">Add to Cart</a>';
					html += '</div>';
				});
				
				LazyLoad.js('/assets/js/slick.min.js', function() {
					$('.cart-recommend').html(html);
					$('.cart-recommend').slick({
						slidesToShow: 4,
						slidesToScroll: 1,
						infinite: true,
						nextArrow: '<a class="upsell-next"><i class="fa fa-chevron-right"></i></a>',
						prevArrow: '<a class="upsell-prev"><i class="fa fa-chevron-left"></i></a>',
						responsive: [
			               {
			                 breakpoint: 1024,
			                 settings: {
			                   slidesToShow: 3,
			                   slidesToScroll: 3,
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
					
					$('.cart-recommend a.lightbox').colorbox({ iframe: true, width: '80%', height: '80%', maxWidth: '900', opacity: .5 });
				});
				
			}
		})
	}
	if ($('.cart-recommend').length) recommend();
	

	$('.qty-multiply').click(function() {
		$('.quantity-col').each(function() {
			var $input = $(this).children('input');
			
			if (!$input.data('original_qty'))
				$input.data('original_qty', $input.val());
			
			$input.val( parseInt($input.val()) + parseInt($input.data('original_qty')) );
		});
	});
	
	if ($('.manager').length === 0) {
		$('.add-cart').click(function(e) {
			e.preventDefault();
			
			var value = Math.round(parseFloat($(this).data('value'))); 
			var product = $(this).data('product');
			var href = $(this).attr('href');
			
			var eventParams = {
					  'hitType': 'event',
					  'eventCategory': 'upsell',
					  'eventAction': 'click',
					  'eventLabel': 'Cart Page / Add ' + product + ' to Cart',
					  'eventValue': value,
					  hitCallback: function() {
						  location.href = href;
					  }
					}
			
			ga('send', eventParams);

			setTimeout(function() {
				location.href = href;  // in case event tracking fails
			}, 2500);
		});
	}		
	

	$('.cart-upsell-wrapper').each(function() {
		
		if ($(this).find('.upsell-item').length > 4) {
				
			$(this).find('.scroll-wrapper').before('<a class="upsell-prev"><i class="fa fa-chevron-left"></i></a>');
			$(this).find('.scroll-wrapper').before('<a class="upsell-next"><i class="fa fa-chevron-right"></i></a>');
							
		}
		
		$('.upsell-next').click(function() {
			var upsellWidth = $(this).parents('.cart-upsell-wrapper').find('.upsell-item').first().width();
			var upsellCount = $(this).parents('.cart-upsell-wrapper').find('.upsell-item').length;
			
			var currentPosition = parseInt($(this).parents('.cart-upsell-wrapper').find('.cart-container').css('margin-left'));
			
			if (Math.abs(currentPosition) > ((upsellCount - 4) * upsellWidth)) return;
			
			$(this).parents('.cart-upsell-wrapper').find('.cart-container').finish().animate({ 'margin-left': (currentPosition - upsellWidth) + 'px' }, 150);
		});

		$('.upsell-prev').click(function() {
			var upsellWidth = $(this).parents('.cart-upsell-wrapper').find('.upsell-item').first().width();
			var upsellCount = $(this).parents('.cart-upsell-wrapper').find('.upsell-item').length;
			
			var currentPosition = parseInt($(this).parents('.cart-upsell-wrapper').find('.cart-container').css('margin-left'));
			
			if (currentPosition === 0) return;
			
			$(this).parents('.cart-upsell-wrapper').find('.cart-container').finish().animate({ 'margin-left': (currentPosition + upsellWidth) + 'px' }, 150);
		});
		
	});
	
	
		
	var currentPosition = 0;
	var totalSlides = 0;
	var t = null;	

	setTimeout(function() {
		if ($('.cart-testimonials').length > 0) {
			// slides
			totalSlides = $('.cart-testimonials p').length;
			t = setTimeout('transition()', 10000);
		}		
	}, 1500);
	
	transition = function() {
		currentPosition++;
		lastPosition = currentPosition - 1;

		if (currentPosition == totalSlides) {
			currentPosition = 0;
		}
		
		if (lastPosition < 0)
			lastPosition = totalSlides - 1;
			
		$('.cart-testimonials p:eq(' + lastPosition + ')').fadeOut('fast', function() {
			$('.cart-testimonials p:eq(' + currentPosition + ')').fadeIn('slow');
		});

		$('.cart-testimonial-chooser span').removeClass('current');
		$('.cart-testimonial-chooser span:eq(' + currentPosition + ')').addClass('current');
		
		t = setTimeout('transition()', 10000);
	}		

	
	$('.low-price').attr('href', '//www.rtacabinetstore.com/lowest-price-guarantee/?iframe=1&nol=1&nos=1').colorbox({ iframe: true, width: 800, height: 500, maxWidth: '90%', maxHeight: '90%', opacity: .5 });
	$('.payment-seal').click(function(e) {
		e.preventDefault();
		window.open($(this).attr('href'), 'popup', 'width=920,height=500,left=50,scrollbars=no');
	});

	if ($('#save-compare-wrapper').length) {
		$('#save-my-cart').click(function(e) {
			e.preventDefault();
			
		    $('html, body').animate({
		        scrollTop: $("#save-compare-wrapper").offset().top - 48
		    }, 1000);		
		});
	}
	
	if ($(window).width() > 700) {
		var newColHeight = $('.column-left').height() - 74;
		if (newColHeight < 500)
			newColHeight = 500;
		$('.column-right').css('min-height', newColHeight + 'px');
	}
	

	
	
	$('.browse-all').colorbox({ iframe: true, width: 840, height: 600, opacity: .5 });
	
	if (typeof JSON === 'undefined') {
		LazyLoad.js('//cdn.jsdelivr.net/json2/0.1/json2.min.js');
	}
	
	$('body').on('change', 'select[name=cabinet_style]', function() {
		$('#new-cart-wrapper').remove();
		
		var url = '/assets/html/cart/style-switch/';
		var cart = [];
		$('.cartItem').each(function() {
			cart.push({ name: $(this).find('.item-name').text(), model: $(this).data('model'), quantity: $(this).find('.quantity-col').children('input').val(), price: $.trim($(this).find('.price-col').first().text().replace('$', '')) });			
		});
		var data = { cart: JSON.stringify(cart), newStyle: $(this).val() }

		$.ajax({
			url: url,
			type: 'POST',
			dataType: 'json',
			data: data,
			context: this,
			success: function(response) {
				approveCart(response.cart, $(this).val());
			}
		});
		


		var eventParams = {
			'hitType': 'event',
			'eventCategory': 'cart',
			'eventAction': 'cabinet style compare',
			'eventLabel': $(this).val(),
			nonInteraction: true
		}
		
		if (typeof ga !== 'undefined')
			ga.getAll()[0].send(eventParams);	
		
	});
	
	function approveCart(cart, newStyle) {

		var $newCart = $('<div id="new-cart"><h3>Please review your new shopping cart below.</h3></div>');
		var $table = $('<table cellspacing="0"><thead><tr><th>Item</th><th>Model</th><th>Qty</th><th>Unit Price</th></tr></thead><tbody></tbody></table>');
		var total = 0;
		
		$.each(cart, function(index, item) {
			if (item.closeMatches)
				return;
			
			$table.children('tbody').append('<tr><td class="new-cart-name">' + item.name + '</td><td class="new-cart-model">' + item.model + '</td><td class="new-cart-qty">' + item.quantity + '</td><td class="new-cart-price">$' + item.price + '</td></tr>');
			total += (item.quantity * item.price);
			
		});
		$.each(cart, function(index, item) {
			if (!item.closeMatches)
				return;

			$closeMatch = $('<tr class="new-cart-close-match"><td colspan="4"><span class="new-cart-name">' + item.name + '</span><p>We could not find a similar cabinet in our ' + newStyle + ' line.<br>Would you like to substitute for one of these cabinets?</p><table></table><button class="rta-button-flat new-cart-close-skip">Skip this item</button></td></tr>');
			$.each(item.closeMatches, function(index, match) {
				$closeMatch.find('table').append('<tr class="new-cart-item"><td><button class="rta-button-flat call new-cart-close-choose">choose</button></td><td class="new-cart-name">' + match.name + '</td><td class="new-cart-model">' + match.model + '</td><td class="new-cart-qty">' + item.quantity + '</td><td class="new-cart-price">$' + match.price + '</td></tr>');
			});
			$table.children('tbody').append($closeMatch);
		});
		
		$table.append('<tfoot><tr><td></td><td colspan="2"><b>New Total</b></td><td class="new-cart-total">$' + (Math.round(total * 100) / 100) + '</td></tr></tfoot>');
		
		$newCart.append($table);
		$newCart.append('<div class="new-cart-actions"><button class="new-cart-continue rta-button-flat call">Continue</button><button class="new-cart-cancel rta-button-flat">Cancel</button></div>');
		
		var $wrapper = $('<div id="new-cart-wrapper" style="display: none;" />');
		$wrapper.append($newCart);
		$('body').append($wrapper);
		
		$.colorbox({ href: '#new-cart', inline: true, opacity: .5, maxWidth: '90%' });
		
		$('.new-cart-close-skip').click(function() {
			var $parent = $(this).parents('.new-cart-close-match');
			$parent.fadeOut('fast', function() { $parent.remove() });
		});
		
		$('.new-cart-close-choose').click(function() {			
			var $parent = $(this).parents('.new-cart-item');
			total += (parseInt($parent.find('.new-cart-qty').text()) * parseFloat($parent.find('.new-cart-price').text().replace('$','')));
			var $parentWrapper = $(this).parents('.new-cart-close-match');

			$(this).parent('td').remove();
			$table.children('tbody').append($parent);
			$parentWrapper.fadeOut('fast', function() { $parentWrapper.remove() });
			
			$('.new-cart-total').text( '$' + (Math.round(total * 100) / 100) );
		});
		
		$('.new-cart-cancel').click(function() {
			$.colorbox.close();
		});
		
		$('.new-cart-continue').click(function() {

			var url = '/createCartFromSkus';
			var cart = [];
			$('.new-cart-model').each(function() {
				if ($(this).parents('.new-cart-close-match').length)
					return;
				
				cart.push({ model: $(this).text(), quantity: parseInt($(this).siblings('.new-cart-qty').text()) });			
			});
			var data = { cart: JSON.stringify(cart) }

			$.ajax({
				url: url,
				type: 'POST',
				dataType: 'json',
				data: data,
				context: this,
				success: function(response) {
					if (!response.success) {
						alert (response.errors.join('\n\n'));
					}
					
					$.colorbox.close();
					location.reload(false);
				}
			});
						
		});
	}

	
	
	
	
	if (typeof $.fn.meanmenu !== 'undefined' && !$('.mean-bar').length)
		$('nav').meanmenu();

	$('.calc-shipping').click(function() { 
		calcShipping();
	});
	
	$('#postal').keyup(function() {
		isCanadian(this);
	});
	
	$('.remove-col a').click(function(e) {
		e.preventDefault();
		
		$.ajax({
			url: '/deleteItem',
			context: this,
			dataType: 'json',
			data: { cart_item: $(this).data('cartid'), newajax: true },
			success: function(response) {
				try {
					var totalPrice = parseFloat($('.full-total .price span').text());
					var totalPrice2 = parseFloat($('.subtotal').text());
					var reducePriceBy = parseFloat($(this).parents('tr.cartItem').data('price')) * parseFloat($(this).parents('tr.cartItem').data('qty'))
					$('.full-total .price span').text( (totalPrice - reducePriceBy).toFixed(2) );
					$('.subtotal').text( (totalPrice2 - reducePriceBy).toFixed(2) );
				}
				catch {}
			
				$(this).parents('tr.cartItem').remove();
			}
		});
	});
	
	/* $('.continue-shopping, .continue-shopping-bottom').click(function(e) {
		// go back, unless design tool
		if ($(this).data('referer').indexOf('design') === -1 && $(this).data('referer').indexOf('plan.rta') === -1) {
			e.preventDefault();
			history.go(-1);			
		}
		else {
			e.preventDefault();
			location.href = '/RTA-Kitchen-Cabinets';
		}
	}); */
	
	$('.go-back').click(function(e) {
		e.preventDefault();
		history.go(-1);
	});

	
	function formatCurrency(t,s,a,r){"use strict";var e,i,d;return s=isNaN(s=Math.abs(s))?2:s,a=void 0===a?".":a,r=void 0===r?",":r,e=0>t?"-":"",i=parseInt(t=Math.abs(+t||0).toFixed(s),10)+"",d=(d=i.length)>3?d%3:0,e+(d?i.substr(0,d)+r:"")+i.substr(d).replace(/(\d{3})(?=\d)/g,"$1"+r)+(s?a+Math.abs(t-i).toFixed(s).slice(2):"")}

	function thermometer(id, goalAmount, progressAmount, animate) {
	    var $thermo = $("#"+id),
	        $progress = $(".progress", $thermo),
	        $goal = $(".goal", $thermo),
	        percentageAmount,
	        isHorizontal = $thermo.hasClass("horizontal"),
	        newCSS = {};

	    goalAmount = goalAmount || parseFloat( $goal.text() ),
	    progressAmount = progressAmount || parseFloat( $progress.text() ),
	    percentageAmount =  Math.min( Math.round(progressAmount / goalAmount * 1000) / 10, 100); //make sure we have 1 decimal point

	    //let's format the numbers and put them back in the DOM
	    $goal.find(".amount").text( "$" + formatCurrency( goalAmount ) );
	    $progress.find(".amount").text( "$" + formatCurrency( progressAmount ) );


	    //let's set the progress indicator
	    $progress.find(".amount").hide();

	    newCSS[ isHorizontal ? "width" : "height" ] = percentageAmount + "%";

	    if (animate !== false) {
	        $progress.animate( newCSS, 1200, function(){
	            $(this).find(".amount").fadeIn(500);
	        });
	    }
	    else {
	        $progress.css( newCSS );
	        $progress.find(".amount").fadeIn(500);
	    }
	}

	if ($('#financing-amount')) {
		thermometer('financing-amount');
		
		$('.financing-block h3 span').text( '$' + formatCurrency(parseFloat($('.financing-block h3 span').text())) );
		$('.financing-block h3 b').text( '$' + formatCurrency(parseFloat($('.financing-block h3 b').text())) );
	}
	
	
	
	$.ajax({
		url: '/assets/html/cart/testimonials/related.php',
		data: { cabline: $('.item-name').first().text().split(' ')[0].toLowerCase() },
		dataType: 'json',
		success: function(testimonials) {
			$.each(testimonials, function(index, testimonial) {
				$('.cart-testimonials').append('<p' + (index ? ' class="initial-hide"' : '') + '>' + testimonial.t_text + '</p>');
			});

			$('.cart-testimonials').append('<div class="cart-testimonial-chooser"></div>');
			
			$('.cart-testimonials p').each(function() {
				var text = $(this).text();
				text = text.replace('.', '.<span>&nbsp;</span>');
				text = text.replace('?', '.<span>&nbsp;</span>');
				text = text.replace('!', '.<span>&nbsp;</span>');
				
				$(this).html(text);
				
				$(this).find('a').remove();
				
				$('.cart-testimonial-chooser').append('<span>&bull;</span>');
			});
			
			$('.cart-testimonial-chooser span').first().addClass('current');			
			$('.cart-testimonial-chooser span').click(function() {
				clearTimeout(t);
				var index = $('.cart-testimonial-chooser span').index($(this));
				$('.cart-testimonials p').hide();
				$('.cart-testimonials p:eq(' + index + ')').fadeIn();
				$('.cart-testimonial-chooser span:eq(' + index + ')').addClass('current').siblings().removeClass('current');
			});
		
		}
	});	

	$('body').on('click', '.lowest-price a', function(e) {
		e.preventDefault();
		$.colorbox({ href: $(this).attr('href') + '?iframe=1', iframe: true, width: 800, height: 500, maxWidth: '90%', maxHeight: '90%', opacity: .5 });
	});
	

	if (typeof sessionStorage !== 'undefined')
		sessionStorage.setItem('cart_qty', $('.total-quantity').text());
	
	
	
})(jQuery);


if(typeof Storage !== 'undefined' && document.getElementById('postal')) {
	if (localStorage.shipping_postal) {
		document.getElementById('postal').value = localStorage.shipping_postal;
	}
}

try {
	isCanadian(document.getElementById('postal'));	
}
catch(e) { }

function styleSubmit(obj, current) {
	location.href = '/changeCabinetStyle?newStyle=' + obj.value + '&currentStyle=' + current;
}

function calcShipping() {
	document.getElementById('calc-ship-link').style.display = 'none';
	
	document.getElementById('spinner').style.display = 'inline';

	var ret, url;
	
	if (document.getElementById('city').value == '')
		url = 'ajax_shipping_cart?postal=' + document.getElementById('postal').value;
	else
		url = 'ajax_shipping_cart?postal=' + document.getElementById('postal').value + '&city=' + document.getElementById('city').value + '&st=' + document.getElementById('st').value;
	
	if(typeof Storage !== 'undefined') {
		localStorage.shipping_postal = document.getElementById('postal').value;
	}
	
	url = url + '&nocache=' + (new Date()).toString();
		
	jq.ajax({ 
		url: url, 
		dataType: 'script', 
		success: function() {
			var shippingCost = jq('#shipping-value').text();
			var total = parseFloat(jq('.full-total').data('total_without_shipping')) + parseFloat(shippingCost);
			jq('.full-total span').text( total.toFixed(2) );

			jq('#total-shipping-col').show();
			jq('.shipping-value').text( shippingCost );
			
			if (rtaCart.fedExWaiver) {
				jq('.shipping-value').after('<a class="fa fa-info-circle fedex-waiver" style="position: absolute; margin: 4px; text-decoration: none;" href="/assets/html/pages/fedex-waiver/" target="_blank"></a>');
			}
		} 
	});

	
}

function isCanadian(obj) {
	if (obj.value.length >= 6)
		jq('#shipping-detail').show();
	else
		jq('#shipping-detail').hide();
}

if (location.href.indexOf('continue_shopping') !== -1 && location.href.indexOf('iframe') !== -1) {
	// we were directed to the cart from within a popup, close the popup
	//jq('#footer').remove();
	//jq('body').html('<p style="margin: 200px; font-size: 16px; text-align: center;"><a href="/cart" style="text-decoration: none;">view cart</a> &nbsp; <a onclick="">close</a>').css('overflow', 'hidden');
	
	parent.jq.fn.colorbox.close();
}


