<?php

namespace App\Http\Controllers\Backend\Order;

use App\Http\Requests\Shop\CouponRequest;
use App\Http\Utilities\SendEmail;
use App\Models\Coupon\Coupon;
use App\Models\Device\Device;
use App\Models\Order\Order;
use App\Models\Orderdetail\Orderdetail;
use App\Models\Orderstatus\Orderstatus;
use App\Models\Product\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Order\OrderRepository;
use App\Http\Requests\Backend\Order\ManageOrderRequest;
use App\Http\Requests\Backend\Order\CreateOrderRequest;
use App\Http\Requests\Backend\Order\StoreOrderRequest;
use App\Http\Requests\Backend\Order\EditOrderRequest;
use App\Http\Requests\Backend\Order\UpdateOrderRequest;
use App\Http\Requests\Backend\Order\DeleteOrderRequest;
use LaravelFCM\Facades\FCM;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;

/**
 * OrdersController
 */
class OrdersController extends Controller
{
    /**
     * variable to store the repository object
     * @var OrderRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param OrderRepository $repository ;
     */
    public function __construct(OrderRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Order\ManageOrderRequest $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageOrderRequest $request)
    {
        return view('backend.orders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateOrderRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateOrderRequest $request)
    {
        $order = [];
        $order['detail'] = [];
        $products = [];
        return view('backend.orders.create', compact('order', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreOrderRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return redirect()->route('admin.orders.index')->withFlashSuccess(trans('alerts.backend.orders.created'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Order\Order $order
     * @param  EditOrderRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order, EditOrderRequest $request)
    {
        $order = $order->with(['detail' => function ($q) {
            $q->with(['product' => function ($q1) {
                $q1->with(['services' => function ($q2) {
                    $q2->select('service_id', 'price', 'discount_price', 'laundry_price', 'name');
                }]);
            }, 'service:id']);
        }, 'user', 'driver', 'coupon'])->where('id', $order->id)
            ->first();
        $order->skipMutator = true;
//        $order['pickup_time'] = Carbon::createFromFormat("D, M j, Y g:i A", $order['pickup_time'])
//            ->toDateTimeString('Y-m-d H:i:s');
//        dd($order['pickup_time']);
        if (!empty($order['detail'])) {
            $productsInOrder = array_column($order['detail']->toArray(), 'product_id');
        } else {
            $productsInOrder = [];
        }
        $products = Product::with(['services' => function ($q2) {
            $q2->select('service_id', 'price', 'discount_price', 'name', 'laundry_price');
        }])
            ->whereNotIn('id', $productsInOrder)
            ->get()->toArray();
        $statuses = Orderstatus::all()->toArray();
        //dd($statuses);
        return view('backend.orders.edit', compact('order', 'products', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateOrderRequestNamespace $request
     * @param  App\Models\Order\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update($order, $input);
        //return with successfull message
        return redirect()->route('admin.orders.index')->withFlashSuccess(trans('alerts.backend.orders.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteOrderRequestNamespace $request
     * @param  App\Models\Order\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order, DeleteOrderRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($order);
        //returning with successfull message
        return redirect()->route('admin.orders.index')->withFlashSuccess(trans('alerts.backend.orders.deleted'));
    }


    public function updateOrderDetail(Request $request)
    {
        $couponInfo = [];
        $couponInfo['discount'] = 0;
        $orderId = $request->get('orderId');
        $orderSummery = Order::find($orderId);
        if (!empty($request->get('productId'))) {
            $orderDetail['product_id'] = $request->get('productId');
            $orderDetail['service_id'] = $request->get('serviceId');
            $orderDetail['qty'] = $request->get('qty');
            $orderDetail['price'] = $request->get('paidPrice');
            $orderDetail['paid_price'] = $request->get('paidPrice');
            $orderDetail['total_paid_price'] = $request->get('paidPrice') * $orderDetail['qty'];
            $orderDetail['total_paid_laundry_price'] = $request->get('laundry_price') * $orderDetail['qty'];
            $orderDetail['added_by'] = \Auth::id();
            $orderDetail['order_id'] = $request->get('orderId');
            Orderdetail::create($orderDetail);
        }
        //Apply coupon
        //if ($request->has('coupon_code')) {
        $couponInfo = $this->applyCoupon($request->get('coupon_code'), $this->getOrderOrignalPrice($orderId));
        $orderSummery->discount = $couponInfo['discount_val'];
        $orderSummery->discount_type = $couponInfo['discount_type'];
        //}
        //dd($couponInfo);
        $orderSummery->coupon_id = (!empty($couponInfo)) ? $couponInfo['coupon_id'] : NULL;
        $orderSummery->orderstatus_id = $request->get('orderstatusId');
        $orderSummery->delivery_charges = $request->get('delivery_charges');
        $orderSummery->pickup_time = $request->get('pickup_time');
        $orderSummery->delivery_time = $request->get('delivery_time');
        $orderSummery->sorting_fee = $request->get('sorting_fee');
        $orderSummery->subtotal = $this->getOrderOrignalPrice($orderId);
        $orderSummery->total = ($this->getOrderOrignalPrice($orderId)
                + (double)$request->get('delivery_charges')
                + (double)$request->get('sorting_fee')) - $couponInfo['applied_discount'];
        $orderSummery->save();
        //Update in orders
        $this->updateMainOrderFromDetail($orderId);
        return response()->json(['success' => true]);
    }

    public function updateMainOrderFromDetail($orderId)
    {
        $orderMain = Order::find($orderId);
        $orderItems = Orderdetail::where('order_id', $orderId)->get()->toArray();
        //$orderVals = Order::where('id', $orderId)->()->toArray();
        $newOderTotal = 0;
        $newLaundryPriceTotal = 0;
        foreach ($orderItems as $key => $val) {
            $newOderTotal = $newOderTotal + $val['total_paid_price'];
            $newLaundryPriceTotal = $newLaundryPriceTotal + $val['total_paid_laundry_price'];
        }
        //       $newOderFinalTotal = ($newOderTotal + $orderVals['delivery_charges'] + $orderVals['sorting_fee']) - ($orderVals['discount']);
//        $orderMain->subtotal = $newOderTotal;
//        $orderMain->total = $newOderFinalTotal;
        $orderMain->laundry_total_price = $newLaundryPriceTotal;
        $orderMain->save();
        return $orderMain;
    }

    public function deleteOrderDetail(Request $request)
    {
        $detailId = $request->get('detail_id');
        $orderId = Orderdetail::find($detailId)->order_id;
        Orderdetail::find($detailId)->delete();
        //Update in orders
        $orderItems = Orderdetail::where('order_id', $orderId)->get()->toArray();
        $orderVals = Order::where('id', $orderId)->first()->toArray();
        $newOderTotal = 0;
        foreach ($orderItems as $key => $val) {
            $newOderTotal = $newOderTotal + $val['total_paid_price'];
        }
        $newOderFinalTotal = ($newOderTotal + $orderVals['delivery_charges']) - $orderVals['discount'];
        $orderSummery = Order::find($orderId);
        $orderSummery->subtotal = $newOderTotal;
        $orderSummery->total = $newOderFinalTotal;
        $orderSummery->save();
        $this->updateMainOrderFromDetail($orderId);
        $orderUpdate = Order::find($orderId)->with('detail', 'user', 'status', 'driver')->get();
        return response()->json([
            'success' => true,
            'order' => $orderUpdate
        ]);
    }


    public function sendReciept(Request $request)
    {
        $orderId = $request->get('order_id');
        $order = Order::where('id', $orderId)
            ->with(['user', 'driver', 'detail' => function ($q) {
                $q->with('product', 'service');
            }])
            ->first()
            ->toArray();

        $deviceToken = array_column(Device::where('deviceable_id', $order['user_id'])
            ->get(['device_token'])
            ->toArray(), 'device_token');

        $pdf = \PDF::loadView('emails.order-receipt-pdf', ['order' => $order]);
        $data['attachment'] = $pdf->output();
        $data['attachment_name'] = $order['invoice_num'] . '.pdf';
        $data['invoice_num'] = $order['invoice_num'];
        $data['email'] = $order['user']['email'];
        $mail = new SendEmail();
        $mail->sendWithTemplate($data, 6);
        if (empty($deviceToken)) {

        } else {
            sendPushNotificationToFCMSever($deviceToken,
                'Hey! We have sent your revised invoice to your email. Please check it out.',
                $order['id']);
        }
        return response()->json(['success' => true]);
    }


    public
    function sendNotification(Request $request)
    {
        $orderId = $request->get('order_id');
        $order = Order::where('id', $orderId)
            ->with(['user', 'status', 'driver', 'detail' => function ($q) {
                $q->with('product', 'service');
            }])
            ->first()
            ->toArray();
        $pushRes = $this->sendPushMessage($order);
        return response()->json($pushRes);
    }

    /**
     * Send notification to customer regarding his order status
     * @param $order - Must have user, driver and status
     * @return bool|\Illuminate\Http\JsonResponse
     */
    public
    function sendPushMessage($order)
    {
        $statusText = $order['status'];
        $deviceToken = array_column(Device::where('deviceable_id', $order['user_id'])
            ->get(['device_token'])
            ->toArray(), 'device_token');
        if (empty($deviceToken)) {
            return false;
        }
        $statusText['status_description'] = \Config::get('constants.default_pushnoti');

        return sendPushNotificationToFCMSever($deviceToken, $statusText['status_description'], $order['id']);
    }

    /**
     * Return discounted price
     * @param $couponId
     * @param $price
     * @return mixed
     */
    public
    function applyCoupon($couponCode = NULL, $price)
    {
        if (empty($couponCode)) {
            $data['discount'] = (double)0;
            $data['coupon_id'] = NULL;
            $data['applied_discount'] = (double)0;
            $data['discount_val'] = (double)0;
            $data['discount_type'] = NULL;
            return $data;
        }

        $actualPrice = $price;
        $coupon = [];
        $coupon['discount'] = 0;
        $coupon['id'] = NULL;
        $discount = 0;
        $coupon = Coupon::where('code', $couponCode)
            ->select('discount', 'discount_type', 'id')
            ->where('valid_from', '<=', Carbon::now())
            ->where('valid_till', '>=', Carbon::now())
            ->where('min_purchase', '<=', $price)
            ->orderBy('id', 'desc')
            ->first();
        $data['discount_type'] = NULL;
        if (!empty($coupon)) {
            $coupon = $coupon->toArray();
            if ($coupon['discount_type'] == Coupon::PERCENTAGE) {
                $discount = $actualPrice - ($actualPrice * ($coupon['discount'] / 100));
            } else {
                $discount = $actualPrice - $coupon['discount'];
            }
            $data['discount_type'] = $coupon['discount_type'];
        }

        $discount = abs(round($discount, 0));
        $data['discount'] = $discount;
        $data['coupon_id'] = $coupon['id'];
        $data['applied_discount'] = abs($discount - $actualPrice);
        $data['discount_val'] = (double)empty($coupon['discount']) ? 0 : $coupon['discount'];
        return $data;
    }


    function removeCoupon(Request $request)
    {
        $orderId = $request->get('order_id');
        $orderOrigPrice = $this->getOrderOrignalPrice($orderId);
        $orderTotalAfterDiscount = $orderOrigPrice + $request->get('sorting_fee') + $request->get('delivery_charges');

        $order = Order::find($orderId);
        $order->coupon_id = NULL;
        $order->discount = 0;
        $order->discount_type = NULL;
        $order->subtotal = $orderOrigPrice;
        $order->total = $orderTotalAfterDiscount;
        $order->save();
        //Update main order and remove all things
        $this->updateMainOrderFromDetail($orderId);
        return response()->json(['success' => true]);
    }

    public function getOrderOrignalPrice($orderId)
    {
        $orderItems = Orderdetail::where('order_id', $orderId)->get()->toArray();
        $newOderTotal = 0;
        $newLaundryPriceTotal = 0;
        foreach ($orderItems as $key => $val) {
            $newOderTotal = $newOderTotal + $val['total_paid_price'];
            $newLaundryPriceTotal = $newLaundryPriceTotal + $val['total_paid_laundry_price'];
        }
        return $newOderTotal;
    }
}
