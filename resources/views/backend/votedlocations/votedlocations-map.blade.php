@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.votedlocations.management'))

@section('page-header')
    <h1>{{ trans('labels.backend.votedlocations.management') }}</h1>
@endsection

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.votedlocations.management') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.votedlocations.partials.votedlocations-header-buttons')
            </div>
        </div><!--box-header with-border-->

        <div class="box-body">
            <div id="map" style="width:100%;height: 1000px"></div>
        </div>
    </div>
@stop

@section('after-scripts')
    {!! Html::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyC263na3AWmXdy9htO50E9kiq2-cgbBsMo&callback=initMap&libraries=places,geometry,drawing,v=3.exp',['defer' => 'defer']) !!}
    {!! Html::script(asset('/js/gmaps.js')) !!}
    <script>

        var locations = [
//            ['Bondi Beach', -33.890542, 151.274856, 4],
//            ['Coogee Beach', -33.923036, 151.259052, 5],
//            ['Cronulla Beach', -34.028249, 151.157507, 3],
//            ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
//            ['Maroubra Beach', -33.950198, 151.259302, 1]
        ];

        $.each(JSON.parse('{!! $mapData !!}'), function (k, v) {
            console.log(k, v);
            locations.push([
                v.title,
                v.lat, v.lng
            ])
        })

        // When the user clicks the marker, an info window opens.

        function initMap() {
            var myLatLng = {lat: 23.8859, lng: 45.0792};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 3,
                center: myLatLng
            });
            var count = 0;
            for (count = 0; count < locations.length; count++) {
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[count][1], locations[count][2]),
                    map: map
                });
                marker.info = new google.maps.InfoWindow({
                    content: locations [count][0]
                });
                google.maps.event.addListener(marker, 'click', function () {
                    // this = marker
                    var marker_map = this.getMap();
                    this.info.open(marker_map, this);
                    // Note: If you call open() without passing a marker, the InfoWindow will use the position specified upon construction through the InfoWindowOptions object literal.
                });
            }
        }
    </script>
@stop