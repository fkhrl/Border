
// /** Woocommerce scripts start init */

function woocommerce_scripts_load() {

	/**
	 * While passing through pages with ajax we replace DOM elements
	 * this also means that we lose all the events binded to those elements
	 * woocommerce envents will need to be triggered again so we do that below
	 */

	/**
	 * First for products variations
	 */
	// wc_add_to_cart_variation_params is required to continue, ensure the object exists
	if ( typeof wc_add_to_cart_variation_params === 'undefined' )
		return false;

	setTimeout(function() {
		var variations_form = jQuery( '.variations_form' );
		// wc_add_to_cart_variation_params is required to continue, ensure the object exists
		if ( typeof wc_add_to_cart_variation_params === 'undefined' &&  variations_form.length > 0 )
			return false;

		jQuery(document).find( '.variations_form' ).each( function() {
			jQuery( this ).wc_variation_form().find('.variations select:eq(0)').change();
		});
	}, 500);
}

(function($){
	$(document).ready(function(){
		$(".woocommerce").on("change", "input.qty", function() {
			$(this.form).find("button[data-quantity]").attr("data-quantity", this.value);
		});
	});

	/**
	 * Remove items from cart with ajax
	 */
	$(document).on('click','.product-remove .remove', function(e) {
		e.preventDefault();

		var $thisbutton = $(this);

		$.ajax({
			url: woocommerce_params.ajax_url,
			type: 'POST',
			data: {
				action: 		'woopix_remove_from_cart',
				remove_item: 	$thisbutton.data('item_key'),
				remove_nonce:   $thisbutton.data('remove_nonce')
			},
			success: function( response ) {

				$result = JSON.parse(response);

				if ( $result.success == true ) {

					var item_title = ' ' + $thisbutton.parent().siblings('.product-name').children('a').html();
	//					var message = '</br><i class="pixcode--icon  icon-info  square  small"></i>'+ l10n.item_label + item_title + l10n.remove_msg;
					var message = '<div class="woo__message-line"><i class="pixcode--icon  icon-info  square  small"></i>Item <b>'+ item_title +'</b> has been removed!</div>';
					if ( $('.woocommerce-message').length > 0 ){
						$('.woocommerce-message').append(message);
					} else {
						$('.woocommerce .cart-form').before('<div class="woocommerce-message">'+ message +'</div>');
					}

					$thisbutton.parents('.cart_item').remove();
					// update total
					$('select.shipping_method, input[name^=shipping_method]').trigger('change');
				}
			}
		});

	});

	/**
	 * Update cart with ajax
	 */
	$(document).on('change', '.cart_item .qty', function(e){
		e.preventDefault();

		var $thisbutton = $(this);

		$.ajax({
			url: woocommerce_params.ajax_url,
			type: 'POST',
			data: {
				action: 		'woopix_update_cart',
				remove_item: 	$thisbutton.data('item_key'),
				qty: 			$thisbutton.val()
			},
			success: function( response ) {
				var result = JSON.parse( response );

				if ( result.success == true ) {

					var message = '<div class="woo__message-line"><i class="pixcode--icon  icon-info  square  small"></i>Cart updated!</div>';
					if ( $('.woocommerce-message').length > 0 ){
						$('.woocommerce-message').html(message);
					} else {
						$('.woocommerce .cart-form').before('<div class="woocommerce-message">'+ message +'</div>');
					}

					if ( typeof result.cart_items !== 'undefined' ) {
						$('.woocommerce .shop_table.cart tbody .cart_item').remove();
						$('.woocommerce .shop_table.cart tbody').prepend(result.cart_items);
					}

					if ( typeof result.totals !== 'undefined' ) {
						$('.cart-subtotal.cart-totals, .shipping.cart-totals, .total.total-row.cart-totals').remove();
						$('.woocommerce .cart-buttons').before(result.totals);

					}
				}

				$(document).trigger('change');
				// update total
				$('select.shipping_method, input[name^=shipping_method]').trigger('change');

			}
		});

	});

    $('.pix-accordion > li:first-child').addClass('panel-active');

    $(document).on('click', '.pix-accordion > li > a', function() {

	    //accordion on single product
	    var allPanels = $('.pix-accordion > li > .panel__entry-content');

        if($(this).parent().hasClass('panel-active')) return false;

        $(this).parent().addClass('panel-active').siblings().removeClass('panel-active');
        allPanels.slideUp();
        $(this).siblings('.panel__entry-content').slideDown();
        return false;
    });

	// fix woocommerce form login display here so we don't interfere with woo's code
	$(window).load(function(){
		var $form = $('form.login');

		if ( $form.length  > 0 ) {
			if ( $form.css('display') == 'none' ) {
				// is here but is hidden
				$form.css('display', 'block');
			}
		}
	});

})(jQuery);
// /** Woocommerce scripts end */
