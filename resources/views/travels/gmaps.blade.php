@extends('layouts.app')
@section('title', $address)
@section('content')

  <div class="panel panel-default">
    <script type="text/javascript" src="jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyBfrQsbegD7GdFT11NoamlzEq2XpmJtIZw"></script>
    <script type="text/javascript" src="gmaps/gmaps.min.js"></script>
    <script type="text/javascript">


      var addressStr = "{!! $address !!}";

      $(document).ready(function(){

        var map = new GMaps({
          div: '#map',
          lat: -12.043333,
          lng: -77.028333,
          zoom: 18
        });


        GMaps.geocode({
          address: addressStr.trim(),
          callback: function(results, status) {
            if (status == 'OK') {
              var latlng = results[0].geometry.location;
              map.setCenter(latlng.lat(), latlng.lng());
              map.addMarker({
                lat: latlng.lat(),
                lng: latlng.lng()
              });
            }
          }
        });
      });
    </script>
    <style>
      @charset "utf-8";
      #map {
        height: 400px;
      }
    </style>
    <p>住所：{{ $address }}</p>
        <div id="map"></div>
    <div class="panel-footer">
      {{ link_to_route('travels.index', '戻る') }}
    </div>


  </div>

@endsection
