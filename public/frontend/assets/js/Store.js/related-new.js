var relatedKeyPressTimeout;

$('.cart-quantity').focus(function() {
	var form = jq(this).parents('.quick-cart-form');

	if (form.find('.prod-related').length > 0) {
		form.find('.prod-related').find('.direct-related-wrapper').slideDown(500);
	}

	form.siblings().each(function() { 
		// need to to this instead of a blur event (as blur event would occur even when selecting an add-on
		jq(this).find('.prod-related').find('.direct-related-wrapper').slideUp(500);
	});
});

$('body').on('click', '.upgrade-finished', function() {
	try {
		parent.jq.fn.colorbox.close();
	}
	catch(e) {
		parent.$.fn.colorbox.close();		
	}	
});

$('body').on('keydown change', '.direct-related .cart-quantity', function() {
	
	var value = jq(this).val();
	
	if (jq('.manager').length === 0) {
		var eventParams = {
				  'hitType': 'event',
				  'eventCategory': 'input',
				  'eventAction': 'change',
				  'eventLabel': 'Cabinet Line Main / Upgrade Cabinet Quantity',
				  'eventValue': value
				}
		
		ga('send', eventParams);
	}

});

$('body').on('click', '.upgrade-product', function(e) {
	if (jq('.manager').length === 0) {
		var eventParams = {
				  'hitType': 'event',
				  'eventCategory': 'button',
				  'eventAction': 'click',
				  'eventLabel': 'Cabinet Line Main / Upgrade Cabinet',
				  'eventValue': 0
				}
		
		ga('send', eventParams);
	}
	
	var form = jq(this).parents('.quick-cart-form');

	var code = (e.keyCode ? e.keyCode : e.which);
	
	if((code < 48 || code > 57) && code != 8 && code != 1)
		return false;
	
	if(form.find('.cart-quantity').val() === '' || form.find('.cart-quantity').val() === '0') {
		form.find('.prod-related').find('.direct-related-wrapper').slideUp(500, function() {
			form.find('.prod-related').remove();
		})
		return false;
	}

	
	form.siblings().each(function() { 
		// need to do this instead of a blur event (as blur event would occur even when selecting an add-on
		jq(this).find('.prod-related').slideUp(500);
	});

	/*clearTimeout(relatedKeyPressTimeout);

	_this = jq(this);
	relatedKeyPressTimeout = setTimeout( function() { */
	var model = form.find('.cart-model').val();
	var title = form.find('.cart-title').val();
	var quantity = form.find('.cart-quantity').val();
	
	var urlParts = location.href.split('/');
	var categoryUrl = urlParts.pop();
	if (categoryUrl === '')
		categoryUrl = urlParts.pop();
	
	var data = { model: model, title: title, quantity: quantity, category_url: categoryUrl };
	if (jq('.manager').length)
		data['manager'] = 1;
	
	form.find('.prod-related').remove();
	
	jq.ajax({
		url: '/assets/html/upsell/getUpsellProducts.php',
		data: data,
		dataType: 'json',
		success: function(data) {

			var html = '<div class="prod-related-wrapper"><div class="prod-related" id="prod-related-lightbox-' + model + '"><h4><a class="upgrade-finished">Finished</a>Cabinet Accessories</h4>';
			var item_link;
			
			// direct upsell
			html += '<div class="direct-related-wrapper">';
			for (var i = 0; i < data.length; i++) {
				if (data[i].upsell_type === 'direct') {
					html += '<form action="/addtoCart" method="post" class="quick-cart-form direct-related">';

					  	if (data[i].thumb_url !== '') {
					  		html += '<img class="upsell-image" src="' + data[i].thumb_url + '" alt="" />';
					  	}
					  	else if (data[i].image_url !== '') {
					  		html += '<img class="upsell-image" src="' + data[i].image_url + '" alt="" />';							  		
					  	}
					  	
					  	if ( data[i].model !== '') {
					  		html += '<div class="dr-title">Add ' + data[i].title + ' for <b>$' + data[i].price + '</b> each</div>';
						  	html += '<div class="dr-rec">Recommended Quantity: <b>' + data[i].quantity + '</b></div>';
					  	}
					  	else {
					  		html += '<div class="dr-title">' + data[i].title + '</div>';
					  	}

					  	if ( data[i].model !== '') {
					  		item_link = data[i].item_link.split('/').pop();
					  		if (item_link === '') {
					  			item_link = data[i].model;
					  		}
							html += '<input type="hidden" name="id" value="' + item_link + '" />';
						  	html += '<input type="hidden" class="cart-title" name="name" value="' + data[i].title + '" />';
						  	html += '<input type="hidden" name="price" value="' + data[i].price + '" />';
						  	html += '<input type="hidden" class="cart-model" name="sku" value="' + data[i].model + '" />';
						  	html += '<input type="hidden" name="weight" value="' + data[i].weight + '" />';
						  	html += '<input type="hidden" name="taxable" value="True" />';
						  	html += '<input type="hidden" name="path" value="' + data[i].item_link + '" />';
						  	html += '<input type="hidden" name="upsell_products" value="" />';
						  	html += '<input type="number" size="2" class="cart-quantity" name="quantity" placeholder="Qty" value="' + data[i].quantity + '">';
						  	html += '<input type="submit" value="Add to Cart &raquo;">';
					  	}
					
					  	
					  	html += '<a class="dr-detail-link" href="' + data[i].item_link + (data[i].model !== '' ? '?nol=1' : '') + '" target="_blank">';
					  	
					  	if (data[i].model !== '') {
					  		html += 'View Details';
					  	}
					  	else {
					  		html += '<img src="/assets/html/upsell/complete-list-popup.png" width="154" height="40" alt="" />';
					  	}
					  	
					  	html += '</a>';
					  	
					  	html += '<div class="quick-view-inner"></div>';
					  	
					html += '</form>';
				}
			}
			html += '</div>';

			html += '<a class="upgrade-finished rta-button-flat">Finished</a>';
			
			html += '</div></div>';
			
								
			form.append(html);
			//form.find('.prod-related').find('.direct-related-wrapper').slideDown(500);
			jq.colorbox({ inline: true, href: '#prod-related-lightbox-' + model, width: 800, height: 600, maxWidth: '90%', maxHeight: '90%' });
			//jq('.dr-detail-link').unbind().colorbox({ iframe: true, width: 800, height: 600, opacity: .5 });
		}
	});
						
		/* },
		500
	);	*/
});

$('body').on('click', '.dr-detail-link', function(e) {
	e.preventDefault();

	if (! jq(this).next('.quick-view-inner').hasClass('loaded')) {
	
		jq(this).next('.quick-view-inner').load(jq(this).attr('href') + '/?iframe=1&detail_only=1 #content', function() { 
			jq(this).addClass('loaded');
		});	
	
	}
	
	jq(this).next('.quick-view-inner').show();

});

$('body').on('click', '.alt-images img', function() {
	jq('.main-img').attr('src', jq(this).data('full')).parent().attr('href', jq(this).data('full'));
});	
$('body').on('click', '.enlarge', function() {
	jq(this).colorbox({ maxWidth: '90%', maxHeight: '90%', opacity: .5, scrolling: false });
});