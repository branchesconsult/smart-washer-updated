@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.services.management') . ' | ' . trans('labels.backend.services.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.services.management') }}
        <small>{{ trans('labels.backend.services.create') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::open(['route' => 'admin.services.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-service']) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.services.create') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.services.partials.services-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!--box-header with-border-->

            <div class="box-body">
                <div class="form-group">
                    {{-- Including Form blade file --}}
                    @include("backend.services.form")
                    <div class="edit-form-btn">
                        {{ link_to_route('admin.services.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-primary btn-md']) }}
                        <div class="clearfix"></div>
                    </div><!--edit-form-btn-->
                </div><!-- form-group -->
            </div><!--box-body-->
        </div><!--box box-success-->
    {{ Form::close() }}
@endsection
