<script src="{{ mix('/js/app.js') }}"></script>
<script src="/js/custom.js"></script>
{{-- <script>
jQuery(document).ready(function () {
   jQuery.ajax({
       type: "GET",
       url: "https://api.instagram.com/v1/users/self/media/recent/?access_token=5984022668.1677ed0.4fcfe64c5e2144b48c60dff4f257a3a2",
       crossDomain: true,
       dataType: "jsonp",
       success: function (data) {
           console.log(data);
           for (var i = 0; i < 8; i++) {
               jQuery("#instafeed").append("<div class='col-sm-6 col-md-4 col-lg-3 photo-collection__item'><a class='photo-collection__link' href='" + data.data[i].link + "' target='_blank'><img class='photo-collection__img' src = '" + data.data[i].images.standard_resolution.url + "' " + "alt='" + data.data[i].caption.text + "'></a></div>");
           }
       },      

   });

   // END OF READY FUN
});
</script> --}}
@yield('customjs')
<!-- Scripts -->  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
@yield('stars')



