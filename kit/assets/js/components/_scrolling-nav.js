(function($) {
  
  var ScrollingDirection = (function() {
  
  // Vars
  var didScroll,
      lastScrollTop = 0,
      scrollDistance = 25,
      navbarHeight = $('.site-header').outerHeight(),
      scrollingDown = 'scrolling-down',
      scrollingUp = 'scrolling-up',
      body = $('body');
    

  return{
      
    init: function() {  
      this.handleScroll();
    },

    /** 
     * Handle Scroll Behavoir
     * Setects if scrolling Down or Up and adds related class.
     * Thottles scroll via setInterval
     */
    handleScroll: function(){
      var didScrol;
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
    // Throttle
    setInterval(function() {
      if (didScroll) {
        hasScrolled();
        didScroll = false;
        }
      }, 250);
    },
  };
})();
  
ScrollingDirection.init();
})(jQuery);
