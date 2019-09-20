@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.orders.management'))

@section('page-header')
    <h1>{{ trans('labels.backend.orders.management') }}</h1>
@endsection

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.orders.management') }} update</h3>

            <div class="box-tools pull-right">
                @include('backend.orders.partials.orders-header-buttons')
            </div>
        </div><!--box-header with-border-->

        <div class="box-body">
            <div class="table-responsive data-table-wrapper">
                <div class="form-group mb-15">
                    <div class="col-md-4">
                        <input placeholder="Date from" id="order_from" class="form-control dateTimePicker"/>
                    </div>
                    <div class="col-md-4">
                        <input placeholder="Date To" id="order_to" class="form-control dateTimePicker"/>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary" onclick="filterOrders()">
                            Search
                        </button>
                    </div>
                    <div class="clearfix clear"></div>
                </div>
                <table id="orders-table" class="table table-condensed table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>Customer</th>
                        <th>driver</th>
                        <th>Invoice num</th>

                        <th>skip by client</th>
                        <th>SW Total</th>

                        <th>Laundry cost</th>
                        <th>Smartwashr Profit</th>
                        <th>Delievery fee</th>
                        <th>Sorting fee</th>

                        <th>Collection Time</th>
                        <th>Delivery Time</th>
                        <th>Status</th>
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
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->
@endsection

@section('after-scripts')
    {{-- For DataTables --}}
    {{ Html::script(mix('js/dataTable.js')) }}
    {{ Html::script('https://cdn.datatables.net/colreorder/1.5.1/js/dataTables.colReorder.min.js') }}
    <script>
        //Below written line is short form of writing $(document).ready(function() { })
        var dataTable;
        $(function () {
            $('.dateTimePicker').datetimepicker({
                format: 'YYYY-MM-DD h:mm:ss'
            });
            dataTable = $('#orders-table').dataTable({
                processing: true,
                serverSide: true,
                colReorder: {
                    realtime: true
                },
                ajax: {
                    url: '{{ route("admin.orders.get") }}',
                    type: 'post',
                    data: function (d) {
                        d.order_from = $("#order_from").val();
                        d.order_to = $("#order_to").val();
                    }
                },
                columns: [
                    {data: 'customer', name: 'customer'},
                    {data: 'driver', name: 'driver'},
                    {data: 'invoice_num', name: 'invoice_num'},
                    {data: 'skip_by_client', name: 'skip_by_client'},
                    {data: 'total', name: 'total'},

                    {data: 'laundry_total_price', name: 'laundry_total_price'},
                    {data: 'sw_profit', name: 'sw_profit'},
                    {data: 'delivery_charges', name: 'delivery_charges'},
                    {data: 'sorting_fee', name: 'sorting_fee'},

                    {data: 'pickup_time', name: 'pickup_time'},
                    {data: 'delivery_time', name: 'delivery_time'},
                    {data: 'status', name: 'status'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[12, 'desc']],
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
            });
            Backend.DataTableSearch.init(dataTable);
        });
        function filterOrders() {
            dataTable.api().ajax.reload();
        }
    </script>
@endsection
