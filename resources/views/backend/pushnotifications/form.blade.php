<div class="box-body">
    <div class="form-group">
        {{ Form::label('title','Title', ['class' => 'col-lg-2 control-label required', 'id' => 'title']) }}
        <div class="col-lg-10">
            {{ Form::text('title', null, ['class' => 'form-control box-size', 'required' => 'required']) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('notification_text','Text', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::textarea('notification_text', null, ['class' => 'form-control box-size', 'required' => 'required']) }}
        </div>
    </div>


    <div class="form-group">
        {{ Form::label('freequency','Send',
        ['class' => 'col-lg-2 control-label required', 'id' => 'title']) }}
        <div class="col-lg-10">
            <select onchange="appendScheduleFields(this.value)"
                    style="width: 500px;"
                    class="form-control" required
                    name="freequency">
                <option value="">Please select</option>
                <option value="0">Right now</option>
                <option value="daily">Daily</option>
                <option value="weekly">Weekly</option>
                <option value="monthly">Monthly</option>
            </select>
        </div>
    </div>

    <div class="box-body">
        <h4>Select Location</h4>
        <div class="panel panel-default">
            <div class="panel-body">
                @foreach($locations as $l)
                    <?php
                    if($pushnotification->location == $l->id){
                        $checked = true;
                    }else{
                        $checked = false;
                    }
                    ?>
                    <label class="checkbox-inline">
                        {!! Form::radio('location',$l->id, $checked) !!}
                        {!! $l->name !!}
                    </label>
                @endforeach
            </div>
        </div>
    </div>

    <div id="fields-schedule-form"></div>

</div><!--box-body-->
@section("after-scripts")
    <script type="text/javascript">
        $(document).ready(function () {

        });

        function appendScheduleFields(freequency) {
            console.log(freequency);
            var scheduleFieldsTempl = $("#schedule_fields").html();
            var scheduleMonthTempl = $("#schedule_month_field").html();
            var DatesInMonthTempl = $("#dates_in_month").html();
            var scheduleDayTempl = $("#schedule_day_field").html();

            var scheduleFormFields = $("#fields-schedule-form");
            switch (freequency) {
                case 'daily':
                    scheduleFormFields.html(scheduleFieldsTempl);
                    break;
                case 'weekly':
                    scheduleFormFields.html(scheduleDayTempl + scheduleFieldsTempl);
                    break;
                case 'monthly':
                    scheduleFormFields.html(DatesInMonthTempl + scheduleFieldsTempl);
                    break;
                default:
                    scheduleFormFields.html('');
            }
            return;
        }
    </script>
@endsection
