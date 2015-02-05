// JavaScript Document
jQuery(document).ready(function(e){
	
	//mediatheque mansonry
	var $containerIsotope=jQuery('#containerMediatheque').isotope({
	  itemSelector: '.item',
	  getSortData: {
		name: '.name',
		category: '[data-category]'
	  },
	  // layout mode options
	  masonry: {
		gutter: 18,
		columnWidth: 304
	  }
	});
	
	jQuery('.tri a, .filtre a').click(function(e){
		e.preventDefault();
		var filterValue =getFiltreMediathque(jQuery(this));
		console.log(filterValue);
	  	$containerIsotope.isotope({ filter: filterValue });		
	});
	
	jQuery('#containerMediatheque .item').hover(function(e) {
        jQuery(this).find('.contenuMedia').slideToggle( "slow");
    });
	
	
	jQuery('#containerMediatheque').infinitescroll({
		navSelector  	: "#next:last",
		nextSelector 	: "a#next:last",
		itemSelector 	: ".item",
		debug		 	: false,
		dataType	 	: 'html',
        maxPage         : 3,
//		prefill			: true,
//		path: ["http://nuvique/infinite-scroll/test/index", ".html"]
		path: function(index) {
			return "infinite.html";
		}
		// behavior		: 'twitter',
		// appendCallback	: false, // USE FOR PREPENDING
		// pathParse     	: function( pathStr, nextPage ){ return pathStr.replace('2', nextPage ); }
    }, function(newElements, data, url){
    	//USE FOR PREPENDING
		console.log(newElements);
    	$containerIsotope.isotope( 'appended', newElements )
    	//
    	//END OF PREPENDING

//    	window.console && console.log('context: ',this);
//    	window.console && console.log('returned: ', newElements);
    	
    });
	
});

function getFiltreMediathque(elementEnCours){
	elementEnCours.parent().parent().find('a').removeClass('active');
	elementEnCours.addClass('active');
	
	var filterValue="";
	if(jQuery('.tri a.active').attr('data-filter')){
		filterValue += jQuery('.tri a.active').attr('data-filter');
	}
	if(jQuery('.filtre a.active').attr('data-filter')){
		filterValue += jQuery('.filtre a.active').attr('data-filter');
	}
	
	
	return filterValue;
	
}
	