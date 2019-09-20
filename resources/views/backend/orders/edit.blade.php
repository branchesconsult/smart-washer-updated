@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.orders.management') . ' | ' . trans('labels.backend.orders.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.orders.management') }}
        <small>{{ trans('labels.backend.orders.edit') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($order, ['route' => ['admin.orders.update', $order], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-order']) }}
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.orders.edit') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.orders.partials.orders-header-buttons')
            </div><!--box-tools pull-right-->
        </div><!--box-header with-border-->

        <div class="box-body">
            <div class="col-md-12">
                <div class="table-responsive">
                    <h5>Order summery</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th>Invoice</th>
                            <td>{!! $order['invoice_num'] !!}</td>
                            <th>Order date</th>
                            <td>{!! $order['created_at'] !!}</td>
                        </tr>
                        <tr>
                            <th>Customer</th>
                            <td>{!! $order['user']['email'] !!} - {!! $order['user']['phone'] !!}</td>
                            <th>Driver</th>
                            <td>{!! $order['driver']['email'] !!} - {!! $order['driver']['phone'] !!}</td>
                        </tr>
                        <tr>
                            <th>Delievery time</th>
                            <td>{!! $order['delivery_time'] !!}</td>
                            <th>Delievery charges</th>
                            <td>{!! $order['delivery_charges'] !!}</td>
                        </tr>
                        <tr>
                            <th>Subtotal</th>
                            <td>{!! $order['subtotal'] !!}</td>
                            <th>Total (inc delievery charges)</th>
                            <td>{!! $order['total'] !!}</td>
                        </tr>
                        <tr>
                            <th>Laundry Price</th>
                            <td>{!! $order['laundry_total_price'] !!}</td>
                            <th>Client address</th>
                            <td>{!! $order['address'] !!}</td>
                        </tr>
                        <tr>
                            <th>Sorting fee</th>
                            <td>{!! $order['sorting_fee'] !!}</td>
                            <td>Discount</td>
                            <td>
                                {!! $order['discount_type'] == 'fixed' ? 'SAR':'' !!}{!! $order['discount'] !!}{!! $order['discount_type'] == 'percentage' ? '%':'' !!}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="form-group">
                {{-- Including Form blade file --}}
                @include("backend.orders.form")
                <div class="edit-form-btn">
                    {{ link_to_route('admin.orders.index',
                    trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                    <button type="button" onclick="updateOrder()" class="btn btn-primary btn-md">
                        {!! trans('buttons.general.crud.update') !!}
                    </button>
                    <button type="button" onclick="appendProduct()" class="btn btn-success">
                        Add product detail
                    </button>
                    <button onclick="sendOrderRecieptToClient('{!! $order['id'] !!}')" type="button"
                            class="btn btn-warning">
                        Send reciept to client
                    </button>
                    <button class="btn btn-default"
                            onclick="sendOrderStatusNotification('{!! $order['id'] !!}')"
                            type="button">
                        Send order status notification to client
                    </button>
                    <div class="clearfix"></div>
                </div><!--edit-form-btn-->
            </div><!--form-group-->
        </div><!--box-body-->
    </div><!--box box-success -->
    {{ Form::close() }}
@endsection
