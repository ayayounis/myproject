$(document).ready(function(){
	jQuery('input.number').keypress(function(event){validateNumber(event)});
	jQuery('input.number').attr('maxlength','10');
	/*console.log(window.location.pathname);
	// now grab every link from the navigation
	jQuery('nav.inner-nav a').removeClass('active');
	jQuery("nav.inner-nav a").each(function(){
		if(jQuery(this).attr("href")==window.location.pathname)
		jQuery(this).addClass("active");
	});	
	*/
	jQuery('.order-page #delivared_at').hide();
	jQuery('#order_status').change(function() {
		order_status = jQuery(this).val();
		//console.log(order_status);
		if(order_status == "Delivered"){
			jQuery('#delivared_at').show();
		}else{
			jQuery('#delivared_at').hide();
		}
	});

	jQuery(".clearbtn").click(function () {
		jQuery("#drivers input[type='text']").attr('value','');
		jQuery("#drivers input[type='time']").attr('value','');
		jQuery('#order_status option').attr('selected', false);
	});	
});

function validateNumber(event) {
	var key = window.event ? event.keyCode : event.which;
	if (event.keyCode === 8 || event.keyCode === 46 || event.keyCode === 9
	 || event.keyCode === 37 || event.keyCode === 39) {
			return true;
	}
	else if ( key < 48 || key > 57 ) {
			event.preventDefault();
	}
	else return true;
}