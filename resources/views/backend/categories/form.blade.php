<div class="box-body">
    <div class="form-group">
        {{ Form::label('parent_id', 'Parent', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::select('parent_id', ['0'=>'No parent']+$categoriesDD, null,
            ['class' => 'form-control select2 box-size']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        {{ Form::label('name', 'Name', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('name', null,
            ['class' => 'form-control box-size',
            'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->

    <div class="form-group">
        {{ Form::label('name_ar', 'Arabic Name', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('name_ar', null,
            ['class' => 'form-control box-size',
            'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->

    <div class="form-group">
        {{ Form::label('name', 'Category Logo', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-8">
            <div class="input-group">
                   <span class="input-group-btn">
                     <a id="btn-logo-selection" data-input="logo" data-preview="holder" class="btn btn-primary">
                       <i class="fa fa-picture-o"></i> Choose
                     </a>
                   </span>
                {{ Form::text('picture', null,[
                    'class' => 'form-control box-size',
                    'id' => 'logo'
                ])
             }}
            </div>
            <img id="holder" style="margin-top:15px;max-height:100px;">
        </div>
    </div><!--form-group-->
</div><!--box-body-->

@section("after-scripts")
    {!! Html::script(asset('/vendor/laravel-filemanager/js/lfm.js')) !!}
    <script type="text/javascript">
        $(document).ready(function () {
            $('#btn-logo-selection').filemanager('image');
        });
    </script>
@endsection
