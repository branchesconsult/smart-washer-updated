<div class="box-body">
    <div class="col-md-12">
        <h5>Order detail</h5>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Products</th>
                    <th>Service</th>
                    <th>Qty</th>
                    <th>Orignal price</th>
                    <th>Customer Paid price/qty</th>
                    <th>Customer Total paid price
                        <small>Paid price*Qty</small>
                    </th>
                    <th>Laundry price/item</th>
                    <th>Total laundry price
                        <small>Laundry price/item price*Qty</small>
                    </th>
                    <th>Created At</th>
                    <th>
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($order['detail'] as $key => $val)
                    <tr>
                        <td>{!! $val['product']['name'] !!}</td>
                        @foreach($val['product']['services'] as $key1 => $val1)
                            @if($val1['service_id'] == $val['service']['id'])
                                <td>{!! $val1['name'] !!}</td>
                            @endif
                        @endforeach
                        <td>{!! $val['qty'] !!}</td>
                        <td>{!! $val['price'] !!}</td>
                        <td>{!! $val['paid_price'] !!}</td>
                        <td>{!! $val['total_paid_price'] !!}</td>
                        <td>{!! $val['total_paid_laundry_price']/$val['qty'] !!}</td>
                        <td>{!! $val['total_paid_laundry_price'] !!}</td>
                        <td>{!! $val['created_at'] !!}</td>
                        <td>
                            <a href="javascript:deleteOrderDetail('{!! $val['id'] !!}')"
                               class="Delete">
                                <span class="fa fa-trash"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot id="pro-detail-tbl-add">

                </tfoot>
            </table>
        </div>
        <div class="form-group">
            {{Form::label('orderstatus_id', 'Order Status',['class' => 'col-md-2'])}}
            <div class="col-md-10">
                <select class="form-control" id="orderstatus_id" name="orderstatus_id">
                    <option value="">Please select</option>
                    @foreach($statuses as $key => $val)
                        <option
                                {!! ($val['id'] == $order['orderstatus_id']) ? 'selected' : '' !!}
                                value="{!! $val['id'] !!}">{!! $val['status'] !!}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            {{Form::label('delivery_charges', 'Delivery charges',['class' => 'col-md-2'])}}
            <div class="col-md-10">
                {!! Form::text('delivery_charges',
                (!empty($order['delivery_charges'])) ? $order['delivery_charges'] : \Config::get('constants.delivery_charges'),
                [
                'class'=>'form-control',
                'id' => 'delivery_charges'
                ]) !!}
            </div>
        </div>
        <div class="form-group">
            {{Form::label('sorting_fee', 'Sorting Fee',['class' => 'col-md-2'])}}
            <div class="col-md-10">
                {!! Form::text('sorting_fee',
                (!is_null($order['sorting_fee'])) ? $order['sorting_fee'] : \Config::get('constants.sorting_fee'),
                [
                'class'=>'form-control',
                'id' => 'sorting_fee'
                ]) !!}
            </div>
        </div>
        <div class="form-group">
            {{Form::label('coupon_code', 'Coupon code',['class' => 'col-md-2'])}}
            <div class="col-md-10">
                {!! Form::text('coupon_code',
                (!empty($order['coupon'])) ? $order['coupon']['code'] : '',
                [
                'class'=>'form-control',
                'id' => 'coupon_code'
                ]) !!}
                @if(!empty($order['coupon']))
                    <small class="help-block">
                        <a href="javascript:removeCoupon('{!! $order['id'] !!}')">
                            Remove coupon
                        </a>
                    </small>
                @endif
            </div>
        </div>
        <div class="form-group">
            {{Form::label('pickup_time', 'Pickup time',['class' => 'col-md-2'])}}
            <div class="col-md-10">
                {!! Form::text('pickup_time',
                (!empty($order['pickup_time'])) ? $order['pickup_time'] : '0000-00-00 00:00:00',
                [
                'class'=>'form-control date_time',
                'id' => 'pickup_time'
                ]) !!}
            </div>
        </div>
        <div class="form-group">
            {{Form::label('delivery_time', 'Delivery time',['class' => 'col-md-2'])}}
            <div class="col-md-10">
                {!! Form::text('delivery_time',
                (!empty($order['delivery_time'])) ? $order['delivery_time'] : '0000-00-00 00:00:00',
                [
                'class'=>'form-control date_time',
                'id' => 'delivery_time'
                ]) !!}
            </div>
        </div>
    </div>
    <div style="display: none;" id="product-add-template">
        <table>
            <tr id="dynamic-row-{id}">
                <td>
                    <select id="dynamic-product" name="dynamic[product_id]" class="form-control" name="product[]"
                            onchange="getProductServices(this.value)">
                        <option value="0">Select product</option>
                        @foreach($products as $key => $val)
                            <option value="{!! $val['id'] !!}">{!! $val['name'] !!}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <select onchange="getServicePrices(this.value)"
                            id="dynamic-service-id" class="form-control"
                            name="dynamic[service_id]">

                    </select>
                </td>
                <td>
                    <select id="dynamic-qty" name="dynamic[qty]" class="form-control">
                        <option value="">Select Qty</option>
                        @for($i = 1; $i <= 100; $i++)
                            <option value="{!! $i !!}">{!! $i !!}</option>
                        @endfor
                    </select>
                </td>
                <td id="dynamic-price-cont">
                    Not Applicable
                </td>
                <td><input type="text"
                           id="dynamic-paid_price"
                           name="dynamic[paid_price]"
                           class="form-control"/></td>
                <td>Will calculate automatically</td>
                <td><input type="text"
                           id="dynamic-laundry_price"
                           name="dynamic[laundry_price]"
                           class="form-control"/></td>
                <td>Will calculate automatically</td>
                <td>
                    <a href="javascript:removeDynamicRow('{id}')">
                        <span class="fa fa-trash"></span>
                    </a>
                </td>
            </tr>
        </table>
    </div>
</div><!--box-body-->
<?php //dd($products);?>
@section("after-scripts")
    <script type="text/javascript">
        <?php
            $js_array = json_encode($products);
            echo "var products = ". $js_array . ";\n";
        ?>
        console.log(products);
        $(document).ready(function () {
            $('.date_time').datetimepicker({
                format: 'YYYY-MM-DD h:mm:ss'
            });
        });
        var addedDetails = 0;
        function appendProduct() {
            addedDetails++;
            if (addedDetails == 1) {
                var appendTo = $("#pro-detail-tbl-add");
                var toBeAppend = $("#product-add-template");
                appendTo.append(toBeAppend.html().replace('{id}', addedDetails)
                    .replace('{id}', addedDetails)
                    .replace('{id}', addedDetails)
                    .replace('<table><tbody>', '')
                    .replace('</tbody></table>', ''));
            }
        }
        function removeDynamicRow(rowId) {
            $("tr#dynamic-row-" + rowId).remove();
            addedDetails = 0;
        }
        //console.log('{!! json_encode($products) !!}');

        function getProductServices(productId) {
            $("#dynamic-service-id").html('');
            $("#dynamic-paid_price, #dynamic-laundry_price").val('');

            var data = products;//JSON.parse('{!! json_encode($products,true) !!}')
            var productSelected = data.filter(
                function (data) { return data.id == productId }
            );
            var serviceTxt = "<option value='0'>Select service</option>";
            $.each(productSelected[0].services, function (k, v) {
                serviceTxt += "<option value='" + v.service_id + "'>" + v.name + "</option>"
            });
            $("#dynamic-service-id").html(serviceTxt);
        }
        function getServicePrices(serviceId) {
            var productId = $("#dynamic-product").val();
            //console.log(getServicePrice(productId, serviceId), 'asas');
            getServicePrice(productId, serviceId);
        }
        function getServicePrice(productId, serviceId) {


            var data = products;//JSON.parse('{!! json_encode($products, true) !!}')
            var productSelected = data.filter(
                function (data) { return data.id == productId }
            );

            var serviceData = productSelected[0].services;
            var serviceSelected = serviceData.filter(
                function (serviceData) { return serviceData.service_id == serviceId }
            );
            if (productSelected[0].is_custom == 0) {

            } else {

            }
            console.log(serviceSelected[0], 'adsasd');
            $("#dynamic-paid_price").val(serviceSelected[0].price);
            $("#dynamic-laundry_price").val(serviceSelected[0].laundry_price);
        }

        function updateOrder() {
            $.ajax({
                type: 'POST',
                url: '{{route('admin.orders.updateDetail')}}',
                data: {
                    orderId: '{!! $order['id'] !!}',
                    productId: $("#dynamic-product").val(),
                    serviceId: $("#dynamic-service-id").val(),
                    qty: $("#dynamic-qty").val(),
                    paidPrice: $("#dynamic-paid_price").val(),
                    price: $("#dynamic-price").val(),
                    orderstatusId: $("#orderstatus_id").val(),
                    laundry_price: $("#dynamic-laundry_price").val(),
                    delivery_charges: $("#delivery_charges").val(),
                    delivery_time: $("#delivery_time").val(),
                    pickup_time: $("#pickup_time").val(),
                    sorting_fee: $("#sorting_fee").val(),
                    coupon_code: $("#coupon_code").val(),
                },
                beforeSend: function () {
                    $(".wait-overley").show();
                },
                success: function (data) {
                    window.location.reload(true);
                }
            });
        }

        function deleteOrderDetail(detailId) {
            var isConfirm = confirm('Are you sure?')
            if (isConfirm) {
                $.ajax({
                    type: 'DELETE',
                    url: '{{route('admin.orders.deleteDetail')}}',
                    data: {
                        detail_id: detailId,
                        orderId: '{!! $order['id'] !!}'
                    },
                    beforeSend: function () {
                        $(".wait-overley").show();
                    },
                    success: function (data) {
                        window.location.reload(true);
                    }
                });
            }
        }


        function sendOrderRecieptToClient(orderID) {
            $.ajax({
                type: 'POST',
                url: '{{route('admin.orders.sendReciept')}}',
                data: {
                    order_id: '{!! $order['id'] !!}'
                },
                beforeSend: function () {
                    $(".wait-overley").show();
                },
                success: function (data) {
                    $(".wait-overley").hide();
                    alert('Email sent to client.');
                }
            });
        }

        function sendOrderStatusNotification(orderId) {
            $.ajax({
                type: 'POST',
                url: '{{route('admin.orders.sendNotification')}}',
                data: {
                    order_id: '{!! $order['id'] !!}'
                },
                beforeSend: function () {
                    $(".wait-overley").show();
                },
                success: function (data) {
                    $(".wait-overley").hide();
                    alert('Notification sent to client.');
                }
            });
        }

        function removeCoupon(orderId) {
            $.ajax({
                type: 'POST',
                url: '{{route('admin.order.removeCoupon')}}',
                data: {
                    order_id: orderId,
                    sorting_fee: '{!! (!is_null($order['sorting_fee'])) ? $order['sorting_fee'] : \Config::get('constants.sorting_fee') !!}',
                    delivery_charges: "{!! (!empty($order['delivery_charges'])) ? $order['delivery_charges'] : \Config::get('constants.delivery_charges') !!}"
                },
                beforeSend: function () {
                    $(".wait-overley").show();
                }
                ,
                success: function (data) {
                    window.location.reload(true);
                }
            })
            ;
        }
    </script>
@endsection
