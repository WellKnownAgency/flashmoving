//custom js
(function ($)  {
  $(document).ready(function(){

    // hide .navbar first
    
    // fade in .navbar
    $(function () {
        $(window).scroll(function () {

                 // set distance user needs to scroll before we start fadeIn
            if ($(this).scrollTop() > 160) {
                $('#scroll-nav').slideDown(200);
            } else {
                $('#scroll-nav').slideUp(200);
            }
        });
    });

});
  }(jQuery));
