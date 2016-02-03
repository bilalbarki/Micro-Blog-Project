(function ($) {
	$(document).ready(function(){
		$("#search-button").click( function(event){
		    event.preventDefault();
		    if ( $(this).hasClass("isDown") ) {
		    	$(".search-form").stop().animate({width:"0px"}, 300);
		        $("input.search-field").stop().animate({paddingLeft:"0px"}, 300);                           
		    } else {
		    	$(".search-form").stop().animate({width:"230px"}, 300); 
		        $("input.search-field").stop().animate({paddingLeft:"7px"}, 300); 
		    }
		    $(this).toggleClass("isDown");
		    return false;
		});
	});
}(jQuery));

