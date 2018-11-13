@section('title', '')
@section('dscr', '')
@section('keywords', '')
@section('mainimg', '')

@extends('layouts.main')

@section('content')

<div class="contact">
  <div class="container">
    <div class="center" style="height:241px;">
      <h1>Contacts</h1>
      <p class="contact-p">Feel free to write and call us
      <br>
      We really love to communicate with our clients </p>
    </div>
    <div class="row ">
      <div class="col-lg-6 contact-col" style="padding-left: 80px;">
        <div class="align-middle">
          <div style="margin-bottom:40px;">
            <a href="tel:+18572418778" style="" class="">+1 857 241 8778</a>
              <br>
            <a href="mailto:info@flashmoving.net" class="a-form" style="">info@flashmoving.net</a>
          </div>
          <p class="address-p">99 Rivermoon St., West Roxbury, MA, 02132</p>
          <div>
            <a href="https://www.facebook.com/flashmoversma/"><i class="fa fa-facebook fa-2x"></i></a>
            <a href="https://twitter.com/flashmoversma"><i class="fa fa-twitter fa-2x"></i></a>
            <a href="https://www.instagram.com/flashmoversma/"><i class="fa fa-instagram fa-2x"></i></a>
            <a href=""><i class="fa fa-yelp fa-2x"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 contact-col">
        <div class="contact-form">
          <form method="post" action="" id="cform" autocomplete="on">
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
              <button type="submit" class="btn btn-default" >Send</button>
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
                  <div class="t-map" id="separateMap68019822" data-map-language="" data-map-x="55.751979" data-map-y="37.617499" data-map-zoom="14" data-map-title="Moscow" style="width:100%; height:385px;" data-map-style='[{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}]'></div>
              </div>
          </div>
      </div>
      <script type="text/javascript">
          /*var fireRefreshEventOnWindow = function() {
              var evt = document.createEvent("HTMLEvents");
              evt.initEvent('resize', true, false);
              window.dispatchEvent(evt);
          };
          $('.t117').bind('displayChanged', function() {
              fireRefreshEventOnWindow();
          });*/
      </script>
  </div>
<!--End of Google Map-->
</div>



@stop

@section('customjs')
    <script type="text/javascript">
        var arMapMarkers68019822 = [{
            title: "Flash Moving &amp;amp; Storage",
            descr: "Main Storage",
            lat: "42.279413",
            lng: "-71.177038",
        }, {
            title: "Flash Moving &amp;amp; Storage",
            descr: "Main Parking Area",
            lat: "42.365719",
            lng: "-71.199576",
        }, ];
        $(document).ready(function() {
            t_appendGoogleMap("68019822", "");
        });
    </script>


@stop
