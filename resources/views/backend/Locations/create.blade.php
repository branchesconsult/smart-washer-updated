@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.locations.management') . ' | ' . trans('labels.backend.locations.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.locations.management') }}
        <small>{{ trans('labels.backend.locations.create') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($Location, ['route' => ['admin.locations.store', $Location], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'POST', 'id' => 'create-location']) }}

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.locations.create') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.Locations.partials.locations-header-buttons')
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->

        {{-- Including Form blade file --}}
        <div class="box-body">
            <div class="form-group">
                @include("backend.Locations.form")
                <div class="edit-form-btn">
                    {{ link_to_route('admin.locations.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                    {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-primary btn-md']) }}
                    <div class="clearfix"></div>
                </div>
            </div>
        </div><!--box-->
    </div>
    {{ Form::close() }}
@endsection
