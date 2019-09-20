<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">{{ trans('labels.backend.addresses.management') }}</h3>

        <div class="box-tools pull-right">
            @include('backend.addresses.partials.addresses-header-buttons')
        </div>
    </div><!--box-header with-border-->

    <div class="box-body">
        <div class="table-responsive data-table-wrapper">
            <table id="addresses-table" class="table table-condensed table-hover table-bordered">
                <thead>
                <tr>
                    <th>{{ trans('labels.backend.addresses.table.id') }}</th>
                    <th>Building Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Postal</th>
                    <th>Phone</th>
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
        </div><!--table-responsive-->
    </div><!-- /.box-body -->
</div><!--box-->

@section('address-scripts')
    {{-- For DataTables --}}
    {{ Html::script(mix('js/dataTable.js')) }}

    <script>
        //Below written line is short form of writing $(document).ready(function() { })
        $(function () {

            //FinBuilders.DataTableSearch.init(dataTable);
        });
        function getLaundryAddresses() {
            var dataTable = $('#addresses-table').dataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.addresses.get") }}',
                    type: 'post',
                    "data": function (d) {
                        d.addressable_id = $('#addressable_id').val();
                        d.addressable_type = $('#addressable_type').val();
                    }
                },
                columns: [
                    {data: 'id', name: '{{config('module.addresses.table')}}.id'},
                    {data: 'building_name', name: '{{config('module.addresses.table')}}.building_name'},
                    {data: 'address', name: '{{config('module.addresses.table')}}.address'},
                    {data: 'city', name: '{{config('module.addresses.table')}}.city'},
                    {data: 'postal_code', name: '{{config('module.addresses.table')}}.postal_code'},
                    {data: 'phone', name: '{{config('module.addresses.table')}}.phone'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500,
                dom: 'lBfrtip',
                buttons: {
                    buttons: [
                        {extend: 'copy', className: 'copyButton', exportOptions: {columns: [0, 1]}},
                        {extend: 'csv', className: 'csvButton', exportOptions: {columns: [0, 1]}},
                        {extend: 'excel', className: 'excelButton', exportOptions: {columns: [0, 1]}},
                        {extend: 'pdf', className: 'pdfButton', exportOptions: {columns: [0, 1]}},
                        {extend: 'print', className: 'printButton', exportOptions: {columns: [0, 1]}}
                    ]
                }
            });
        }
    </script>
@endsection
