@extends('backend.layouts.app')

@section('page-header')
    <h1>
        {{ app_name() }}
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Dashboard</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            <div class="col-md-12 pl-0">
                <h5>Orders</h5>
                <ul class="nav nav-tabs" id="order-tab">
                    @foreach($orders as $key => $val)
                        <li class="status-class-{!! $val['id'] !!} order-statuses">
                            <a href="javascript:getOrdersByStatus('{!! $val['id'] !!}')">
                                {!! $val['status'] !!}
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div id="order-tabContent" class="tab-content">
                    <div class="table-responsive data-table-wrapper">
                        <table id="orders-table-dashboard"
                               class="table table-condensed table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>Customer</th>
                                <th>Invoice num</th>
                                <th>Status</th>
                                <th>Collection Time</th>
                                <th>Delivery Time</th>
                                <th>{{ trans('labels.backend.orders.table.createdat') }}</th>
                                <th>{{ trans('labels.general.actions') }}</th>
                            </tr>
                            </thead>
                            <thead class="transparent-bg">
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            {{--{!! history()->render() !!}--}}
        </div><!-- /.box-body -->
    </div><!--box box-info-->
@endsection

@section("after-scripts")
    {!! Html::script(asset('/js/backend/bootstrap-tabcollapse.js')) !!}
    {{ Html::script(mix('js/dataTable.js')) }}

    <script>
        $(document).ready(function () {
            $('#order-tab').tabCollapse({
                tabsClass: 'hidden-sm hidden-xs',
                accordionClass: 'visible-sm visible-xs'
            });
            $('.dateTimePicker').datetimepicker({
                format: 'YYYY-MM-DD h:mm:ss'
            });
            getOrdersByStatus(2);
        });

        //Below written line is short form of writing $(document).ready(function() { })
        function getOrdersByStatus(statusId) {
            $(".order-statuses").removeClass('active');
            $(".status-class-" + statusId).addClass('active');
            $('#orders-table-dashboard').dataTable({
                processing: true,
                serverSide: true,
                destroy: true,
                ajax: {
                    url: '{{ route("admin.orders.get") }}',
                    type: 'post',
                    data: function (d) {
                        d.status = statusId;
                    }
                },
                columns: [
                    {data: 'customer', name: 'customer'},
                    {data: 'invoice_num', name: 'invoice_num'},
                    {data: 'status', name: 'status'},
                    {data: 'pickup_time', name: 'pickup_time'},
                    {data: 'delivery_time', name: 'delivery_time'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[1, 'desc']],

                searchDelay: 500,
                dom: 'lBfrtip',
                buttons: {
                    buttons: [
                        {extend: 'copy', className: 'copyButton', exportOptions: {columns: [0, 1, 2, 3, 4, 5, 6]}},
                        {extend: 'csv', className: 'csvButton', exportOptions: {columns: [0, 1, 2, 3, 4, 5, 6]}},
                        {extend: 'excel', className: 'excelButton', exportOptions: {columns: [0, 1, 2, 3, 4, 5]}},
                        {extend: 'pdf', className: 'pdfButton', exportOptions: {columns: [0, 1, 2, 3, 4, 5, 6]}},
                        {extend: 'print', className: 'printButton', exportOptions: {columns: [0, 1, 2, 3, 4, 5, 6]}}
                    ]
                }
            }).api().ajax.reload();
            //Backend.DataTableSearch.init(orderDataTable);
            //orderDataTable.api().ajax.reload();
        }
    </script>
@stop