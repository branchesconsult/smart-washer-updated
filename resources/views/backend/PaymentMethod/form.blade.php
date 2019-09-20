<div class="box-body">
    <div class="form-group">
        {{ Form::label('name', 'Name',
        ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('name', null,
            ['class' => 'form-control box-size',
            'placeholder' => 'Name',
            'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->
    <div class="form-group">
        {{ Form::label('name_ar', 'Name Arabic',
        ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('name_ar', null,
            ['class' => 'form-control box-size',
            'placeholder' => 'Name Arabic',
            'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->
    <div class="form-group">
        {{ Form::label('icon', 'Icon', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            <div class="custom-file-input">
                {!! Form::file('icon', array('class'=>'form-control inputfile inputfile-1' )) !!}
                <label for="icon">
                    <i class="fa fa-upload"></i>
                    <span>Choose a file</span>
                </label>
            </div>
            <div class="img-remove-icon">
                @if($PaymentMethod->icon)
                    <img height="50" width="50"
                         src="{{ asset("img/".$PaymentMethod->icon) }}">
                @endif
            </div>
        </div>
        <!--col-lg-10-->
    </div><!--form control-->
    <div class="form-group">
        {{ Form::label('description', 'Description', ['class' => 'col-lg-2 control-label'])
        }}
        <div class="col-lg-10">
            {{ Form::textarea('description', null,['class' => 'form-control', 'placeholder' => 'Description',
            'rows' => 2]) }}
        </div>
        <!--col-lg-3-->
    </div>
    <!--form control-->
</div>
@section('after-scripts')
    <script type="text/javascript">
        Backend.Faq.init();
    </script>
@endsection