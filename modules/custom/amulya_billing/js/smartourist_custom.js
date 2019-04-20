(function($, Drupal) {
    Drupal.behaviors.smartourist_custom = {
        attach: function (context, settings) {

	    $('.activate-button').click(function(event){
		event.preventDefault();
		event.stopImmediatePropagation();
		if (confirm('Are you sure?')) {
		    var coupon = $(this);
		    var coupon_id = coupon.attr("coupon_id");
		    var order_id = coupon.attr("order_id");
		    $.ajax({
			url: Drupal.url('activate/'+coupon_id+'/'+order_id),
			type:"GET",
			success: function(response) {
			    coupon.hide();
			    coupon.next('.deactivate-button').show();
			}
		    });
		    event.preventDefault();
		    event.stopImmediatePropagation();
		}
		
	    });
	    
        }
    }
})(jQuery, Drupal);



