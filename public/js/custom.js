$(document).ready(function() {
 var feed = new Instafeed({
         get: 'user',
         userId: '5984022668',
         clientId: 'db89b57f2b5042b382ecb0f277313e9d',
         accessToken: '5984022668.1677ed0.9f169a77adba4754826206898008c0e5',
         sortBy: 'most-recent',
         limit: 8,
         template: '<div class="col-sm-6 col-md-4 col-lg-3 photo-collection__item"><a href="{{link}}" target="_blank" class="photo-collection__link"><img src="{{model.images.standard_resolution.url}}" {{square}} alt="" class="photo-collection__img"></a></div>',
     });
     feed.run();
});
//custom js
(function ($)  {
  $(document).ready(function(){
    // hide .navbar first

    // fade in .navbar
    $(function () {
        if($(window).width() > 991){
          $(window).scroll(function () {
                   // set distance user needs to scroll before we start fadeIn
              if ($(this).scrollTop() > 160) {
                  $('#scroll-nav').slideDown(200);
              } else {
                  $('#scroll-nav').slideUp(200);
              }
          });
        }
      });

});
  }(jQuery));

  $(document).ready(function() {

    var getMax = function(){
      return $(document).height() - $(window).height();
    }

    var getValue = function(){
      return $(window).scrollTop();
    }

    if ('max' in document.createElement('progress')) {
      // Browser supports progress element
      var progressBar = $('progress');

      // Set the Max attr for the first time
      progressBar.attr({ max: getMax() });

      $(document).on('scroll', function(){
        // On scroll only Value attr needs to be calculated
        progressBar.attr({ value: getValue() });
      });

      $(window).resize(function(){
        // On resize, both Max/Value attr needs to be calculated
        progressBar.attr({ max: getMax(), value: getValue() });
      });

    } else {

      var progressBar = $('.progress-bar'),
          max = getMax(),
          value, width;

      var getWidth = function() {
        // Calculate width in percentage
        value = getValue();
        width = (value/max) * 100;
        width = width + '%';
        return width;
      }

      var setWidth = function(){
        progressBar.css({ width: getWidth() });
      }

      $(document).on('scroll', setWidth);
      $(window).on('resize', function(){
        // Need to reset the Max attr
        max = getMax();
        setWidth();
      });
    }
  });


// Google Tag Manager -
      (function(w, d, s, l, i) {
          w[l] = w[l] || [];
          w[l].push({
              'gtm.start': new Date().getTime(),
              event: 'gtm.js'
          });
          var f = d.getElementsByTagName(s)[0],
              j = d.createElement(s),
              dl = l != 'dataLayer' ? '&l=' + l : '';
          j.async = true;
          j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
          f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-THND2ZV');

// End Google Tag Manager
