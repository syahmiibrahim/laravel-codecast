@extends('layouts.app')
@section('content')
<h3>Contact Us</h3>
	<div class="card z-depth-3">
	<div class="card-content">
		<p>Find us and let have more cit chat =)</p>
		<br>
		<div id="map"></div>
	</div>
</div>

<style>
    #map {
    	height: 400px;
        width: 100%;
    }
</style>

<script>
	function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWW3VDL1G1WfH8yoN4PZP8jZCo4r1B9Tc&callback=initMap">
</script>
@endsection