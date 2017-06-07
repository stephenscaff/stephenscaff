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
  /**
   * Laxy Load
   * @see js/vendor/_unveil.js
   */
  plax: function(){
    //$('.js-parallax').parallax(6, 'false');
  },


  /** 
   * Wow Init
   */
//    scrollReveals: function(){
//     var boxClassie = 'js-scroll';
//     var wow = new WOW({
//       boxClass:     boxClassie,    
//       animateClass: 'is-animated', 
//       offset:       150,         
//       mobile:       true,  
//       live:         true,
//       callback:     function(box) {
//        $('.js-scroll ').waypoint(function() {
//     var children = $(".step");
//     var index = 0;

//     function addClassToNextChild() {
//         if (index == children.length) return;
//         children.eq(index++).addClass("is-active");
//         window.setTimeout(addClassToNextChild, 1000);
//     }

//     addClassToNextChild();
// }, {
//     triggerOnce: true
// });
//         $(boxClassie).each(function(i){
//         $(this).delay(150 * i).addClass('shit');
  
//       });
//       },
//       scrollContainer: null 
//     });

//     wow.init();
//    },


  /**
   * Laxy Load
   * @see js/vendor/_unveil.js
   */
  lazy: function(){
    $(".js-lazy").unveil(-200, function() {
      $(this).load(function() {
        var postLink = $(this).parents('.post__link');
        //postLink.addClass('is-animated');
        console.log(postLink);
        //this.style.opacity = 1;
        //$(this).parent().addClass('loaded');
        //$(this).fadeOut(0).fadeIn(400);
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
  if($('.js-lazy').length){
    site.lazy();
  }

  // if ($('.js-scroll').length){
  //   site.scrollReveals();
  // }
});

// function inView() {
//    var sectOffset = $('.js-scroll').offset(),
//    $body = $('body');
//       $(window).one('scroll', function() {
//         if ($(window).scrollTop() >= (sectOffset.top - $(window).height())) { 
//           $('.js-scroll').addClass('is-animating');
//           //$(window).off('scroll');
//         }
//       });
// }
// inView();

 $('.next__link').each(function(){
          $(this).css('background',$(this).data('bg-color'));
        });







// (function($) {

//   var scroller2 = {
//     init: function(trigger) { 

//       $('[data-scrolly]').each( function() {
//         var osElement = $(this);


//         var osTrigger = ( trigger ) ? trigger : osElement;
    
//         osTrigger.waypoint(function() {
//               var children = $("a");
//     var index = 0;

//     function addClassToNextChild() {
//         if (index == children.length) return;
//         //osElement.first('a').addClass('is-animated');
//         children.eq(index++).addClass("is-animated");
//         window.setTimeout(addClassToNextChild, 200);
//     }

//     addClassToNextChild();
      
    
//         },

//         {
//         triggerOnce: true,
//         offset: '150%'
//       });

     



//     });
//   },
// };
//  scroller2.init();
// })(jQuery)





// (function($) {

//     var ScrollWays = (function() {
    
//     return{
//       init: function(){

//       },

//       bind: function(){

//       },

//       addClassSequence: function(trigger) { 
//         $('[data-scrolly]').each( function() {
//           var osElement = $(this);
//           var osTrigger = ( trigger ) ? trigger : osElement;
      
//           osTrigger.waypoint(function() {
//             var children = $("a");
//             var index = 0;

//           function addClassToNextChild() {
//             if (index == children.length) return;
//             //osElement.first('a').addClass('is-animated');
//             children.eq(index++).addClass("is-animated");
//             window.setTimeout(addClassToNextChild, 200);
//           }

//           addClassToNextChild();
//         },{
//           triggerOnce: true,
//           offset: '150%'
//         });
//       });
//     },
//   };
// };
//  ScrollWays.init();
// })(jQuery)

//  var ScrollWays = (function() {

//     var self = $(this);
//     var index = 0;
//     var children = $("a");

//   return {
    
//     /**
//      * Init Popups
//      */
//     init: function() {
//       this.bind();
//     },

//     bind: function(){
//       ScrollWays.addClassSequence();
//     },
//     /**
//      * Toggle Drop
//      */
//       addClassSequence: function(trigger) { 
//         $('[data-scroll-seq="fader"]').each( function() {
//           //var self = $(this);
//           var osTrigger = ( trigger ) ? trigger : self;
      
//           osTrigger.waypoint(function() {

//           function addClassToNextChild() {
//             if (index == children.length) return;
//             //osElement.first('a').addClass('is-animated');
//             children.eq(index++).addClass("is-animated");
//             window.setTimeout(addClassToNextChild, 900);
//           }

//           addClassToNextChild();
//         },{
//           triggerOnce: true,
//           offset: '900%'
//         });
//       });
//     },

//   };
// })();
// ScrollWays.init();

 //  var ScrollWays = (function() {
 //    var s;

 //    /**
 //     * Settings
 //     */
 //    var settings = {
 //      self: null
 //    };

 //    return {
   
 //      /**
 //       * Init Popups
 //       */
 //      init: function() {
 //        s = settings;
 //        this.bindEvents();
 //      },



 //      bind: function(){
 //        ScrollWays.addClasses();
 //      },

 //      addClasses: function(){
 //        $('[data-scrolly]').each( function() {
 //          var self = $(this);
 //          var osTrigger = ( trigger ) ? trigger : self;
    
 //          osTrigger.waypoint(function() {
 //            var children = $("a");
 //            var index = 0;

 //            function addClassToNextChild() {
 //              if (index == children.length) return;
 //              //osElement.first('a').addClass('is-animated');
 //              children.eq(index++).addClass("is-animated");
 //              window.setTimeout(addClassToNextChild, 200);
 //            }

 //            addClassToNextChild();
 //          }, {
 //          triggerOnce: true,
 //          offset: '150%'
 //        }); 
 //      },
 //    };
 //  })();
 // ScrollWays.init();
 

// $('[data-scroll-seq').waypoint(function() {
//     var children = $("a");
//     var index = 0;

//     function addClassToNextChild() {
//         if (index == children.length) return;
//         children.eq(index++).addClass("is-animated");
//         window.setTimeout(addClassToNextChild, 100);
//     }

//     addClassToNextChild();
// }, {
//     triggerOnce: true,
//     offset: '90%'
// });



// var ScrollSequencer = (function() {
  
//   var scrollClass = $('.js-scroll');
//   var scrollChild = scrollClass.data('scroll-seq');
//   var scrollOffset = $('.js-scroll').data('scroll-offset');
//   var scrollSequence = $('[data-scroll-seq="'+scrollChild+'"]');

//   return {

//     init: function(){
//       this.scrollTrigger();
//     },

//     scrollTrigger: function(trigger) { 
  

   
//       scrollSequence.each( function() {
//         var self = $(this);
//         //scrollAnimationClass = $(this, scrollChild);


//         var scrollTrigger = ( trigger ) ? trigger : self;

//         scrollTrigger.waypoint(function() {
//           var children = $(scrollChild);
//           var index = 0;

//           function addClassToNextChild() {
//               if (index == children.length) return;
//               children.eq(index++).addClass("is-animated");
//               window.setTimeout(addClassToNextChild, 200);
//           }

//           addClassToNextChild();
//         },{
        
//         triggerOnce: false,
//         offset:  scrollOffset,
//       });
//     });
//     }
//   };
//   })();
//  ScrollSequencer.init();






















// (function($) {

//   /**
//    * Copyright 2012, Digital Fusion
//    * Licensed under the MIT license.
//    * http://teamdf.com/jquery-plugins/license/
//    *
//    * @author Sam Sehnert
//    * @desc A small plugin that checks whether elements are within
//    *     the user visible viewport of a web browser.
//    *     only accounts for vertical position, not horizontal.
//    */

//   $.fn.visible = function(partial) {
    
//       var $t            = $(this),
//           $w            = $(window),
//           viewTop       = $w.scrollTop(),
//           viewBottom    = viewTop + $w.height(),
//           _top          = $t.offset().top,
//           _bottom       = _top + $t.height(),
//           compareTop    = partial === true ? _bottom : _top,
//           compareBottom = partial === true ? _top : _bottom;
    
//     return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

//   };
    
// })(jQuery);

// $(window).scroll(function(event) {
  
//   $(".js-scroll").each(function(i, el) {
//     var el = $(el);
//     if (el.visible(true)) {
//       el.addClass("is-animated"); 
//     } else {
//       el.removeClass("is-animated");
//     }
//   });
  
// });