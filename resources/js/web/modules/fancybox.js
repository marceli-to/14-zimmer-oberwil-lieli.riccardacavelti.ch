var FancyBox = (function() {

  var selectors = {
    body: 'body',
    gallery: '[data-fancybox^="gallery"]',
    single:  '[data-fancybox="single"]',
    video:  '[data-fancybox="video"]'
  };

  var _initialize = function() {

    $(selectors.gallery).fancybox({
      buttons: [
        "close"
      ],
      infobar: false,

      btnTpl: {
        close: '<a href="javascript:;" data-fancybox-close class="btn-fancybox-close"></a>',
        arrowLeft: '<a href="javascript:;" data-fancybox-prev class="btn-fancybox-prev"><span></span></a>',
        arrowRight: '<a href="javascript:;" data-fancybox-next class="btn-fancybox-next"><span></span></a>',
      },
    });

    $(selectors.video).fancybox({
      buttons: [],
      infobar: false,
      arrows: false,
    });

  };

  return {
    init: _initialize,
  };

})();

// Initialize
$(function() {
  FancyBox.init();
});