{{Form::hidden('addressable_id', null, ['id' => 'addressable_id'])}}
{{Form::hidden('addressable_type', null, ['id' => 'addressable_type'])}}
<input type="hidden" name="location" id="location"/>
<div class="form-group">
    {{-- Including Form blade file --}}
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('building_name', 'Building Name', ['class' => 'col-lg-2 control-label required']) }}
            <div class="col-lg-10">
                {{ Form::text('building_name', null,
                [
                'class' => 'form-control box-size',
                 'required' => 'required']) }}
            </div>
        </div><!--form-group-->
        <div class="form-group">
            {{ Form::label('', 'Location (google map)', ['class' => 'col-lg-2 control-label']) }}
            <div class="col-lg-10">
                {{ Form::text('', null,
                ['class' => 'form-control box-size', 'id' => 'address_map'])
                 }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('', 'Please drag location marker to adjust location', ['class' => 'col-lg-2 control-label']) }}
            <div class="col-lg-8">
                <div class="map" id="location_map"></div>
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('address', 'Address 1', ['class' => 'col-lg-2 control-label required']) }}
            <div class="col-lg-10">
                {{ Form::textarea('address', null,
                [
                'class' => 'form-control box-size',
                 'required' => 'required'])
                 }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('district', 'District', ['class' => 'col-lg-2 control-label']) }}
            <div class="col-lg-10">
                {{ Form::text('district', null,
                ['class' => 'form-control box-size', 'id' => 'district'])
                 }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('city', 'City', ['class' => 'col-lg-2 control-label']) }}
            <div class="col-lg-10">
                {{ Form::text('city', null,
                ['class' => 'form-control box-size', 'id' => 'city'])
                 }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('postal_code', 'Postal code', ['class' => 'col-lg-2 control-label']) }}
            <div class="col-lg-10">
                {{ Form::text('postal_code', null,
                ['class' => 'form-control box-size'])
                 }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('phone', 'Phone', ['class' => 'col-lg-2 control-label']) }}
            <div class="col-lg-10">
                {{ Form::text('phone', null,
                ['class' => 'form-control box-size'])
                 }}
            </div>
        </div>
    </div>
</div><!-- form-group -->
