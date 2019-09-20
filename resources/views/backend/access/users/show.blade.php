@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.access.users.management') . ' | ' . trans('labels.backend.access.users.view'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.access.users.management') }}
        <small>{{ trans('labels.backend.access.users.view') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.access.users.view') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.access.includes.partials.user-header-buttons')
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->

        <div class="box-body">

            <div role="tabpanel">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#overview" aria-controls="overview" role="tab"
                           data-toggle="tab">{{ trans('labels.backend.access.users.tabs.titles.overview') }}</a>
                    </li>

                    <li role="presentation">
                        <a href="#history" aria-controls="history" role="tab"
                           data-toggle="tab">{{ trans('labels.backend.access.users.tabs.titles.history') }}</a>
                    </li>
                </ul>

                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane mt-30 active" id="overview">
                        @include('backend.access.show.tabs.overview')
                    </div><!--tab overview profile-->

                    <div role="tabpanel" class="tab-pane mt-30" id="history">
                        @include('backend.access.show.tabs.history')
                    </div><!--tab panel history-->

                </div><!--tab content-->

            </div><!--tab panel-->

        </div><!-- /.box-body -->
    </div><!--box-->
@endsection

@section("after-scripts")
    {!! Html::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyC263na3AWmXdy9htO50E9kiq2-cgbBsMo&libraries=places,geometry,drawing&callback=initMap', ['defer' => 'defer']) !!}
    {!! Html::script(asset('/js/gmaps.js')) !!}
    <script>
        var map;
        var savedArea = JSON.parse('{!! $user->driverCoords !!}');
        function initMap() {
            map = new google.maps.Map(document.getElementById('driver-area-map'), {
                zoom: 4,
                center: {lat: 20.679904628685, lng: 40.179453735352},
                mapTypeId: 'terrain'
            });
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