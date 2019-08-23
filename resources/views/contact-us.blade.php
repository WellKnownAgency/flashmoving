@section('title', 'Contact us | Flash Moving Company')
@section('dscr', 'Contact our Flash Moving Company anytime. Our High Quality Customer Service Proven by years of experience and by many customers always ready to help you with any question.')
@section('keywords', '')
@section('mainimg', '')

@extends('layouts.main')

@section('content')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="contact">
  <div class="container">
    <div class="contact_intro">
      <h1>Contacts</h1>
      <p class="contact-p">Feel free to write and call us
      <br>
      We really love to communicate with our clients </p>
    </div>
    <div class="row ">
      <div class="col-lg-6 contact-col container">
        <div class="align-middle contact-col-mob">
          <div style="margin-bottom:40px;">
            <a href="tel:+18572418778" style="" class="">+1 857 241 8778</a>
              <br>
            <a href="mailto:info@flashmoving.net" class="a-form" style="">info@flashmoving.net</a>
          </div>
          <p class="address-p">12R Cook St, Newton, MA, 02458</p>
          <div>
            <a href="https://www.facebook.com/flashmoversma/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
            <a href="https://twitter.com/flashmoversma" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
            <a href="https://www.instagram.com/flashmoversma/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
            <a href="https://www.yelp.com/biz/flash-moving-company-newton" target="_blank"><i class="fa fa-yelp fa-2x"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 contact-col container">
        <div class="contact-form">
          <form method="post" action="{{ url('contact-us') }}" id="cform" autocomplete="on">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Full Name" required>
            </div>
            <div class="form-group">
                <input type="text" name="email" class="form-control" id="email" placeholder="Your E-mail" required>
            </div>
            <div class="form-group">
                <input type="text" name="phone" class="form-control" id="phone" placeholder="+1 123 456 7890" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="body" id="body" placeholder="Your comments"></textarea>
            </div>
						@if ($errors->has('g-recaptcha-response'))
						    <span class="help-block">
						        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
						    </span>
						@endif
							{!! NoCaptcha::display() !!}
              <button type="submit" class="btn btn-default btn-mob">Send</button>
            </form>
        </div>
        <p>I agree to the Privacy Policy</p>
      </div>
    </div>
  </div>

  <!--Google Map-->
  <div id="rec68019822" class="r t-rec t-rec_pt_0 t-rec_pb_0" style="padding-top:0px;padding-bottom:0px; " data-record-type="125">
      <!-- T117 -->
      <div class="t117">
          <div class="t-width t-width_100 t-margin_auto">
              <div class="t117_map">
                  <div class="t-map" id="map" data-map-language="" data-map-x="55.751979" data-map-y="37.617499" data-map-zoom="14" data-map-title="Moscow" style="width:100%; height:385px;" data-map-style='[{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}]'></div>
              </div>
          </div>
      </div>
      <!-- <script type="text/javascript">
          var fireRefreshEventOnWindow = function() {
              var evt = document.createEvent("HTMLEvents");
              evt.initEvent('resize', true, false);
              window.dispatchEvent(evt);
          };
          $('.t117').bind('displayChanged', function() {
              fireRefreshEventOnWindow();
          });

      </script> -->

  </div>
<!--End of Google Map-->
</div>



@stop

@section('customjs')
<script>
        function initMap() {
            var myLatLng = {lat: 42.279413, lng: -71.177038};

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
                center: myLatLng
            });

            var contentString = '<div id="content">'+
                '<div id="siteNotice">'+
                '</div>'+
                '<h4 id="firstHeading" class="firstHeading">Flash Moving & Storage</h4>'+
                '<div id="bodyContent">'+
                '<p>12R Cook St, Newton, MA, 02458</p>'+
                '</div>'+
                '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Flash Moving'
            });
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmr7dmNIh2swFtem5QgPvg6Iv8mTHeRmg&callback=initMap">
    </script>
@stop
