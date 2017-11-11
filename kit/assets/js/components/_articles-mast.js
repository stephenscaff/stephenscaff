/**
 * Articles Mast
 * Creates the article interaction that fades bg images into
 * a left side mast, in relation to hovered articles to the right.
 */ 
(function($) {
  var s,
  ArticlesMast = {

    settings: {
      articlesContainer: $('.js-article'),
      articleMastBg: $('.js-article-bg'),
      articleMastBgFirst: $('.js-article-bg:first-child'),
      articleLink: $('.js-article-link'),
      visibleClass: 'is-visible',
      self: this
    },

    /** 
     * Init 
     */
    init: function(){
      s = this.settings;
      this.bind();
    },

    /**
     * Bind our methods
     */
    bind: function() {
      ArticlesMast.setupItems();

      s.articleLink.hover(function() {
        s.self = this;
        ArticlesMast.handleHover();
      });
    },

    /**
     * Setup - Show first img bg on load
     */
    setupItems: function(){
      //s.promoLink.hide();
      s.articleMastBgFirst.addClass('is-visible-start');
    },

    /** 
     * Handle the Hover interaction
     */
    handleHover: function(){
      
      // Only on desktop
      //if($(window).width() > 767) {
        var index = s.articleLink.index(s.self) + 1;
        s.articleMastBg.removeClass('is-visible-start').removeClass(s.visibleClass);
        $('.js-article-bg:nth-child(' + index + ')').addClass(s.visibleClass);
      //}
    },
  };
  
  // Init
  if($('.js-article-bg').length){
    ArticlesMast.init();
  }
})(jQuery);