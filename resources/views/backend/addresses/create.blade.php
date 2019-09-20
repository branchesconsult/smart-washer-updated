{{ Form::open(['route' => 'admin.addresses.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-address']) }}
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">{{ trans('labels.backend.addresses.create') }}</h3>

        <div class="box-tools pull-right">
            {{--@include('backend.addresses.partials.addresses-header-buttons')--}}
            {{--@include('backend.laundries.partials.laundries-header-buttons')--}}
            <a class="btn btn-primary" href="javascript:addAddress()">
                Add Address
            </a>
        </div><!--box-tools pull-right-->
    </div><!--box-header with-border-->

    <div class="box-body">
        <div id="addAddressForm">
            <div class="form-group">
                {{-- Including Form blade file --}}
                @include("backend.addresses.form")
                <div class="edit-form-btn">
                    {{ link_to_route('admin.addresses.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                    {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-primary btn-md']) }}
                    <div class="clearfix"></div>
                </div><!--edit-form-btn-->
            </div><!-- form-group -->
        </div>
    </div><!--box-body-->
</div><!--box box-success-->
{{ Form::close() }}