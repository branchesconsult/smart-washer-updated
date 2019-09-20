<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Add owner</h3>
    </div><!--box-header with-border-->
    <div class="box-body">
        <div class="col-md-12 pr-0">
            {{Form::open(['route' => ['admin.assign.laundry.user', 'laundry_id'=>$laundry->id], 'method' => 'post', 'id' => 'create-laundry-owner'])}}
            {{ Form::hidden('relation', \Config::get('constants.laundry_users_relation.owner'))  }}
            <div class="form-group">
                <div class="col-md-6 pl-0">
                    {{ Form::select('laundry_user', $laundry_owners, null, [
                    'class' => 'form-control select2','style'=>'width: 100%', 'required']
                    ) }}
                    <small class="help help-block">Select email of laundry owners</small>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary  pull-right">
                        Add Owner
                    </button>
                </div>
            </div>
            {{Form::close()}}
        </div>

        <!--User table-->
        <div class="col-md-12 pl-0 pr-0 pt-20">
            <div class="box-header with-border pl-0">
                <h3 class="box-title">All owners</h3>
            </div><!--box-header with-border-->
            <div class="table-responsive data-table-wrapper">
                @include('backend.laundries.partials.laundries-users-table')
            </div><!--table-responsive-->
        </div>
    </div>
</div>