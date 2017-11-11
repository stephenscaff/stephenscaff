  


/*global jQuery */
/*jshint unused:false */

/** 
 * Load to Scroll
 */
(function($) {

  var loadThenScroll = (function() {


    var settings = {
      scrollSpeed: 600,
      scrollDelay: 500, 
      scrollOffset: 0,
      easing:       'easeInOutSine',
    };

  return {
    init: function() {
      this.doScroll();
    },

    doScroll: function() {
      //This a page anchor link? 
      if (window.location.hash) {        
        //Then, slow your roll son, load then scroll 
        setTimeout(function() {
        $('html, body').scrollTop(0).show();
        $('html, body').stop().animate({
          scrollTop: $(window.location.hash).offset().top-settings.scrollOffset
        }, {
            // Duration
          duration: settings.scrollSpeed,
          // Easing
          easing: settings.scrollEasing,
          //Complete callback
          complete: loadThenScroll.headerEntrance
        });
        }, settings.scrollDelay);
      }
    },

    /** 
     * Make header visible after scroll interaction
     */
    headerEntrance: function(){
      setTimeout(function() {
        $('body').removeClass('scrolling-down').addClass('scrolling-up');
      }, 400);
    },
  }
})();

loadThenScroll.init();

})(jQuery);


