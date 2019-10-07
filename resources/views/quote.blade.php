@section('title', 'Get a Free Estimate with Flash Moving Company')
@section('dscr', 'A Free estimate for your move. Quick and easy 2 steps form and a quick call in 30 minutes.')
@section('keywords', '')
@section('mainimg', '')

@extends('layouts.main')
@section('customcss')
<style>
iframe .btn-primary {
    color: #fff;
    background-color: #d14221;
    border-color: #2e6da4;
}
</style>
@stop
@section('content')

<div class="contact">
  <div class="container">
  <iframe frameBorder="0"
        src="https://portal.smartmoving.com/embedded/?companyId=e7d3ec4b-b894-41c1-85db-aad101615386&mode=full"
        style="width: 100%; height: 100%; min-height: 880px; min-width: 400px; max-width: 100%; margin:0px; border-width: 0;">
</iframe>
  </div>
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
