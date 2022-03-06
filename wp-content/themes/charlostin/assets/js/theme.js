;(function($){
    "use strict"
	
	
	var nav_offset_top = $('header').height() + 50; 
    /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/

	//* Navbar Fixed  
    function navbarFixed(){
        if ( $('.header_area').length ){ 
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();   
                if (scroll >= nav_offset_top ) {
                    $(".header_area").addClass("navbar_fixed");
                } else {
                    $(".header_area").removeClass("navbar_fixed");
                }
            });
        };
    };
    navbarFixed();

	
	
	
	/*----------------------------------------------------*/
    /*  Main Slider js
    /*----------------------------------------------------*/
    function main_slider(){
        if ( $('#main_slider').length ){
            $("#main_slider").revolution({
                sliderType:"standard",
                sliderLayout:"auto",
                delay:4000000,
                disableProgressBar:"on",
                navigation: {
                    onHoverStop: 'off',
                    touch:{
                        touchenabled:"on"
                    },
                    arrows: {
                        style:"zeus",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:992,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 50,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 50,
                            v_offset: 0
                        }
                    },
                },
                responsiveLevels:[4096,1199,992,767,480],
                gridwidth:[1170,970,750,700,480],
                gridheight:[770,770,650,550,500],
                lazyType:"smart",
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            })
        }
    }
    main_slider();
	
	/*----------------------------------------------------*/
    /*  Main Slider js
    /*----------------------------------------------------*/
    function main_slider2(){
        if ( $('#main_slider2').length ){
            $("#main_slider2").revolution({
                sliderType:"standard",
                sliderLayout:"auto",
                delay:4000000,
                disableProgressBar:"on",
                navigation: {
                    onHoverStop: 'off',
                    touch:{
                        touchenabled:"on"
                    },
                    arrows: {
                        style:"zeus",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:992,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 50,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 50,
                            v_offset: 0
                        }
                    },
                },
                responsiveLevels:[4096,1199,992,767,480],
                gridwidth:[1170,970,750,700,480],
                gridheight:[730,730,650,550,500],
                lazyType:"smart",
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            })
        }
    }
    main_slider2();
	
	
	
	/*----------------------------------------------------*/
    /*  Explor Room Slider
    /*----------------------------------------------------*/
    function room_slider(){
        if ( $('.room_slider').length ){
            $('.room_slider').owlCarousel({
                loop:true,
                margin: 30,
                items: 4,
                nav:true,
                autoplay: false,
                smartSpeed: 1500,
                dots:true,
                navContainerClass: 'room_slider',
                navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    650: {
                        items: 2,
                    },
                    992: {
                        items: 4,
                    }
                }
            })
        }
    }
    room_slider();
	
	$(document).ready(function() {
		$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});
	});
	
	
	/*----------------------------------------------------*/
    /*  Gallery One js
    /*----------------------------------------------------*/
	function gallery_isotope(){
		if ( $('.gallery_one_area').length ){
			
			// Activate isotope in container
            $(".g_one_inner").imagesLoaded( function() {
                $(".g_one_inner").isotope({
					layoutMode: 'fitRows',
					percentPosition:true,
					masonry: {
						columnWidth: 1,
					}            
                }); 
            }); 
			
			// Add isotope click function
			$(".g_fillter ul li").on('click',function(){
				$(".g_fillter ul li").removeClass("active");
				$(this).addClass("active");

				var selector = $(this).attr("data-filter");
                $(".g_one_inner").isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 450,
                        easing: "linear",
                        queue: false,
                    }
                });
				return false;
			});
		}
	}

	gallery_isotope();
	
	/*----------------------------------------------------*/
    /*  Simple LightBox js
    /*----------------------------------------------------*/
    $('.imageGallery1 .light').simpleLightbox();
	
	$('select').niceSelect();
	
	
	var $gallery_img = $(".sc-gallery");

	$gallery_img.each(function () {

		$('a.btn-gallery').on('click', function(event) {
			event.preventDefault();

			var gallery = $(this).attr('href');

			$(gallery).magnificPopup({
				delegate: 'a',
				type:'image',
				gallery: {
					enabled: true
				}
			}).magnificPopup('open');
		});

	});
	
	
	
	/*----------------------------------------------------*/
    /*  Testimonials Slider
    /*----------------------------------------------------*/
    function testimonials_slider(){
        if ( $('.testi_slider').length ){
            $('.testi_slider').owlCarousel({
                loop:true,
                margin: 30,
                items: 2,
                nav: false,
                autoplay: true,
                smartSpeed: 1500,
                dots:true, 
                responsiveClass: true,
				responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 2,
                    },
                }
            })
        }
    }
    testimonials_slider();
	
	
	$(window).on('load', function() {
	  // The slider being synced must be initialized first
	  $('#carousel').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		itemWidth: 144.5,
		itemMargin: 12,
		asNavFor: '#slider',
		prevText: '<i class="fa fa-angle-left" aria-hidden="true"></i>',  
		nextText: '<i class="fa fa-angle-right" aria-hidden="true"></i>',  
	  });

	  $('#slider').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		sync: "#carousel",
		prevText: '<i class="fa fa-angle-left" aria-hidden="true"></i>',  
		nextText: '<i class="fa fa-angle-right" aria-hidden="true"></i>',  
	  });
	});
	
	
	
	$('#datetimepicker1').datetimepicker();
	
	
	/*----------------------------------------------------*/
    /*  Search Popup js
    /*----------------------------------------------------*/
	$(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

        $('.popup-with-move-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-slide-bottom'
        });
    });
	

})(jQuery)