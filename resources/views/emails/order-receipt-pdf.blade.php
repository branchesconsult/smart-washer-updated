<style>
    td {
        text-align: left;
        padding: 6px;
    }

    * {
        color: #626065;
        font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
        font-size: 12px;

    }

    .seperate-height {
        clear: both;
        height: 30px;
    }

    tr.heading {
        background: #1685EB;
    }

    tr.heading th {
        color: #fff;
        padding: 5px;
    }

    .txt-head {
        color: #1685EB;
        font-weight: bold;
    }

    .summery {
        line-height: 22px;
    }
</style>
<table width="100%">
    <tr>
        <td colspan="2" align="center">
            <img src="{{asset('img/sw-logo.jpg')}}" style="width: 200px;"/>
        </td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="vertical-align: top;">
                        <img src="{{asset('img/location-icon-blue.png')}}" width="16px" height="16px"/>
                    </td>
                    <td style="vertical-align: top;">
                        3333 Arafat St.<br/>
                        AlAndalus District<br/>
                        AlShahwan Commercial Center 4th Floor
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="vertical-align: top;">
                        <img src="{{URL::to('img/phone_font.png')}}" width="16px" height="16x"/>
                    </td>
                    <td style="vertical-align: top;">
                        +966 54 777 1807
                    </td>
                </tr>
            </table>
        </td>
        <td style="vertical-align: top;">
            <p style="text-align: right;">
                Invoice #: {!! $order['invoice_num'] !!}<br/>
                Created: {!! date("F, j, Y", strtotime($order['created_at'])) !!}
            </p>
        </td>
    </tr>
</table>
<div class="seperate-height"></div>
<table width="100%">
    <tr style="background: #1685EB">
        <th style="color: #fff; padding: 5px;">
            Payment method
        </th>
    </tr>
    <tr>
        <td>
            {!! $order['payment_method'] == 'cod' ? 'Cash on delievery':'Point of sale' !!}
        </td>
    </tr>
</table>
<?php $location_id = 1;?>
<div class="seperate-height"></div>
<table width="100%">
    <tr class="heading">
        <th>
            Product
        </th>
        <th>
            Service
        </th>
        <th>
            Qty.
        </th>
        <th>
            Unit Price
        </th>
        <th>
            Total Price
        </th>
        {{--<th>--}}
        {{--Estimated delievery time (days)--}}
        {{--</th>--}}
    </tr>
    @foreach($order['detail'] as $item)
    <?php $location_id = isset($item['location_id']) ? $item['location_id'] : 1;?>
        <tr>
            <td>{!! $item['product']['name'] !!}</td>
            <td>{!! $item['service']['name'] !!}</td>
            <td>{!! $item['qty'] !!}</td>
            <td>{!! $item['paid_price'] !!}</td>
            <td>{!! $item['total_paid_price'] !!}</td>
            {{--<td>5</td>--}}
        </tr>
    @endforeach
    <?php
    $location = \DB::table('locations')->where('id',$location_id)->first();
    $currency = $location->currency_code;
    ?>
    <tr style="border-top: 2px solid #CECECE;">
        <td colspan="5" class="summery">
            <span class="txt-head">
                Subtotal:</span>
            <?php echo $currency;?> {!! $order['subtotal'] !!}<br/>
            <span class="txt-head">
                Delivery charges:</span>
            <?php echo $currency;?> {!! $order['delivery_charges'] !!}<br/>

            @if($order['sorting_fee'] > 0)
                <span class="txt-head">
                Sorting fee:</span>
                <?php echo $currency;?> {!! $order['sorting_fee'] !!}<br/>
            @endif

            @if($order['discount'] > 0)
                <span class="txt-head">
                Discount:
            </span>
                {!! $order['discount_type'] == 'fixed' ? $currency:'' !!}{!! $order['discount'] !!}{!! $order['discount_type'] == 'percentage' ? '%':'' !!}
                <br/>
            @endif
            <span class="txt-head">
                Total:</span>
            <?php echo $currency.' '. ($order['subtotal'] + $order['delivery_charges']);?> <br/>
        </td>
    </tr>
</table>