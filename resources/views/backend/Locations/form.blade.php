
<div class="box-body">
    <div class="form-group">
        {{ Form::label('name', 'Country Name', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            <select class="form-control" name="name">
                <option value="">Please select Country</option>
                @foreach($country as $c)
                    <option {!! $Location->name == $c->name ? 'selected' : '' !!} value="{!! $c->name !!}">{!! $c->name !!}</option>
                @endforeach
            </select>

        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('currency_code', 'Currency Code',
        ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('currency_code', null,
            ['class' => 'form-control box-size',
            'placeholder' => trans('validation.attributes.backend.locations.currency_code'),
            'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->
    <div class="form-group">
        {{ Form::label('currency_symbol', 'Currency Symbol',
        ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('currency_symbol', null,
            ['class' => 'form-control box-size',
            'placeholder' => trans('validation.attributes.backend.locations.currency_symbol'),
            'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->
    <div class="form-group">
        {{ Form::label('open_time', 'Shop open at', ['class' => 'col-lg-2
        control-label']) }}
        <div class="col-lg-10">
            <select class="form-control" name="open_time">
                <option value="">Please select shop open time</option>
                @for($i = 1; $i <= 24; $i++)
                    <option {!! $Location->open_time == $i ? 'selected' : '' !!} value="{!! $i !!}">{!! $i !!}</option>
                @endfor
            </select>
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('close_time', 'Shop close at', ['class' => 'col-lg-2
        control-label']) }}
        <div class="col-lg-10">
            <select class="form-control" name="close_time">
                <option value="">Please select shop closing time</option>
                @for($i = 1; $i <= 24; $i++)
                    <option {!! $Location->close_time == $i ? 'selected' : '' !!} value="{!! $i !!}">{!! $i !!}</option>
                @endfor
            </select>
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('delievery_margin', 'Delievery Margin (hrs)', ['class' => 'col-lg-2
        control-label']) }}
        <div class="col-lg-10">
            <select class="form-control" name="delievery_margin">
                <option value="">Please select delievery margin time</option>
                @for($i = 24; $i <= 24; $i++)
                    <option {!! $Location->delievery_margin == $i ? 'selected' : '' !!} value="{!! $i !!}">{!! $i !!}</option>
                @endfor
            </select>
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('is_shop_close', 'Is shop close?', ['class' => 'col-lg-2
        control-label']) }}
        <div class="col-lg-10">
            <select class="form-control" name="is_shop_close">
                <option value="">Is shop close?</option>
                @foreach([0 => 'no', 1 => 'yes'] as $key => $val)
                    <option {!! $Location->is_shop_close == $key ? 'selected' : '' !!} value="{!! $key !!}">{!! $val !!}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="box-body">
        <h4>Payment Methods</h4>
        <div class="panel panel-default">
            <div class="panel-body">
                <?php
                $selected_methods = [];
                if(!empty($Location->payment_method)){
                    $spmethods = json_decode($Location->payment_method,true);
                    $selected_methods = $spmethods;
                }
                ?>
                @foreach($payment_methods as $p)
                    <label class="checkbox-inline">
                        {!! Form::checkbox('payment_method[]',$p->id, in_array($p->id, $selected_methods)) !!}
                        {!! $p->name !!}
                    </label>
                @endforeach
            </div>
        </div>
    </div>
</div>
@section('after-scripts')
    <script type="text/javascript">
        Backend.Faq.init();
    </script>
@endsection