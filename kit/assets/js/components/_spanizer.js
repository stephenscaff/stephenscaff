/** 
 * Spanizr
 * Wraps letters/words in a span tag for CSS animations
 * @useage: <h1 class="js-letters">Spanizer</h1>
 */
var Spanizer = (function() {
  var s;

  return {
    settings: {
      letters: $('.js-letters'),
      words: $('.js-words')
    },

    init: function() {
      s = this.settings;
      this.bindEvents();
    },

    bindEvents: function() {
      Spanizer.letters();
      Spanizer.words();
    },

    letters: function() {
      s.letters.html(function (i, el) {
        var spanize = $.trim(el).split('');
        var spanizeArr = [];
        spanize.forEach(function(idx) {
          if (idx !== ' ') {
            spanizeArr.push('<span>' + idx + '</span>');
          } else {
            spanizeArr.push('<span>&nbsp;</span>');
          }
        });

        return spanizeArr.join('');
      });
    },

    words: function() {
      s.words.html(function (i, el) {
        var spanize = el.split(' ');
        var spanizeArr = [];
        var spanizing = '<span>' + spanize.join('</span> <span>') + '</span>';

        return spanizing;
      });
    }
  }
})();

if ($('.js-letters').length || $('.js-words').length) Spanizer.init();