<?php

namespace App\Listeners\Frontend\Order;

use App\Events\Backend\Order\orderUpdate;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class orderUpdateListener
{
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
     * Handle the event.
     *
     * @param  orderUpdate $event
     * @return void
     */
    public function handle(orderUpdate $event)
    {
        //
    }
}
