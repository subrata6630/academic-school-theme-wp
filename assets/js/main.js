(function ($) {
	"use strict";

    jQuery(document).ready(function($){
        $(".home-list").owlCarousel({
    		loop:true,
    		dots:true,
    		nav:false,
    	    autoplay:true,
    		responsiveClass: true,
			responsive: {
			  0: {
				items: 1,
			  },
			  480: {
				items: 1,
			  },
			  768: {
				items: 1,
			  },
			  1000: {
				items:1,
			  }
			}

    	});
        
        
        $(".teacher-list").owlCarousel({
    		loop:true,
    		dots:true,
    		nav:false,
    		margin:30,
    		autoplay:true,
    		responsiveClass: true,
			responsive: {
			  0: {
				items: 1,
			  },
			  480: {
				items: 2,
			  },
			  768: {
				items: 3,
			  },
			  1000: {
				items: 4,
			  }
			}

    	});
        
       
             
        $(".video-list").owlCarousel({
    	    loop:true,
    		dots:true,
    		nav:false,
            autoplayHoverPause: true,
    		margin:30,
    		autoplay:true,
    		responsiveClass: true,
			responsive: {
			  0: {
				items: 1,
			  },
			  480: {
				items: 2,
			  },
			  768: {
				items: 3,
			  },
			  1000: {
				items: 4,
			  }
			}

    	});
        
             
        $(".acadcmic-list").owlCarousel({
    	    loop:true,
    		dots:true,
    		nav:false,
            autoplayHoverPause: true,
    		margin:30,
    		autoplay:true,
    		responsiveClass: true,
			responsive: {
			  0: {
				items: 1,
			  },
			  480: {
				items: 2,
			  },
			  768: {
				items: 3,
			  },
			  1000: {
				items: 4,
			  }
			}

    	});
        
     
        
    $(".blog-list").owlCarousel({
        	
        	autoplay:true,
        	margin:20,
        	loop:true,
        	nav:false,
            autoplayHoverPause: true,
          	responsiveClass: true,
			responsive: {
			  0: {
				items: 1,
			  },
			  480: {
				items: 2,
			  },
			  768: {
				items: 3,
			  },
			  1000: {
				items: 3,
			  }
			}
        });
	
        
          
        $(".Partner-list").owlCarousel({
        	
        	autoplay:true,
        	margin:30,
        	loop:true,
            dots:false,
        	nav:false,
        	responsiveClass: true,
			responsive: {
			  0: {
				items: 1,
			  },
			  480: {
				items: 2,
			  },
			  768: {
				items: 3,
			  },
			  1000: {
				items: 5,
			  }
			}
        })
        
        
      	$(".video-icon").magnificPopup({
         type: 'video',
       
       });
	
      
        $('.image-link').magnificPopup({
  type: 'image',
  mainClass: 'mfp-with-zoom', // this class is for CSS animation below

  zoom: {
    enabled: true, // By default it's false, so don't forget to enable it

    duration: 800, // duration of the effect, in milliseconds
    easing: 'ease-in-out', // CSS transition easing function

    // The "opener" function should return the element from which popup will be zoomed in
    // and to which popup will be scaled down
    // By defailt it looks for an image tag:
    opener: function(openerElement) {
      // openerElement is the element on which popup was initialized, in this case its <a> tag
      // you don't need to add "opener" option if this code matches your needs, it's defailt one.
      return openerElement.is('img') ? openerElement : openerElement.find('img');
    }
  }

});
    $(".counter-contant span").counterUp({
    			delay: 10,
                time: 1000
    });
		
        
		 new WOW().init();

        
        $(window).scroll(function(){
		        if ($(this).scrollTop() > 100) {
		            $('.scrollToTop').fadeIn();
		        } else {
		            $('.scrollToTop').fadeOut();
		        }
		    });

		    //Click event to scroll to top
		    $('.scrollToTop').on('click', function(){
		        $('html, body').animate({scrollTop : 0},800);
		        return false;
		    });
        
        

    });


    jQuery(window).load(function(){
//        jQuery(".page-loader").fadeOut(1000);
    });


}(jQuery));	