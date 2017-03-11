(function($){
	window.onbeforeunload = function(e){		
        window.name += ' [' + $(window).scrollTop().toString() + '[' + $(window).scrollLeft().toString();
	};
	
	$.maintainscroll = function() {
		if(window.name.indexOf('[') > 0)
		{
			var parts = window.name.split('[');			
			window.name = $.trim(parts[0]);
			window.scrollTo(parseInt(parts[parts.length - 1]), parseInt(parts[parts.length - 2]));
		}		
	};	
	$.maintainscroll();
})(jQuery);