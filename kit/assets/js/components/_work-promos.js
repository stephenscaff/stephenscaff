/**
 * PromoMenu Interaction
 * Creates the menu interaction that fade's bg images in
 * in relation to the hovered menu item
 */ 
(function($) {
  var s,
  WorkPromo = {

    settings: {
      promoContainer: $('.js-promo'),
      promoTrans: $('.js-promo-trans'),
      promoImg: $('.js-promo-bg'),
      //promoItemFirst: $('.site-menu__promo .site-menu__promo-bg:first-child'),
      promoLink: $('.js-promo-link'),
      body : $('body'),
      self: this
    },
    init: function(){
      s = this.settings;
      this.bind();
    },
    bind: function() {
      WorkPromo.setupItems();

      s.promoLink.hover(function() {
        s.self = this;
        WorkPromo.handleHover();
      });
    },

    // Initial Setup
    setupItems: function(){
      //s.promoLink.hide();
      //s.promoItemFirst.show();
    },

    // The hover interaction
    handleHover: function(){
      
      // Only on desktop
      if($(window).width() > 767) {
        var index = s.promoLink.index(s.self) + 1;
        //   s.promoTrans.addClass('is-transitioning');
        //  setTimeout(function(){
        //     s.promoTrans.removeClass('is-transitioning');
        // }, 500);
        //s.promoContainer.addClass('is-hovering');
        //s.body.toggleClass('promo-is-hovering');
        //s.promoTrans.toggleClass('is-transitioning');
        //s.promoImg.hide();
        $('.js-promo-bg:nth-child(' + index + ')').toggleClass('is-visible').fadeIn('300');
      }
    },
  };
  
  // Init
  if($('.js-promo-bg').length){
    WorkPromo.init();
  }
})(jQuery);