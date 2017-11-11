/*jshint -W030*/
/*globals feature: false */

/**
 * Global Site inits
 */
var site = {
  
  /**
   * Featured Init
   */
  featureJS: function(){
    //no-js 
    $("html").removeClass("no-js");
    //no-svg 
    if (!feature.svg) {
      $("html").addClass("no-svg");
    }
    //no-flexbox 
    if (!feature.cssFlexbox) {
      $("html").addClass("no-flexbox");
    }
  },


  mobileBgVid: function(){
    var video = $('.js-bg-vid').get(0);
    enableInlineVideo(video, {
      iPad: true
    });
    // setTimeout(function () { 
    //   video.play(); 
    // }, 1000);
  },

  /**
   * Laxy Load
   * @see js/vendor/_unveil.js
   */
  lazy: function(){
    $(".js-lazy").unveil(-200, function() {
      $(this).load(function() {
        var postFigure = $(this).parents('.post__figure');
        postFigure.addClass('is-loaded');
        //console.log(postLink);
        //$(this).fadeOut(0).fadeIn(600);
      });
    });
  },
};


/**
 * Doc ready them inits
 */
$(function(){
  // Feature JS
  site.featureJS();
  // Lazy Loader
  if ( $('.js-lazy').length ){
    site.lazy();
  }
  if ( $('.js-bg-vid').length ) {
    site.mobileBgVid();
  }
});

