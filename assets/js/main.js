/*
 * Name: Violet main js
 * Version: 1.0.1
 * URL: http://schoolz.cf
 * Description: This js file is required for different interactive task
 * Author: Rakib Hossain
 *
 */
(function($) {
    'use strict';

$(document).ready(function($){

    $('.mainmenu').slicknav({
      label: '',
    });

       var navbar = $('header'),
        //distance = navbar.offset().top,
        distance = navbar.height(),
        $window = $(window);

    $window.scroll(function() {
        if ($window.scrollTop() >= distance) {
            navbar.removeClass('header-area').addClass('header-area');
        } else {
            navbar.removeClass('header-area');
        }
    });
    
 //==================Measure height======================
        var windowSize = $window.width();
        var windowHeight = getViewPortHeight();

        $(window).resize(function() {
            windowSize = $window.width();
            windowHeight = getViewPortHeight();
        });

        function getViewPortHeight() {
            //detech ios chrome
            if (navigator.userAgent.match('CriOS')) {
                return window.innerHeight;
            }
            return $window.height();
        }
        $('.home-height').css({
            'min-height' : '620px'
        });
        $('.full').css({
            'height': windowHeight + 'px'
        });


        var serviceHeightMax = getMaxServiceHight();
        $('.service').css({
            'min-height': 60 + serviceHeightMax + 'px'
        });
        var singleBlogHeightMax = getMaxsingleBlogHeightMax();
        $('.single-news').css({
            'min-height': singleBlogHeightMax + 'px'
        });

        function getMaxServiceHight() {
            var serviceHeight = $('.service').height();
            var tmp = serviceHeight;

            $('.service').each(function() {
                if ($(this).height() < serviceHeight) {
                    tmp = serviceHeight;
                } else {
                    tmp = $(this).height();

                }
            });
            return tmp;
        }
        function getMaxsingleBlogHeightMax() {
            var singleBlogHeight = $('.single-news').height();
            var tmp = singleBlogHeight;

            $('.single-news').each(function() {
                if ($(this).height() < singleBlogHeight) {
                    tmp = singleBlogHeight;
                } else {
                    tmp = $(this).height();

                }
            });
            return tmp;
        }

 //===============================Isotope======================
  //var $grid = $('.items').isotope({});
   //=============================MixitUp======================
    $('.items').mixItUp();

    $('.portfolio-item').on( 'mouseleave', function() {
    $('.portfolio-hover').addClass('animated');});
        

 //================================ owl-carousel======================
 //========header Slider slider=======
$('.main-slider').owlCarousel({
    center: true,
    items:1,
    loop:true,
    autoplay:true,
    margin:0,
    responsive: { 0: {items: 1} }
  });    

  $('.main-slider').on('translate.owl.carousel',function(){
    $('.slide h1:odd').removeClass('animated fadeInUp').css("opacity","0.02");
    $('.slide h1:even').removeClass('animated fadeInDown').css("opacity","0.02");
  });
  $('.main-slider').on('translated.owl.carousel',function(){
    $('.slide h1:odd').addClass('animated fadeInUp').css("opacity","1");
    $('.slide h1:even').addClass('animated fadeInDown').css("opacity","1");
  });


//===========Testimonial Slider=============
              var owl = $('.testimonial-slide');
              owl.owlCarousel({
                loop: true,
                items: 1,
                nav: false,
                navigation: true,
                autoplay:true,
                autoplayTimeout:3500,
                autoplayHoverPause:true,
                //animateOut: 'slideOutDown',
                //animateIn: 'slideIntDown',
                
              })
              owl.on('translate.owl.carousel',function(){
                $('.testimonial .person').removeClass('animated zoomIn').css("opacity","0.2");
              });
              owl.on('translated.owl.carousel',function(){
                $('.testimonial .person').addClass('animated zoomIn').css("opacity","1");
              });

        
        
//============Partner slider==========  
$('.partner-slide').owlCarousel({
    center: true,
    items:5,
    loop:true,
    margin:5,
    responsive: { 0: {items: 1}, 600: {items: 3}, 1000: {items: 5} }
});

    
//===============wow js========== 
    new WOW().init();
  
  
  
//===============counterup==========
    $('.counter').counterUp({
         delay: 10,
         time: 9000
    });

   // $(".title h2").append("<p class='hr-40'></p>");
   
   
   
//===============UI Top==========
    $().UItoTop({ easingType: 'easeOutQuart' });

//=========Smoth Scrolling=============
        $("a").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });





//===============contact map scrolling disable==========
  $('.contact-map').click(function(){
      $(this).find('#map').addClass('clicked')}).mouseleave(function(){
      $(this).find('#map').removeClass('clicked')});


//jQuery ready end        
});

$(window).load(function () {
    $(".home-preloder").fadeOut(3000);
});

}(jQuery));