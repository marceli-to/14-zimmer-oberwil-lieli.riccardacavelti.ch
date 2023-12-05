import debounce from '../vendor/debounce';

var Scroll = (function() {
	
	/**
   * Selectors
   */

	var selectors = {
    html:    'html',
    body:    'body',
    btn:     '.js-scroll-btn',
    wrapper: '.js-scroll-wrapper',
    footer:  '.js-site-footer',

    // video
    videoPreview: '.js-video-preview',
    videoBtn:     '.js-video-btn',
    videoSrc:     '#js-video',
  };
  
  var classes = {
    hidden: 'is-hidden'
  };

  var _video;

  /**
   * Media queries
   */

  var mq = {
    // sm: window.matchMedia("(max-width: 1023px)"),
    // md: window.matchMedia("(min-width: 1024px)")
    sm: window.matchMedia("(max-width: 1339px)"),
    md: window.matchMedia("(min-width: 1340px)")
  };

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
    _observeVideo();

    $(selectors.body).on('click', selectors.btn, function(){
      _scrollIntoView();
    });

    $(window).scroll(function() {
      _scrollOrResize();
    });

    $(window).resize(function() {
      _scrollOrResize();
    });

    $(selectors.body).on('click', selectors.videoBtn, function() {
      if ($(selectors.videoPreview).length) {
        _video = $(selectors.videoPreview)[0];
        var time = _video.currentTime;
        $.fancybox.open({
          src: '<div><video controls playsinline="" muted="" loop=""><source src="/assets/media/riccarda-cavelti-1080p.mp4#t='+time+'" type="video/mp4"></video></div>',
          type: 'inline',
          opts: {
            afterClose: function( instance, current ) {
              _video.play();
            }
          }
        });

        // stop preview
        _video.pause();
      }
    });
  };

  var _scrollIntoView = function() {
    $(selectors.wrapper)[0].scrollIntoView();
  };

  var _scrollOrResize = debounce(function() {
    var rect = document.body.getBoundingClientRect();
   
    if (mq.sm.matches) {
      if (rect.top < -40) {
        $(selectors.footer).addClass(classes.hidden);
      }
      else {
        $(selectors.footer).removeClass(classes.hidden);
      }
    }

    else if (mq.md.matches) {
      if (rect.top < -120) {
        $(selectors.btn).addClass(classes.hidden);
      }
      else {
        $(selectors.btn).removeClass(classes.hidden);
      }
    }

    // video
    _observeVideo();

  }, 25);



  var _observeVideo = function() {
    if ($(selectors.videoPreview).length) {
      _video = $(selectors.videoPreview)[0];

      if (_inViewport(_video)) {
        $(selectors.videoPreview).show();
        _video.play();
      }
      else {
        _video.pause();
      }
    }
  };


  var _inViewport = function (elem) {
    var bounding = elem.getBoundingClientRect();
    return (
      bounding.top >= 0 &&
      bounding.left >= 0 &&
      bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
};

  /**
   * Public methods
   */

  return {
    init:  _initialize,
  };
	
})();

$(function() {
  Scroll.init();
});

