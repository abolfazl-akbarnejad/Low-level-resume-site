jQuery(window).load(function($) {
	"use strict";
	jQuery('.main-menu, .mobile-menu-wrapper').localScroll({
		offset: -100
	});
});	

if (jQuery(".header-wrapper-special").length > 0) {
	jQuery(window).load(function () {
		    "use strict";
			var offsetHeight = document.getElementById('header2').offsetHeight;
			jQuery(".header-extra").css("height", offsetHeight+"px");
	});
	jQuery(window).scroll(function () {
		"use strict";
		if( jQuery(document).scrollTop() >= jQuery('.header-wrapper-special').offset().top) {
			jQuery(".header-extra").css("display", "block");
			jQuery(".header-wrapper-special").addClass("header-fixed");
		} else {
			jQuery(".header-extra").css("display", "none");
			jQuery(".header-wrapper-special").removeClass("header-fixed");
		}
		if ( jQuery('.header-extra').offset().top >= jQuery('.header-wrapper-special').offset().top) {
			jQuery(".header-extra").css("display", "none");
			jQuery(".header-wrapper-special").removeClass("header-fixed");
		}
	
	});
}


jQuery(window).load(function($) {	
	"use strict";
	var urls_from_menu = jQuery('.main-menu li');
	var page_sections = jQuery('.onepager_section_class');
	page_sections.waypoint({
		handler: function(direction) {
		var pos = jQuery.inArray(this,page_sections);
		var active_section = page_sections.eq(direction === "up" ? Math.max(0,pos-1) : pos);
		var active_link = jQuery('.main-menu li a[href$="#' + active_section.attr("id") + '"]');
		urls_from_menu.removeClass("current_page_item");
		urls_from_menu.removeClass("current-menu-item");
		active_link.parent().addClass("current_page_item");
		active_link.parent().addClass("current-menu-item");
	},
	offset: '200'
	});
});

/* Videos START */

if (jQuery(".owl-carousel.videos_slider_wrapper").length > 0) {
jQuery(document).ready(function() {
	"use strict";
	  var owl_videos = jQuery(".owl-carousel.videos_slider_wrapper");
		   owl_videos.on('initialized.owl.carousel', function(e) {
				jQuery(".owl-item.active").eq(1).addClass('current-video');
			});
  
	  owl_videos.owlCarousel({
		  loop:true,
		  margin:30,
		  responsiveClass:true,
		  items: 3,
		  responsive:{
				0:{
					items:1,
					nav:true
				},
				600:{
					items:3,
					nav:false
				},
				1000:{
					items:3,
					nav:true,
					loop:true
				}
			},
	  
		 navText: [
		 "<i class='fa fa-arrow-circle-o-left'></i>",
		  "<i class='fa fa-arrow-circle-o-right'></i>"
		 ],
		 autoplay: false,
		 autoplayHoverPause: true
	  });
  
 
		owl_videos.on('translated.owl.carousel', function(e) {
		  jQuery(".owl-item").removeClass('current-video');
		  jQuery(".owl-item.active").eq(1).addClass('current-video');
		});

});

}
/* Videos END */

/* Circle progress bar
************************************************************/
 function easyCharts() {
 	  "use strict";
	   jQuery('.easyPieChart').each(function () {
			var $this, $parent_width, $chart_size;
			$this =jQuery(this);
			$parent_width = jQuery(this).parent().width();
			jQuery(this).css('height', $parent_width+'px');
		   // $this.data('easy-pie-chart', null);
			$chart_size = $this.attr('data-barSize');
			if (!$this.hasClass('chart-animated')) {
				$this.easyPieChart({
					animate: 3000,
					lineCap: 'round',
					lineWidth: $this.attr('data-lineWidth'),
					barColor: $this.attr('data-barColor'),
					trackColor: $this.attr('data-trackColor'),
					scaleColor: 'transparent',
					size: $parent_width,
					onStep: function(from, to, percent) {
						jQuery(this.el).find('.chart-percent span').text(Math.round(percent));
					}
				});
			}

		});
	
        
 }

jQuery(document).ready(function () {
	easyCharts();
});

jQuery(window).load(function($) {	
	"use strict";
	var urls_from_menu = jQuery('.main-menu li');
	var page_sections = jQuery('.onepager_section_class');
	page_sections.waypoint({
		handler: function(direction) {
		var pos = jQuery.inArray(this,page_sections);
		var active_section = page_sections.eq(direction === "up" ? Math.max(0,pos-1) : pos);
		var active_link = jQuery('.main-menu li a[href$="#' + active_section.attr("id") + '"]');
		urls_from_menu.removeClass("current_page_item");
		urls_from_menu.removeClass("current-menu-item");
		active_link.parent().addClass("current_page_item");
		active_link.parent().addClass("current-menu-item");
	},
	offset: '0'
	});
});

if (jQuery("#trigger-overlay").length > 0) {
	(function() {
	var triggerBttn = document.getElementById( 'trigger-overlay' ),
		overlay = document.querySelector( 'div.overlay' ),
		closeBttn = overlay.querySelector( '.overlay-close' );
		transEndEventNames = {
			'WebkitTransition': 'webkitTransitionEnd',
			'MozTransition': 'transitionend',
			'OTransition': 'oTransitionEnd',
			'msTransition': 'MSTransitionEnd',
			'transition': 'transitionend'
		},
		transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
		support = { transitions : Modernizr.csstransitions };

	function toggleOverlay() {
		if( classie.has( overlay, 'open' ) ) {
			classie.remove( overlay, 'open' );
			classie.add( overlay, 'close' );
			var onEndTransitionFn = function( ev ) {
				if( support.transitions ) {
					if( ev.propertyName !== 'visibility' ) return;
					this.removeEventListener( transEndEventName, onEndTransitionFn );
				}
				classie.remove( overlay, 'close' );
			};
			if( support.transitions ) {
				overlay.addEventListener( transEndEventName, onEndTransitionFn );
			}
			else {
				onEndTransitionFn();
			}
		}
		else if( !classie.has( overlay, 'close' ) ) {
			classie.add( overlay, 'open' );
		}
	}

	triggerBttn.addEventListener( 'click', toggleOverlay );
	closeBttn.addEventListener( 'click', toggleOverlay );
})();
}


if (jQuery("#trigger-overlay-sticky").length > 0) {
	"use strict";
	(function() {
	var triggerBttn = document.getElementById( 'trigger-overlay-sticky' ),
		overlay = document.querySelector( 'div.overlay' ),
		closeBttn = overlay.querySelector( '.overlay-close' );
		transEndEventNames = {
			'WebkitTransition': 'webkitTransitionEnd',
			'MozTransition': 'transitionend',
			'OTransition': 'oTransitionEnd',
			'msTransition': 'MSTransitionEnd',
			'transition': 'transitionend'
		},
		transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
		support = { transitions : Modernizr.csstransitions };

	function toggleOverlay() {
		if( classie.has( overlay, 'open' ) ) {
			classie.remove( overlay, 'open' );
			classie.add( overlay, 'close' );
			var onEndTransitionFn = function( ev ) {
				if( support.transitions ) {
					if( ev.propertyName !== 'visibility' ) return;
					this.removeEventListener( transEndEventName, onEndTransitionFn );
				}
				classie.remove( overlay, 'close' );
			};
			if( support.transitions ) {
				overlay.addEventListener( transEndEventName, onEndTransitionFn );
			}
			else {
				onEndTransitionFn();
			}
		}
		else if( !classie.has( overlay, 'close' ) ) {
			classie.add( overlay, 'open' );
		}
	}

	triggerBttn.addEventListener( 'click', toggleOverlay );
	closeBttn.addEventListener( 'click', toggleOverlay );
})();
}


jQuery(document).ready(function () {
	"use strict";
	jQuery(document).on("scroll", function(){
		if
      (jQuery(document).scrollTop() > 120){
		  jQuery(".header-wrapper.header2").addClass("shown");
		}
		else
		{
			jQuery(".header-wrapper.header2").removeClass("shown");
			
		}
	});
});

/* scrolling END */


/*	Testimonials START */
if (jQuery(".owl-carousel.testimonials-wrapper").length > 0) {
	jQuery(document).ready(function() {
		"use strict";
		  var owl = jQuery(".owl-carousel.testimonials-wrapper");
		  owl.owlCarousel({
	 
			  itemsCustom : [
				[0, 1],
				[450, 1],
				[600, 1],
				[700, 1],
				[1000, 1],
				[1200, 1],
				[1400, 1],
				[1600, 1]
			  ],
			  navigation : false,
			  pagination : true,
			  autoPlay: 5000,
			  stopOnHover: true
		  });
	});
}

/*	Testimonials END */


 
 /* Post filter START */	
if (jQuery(".pego-isotope-wrapper").length > 0) {	

jQuery(document).ready(function(){
	"use strict";
 jQuery(function() {
	var container = jQuery(".pego-isotope-wrapper");
	      container.isotope({
			itemSelector : ".isotope-item",
			layoutMode: "masonry",
			transitionDuration: "0.7s"	
      });
      var optionSets = jQuery(".option-set"),
          optionLinks = optionSets.find("a");

      optionLinks.on('click', function(){
        var $this = jQuery(this);
        
        if ( $this.hasClass("selected") ) {
          return false;
        }
        var optionSet = $this.parents(".option-set");
        optionSet.find(".selected").removeClass("selected");
        $this.addClass("selected");
  
        var options = {},
            key = optionSet.attr("data-option-key"),
            value = $this.attr("data-option-value");
     
        value = value === "false" ? false : value;
        options[ key ] = value;
        if ( key === "layoutMode" && typeof changeLayoutMode === "function" ) {
         
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          container.isotope( options );
        }
        
        return false;
      });
	
	
 });
});  


jQuery(window).load(function(){
	"use strict";
	var container = jQuery(".pego-isotope-wrapper");
	    container.isotope({
		itemSelector : ".isotope-item",
		layoutMode: "masonry",
		transitionDuration: "0.7s"	
    });
});


(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.on('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');


jQuery(window).smartresize(function(){
	"use strict";
  	var container = jQuery(".pego-isotope-wrapper");
	    container.isotope({
		itemSelector : ".isotope-item",
		layoutMode: "masonry",
		transitionDuration: "0.7s"	
    });
  
});
}

 /* Post filter START */	
if (jQuery(".pego-isotope-wrapper-type2").length > 0) {	

jQuery(document).ready(function(){
	"use strict";
 	jQuery(function() {
	var container = jQuery(".pego-isotope-wrapper-type2");
	      container.isotope({
			itemSelector : ".portfolio-items-single-type2",
			transitionDuration: "0.7s",
			layoutMode: "masonry",
			percentPosition: true,
			columnWidth: '.portfolio-items-single-type2-sizer'
      });
      var optionSets = jQuery(".option-set"),
          optionLinks = optionSets.find("a");

      optionLinks.on('click', function(){
        var $this = jQuery(this);
        
        if ( $this.hasClass("selected") ) {
          return false;
        }
        var optionSet = $this.parents(".option-set");
        optionSet.find(".selected").removeClass("selected");
        $this.addClass("selected");
  
        var options = {},
            key = optionSet.attr("data-option-key"),
            value = $this.attr("data-option-value");
     
        value = value === "false" ? false : value;
        options[ key ] = value;
        if ( key === "layoutMode" && typeof changeLayoutMode === "function" ) {
         
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          container.isotope( options );
        }
        
        return false;
      });
	
	
 });
});  


jQuery(window).load(function(){
	"use strict";
	var container = jQuery(".pego-isotope-wrapper-type2");
	    container.isotope({
			itemSelector : ".portfolio-items-single-type2",
			transitionDuration: "0.7s",
			layoutMode: "masonry",
			percentPosition: true,
			columnWidth: '.portfolio-items-single-type2-sizer'
    });
});


(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.on('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');


jQuery(window).smartresize(function(){

  	var container = jQuery(".pego-isotope-wrapper-type2");
	    container.isotope({
			itemSelector : ".portfolio-items-single-type2",
			transitionDuration: "0.7s",
			layoutMode: "masonry",
			percentPosition: true,
			columnWidth: '.portfolio-items-single-type2-sizer'
    });
  
});

}


/*	Menu START */
jQuery(function(){
	"use strict";
	// main navigation init
	jQuery('.main-menu .sf-menu').superfish({
		delay:	300,	// one second delay on mouseout 
		animation:   {opacity:'show',height:'show'}, // fade-in and slide-down animation
		speed:       'fast',  // faster animation speed 
		autoArrows:  true,   // generation of arrow mark-up (for submenu) 
		dropShadows: false
	});
});
 /*	Menu END */
 


(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.on('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');


/*	Footer and Header START */
jQuery(document).ready(function () {
	"use strict";
	if (jQuery("#footer").length > 0) {
 		var offsetHeight = document.getElementById('footer').offsetHeight;
		jQuery(".container-wrapper").css("padding-bottom", offsetHeight+"px");
	}
	var offsetHeightHeader = document.getElementById('header').offsetHeight;
	if (jQuery(".header-info").length > 0) {
		var offsetHeightHeader2 = document.getElementById('header-info').offsetHeight;
		var mobileheight = offsetHeightHeader - offsetHeightHeader2;
		jQuery(".mobile-menu-wrapper").css("top", mobileheight+"px");
	} else {
		jQuery(".mobile-menu-wrapper").css("top", offsetHeightHeader+"px");
	}
	
});

jQuery(window).smartresize(function(){
	"use strict";
	if (jQuery("#footer").length > 0) {
  		var offsetHeight = document.getElementById('footer').offsetHeight;
		jQuery(".container-wrapper").css("padding-bottom", offsetHeight+"px");
	}
	var offsetHeightHeader = document.getElementById('header').offsetHeight;
	if (jQuery(".header-info").length > 0) {
		var offsetHeightHeader2 = document.getElementById('header-info').offsetHeight;
		var mobileheight = offsetHeightHeader - offsetHeightHeader2;
		jQuery(".mobile-menu-wrapper").css("top", mobileheight+"px");
	} else {
		jQuery(".mobile-menu-wrapper").css("top", offsetHeightHeader+"px");
	}
	
});

jQuery(window).load(function () {
	if (jQuery("#footer").length > 0) {
 		var offsetHeight = document.getElementById('footer').offsetHeight;
		jQuery(".container-wrapper").css("padding-bottom", offsetHeight+"px");
	}
	var offsetHeightHeader = document.getElementById('header').offsetHeight;
	if (jQuery(".header-info").length > 0) {
		var offsetHeightHeader2 = document.getElementById('header-info').offsetHeight;
		var mobileheight = offsetHeightHeader - offsetHeightHeader2;
		jQuery(".mobile-menu-wrapper").css("top", mobileheight+"px");
	} else {
		jQuery(".mobile-menu-wrapper").css("top", offsetHeightHeader+"px");
	}
});
/*	Footer and HEader END */

/* Pretty photo START */	
	jQuery(window).load(function(){
		"use strict";
		if (jQuery("a[data-gal^='prettyPhoto']").length > 0) {
			jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({hook: 'data-gal'});
		}
	});
	
	jQuery(window).load(function(){
		"use strict";
		if (jQuery("a[rel^='prettyPhoto']").length > 0) {
	  		jQuery("a[rel^='prettyPhoto']").prettyPhoto();
	  	}
	});
/* Pretty photo END */	

/*	Page load/switch transition  START */
	jQuery(document).ready(function($) {
		"use strict";
		$(".animsition").animsition({
		inClass               :   'fade-in',
		outClass              :   'fade-out',
		inDuration            :    1500,
		outDuration           :    800,
		linkElement           :   '.animsition-link',
		loading               :    true,
		loadingParentElement  :   'body', //animsition wrapper element
		loadingClass          :   'animsition-loading',
		unSupportCss          : [ 'animation-duration',
								  '-webkit-animation-duration',
								  '-o-animation-duration'
								],
		overlay               :   false,

		overlayClass          :   'animsition-overlay-slide',
		overlayParentElement  :   'body'
		});
	});
/*	Page load/switch transition  END */

/* Mobile menu START */
jQuery(document).ready(function($){
	"use strict";
	var slide = false;
	$(".menu-icon-mobile").on( "click", function() {
	
		if (slide == false) {
			$(".mobile-menu-wrapper").slideDown("slow");
			jQuery(".menu-icon.menu-icon-mobile").addClass("opened");
			slide = true;
		}
		else {
			$(".mobile-menu-wrapper").slideUp("slow");
			jQuery(".menu-icon.menu-icon-mobile").removeClass("opened");
			slide = false;
		}
  	});
  	$(".mobile-menu-wrapper a").on( "click", function() {
 		if (slide == false) {
			$(".mobile-menu-wrapper").slideDown("slow");
			jQuery(".menu-icon.menu-icon-mobile").addClass("opened");
			slide = true;
		}
		else {
			$(".mobile-menu-wrapper").slideUp("slow");
			jQuery(".menu-icon.menu-icon-mobile").removeClass("opened");
			slide = false;
		}
  	});
  	
  	
  	
});
/* Mobile menu END */




jQuery(document).ready(function () {
	"use strict";
    jQuery('.scroll_to_top').on( "click", function() {
        jQuery("html, body").animate({
            scrollTop: 0
        }, 800);
        return false;
    });

});


function goBack() {
    window.history.back();
}

