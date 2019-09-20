@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.laundries.management') . ' | ' . trans('labels.backend.laundries.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.laundries.management') }}
        <small>{{ trans('labels.backend.laundries.create') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box-body setting-block">
        @include('backend.laundries.partials.laundries-tabs')
        <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="tab1">
                {{ Form::open(['route' => 'admin.laundries.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-laundry']) }}
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ trans('labels.backend.laundries.create') }}</h3>

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
                                {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-primary btn-md']) }}
                                <div class="clearfix"></div>
                            </div><!--edit-form-btn-->
                        </div><!-- form-group -->
                    </div><!--box-body-->
                </div><!--box box-success-->
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
