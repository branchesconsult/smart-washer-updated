<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Add driver</h3>
    </div><!--box-header with-border-->
    <div class="box-body">
        <div class="col-md-12 pr-0">
            {{Form::open(['route' => ['admin.assign.laundry.user', 'laundry_id'=>$laundry->id], 'method' => 'post', 'id' => 'create-laundry-owner'])}}
            {{ Form::hidden('relation', \Config::get('constants.laundry_users_relation.driver'))  }}
            <div class="form-group">
                <div class="col-md-12 pl-0">
                    {{ Form::select('laundry_user', $laundry_drivers, null, [
                    'class' => 'form-control select2','style'=>'width: 100%', 'required']
                    ) }}
                    <small class="help help-block">Select email of laundry driver</small>
                </div>
                <div class="col-md-12 pl-0">
                    <div style="width: 100%; height: 500px;" id="driver-area-map"></div>
                    <div style="display: none;" id="color-palette"></div>
                    <div>
                        <button type="button" id="delete-button">Delete Selected Shape</button>
                        <button type="button" id="delete-all-button">Delete All Shapes</button>
                    </div>

                    <textarea readonly id="vertices" name="driver_area" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Save">
            </div>
            {{Form::close()}}
        </div>

        <!--User table-->
        <div class="col-md-12 pl-0 pr-0 pt-20">
            <div class="box-header with-border pl-0">
                <h3 class="box-title">All drivers</h3>
            </div><!--box-header with-border-->
            <div class="table-responsive data-table-wrapper">
                @include('backend.laundries.partials.laundries-users-table')
            </div><!--table-responsive-->
        </div>
    </div>
</div>