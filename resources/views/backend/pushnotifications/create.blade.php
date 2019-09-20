@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.pushnotifications.management') . ' | ' . trans('labels.backend.pushnotifications.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.pushnotifications.management') }}
        <small>{{ trans('labels.backend.pushnotifications.create') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::open(['route' => 'admin.pushnotifications.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-pushnotification']) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.pushnotifications.create') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.pushnotifications.partials.pushnotifications-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!--box-header with-border-->

            <div class="box-body">
                <div class="form-group">
                    {{-- Including Form blade file --}}
                    @include("backend.pushnotifications.form")
                    <div class="edit-form-btn">
                        {{ link_to_route('admin.pushnotifications.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        {{ Form::submit('Save and send to all', ['class' => 'btn btn-primary btn-md']) }}
                        <div class="clearfix"></div>
                    </div><!--edit-form-btn-->
                </div><!-- form-group -->
            </div><!--box-body-->
        </div><!--box box-success-->
    {{ Form::close() }}
    @include('backend.pushnotifications.partials.pushnotifications-dynamic-fields')
@endsection
