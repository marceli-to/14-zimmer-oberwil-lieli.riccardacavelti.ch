import debounce from '../vendor/debounce';

var Visual = (function() {
	
	/**
   * Selectors
   */

	var selectors = {
    html:    'html',
    body:    'body',
    wrapper: '.js-visual'
	};

  /**
   * Media queries
   */

  var mq = {
    sm: window.matchMedia("(max-width: 1023px)"),
    md: window.matchMedia("(min-width: 1024px)")
  };

  /**
   * Reserved space in pixel for:
   * 1. header height + top margin (85px + 25px)
   * 2. footer height (125px)
   */

  var reserved_space = 210; // 235

  /**
   * Init
   */

  var _initialize = function() {
    _events();
  };

  /**
   * Event handling
   */

  var _events = function() {
    _setHeight();

    $(window).resize(function() {
      if (mq.sm.matches) {
        _setHeight();
      }
      if (mq.md.matches) {
        $(selectors.wrapper).removeAttr('style');
      }
    });
  };

  /**
   * Calculate and set height for visual
   */

  var _setHeight = debounce(function() {
    var h = window.innerHeight - reserved_space;
    $(selectors.wrapper).height(h);
  }, 50);

  /**
   * Public methods
   */

  return {
    init:  _initialize,
  };
	
})();

$(function() {
  Visual.init();
});

