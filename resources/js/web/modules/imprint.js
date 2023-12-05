var Imprint = (function() {
	
	// selectors
	var selectors = {
    body:       'body',
    imprint:    '.js-imprint',
    imprintBtn: '.js-imprint-btn',
	};

  // Init
  var _initialize = function() {
    _bind();
  };

  // Bind events
  var _bind = function() {
    $(selectors.body).on('click', selectors.imprintBtn, function(){
      _toggle($(this));
    });
  };

  var _toggle = function() {
    $(selectors.imprint).toggle();
    if ($(selectors.imprint).is(':visible')) {
      window.scrollBy({
        top: 500,
        behavior: 'smooth'
      });
    }
  };

  /* --------------------------------------------------------------
    * RETURN PUBLIC METHODS
    * ------------------------------------------------------------ */

  return {
    init:  _initialize,
  };
	
})();

// Initialize
$(function() {
  Imprint.init();
});

