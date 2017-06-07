/**
 * Scroll Squencer
 * Used a data attribute and it's value to sequentially
 * add a class to trigger animations
 */
var ScrollSequencer = (function() {
  
  // Vars
  var scrollClass = $('.js-scroll');
  var scrollChild = scrollClass.data('scroll-seq');
  var scrollOffset = $('.js-scroll').data('scroll-offset');
  var scrollSequence = $('[data-scroll-seq="'+scrollChild+'"]');

  return {

    init: function(){
      this.scrollTrigger();
    },

    /**
     * Scroll Trigger
     * Inlcludes the Waypoints Util and a util to 
     * sequentially add classes to children inside the scroll
     * trigger class.
     */
    scrollTrigger: function(trigger) { 
    
      /**
       * Loop through our data-scroll-seqs
       */
      scrollSequence.each( function() {
        
        var self = $(this);
        //scrollAnimationClass = $(this, scrollChild);

        var scrollTrigger = ( trigger ) ? trigger : self;

        /** 
         * Our Waypoints scroll Trigger Utility
         */
        scrollTrigger.waypoint(function() {
          var children = $(scrollChild);
          var index = 0;

          /**
           * Add Class to Next Child Util
           */
          function addClassToNextChild() {
            if (index === children.length) return;
            children.eq(index++).addClass("is-animated");
            window.setTimeout(addClassToNextChild, 200);
          }

          addClassToNextChild();
        },{
        // Waypoints options.
        triggerOnce: false,
        offset:  scrollOffset,
      });
    });
    }
  };
})();
ScrollSequencer.init();




/** 
 * Scrolling ANimations
 * A waypoints.js extension for animating of data attributes.
 * @see scss/utils/animations-scrolling.scss
 */
(function($) {

  var ScrollDetect = {
    init: function(trigger) { 

      $('[data-scroll]').each( function() {
        var self = $(this);

        var osTrigger = ( trigger ) ? trigger : self;

        osTrigger.waypoint(function() {
          self.addClass('is-animated');
        },{
        
        triggerOnce: true,
        offset: '90%'
      });
    });
  },
};
ScrollDetect.init();
})(jQuery);