@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.translations.management') . ' | ' . trans('labels.backend.translations.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.translations.management') }}
        <small>{{ trans('labels.backend.translations.edit') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($translation, ['route' => ['admin.translations.update', $translation], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-translation']) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.translations.edit') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.translations.partials.translations-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!--box-header with-border-->

            <div class="box-body">
                <div class="form-group">
                    {{-- Including Form blade file --}}
                    @include("backend.translations.form")
                    <div class="edit-form-btn">
                        {{ link_to_route('admin.translations.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                        <div class="clearfix"></div>
                    </div><!--edit-form-btn-->
                </div><!--form-group-->
            </div><!--box-body-->
        </div><!--box box-success -->
    {{ Form::close() }}
@endsection
