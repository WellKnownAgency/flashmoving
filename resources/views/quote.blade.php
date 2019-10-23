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
      <br>
      <br>
      <br>
  <div class="ultra-form-wrapper">
        <ultrasmall-form></ultrasmall-form>
    </div>
    <div class="move-calc-wrapper elromco-desktop">
        <move-Calculator></move-Calculator>
    </div>   
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
