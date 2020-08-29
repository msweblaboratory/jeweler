$(document).ready(function(){   

	$('.insta-slider').owlCarousel({   
        loop:true,
        stagePadding: 50,
        nav: true,
        margin:10,
        dots:false,
        smartSpeed: 1700,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        navText: [ '❮','❯' ],

        responsive:{

            0:{		
                items:1

            },
            600:{
                items:3
            },
            1024:{
                items:5
            },	
        }

    });    

});