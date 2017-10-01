$(document).ready(function(){
	"use strict";
	 $(".main-slider").owlCarousel({
        autoPlay: false,//3000, //Set AutoPlay to 3 seconds
        navigation: true,
        navigationText:  ["<span><i class=\"fa fa-angle-left fa-lg\"></i></span>","<span><i class=\"fa fa-angle-right fa-lg\"></i></span>"],
        singleItem: true,
        pagination: false
    });


 	$(".causes").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items: 3,
        itemsCustom: [[0, 1], [400, 1], [700, 2], [1000, 3], [1200, 3], [1600, 3]]
    });

    //progressbar with tooltips
	$(function () { 
		"use strict";
	  $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');
	});  

	$( window ).scroll(function() {
	"use strict";   
	  // if($( window ).scrollTop() > 10){   scroll down abit and get the action   
	  $(".progress-bar").each(function(){
	    var each_bar_width = $(this).attr('aria-valuenow');
	    $(this).width(each_bar_width + '%');
	  });
	       
	 //  }  
	});

	$(function(){
      "use strict";
      // Instantiate MixItUp:
      $('#Container').mixItUp();
    });
     
     $(".test-sldier").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items: 2,
        itemsCustom: [[0, 1], [400, 1], [700, 1], [1000, 1], [1200, 2], [1600, 2]]
    });


});

