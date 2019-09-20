@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.ordercomplains.management') . ' | ' . trans('labels.backend.ordercomplains.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.ordercomplains.management') }}
        <small>{{ trans('labels.backend.ordercomplains.edit') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($ordercomplain, ['route' => ['admin.ordercomplains.update', $ordercomplain], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-ordercomplain']) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.ordercomplains.edit') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.ordercomplains.partials.ordercomplains-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!--box-header with-border-->

            <div class="box-body">
                <div class="form-group">
                    {{-- Including Form blade file --}}
                    @include("backend.ordercomplains.form")
                    <div class="edit-form-btn">
                        {{ link_to_route('admin.ordercomplains.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                        <div class="clearfix"></div>
                    </div><!--edit-form-btn-->
                </div><!--form-group-->
            </div><!--box-body-->
        </div><!--box box-success -->
    {{ Form::close() }}
@endsection
