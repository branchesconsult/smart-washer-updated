<table class="laundry-users-table table table-condensed table-hover table-bordered">
    <thead>
    <tr>
        <th>{{ trans('labels.backend.access.users.table.first_name') }}</th>
        <th>{{ trans('labels.backend.access.users.table.last_name') }}</th>
        <th>{{ trans('labels.backend.access.users.table.email') }}</th>
        <th>{{ trans('labels.backend.access.users.table.confirmed') }}</th>
        <th>{{ trans('labels.backend.access.users.table.roles') }}</th>
        <th>{{ trans('labels.backend.access.users.table.created') }}</th>
        <th>{{ trans('labels.backend.access.users.table.last_updated') }}</th>
        <th>{{ trans('labels.general.actions') }}</th>
    </tr>
    </thead>
    <thead class="transparent-bg">
    <tr>
        <th>
            {!! Form::text('first_name', null, ["class" => "search-input-text form-control", "data-column" => 0, "placeholder" => trans('labels.backend.access.users.table.first_name')]) !!}
            <a class="reset-data" href="javascript:void(0)"><i class="fa fa-times"></i></a>
        </th>
        <th>
            {!! Form::text('last_name', null, ["class" => "search-input-text form-control", "data-column" => 1, "placeholder" => trans('labels.backend.access.users.table.last_name')]) !!}
            <a class="reset-data" href="javascript:void(0)"><i class="fa fa-times"></i></a>
        </th>
        <th>
            {!! Form::text('email', null, ["class" => "search-input-text form-control", "data-column" => 2, "placeholder" => trans('labels.backend.access.users.table.email')]) !!}
            <a class="reset-data" href="javascript:void(0)"><i class="fa fa-times"></i></a>
        </th>
        <th></th>
        <th>
            {!! Form::text('roles', null, ["class" => "search-input-text form-control", "data-column" => 4, "placeholder" => trans('labels.backend.access.users.table.roles')]) !!}
            <a class="reset-data" href="javascript:void(0)"><i class="fa fa-times"></i></a>
        </th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    </thead>
</table>
