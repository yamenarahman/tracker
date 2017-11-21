@extends('layouts.app')

@section('content')
    {{-- <example></example> --}}
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <form action="get">
                            <input type="text" placeholder="123 st">
                            <button type="button" class="btn btn-default" type="submit">Search</button>
                        </form>
                        {{-- @{{ address }} --}}
                    </div>

                    <div class="panel-body">
                        <div id="map" style="height:400px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')

    {{-- <script>
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

                            // ajax store request
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
        </script> --}}
@endpush
