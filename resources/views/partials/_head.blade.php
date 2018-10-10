<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Meta -->
<title>@yield('title')</title>
<meta name="description" content="@yield('dscr')" />

<!--Facebook Meta -->
<meta property="og:url" content="http://flashmoving.net" />
<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="@yield('dscr')" />
<meta property="og:type" content="website" />
<meta property="og:image" content="@yield('mainimg')" />

<!-- CSS -->
<link rel="stylesheet" href="/css/app.css" >
<link rel="stylesheet" href="/css/custom.css" >

<!--Slide Down and Up Effect on Navbar-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>
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
</script>
