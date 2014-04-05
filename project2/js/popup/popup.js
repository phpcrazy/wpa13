$(document).ready(function() {
		var o;

		//for popup about
		o = new Overlay();
			
		jQuery('.anchor').click(function($e){
			$e.preventDefault();
			o.content({html: jQuery(this.getAttribute('href')).html()}).show();
		});

});