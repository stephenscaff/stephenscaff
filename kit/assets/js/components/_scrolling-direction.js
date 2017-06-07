/**
 * Detect Scolling direction
 *
 */
function scrollDirection(){
  // Hide Header on on scroll down
  var didScroll,
      lastScrollTop = 0,
      scrollDistance = 25,
      navbarHeight = $('.site-header').outerHeight(),
      scrollDown = 'scrolling-down',
      scrollingUp = 'scrolling-up',
      body = $('body');

  $(window).scroll(function(){
    didScroll = true;
  });

  function hasScrolled() {
    var st = $(this).scrollTop();

    if(Math.abs(lastScrollTop - st) <= scrollDistance) {
      return;
    }
    if (st > lastScrollTop && st > navbarHeight){
      body.removeClass(scrollingUp).addClass(scrollingDown);
    } else {
      // Scroll Up
      if(st + $(window).height() < $(document).height()) {
        body.removeClass(scrollingDown).addClass(scrollingUp); 
      }
      if(st === 0) {
        body.removeClass(scrollingDown).removeClass(scrollingUp); 
      }
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
scrollDirection();




/** 
 * Scrolling Nav
 * Function for nav interactions on scroll.
 */
(function($) {

  var ScrollingNav = (function() {
    
    var $body = $('body'),
        scrollDistance = '70',
        scrollThrottle = '350',
        scrollingClass = 'scrolling-down';
      
    return{
      
      init: function() {  
        this.onScrollDown();
      },

      /** 
       * Scrolling Down
       * Throttles scrolling via setInterval
       */
      onScrollDown: function(){
        
        var scrolledDown;

        $(window).scroll(function(){
          scrolledDown = true;
        });
        // Throttle scroll
        setInterval(function() {
          if (scrolledDown) {
            ScrollingNav.hasScrolled();
            scrolledDown = false;
          }
        }, scrollThrottle);
      },   

      /**
       * Has Scrolled
       * Adds and removes scrolling class to body
       */
      hasScrolled: function() {
        var scrolling = $(window).scrollTop();
        (scrolling >= scrollDistance) ? $body.addClass(scrollingClass) : $body.removeClass(scrollingClass);
      },
    };
  })();
  
ScrollingNav.init();
})(jQuery);

