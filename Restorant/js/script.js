$(document).ready(function(){
      $('.slider').slick({
        arrows: true,
        dots: true,
        adaptiveHeight: true,
         infinite: true,
	     slidesToShow: 3,
	     slidesToScroll: 3,
         speed: 600,

        
	      responsive: [
	        {
	          breakpoint: 1024,
	          settings: 
	          {
	            slidesToShow: 3,
	            slidesToScroll: 3,
	            infinite: true,
	            dots: true
	          }

	        },

	        {
	          breakpoint: 960,
	          settings: 
	          {
	            slidesToShow: 2,
	            slidesToScroll: 2
	          }

	        },

	        {
	          breakpoint: 480,
	          settings: 
	          {
	            slidesToShow: 1,
	            slidesToScroll: 1
	          }
	        }

	      ]
         








      });
});