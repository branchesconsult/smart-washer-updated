@extends ('backend.layouts.app')

@section ('title', 'Payment Methods Management' . ' | ' . 'Edit Payment Method')

@section('page-header')
<h1>
    Payment Methods Management
    <small>Edit Payment Method</small>
</h1>
@endsection

@section('content')
    {{ Form::model($PaymentMethod, ['route' => ['admin.paymentmethod.update', $PaymentMethod], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH','files' => true, 'id' => 'edit-paymentmethod']) }}

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Payment Method</h3>

            <div class="box-tools pull-right">
                @include('backend.PaymentMethod.partials.paymentmethod-header-buttons')
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->

        {{-- Including Form blade file --}}
        <div class="box-body">
            <div class="form-group">
                @include("backend.PaymentMethod.form")
                <div class="edit-form-btn">
                    {{ link_to_route('admin.paymentmethod.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                    {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                    <div class="clearfix"></div>
                </div>
            </div>
        </div><!--box-->
    </div>
    {{ Form::close() }}
@endsection