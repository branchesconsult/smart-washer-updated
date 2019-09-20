<?php

namespace App\Listeners\Frontend\Order;

use App\Events\Frontend\Order\orderCreate;
use App\Http\Utilities\SendEmail;
use App\Models\Access\User\User;
use App\Models\Device\Device;
use App\Models\Order\Order;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
////FCM
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use FCM;

class orderCreateListener implements ShouldQueue
{

    /**
     * @var string
     */
    private $history_slug = 'Order';

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * @param $event
     */
    public function logHistory($event)
    {
        history()->withType($this->history_slug)
            ->withEntity($event->order->id)
            ->withText('trans("history.backend.orders.created") <strong>' . $event->order->invoice_num . '</strong>')
            ->withIcon('plus')
            ->withClass('bg-green')
            ->withAssets([
                //'orders_link' => ['admin.orders.show', $event->order->invoice_num, $event->order->id],
            ])
            ->log();
    }

    /**
     * Handle the event.
     *
     * @param  orderCreate $event
     * @return void
     */
    public function handle(orderCreate $event)
    {
        $driverId = $event->order->driver_id;
        $this->sendPushMessage($driverId, $event->order);
        $this->sendEmail($event->order);
        $this->logHistory($event);
    }

    public function sendPushMessage($driver_id, $orderObj = NULL)
    {
        $driverDevices = array_column(Device::where('deviceable_id', $driver_id)
            ->get(['device_token'])
            ->toArray(), 'device_token');
        if (empty($driverDevices)) {
            return false;
        }
//        $orderCount = Order::where('driver_id', $driver_id)
//            ->where('orderstatus_id', Order::PENDING)
//            ->get()
//            ->count();
        return sendPushNotificationToFCMSever($driverDevices, "Order pending for Pick Up", $orderObj->id);
    }

    public function sendEmail($order)
    {
        $orderDetail = Order::where('id', $order->id)
            ->with('user')->first();
        $mail = new SendEmail();
        $data['email'] = $orderDetail->user->email;
        $emailType = 0;
        if ($orderDetail->skip_by_client == 1) {
            $emailType = 7;
        } else {
            $emailType = 5;
            $orderId = $order->id;
            $order = Order::where('id', $orderId)
                ->with(['user', 'driver', 'detail' => function ($q) {
                    $q->with('product', 'service');
                }])
                ->first()
                ->toArray();
            $pdf = \PDF::loadView('emails.order-receipt-pdf', ['order' => $order]);
            $data['attachment'] = $pdf->output();
            $data['attachment_name'] = $order['invoice_num'] . '.pdf';
            $data['invoice_num'] = $order['invoice_num'];
        }
        $mail->sendWithTemplate($data, $emailType);
    }
}
