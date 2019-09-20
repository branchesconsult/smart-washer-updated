<div class="box-body">
    <div class="form-group">
        {{ Form::label('translation_key', 'Translation key', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('translation_key', null, [
            'class' => 'form-control box-size', 'required' => 'required']) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('translation_en', 'Translation English', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('translation_en', null, [
            'class' => 'form-control box-size', 'required' => 'required']) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('translation_ar', 'Translation Arabic', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('translation_ar', null, [
            'class' => 'form-control box-size', 'required' => 'required']) }}
        </div>
    </div>
</div><!--box-body-->


@section("after-scripts")
    {!! Html::script(asset('js/jquery.mask.js')) !!}
    <script type="text/javascript">
        $(document).ready(function () {
            $("#translation_key").on('keyup keydown keypress', function () {
                this.value = this.value.replace(/ /g, "_").replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, '');
            });
        });
    </script>
@endsection
