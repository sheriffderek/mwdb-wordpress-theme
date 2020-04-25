
(function($) {

  "use strict"; // get serious

  $(document).ready( function() {
    // var $body    = $('body');
    var $header  = $('[rel="header"]');
    var $work    = $('[rel="work"]');
    // var $fluff   = $('[rel="fluff"]');
    // var $loading = $('[rel="size-loading"]');

    $(function() {
      FastClick.attach(document.body);
    });
    console.log('DOM ready');

    var $splashSlider = $("[rel='splash-slider']");

    $splashSlider.flickity({ 
      wrapAround: true,
      imagesLoaded: true,
      prevNextButtons: false,
      pageDots: true
    });

    // define window dimention variables
    var windowWidth;
    var windowHeight;
    var headerHeight;
    var workHeight;
    var getWindowDimensions = function() {
      windowWidth  = $(window).width();
      windowHeight = $(window).height();
      headerHeight = $header.outerHeight();
      workHeight   = $work.outerHeight();
      // aboutHeight   = $about.outerHeight();
      console.log('w:', windowWidth);
    };
    getWindowDimensions();



    var bg = function(element, url, x, y) {
      var position = x + ' ' + y;
      element.css({
        'background-image'   : 'url(' + url + ')',
        'background-position': position
      });
    };


    var setUpSplash = function() {
      var $cell = $('[rel="splash-slider"]').find('[rel="splash-cell"]');
      $cell.each( function() {
        var $this = $(this);

        var pSmall  = $this.data('p-small');
        var pMedium = $this.data('p-medium');
        var pLarge  = $this.data('p-large');
        var px      = $this.data('px');
        var py      = $this.data('py');
        
        var lLarge  = $this.data('l-large');
        var lx      = $this.data('lx');
        var ly      = $this.data('ly');

        if ( windowWidth > windowHeight ) {
          bg($this, lLarge, lx, ly);
        } else if ( windowWidth > 700 ) {
          bg($this, pLarge, px, py);
        } else if ( windowWidth > 500 ) {
          bg($this, pMedium, px, py);
        } else {
          bg($this, pSmall, px, py);
        }
      });
    };




    var setUp = function() {
      // var contentHei/ght = windowHeight - headerHeight;
      // setHeights(contentHeight);
    };

    var tearDown = function() {
      // setHeights('auto');
    };

    var setListOrientation = function() {
      if ( windowWidth >= 1000 ) {
        setUp();
        console.log('landscape ~');
      } else {
        tearDown();
        console.log('horizontal ~');
      }
    };


    if (Modernizr.touch) { 
      // alert('Touch Screen');
    } else { 
      //
    }

    $(window).resize( function() {
      getWindowDimensions();
      setListOrientation();
      setUpSplash();
    }).trigger('resize');


    $('.content').css('opacity', 1);

  });




})(jQuery);