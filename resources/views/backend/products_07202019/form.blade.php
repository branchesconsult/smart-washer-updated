<div class="box-body">
    <div class="form-group">
        {{ Form::label('name', 'Name', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('name', null, ['class' => 'form-control box-size',
            'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        {{ Form::label('name_ar', 'Arabic name', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('name_ar', null, ['class' => 'form-control box-size',
             'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        {{ Form::label('name', 'Picture', ['class' => 'col-lg-2 control-label']) }}
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
            <img id="holder" src="{!! (isset($product)) ? asset($product->picture) : '' !!}"
                 style="margin-top:15px;max-height:100px;">
        </div>
    </div><!--form-group-->
    <div class="form-group">
        {{ Form::label('is_custom', 'Is custom producrt', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            <select class="form-control" required name="is_custom">
                <option value="">Please select</option>
                <option {!! !empty($product) && $product['is_custom']== 0 ? 'selected':''  !!} value="0">No</option>
                <option
                        {!! !empty($product) && $product['is_custom']== 1 ? 'selected':''  !!}
                        value="1">Yes
                </option>
            </select>
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <!--categories-->
    @if( !Active::checkUriPattern( 'admin/products/create' ) )
        <div class="box-body">
            <h4>Product categories</h4>
            <div class="panel panel-default">
                <div class="panel-body">
                    @foreach($categories as $id => $name)
                        <label class="checkbox-inline">
                            {!! Form::radio('category[]',$id, in_array($id, $product_categories)) !!}
                            {!! $name !!}
                        </label>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
<!--Services-->
    @if( !Active::checkUriPattern( 'admin/products/create' ) )
        <div class="box-body">
            <h4>Product services</h4>
            <div class="panel panel-default">
                <div class="panel-body">
                    @foreach($services as $id => $name)
                        <div class="col-lg-5">
                            <h5>{!! $name !!}</h5>
                            <div class="form-group">
                                <label>Price
                                    <small>Smartwashr price</small>
                                    : </label>{{Form::text('service['.$id.'][price]',(!empty($product_services)) ? $product_services[$id]['price'] : null,
                                ['class' =>'form-control','aria-label' => '...'])}}
                            </div>
                            <div class="form-group">
                                <label>Discounted price: </label>{{Form::text('service['.$id.'][discount_price]', !empty($product_services) ? $product_services[$id]['discount_price']:null,
                                ['class' =>'form-control','aria-label' => '...'])}}
                            </div>
                            <div class="form-group">
                                <label>Laundry price
                                    <small>Smartwashr pay for laundry</small>
                                    : </label>{{Form::text('service['.$id.'][laundry_price]', !empty($product_services) ? $product_services[$id]['laundry_price']:null,
                                ['class' =>'form-control','aria-label' => '...'])}}
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-md-1"></div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div><!--box-body-->

@section("after-scripts")
    {!! Html::script(asset('/vendor/laravel-filemanager/js/lfm.js')) !!}
    <script type="text/javascript">
        $(document).ready(function () {
            $('#btn-logo-selection').filemanager('image');
        });
    </script>
@endsection