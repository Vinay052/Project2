/*global jQuery:false */
(function ($) {


	$(window).load(function(){
      $("#navigation").sticky({ topSpacing: 0 });
    });
	

	wow = new WOW(
      {
        animateClass: 'animated',
        offset:       0
      }
    );
    wow.init();

	$('ul.nav li.dropdown').hover(function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});	

	
	//jQuery to collapse the navbar on scroll
	$(window).scroll(function() {
		if ($(".navbar").offset().top > 50) {
			$(".navbar-fixed-top").addClass("top-nav-collapse");
		} else {
			$(".navbar-fixed-top").removeClass("top-nav-collapse");
		}
	});
	
	//jQuery for page scrolling feature - requires jQuery Easing plugin
	$(function() {
		$('.navbar-nav li a').bind('click', function(event) {
			var $anchor = $(this);
			var nav = $($anchor.attr('href'));
			if (nav.length) {
			$('html, body').stop().animate({				
				scrollTop: $($anchor.attr('href')).offset().top				
			}, 1500, 'easeInOutExpo');
			
			event.preventDefault();
			}
		});
		$('a.totop,a#btn-scroll,a.btn-slide').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});
	});
	
	//home slider
	jQuery('#valera-slippry').slippry({
	pager: false
	
	});
	
	$('.testimonialslide').flexslider({
	animation: "slide",
	slideshow: false,
	directionNav:false,
	controlNav: true
	});
	
	
	  // About section scroll
    $(".overlay-detail a").on('click', function(event) {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 900, function(){
            window.location.hash = hash;
        });
    });
         $(".overlay-detail-career a").on('click', function(event) {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 900, function(){
            window.location.hash = hash;
        });
    });
           $(".overlay-detail-about a").on('click', function(event) {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 900, function(){
            window.location.hash = hash;
        });
    });
	
	
	//owl carousel
	$('#owl-works').owlCarousel({
            items : 4,
            itemsDesktop : [1199,5],
            itemsDesktopSmall : [980,5],
            itemsTablet: [768,5],
            itemsTabletSmall: [550,2],
            itemsMobile : [480,2],
        });
	
	//nivo lightbox
	$('.owl-carousel .item a').nivoLightbox({
		effect: 'fadeScale',                             // The effect to use when showing the lightbox
		theme: 'default',                           // The lightbox theme to use
		keyboardNav: true,                          // Enable/Disable keyboard navigation (left/right/escape)
		clickOverlayToClose: true,                  // If false clicking the "close" button will be the only way to close the lightbox
		onInit: function(){},                       // Callback when lightbox has loaded
		beforeShowLightbox: function(){},           // Callback before the lightbox is shown
		afterShowLightbox: function(lightbox){},    // Callback after the lightbox is shown
		beforeHideLightbox: function(){},           // Callback before the lightbox is hidden
		afterHideLightbox: function(){},            // Callback after the lightbox is hidden
		onPrev: function(element){},                // Callback when the lightbox gallery goes to previous item
		onNext: function(element){},                // Callback when the lightbox gallery goes to next item
		errorMessage: 'The requested content cannot be loaded. Please try again later.' // Error message when content can't be loaded
	});
	

	jQuery('.appear').appear();
	jQuery(".appear").on("appear", function(data) {
			var id = $(this).attr("id");
			jQuery('.nav li').removeClass('active');
			jQuery(".nav a[href='#" + id + "']").parent().addClass("active");					
		});
		
		//stats
		var runOnce = true;
		jQuery(".stats").on("appear", function(data) {
			var counters = {};
			var i = 0;
			if (runOnce){
				jQuery('.number').each(function(){
					counters[this.id] = $(this).html();
					i++;
				});
				jQuery.each( counters, function( i, val ) {
					//console.log(i + ' - ' +val);
					jQuery({countNum: 0}).animate({countNum: val}, {
					  duration: 3000,
					  easing:'linear',
					  step: function() {
						jQuery('#'+i).text(Math.floor(this.countNum));
					  }
					});
				});
				runOnce = false;
			}
		});
		
		//parallax
        if ($('#parallax1').length  || $('#parallax2').length)
        {
			$(window).stellar({
				responsive:true,
                scrollProperty: 'scroll',
                parallaxElements: false,
                horizontalScrolling: false,
                horizontalOffset: 0,
                verticalOffset: 0
            });

        }
		
		//video bg
		$(".bg-player").mb_YTPlayer();
		
	$("#js-rotating").Morphext({
		// Animation type (refer to Animate.css for a list of available animations)
		animation: "fadeInDown",
		// An array of words to rotate are created based on this separator. Change it if you wish to separate the words differently (e.g. So Simple | Very Doge | Much Wow | Such Cool)
		separator: ",",
		// The delay between each word in milliseconds
		speed: 3000
	});
		
	//nicescroll
	$("html").niceScroll({zindex:999,cursorborder:"",cursorborderradius:"0px",cursorwidth:"10px",cursorcolor:"#555",cursoropacitymin:.5});
	function initNice() {
		if($(window).innerWidth() <= 960) {
			$('html').niceScroll().remove();
		} else {
			$("html").niceScroll({zindex:999,cursorborder:"",cursorborderradius:"2px",cursorcolor:"#555",cursoropacitymin:.1});
		}
	}
	$(window).load(initNice);
	$(window).resize(initNice);
	
})(jQuery);
$(window).load(function() {
	$(".loader").delay(300).fadeOut();
	$("#page-loader").delay(500).fadeOut("slow");
});


$(function() {

    var $el, leftPos, newWidth,
        $mainNav = $(".main");
    
    $mainNav.append("<div id='magic-line'></div>");
    var $magicLine = $("#magic-line");
    

    
    $magicLine
        .width($(".current_page_item").width())
        .css("left", $(".current_page_item a").position().left)
        .data("origLeft", $magicLine.position().left)
        .data("origWidth", $magicLine.width());
        
    $(".main li a").hover(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.parent().width();
        $magicLine.stop().animate({
            left: leftPos,
            width: newWidth
        });
        
        
    }, function() {
        $magicLine.stop().animate({
            left: $magicLine.data("origLeft"),
            width: $magicLine.data("origWidth")
        });    
    });

        
    
    $('.main li:not(".current_page_item")').hover(
        function(){ $('#magic-line').addClass('hover'); },
       function(){ $('#magic-line').removeClass('hover'); }
);
    
   
  
});


$(function() {

    var $el, leftPos, newWidth;
        $mainNav2 = $("#fancy-nav");
     
    /*
        EXAMPLE TWO
    */
    
    $mainNav2.append("<li id='magic-line-two'></li>");
    
    var $magicLineTwo = $("#magic-line-two");
    
    $magicLineTwo
        .width($(".current_page_item_two").width())
        .height($mainNav2.height())
        .css("left", $(".current_page_item_two a").position().left)
        .data("origLeft", $(".current_page_item_two a").position().left)
        .data("origWidth", $magicLineTwo.width())
        .data("origColor", $(".current_page_item_two a").attr("rel"));
                
    $("#fancy-nav a").hover(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.parent().width();
        $magicLineTwo.stop().animate({
            left: leftPos,
            width: newWidth,
            backgroundColor: $el.attr("rel")
        })
    }, function() {
        $magicLineTwo.stop().animate({
            left: $magicLineTwo.data("origLeft"),
            width: $magicLineTwo.data("origWidth")
        });    
    });
    
    /* Kick IE into gear */
    $(".current_page_item_two a").mouseenter();
    
}); 