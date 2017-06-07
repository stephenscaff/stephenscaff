


/*global jQuery */
/*jshint unused:false */

/** 
 * Scroll To Anchor
 *
 * @useage: 
  $('html').scrollAnchor({
    offset: '0',
    addActive: 'true',
    complete : function() {},
  });
 */
(function($) {
  $.fn.scrollAnchor = function(options, callback) {
    // Establish our default settings
    var defualts = $.extend({
      offset: '0',
    }, options);
    return this.each(function() {

      $('[data-scrollto]').click(function(e) {
        e.preventDefault();
        var $this = $(this),
            offset = options.offset,
            target = ('#' + $(this).data('scrollto')),
            $target = $(target);
        
        //Add active Class
        if (options.addActive) {
          $('a[data-scrollto]').removeClass('active');
        }
                
        //Scroll animation
        $('html, body').stop().animate({
          'scrollTop': $target.offset().top - offset
        }, {
            // Duration
          duration: 600,
          // Easing
          easing: 'easeInExpo',
          //Complete callback
          complete: options.complete
        });
        
        //Callback
        $.isFunction( options.setup );
      });
    });
  };
}(jQuery));


$('html').scrollAnchor({
  offset: '170',
});

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
        $('html, body').animate({
       //how about a touch of offset, cause I'm rockin' a fixed nav
        scrollTop: $(window.location.hash).offset().top-settings.scrollOffset
          }, settings.scrollSpeed, settings.easing);
        }, settings.scrollDelay);
      }
    }
  }
})();
  loadThenScroll.init();
})(jQuery);


