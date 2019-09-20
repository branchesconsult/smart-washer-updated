<div id="schedule_fields" style="display: none;">
    <div class="form-group" id="at_time">
        {{ Form::label('time_at','At time',
        ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            <select style="width: 500px;" class="form-control" required name="time_at">
                <option value="">Please select</option>
                @for($i=1; $i <= 24; $i++)
                    <option value="{!! $i !!}">{!! $i !!}</option>
                @endfor
            </select>
        </div>
    </div>
</div>

<div id="schedule_month_field" style="display: none">
    <div class="form-group">
        {{ Form::label('schedule_month','Select month',
        ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            <select style="width: 500px;" class="form-control" required name="schedule_month">
                <option value="">Please select</option>
                @for($i=1; $i <= 12; $i++)
                    <option value="{!! $i !!}">{!! $i !!}</option>
                @endfor
            </select>
        </div>
    </div>
</div>


<div id="schedule_day_field" style="display: none">
    <div class="form-group">
        {{ Form::label('schedule_day','Select day',
        ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            <select style="width: 500px;" class="form-control" required name="schedule_day">
                <option value="">Please select</option>
                @foreach(getDays() as $key => $val)
                    <option value="{!! $key !!}">{!! $val !!}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>


<div id="dates_in_month" style="display: none;">
    <div class="form-group">
        {{ Form::label('schedule_date','Select date',
        ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            <select style="width: 500px;" class="form-control" required name="schedule_date">
                <option value="">Please select</option>
                @for($i=1;$i <= 31; $i++)
                    <option value="{!! $i !!}">{!! $i !!}</option>
                @endfor
            </select>
        </div>
    </div>
</div>



