/**
 * Detect Scolling direction
 *
 */
(function($) {
  scrollDirection = {
    
    init: function() {
      var didScroll;
      var lastScrollTop = 0;
      var scrollDistance = 15;
      var navbarHeight = $('.header-main').outerHeight();

      $(window).scroll(function(){
        didScroll = true;
      });

      function hasScrolled() {
        
        var st = $(this).scrollTop();
        
        if(Math.abs(lastScrollTop - st) <= scrollDistance) {
          return;
        }

        if (st > lastScrollTop && st > navbarHeight){
          $('body').removeClass('at-top close-to-top').removeClass('scrolling-up').addClass('scrolling-down');
        } else if(st + $(window).height() < $(document).height()) {
          $('body').removeClass('scrolling-down').addClass('scrolling-up'); 
        }
        if($('body').hasClass('scrolling-up') && (st <= 225)){
          $('body').addClass('close-to-top');
        }
        if(st === 0) {
          $('body').removeClass('scrolling-down scrolling-up close-to-top').addClass('at-top'); 
        }

        lastScrollTop = st;
      }

      setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
      }, 250);
    }
  };
  scrollDirection.init();
})(jQuery);


