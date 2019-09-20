@extends ('backend.layouts.app')

@section ('title', 'Operationa areas')

@section('page-header')
    <h1>Operationa areas</h1>
@endsection

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.votedlocations.management') }}</h3>

            <div class="box-tools pull-right">
                {{--@include('backend.votedlocations.partials.votedlocations-header-buttons')--}}
            </div>
        </div><!--box-header with-border-->

        <div class="box-body">
            <div id="map" style="width:100%;height: 1000px"></div>
        </div>
    </div>
@stop

@section('after-scripts')
    {!! Html::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyC263na3AWmXdy9htO50E9kiq2-cgbBsMo&libraries=places,geometry,drawing&callback=initMap', ['defer' => 'defer']) !!}
    {!! Html::script(asset('/js/gmaps.js')) !!}
    <script>
        var map;
        var savedArea = JSON.parse('{!! $operationalCoords !!}');
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: {lat: 20.679904628685, lng: 40.179453735352},
                mapTypeId: 'terrain'
            });
            console.log(savedArea);
            $.each(savedArea, function (k, v) {
                var polygon = new google.maps.Polygon({
                    paths: v,
                    strokeColor: '#FF0000',
                    strokeOpacity: 0.8,
                    strokeWeight: 3,
                    fillColor: '#FF0000',
                    fillOpacity: 0.35
                });
                polygon.setMap(map);
            });
            infoWindow = new google.maps.InfoWindow;
        }
    </script>
@stop