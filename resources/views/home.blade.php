@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">Current location</div>

                <div class="panel-body">
                    <div id="map" style="height:400px; "></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
var im = 'https://www.robotwoods.com/dev/misc/bluecircle.png'; //'{{ asset('tracker-icon.png') }}'
function initMap() {
        // Initialize the Google Maps API v3
    var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var marker = null;

    function autoUpdate() {
    navigator.geolocation.getCurrentPosition(function(position) {
        var newPoint = new google.maps.LatLng(position.coords.latitude,
                                            position.coords.longitude);

        if (marker) {
            // Marker already created - Move it
            marker.setPosition(newPoint);
            $.ajax({
                type: "POST",
                url: "{{ route('destinations.store') }}",
                cache: false,
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}'
                },
                data: {
                    latitude: position.coords.latitude,
                    longitude: position.coords.longitude
                },
                success: function() {}
            });
        }
        else {
        // Marker does not exist - Create it
        marker = new google.maps.Marker({
            position: newPoint,
            map: map,
            icon: im
        });
        }

        // Center the map on the new position
        map.setCenter(newPoint);
    });

    // Call the autoUpdate() function every 5 seconds
    setTimeout(autoUpdate, 5000);
    }

    autoUpdate();
}
</script>
@endpush
