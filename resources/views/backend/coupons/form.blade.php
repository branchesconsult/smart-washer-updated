<div class="box-body">
    {{--Code--}}
    <div class="form-group">
        {{ Form::label('name', 'Code', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('code', null,
            ['class' => 'form-control box-size',
            'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->

    {{--Valid Form--}}
    <div class="form-group">
        {{ Form::label('name', 'Valid Form', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('valid_from', null,
             ['class' => 'form-control  box-size',
              'required' => 'required', 'id' => 'datetimepicker1'
              ]) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    {{--Valid Till--}}


    <div class="form-group">
        {{ Form::label('name', 'Valid Till', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('valid_till', null,
             ['class' => 'form-control  box-size',
              'required' => 'required', 'id' => 'datetimepicker2'
              ]) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->

    {{--Discount--}}

    <div class="form-group">
        {{ Form::label('name', 'Discount', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('discount', null,
            ['class' => 'form-control box-size',
            'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->

    {{--Discount Type--}}

    <div class="form-group">
        {{ Form::label('name', 'Discount Type', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-5">
            {{ Form::select('discount_type', [
                'fixed' => 'fixed',
                'percentage' => 'percentage'
            ], null,
            [
            'class' => 'form-control',
             'required' => 'required'])
             }}
        </div>
    </div>

    {{--Minimum Purchase--}}
    <div class="form-group">
        {{ Form::label('name', 'Minimum Purchase', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('min_purchase', null,
            ['class' => 'form-control box-size',
            'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->

</div><!--box-body-->

@section("after-scripts")
    <script type="text/javascript">
        //Put your javascript needs in here.
        //Don't forget to put `@`parent exactly after `@`section("after-scripts"),
        //if your create or edit blade contains javascript of its own
        $(document).ready(function () {
            $(function () {
                $('#datetimepicker1, #datetimepicker2').datetimepicker({
                    format: 'YYYY-MM-DD h:mm:ss'
                });
            });
        });
    </script>
@endsection
