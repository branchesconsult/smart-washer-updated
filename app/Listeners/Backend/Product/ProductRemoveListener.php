<?php

namespace App\Listeners\Backend\Product;

use App\Events\Backend\Product\ProductRemove;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProductRemoveListener
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
     * @param  ProductRemove  $event
     * @return void
     */
    public function handle(ProductRemove $event)
    {
        //
    }
}
