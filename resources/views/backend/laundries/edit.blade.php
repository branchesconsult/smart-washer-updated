@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.laundries.management') . ' | ' . trans('labels.backend.laundries.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.laundries.management') }}
        <small>{{ trans('labels.backend.laundries.edit') }}</small>
    </h1>
@endsection
@section('after-styles')
    {!! Html::style(asset('js/leaflet/leaflet.css')) !!}
    {!! Html::style(asset('js/leaflet/leaflet.draw.css')) !!}
    <style type="text/css">
        #map, html, body {
            padding: 0;
            margin: 0;
            height: 100%;
        }

        #panel {
            width: 200px;
            font-family: Arial, sans-serif;
            font-size: 13px;
            float: right;
            margin: 10px;
        }

        #color-palette {
            clear: both;
        }

        .color-button {
            width: 14px;
            height: 14px;
            font-size: 0;
            margin: 2px;
            float: left;
            cursor: pointer;
        }

        #delete-button {
            margin-top: 5px;
        }
    </style>
@endsection
@section('content')
    <div class="box-body setting-block">
        @include('backend.laundries.partials.laundries-tabs')
        <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="tab1">
                {{ Form::model($laundry, ['route' => ['admin.laundries.update', $laundry], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-laundry']) }}
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ trans('labels.backend.laundries.edit') }}</h3>

                        <div class="box-tools pull-right">
                            @include('backend.laundries.partials.laundries-header-buttons')
                        </div><!--box-tools pull-right-->
                    </div><!--box-header with-border-->

                    <div class="box-body">
                        <div class="form-group">
                            {{-- Including Form blade file --}}
                            @include("backend.laundries.form")
                            <div class="edit-form-btn">
                                {{ link_to_route('admin.laundries.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                                {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                                <div class="clearfix"></div>
                            </div><!--edit-form-btn-->
                        </div><!--form-group-->
                    </div><!--box-body-->
                </div><!--box box-success -->
                {{ Form::close() }}
            </div>
            <!--Addresses-->
            <div role="tabpanel" class="tab-pane" id="tab2">
                @include('backend.laundries.partials.laundries-addresses')
            </div>
            <!--Owners-->
            <div role="tabpanel" class="tab-pane" id="tab3">
                @include('backend.laundries.partials.laundries-owners')
            </div>
            <!--Drivers-->
            <div role="tabpanel" class="tab-pane" id="tab4">
                @include('backend.laundries.partials.laundries-drivers')
            </div>
        </div>
    </div>
@endsection
